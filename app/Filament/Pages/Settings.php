<?php

namespace App\Filament\Pages;

use App\Forms\Components\CustomPlasceHolder;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Pages\Page;


class Settings extends Page
{
    /**
     * Passo para customização de paginas:
     * Creating a page [https://filamentphp.com/docs/3.x/panels/pages]
     *      - php artisan make:filament-page Settings
     * Options [Creating a custom theme]
     *      - Pode modificar o theme do filament (opcional)
     * Form schemas [https://filamentphp.com/docs/3.x/forms/adding-a-form-to-a-livewire-component]
     *      - Adicionando o esquema de formulario do filament
     *              - {{ $this->form }}
     *
     * Custom fields [https://filamentphp.com/docs/3.x/forms/fields/custom]
     *      - php artisan make:form-field CustomPlasceHolder
     *              - app/forms/Components
     *              - resources/views/forms/components
     *
     *
     * Group::make([
        Placeholder::make('Title')
        ->columnSpan(1),
        TextInput::make('title')
        ->required()
        ->hiddenLabel()
        ->columnSpan(5),
        ])->columns(6),
    */
    protected static ?string $navigationIcon = 'heroicon-o-document-text';


    protected static ?string $navigationLabel = "Configurações";

    protected static string $view = 'filament.pages.settings';

    public ?array $data = [];

    public function mount(): void
    {
        $this->form->fill();
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                CustomPlasceHolder::make('title')
                ->label('Informações gerais')
                ->content('Pagina de personalização do perfil de usuário.'),


//            Section::make()->schema([
//                FileUpload::make('attachment'),
//            ]),

            Section::make()->schema([
                Grid::make()->schema(self::primary()),

            ]),



                Grid::make(3)->schema([
                    TextInput::make('name')
                        ->label('Nome')
                        ->required()
                        ->maxLength(255),
                    TextInput::make('quantity')
                        ->label('Quantidade')
                        ->minValue(1)
                        ->required()
                        ->numeric(),
                    Section::make()->schema([
                        FileUpload::make('image')
                            ->name('Imagem')
                            ->image()
                            ->required(),
                    ]),
                ])->columns(3),


                Grid::make(2)->schema([
                    RichEditor::make('description')
                        ->label('Descrição')
                        ->required()
                        ->maxLength(255),
                ])->columns(1),


                FileUpload::make('image')
                    ->name('Imagem')
                    ->image()
                    ->required(),

                Select::make('category_id')
                    ->label('Categoria')
                    ->relationship('category', 'name')
                    ->searchable()
                    ->required(),


//                Group::make([
//                    TextInput::make('name')
//                        ->required()
//                        ->label('Nome'),
//                    TextInput::make('email')
//                        ->required()
//                        ->label('E-mail')
//
//                ])->columns(2),



            ])->statePath('data');
    }

    protected static function primary(): array
    {
        return [
            Group::make()->schema([
                TextInput::make('Name')->required()->label('Name'),
                TextInput::make('cpf')->required()->label('CPF'),
            ]),

        ];
    }

    protected static function sidebar(): array
    {
        return [
            FileUpload::make('attachment'),
        ];
    }

    public function create(): void
    {
        dd($this->form->getState());
    }
}
