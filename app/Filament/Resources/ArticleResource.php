<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ArticleResource\Pages;
use App\Filament\Resources\ArticleResource\RelationManagers;
use App\Models\Article;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Tabs\Tab;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\BooleanColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Pest\Support\Closure;
use Psy\Util\Str;

class ArticleResource extends Resource
{
    protected static ?string $model = Article::class;

    protected static ?string $navigationGroup = "Blog";

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                    Forms\Components\TextInput::make('title')
                        ->maxLength(150)
                        ->afterStateUpdated(function (Closure $set, $state) {
                            $set('slug', Str::slug($state));
                        })->required(),

                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(100)
                    ->live()
                    ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', \Illuminate\Support\Str::slug($state))),

                Tabs::make('Criar novo post')->tabs([

                    Tab::make('Image data')
                        ->icon('heroicon-m-inbox')
                        ->badge('Teste')
                        ->schema([
                            TagsInput::make('tags')
                                ->required()
                                ->suggestions([
                                    'tailwindcss',
                                    'alpinejs',
                                    'laravel',
                                    'livewire',
                                ]),
                            Toggle::make('published_at')
                                ->required(),
                            FileUpload::make('featured_image_url')
                                ->disk('public')
                                ->directory('featured_image')->columnSpanFull(),
                        ]),

                    Tab::make('Conteudo')
                        ->icon('heroicon-m-inbox')
                        ->schema([
                            RichEditor::make('content')
                                ->columnSpanFull()
                                ->maxLength(65535)
                                ->columnSpanFull(),
                        ])

                ])->columnSpanFull()->activeTab(1)->persistTabInQueryString(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('title')->limit(20)->sortable()->searchable(),
                TextColumn::make('slug')->limit(50)->sortable()->searchable(),
                ImageColumn::make('image'),
                BooleanColumn::make('published_at')->searchable(),


            ])
            ->filters([
                //
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

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListArticles::route('/'),
            'create' => Pages\CreateArticle::route('/create'),
            'edit' => Pages\EditArticle::route('/{record}/edit'),
        ];
    }
}
