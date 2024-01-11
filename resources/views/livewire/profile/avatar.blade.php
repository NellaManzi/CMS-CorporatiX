<div class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
    <div class="items-center sm:flex xl:block 2xl:flex sm:space-x-4 xl:space-x-0 2xl:space-x-4">

        <form wire:submit="update({{$user->id}})">
            @if($photo)
                <img wire:model="photo" src="{{ $photo->temporaryUrl()}}" alt="{{$user->name}}" class="mb-4 rounded-lg w-28 h-28 sm:mb-0 xl:mb-4 2xl:mb-0" >
            @else
                <img wire:model.live="photo" src="{{ asset('storage/'. $user->avatar)}}" alt="{{$user->name}}" class="mb-4 rounded-lg w-28 h-28 sm:mb-0 xl:mb-4 2xl:mb-0" >
            @endif
            <div>
                <h3 class="mb-1 text-xl font-bold text-gray-900 dark:text-white">Imagem de perfil</h3>
                <div class="mb-4 text-sm text-gray-500 dark:text-gray-400">
                    JPG, GIF or PNG. Max size of 800K
                </div>
                <div class="flex items-center space-x-4">

                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload file</label>
                    <input type="file" wire:model="photo" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="file_input_help" id="file_input" type="file">
                    <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG or GIF (MAX. 800x400px).</p>



                    <button type="submit" class="py-2 px-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                        salvar
                    </button>
                    @error('photo') <span class="error">{{ $message }}</span> @enderror
                </div>
            </div>
        </form>

    </div>
</div>
