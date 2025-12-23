<footer class="pt-20 text-center text-white relative">
    <div class="absolute inset-0 bg-gradient-to-b from-[#49c1ab] to-[#023e33]"></div>
    <div class="relative">
        <div class="flex flex-col items-center w-full max-w-4xl m-auto">

            <img src="assets/images/logo/logo.png" class="max-w-xs" alt="Icon" class="">
            <h1 class="text-lg lg:text-xl font-bold">49<sup>th</sup> Annual Scientific Meeting of Indonesian Urological
                Association
            </h1>

            <div class="border-b border-white m-auto mb-6 w-full max-w-2xl">
                <p class="text-white-50 mb-6">Organized by: <span> Indonesian Urological Association (InaUA)</span></p>

                <p class="mb-0 mt-6">Secretariat</p>
                <p>Komplek Duta Merlin Blok C 35-36. <br> Jl. Gajah Mada 3 – 5,
                    Jakarta 10130, Indonesia</p>
                <div class="py-5 mt-3">
                    <ul class="m-0 p-0 flex flex-row gap-5 lg:gap-8 justify-center">
                        <li class="bg-accent rounded-md p-2 w-10 hover:bg-[#72C6B7] tooltip-bottom tooltip"
                            data-tip="asmiua2026@pharma-pro.com">
                            <a href="mailto:asmiua2026@pharma-pro.com" class=" hover:text-warning">
                                <i class="fa-solid fa-envelope-open-text text-xl"></i>
                            </a>
                        </li>
                        <li class="bg-accent rounded-md p-2 w-10 hover:bg-[#72C6B7] tooltip-bottom tooltip"
                            data-tip="+6221 6386 9502">
                            <a href="tel:+622163869502" class=" hover:text-warning">
                                <i class="fa fa-phone text-xl"></i>
                            </a>
                        </li>
                        <li class="bg-accent rounded-md p-2 w-10 hover:bg-[#72C6B7] tooltip-bottom tooltip"
                            data-tip="+62 816-995-230">
                            <a href="tel:+62816995230" class=" hover:text-warning">
                                <i class="fa fa-mobile-screen text-xl"></i>
                            </a>
                        </li>
                        <li class="bg-accent rounded-md p-2 w-10 hover:bg-[#72C6B7] tooltip-bottom tooltip"
                            data-tip="+62 816-995-230">
                            <a href="https://wa.me/+62816995230" class=" hover:text-warning">
                                <i class="fa fa-whatsapp text-xl"></i>
                            </a>
                        </li>
                        <li class="bg-accent rounded-md p-2 w-10 hover:bg-[#72C6B7] tooltip-bottom tooltip"
                            data-tip="@ig">
                            <a href="javascript:void(0)" class=" hover:text-warning">
                                <i class="fa fa-instagram text-xl"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="pb-10 mt-4">
                <ul class="p-0 m-0 flex flex-row flex-wrap gap-4 lg:gap-6 justify-center">
                    <li class="text-sm font-normal hover:text-[#008068] hover:underline"><a href="/submission"
                            wire:navigate>Submission</a></li>
                    <li class="text-sm font-normal hover:text-[#008068] hover:underline"><a href="/organizing-committee"
                            wire:navigate>Committee</a></li>
                    <li class="text-sm font-normal hover:text-[#008068] hover:underline"><a wire:navigate
                            href="/faculties">Faculties</a></li>
                    <li class="text-sm font-normal hover:text-[#008068] hover:underline"><a wire:navigate
                            href="/program-at-glance">Schedule</a></li>
                    <li class="text-sm font-normal hover:text-[#008068] hover:underline"><a wire:navigate
                            href="/registration">Registration</a></li>
                    <li class="text-sm font-normal hover:text-[#008068] hover:underline"><a wire:navigate
                            href="/visiting">Venue</a></li>
                </ul>
            </div>
        </div>
        <div class="pb-6 pt-1 mt-5">
            <p class="text-xs">MIS - IT Pharma-Pro © {{ now()->year }}</p>
        </div>
    </div>
</footer>