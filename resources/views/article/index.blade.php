<x-layout>

    <header class="container-fluid py-5 bg-dark text-light mb-4">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="text-center display-4 fw-bold">I nostri articoli</h1>
                <p class="text-center text-secondary mb-0">
                    Scopri gli ultimi post pubblicati sul blog
                </p>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="row mb-3">
            <div class="col-12">
                <x-display-message />
            </div>
        </div>

        <main class="row g-4 mb-5">
            @foreach ($articles as $article)
                <div class="col-12 col-md-6 col-lg-4">
                    <x-article-card :article="$article" />
                </div>
            @endforeach
        </main>
    </div>

</x-layout>
