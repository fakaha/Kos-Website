<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>

<body>

    <nav class="mb-70 navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('images/logo.png') }}" height="48" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" aria-current="page"
                            href="{{ route('index') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Categories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Testimonials</a>
                    </li>
                </ul>
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="btn btn-secondary" href="#">Sign In</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="header mb-70">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="jumbo-header mb-30">
                        Cari Kos Kosan<br>
                        Nyaman & Murmer
                    </h1>
                    <p class="paragraph mb-30">
                        Lorem house ipsum could be a reall good home<br>
                        without thinking si amet dolor safety around.
                    </p>
                    <p class="mb-50"><a href="#" class="btn btn-primary">Explore Houses</a></p>
                    <div class="row stats text-center">
                        <div class="col-lg-4 item">
                            <h3 class="big-header">
                                23,491
                            </h3>
                            <p class="paragraph">
                                Koskosan
                            </p>
                        </div>
                        <div class="col-lg-4 item">
                            <h3 class="big-header">
                                983
                            </h3>
                            <p class="paragraph">
                                Awards
                            </p>
                        </div>
                        <div class="col-lg-4 item">
                            <h3 class="big-header">
                                182M+
                            </h3>
                            <p class="paragraph">
                                Happy People
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('images/banner.png') }} " alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <section class="best-items">
        <div class="container">
            <div class="row text-center mb-50">
                <div class="col-lg-12">
                    <img src="{{ asset('images/ic_best.svg') }}" height="42" alt="" class="mb-16">
                    <h3 class="big-header">
                        Best of The Best
                    </h3>
                    <p class="paragraph">
                        Dolor space comfortable moments
                    </p>
                </div>
            </div>
            <!-- <div class="row"> -->
            {{--
                @component('components.house_card')
                    @slot('cover', 'images/house2.png')
                    @slot('title', 'Saung Udjo')
                    @slot('price', '783')
                    @slot('location', 'lembang')
                    @slot('review', '4.5')
                @endcomponent
                --}}
            <!-- </div> -->
            <div class="row">
                <div class="col-lg-3">
                    <div class="item">
                        <a href="{{ route('landing.details') }}">
                            <img src="{{ asset('images/house1.png') }}" alt="" class="img-fluid">
                        </a>
                        <div class="info">
                            <a href="{{ route('landing.details', 'waterloo') }}">
                                <h3 class="small-header mb-2">
                                    Grand coast Office PIK
                                </h3>
                            </a>
                            <div class="footer">
                                <div class="location d-flex flex-row ">
                                    <img src="{{ asset('images/ic_loc.svg') }}" height="20" alt="">
                                    <p class="small-paragraph mb-0">
                                        Exnoparty
                                    </p>
                                </div>
                                @php
                                $hasBooked = true;
                                @endphp
                                <div class="price">
                                    <p class="mb-0">
                                        {{ $hasBooked ? 'sold out' : '$28,109' }}
                                        <span class="extra-small-paragraph">
                                            {{ $hasBooked ? '' : '/mo' }}
                                        </span>
                                    </p>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="item">
                        <a href="">
                            <img src="{{ asset('images/house2.png') }}" alt="" class="img-fluid">
                        </a>
                        <div class="info">
                            <a href="">
                                <h3 class="small-header mb-2">
                                    Coral Brown
                                </h3>
                            </a>
                            <div class="footer">
                                <div class="location d-flex flex-row ">
                                    <img src="{{ asset('images/ic_loc.svg') }}" height="20" alt="">
                                    <p class="small-paragraph mb-0">
                                        Exnoparty
                                    </p>
                                </div>
                                <div class="price">
                                    <p class="mb-0">
                                        $28,109<span class="extra-small-paragraph">/mo</span>
                                    </p>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="item">
                        <a href="">
                            <img src="{{ asset('images/house3.png') }}" alt="" class="img-fluid">
                        </a>
                        <div class="info">
                            <a href="">
                                <h3 class="small-header mb-2">
                                    Coral Brown
                                </h3>
                            </a>
                            <div class="footer">
                                <div class="location d-flex flex-row ">
                                    <img src="{{ asset('images/ic_loc.svg') }}" height="20" alt="">
                                    <p class="small-paragraph mb-0">
                                        Exnoparty
                                    </p>
                                </div>
                                <div class="price">
                                    <p class="mb-0">
                                        $28,109<span class="extra-small-paragraph">/mo</span>
                                    </p>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="item">
                        <a href="">
                            <img src="{{ asset('images/house4.png') }}" alt="" class="img-fluid">
                        </a>
                        <div class="info">
                            <a href="">
                                <h3 class="small-header mb-2">
                                    Coral Brown
                                </h3>
                            </a>
                            <div class="footer">
                                <div class="location d-flex flex-row ">
                                    <img src="{{ asset('images/ic_loc.svg') }}" height="20" alt="">
                                    <p class="small-paragraph mb-0">
                                        Exnoparty
                                    </p>
                                </div>
                                <div class="price">
                                    <p class="mb-0">
                                        $28,109<span class="extra-small-paragraph">/mo</span>
                                    </p>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="item">
                        <a href="">
                            <img src="{{ asset('images/house5.png') }}" alt="" class="img-fluid">
                        </a>
                        <div class="info">
                            <a href="">
                                <h3 class="small-header mb-2">
                                    Coral Brown
                                </h3>
                            </a>
                            <div class="footer">
                                <div class="location d-flex flex-row ">
                                    <img src="{{ asset('images/ic_loc.svg') }}" height="20" alt="">
                                    <p class="small-paragraph mb-0">
                                        Exnoparty
                                    </p>
                                </div>
                                <div class="price">
                                    <p class="mb-0">
                                        $28,109<span class="extra-small-paragraph">/mo</span>
                                    </p>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="item">
                        <a href="">
                            <img src="{{ asset('images/house6.png') }}" alt="" class="img-fluid">
                        </a>
                        <div class="info">
                            <a href="">
                                <h3 class="small-header mb-2">
                                    Coral Brown
                                </h3>
                            </a>
                            <div class="footer">
                                <div class="location d-flex flex-row ">
                                    <img src="{{ asset('images/ic_loc.svg') }}" height="20" alt="">
                                    <p class="small-paragraph mb-0">
                                        Exnoparty
                                    </p>
                                </div>
                                <div class="price">
                                    <p class="mb-0">
                                        $28,109<span class="extra-small-paragraph">/mo</span>
                                    </p>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="item">
                        <a href="">
                            <img src="{{ asset('images/house7.png') }}" alt="" class="img-fluid">
                        </a>
                        <div class="info">
                            <a href="">
                                <h3 class="small-header mb-2">
                                    Coral
                                </h3>
                            </a>
                            <div class="footer">
                                <div class="location d-flex flex-row ">
                                    <img src="{{ asset('images/ic_loc.svg') }}" height="20" alt="">
                                    <p class="small-paragraph mb-0">
                                        Exnoparty
                                    </p>
                                </div>
                                <div class="price">
                                    <p class="mb-0">
                                        $28,109<span class="extra-small-paragraph">/mo</span>
                                    </p>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="item">
                        <a href="">
                            <img src="{{ asset('images/house8.png') }}" alt="" class="img-fluid">
                        </a>
                        <div class="info">
                            <a href="">
                                <h3 class="small-header mb-2">
                                    Coral Brown
                                </h3>
                            </a>
                            <div class="footer">
                                <div class="location d-flex flex-row ">
                                    <img src="{{ asset('images/ic_loc.svg') }}" height="20" alt="">
                                    <p class="small-paragraph mb-0">
                                        Exnoparty
                                    </p>
                                </div>
                                <div class="price">
                                    <p class="mb-0">
                                        $28,109<span class="extra-small-paragraph">/mo</span>
                                    </p>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


</body>

</html>