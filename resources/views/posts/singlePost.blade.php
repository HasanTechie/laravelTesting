<div class="blog-post">
    <h2 class="blog-post-title"><a href="/posts/3">{{ $post->title }}</a></h2>
    <p class="blog-post-meta">{{$post->user->name}} on {{ $post->created_at->toFormattedDateString() }}</p>

    <p>{{ $post->body }}</p>
</div><!-- /.blog-post -->
<hr>