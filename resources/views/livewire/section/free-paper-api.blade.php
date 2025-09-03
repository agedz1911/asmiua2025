<div>
    <section class="faq-general-ques pb-10 bg-lightgrey">
        <div class="container">
            <div class="general-ques">
                <div class="row">
                    <div class="col-lg-12 p-lg-2 p-0">
                        <div class="general-ques-right mx-5">
                            <div class="section-title pb-4 text-center text-lg-start">
                                <p class="mb-1 kuning">Free Paper</p>
                                <h2 class="mb-2">Free Paper <span class="kuning">Schedule (API)</span></h2>
                            </div>

                            <form>
                                <div class="row mb-3">
                                    <div class="col-lg-6 offset-lg-6 col-12">
                                        <div class="d-flex justify-content-between align-items-center p-2">

                                            <div class="dropdown">
                                                <a class="fa fa-filter btn1 {{ $selectedCategory ? 'text-primary' : '' }}"
                                                    href="#" role="button" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                </a>
                                                <ul class="dropdown-menu">
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
                                                        <a class="dropdown-item {{ $selectedCategory == 'Podium Poster Presentation' ? 'text-warning' : '' }}"
                                                            href="#"
                                                            wire:click.prevent="filterByCategory('Podium Poster Presentation')">
                                                            Podium Poster Presentation
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
                                                <input type="text" wire:model.live.debounce.500ms="search"
                                                    class="form-control border"
                                                    placeholder="Search no, name, title, category"
                                                    aria-label="Search no, name, title, category"
                                                    aria-describedby="basic-addon1">
                                            </div>
                                            <button wire:click="refreshData" class="btn">
                                                <i class="fa fa-refresh"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <div class="table-responsive rounded">
                                <table class="table table-secondary table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Category</th>
                                            <th scope="col">Title</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($paperSchedules as $paper)
                                        <tr>
                                            <td>{{ $paper['no_urut'] ?? '-' }}</td>
                                            <td>{{ $paper['name_participant'] ?? '-' }}</td>
                                            <td>
                                                @php $cat = $paper['category'] ?? '-'; @endphp
                                                @if ($cat === 'Podium Presentation')
                                                <span class="badge bg-success">{{ $cat }}</span>
                                                @elseif ($cat === 'Podium Poster Presentation')
                                                <span class="badge bg-primary">{{ $cat }}</span>
                                                @elseif ($cat === 'Unmoderated Poster')
                                                <span class="badge bg-warning">{{ $cat }}</span>
                                                @else
                                                <span class="badge bg-secondary">{{ $cat }}</span>
                                                @endif
                                            </td>
                                            <td>{{ $paper['title'] ?? '-' }}</td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="4" class="text-center">
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


</div>