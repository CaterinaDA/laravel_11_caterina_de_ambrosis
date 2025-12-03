<x-layout>

    <div class="container py-5 text-light">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">

                <a href="{{ route('article.index') }}" class="btn btn-outline-secondary mb-4">
                    ← Torna agli articoli
                </a>

                <div class="d-flex gap-2 mb-3">
                    <a href="{{ route('article.edit', $article) }}" class="btn btn-outline-light">
                        Modifica
                    </a>

                    <form method="POST" action="{{ route('article.destroy', $article) }}">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-outline-danger">
                            Elimina
                        </button>
                    </form>
                </div>

                <article class="bg-dark border border-secondary rounded p-4 shadow-sm">
                    <h1 class="mb-2">{{ $article->title }}</h1>
                    <h4 class="text-secondary mb-4">{{ $article->subtitle }}</h4>

                    <p class="fs-5 mb-0">
                        {{ $article->body }}
                    </p>
                </article>

            </div>
        </div>
    </div>

</x-layout>
