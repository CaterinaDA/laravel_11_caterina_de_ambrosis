<div class="card h-100 bg-dark text-light border-secondary shadow-sm">
    <div class="card-body d-flex flex-column">
        <h5 class="card-title">{{ $article->title }}</h5>
        <h6 class="card-subtitle mb-2 text-muted">{{ $article->subtitle }}</h6>

        <p class="card-text mt-3 flex-grow-1">
            {{ \Illuminate\Support\Str::limit($article->body, 150) }}
        </p>

        <a href="{{ route('article.show', compact('article')) }}" class="btn btn-outline-light mt-3">
            Leggi tutto
        </a>
    </div>
</div>
