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
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use App\Models\User;


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

    public User $user;
    public ?array $data = [];

    public function mount(): void
    {
        $this->user = auth()->user();
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

                    // ** Avatar user
                    Section::make()->schema([
                        CustomPlasceHolder::make('title')
                            ->label('Profile picture')
                            ->content('JPG, GIF or PNG. Max size of 800K'),
                        FileUpload::make('avatar')
                            ->disk('public')
                            ->directory('thumbnails')
                            ->disableLabel(),
                    ]),

                    // ** Password
                    Section::make()->schema([

                        CustomPlasceHolder::make('password')
                            ->label('Password information')
                            ->content('Atualização de senha de segurança')->columnSpan(2),

                        TextInput::make('password')
                            ->label('Senha atual')
                            ->password()
                            ->required(),


                    ])->columnSpan(1),

                ])->columnSpan(1)->columns(1),



                /**
                 * CONTENTS COMPONENTS
                 */
                Group::make()
                    ->schema([

                        // ** Data user
                        Section::make()->schema([
                                TextInput::make('user.name')
                                    ->label('Nome')
                                    ->required(),
                                TextInput::make('user.email')
                                    ->label('E-mail')
                                    ->disabled(),
                                TextInput::make('user.status')
                                    ->label('Status do usuário')
                                    ->required(),
                                TextInput::make('user.birth')
                                    ->label('Data anisversário'),
                                TextInput::make('name')
                                    ->label('Nome'),
                            TextInput::make('user.marital_status')
                                    ->label('Estado civil'),
                            TextInput::make('user.phone')
                                    ->label('Fone')->mask('(99) 99999-9999'),
                            TextInput::make('user.branch_line')
                                    ->label('Ramal')->numeric()->mask('9999'),
                                RichEditor::make('user.bio')
                                    ->label('Biografia')->columnSpan(2),

                            /**
                             * last_acess - Important
                            */

                            ])->columnSpan(2)->columns(2),



                    ])->columnSpan(2)->columns(2),


            ])->statePath('data')->columns([
                    'default' => 2,
                    'sm' => 1,
                    'md' => 2,
                    'lg' => 2,
                    'xl' => 2,
                    '2xl' => 2
            ]);
    }



    public function submit(): void
    {
        $data = $this->form->getState();
        try{

            $this->user->update($data);

            Notification::make()
                ->title('Usuário processado com sucesso!')
                ->body('Usuário processado com sucesso!')
                ->success()
                ->send();
        }catch (\Exception $e){
            Notification::make()
                ->title('Erro ao tentar enviar')
                ->body('Erro:' . $e->getMessage())
                ->danger()
                ->send();
        }
    }
}
