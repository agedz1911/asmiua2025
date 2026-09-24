<div>
    <section class="breadcrumbs relative pb-0">
        {{-- <div class="absolute inset-0 bg-gradient-to-b from-[#008068]/80 to-[#78c9bb]/10"></div> --}}
        <div class="flex justify-between items-center px-5">
            <img src="assets/images/logo/logo.png" class="h-full max-h-12" alt="Logo" />
            <div class="py-16 text-center relative">
                <h2 class="text-[#008068] uppercase text-2xl font-semibold tracking-wide lg:text-4xl">Free Paper Schedule</h2>
            </div>
            <img src="assets/images/logo/logo-all.png" class="h-full max-h-12 rounded-xl" alt="Banner">
        </div>
    </section>

    <section class="">
        <div class="p-5 mb-5">
            <form>
                <div class="flex justify-center items-center gap-3">
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
                    <div class="max-w-4xl w-full">
                        <label class="input input-success w-full input-lg">
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
                        <th width="2%" scope="col">No</th>
                        <th width="8%" scope="col">Time</th>
                        <th width="9%" scope="col">Room</th>
                        <th width="10%" scope="col">Code Abstract</th>
                        <th width="15%" scope="col">Name</th>
                        <th width="11%" scope="col">Insitution</th>
                        <th width="10%" scope="col">Country</th>
                        <th width="21%" scope="col">Title</th>
                        <th width="10%" scope="col">Category</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($paperSchedules as $paper)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$paper->time_presenter}}</td>
                        <td>{{$paper->room}}</td>
                        <td>{{$paper->code_abstract}}</td>
                        <td>{{$paper->name_participant}}</td>
                        <td>{{$paper->institution}}</td>
                        <td>{{$paper->country}}</td>
                        <td>{{$paper->title}}</td>
                        <td>
                            <span>{{$paper->paperCategory->name}}</span>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="9" class="text-center">
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
</div>