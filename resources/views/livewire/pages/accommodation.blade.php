<div>
    <section class="breadcrumbs relative pb-0">
        {{-- <div class="absolute inset-0 bg-gradient-to-b from-[#008068]/80 to-[#78c9bb]/10"></div> --}}
        <div class="py-16 lg:py-28 text-center relative">
            <h2 class="text-accent uppercase text-2xl font-semibold tracking-wide lg:text-4xl">Accommodation</h2>
        </div>
    </section>

    <section class="px-5 md:px-10 pt-0 pb-10 md:py-20">
        <div class="text-center md:text-start mb-5">
            <h2 class="mb-3 uppercase text-4xl tracking-wide font-bold">Hotel <span
                    class="text-[#008068]">Recommendation</span></h2>
            <p class="text-gray-500">The organizers of the 49<sup>th</sup> ASMIUA congress have recommendation
                hotels near the Venue to accommodate delegates
                with different budgets and preferences.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-5 text-center">
            @foreach ($accommodations as $accommodation)
            <div class="w-full bg-white rounded-xl shadow-md pb-10">
                <div class="">
                    <div class="mb-3 relative p-3">
                        {{-- menampilkan string HTML --}}
                        {!! $accommodation->tag ? '<span
                            class="absolute top-1 right-4 translate-y-5 bg-[#008068] rounded-xl text-white px-3 py-1">
                            <p class="text-xs">' . $accommodation->tag . '</p>
                        </span>' : " " !!}
                        <a href="javascript:void(0)"><img src="{{ asset('storage/' . $accommodation->image) }}"
                                alt="{{$accommodation->hotel_name}}" class="w-full h-full max-h-56 object-cover rounded-xl"></a>
                    </div>
                    <div class="mb-3">
                        <h6 class="pb-2 mb-3 text-xl font-semibold">{{$accommodation->hotel_name}}</h6>
                        <div class="flex justify-center mb-3">
                            @for ($i = 1; $i <= 5; $i++) @if ($i <=$accommodation->hotel_star)
                                <i class="fa-solid fa-star text-warning"></i>
                                @else
                                <i class="fa-solid fa-star"></i>
                                @endif
                                @endfor
                        </div>
                        <p class="mt-2 mb-5 text-xs"><i class="fa-solid text-[#78c9bb] fa-circle-info"></i>
                            {{$accommodation->distance}}
                        </p>
                        <p class="text-sm"> Estimated Cost/Night</p>
                        <div class="text-sm mb-6 flex justify-center gap-3">
                            @if ($accommodation->idr_price !== null)
                            <p class="text-[#008068] font-semibold mb-0">
                                <span class="fw-normal">IDR</span>
                                {{number_format($accommodation->idr_price, 0, ',', '.')}}
                            </p>
                            @endif
                            @if ($accommodation->usd_price !== null)
                            <p class="text-[#008068] font-semibold"><span class="fw-normal">USD</span>
                                {{$accommodation->usd_price}}
                            </p>
                            @endif
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-2 px-2">
                        <a href="{{$accommodation->url ? $accommodation->url : 'javascript:void(0)'}}"
                            class="btn btn-accent w-full rounded-lg">Book Now</a>
                        <a href="{{$accommodation->direction ? $accommodation->direction : 'javascript:void(0)'}}"
                            class="btn btn-accent w-full btn-outline rounded-lg"><i
                                class="fa-solid fa-location-dot mx-1"></i>Direction</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    <section class="px-5 md:px-10 py-10 md:py-20 bg-competition border-t border-dashed border-gray-400">
        <div class=" mt-10">
            <div class="text-center lg:text-start">
                <h2 class="mb-2 uppercase text-3xl font-semibold">Accommodation
                    <span class="text-[#008068]">information</span>
                </h2>
            </div>

            <div>
                @foreach ($regInfos as $regInfo)
                <div class="collapse collapse-arrow bg-base-100 border border-base-300">
                    <input type="radio" name="my-accordion-2" />
                    <div class="collapse-title font-semibold">{{ $regInfo->title }}</div>
                    <div class="collapse-content text-sm text-gray-500">
                        {!!str($regInfo->description)->markdown()->sanitizeHtml() !!}
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
</div>