@props(['comment'])

<x-panel class="bg-gray-50">
<article class="flex gap-2 ">
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
</x-panel>
