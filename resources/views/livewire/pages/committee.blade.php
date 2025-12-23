<div>
    <section class="breadcrumbs relative pb-0">
        {{-- <div class="absolute inset-0 bg-gradient-to-b from-[#008068]/80 to-[#78c9bb]/10"></div> --}}
        <div class="py-16 lg:py-28 text-center relative">
            <h2 class="text-accent uppercase text-2xl font-semibold tracking-wide lg:text-4xl">Sponsors</h2>
        </div>
    </section>

    <section class="speakers">
        <div class="container">
            <div class="speaker-inner">
                <div class="sepaker-list">
                    <div class="row justify-content-center text-center">
                        @foreach ($uniqueCategories as $category)
                        <h4 class="mb-1 mt-3"><span class="badge bg-kuning px-6 py-3 rounded">{{$category}}</span></h4>
                        @foreach ($committees as $committee)
                        @if ($committee->category == $category)
                        <div class="col-lg-3 col-md-4 col-12 p-2 ">
                            <div class="speaker-box  position-relative overflow-hidden text-white">
                                <img class="speaker-image rounded img-fluid"
                                    src="{{$committee->image ? asset('storage/' . $committee->image) : "
                                    assets/images/speakers.jpg"}}" alt="{{$committee->name}}">
                                <div class="card shadow-sm border-top-0 mt-1">
                                    <h6><a class="text-blue" href="javascript:void(0)">{{$committee->name}}</a>
                                    </h6>
                                    <span class="speaker-post d-block pb-2">{{$committee->title}}</span>
                                </div>
                            </div>
                        </div>
                        @endif
                        @endforeach
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>