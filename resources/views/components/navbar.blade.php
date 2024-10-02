<nav class="navbar sticky-top navbar-expand-lg bg-black shadow py-3">
    <div class="container-fluid">
        <a href="" class="navbar-brand fs-3 fw-semibold text-warning">Aurofolio</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item">
                    <x-nav-link :active="request()->is('home')" href="/">Home</x-nav-link>
                </li>
                <li class="nav-item">
                    <x-nav-link :active="request()->is('project')" href="{{ route('project') }}">Projects</x-nav-link>
                </li>
                <li class="nav-item">
                    <x-nav-link :active="request()->is('about')" href="{{ route('about') }}">About</x-nav-link>
                </li>
            </ul>
        </div>
    </div>
</nav>
