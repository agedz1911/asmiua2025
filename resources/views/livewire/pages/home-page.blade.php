<div class="relative">
    <section class="lg:min-h-screen banner relative pb-16 lg:pb-28">
        <div class="absolute inset-0 bg-gradient-to-b from-[#76c8b9]/20 from-10% to-[#008068]/80"></div>
        <div class="z-10 relative pt-10 md:pt-14 lg:pt-32 flex flex-col md:flex-row items-start justify-evenly gap-4">
            <div class="px-1 order-2 lg:order-2">
                <livewire:section.flyer />
            </div>
            <div class="px-5 order-1 lg:order-1 w-full max-w-xl">
                <img src="assets/images/logo/logo-all.png" class="w-full rounded-xl" alt="Banner">
                <div class="flex text-start w-fit relative mt-5">
                    <h1 class="text-2xl lg:text-3xl text-[#008068] font-semibold">
                        49<sup>th</sup> Annual Scientific Meeting of
                        Indonesian Urological Association
                    </h1>
                </div>
                <p class="italic mt-3 text-white font-semibold">" "</p>
                <p class="text-white mt-3">
                    September 30<sup>th</sup> - October 3<sup>rd</sup>, 2026 <br> Holiday Inn Bandung Pasteur, <br> Bandung, West
                    Java, Indonesia
                </p>
                <div class="mt-7">
                    <button class="btn btn-accent rounded-lg btn-lg text-sm px-5 lg:px-10">Read
                        More <i class="fa-solid fa-angles-right text-xs"></i></button>
                    <a href="/registration" wire:navigate
                        class="text-white hover:text-white border border-white hover:bg-[#008068] hover:border-[#008068] focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 md:px-10 py-3 text-center  dark:border-[#008068] dark:text-[#008068] dark:hover:text-white dark:hover:bg-green-500 dark:focus:ring-green-300"><i
                            class="fa-solid fa-pen-to-square"></i> Regiter Now </a>
                </div>
            </div>
        </div>
    </section>

    <section class="px-2 -mt-10 lg:-mt-30 lg:px-7 pb-24 ">
        <div id="countdown" class="flex flex-wrap justify-center md:flex-row w-full mx-auto gap-4">
            <div class="text-center card bg-[#76c8b9]/90 rounded-2xl w-40">
                <div class="card-body ">
                    <span id="days" class="font-bold text-white mb-0 text-2xl lg:text-4xl"></span><br>
                    <small class="text-white mt-0 text-xs">Days</small>
                </div>
            </div>

            <div class="text-center card bg-[#76c8b9]/90 rounded-2xl w-40">
                <div class="card-body">
                    <span id="hours" class="font-bold text-white mb-0 text-2xl lg:text-4xl"></span><br>
                    <small class="text-white mt-0 text-xs">Hours</small>
                </div>
            </div>
            <div class="text-center card bg-[#76c8b9]/90 rounded-2xl w-40">
                <div class="card-body">
                    <span id="minutes" class="font-bold text-white mb-0 text-2xl lg:text-4xl"></span><br>
                    <small class="text-white mt-0 text-xs">Minutes</small>
                </div>
            </div>

            <div class="text-center card bg-[#76c8b9]/90 rounded-2xl w-40">
                <div class="card-body">
                    <span id="seconds" class="font-bold text-white mb-0 text-2xl lg:text-4xl"></span><br>
                    <small class="text-white mt-0 text-xs">Seconds</small>
                </div>
            </div>
        </div>
    </section>

    <section
        class="lg:pb-16 pb-20 mt-10 grid grid-cols-1 lg:grid-cols-2 px-3 lg:px-8 gap-3 border-b-2 border-dashed border-accent/50">
        <div class="order-1 lg:order-2 px-3 lg:px-8">
            <img src="assets/images/logo/logo-all.png" alt="Icon" class="w-full max-w-lg mb-5" class="">
            <div class="flex text-start w-fit relative mb-5">
                <img src="assets/images/logo/logo.png"
                    class="rounded-lg w-full max-w-sm hover:scale-105 transition-all duration-500" alt="">
            </div>
            <h1 class="text-lg lg:text-xl text-[#008068] mb-5 font-bold">
                49<sup>th</sup> Annual Scientific Meeting of Indonesian Urological Association</span>
            </h1>
            <p class="italic font-semibold text-sm">" "</p>
            <div class="flex flex-col md:flex-row lg:justify-start justify-center items-center gap-3 mt-8">
                <div
                    class="z-10 hover:cursor-pointer max-w-sm p-6 bg-white border border-sky-50 rounded-lg shadow-md hover:bg-[#f5fdff]">
                    <div class="flex items-center">
                        <div class="shrink-0 bg-accent py-3 px-4 rounded-full">
                            <i class="fa fa-calendar-o text-4xl text-white"></i>
                        </div>
                        <div class="flex-1 min-w-0 ms-4">
                            <p class="text-sm font-medium  truncate">
                                Thursday to Saturday
                            </p>
                            <p class="text-sm text-gray-500 truncate">
                                September 30<sup>th</sup> - October 3<sup>rd</sup>, 2026
                            </p>
                        </div>
                    </div>
                </div>
                <div
                    class="z-10 hover:cursor-pointer max-w-sm p-6 bg-white border border-sky-50 rounded-lg shadow-md hover:bg-[#f5fdff]">
                    <div class="flex items-center px-5">
                        <div class="shrink-0 bg-accent py-3 px-4 rounded-full">
                            <i class="fa fa-map-marker text-4xl text-white"></i>
                        </div>
                        <div class="flex-1 min-w-0 ms-4">
                            <p class="text-sm font-medium  truncate ">
                                Holiday Inn Bandung Pasteur,
                            </p>
                            <p class="text-sm text-gray-500 truncate">
                                Bandung, West Java
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="order-2 lg:order-1">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-5 align-items-center">
                <div class="flex flex-col gap-4">
                    <div class="rounded-xl bg-white shadow-lg">
                        <img src="assets/images/bandung/5.jpg" class="w-full rounded-xl saturate-150" alt="bandung 1">
                    </div>
                    <div class="rounded-xl bg-white shadow-lg">
                        <img src="assets/images/bandung/6.jpg" class="w-full rounded-xl sepia-50" alt="bandung 2">
                    </div>
                </div>
                <div class="rounded-xl bg-white shadow-lg">
                    <img src="assets/images/bandung/4.jpg" class="w-full rounded-xl object-cover h-full saturate-150"
                        alt="bandung 3">
                </div>
            </div>
        </div>
    </section>

    <section class="lg:py-16 py-20">
        <div class="w-full pt-5">
            <div class="text-center pb-6 m-auto">
                <h2 class="mb-1 text-3xl font-semibold uppercase">important <span class="text-accent ">Dates</span></h2>
            </div>
            <livewire:section.important-date />
        </div>
    </section>

    <section class="bg-gradient-to-t from-[#72c6b7] to-[#008068] relative z-0 py-28">
        {{-- <div class="absolute inset-0 feature start-0"></div> --}}
        <div class="relative">
            <div class="w-full max-w-6xl mx-auto border-b border-accent border-opacity-35">
                <div class="mb-16">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                        <div class="w-full border-e border-opacity-35 border-accent ">
                            <div class="border-b border-opacity-25 border-accent md:border-b-0 text-center py-5 px-2">
                                <h1 class="text-warning m-0 text-4xl md:text-5xl font-semibold"><span class="num"
                                        data-val="100"></span><span>+</span>
                                </h1>
                                <p class="text-xs text-white">Speakers</p>
                            </div>
                        </div>
                        <div class="w-full border-e border-opacity-35 border-accent">
                            <div class="border-b border-opacity-25 border-accent md:border-b-0 text-center py-5 px-2">
                                <h1 class="text-warning m-0 text-4xl md:text-5xl font-semibold"><span class="num"
                                        data-val="50"></span><span>+</span>
                                </h1>
                                <p class="text-xs text-white">Symposium</p>
                            </div>
                        </div>
                        <div class="w-full border-e border-opacity-35 border-accent">
                            <div class="border-b border-opacity-25 border-accent md:border-b-0 text-center py-5 px-2">
                                <h1 class="text-warning m-0 text-4xl md:text-5xl font-semibold"><span class="num"
                                        data-val="10"></span><span>+</span>
                                </h1>
                                <p class="text-xs text-white">Workshop & Live Surgeries </p>
                            </div>
                        </div>
                        <div class="w-full border-e border-opacity-35 border-accent">
                            <div class="border-b border-opacity-25 border-accent md:border-b-0 text-center py-5 px-2">
                                <h1 class="text-warning m-0 text-4xl md:text-5xl font-semibold"><span class="num"
                                        data-val="50"></span><span>+</span>
                                </h1>
                                <p class="text-xs text-white">Topics</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-10 mb-6 p-5">
                <h2 class="text-4xl text-white font-semibold uppercase text-center mb-10">Welcome <span
                        class="text-warning">message
                    </span></h2>
                <div class="flex flex-col md:flex-row justify-center">
                    @foreach ($welcomeMessages as $welcomeMessage)
                    <div class="mb-5 w-full max-w-2xl items-start px-2 lg:px-8">
                        <div class="pb-4 text-justify text-slate-200">
                            {!! Str::limit(str($welcomeMessage->description)->markdown()->sanitizeHtml(), 450) !!} <br>
                        </div>
                        <a class="text-amber-200 hover:text-warning hover:underline" href="/welcome-message">Read More...</a>
                        <div class="p-4 rounded-xl bg-accent w-full max-w-sm mt-3 mb-5">
                            <div class="p-2 border-s border-white border-spacing-7">
                                <p class="text-white text-xs italic">" {{$welcomeMessage->title}}
                                    "</p>
                                <h6 class="font-semibold text-white">{{$welcomeMessage->name}}</h6>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <livewire:section.competition />

    <section class="w-full pt-24 pb-3 px-2 lg:px-4 ">
        <div class="border-b-2 border-dashed border-accent/50 pb-10">
            <div class="">
                <div class="text-center pb-6 w-60 m-auto">
                    <span class="mb-1  text-sm">49<sup>th</sup> ASMIUA</span>
                    <h2 class="mb-1 text-accent text-xl md:text-3xl font-bold uppercase">SPONSors</h2>
                </div>
                <div class="mt-10">
                    <div class="grid grid-cols-2 md:grid-cols-5 gap-4 items-center justify-center">
                        @foreach ($sponsors as $sponsor)
                        <div class="p-0 border-r border-gray-300 last:border-0">
                            <div class="p-2 opacity-75 hover:opacity-100 text-center">
                                <a href="{{$sponsor->website ? $sponsor->website : 'javascript:void(0)'}}"
                                    target="_blank">
                                    {!! $sponsor->logo ? '<img src="' . asset('storage/' . $sponsor->logo) . '"
                                        class="img-fluid" alt="' . $sponsor->company . '" />' : '<small
                                        class="text-center text-accent">' . $sponsor->company . '</small>' !!}
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="text-center my-10">
                    <a class="btn btn-accent rounded-xl uppercase" href="/sponsors">VIEW MORE Sponsors</a>
                </div>
            </div>
        </div>
    </section>

    <section class="w-full pt-24 pb-3 px-2 lg:px-4">
        <div class="text-center mb-5 pb-10">
            <h2 class="md:text-3xl text-xl font-semibold uppercase mb-1">GET DIRECTION TO THE <span
                    class="text-accent">Venue</span></h2>
        </div>
        <div class="">
            <div class="flex flex-col lg:flex-row gap-5">
                <div class="lg:w-1/3 w-full">
                    <div class="py-10 px-4 text-white rounded-lg shadow-md bg-[#72c6b7]">
                        <div class="">
                            <h5 class="pb-2 tracking-wide font-semibold">EVENT VENUE:</h5>
                            <p class="pb-5 m-0 text-sm">Holiday Inn Bandung Pasteur by IHG</p>
                            <h5 class="pb-2 tracking-wide font-semibold">ADDRESS:</h5>
                            <p class="pb-5 m-0 text-sm">
                                Jl. Dr. Djunjunan No.96, Pasteur, Bandung City, West Java 40162, Indonesia
                            </p>
                            <!-- <h5 class="text-white pb-2">RECEPTION INFO:</h5>
                                    <p class="pb-5 m-0">Booking: (+62) 1919-2020</p> -->
                            <a href="https://www.google.com/maps/dir//Holiday+Inn+Bandung+Pasteur+by+IHG,+Jl.+Dr.+Djunjunan+No.96,+Pasteur,+Sukajadi,+Bandung+City,+West+Java+40162/@-6.8960844,107.5880653,17z/data=!4m9!4m8!1m0!1m5!1m1!1s0x2e68e665b08b263d:0x2edd60e3b317f7b4!2m2!1d107.5906918!2d-6.8961403!3e0?entry=ttu&g_ep=EgoyMDI1MTIwOS4wIKXMDSoKLDEwMDc5MjA3M0gBUAM%3D"
                                target="_blank" class="hover:text-slate-900">Get Directions</a>
                        </div>
                    </div>
                </div>
                <div class="lg:w-2/3 w-full px-1">
                    <iframe class="rounded-lg w-full h-full"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.9541785745296!2d107.58806527484478!3d-6.896084367484356!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e665b08b263d%3A0x2edd60e3b317f7b4!2sHoliday%20Inn%20Bandung%20Pasteur%20by%20IHG!5e0!3m2!1sen!2sid!4v1766458573584!5m2!1sen!2sid"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-2 mt-5 justify-items-center">

                <div class="w-full">
                    <a><img src="assets/images/bandung/1.jpg" class="w-full rounded-xl shadow-md"
                            alt="venue bandung "></a>
                </div>
                <div class="w-full">
                    <a><img src="assets/images/bandung/2.webp" class="w-full rounded-xl shadow-md"
                            alt="venue bandung "></a>
                </div>
                <div class="w-full">
                    <a><img src="assets/images/bandung/3.webp" class="w-full rounded-xl shadow-md"
                            alt="venue bandung "></a>
                </div>
            </div>
        </div>
    </section>
</div>

<script>
    document.addEventListener('livewire:navigated', function() {
        const days = document.getElementById('days');
        const hours = document.getElementById('hours');
        const minutes = document.getElementById('minutes');
        const seconds = document.getElementById('seconds');

        // Check if all elements are found
        const elementsExist = days && hours && minutes && seconds;

        // If any element is missing, log a warning and return
        if (!elementsExist) {
            console.warn('One or more countdown elements not found.');
            return;
        }

        // Get current date and time
        const currentTime = new Date();

        // Set new date 30 days from now
        const targetTime = new Date(2026, 10, 1, 8, 0, 0);

        // Update countdown time
        function updateCountdown() {
            const currentTime = new Date();
            const diff = targetTime - currentTime;

            const d = Math.floor(diff / 1000 / 60 / 60 / 24);
            const h = Math.floor((diff / 1000 / 60 / 60) % 24);
            const m = Math.floor((diff / 1000 / 60) % 60);
            const s = Math.floor((diff / 1000) % 60);

            // Update elements if they exist
            if (days) days.innerHTML = d;
            if (hours) hours.innerHTML = h < 10 ? '0' + h : h;
            if (minutes) minutes.innerHTML = m < 10 ? '0' + m : m;
            if (seconds) seconds.innerHTML = s < 10 ? '0' + s : s;
        }

        // Call updateCountdown initially and set it to run every second
        updateCountdown();
        setInterval(updateCountdown, 1000);
        let valueDisplays = document.querySelectorAll(".num");
        let interval = 4000;

        valueDisplays.forEach((valueDisplay) => {
            let startValue = 0;
            let endValue = parseInt(valueDisplay.getAttribute("data-val"));
            let duration = Math.floor(interval / endValue);
            let counter = setInterval(function() {
                startValue += 1;
                valueDisplay.textContent = startValue;
                if (startValue == endValue) {
                    clearInterval(counter);
                }
            }, duration);
        });
    });
</script>