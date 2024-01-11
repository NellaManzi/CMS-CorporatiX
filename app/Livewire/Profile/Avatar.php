<?php

namespace App\Livewire\Profile;

use App\Models\User;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\Attributes\Rule;
use App\Livewire\Forms\UpdateAvatarForm;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use Livewire\WithFileUploads;

class Avatar extends Component
{
    use WithFileUploads;
    public $user;

    /**
     *@var TemporaryUploadedFile|mixed $image
     */
    #[Rule('nullable|max:1024', message: 'Image obrigatória ou o tamanho é maior que 1024MB.')]
    public $photo;

    public function mount(User $user)
    {
        $this->user = $user;
//        $this->photo = $this->user->avatar;
    }

    public function render()
    {
        return view('livewire.profile.avatar');
    }

    public function save()
    {
        if($this->avatar){
            if ($this->user->avatar) {

                // Verifique se o arquivo de imagem existe antes de tentar excluí-lo
                if (Storage::exists('storage/'.$this->user->avatar)) {
                    Storage::delete('storage/'.$this->user->avatar);
                }
            }

            // Salva a nova imagem
            $this->user->avatar = $this->avatar->store('public/storage/thumbnails');

            // Remova o prefixo "public/" do caminho da imagem
            $this->user->avatar = Str::replaceFirst('storage/', '', $this->user->avatar);
        }

        $this->user->update([
            'avatar'   => $this->avatar
        ]);

        $this->reset('product', 'price', 'image');

        return redirect()->route('gallerys.index')
            ->with('status', 'Produto atualizado com sucesso!');
    }

    public function update(User $user)
    {
        try{
            /**
             * Verificando se o usuário escolheu atualizar a imagem.
             */


            if($this->photo){

                if ($this->user->avatar) {
                    dd(Storage::exists('/public/storage/'.$this->user->avatar));
                    // Verifique se o arquivo de imagem existe antes de tentar excluí-lo
                    //public/storage/thumbnails/01HK7WWGMHC4RT2G1HSHT8ARZG.jpg
                    if (Storage::exists('storage/'.$this->user->avatar)) {
                        Storage::delete('storage/'.$this->user->avatar);
                    }
                }

                // Salva a nova imagem
                $this->user->avatar = $this->photo->store('storage');

                // Remova o prefixo "public/" do caminho da imagem
                $this->user->avatar = Str::replaceFirst('storage/', '', $this->user->avatar);
            }

            return '';
        }catch (\Exception $e){
            if(env('APP_DEBUG')){
                dd($e->getMessage());
                return redirect()->back();
            }
            return redirect()->back();
        }

    }
}
