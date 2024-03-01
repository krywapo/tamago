<div {{ $attributes }} class="px-2 rounded">
    @if($postTitle)
        <h3 class="font-bold text-xl mb-2">{!! $postTitle !!}</h3>
    @endif

    @if($postTime)
        <div class="time px-0 py-1 text-sm font-semibold text-gray-700">{!! $postTime !!}</div>
    @endif

    @if($postImage)
        <figure class="w-full">{!! $postImage !!}</figure>
    @endif

    @if($postExcerpt)
        <div class="excerpt text-gray-700 text-base py-4">{!! $postExcerpt !!}</div>
    @endif

    @if($postLink)
        <a class="inline-block bg-gray-200 rounded-full px-5 py-3 text-sm font-semibold text-gray-700" href="{!! $postLink !!}">Zobacz więcej</a>
    @endif
</div>
