<?php

namespace App\Filament\Pages;

use App\Forms\Components\CustomPlasceHolder;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Placeholder;
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



                        Section::make()
                            ->columns(2)
                            ->schema([

                                Grid::make(2)
                                    ->schema([
                                        Section::make()
                                            ->columns([
                                                'sm' => 1,
                                                'xl' => 2,
                                                '2xl' => 2,
                                            ])
                                            ->schema([
                                                TextInput::make('name'),
                                                // ...
                                            ]),

                                        Section::make()
                                            ->columns([
                                                'sm' => 1,
                                                'xl' => 2,
                                                '2xl' => 2,
                                            ])
                                            ->schema([
                                                TextInput::make('name'),
                                                // ...
                                            ]),
                                    ])->columns(2),


                                Grid::make(2)
                                    ->schema([
                                        Section::make()
                                            ->columns([
                                                'sm' => 1,
                                                'xl' => 2,
                                                '2xl' => 2,
                                            ])
                                            ->schema([
                                                TextInput::make('name'),
                                                // ...
                                            ]),

                                        Section::make()
                                            ->columns([
                                                'sm' => 1,
                                                'xl' => 2,
                                                '2xl' => 2,
                                            ])
                                            ->schema([
                                                TextInput::make('name'),
                                                // ...
                                            ]),
                                    ])->columns(2),

                            ]),


                        Section::make()
                            ->columns([
                                'sm' => 1,
                                'xl' => 2,
                                '2xl' => 2,
                            ])
                            ->schema([

                                Grid::make(2)
                                    ->schema([
                                        Section::make()
                                            ->columns([
                                                'sm' => 1,
                                                'xl' => 2,
                                                '2xl' => 2,
                                            ])
                                            ->schema([
                                                TextInput::make('name'),
                                                // ...
                                            ]),

                                        Section::make()
                                            ->columns([
                                                'sm' => 1,
                                                'xl' => 2,
                                                '2xl' => 2,
                                            ])
                                            ->schema([
                                                TextInput::make('name'),
                                                // ...
                                            ]),
                                    ])->columns(2),


                                Grid::make(2)
                                    ->schema([
                                        Section::make()
                                            ->columns([
                                                'sm' => 1,
                                                'xl' => 2,
                                                '2xl' => 2,
                                            ])
                                            ->schema([
                                                TextInput::make('name'),
                                                // ...
                                            ]),

                                        Section::make()
                                            ->columns([
                                                'sm' => 1,
                                                'xl' => 2,
                                                '2xl' => 2,
                                            ])
                                            ->schema([
                                                TextInput::make('name'),
                                                // ...
                                            ]),
                                    ])->columns(2),

                            ]),



                CustomPlasceHolder::make('title')
                ->label('General information | ' . auth()->user()->name)
                ->content('Best option for personal use & for your next project.'),

                Group::make([
                    TextInput::make('name')
                        ->required()
                        ->label('Nome'),
                    TextInput::make('email')
                        ->required()
                        ->label('E-mail')

                ])->columns(2),

                Grid::make(2)
                    ->schema([
                        TextInput::make('teste')
                            ->required()
                            ->label('teste'),
                        TextInput::make('teste')
                            ->required()
                            ->label('teste'),
                    ])

            ])->statePath('data');
    }

    public function create(): void
    {
        dd($this->form->getState());
    }
}
