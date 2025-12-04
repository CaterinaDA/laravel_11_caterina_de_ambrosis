<x-layout>

    <header class="container-fluid py-5 bg-dark text-light mb-4">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="text-center display-4 fw-bold">Registrazione</h1>
                <p class="text-center text-secondary mb-0">
                    Crea un account per pubblicare e modificare gli articoli
                </p>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="row justify-content-center mb-3">
            <div class="col-12 col-md-6">
                <x-display-errors />
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <form action="{{ route('register') }}" method="POST"
                    class="p-4 shadow rounded bg-dark text-light border border-secondary">
                    @csrf

                    <div class="mb-3">
                        <label for="name" class="form-label">Nome</label>
                        <input type="text" name="name" class="form-control bg-dark text-light border-secondary"
                            id="name">
                    </div>

                    <div class="mb-3">
                        <label for="email1" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control bg-dark text-light border-secondary"
                            id="email1" aria-describedby="emailHelp">
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control bg-dark text-light border-secondary"
                            id="password">
                    </div>

                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Conferma Password</label>
                        <input type="password" name="password_confirmation"
                            class="form-control bg-dark text-light border-secondary" id="password_confirmation">
                    </div>

                    <button type="submit" class="btn btn-outline-light">Registrati</button>
                </form>
            </div>
        </div>
    </div>

</x-layout>
