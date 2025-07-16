<div>
    <section class="banner position-relative pb-0">
        <div class="overlay"></div>
        <div class="container">
            <div class="inner-banner position-relative text-white ">
                <div class="row">
                    <div class="col-lg-6 order-2 order-lg-1">
                        <div class="banner-left text-center pb-lg-5 p-md-0">
                            <div class="banner-image">
                                <div id="carouselFlyer" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        @foreach ($flyers as $index => $flyer)
                                        <div class="carousel-item {{$index === 0 ? 'active' : '' }}">
                                            <img src="{{asset('storage/' . $flyer->image)}}" alt="banner-image"
                                                class="w-75 rounded-4">
                                            @if ($flyer->caption != null)

                                            <div class="carousel-caption d-none d-md-block">
                                                <a href="{{$flyer->caption}}" class="btn"><small> Registration <i
                                                            class="fa fa-angle-double-right"></i></small></a>
                                            </div>
                                            @endif
                                        </div>
                                        @endforeach
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselFlyer"
                                        data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselFlyer"
                                        data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>

                            </div>
                            <div class="countdown">
                                <div id="countdown"
                                    class="countdown-inner d-flex w-100 bg-white p-2 rounded-5 justify-content-center box-shadow position-relative z-2">
                                    <div class="time m-auto py-4 ">
                                        <span id="days" class="lh-1 h1 fw-bold"></span><br>
                                        <small class="text-secondary">Days</small>
                                    </div>

                                    <div class="time  m-auto py-4">
                                        <span id="hours" class="lh-1 h1 fw-bold"></span><br>
                                        <small class="text-secondary">Hours</small>
                                    </div>

                                    <div class="time  m-auto py-4">
                                        <span id="minutes" class="lh-1 h1 fw-bold"></span><br>
                                        <small class="text-secondary">Minutes</small>
                                    </div>

                                    <div class="time  m-auto py-4">
                                        <span id="seconds" class="lh-1 h1 fw-bold"></span><br>
                                        <small class="text-secondary">Seconds</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2">
                        <div class="banner-right  ms-2 text-center text-lg-start pb-8">
                            <div class="banner-title pb-3">
                                <img src="assets/images/logo/3.png" class="w-75 mb-3" alt="Logo-asosiasi">
                                <h4 class="text-white pb-3"><span class="kuning">48<sup>th</sup></span> Annual
                                    Scientific Meeting of</h4>
                                <h1 class="text-white">Indonesian <span class="kuning">Urological</span> Association
                                </h1>
                            </div>
                            <div class="banner-event-info pb-3">
                                <ul
                                    class="m-0 ps-0 d-sm-flex justify-content-center justify-content-lg-start list-unstyled">
                                    <li class="pe-2 border-end border-1 border-lightgrey">
                                        <i class="fa  fa-calendar-o pe-1"></i> 25-27 SEPTEMBER 2025
                                    </li>
                                    <li class="ps-2">
                                        <i class="fa  fa-map-marker pe-1"></i> Medan, North Sumatra
                                    </li>
                                </ul>
                            </div>
                            <div class="event-discription">
                                <p class="pb-4 m-0 fst-italic fw-bold">" ASMIUA 48: Shaping the Future of Urology in
                                    Indonesia "</p>
                                <div class="banner-button">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <a class="btn me-3 my-1 w-100 text-uppercase"
                                                href="/registration">REGISTER</a>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <a class="btn btn2 my-1 w-100 text-uppercase" href="/visiting">read more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="wave overflow-hidden position-absolute w-100 z-0">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none"
                class="d-block position-relative">
                <path class="elementor-shape-fill" d="M790.5,93.1c-59.3-5.3-116.8-18-192.6-50c-29.6-12.7-76.9-31-100.5-35.9c-23.6-4.9-52.6-7.8-75.5-5.3
          c-10.2,1.1-22.6,1.4-50.1,7.4c-27.2,6.3-58.2,16.6-79.4,24.7c-41.3,15.9-94.9,21.9-134,22.6C72,58.2,0,25.8,0,25.8V100h1000V65.3
          c0,0-51.5,19.4-106.2,25.7C839.5,97,814.1,95.2,790.5,93.1z"></path>
            </svg>
        </div>

    </section>

    <section class="overview pb-0">
        <div class="container">

            <div class="inner-overview pb-10 position-relative border-dashed-bottom-2">
                <div class="row">
                    @if ($runnings->isNotEmpty())
                    <span class="badge rounded-pill text-dark bg-kuning py-2 fs-5 mb-3">
                        <marquee behavior="" direction="">
                            @foreach ($runnings as $text)
                            {{$text->title}} ~~
                            @endforeach
                        </marquee>
                    </span>
                    @endif
                    <div class="col-lg-6">
                        <div class="overview-left text-center text-lg-start">
                            <div class="overview-title pb-4">
                                <img src="assets/images/logo/3.png" class="w-100 mb-3" alt="Logo-asosiasi">
                                <img src="assets/images/logo/2.png" alt="Logo" class="w-50 mb-3">
                                <p>48<sup>th</sup> Annual Scientific Meeting of Indonesian Urological Association</p>
                                <p class="mb-2 fst-italic">" ASMIUA 48: Shaping the Future of Urology in Indonesia "</p>

                                <p class="mb-0 opacity-70"><small>Organized by</small></p>
                                <p><small>Indonesian Urological Association (InaUA)</small></p>
                            </div>
                            <div class="overview-event-info pb-6 g-4 text-start position-absolute">
                                <div class="row justify-content-around ">
                                    <div class="col-lg-6 col-md-6">
                                        <a>
                                            <div
                                                class="event-info-box align-items-center d-flex p-4 rounded bg-white box-shadow my-2">
                                                <div class="event-info-icon text-center">
                                                    <i
                                                        class="fa fa-calendar-o  text-white bg-kuning rounded-circle me-3"></i>
                                                </div>
                                                <div class="time-info">
                                                    <small>Thursday To Saturday <br> Sept, 25-27, 2025</small>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <a>
                                            <div
                                                class="event-info-box align-items-center d-flex p-4 rounded bg-white box-shadow my-2">
                                                <div class="event-info-icon text-center ">
                                                    <i
                                                        class="fa fa-map-marker  text-white bg-kuning rounded-circle me-3"></i>
                                                </div>
                                                <div class="location-info">
                                                    <small>Santika Premiere Dyandra Hotel & Convention, Medan, North
                                                        Sumatra</small>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="overview-img">
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-md-6 p-0 ">
                                    <div class="container-img-left mb-2">
                                        <div class="img-left-1 float-end w-lg-80">
                                            <img class="mb-2 w-100 rounded" src="assets/images/group/1.jpg"
                                                alt="group-image">
                                        </div>
                                        <div class="img-left-2">
                                            <img src="assets/images/group/2.jpg" alt="group-image"
                                                class="w-100 rounded">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="container-img-right w-lg-75">
                                        <img src="assets/images/group/3.jpg" alt="group-image" class="w-100 rounded">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="partners">
        <div class="container">
            <div class="partner-inner">
                <div class="partner-title text-center pb-6 w-lg-60 m-auto">
                    <p class="mb-1 kuning">48<sup>th</sup> ASMIUA</p>
                    <h2 class="mb-1">important <span class="kuning">Dates</span></h2>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-10 offset-lg-1">
                        <livewire:section.important-date />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="feature text-white position-relative z-0 start-0">
        <div class="overlay z-n1">
        </div>
        <div class="container">
            <div class="feature-inner">
                <div class="counter text-center border-bottom border-white border-opacity-25">
                    <div class="inner-counter mb-7">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 p-2 ">
                                <div class="counter-box p-2 border-end border-white border-opacity-25">
                                    <h1 class="text-white m-0"><span class="num" data-val="100"></span><span>+</span>
                                    </h1>
                                    <p>Speakers</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 p-2">
                                <div class="counter-box p-2 border-end border-white border-opacity-25">
                                    <h1 class="text-white m-0"><span class="num" data-val="50"></span><span>+</span>
                                    </h1>
                                    <p>Symposium</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 p-2">
                                <div class="counter-box p-2 border-end border-white border-opacity-25">
                                    <h1 class="text-white m-0"><span class="num" data-val="10"></span><span>+</span>
                                    </h1>
                                    <p>Workshops</p>
                                </div>
                            </div>
                            <!-- <div class="col-lg-3 col-md-3 p-2">
                                <div class="p-2">
                                    <h1 class="text-white m-0"><span class="num" data-val="300"></span><span>+</span></h1>
                                    <p class="mb-0">Journalist</p>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
                <div class="general-ques mt-5">
                    <div class="row">
                        {{-- <div class="col-lg-6 order-2 order-lg-1 p-2">
                            <div class="general-ques-left text-white">
                                <div class="general-ques-image text-center">
                                    <img src="assets/images/team/4.png" alt="faq-general-image" class="w-50"><br>
                                </div>
                                <div class="speaker-statement-box p-4 rounded bg-blue w-lg-80 mb-mi">
                                    <div class="speaker-statement ps-4 border-start border-white border-7">
                                        <p><small>" Congress Chairman "</small></p>
                                        <h6 class="text-white">Name</h6>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        <h2 class="mb-2 text-white text-center">Welcome <span class="kuning">message </span></h2>
                        @foreach ($messages as $message)
                        <div class="col-lg-6 order-1 order-lg-2 p-4">
                            <div class="general-ques-right">
                                <div class="section-title pb-4 text-center text-lg-start">
                                    {!! Str::limit(str($message->description)->markdown()->sanitizeHtml(), 500) !!}
                                    <a href="/welcome-message#{{$message->id}}" class="kuning"><i
                                            class="fa fa-angle-right fs-6"></i> Read More...</a>
                                </div>
                                <div class="speaker-statement-box p-4 rounded bg-blue w-lg-80 mb-mi">
                                    <div class="speaker-statement ps-4 border-start border-white border-7">
                                        <p><small>" {{$message->title}} "</small></p>
                                        <h6 class="text-white">{{$message->name}}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </section>

    <livewire:section.competition />

    <section class="partners ">
        <div class="container border-dashed-bottom-2 pb-10">
            <div class="partner-inner ">
                <div class="partner-title text-center pb-6 w-lg-60 m-auto">
                    <p class="mb-1 kuning">48<sup>th</sup> ASMIUA</p>
                    <h2 class="mb-1">SPONSors</h2>
                </div>
                <div class="partner-img">
                    <div class="row row-cols-1 row-cols-lg-5 row-cols-md-5 ">
                        @foreach ($sponsors as $sponsor)
                        <div class="col p-0 border-end border-sm-0">
                            <div class="p-2 partner-img-box text-center">
                                <a href="{{$sponsor->website ? $sponsor->website : 'javascript:void(0)'}}"
                                    target="_blank">
                                    {!! $sponsor->logo ? '<img src="' . asset('storage/' . $sponsor->logo) . '"
                                        class="img-fluid opacity-75" alt="' . $sponsor->company . '" />' : '<small
                                        class="text-center text-blue">' . $sponsor->company . '</small>' !!}
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="partner-button text-center">
                    <a class="btn" href="/sponsors">VIEW MORE Sponsors</a>
                </div>
            </div>
        </div>
    </section>

    <section class="direction pb-0">
        <div class="container">
            <div class="section-title text-center pb-2 w-lg-60 m-auto">
                <p class="mb-1  kuning">Visiting</p>
                <h2 class="mb-1">GET DIRECTION TO THE <span class="kuning">Venue</span></h2>
            </div>
            <div class="direction-content">
                <div class="direction-info">
                    <div class="row">
                        <div class="col-lg-5 col-md-5 px-1">
                            <div class="p-6 d-flex text-white w-100 h-100 rounded bg-blue ">
                                <div class="justify-content-center align-self-center ms-6">
                                    <h5 class="text-white pb-2">EVENT VENUE:</h5>
                                    <p class="pb-5 m-0">Santika Premiere Dyandra Hotel & Convention</p>
                                    <h5 class="text-white pb-2">ADDRESS:</h5>
                                    <p class="pb-5 m-0">Kapten Maulana Lubis No.7, Petisah Tengah, Kec. Medan Petisah,
                                        Medan City, North Sumatra</p>
                                    <!-- <h5 class="text-white pb-2">RECEPTION INFO:</h5>
                                    <p class="pb-5 m-0">Booking: (+62) 1919-2020</p> -->
                                    <a>Get Directions</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7 px-1 py-2">
                            <iframe height="400" class="rounded w-100"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3981.993011784665!2d98.6676701954653!3d3.589077314075902!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x303131cfb9769189%3A0xc73602d265aeceb4!2sHotel%20Santika%20Premiere%20Dyandra%20Hotel%20%26%20Convention!5e0!3m2!1sen!2sid!4v1738729066520!5m2!1sen!2sid"></iframe>
                        </div>
                    </div>
                </div>
                <div class="location-gallery">
                    <div id="selector" class="row pt-1 justify-content-center">
                        <div class="item col-lg-4 col-md-6 p-1" data-src="assets/images/group/4.jpg">
                            <a><img src="assets/images/thumbnail/4.jpg" class="w-100 rounded"
                                    alt="Santika Premiere Dyandra Hotel & Convention"></a>
                        </div>
                        <div class="item col-lg-4 col-md-6 p-1" data-src="assets/images/group/5.jpg">
                            <a><img src="assets/images/thumbnail/5.jpg" class="w-100 rounded"
                                    alt="Santika Premiere Dyandra Hotel & Convention"></a>
                        </div>
                        <div class="item col-lg-4 col-md-6 p-1" data-src="assets/images/group/6.jpg">
                            <a><img src="assets/images/thumbnail/6.jpg" class="w-100 rounded"
                                    alt="Santika Premiere Dyandra Hotel & Convention"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>