<div>
    @foreach($articles as $article)
        <div class="mx-auto max-w-md overflow-hidden rounded-lg bg-white shadow">
            <img src="https://images.unsplash.com/photo-1552581234-26160f608093?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1000&q=80"
                    class="aspect-video w-full object-cover" alt=""/>
            <div class="p-4">
                <p class="mb-1 text-sm text-primary-500">{{$article->author->name}} • <time>{{$article->created_at}}</time> | <span class="inline-flex items-center gap-1 rounded-full bg-orange-50 px-2 py-1 text-xs font-semibold text-blue-600">{{$article->category->name}}</span></p>
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

