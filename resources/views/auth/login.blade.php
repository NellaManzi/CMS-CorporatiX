@extends('auth.layouts.guest')

@section('content')

    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8 text-gray-800 dark:text-white">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm mt-6">
            <img class="mx-auto h-10 w-auto" src="{{asset('image/readme/logo479x118.png')}}" alt="logo intranet login">
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form method="POST" action="{{ route('login') }}" class="space-y-6">
                @csrf
                    <div>
                        <label for="email" class="block text-sm font-medium leading-6">Endereço de e-mail</label>
                        <div class="mt-2">
                            <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                   autofocus autocomplete="username" value="rafaelblum_digital@hotmail.com" required>
                        </div>
                    </div>

                    <div>
                        <div class="flex items-center justify-between">
                            <label for="password" class="block text-sm font-medium leading-6">Senha</label>
                            <div class="text-sm">
                                <a href="#" class="font-semibold text-indigo-600 hover:text-indigo-500">Esqueceu da sua senha?</a>
                            </div>
                        </div>
                        <div class="mt-2">
                            <input type="password" name="password" id="password" placeholder="••••••••"
                                   autocomplete="current-password" value="123"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                   required>
                        </div>
                    </div>

                    <div>
                        <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                            Acessar
                        </button>
                    </div>
            </form>

            <p class="mt-10 text-center text-sm">
                Voltar para
                <a href="{{ route('web.home') }}" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">Home</a>?
            </p>
        </div>
    </div>


@endsection
