<section class="bg-white py-8 dark:bg-gray-800">
    <div class="container mx-auto flex flex-wrap pt-4 pb-6">
        <h2 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800 dark:text-white">
            {{$title}}
        </h2>
        <div class="w-full mb-4">
            <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
        </div>

        @foreach($articles as $article)
            <div class="mx-auto max-w-md overflow-hidden rounded-lg bg-white shadow mt-4">
                <img src="{{asset("storage/".$article->featured_image_url)}}"
                     class="aspect-video w-full object-cover" alt=""/>
                <div class="p-4">
                    <p class="mb-1 text-sm text-primary-500">{{$article->author->name}} • <time>{{$article->created_at}}</time>
                        | <span class="bg-purple-100 text-purple-800 text-xs font-medium me-4 px-2 py-0.5 rounded dark:bg-purple-900 dark:text-purple-300">
                            {{$article->category->name}}
                        </span>
                    <h3 class="text-xl font-medium text-gray-900">{{$article->title}}</h3>
                    <p class="mt-1 text-gray-500">{{$article->subTitle}}.</p>
                    <div class="mt-4 flex gap-2">
                        @foreach($article->tags as $tag)
                            <span class="inline-flex items-center gap-1 rounded-full bg-blue-50 px-2 py-1 text-xs font-semibold text-blue-600">
                            {{$tag->name}}
                        </span>
                        @endforeach
                    </div>
                </div>
            </div>
        @endforeach

    </div>
    <div class="container mx-auto flex flex-wrap pt-1">
        <a href="#" class="ml-10 inline-flex items-center font-medium text-primary-600 hover:text-primary-800 dark:text-primary-500 dark:hover:text-primary-700">
            Veja mais
            <svg class="ml-1 w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
        </a>
    </div>

</section>
