<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ArticleResource\Pages;
use App\Filament\Resources\ArticleResource\RelationManagers;
use App\Models\Article;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Tabs\Tab;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\Section as SectionInfo;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Infolist;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\BooleanColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Filament\Forms\Components\Builder;
use Filament\Forms\Get;


class ArticleResource extends Resource
{
    protected static ?string $model = Article::class;

    protected static ?string $navigationGroup = "Blog";

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    /**
     * Form create or edit article
     */
    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                // ** Title and slug
                TextInput::make('title')->label('Título do artigo')
                    ->required()
                    ->live()
                    ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug($state)))

                TextInput::make('slug')->disabled()->unique('articles', 'slug'),

                Select::make('status')
                    ->hintIcon('heroicon-m-question-mark-circle', tooltip: 'Selecione o status do seu artigo.')->hintColor('primary')
                    ->options([
                        'draft'             => 'Rascunho',
                        'published'         => 'Publicar',
                        'pending review'    => 'Pendente para analise',
                        'scheduled'         => 'Programado',
                        'private'           => 'Privado'
                    ])
                    ->live()
                    ->required(),

                DateTimePicker::make('published_at')->hidden(fn (Get $get) => $get('status') !== 'published'),

                DateTimePicker::make('scheduled_for')->hidden(fn (Get $get) => $get('status') !== 'scheduled'),

                Tabs::make('Create article')->tabs([

                    Tab::make('Configurações do artigo')
                        ->icon('heroicon-m-inbox')
                        ->schema([

                            Select::make('tags')
                                ->label('Tags')
                                ->multiple()
                                ->preload()
                                ->relationship('tags', 'name'),

                            Select::make('user_id')
                                ->label('Autor')
                                ->preload()
                                ->relationship('author', 'name'),

                            Select::make('category_id')
                                ->label('Categoria')
                                ->preload()
                                ->relationship('category', 'name'),


                            FileUpload::make('featured_image_url')
                                ->label('Imagem do artigo')
                                ->required()
                                ->disk('public')
                                ->directory('image_posts')
                                ->columnSpanFull(),

                        ])->columns(3),

                    Tab::make('Conteudo')
                        ->icon('heroicon-m-inbox')
                        ->schema([
                            TextInput::make('subTitle')->label('Sub Titulo')
                                ->required(),

                            Textarea::make('summary')->label('Resumo')
                                ->required(),

                            RichEditor::make('content')
                                ->toolbarButtons([
                                    'attachFiles',
                                    'blockquote',
                                    'bold',
                                    'bulletList',
                                    'codeBlock',
                                    'h1',
                                    'h2',
                                    'h3',
                                    'italic',
                                    'link',
                                    'orderedList',
                                    'redo',
                                    'strike',
                                    'underline',
                                    'undo',
                                ])
                                ->maxLength(65535)
                                ->columnSpanFull(),
                        ])

                ])->columnSpanFull()->activeTab(1)->persistTabInQueryString(),

                Section::make('Rate limiting')
                    ->description('Prevent abuse by limiting the number of requests per period')
                    ->schema([
                        // ...
                    ])
            ]);
    }

    /**
     *
     */
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')->limit(20)->sortable()->searchable(),
                TextColumn::make('category.name')->label('Categoria'),
                TextColumn::make('author.name'),
                TextColumn::make('tags.name')->badge(),
                BooleanColumn::make('published_at'),


            ])
            ->filters([
                SelectFilter::make('status')->options([
                    'draft'             => 'Rascunho',
                    'published'         => 'Publicar',
                    'pending review'    => 'Pendente para analise',
                    'scheduled'         => 'Programado',
                    'private'           => 'Privado'
                ]),

                SelectFilter::make('category_id')
                    ->label('Categorias')
                    ->relationship('category', 'name')->preload()
                    ->multiple(),

                SelectFilter::make('tags')
                    ->label('tags')
                    ->relationship('tags', 'name')->preload()
                    ->multiple(),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    /**
     * Creating a resource with a View page
     * links developer:
     * https://filamentphp.com/docs/3.x/panels/resources/viewing-records
     */
    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([

                SectionInfo::make([
                    TextEntry::make('title')
                        ->size('lg')->weight('bold')->hiddenLabel(),
                    ImageEntry::make('featured_image_url')

                ])->columnSpan(2),

                SectionInfo::make([

                ])->columnSpan(1),

            ])->columns(3);
    }

    /**
     *
     */
    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    /**
     *
     */
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListArticles::route('/'),
            'create' => Pages\CreateArticle::route('/create'),
            'view' => Pages\ViewArticle::route('/{record}'),
            'edit' => Pages\EditArticle::route('/{record}/edit'),
        ];
    }
}

