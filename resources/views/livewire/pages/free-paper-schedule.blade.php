<div>
    <section class="breadcrumbs relative pb-0">
        {{-- <div class="absolute inset-0 bg-gradient-to-b from-[#008068]/80 to-[#78c9bb]/10"></div> --}}
        <div class="py-16 lg:py-28 text-center relative">
            <h2 class="text-accent uppercase text-2xl font-semibold tracking-wide lg:text-4xl">Free Paper Schedule</h2>
        </div>
    </section>

    <section class="px-5 md:px-10 pt-0 pb-10 md:py-20">
        <div class="mt-10">
            <div class="text-center lg:text-start mb-5 md:mb-10">
                <p class="mb-1 kuning">Free Paper</p>
                <h2 class="mb-2 uppercase text-3xl font-semibold">Guideline for Free Paper<span class="text-[#008068]"> Presentation</span>
                </h2>
            </div>
            @foreach ($presentationGuides as $item)
            <div class="collapse collapse-arrow bg-base-100 border border-base-300">
                <input type="radio" name="my-accordion-2" />
                <div class="collapse-title font-semibold">{{ $item->title }}</div>
                <div class="collapse-content text-sm text-gray-500">
                    {!! str($item->description)->markdown()->sanitizeHtml() !!}
                </div>
            </div>
            @endforeach
        </div>
    </section>

    <section class="px-5 md:px-10 py-10 md:py-20">
        <div class="text-center lg:text-start mb-5">
            <p class="mb-1 kuning">Free Paper</p>
            <h2 class="mb-2 uppercase text-3xl font-semibold">Free Paper<span class="text-[#008068]"> Schedule</span>
            </h2>
        </div>

        <div class="p-5 mb-5">
            <form>
                <div class="flex justify-end items-center gap-3">
                    <div class="dropdown dropdown-hover dropdown-center">
                        <div tabindex="0" role="button" class="fa fa-filter m-1"></div>
                        <ul tabindex="-1" class="dropdown-content menu bg-base-100 rounded-box z-1 w-52 p-2 shadow-sm">
                            <li><a href="#" wire:click.prevent="resetFilter()" class="{{ $selectedCategory == '' ? 'text-[#008068]' : '' }}">
                                    All Categories
                                </a>
                            </li>
                            @foreach ($categories as $category)
                            <li><a href="#" wire:click.prevent="filterByCategory('{{ $category->name }}')" class="{{ $selectedCategory == $category->name ? 'text-[#008068]' : '' }}">
                                    {{ $category->name }}
                                </a>
                            </li>
                            @endforeach

                        </ul>
                    </div>
                    <div>
                        <label class="input">
                            <i class="fa fa-search"></i>
                            <input wire:model.live.debounce.500ms='search' type="search" class="grow " placeholder="Search code, name, title, category" />
                            @if (filled($this->search))
                            <button type="button" wire:click="$set('search', '')" class="text-xs text-gray-500 hover:text-gray-700"
                                aria-label="Reset search">
                                <i class="fa fa-times"></i>
                            </button>
                            @endif
                        </label>
                    </div>
                </div>
                <!-- Tampilkan filter yang aktif -->
                @if($selectedCategory)
                <div class="">
                    <div class="flex items-center">
                        <span class="me-2">Filtered by:</span>
                        <span class="badge badge-accent me-2">{{ $selectedCategory }}</span>
                        <button type="button" class="btn btn-error btn-sm" wire:click="resetFilter()">
                            <i class="fa fa-times"></i> Clear Filter
                        </button>
                    </div>
                </div>
                @endif
            </form>
        </div>

        <div class="overflow-x-auto">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Category</th>
                        <th scope="col">Title</th>
                        <th scope="col">Insitution</th>
                        <th scope="col">Country</th>
                        <th scope="col">Date</th>
                        <th scope="col">Time</th>
                        <th scope="col">Room</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($paperSchedules as $paper)
                    <tr>
                        <td>{{$paper->code_abstract}}</td>
                        <td>{{$paper->name_participant}}</td>
                        <td>
                            <span class="badge hidden lg:block badge-{{ $paper->paperCategory->color }}">{{$paper->paperCategory->name}}</span>
                            <span class="block lg:hidden">{{$paper->paperCategory->name}}</span>
                        </td>
                        <td>{{$paper->title}}</td>
                        <td>{{$paper->institution}}</td>
                        <td>{{$paper->country}}</td>
                        <td>{{ \Carbon\Carbon::parse($paper->date_presenter)->Format('d F Y') }}</td>
                        <td>{{$paper->time_presenter}}</td>
                        <td>{{$paper->room}}</td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7" class="text-center">
                            <div class="py-4">
                                <i class="fa fa-search fa-2x text-muted mb-2"></i>
                                <p class="text-muted">No papers found matching your criteria.</p>
                            </div>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
            {{ $paperSchedules->links() }}
        </div>

    </section>

    {{-- <livewire:section.free-paper-api /> --}}

</div>