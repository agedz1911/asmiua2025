<div wire:init="loadData">
    <section class="breadcrumbs relative pb-0">
        {{-- <div class="absolute inset-0 bg-gradient-to-b from-[#008068]/80 to-[#78c9bb]/10"></div> --}}
        <div class="py-16 lg:py-28 text-center relative">
            <h2 class="text-accent uppercase text-2xl font-semibold tracking-wide lg:text-4xl">Faculties</h2>
        </div>
    </section>

    <section class="mx-auto w-full px-5 md:px-10 pt-0 pb-10 md:py-20">
        <div class="">
            <div class="w-full px-3">
                <label class="input input-accent rounded-xl input-lg w-full">
                    <i class="fa-solid fa-search h-[1em] opacity-50"></i>
                    <input wire:model.live.debounce.700ms="searchTerm" wire:loading.attr="disabled"
                        wire:target="searchTerm" type="text" class="w-full" required placeholder="Search Faculties.." />
                </label>
            </div>
            <div class="mt-10">
                <!-- name of each tab group should be unique -->
                <div class="tabs tabs-border justify-evenly">
                    <input type="radio" name="my_tabs_2"
                        class="tab uppercase tracking-wider text-lg text-accent hover:text-[#008068]"
                        aria-label="Indonesian Faculties" checked="checked" />
                    <div class="tab-content  p-5 rounded-lg">
                        <div wire:loading.delay.shortest wire:target="loadData,searchTerm" class="w-full">
                            <div class="flex flex-wrap justify-between items-center gap-5 ">
                                @for ($i = 0; $i < 3; $i++) <div class="card bg-base-100 shadow-sm p-4 w-full max-w-sm">
                                    <div class="flex w-full flex-col gap-4">
                                        <div class="skeleton h-32 w-full"></div>
                                        <div class="skeleton h-4 w-28"></div>
                                        <div class="skeleton h-4 w-full"></div>
                                        <div class="skeleton h-4 w-full"></div>
                                    </div>
                            </div>
                            @endfor
                        </div>
                    </div>

                    <div wire:loading.remove wire:target="loadData,searchTerm"
                        class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-5">
                        @forelse ($indofaculties as $indo)
                        <div wire:key="indo-faculty-{{ $indo->id }}"
                            class="card bg-base-100 shadow-sm p-0 hover:shadow-md hover:scale-105 transition-all duration-200">
                            <figure onclick="my_modal_{{$indo->id}}.showModal()" class="relative hover:cursor-pointer ">
                                <img src="{{$indo->image ? asset('storage/' . $indo->image) : "
                                    assets/images/speaker.png"}}" alt="{{$indo->name}}"
                                    class="w-full h-full object-cover rounded" loading="lazy" decoding="async">
                            </figure>
                            <div class="card-body text-center">
                                <h2 onclick="my_modal_{{$indo->id}}.showModal()"
                                    class="text-xl font-semibold text-[#008068] hover:text-accent hover:cursor-pointer">
                                    {{$indo->name}}
                                </h2>
                                <p>{{$indo->description}}</p>
                            </div>
                        </div>


                        <dialog wire:key="indo-modal-{{ $indo->id }}" id="my_modal_{{$indo->id}}" class="modal">
                            <div class="modal-box w-10/12 max-w-5xl">
                                <form method="dialog">
                                    <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
                                </form>
                                <div class="flex items-center gap-3 pb-3">
                                    <img class="rounded-full bg-accent/20 shadow w-20 object-cover"
                                        src="{{$indo->image ? asset('storage/' . $indo->image) : "
                                        assets/images/speaker.png"}}" alt="Photo" loading="lazy" decoding="async">
                                    <div>
                                        <p class="mb-0"><span
                                                class="text-[#008068] text-lg font-semibold">{{$indo->name}}</span>
                                            <br>
                                            {{$indo->country}}
                                        </p>
                                        <p class="text-sm text-gray-500">{{$indo->description}}</p>
                                    </div>
                                </div>
                                <p class="font-medium text-lg text-gray-700">Session</p>
                                <div class="border-t pt-5">
                                    @foreach ($indo->schedules as $schedule)
                                    <div class="flex flex-wrap gap-5 text-green-600">
                                        <p>{{\Carbon\Carbon::parse($schedule->sesi->date)->format('d
                                            F Y')}}</p>
                                        <p>{{$schedule->time_speaker}}</p>
                                        <p>{{$schedule->sesi->room}}</p>
                                    </div>
                                    <p class="mb-1">{{$schedule->sesi->title_ses}}
                                    </p>
                                    <p class="text-gray-500 mb-5 border-b border-dashed border-gray-800 pb-3">
                                        {{$schedule->topic_title}}
                                    </p>
                                    @endforeach
                                </div>
                                <div class="modal-action">
                                    <form method="dialog">
                                        <!-- if there is a button, it will close the modal -->
                                        <button class="btn">Close</button>
                                    </form>
                                </div>
                            </div>
                        </dialog>
                        @empty
                        <div class="col-span-full text-center text-gray-500 py-10">
                            Faculty tidak ditemukan.
                        </div>
                        @endforelse
                    </div>
                    {{-- <div class="mt-5 border-t border-dashed pt-3">
                        {{ $indofaculties->links() }}
                    </div> --}}
                    <p class="text-xs italic mt-5">*within confirmation</p>
                </div>

                <input type="radio" name="my_tabs_2"
                    class="tab uppercase tracking-wider  text-lg text-accent hover:text-[#008068]"
                    aria-label="Foreign faculties" />
                <div class="tab-content  p-5 rounded-lg">
                    {{-- @dd($indofaculties) --}}

                    <div wire:loading.delay.shortest wire:target="loadData,searchTerm" class="w-full">
                        <div class="flex flex-wrap justify-between items-center gap-5 ">
                            @for ($i = 0; $i < 3; $i++) <div class="card bg-base-100 shadow-sm p-4 w-full max-w-sm">
                                <div class="flex w-full flex-col gap-4">
                                    <div class="skeleton h-32 w-full"></div>
                                    <div class="skeleton h-4 w-28"></div>
                                    <div class="skeleton h-4 w-full"></div>
                                    <div class="skeleton h-4 w-full"></div>
                                </div>
                        </div>
                        @endfor
                    </div>
                </div>

                <div wire:loading.remove wire:target="loadData,searchTerm"
                    class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5">
                    @forelse ($foreignfaculties as $foreign)
                    <div wire:key="foreign-faculty-{{ $foreign->id }}"
                        class="card bg-base-100 shadow-sm p-0 hover:shadow-md hover:scale-105 transition-all duration-200">
                        <figure onclick="my_modal_f{{$foreign->id}}.showModal()" class="relative hover:cursor-pointer ">
                            <img src="{{$foreign->image ? asset('storage/' . $foreign->image) : "
                                assets/images/speaker.png"}}" alt="{{$foreign->name}}"
                                class="w-full h-full object-cover rounded" loading="lazy" decoding="async">

                        </figure>
                        <div class="card-body text-center">
                            <h2 onclick="my_modal_f{{$foreign->id}}.showModal()"
                                class="text-xl font-semibold text-[#008068] hover:cursor-pointer hover:text-accent">
                                {{$foreign->name}}
                            </h2>
                            <p>{{$foreign->country}}</p>
                        </div>
                    </div>

                    <dialog wire:key="foreign-modal-{{ $foreign->id }}" id="my_modal_f{{$foreign->id}}" class="modal">
                        <div class="modal-box w-10/12 max-w-5xl">
                            <form method="dialog">
                                <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
                            </form>
                            <div class="flex items-center gap-3 pb-3">
                                <img class="rounded-full bg-accent/20 shadow w-20 object-cover"
                                    src="{{$foreign->image ? asset('storage/' . $foreign->image) : "
                                    assets/images/speaker.png"}}" alt="{{$foreign->name}}" loading="lazy"
                                    decoding="async">
                                <div>
                                    <p class="mb-0"><span
                                            class="text-[#008068] text-lg font-semibold">{{$foreign->name}}</span>
                                        <br>
                                        {{$foreign->country}}
                                    </p>
                                    <p class="text-sm text-gray-500">{{$foreign->description}}</p>
                                </div>
                            </div>
                            <p class="font-medium text-lg text-gray-700">Session</p>
                            <div class="border-t pt-5">
                                @foreach ($foreign->schedules as $schedule)
                                <div class="flex flex-wrap gap-5 text-green-600">
                                    <p>{{\Carbon\Carbon::parse($schedule->sesi->date)->format('d
                                        F Y')}}</p>
                                    <p>{{$schedule->time_speaker}}</p>
                                    <p>{{$schedule->sesi->room}}</p>
                                </div>
                                <p class="mb-1">{{$schedule->sesi->title_ses}}
                                </p>
                                <p class="text-gray-500 mb-5 border-b border-dashed border-gray-800 pb-3">
                                    {{$schedule->topic_title}}
                                </p>
                                @endforeach
                            </div>
                            <div class="modal-action">
                                <form method="dialog">
                                    <!-- if there is a button, it will close the modal -->
                                    <button class="btn">Close</button>
                                </form>
                            </div>
                        </div>
                    </dialog>
                    @empty
                    <div class="col-span-full text-center text-gray-500 py-10">
                        Faculty tidak ditemukan.
                    </div>
                    @endforelse
                </div>
                {{-- <div class="mt-5 border-t border-dashed pt-3">
                    {{ $foreignfaculties->links() }}
                </div> --}}
                <p class="text-xs italic mt-5">*within confirmation</p>
            </div>

        </div>
</div>

</div>
</section>
</div>