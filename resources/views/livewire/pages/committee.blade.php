<div>
    <section class="breadcrumbs relative pb-0">
        {{-- <div class="absolute inset-0 bg-gradient-to-b from-[#008068]/80 to-[#78c9bb]/10"></div> --}}
        <div class="py-16 lg:py-28 text-center relative">
            <h2 class="text-accent uppercase text-2xl font-semibold tracking-wide lg:text-4xl">Organizing Committee</h2>
        </div>
    </section>

    <section class="mx-auto w-full bg-competition px-5 md:px-10 pt-0 pb-10 md:py-20">
        @foreach ($uniqueCategories as $category)
        <h2 class="text-center text-xl lg:text-2xl font-bold mb-5 uppercase text-[#008068]">{{$category}}</h2>
        <div class="flex flex-wrap gap-4 justify-center mb-12">
            @foreach ($committees as $committee)
            @if ($committee->category == $category)
            <div class="card w-full max-w-xs bg-base-100 card-md shadow-sm">
                <figure>
                    <img src="{{$committee->image ? asset('storage/' . $committee->image) : " assets/images/speaker.png"}}"
                        alt="{{$committee->name}}" alt="{{$committee->name}}" />
                </figure>
                <div class="card-body">
                    <h2 class="card-title">{{ $committee->name }}</h2>
                    <p>@if ($committee->title != null)
                        <br>
                        <span class="font-semibold ml-3">({{ $committee->title }})</span>
                        @endif
                    </p>

                </div>
            </div>
            @endif
            @endforeach
        </div>
        @endforeach
    </section>
</div>