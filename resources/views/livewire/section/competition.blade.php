<div>
    <section class="bg-competition bg-slate-50 w-full py-24 px-2 lg:px-10">
        <div class="w-full  m-auto">
            <div class="text-center pb-5 text-slate-700">
                <h2 class="mb-1 text-xl md:text-3xl font-semibold text-accent uppercase">Submission</h2>
                <p class="m-0">Submit abstract and educative video & flyer competition the 49<sup>th</sup> ASMIUA
                    scientific competition</p>
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-5 lg:mt-8">

                <div class="border border-1 border-gray-300 rounded-xl pb-3 text-center ">
                    <h5 class="p-4 uppercase text-xl font-bold"><a href="javascript:void(0)" class="black">abstract Free
                            paper</a></h5>
                    <a href="/submission" class="text-accent hover:underline text-sm">Read More <i
                            class="fa-solid fa-angles-right"></i></a>
                    <div class="p-4 pt-0 m-0 border-gray-300 border-b"></div>
                    <div class="pt-2">
                        <span class="px-4 border-gray-300 border-r text-sm">... </span><span class="px-4">... </span>
                    </div>
                </div>
                <div class="border border-1 border-gray-300 rounded-xl pb-3 text-center ">
                    <h5 class="p-4 uppercase text-xl font-bold"><a href="javascript:void(0)" class="black">abstract
                            Video</a></h5>
                    <a href="/submission" class="text-accent hover:underline text-sm">Read More <i
                            class="fa-solid fa-angles-right"></i></a>
                    <div class="p-4 pt-0 m-0 border-gray-300 border-b"></div>
                    <div class="pt-2">
                        <span class="px-4 border-gray-300 border-r text-sm">... </span><span class="px-4">... </span>
                    </div>
                </div>
                <div class="border border-1 border-gray-300 rounded-xl pb-3 text-center ">
                    <h5 class="p-4 uppercase text-xl font-bold"><a href="javascript:void(0)" class="black">educative
                            video & flyer competition</a></h5>
                    <a href="/submission" class="text-accent hover:underline text-sm">Read More <i
                            class="fa-solid fa-angles-right"></i></a>
                    <div class="p-4 pt-0 m-0 border-gray-300 border-b"></div>
                    <div class="pt-2">
                        <span class="px-4 border-gray-300 border-r text-sm">... </span><span class="px-4">... </span>
                    </div>
                </div>


            </div>

        </div>
    </section>

    <section class="w-full pt-24 pb-3 px-2 lg:px-4 ">
        <div class="border-b-2 border-dashed border-accent/50 pb-10">
            <div class="">
                <div class="text-center pb-6 w-60 m-auto">
                    <span class="mb-1  text-sm">49<sup>th</sup> ASMIUA</span>
                    <h2 class="mb-1 text-accent text-xl md:text-3xl font-bold uppercase">SPONSors</h2>
                </div>
                <div class="mt-10">
                    <div class="mb-4 flex items-center justify-end gap-2 px-2" x-data="carouselSetupControls()">
                        <button type="button"
                            class="btn btn-sm btn-outline btn-accent rounded-full"
                            @click="$dispatch('sponsor-carousel-prev')">
                            <i class="fa-solid fa-chevron-left"></i>
                        </button>
                        <button type="button"
                            class="btn btn-sm btn-outline btn-accent rounded-full"
                            @click="$dispatch('sponsor-carousel-next')">
                            <i class="fa-solid fa-chevron-right"></i>
                        </button>
                    </div>
                    <div x-data="carouselSetup()" x-init="startInterval()" @resize.window="handleResize()"
                        @mouseenter="stopInterval()" @mouseleave="startInterval()"
                        @sponsor-carousel-prev.window="prevSlide()" @sponsor-carousel-next.window="nextSlide()"
                        class="w-full mx-auto overflow-hidden bg-base-100 rounded-box px-4 py-8 md:px-6 md:py-12">
                        <div class="flex transition-transform duration-700 ease-in-out"
                            :style="`transform: translateX(-${(currentIndex * 100) / effectiveVisibleItems}%)`">
                            @foreach ($sponsors as $sponsor)
                            <div class="flex-none border-r border-gray-300 last:border-0 px-3"
                                :style="`width: ${100 / effectiveVisibleItems}%`">
                                <div class="tooltip tooltip-accent" data-tip="{{$sponsor->category}}">
                                    <div class="flex h-24 items-center justify-center p-2 opacity-75 hover:opacity-100 text-center md:h-28">
                                        <a href="{{$sponsor->website ? $sponsor->website : 'javascript:void(0)'}}"
                                            target="_blank" class="flex h-full w-full items-center justify-center">
                                            {!! $sponsor->logo ? '<img src="' . asset('storage/' . $sponsor->logo) . '"
                                                class="max-h-full w-auto max-w-full object-contain" alt="' . $sponsor->company . '" />' : '<small
                                                class="text-center text-accent">' . $sponsor->company . '</small>' !!}
                                        </a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="text-center my-10">
                    <a class="btn btn-accent rounded-xl uppercase" href="/sponsors">VIEW MORE Sponsors</a>
                </div>
            </div>
        </div>
    </section>
</div>

<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('carouselSetupControls', () => ({}))

        Alpine.data('carouselSetup', () => ({
            currentIndex: 0,
            totalItems: {{ count($sponsors) }}, // Mengambil jumlah total dari Livewire
            visibleItems: 6, // Default tampilan lg
            interval: null,

            get effectiveVisibleItems() {
                return Math.min(this.visibleItems, this.totalItems || 1);
            },

            init() {
                this.handleResize();
            },

            handleResize() {
                // Deteksi ukuran layar persis seperti Tailwind breakpoints
                if (window.innerWidth >= 1024) {
                    this.visibleItems = 6;
                } else if (window.innerWidth >= 768) {
                    this.visibleItems = 4;
                } else {
                    this.visibleItems = 2;
                }
                const maxIndex = Math.max(this.totalItems - this.effectiveVisibleItems, 0);
                this.currentIndex = Math.min(this.currentIndex, maxIndex);
            },

            prevSlide() {
                const maxIndex = Math.max(this.totalItems - this.effectiveVisibleItems, 0);
                if (this.currentIndex <= 0) {
                    this.currentIndex = maxIndex;
                } else {
                    this.currentIndex--;
                }
            },

            nextSlide() {
                const maxIndex = Math.max(this.totalItems - this.effectiveVisibleItems, 0);
                if (this.currentIndex >= maxIndex) {
                    this.currentIndex = 0; // Balik ke awal
                } else {
                    this.currentIndex++; // Geser 1 item
                }
            },

            startInterval() {
                if (this.totalItems <= this.effectiveVisibleItems) {
                    this.stopInterval();
                    return;
                }

                if (this.interval) {
                    clearInterval(this.interval);
                }
                this.interval = setInterval(() => {
                    this.nextSlide();
                }, 3000); // Jeda 3 detik
            },

            stopInterval() {
                if (this.interval) {
                    clearInterval(this.interval);
                    this.interval = null;
                }
            },

            destroy() {
                this.stopInterval();
            }
        }))
    })
</script>