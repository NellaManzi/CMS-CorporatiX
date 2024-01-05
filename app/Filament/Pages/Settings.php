<?php

namespace App\Filament\Pages;

use App\Forms\Components\CustomPlasceHolder;
use App\Models\Setting;
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
    */
    protected static ?string $navigationIcon = 'heroicon-o-document-text';


    protected static ?string $navigationLabel = "Configurações";

    protected static string $view = 'filament.pages.settings';

    public Setting $settings;
    public ?array $data = [];

    public function mount(): void
    {
        $this->settings = Setting::find(1);
        $this->form->fill([
            'header_name' => $this->settings->header_name,
            'header_title' => $this->settings->header_title,
            'header_description' => $this->settings->header_description,
            'section_title' => $this->settings->section_title,
            'section_subtitle' => $this->settings->section_subtitle,
            'section_description' => $this->settings->section_description,
            'footer_phone' => $this->settings->footer_phone,
            'footer_email' => $this->settings->footer_email,
            'section_about' => $this->settings->section_about,
        ]);
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
                        FileUpload::make('header_logo_url')
                            ->disk('public')
                            ->directory('setting_images'),
                    ]),

                    // ** Password
                    Section::make()->schema([

                        CustomPlasceHolder::make('password')
                            ->label('Password information')
                            ->content('Atualização de senha de segurança')->columnSpan(2),

//                        TextInput::make('setting')
//                            ->label('Senha atual')
//                            ->password(),


                    ])->columnSpan(1),

                ])->columnSpan(1)->columns(1),



                /**
                 * CONTENTS COMPONENTS
                 */
                Group::make()
                    ->schema([

                        // ** Data user
                        Section::make()->schema([
                                TextInput::make('header_name')
                                    ->label('header_name'),
                                TextInput::make('header_title')
                                    ->label('header_title'),
                                TextInput::make('header_description')
                                    ->label('header_description'),
                                TextInput::make('section_title')
                                    ->label('section_title'),
                                TextInput::make('section_subtitle')
                                    ->label('section_subtitle'),
                            TextInput::make('section_description')
                                    ->label('section_description'),
                            TextInput::make('footer_phone')
                                    ->label('footer_phone')->mask('(99) 99999-9999'),
                            TextInput::make('footer_email')
                                    ->label('footer_email'),
                                RichEditor::make('section_about')
                                    ->label('section_about')->columnSpan(2),

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

            $this->settings->update($data);

            Notification::make()
                ->title('Configurações gerais finalizadas com sucesso!')
                ->body('Todos processos solicitados foram feitos...')
                ->success()
                ->send();
        }catch (\Exception $e){
            Notification::make()
                ->title('Erro ao tentar enviar')
                ->body('Algum erro ocorreu ao tentar atualizar as configurações gerais...' . $e->getMessage())
                ->danger()
                ->send();
        }
    }
}
