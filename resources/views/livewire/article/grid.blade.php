<div>
    @foreach($articles as $article)
        <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink dark:bg-gray-800">
            <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow dark:bg-gray-700">
                <a href="#" class="flex flex-wrap no-underline hover:no-underline">
                    <p class="w-full text-gray-600 text-xs md:text-sm px-6 dark:text-white">
                        {{$article->title}}
                    </p>
                    <div class="w-full font-bold text-xl text-gray-800 px-6 dark:text-white">
                        Lorem ipsum dolor sit amet.
                    </div>
                    <p class="text-gray-800 text-base px-6 mb-5 dark:text-gray-400">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at ipsum eu nunc commodo posuere et sit amet ligula.
                    </p>
                </a>
            </div>
            <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6 dark:bg-gray-700">
                <div class="flex items-center justify-center">
                    <button class="mx-auto lg:mx-0 hover:underline dark:bg-indigo-400/50 text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                        Action
                    </button>
                </div>
            </div>
        </div>
    @endforeach
</div>
