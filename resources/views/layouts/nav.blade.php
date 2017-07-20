<div class="blog-masthead">
    <div class="container">
        <nav class="nav blog-nav">
            <a class="nav-link active" href="/">Home</a>
            <a class="nav-link" href="/posts">Posts</a>
            @if (!Auth::check())
            <a class="nav-link" href="/login">Login</a>
            <a class="nav-link" href="/register">Register</a>
            @else
            <a class="nav-link" href="/posts/create">Create Post</a>
            @endif
            <a class="nav-link" href="#">About</a>
            @if (Auth::check())
                <a class="nav-link ml-auto" href="#">{{ Auth::user()->name }}</a>
                <a class="nav-link" href="/logout">Logout</a>
            @endif
        </nav>
    </div>
</div>