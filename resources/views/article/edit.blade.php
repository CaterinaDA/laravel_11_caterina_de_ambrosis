<x-layout>

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6">

                <h1 class="text-light mb-4">Modifica articolo</h1>

                <x-display-errors />

                <form method="POST" action="{{ route('article.update', $article) }}" enctype="multipart/form-data"
                    class="p-4 rounded bg-dark text-light border border-secondary shadow">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo</label>
                        <input type="text" name="title" id="title"
                            class="form-control bg-dark text-light border-secondary"
                            value="{{ old('title', $article->title) }}">
                    </div>

                    <div class="mb-3">
                        <label for="subtitle" class="form-label">Sottotitolo</label>
                        <input type="text" name="subtitle" id="subtitle"
                            class="form-control bg-dark text-light border-secondary"
                            value="{{ old('subtitle', $article->subtitle) }}">
                    </div>

                    <div class="mb-3">
                        <label for="body" class="form-label">Contenuto</label>
                        <textarea name="body" id="body" rows="8" class="form-control bg-dark text-light border-secondary">{{ old('body', $article->body) }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="img" class="form-label">Immagine</label>
                        <input type="file" name="img" id="img" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-outline-light">
                        Salva modifiche
                    </button>
                </form>

            </div>
        </div>
    </div>

</x-layout>
