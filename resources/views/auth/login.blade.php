@extends('auth.layouts.guest')

@section('content')

    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8 text-gray-800 dark:text-white">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm mt-6">
            <img class="mx-auto h-10 w-auto" src="{{asset('image/readme/logo479x118.png')}}" alt="logo intranet login">
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form method="POST" action="{{ route('login') }}" class="space-y-6">
                @csrf
                @method('POST')

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
                <a href="{{ route('web.landing') }}" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">Home</a>?
            </p>


            <div class="flex text-center items-center gap-3 sm:gap-x-5 justify-center mt-8">
                <button class="bg-white dark:bg-gray-900 dark:border-gray-700 dark:hover:bg-gray-800 rounded-lg hover:bg-gray-100 duration-300 transition-colors border px-8 py-2.5">
                    <svg class="w-5 h-5 sm:h-6 sm:w-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_3033_94454)">
                            <path d="M23.766 12.2764C23.766 11.4607 23.6999 10.6406 23.5588 9.83807H12.24V14.4591H18.7217C18.4528 15.9494 17.5885 17.2678 16.323 18.1056V21.1039H20.19C22.4608 19.0139 23.766 15.9274 23.766 12.2764Z" fill="#4285F4"/>
                            <path d="M12.2401 24.0008C15.4766 24.0008 18.2059 22.9382 20.1945 21.1039L16.3276 18.1055C15.2517 18.8375 13.8627 19.252 12.2445 19.252C9.11388 19.252 6.45946 17.1399 5.50705 14.3003H1.5166V17.3912C3.55371 21.4434 7.7029 24.0008 12.2401 24.0008Z" fill="#34A853"/>
                            <path d="M5.50253 14.3003C4.99987 12.8099 4.99987 11.1961 5.50253 9.70575V6.61481H1.51649C-0.18551 10.0056 -0.18551 14.0004 1.51649 17.3912L5.50253 14.3003Z" fill="#FBBC04"/>
                            <path d="M12.2401 4.74966C13.9509 4.7232 15.6044 5.36697 16.8434 6.54867L20.2695 3.12262C18.1001 1.0855 15.2208 -0.034466 12.2401 0.000808666C7.7029 0.000808666 3.55371 2.55822 1.5166 6.61481L5.50264 9.70575C6.45064 6.86173 9.10947 4.74966 12.2401 4.74966Z" fill="#EA4335"/>
                        </g>
                        <defs>
                            <clipPath id="clip0_3033_94454">
                                <rect width="24" height="24" fill="white"/>
                            </clipPath>
                        </defs>
                    </svg>
                </button>

                <button class="bg-[#1877F2] rounded-lg hover:bg-[#1877F2]/80 duration-300 transition-colors border border-transparent px-8 py-2.5">
                    <svg class="w-5 h-5 sm:h-6 sm:w-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_3033_94669)">
                            <path d="M24 12C24 5.37258 18.6274 0 12 0C5.37258 0 0 5.37258 0 12C0 17.9895 4.3882 22.954 10.125 23.8542V15.4688H7.07812V12H10.125V9.35625C10.125 6.34875 11.9166 4.6875 14.6576 4.6875C15.9701 4.6875 17.3438 4.92188 17.3438 4.92188V7.875H15.8306C14.34 7.875 13.875 8.80008 13.875 9.75V12H17.2031L16.6711 15.4688H13.875V23.8542C19.6118 22.954 24 17.9895 24 12Z" fill="white"/>
                        </g>
                        <defs>
                            <clipPath id="clip0_3033_94669">
                                <rect width="24" height="24" fill="white"/>
                            </clipPath>
                        </defs>
                    </svg>
                </button>

                <button class="bg-black rounded-lg hover:bg-black/80 duration-300 transition-colors border border-transparent px-8 py-2.5">
                    <svg class="w-5 h-5 sm:h-6 sm:w-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M20.8426 17.1449C20.5099 17.9135 20.1161 18.6211 19.6598 19.2715C19.0378 20.1583 18.5286 20.7721 18.1361 21.113C17.5277 21.6724 16.8759 21.959 16.1779 21.9753C15.6768 21.9753 15.0725 21.8327 14.3691 21.5434C13.6633 21.2555 13.0148 21.113 12.4217 21.113C11.7998 21.113 11.1327 21.2555 10.4193 21.5434C9.70469 21.8327 9.12904 21.9834 8.68892 21.9984C8.01957 22.0269 7.35239 21.7322 6.68644 21.113C6.26139 20.7422 5.72974 20.1067 5.09285 19.2063C4.40951 18.2449 3.84772 17.13 3.4076 15.8589C2.93624 14.486 2.69995 13.1565 2.69995 11.8694C2.69995 10.3951 3.01853 9.12345 3.65665 8.05784C4.15815 7.20191 4.82533 6.52672 5.66035 6.03105C6.49537 5.53539 7.39761 5.2828 8.36925 5.26664C8.9009 5.26664 9.59809 5.43109 10.4645 5.75429C11.3284 6.07858 11.8832 6.24303 12.1264 6.24303C12.3082 6.24303 12.9245 6.05074 13.9692 5.66738C14.9571 5.31186 15.7909 5.16466 16.474 5.22264C18.3249 5.37202 19.7155 6.10167 20.6402 7.41619C18.9849 8.4192 18.166 9.82403 18.1823 11.6262C18.1972 13.03 18.7065 14.1981 19.7073 15.1256C20.1609 15.5561 20.6674 15.8888 21.231 16.1251C21.1087 16.4795 20.9797 16.819 20.8426 17.1449ZM16.5975 0.440369C16.5975 1.54062 16.1956 2.56792 15.3944 3.51878C14.4275 4.64917 13.258 5.30236 11.9898 5.19929C11.9736 5.06729 11.9642 4.92837 11.9642 4.78239C11.9642 3.72615 12.424 2.59576 13.2406 1.67152C13.6483 1.20356 14.1667 0.814453 14.7955 0.504058C15.4229 0.198295 16.0163 0.0292007 16.5744 0.000244141C16.5907 0.147331 16.5975 0.294426 16.5975 0.440355V0.440369Z" fill="white"/>
                    </svg>
                </button>
            </div>

        </div>
    </div>


@endsection
