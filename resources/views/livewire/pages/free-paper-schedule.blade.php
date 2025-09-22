<div>
    <section class="banner page-banner position-relative pb-0">
        <div class="overlay">
        </div>
        <div class="container">
            <div class="page-title text-center position-relative py-11">
                <h2 class="text-white text-uppercase">Free Paper Schedule</h2>
            </div>
        </div>
    </section>

    <section class="faq-popular-ques">
        <div class="container">
            <div class="popular-ques">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="popular-ques-left me-4 m-sm-0">
                            <div class="section-title pb-4 text-center text-lg-start">
                                <p class="mb-1 kuning">Free Paper</p>
                                <h2 class="mb-0">Guideline for Free Paper<span class="kuning"> Presentation</span></h2>
                            </div>
                            <div class="faq-accordion p-4 mb-6 bg-white shadow rounded">
                                <div class="accordion accordion-faq" id="accordionExample">
                                    @foreach ($presentationGuides as $item)
                                    <div class="accordion-item ">
                                        <p class="accordion-header p-4">
                                            <button class="accordion-button fw-semibold p-0 text-uppercase collapsed"
                                                type="button" data-bs-toggle="collapse" data-bs-target="#{{$item->id}}"
                                                aria-expanded="false" aria-controls="flush-{{$item->id}}">
                                                {{$item->title}}
                                            </button>
                                        </p>
                                        <div id="{{$item->id}}" class="accordion-collapse collapse"
                                            data-bs-parent="#accordionExample">
                                            <div class="accordion-body bg-lightgrey p-6">
                                                {!! str($item->description)->markdown()->sanitizeHtml() !!}
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="faq-general-ques pb-10 bg-lightgrey">
        <div class="container">
            <div class="general-ques">
                <div class="row">
                    <div class="col-lg-12 p-lg-2 p-0">
                        <div class="general-ques-right mx-5">
                            <div class="section-title pb-4 text-center text-lg-start">
                                <p class="mb-1 kuning">Free Paper</p>
                                <h2 class="mb-2">Free Paper <span class="kuning">Schedule</span></h2>
                            </div>
                            <form>
                                <div class="row mb-3">
                                    <div class="col-lg-5 offset-lg-7 col-12">
                                        <div class="d-flex justify-content-between align-items-center p-2">
                                            <div class="dropdown">
                                                <a class="fa fa-filter btn1 {{ $selectedCategory ? 'text-primary' : '' }}"
                                                    href="#" role="button" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                </a>
                                                <ul class="dropdown-menu ">
                                                    <li>
                                                        <a class="dropdown-item {{ $selectedCategory == '' ? 'text-warning' : '' }}"
                                                            href="#" wire:click.prevent="resetFilter()">
                                                            All Categories
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <hr class="dropdown-divider">
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item {{ $selectedCategory == 'Podium Presentation' ? 'text-warning' : '' }}"
                                                            href="#"
                                                            wire:click.prevent="filterByCategory('Podium Presentation')">
                                                            Podium Presentation
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item {{ $selectedCategory == 'Moderated e-Poster' ? 'text-warning' : '' }}"
                                                            href="#"
                                                            wire:click.prevent="filterByCategory('Moderated e-Poster')">
                                                            Moderated e-Poster
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item {{ $selectedCategory == 'Unmoderated Poster' ? 'text-warning' : '' }}"
                                                            href="#"
                                                            wire:click.prevent="filterByCategory('Unmoderated Poster')">
                                                            Unmoderated Poster
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="input-group">
                                                <span class="input-group-text" id="basic-addon1">
                                                    <i class="fa-solid fa-search"></i>
                                                </span>
                                                <input type="text" wire:model.live.debounce.500ms='search'
                                                    class="form-control border"
                                                    placeholder="Search code, name, title, category"
                                                    aria-label="Search code, name, title, category"
                                                    aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Tampilkan filter yang aktif -->
                                @if($selectedCategory)
                                <div class="row mb-2">
                                    <div class="col-12">
                                        <div class="d-flex align-items-center">
                                            <span class="me-2">Filtered by:</span>
                                            <span class="badge bg-info me-2">{{ $selectedCategory }}</span>
                                            <button type="button" class="btn " wire:click="resetFilter()">
                                                <i class="fa fa-times"></i> Clear Filter
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                @endif
                            </form>

                            <div class="table-responsive rounded">
                                <table class="table table-secondary table-striped">
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
                                                @if ($paper->paperCategory->name == 'Podium Presentation')
                                                <span class="badge bg-success">{{$paper->paperCategory->name}}</span>
                                                @elseif ($paper->paperCategory->name == 'Moderated e-Poster')
                                                <span class="badge bg-primary">{{$paper->paperCategory->name}}</span>
                                                @elseif ($paper->paperCategory->name == 'Unmoderated Poster')
                                                <span class="badge bg-warning">{{$paper->paperCategory->name}}</span>
                                                @endif
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <livewire:section.free-paper-api /> --}}

</div>