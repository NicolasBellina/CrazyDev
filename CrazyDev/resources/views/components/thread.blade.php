<a class="thread {{ $isMainThread ? 'main-thread' : '' }}" href="{{ route('posts.show', ['id' => $postId]) }}">
    <div class="thread-title-inline">
        <span class="thread-title">{{ $title }}</span>
        <span class="author">· par <span class="author-name">{{ $author }}</span></span>
    </div>
    @isset($excerpt)
        <span class="thread-short-extract">{{ $excerpt }}</span>
    @endisset
    <span class="timestamp">publié le {{ $timestamp }}</span>
</a>
