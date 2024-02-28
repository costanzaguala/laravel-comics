@php
$linksFooter =[
    'DC COMICS'=>[
        'Characters',
        'Comics',
        'Movie',
        'TV',
        'Games',
        'Videos',
        'News'
    ],
    'DC'=>[
        'Terms Of Use',
        'Privacy policy(New)',
        'Ad Choices',
        'Advertising',
        'Jobs',
        'Subscriptions',
        'Talent Workshops',
        'CPSC Certificates',
        'Ratings',
        'Shop Help',
        'Contact Us'
    ],
    'SITES'=>[
        'DC',
        'MAD Magazine',
        'DC Universe',
        'DC Power Visa'
    ],
    'SHOP'=>[
        'Shop DC',
        'Shop DC collectibles'
    ]
]
@endphp

<footer>
    <section class="container">
        <div class="text-white d-flex">
            <div class="row g-0 align-content-between">
                <div class="col">
                    <ul class="d-flex flex-wrap">
                        @foreach($linksFooter as $key => $link)
                        <li class="m-3">
                            <h5>
                                {{$key}}
                            </h5>
                            <ul>
                                @foreach($link as $key=> $elem)
                                <li>
                                    {{$elem}}
                                </li>
                                @endforeach
                            </ul>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <p class="container">
                    All Site Content TIM and 2020 DC Entertaiment, unless otherwise <a class=" underline"href="">noted here</a> . All rights reserverd.<br><a href="">Cookies Settigs</a>
                </p>
            </div>

            <div class="right-side">
                <img src="{{ Vite::asset('resources/img/dc-logo-bg.png')}}" alt="...">
            </div>
        </div>
    </section>
</footer>