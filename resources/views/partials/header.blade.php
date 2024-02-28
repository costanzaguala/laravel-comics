@php
$linksHeader = [
        [
            'url' => '/characters',
            'label' => 'characters',
        ],
        [
            'url' => '/comics',
            'label' => 'comics',
        ],
        [
            'url' => '/movies',
            'label' => 'movies',
        ],
        [
            'url' => '/tv',
            'label' => 'tv',
        ],
        [
            'url' => '/games',
            'label' => 'games',
        ],
        [
            'url' => '/collectibles',
            'label' => 'collectibles',
        ],
        [
            'url' => '/videos',
            'label' => 'videos',
        ],
        [
            'url' => '/fans',
            'label' => 'fans',
        ],
        [
            'url' => '/news',
            'label' => 'news',
        ],
        [
            'url' => '/shop',
            'label' => 'shop',
        ],
    ];
@endphp

<header>
    <section id="announcement-bar">
        <div class="container d-flex justify-content-end text-white p-1">
            <div class="me-5">
                DC POWER VISA
            </div>
            <div>
                ADDITIONAL DC SITES
            </div>
        </div>
    </section>
    <section>
        <nav class="container d-flex align-items-center p-3">
            <div class="col">
                <div class="logo-container">
                    <img class="dc-logo" src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
                </div>
            </div>
            <ul class="h-100 d-flex list-unstyled justify-content-between align-items-center flex-grow-1 mx-5">
                @foreach ($linksHeader as $link)
                    <li class="h-100">
                        <a href="{{ $link['url'] }}">
                            {{ $link['label'] }}
                        </a>
                    </li>

                @endforeach
            </ul>
            <div>
                <form class="d-flex" role="search">
                    <input class="bs-black me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
            </div>
        </nav>
    </section>
</header>