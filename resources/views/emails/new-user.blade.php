<!doctype html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
    <title>Document</title>
</head>
<body>
    <section class="max-w-2xl px-6 py-8 mx-auto bg-white dark:bg-gray-900">
    <header>
        <a href="#">
            <img class="w-auto h-7 sm:h-8" src="https://merakiui.com/images/full-logo.svg" alt="">
        </a>
    </header>

    <main class="mt-8">
        <h2 class="text-gray-700 dark:text-gray-200">Olá, {{$user->name}}</h2>

        <p class="mt-2 leading-loose text-gray-600 dark:text-gray-300">
            Seu acesso ao app foi <span class="font-semibold ">liberado!</span>.
        </p>

        <a href="{{route('web.landing')}}" class="px-6 py-2 mt-4 text-sm font-medium tracking-wider text-white capitalize transition-colors duration-300 transform bg-blue-600 rounded-lg hover:bg-blue-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">
            Acesse agora!
        </a>

        <p class="mt-8 text-gray-600 dark:text-gray-300">
            E-mail: {{$user->email}}<br>
            Senha: {{$secret}}
        </p>
    </main>


    <footer class="mt-8">
        <p class="text-gray-500 dark:text-gray-400">
            Em seu primeiro acesso ao portal, <a href="{{route('web.landing')}}" class="text-blue-600 hover:underline dark:text-blue-400" target="_blank">{{$app}}</a>,
            sugerimos atualizar seu dados e modificar sua senha. <br>
            <a href="#" class="text-blue-600 hover:underline dark:text-blue-400">unsubscribe</a> or <a href="#" class="text-blue-600 hover:underline dark:text-blue-400">manage your email preferences</a>.
        </p>

        <p class="mt-3 text-gray-500 dark:text-gray-400">© {{ date('Y') }} {{$app}}</p>
    </footer>
</section>
</body>
</html>

