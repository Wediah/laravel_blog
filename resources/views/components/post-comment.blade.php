@props(['comment'])

<article class="flex gap-2 bg-gray-100 p-6 rounded-xl border border-gray-200">
    <div class="flex-shrink-0">
        <img src="https://i.pravatar.cc/100?u={{ $comment->id }}" alt="" class="rounded-xl">
    </div>

    <div>
        <header class="mb-4">
            <h3 class="font-bold">{{ $comment->author->username }}</h3>
            <p class="text-xs">
                <time>
                    {{ $comment->created_at->diffForHumans() }}
                </time>
            </p>
        </header>

        <p>
            {{ $comment->body }}
        </p>
    </div>
</article>
