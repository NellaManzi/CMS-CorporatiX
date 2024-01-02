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
                ->content('Pagina de personalização do perfil de usuário.')->columnSpan(3),

                /**
                 * ASIDE COMPONENTS
                */
                Group::make()->schema([
                    Section::make()->schema([
                        CustomPlasceHolder::make('title')
                            ->label('Profile picture')
                            ->content('JPG, GIF or PNG. Max size of 800K'),
                        FileUpload::make('avatar')
                            ->disk('public')
                            ->directory('thumbnails')
                            ->disableLabel(),
                    ]),

                    Section::make()->schema([
                        CustomPlasceHolder::make('title')
                            ->label('Profile picture')
                            ->content('JPG, GIF or PNG. Max size of 800K'),
                        FileUpload::make('avatar')
                            ->disk('public')
                            ->directory('thumbnails')
                            ->disableLabel(),
                    ]),

                ])->columnSpan(1)->columns(1),



                /**
                 * CONTENTS COMPONENTS
                 */
                Group::make()
                    ->schema([
                        Section::make()->schema([
                                TextInput::make('name')
                                    ->label('Nome')
                                    ->required(),
                                TextInput::make('email')
                                    ->label('E-mail')
                                    ->disabled(),
                                TextInput::make('name')
                                    ->label('Nome')
                                    ->required(),
                                TextInput::make('email')
                                    ->label('E-mail')
                                    ->disabled(),
                                TextInput::make('name')
                                    ->label('Nome')
                                    ->required(),
                                TextInput::make('email')
                                    ->label('E-mail')
                                    ->disabled(),
                            ])->columnSpan(2)->columns(2),

                        Section::make()->schema([
                                TextInput::make('name')
                                    ->label('Nome')
                                    ->required(),
                                TextInput::make('email')
                                    ->label('E-mail')
                                    ->disabled(),
                                TextInput::make('name')
                                    ->label('Nome')
                                    ->required(),
                                TextInput::make('email')
                                    ->label('E-mail')
                                    ->disabled(),
                                TextInput::make('name')
                                    ->label('Nome')
                                    ->required(),
                                TextInput::make('email')
                                    ->label('E-mail')
                                    ->disabled(),
                            ])->columnSpan(2)->columns(2),

                    ])->columnSpan(2)->columns(2),


            ])->statePath('data')->columns(3);
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
