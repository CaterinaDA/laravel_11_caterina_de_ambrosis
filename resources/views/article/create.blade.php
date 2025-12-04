<x-layout>

    <header class="container-fluid py-5 bg-dark text-light mb-4">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="text-center display-4 fw-bold">Crea un nuovo articolo</h1>
                <p class="text-center text-secondary mb-0">
                    Compila i campi per aggiungere un nuovo post al blog
                </p>
            </div>
        </div>
    </header>

    <div class="container">
        {{-- errori --}}
        <div class="row justify-content-center mb-3">
            <div class="col-12 col-md-8 col-lg-6">
                <x-display-errors />
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6">
                <form method="POST" action="{{ route('article.store') }}" enctype="multipart/form-data"
                    class="p-4 rounded bg-dark text-light border border-secondary shadow">
                    @csrf

                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo</label>
                        <input type="text" name="title" id="title"
                            class="form-control bg-dark text-light border-secondary" value="{{ old('title') }}">
                    </div>

                    <div class="mb-3">
                        <label for="subtitle" class="form-label">Sottotitolo</label>
                        <input type="text" name="subtitle" id="subtitle"
                            class="form-control bg-dark text-light border-secondary" value="{{ old('subtitle') }}">
                    </div>

                    <div class="mb-3">
                        <label for="body" class="form-label">Contenuto</label>
                        <textarea name="body" id="body" rows="8" class="form-control bg-dark text-light border-secondary">{{ old('body') }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="img" class="form-label">Immagine</label>
                        <input type="file" name="img" id="img" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-outline-light">
                        Crea articolo
                    </button>
                </form>
            </div>
        </div>
    </div>

</x-layout>
