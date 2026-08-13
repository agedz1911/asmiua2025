<div>
    <section class="breadcrumbs relative pb-0">
        {{-- <div class="absolute inset-0 bg-gradient-to-b from-[#008068]/80 to-[#78c9bb]/10"></div> --}}
        <div class="py-16 lg:py-28 text-center relative">
            <h2 class="text-accent uppercase text-2xl font-semibold tracking-wide lg:text-4xl">Program at Glance</h2>
        </div>
    </section>

    <div class="px-5 md:px-10 pt-0 mt-10 flex flex-wrap gap-2 justify-end md:justify-center items-center">
        <label class="input input-lg input-success rounded-lg w-full max-w-6xl">
            <i class="fa fa-search opacity-45 text-sm"></i>
            <input wire:model.live.debounce.500ms='search' type="text" class="grow" placeholder="Search Session Title or Room" />
            <button type="button" wire:click="resetSearch" class="btn btn-ghost btn-sm" aria-label="Reset search" title="Reset search">
                <i class="fa fa-times"></i>
            </button>
        </label>
        <a target="_blank" href="assets/download/schedule-asmiua2026.pdf" class="btn btn-success rounded-lg"><i
                class="fa fa-download"></i> Download PDF Schedule</a>
    </div>

    <section class="px-5 md:px-10 pt-0 pb-10 md:py-20 bg-competition">
        <div class="flex items-center justify-center">
            <div x-data="{ openTab: 1 }" class="lg:w-11/12 w-full mx-auto">
                <div class="">
                    <div class="mb-4 flex flex-wrap space-x-4 p-2 bg-white rounded-lg shadow-md">
                        <button x-on:click="openTab = 1" :class="{ 'bg-warning text-white': openTab === 1 }"
                            class="flex-1 py-2 px-4 rounded-md focus:outline-none focus:shadow-outline-blue transition-all duration-300">30
                            September</button>
                        <button x-on:click="openTab = 2" :class="{ 'bg-warning text-white': openTab === 2 }"
                            class="flex-1 py-2 px-4 rounded-md focus:outline-none focus:shadow-outline-blue transition-all duration-300">1
                            October</button>
                        <button x-on:click="openTab = 3" :class="{ 'bg-warning text-white': openTab === 3 }"
                            class="flex-1 py-2 px-4 rounded-md focus:outline-none focus:shadow-outline-blue transition-all duration-300">2
                            October</button>
                        <button x-on:click="openTab = 4" :class="{ 'bg-warning text-white': openTab === 4 }"
                            class="flex-1 py-2 px-4 rounded-md focus:outline-none focus:shadow-outline-blue transition-all duration-300">3
                            October</button>
                        {{--<button x-on:click="openTab = 5" :class="{ 'bg-warning text-white': openTab === 5 }"
                            class="flex-1 py-2 px-4 rounded-md focus:outline-none focus:shadow-outline-blue transition-all duration-300">5
                            October</button> --}}

                    </div>

                    <div x-show="openTab === 1"
                        class="transition-all duration-300 bg-white p-4 rounded-lg shadow-md border-x-4 border-[#72c6b7]">
                        <div class="overflow-x-auto">
                            <table class="table">
                                <thead>
                                    <tr class="text-base font-semibold mb-2">
                                        <th style="width: 11%"></th>
                                        <th style="width: 11%"></th>
                                        <th style="width: 11%"></th>
                                        <th style="width: 11%"></th>
                                        <th style="width: 11%"></th>
                                        <th style="width: 11%"></th>
                                        <th style="width: 11%"></th>
                                        <th style="width: 11%"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="">
                                        <td class="align-top">
                                            @foreach ($tigapuluh as $empiresatu)
                                            @if ($empiresatu->room == 'Empire 1')
                                            <button class="hover:shadow-md block w-full my-1 hover:cursor-pointer"
                                                onclick="modal_{{$empiresatu->id}}.showModal()">
                                                <div
                                                    class="px-0 py-4 w-full rounded-lg bg-green-50 hover:bg-green-100 ">
                                                    <div class="badge badge-sm badge-accent mb-2">
                                                        {{$empiresatu->category_sesi}}</div>
                                                    <br>
                                                    {{$empiresatu->time}} <br>
                                                    {{$empiresatu->title_ses}} <br>
                                                    <span class="text-xs text-gray-600">{{$empiresatu->room}}</span>
                                                </div>
                                            </button>
                                            @endif

                                            <dialog id="modal_{{$empiresatu->id}}" class="modal">
                                                <div class="modal-box w-11/12 max-w-5xl text-start">
                                                    <div class="flex justify-between mb-3 text-gray-700">
                                                        <div class="text-start">
                                                            <h3 class="mb-0">Date: <span class="">
                                                                    {{\Carbon\Carbon::parse($empiresatu->date)->format('d
                                                                    F
                                                                    Y')}}</span></h3>
                                                            <h3 class="mb-0">Time: <span class="">
                                                                    {{$empiresatu->time}}</span></h3>
                                                        </div>
                                                        <div>
                                                            <p class="">Room :<span class="">
                                                                    {{$empiresatu->room}}
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0 text-gray-700">Session : <span class="">
                                                            {{$empiresatu->title_ses}}</span></p>
                                                    <p class="text-gray-700">Moderator : <span class="">
                                                            {{$empiresatu->moderator}}
                                                        </span></p>
                                                    <div class="overflow-x-auto mt-5">
                                                        <table class="table text-gray-700">
                                                            <!-- head -->
                                                            <thead>
                                                                <tr>
                                                                    <th style="width: 18%">Time</th>
                                                                    <th>Topic</th>
                                                                    <th>Speaker</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($empiresatu->schedules as $schedule)
                                                                <tr>
                                                                    <th scope="row">{{$schedule->time_speaker}}</th>
                                                                    <td>{{$schedule->topic_title}}</td>
                                                                    <td>{{$schedule->speaker}}</td>
                                                                </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="modal-action">
                                                        <form method="dialog">
                                                            <!-- if there is a button in form, it will close the modal -->
                                                            <button class="btn">Close</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </dialog>
                                            @endforeach
                                        </td>
                                        <td class="align-top">
                                            @foreach ($tigapuluh as $empiredua)
                                            @if ($empiredua->room == 'Empire 2')
                                            <button class="hover:shadow-md block w-full my-1 hover:cursor-pointer"
                                                onclick="modal_{{$empiredua->id}}.showModal()">
                                                <div
                                                    class="px-0 py-4 w-full rounded-lg bg-green-50 hover:bg-green-100 ">
                                                    <div class="badge badge-sm badge-accent mb-2">
                                                        {{$empiredua->category_sesi}}</div>
                                                    <br>
                                                    {{$empiredua->time}} <br>
                                                    {{$empiredua->title_ses}} <br>
                                                    <span class="text-xs text-gray-600">{{$empiredua->room}}</span>
                                                </div>
                                            </button>
                                            @endif

                                            <dialog id="modal_{{$empiredua->id}}" class="modal">
                                                <div class="modal-box w-11/12 max-w-5xl text-start">
                                                    <div class="flex justify-between mb-3 text-gray-700">
                                                        <div class="text-start">
                                                            <h3 class="mb-0">Date: <span class="">
                                                                    {{\Carbon\Carbon::parse($empiredua->date)->format('d
                                                                    F
                                                                    Y')}}</span></h3>
                                                            <h3 class="mb-0">Time: <span class="">
                                                                    {{$empiredua->time}}</span></h3>
                                                        </div>
                                                        <div>
                                                            <p class="">Room :<span class="">
                                                                    {{$empiredua->room}}
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0 text-gray-700">Session : <span class="">
                                                            {{$empiredua->title_ses}}</span></p>
                                                    <p class="text-gray-700">Moderator : <span class="">
                                                            {{$empiredua->moderator}}
                                                        </span></p>
                                                    <div class="overflow-x-auto mt-5">
                                                        <table class="table text-gray-700">
                                                            <!-- head -->
                                                            <thead>
                                                                <tr>
                                                                    <th style="width: 18%">Time</th>
                                                                    <th>Topic</th>
                                                                    <th>Speaker</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($empiredua->schedules as $schedule)
                                                                <tr>
                                                                    <th scope="row">{{$schedule->time_speaker}}</th>
                                                                    <td>{{$schedule->topic_title}}</td>
                                                                    <td>{{$schedule->speaker}}</td>
                                                                </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="modal-action">
                                                        <form method="dialog">
                                                            <!-- if there is a button in form, it will close the modal -->
                                                            <button class="btn">Close</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </dialog>
                                            @endforeach
                                        </td>
                                        <td class="align-top">
                                            @foreach ($tigapuluh as $empiretiga)
                                            @if ($empiretiga->room == 'Empire 3')
                                            <button class="hover:shadow-md block w-full my-1 hover:cursor-pointer"
                                                onclick="modal_{{$empiretiga->id}}.showModal()">
                                                <div
                                                    class="px-0 py-4 w-full rounded-lg bg-green-50 hover:bg-green-100 ">
                                                    <div class="badge badge-sm badge-accent mb-2">
                                                        {{$empiretiga->category_sesi}}</div>
                                                    <br>
                                                    {{$empiretiga->time}} <br>
                                                    {{$empiretiga->title_ses}} <br>
                                                    <span class="text-xs text-gray-600">{{$empiretiga->room}}</span>
                                                </div>
                                            </button>
                                            @endif

                                            <dialog id="modal_{{$empiretiga->id}}" class="modal">
                                                <div class="modal-box w-11/12 max-w-5xl text-start">
                                                    <div class="flex justify-between mb-3 text-gray-700">
                                                        <div class="text-start">
                                                            <h3 class="mb-0">Date: <span class="">
                                                                    {{\Carbon\Carbon::parse($empiretiga->date)->format('d
                                                                    F
                                                                    Y')}}</span></h3>
                                                            <h3 class="mb-0">Time: <span class="">
                                                                    {{$empiretiga->time}}</span></h3>
                                                        </div>
                                                        <div>
                                                            <p class="">Room :<span class="">
                                                                    {{$empiretiga->room}}
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0 text-gray-700">Session : <span class="">
                                                            {{$empiretiga->title_ses}}</span></p>
                                                    <p class="text-gray-700">Moderator : <span class="">
                                                            {{$empiretiga->moderator}}
                                                        </span></p>
                                                    <div class="overflow-x-auto mt-5">
                                                        <table class="table text-gray-700">
                                                            <!-- head -->
                                                            <thead>
                                                                <tr>
                                                                    <th style="width: 18%">Time</th>
                                                                    <th>Topic</th>
                                                                    <th>Speaker</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($empiretiga->schedules as $schedule)
                                                                <tr>
                                                                    <th scope="row">{{$schedule->time_speaker}}</th>
                                                                    <td>{{$schedule->topic_title}}</td>
                                                                    <td>{{$schedule->speaker}}</td>
                                                                </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="modal-action">
                                                        <form method="dialog">
                                                            <!-- if there is a button in form, it will close the modal -->
                                                            <button class="btn">Close</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </dialog>
                                            @endforeach
                                        </td>
                                        <td class="align-top">
                                            @foreach ($tigapuluh as $empireempat)
                                            @if ($empireempat->room == 'Empire 4')
                                            <button class="hover:shadow-md block w-full my-1 hover:cursor-pointer"
                                                onclick="modal_{{$empireempat->id}}.showModal()">
                                                <div
                                                    class="px-0 py-4 w-full rounded-lg bg-green-50 hover:bg-green-100 ">
                                                    <div class="badge badge-sm badge-accent mb-2">
                                                        {{$empireempat->category_sesi}}</div>
                                                    <br>
                                                    {{$empireempat->time}} <br>
                                                    {{$empireempat->title_ses}} <br>
                                                    <span class="text-xs text-gray-600">{{$empireempat->room}}</span>
                                                </div>
                                            </button>
                                            @endif

                                            <dialog id="modal_{{$empireempat->id}}" class="modal">
                                                <div class="modal-box w-11/12 max-w-5xl text-start">
                                                    <div class="flex justify-between mb-3 text-gray-700">
                                                        <div class="text-start">
                                                            <h3 class="mb-0">Date: <span class="">
                                                                    {{\Carbon\Carbon::parse($empireempat->date)->format('d
                                                                    F
                                                                    Y')}}</span></h3>
                                                            <h3 class="mb-0">Time: <span class="">
                                                                    {{$empireempat->time}}</span></h3>
                                                        </div>
                                                        <div>
                                                            <p class="">Room :<span class="">
                                                                    {{$empireempat->room}}
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0 text-gray-700">Session : <span class="">
                                                            {{$empireempat->title_ses}}</span></p>
                                                    <p class="text-gray-700">Moderator : <span class="">
                                                            {{$empireempat->moderator}}
                                                        </span></p>
                                                    <div class="overflow-x-auto mt-5">
                                                        <table class="table text-gray-700">
                                                            <!-- head -->
                                                            <thead>
                                                                <tr>
                                                                    <th style="width: 18%">Time</th>
                                                                    <th>Topic</th>
                                                                    <th>Speaker</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($empireempat->schedules as $schedule)
                                                                <tr>
                                                                    <th scope="row">{{$schedule->time_speaker}}</th>
                                                                    <td>{{$schedule->topic_title}}</td>
                                                                    <td>{{$schedule->speaker}}</td>
                                                                </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="modal-action">
                                                        <form method="dialog">
                                                            <!-- if there is a button in form, it will close the modal -->
                                                            <button class="btn">Close</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </dialog>
                                            @endforeach
                                        </td>
                                        <td class="align-top">
                                            @foreach ($tigapuluh as $empirelima)
                                            @if ($empirelima->room == 'Empire 5')
                                            <button class="hover:shadow-md block w-full my-1 hover:cursor-pointer"
                                                onclick="modal_{{$empirelima->id}}.showModal()">
                                                <div
                                                    class="px-0 py-4 w-full rounded-lg bg-green-50 hover:bg-green-100 ">
                                                    <div class="badge badge-sm badge-accent mb-2">
                                                        {{$empirelima->category_sesi}}</div>
                                                    <br>
                                                    {{$empirelima->time}} <br>
                                                    {{$empirelima->title_ses}} <br>
                                                    <span class="text-xs text-gray-600">{{$empirelima->room}}</span>
                                                </div>
                                            </button>
                                            @endif

                                            <dialog id="modal_{{$empirelima->id}}" class="modal">
                                                <div class="modal-box w-11/12 max-w-5xl text-start">
                                                    <div class="flex justify-between mb-3 text-gray-700">
                                                        <div class="text-start">
                                                            <h3 class="mb-0">Date: <span class="">
                                                                    {{\Carbon\Carbon::parse($empirelima->date)->format('d
                                                                    F
                                                                    Y')}}</span></h3>
                                                            <h3 class="mb-0">Time: <span class="">
                                                                    {{$empirelima->time}}</span></h3>
                                                        </div>
                                                        <div>
                                                            <p class="">Room :<span class="">
                                                                    {{$empirelima->room}}
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0 text-gray-700">Session : <span class="">
                                                            {{$empirelima->title_ses}}</span></p>
                                                    <p class="text-gray-700">Moderator : <span class="">
                                                            {{$empirelima->moderator}}
                                                        </span></p>
                                                    <div class="overflow-x-auto mt-5">
                                                        <table class="table text-gray-700">
                                                            <!-- head -->
                                                            <thead>
                                                                <tr>
                                                                    <th style="width: 18%">Time</th>
                                                                    <th>Topic</th>
                                                                    <th>Speaker</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($empirelima->schedules as $schedule)
                                                                <tr>
                                                                    <th scope="row">{{$schedule->time_speaker}}</th>
                                                                    <td>{{$schedule->topic_title}}</td>
                                                                    <td>{{$schedule->speaker}}</td>
                                                                </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="modal-action">
                                                        <form method="dialog">
                                                            <!-- if there is a button in form, it will close the modal -->
                                                            <button class="btn">Close</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </dialog>
                                            @endforeach
                                        </td>
                                        <td class="align-top">
                                            @foreach ($tigapuluh as $imperium)
                                            @if ($imperium->room == 'Imperium 1,2,3')
                                            <button class="hover:shadow-md block w-full my-1 hover:cursor-pointer"
                                                onclick="modal_{{$imperium->id}}.showModal()">
                                                <div
                                                    class="px-0 py-4 w-full rounded-lg bg-green-50 hover:bg-green-100 ">
                                                    <div class="badge badge-sm badge-accent mb-2">
                                                        {{$imperium->category_sesi}}</div>
                                                    <br>
                                                    {{$imperium->time}} <br>
                                                    {{$imperium->title_ses}} <br>
                                                    <span class="text-xs text-gray-600">{{$imperium->room}}</span>
                                                </div>
                                            </button>
                                            @endif

                                            <dialog id="modal_{{$imperium->id}}" class="modal">
                                                <div class="modal-box w-11/12 max-w-5xl text-start">
                                                    <div class="flex justify-between mb-3 text-gray-700">
                                                        <div class="text-start">
                                                            <h3 class="mb-0">Date: <span class="">
                                                                    {{\Carbon\Carbon::parse($imperium->date)->format('d
                                                                    F
                                                                    Y')}}</span></h3>
                                                            <h3 class="mb-0">Time: <span class="">
                                                                    {{$imperium->time}}</span></h3>
                                                        </div>
                                                        <div>
                                                            <p class="">Room :<span class="">
                                                                    {{$imperium->room}}
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0 text-gray-700">Session : <span class="">
                                                            {{$imperium->title_ses}}</span></p>
                                                    <p class="text-gray-700">Moderator : <span class="">
                                                            {{$imperium->moderator}}
                                                        </span></p>
                                                    <div class="overflow-x-auto mt-5">
                                                        <table class="table text-gray-700">
                                                            <!-- head -->
                                                            <thead>
                                                                <tr>
                                                                    <th style="width: 18%">Time</th>
                                                                    <th>Topic</th>
                                                                    <th>Speaker</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($imperium->schedules as $schedule)
                                                                <tr>
                                                                    <th scope="row">{{$schedule->time_speaker}}</th>
                                                                    <td>{{$schedule->topic_title}}</td>
                                                                    <td>{{$schedule->speaker}}</td>
                                                                </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="modal-action">
                                                        <form method="dialog">
                                                            <!-- if there is a button in form, it will close the modal -->
                                                            <button class="btn">Close</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </dialog>
                                            @endforeach
                                        </td>
                                        <td class="align-top">
                                            @foreach ($tigapuluh as $meridiensatu)
                                            @if ($meridiensatu->room == 'Meridien 1')
                                            <button class="hover:shadow-md block w-full my-1 hover:cursor-pointer"
                                                onclick="modal_{{$meridiensatu->id}}.showModal()">
                                                <div
                                                    class="px-0 py-4 w-full rounded-lg bg-green-50 hover:bg-green-100 ">
                                                    <div class="badge badge-sm badge-accent mb-2">
                                                        {{$meridiensatu->category_sesi}}</div>
                                                    <br>
                                                    {{$meridiensatu->time}} <br>
                                                    {{$meridiensatu->title_ses}} <br>
                                                    <span class="text-xs text-gray-600">{{$meridiensatu->room}}</span>
                                                </div>
                                            </button>
                                            @endif

                                            <dialog id="modal_{{$meridiensatu->id}}" class="modal">
                                                <div class="modal-box w-11/12 max-w-5xl text-start">
                                                    <div class="flex justify-between mb-3 text-gray-700">
                                                        <div class="text-start">
                                                            <h3 class="mb-0">Date: <span class="">
                                                                    {{\Carbon\Carbon::parse($meridiensatu->date)->format('d
                                                                    F
                                                                    Y')}}</span></h3>
                                                            <h3 class="mb-0">Time: <span class="">
                                                                    {{$meridiensatu->time}}</span></h3>
                                                        </div>
                                                        <div>
                                                            <p class="">Room :<span class="">
                                                                    {{$meridiensatu->room}}
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0 text-gray-700">Session : <span class="">
                                                            {{$meridiensatu->title_ses}}</span></p>
                                                    <p class="text-gray-700">Moderator : <span class="">
                                                            {{$meridiensatu->moderator}}
                                                        </span></p>
                                                    <div class="overflow-x-auto mt-5">
                                                        <table class="table text-gray-700">
                                                            <!-- head -->
                                                            <thead>
                                                                <tr>
                                                                    <th style="width: 18%">Time</th>
                                                                    <th>Topic</th>
                                                                    <th>Speaker</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($meridiensatu->schedules as $schedule)
                                                                <tr>
                                                                    <th scope="row">{{$schedule->time_speaker}}</th>
                                                                    <td>{{$schedule->topic_title}}</td>
                                                                    <td>{{$schedule->speaker}}</td>
                                                                </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="modal-action">
                                                        <form method="dialog">
                                                            <!-- if there is a button in form, it will close the modal -->
                                                            <button class="btn">Close</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </dialog>
                                            @endforeach
                                        </td>
                                        <td class="align-top">
                                            @foreach ($tigapuluh as $meridiendua)
                                            @if ($meridiendua->room == 'Meridien 2')
                                            <button class="hover:shadow-md block w-full my-1 hover:cursor-pointer"
                                                onclick="modal_{{$meridiendua->id}}.showModal()">
                                                <div
                                                    class="px-0 py-4 w-full rounded-lg bg-green-50 hover:bg-green-100 ">
                                                    <div class="badge badge-sm badge-accent mb-2">
                                                        {{$meridiendua->category_sesi}}</div>
                                                    <br>
                                                    {{$meridiendua->time}} <br>
                                                    {{$meridiendua->title_ses}} <br>
                                                    <span class="text-xs text-gray-600">{{$meridiendua->room}}</span>
                                                </div>
                                            </button>
                                            @endif

                                            <dialog id="modal_{{$meridiendua->id}}" class="modal">
                                                <div class="modal-box w-11/12 max-w-5xl text-start">
                                                    <div class="flex justify-between mb-3 text-gray-700">
                                                        <div class="text-start">
                                                            <h3 class="mb-0">Date: <span class="">
                                                                    {{\Carbon\Carbon::parse($meridiendua->date)->format('d
                                                                    F
                                                                    Y')}}</span></h3>
                                                            <h3 class="mb-0">Time: <span class="">
                                                                    {{$meridiendua->time}}</span></h3>
                                                        </div>
                                                        <div>
                                                            <p class="">Room :<span class="">
                                                                    {{$meridiendua->room}}
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0 text-gray-700">Session : <span class="">
                                                            {{$meridiendua->title_ses}}</span></p>
                                                    <p class="text-gray-700">Moderator : <span class="">
                                                            {{$meridiendua->moderator}}
                                                        </span></p>
                                                    <div class="overflow-x-auto mt-5">
                                                        <table class="table text-gray-700">
                                                            <!-- head -->
                                                            <thead>
                                                                <tr>
                                                                    <th style="width: 18%">Time</th>
                                                                    <th>Topic</th>
                                                                    <th>Speaker</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($meridiendua->schedules as $schedule)
                                                                <tr>
                                                                    <th scope="row">{{$schedule->time_speaker}}</th>
                                                                    <td>{{$schedule->topic_title}}</td>
                                                                    <td>{{$schedule->speaker}}</td>
                                                                </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="modal-action">
                                                        <form method="dialog">
                                                            <!-- if there is a button in form, it will close the modal -->
                                                            <button class="btn">Close</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </dialog>
                                            @endforeach
                                        </td>

                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div x-show="openTab === 2"
                        class="transition-all duration-300 bg-white p-4 rounded-lg shadow-md border-x-4 border-[#72c6b7]">

                        <div class="overflow-x-auto">
                            <table class="table">
                                <thead>
                                    <tr class="text-base font-semibold mb-2">
                                        <th style="width: 10%"></th>
                                        <th style="width: 10%"></th>
                                        <th style="width: 10%"></th>
                                        <th style="width: 10%"></th>
                                        <th style="width: 10%"></th>
                                        <th style="width: 10%"></th>
                                        <th style="width: 10%"></th>
                                        <th style="width: 10%"></th>
                                        <th style="width: 10%"></th>
                                        <th style="width: 10%"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="">
                                        <td class="align-top">
                                            @foreach ($satu as $pasteursatu)
                                            @if ($pasteursatu->room == 'Pasteur 1&2 Convention')
                                            <button class="hover:shadow-md block w-full my-1 hover:cursor-pointer"
                                                onclick="modal_{{$pasteursatu->id}}.showModal()">
                                                <div
                                                    class="px-0 py-4 w-full rounded-lg bg-green-50 hover:bg-green-100 ">
                                                    <div class="badge badge-sm badge-accent mb-2">
                                                        {{$pasteursatu->category_sesi}}</div>
                                                    <br>
                                                    {{$pasteursatu->time}} <br>
                                                    {{$pasteursatu->title_ses}} <br>
                                                    <span class="text-xs text-gray-600">{{$pasteursatu->room}}</span>
                                                </div>
                                            </button>
                                            @endif

                                            <dialog id="modal_{{$pasteursatu->id}}" class="modal">
                                                <div class="modal-box w-11/12 max-w-5xl text-start">
                                                    <div class="flex justify-between mb-3 text-gray-700">
                                                        <div class="text-start">
                                                            <h3 class="mb-0">Date: <span class="">
                                                                    {{\Carbon\Carbon::parse($pasteursatu->date)->format('d
                                                                    F
                                                                    Y')}}</span></h3>
                                                            <h3 class="mb-0">Time: <span class="">
                                                                    {{$pasteursatu->time}}</span></h3>
                                                        </div>
                                                        <div>
                                                            <p class="">Room :<span class="">
                                                                    {{$pasteursatu->room}}
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0 text-gray-700">Session : <span class="">
                                                            {{$pasteursatu->title_ses}}</span></p>
                                                    <p class="text-gray-700">Moderator : <span class="">
                                                            {{$pasteursatu->moderator}}
                                                        </span></p>
                                                    <div class="overflow-x-auto mt-5">
                                                        <table class="table text-gray-700">
                                                            <!-- head -->
                                                            <thead>
                                                                <tr>
                                                                    <th style="width: 18%">Time</th>
                                                                    <th>Topic</th>
                                                                    <th>Speaker</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($pasteursatu->schedules as $schedule)
                                                                <tr>
                                                                    <th scope="row">{{$schedule->time_speaker}}</th>
                                                                    <td>{{$schedule->topic_title}}</td>
                                                                    <td>{{$schedule->speaker}}</td>
                                                                </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="modal-action">
                                                        <form method="dialog">
                                                            <!-- if there is a button in form, it will close the modal -->
                                                            <button class="btn">Close</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </dialog>
                                            @endforeach
                                        </td>
                                        <td class="align-top">
                                            @foreach ($satu as $pasteurtiga)
                                            @if ($pasteurtiga->room == 'Pasteur 3 Convention')
                                            <button class="hover:shadow-md block w-full my-1 hover:cursor-pointer"
                                                onclick="modal_{{$pasteurtiga->id}}.showModal()">
                                                <div
                                                    class="px-0 py-4 w-full rounded-lg bg-green-50 hover:bg-green-100 ">
                                                    <div class="badge badge-sm badge-accent mb-2">
                                                        {{$pasteurtiga->category_sesi}}</div>
                                                    <br>
                                                    {{$pasteurtiga->time}} <br>
                                                    {{$pasteurtiga->title_ses}} <br>
                                                    <span class="text-xs text-gray-600">{{$pasteurtiga->room}}</span>
                                                </div>
                                            </button>
                                            @endif

                                            <dialog id="modal_{{$pasteurtiga->id}}" class="modal">
                                                <div class="modal-box w-11/12 max-w-5xl text-start">
                                                    <div class="flex justify-between mb-3 text-gray-700">
                                                        <div class="text-start">
                                                            <h3 class="mb-0">Date: <span class="">
                                                                    {{\Carbon\Carbon::parse($pasteurtiga->date)->format('d
                                                                    F
                                                                    Y')}}</span></h3>
                                                            <h3 class="mb-0">Time: <span class="">
                                                                    {{$pasteurtiga->time}}</span></h3>
                                                        </div>
                                                        <div>
                                                            <p class="">Room :<span class="">
                                                                    {{$pasteurtiga->room}}
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0 text-gray-700">Session : <span class="">
                                                            {{$pasteurtiga->title_ses}}</span></p>
                                                    <p class="text-gray-700">Moderator : <span class="">
                                                            {{$pasteurtiga->moderator}}
                                                        </span></p>
                                                    <div class="overflow-x-auto mt-5">
                                                        <table class="table text-gray-700">
                                                            <!-- head -->
                                                            <thead>
                                                                <tr>
                                                                    <th style="width: 18%">Time</th>
                                                                    <th>Topic</th>
                                                                    <th>Speaker</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($pasteurtiga->schedules as $schedule)
                                                                <tr>
                                                                    <th scope="row">{{$schedule->time_speaker}}</th>
                                                                    <td>{{$schedule->topic_title}}</td>
                                                                    <td>{{$schedule->speaker}}</td>
                                                                </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="modal-action">
                                                        <form method="dialog">
                                                            <!-- if there is a button in form, it will close the modal -->
                                                            <button class="btn">Close</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </dialog>
                                            @endforeach
                                        </td>
                                        <td class="align-top">
                                            @foreach ($satu as $empiresatu)
                                            @if ($empiresatu->room == 'Empire 1')
                                            <button class="hover:shadow-md block w-full my-1 hover:cursor-pointer"
                                                onclick="modal_{{$empiresatu->id}}.showModal()">
                                                <div
                                                    class="px-0 py-4 w-full rounded-lg bg-green-50 hover:bg-green-100 ">
                                                    <div class="badge badge-sm badge-accent mb-2">
                                                        {{$empiresatu->category_sesi}}</div>
                                                    <br>
                                                    {{$empiresatu->time}} <br>
                                                    {{$empiresatu->title_ses}} <br>
                                                    <span class="text-xs text-gray-600">{{$empiresatu->room}}</span>
                                                </div>
                                            </button>
                                            @endif

                                            <dialog id="modal_{{$empiresatu->id}}" class="modal">
                                                <div class="modal-box w-11/12 max-w-5xl text-start">
                                                    <div class="flex justify-between mb-3 text-gray-700">
                                                        <div class="text-start">
                                                            <h3 class="mb-0">Date: <span class="">
                                                                    {{\Carbon\Carbon::parse($empiresatu->date)->format('d
                                                                    F
                                                                    Y')}}</span></h3>
                                                            <h3 class="mb-0">Time: <span class="">
                                                                    {{$empiresatu->time}}</span></h3>
                                                        </div>
                                                        <div>
                                                            <p class="">Room :<span class="">
                                                                    {{$empiresatu->room}}
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0 text-gray-700">Session : <span class="">
                                                            {{$empiresatu->title_ses}}</span></p>
                                                    <p class="text-gray-700">Moderator : <span class="">
                                                            {{$empiresatu->moderator}}
                                                        </span></p>
                                                    <div class="overflow-x-auto mt-5">
                                                        <table class="table text-gray-700">
                                                            <!-- head -->
                                                            <thead>
                                                                <tr>
                                                                    <th style="width: 18%">Time</th>
                                                                    <th>Topic</th>
                                                                    <th>Speaker</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($empiresatu->schedules as $schedule)
                                                                <tr>
                                                                    <th scope="row">{{$schedule->time_speaker}}</th>
                                                                    <td>{{$schedule->topic_title}}</td>
                                                                    <td>{{$schedule->speaker}}</td>
                                                                </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="modal-action">
                                                        <form method="dialog">
                                                            <!-- if there is a button in form, it will close the modal -->
                                                            <button class="btn">Close</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </dialog>
                                            @endforeach
                                        </td>
                                        <td class="align-top">
                                            @foreach ($satu as $empiredua)
                                            @if ($empiredua->room == 'Empire 2')
                                            <button class="hover:shadow-md block w-full my-1 hover:cursor-pointer"
                                                onclick="modal_{{$empiredua->id}}.showModal()">
                                                <div
                                                    class="px-0 py-4 w-full rounded-lg bg-green-50 hover:bg-green-100 ">
                                                    <div class="badge badge-sm badge-accent mb-2">
                                                        {{$empiredua->category_sesi}}</div>
                                                    <br>
                                                    {{$empiredua->time}} <br>
                                                    {{$empiredua->title_ses}} <br>
                                                    <span class="text-xs text-gray-600">{{$empiredua->room}}</span>
                                                </div>
                                            </button>
                                            @endif

                                            <dialog id="modal_{{$empiredua->id}}" class="modal">
                                                <div class="modal-box w-11/12 max-w-5xl text-start">
                                                    <div class="flex justify-between mb-3 text-gray-700">
                                                        <div class="text-start">
                                                            <h3 class="mb-0">Date: <span class="">
                                                                    {{\Carbon\Carbon::parse($empiredua->date)->format('d
                                                                    F
                                                                    Y')}}</span></h3>
                                                            <h3 class="mb-0">Time: <span class="">
                                                                    {{$empiredua->time}}</span></h3>
                                                        </div>
                                                        <div>
                                                            <p class="">Room :<span class="">
                                                                    {{$empiredua->room}}
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0 text-gray-700">Session : <span class="">
                                                            {{$empiredua->title_ses}}</span></p>
                                                    <p class="text-gray-700">Moderator : <span class="">
                                                            {{$empiredua->moderator}}
                                                        </span></p>
                                                    <div class="overflow-x-auto mt-5">
                                                        <table class="table text-gray-700">
                                                            <!-- head -->
                                                            <thead>
                                                                <tr>
                                                                    <th style="width: 18%">Time</th>
                                                                    <th>Topic</th>
                                                                    <th>Speaker</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($empiredua->schedules as $schedule)
                                                                <tr>
                                                                    <th scope="row">{{$schedule->time_speaker}}</th>
                                                                    <td>{{$schedule->topic_title}}</td>
                                                                    <td>{{$schedule->speaker}}</td>
                                                                </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="modal-action">
                                                        <form method="dialog">
                                                            <!-- if there is a button in form, it will close the modal -->
                                                            <button class="btn">Close</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </dialog>
                                            @endforeach
                                        </td>
                                        <td class="align-top">
                                            @foreach ($satu as $empiretiga)
                                            @if ($empiretiga->room == 'Empire 3')
                                            <button class="hover:shadow-md block w-full my-1 hover:cursor-pointer"
                                                onclick="modal_{{$empiretiga->id}}.showModal()">
                                                <div
                                                    class="px-0 py-4 w-full rounded-lg bg-green-50 hover:bg-green-100 ">
                                                    <div class="badge badge-sm badge-accent mb-2">
                                                        {{$empiretiga->category_sesi}}</div>
                                                    <br>
                                                    {{$empiretiga->time}} <br>
                                                    {{$empiretiga->title_ses}} <br>
                                                    <span class="text-xs text-gray-600">{{$empiretiga->room}}</span>
                                                </div>
                                            </button>
                                            @endif

                                            <dialog id="modal_{{$empiretiga->id}}" class="modal">
                                                <div class="modal-box w-11/12 max-w-5xl text-start">
                                                    <div class="flex justify-between mb-3 text-gray-700">
                                                        <div class="text-start">
                                                            <h3 class="mb-0">Date: <span class="">
                                                                    {{\Carbon\Carbon::parse($empiretiga->date)->format('d
                                                                    F
                                                                    Y')}}</span></h3>
                                                            <h3 class="mb-0">Time: <span class="">
                                                                    {{$empiretiga->time}}</span></h3>
                                                        </div>
                                                        <div>
                                                            <p class="">Room :<span class="">
                                                                    {{$empiretiga->room}}
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0 text-gray-700">Session : <span class="">
                                                            {{$empiretiga->title_ses}}</span></p>
                                                    <p class="text-gray-700">Moderator : <span class="">
                                                            {{$empiretiga->moderator}}
                                                        </span></p>
                                                    <div class="overflow-x-auto mt-5">
                                                        <table class="table text-gray-700">
                                                            <!-- head -->
                                                            <thead>
                                                                <tr>
                                                                    <th style="width: 18%">Time</th>
                                                                    <th>Topic</th>
                                                                    <th>Speaker</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($empiretiga->schedules as $schedule)
                                                                <tr>
                                                                    <th scope="row">{{$schedule->time_speaker}}</th>
                                                                    <td>{{$schedule->topic_title}}</td>
                                                                    <td>{{$schedule->speaker}}</td>
                                                                </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="modal-action">
                                                        <form method="dialog">
                                                            <!-- if there is a button in form, it will close the modal -->
                                                            <button class="btn">Close</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </dialog>
                                            @endforeach
                                        </td>
                                        <td class="align-top">
                                            @foreach ($satu as $empireempat)
                                            @if ($empireempat->room == 'Empire 4')
                                            <button class="hover:shadow-md block w-full my-1 hover:cursor-pointer"
                                                onclick="modal_{{$empireempat->id}}.showModal()">
                                                <div
                                                    class="px-0 py-4 w-full rounded-lg bg-green-50 hover:bg-green-100 ">
                                                    <div class="badge badge-sm badge-accent mb-2">
                                                        {{$empireempat->category_sesi}}</div>
                                                    <br>
                                                    {{$empireempat->time}} <br>
                                                    {{$empireempat->title_ses}} <br>
                                                    <span class="text-xs text-gray-600">{{$empireempat->room}}</span>
                                                </div>
                                            </button>
                                            @endif

                                            <dialog id="modal_{{$empireempat->id}}" class="modal">
                                                <div class="modal-box w-11/12 max-w-5xl text-start">
                                                    <div class="flex justify-between mb-3 text-gray-700">
                                                        <div class="text-start">
                                                            <h3 class="mb-0">Date: <span class="">
                                                                    {{\Carbon\Carbon::parse($empireempat->date)->format('d
                                                                    F
                                                                    Y')}}</span></h3>
                                                            <h3 class="mb-0">Time: <span class="">
                                                                    {{$empireempat->time}}</span></h3>
                                                        </div>
                                                        <div>
                                                            <p class="">Room :<span class="">
                                                                    {{$empireempat->room}}
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0 text-gray-700">Session : <span class="">
                                                            {{$empireempat->title_ses}}</span></p>
                                                    <p class="text-gray-700">Moderator : <span class="">
                                                            {{$empireempat->moderator}}
                                                        </span></p>
                                                    <div class="overflow-x-auto mt-5">
                                                        <table class="table text-gray-700">
                                                            <!-- head -->
                                                            <thead>
                                                                <tr>
                                                                    <th style="width: 18%">Time</th>
                                                                    <th>Topic</th>
                                                                    <th>Speaker</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($empireempat->schedules as $schedule)
                                                                <tr>
                                                                    <th scope="row">{{$schedule->time_speaker}}</th>
                                                                    <td>{{$schedule->topic_title}}</td>
                                                                    <td>{{$schedule->speaker}}</td>
                                                                </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="modal-action">
                                                        <form method="dialog">
                                                            <!-- if there is a button in form, it will close the modal -->
                                                            <button class="btn">Close</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </dialog>
                                            @endforeach
                                        </td>
                                        <td class="align-top">
                                            @foreach ($satu as $empirelima)
                                            @if ($empirelima->room == 'Empire 5')
                                            <button class="hover:shadow-md block w-full my-1 hover:cursor-pointer"
                                                onclick="modal_{{$empirelima->id}}.showModal()">
                                                <div
                                                    class="px-0 py-4 w-full rounded-lg bg-green-50 hover:bg-green-100 ">
                                                    <div class="badge badge-sm badge-accent mb-2">
                                                        {{$empirelima->category_sesi}}</div>
                                                    <br>
                                                    {{$empirelima->time}} <br>
                                                    {{$empirelima->title_ses}} <br>
                                                    <span class="text-xs text-gray-600">{{$empirelima->room}}</span>
                                                </div>
                                            </button>
                                            @endif

                                            <dialog id="modal_{{$empirelima->id}}" class="modal">
                                                <div class="modal-box w-11/12 max-w-5xl text-start">
                                                    <div class="flex justify-between mb-3 text-gray-700">
                                                        <div class="text-start">
                                                            <h3 class="mb-0">Date: <span class="">
                                                                    {{\Carbon\Carbon::parse($empirelima->date)->format('d
                                                                    F
                                                                    Y')}}</span></h3>
                                                            <h3 class="mb-0">Time: <span class="">
                                                                    {{$empirelima->time}}</span></h3>
                                                        </div>
                                                        <div>
                                                            <p class="">Room :<span class="">
                                                                    {{$empirelima->room}}
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0 text-gray-700">Session : <span class="">
                                                            {{$empirelima->title_ses}}</span></p>
                                                    <p class="text-gray-700">Moderator : <span class="">
                                                            {{$empirelima->moderator}}
                                                        </span></p>
                                                    <div class="overflow-x-auto mt-5">
                                                        <table class="table text-gray-700">
                                                            <!-- head -->
                                                            <thead>
                                                                <tr>
                                                                    <th style="width: 18%">Time</th>
                                                                    <th>Topic</th>
                                                                    <th>Speaker</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($empirelima->schedules as $schedule)
                                                                <tr>
                                                                    <th scope="row">{{$schedule->time_speaker}}</th>
                                                                    <td>{{$schedule->topic_title}}</td>
                                                                    <td>{{$schedule->speaker}}</td>
                                                                </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="modal-action">
                                                        <form method="dialog">
                                                            <!-- if there is a button in form, it will close the modal -->
                                                            <button class="btn">Close</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </dialog>
                                            @endforeach
                                        </td>
                                        <td class="align-top">
                                            @foreach ($satu as $imperium)
                                            @if ($imperium->room == 'Imperium 1,2,3')
                                            <button class="hover:shadow-md block w-full my-1 hover:cursor-pointer"
                                                onclick="modal_{{$imperium->id}}.showModal()">
                                                <div
                                                    class="px-0 py-4 w-full rounded-lg bg-green-50 hover:bg-green-100 ">
                                                    <div class="badge badge-sm badge-accent mb-2">
                                                        {{$imperium->category_sesi}}</div>
                                                    <br>
                                                    {{$imperium->time}} <br>
                                                    {{$imperium->title_ses}} <br>
                                                    <span class="text-xs text-gray-600">{{$imperium->room}}</span>
                                                </div>
                                            </button>
                                            @endif

                                            <dialog id="modal_{{$imperium->id}}" class="modal">
                                                <div class="modal-box w-11/12 max-w-5xl text-start">
                                                    <div class="flex justify-between mb-3 text-gray-700">
                                                        <div class="text-start">
                                                            <h3 class="mb-0">Date: <span class="">
                                                                    {{\Carbon\Carbon::parse($imperium->date)->format('d
                                                                    F
                                                                    Y')}}</span></h3>
                                                            <h3 class="mb-0">Time: <span class="">
                                                                    {{$imperium->time}}</span></h3>
                                                        </div>
                                                        <div>
                                                            <p class="">Room :<span class="">
                                                                    {{$imperium->room}}
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0 text-gray-700">Session : <span class="">
                                                            {{$imperium->title_ses}}</span></p>
                                                    <p class="text-gray-700">Moderator : <span class="">
                                                            {{$imperium->moderator}}
                                                        </span></p>
                                                    <div class="overflow-x-auto mt-5">
                                                        <table class="table text-gray-700">
                                                            <!-- head -->
                                                            <thead>
                                                                <tr>
                                                                    <th style="width: 18%">Time</th>
                                                                    <th>Topic</th>
                                                                    <th>Speaker</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($imperium->schedules as $schedule)
                                                                <tr>
                                                                    <th scope="row">{{$schedule->time_speaker}}</th>
                                                                    <td>{{$schedule->topic_title}}</td>
                                                                    <td>{{$schedule->speaker}}</td>
                                                                </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="modal-action">
                                                        <form method="dialog">
                                                            <!-- if there is a button in form, it will close the modal -->
                                                            <button class="btn">Close</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </dialog>
                                            @endforeach
                                        </td>
                                        <td class="align-top">
                                            @foreach ($satu as $meridiensatu)
                                            @if ($meridiensatu->room == 'Meridien 1')
                                            <button class="hover:shadow-md block w-full my-1 hover:cursor-pointer"
                                                onclick="modal_{{$meridiensatu->id}}.showModal()">
                                                <div
                                                    class="px-0 py-4 w-full rounded-lg bg-green-50 hover:bg-green-100 ">
                                                    <div class="badge badge-sm badge-accent mb-2">
                                                        {{$meridiensatu->category_sesi}}</div>
                                                    <br>
                                                    {{$meridiensatu->time}} <br>
                                                    {{$meridiensatu->title_ses}} <br>
                                                    <span class="text-xs text-gray-600">{{$meridiensatu->room}}</span>
                                                </div>
                                            </button>
                                            @endif

                                            <dialog id="modal_{{$meridiensatu->id}}" class="modal">
                                                <div class="modal-box w-11/12 max-w-5xl text-start">
                                                    <div class="flex justify-between mb-3 text-gray-700">
                                                        <div class="text-start">
                                                            <h3 class="mb-0">Date: <span class="">
                                                                    {{\Carbon\Carbon::parse($meridiensatu->date)->format('d
                                                                    F
                                                                    Y')}}</span></h3>
                                                            <h3 class="mb-0">Time: <span class="">
                                                                    {{$meridiensatu->time}}</span></h3>
                                                        </div>
                                                        <div>
                                                            <p class="">Room :<span class="">
                                                                    {{$meridiensatu->room}}
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0 text-gray-700">Session : <span class="">
                                                            {{$meridiensatu->title_ses}}</span></p>
                                                    <p class="text-gray-700">Moderator : <span class="">
                                                            {{$meridiensatu->moderator}}
                                                        </span></p>
                                                    <div class="overflow-x-auto mt-5">
                                                        <table class="table text-gray-700">
                                                            <!-- head -->
                                                            <thead>
                                                                <tr>
                                                                    <th style="width: 18%">Time</th>
                                                                    <th>Topic</th>
                                                                    <th>Speaker</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($meridiensatu->schedules as $schedule)
                                                                <tr>
                                                                    <th scope="row">{{$schedule->time_speaker}}</th>
                                                                    <td>{{$schedule->topic_title}}</td>
                                                                    <td>{{$schedule->speaker}}</td>
                                                                </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="modal-action">
                                                        <form method="dialog">
                                                            <!-- if there is a button in form, it will close the modal -->
                                                            <button class="btn">Close</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </dialog>
                                            @endforeach
                                        </td>
                                        <td class="align-top">
                                            @foreach ($satu as $meridiendua)
                                            @if ($meridiendua->room == 'Meridien 2')
                                            <button class="hover:shadow-md block w-full my-1 hover:cursor-pointer"
                                                onclick="modal_{{$meridiendua->id}}.showModal()">
                                                <div
                                                    class="px-0 py-4 w-full rounded-lg bg-green-50 hover:bg-green-100 ">
                                                    <div class="badge badge-sm badge-accent mb-2">
                                                        {{$meridiendua->category_sesi}}</div>
                                                    <br>
                                                    {{$meridiendua->time}} <br>
                                                    {{$meridiendua->title_ses}} <br>
                                                    <span class="text-xs text-gray-600">{{$meridiendua->room}}</span>
                                                </div>
                                            </button>
                                            @endif

                                            <dialog id="modal_{{$meridiendua->id}}" class="modal">
                                                <div class="modal-box w-11/12 max-w-5xl text-start">
                                                    <div class="flex justify-between mb-3 text-gray-700">
                                                        <div class="text-start">
                                                            <h3 class="mb-0">Date: <span class="">
                                                                    {{\Carbon\Carbon::parse($meridiendua->date)->format('d
                                                                    F
                                                                    Y')}}</span></h3>
                                                            <h3 class="mb-0">Time: <span class="">
                                                                    {{$meridiendua->time}}</span></h3>
                                                        </div>
                                                        <div>
                                                            <p class="">Room :<span class="">
                                                                    {{$meridiendua->room}}
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0 text-gray-700">Session : <span class="">
                                                            {{$meridiendua->title_ses}}</span></p>
                                                    <p class="text-gray-700">Moderator : <span class="">
                                                            {{$meridiendua->moderator}}
                                                        </span></p>
                                                    <div class="overflow-x-auto mt-5">
                                                        <table class="table text-gray-700">
                                                            <!-- head -->
                                                            <thead>
                                                                <tr>
                                                                    <th style="width: 18%">Time</th>
                                                                    <th>Topic</th>
                                                                    <th>Speaker</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($meridiendua->schedules as $schedule)
                                                                <tr>
                                                                    <th scope="row">{{$schedule->time_speaker}}</th>
                                                                    <td>{{$schedule->topic_title}}</td>
                                                                    <td>{{$schedule->speaker}}</td>
                                                                </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="modal-action">
                                                        <form method="dialog">
                                                            <!-- if there is a button in form, it will close the modal -->
                                                            <button class="btn">Close</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </dialog>
                                            @endforeach
                                        </td>

                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>

                    <div x-show="openTab === 3"
                        class="transition-all duration-300 bg-white p-4 rounded-lg shadow-md border-x-4 border-[#72c6b7]">

                        <div class="overflow-x-auto">
                            <table class="table">
                                <thead>
                                    <tr class="text-base font-semibold mb-2">
                                        <th style="width: 20%"></th>
                                        <th style="width: 20%"></th>
                                        <th style="width: 20%"></th>
                                        <th style="width: 20%"></th>
                                        <th style="width: 20%"></th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="">
                                        <td class="align-top">
                                            @foreach ($dua as $pasteursatu)
                                            @if ($pasteursatu->room == 'Pasteur 1&2 Convention')
                                            <button class="hover:shadow-md block w-full my-1 hover:cursor-pointer"
                                                onclick="modal_{{$pasteursatu->id}}.showModal()">
                                                <div
                                                    class="px-0 py-4 w-full rounded-lg bg-green-50 hover:bg-green-100 ">
                                                    <div class="badge badge-sm badge-accent mb-2">
                                                        {{$pasteursatu->category_sesi}}</div>
                                                    <br>
                                                    {{$pasteursatu->time}} <br>
                                                    {{$pasteursatu->title_ses}} <br>
                                                    <span class="text-xs text-gray-600">{{$pasteursatu->room}}</span>
                                                </div>
                                            </button>
                                            @endif

                                            <dialog id="modal_{{$pasteursatu->id}}" class="modal">
                                                <div class="modal-box w-11/12 max-w-5xl text-start">
                                                    <div class="flex justify-between mb-3 text-gray-700">
                                                        <div class="text-start">
                                                            <h3 class="mb-0">Date: <span class="">
                                                                    {{\Carbon\Carbon::parse($pasteursatu->date)->format('d
                                                                    F
                                                                    Y')}}</span></h3>
                                                            <h3 class="mb-0">Time: <span class="">
                                                                    {{$pasteursatu->time}}</span></h3>
                                                        </div>
                                                        <div>
                                                            <p class="">Room :<span class="">
                                                                    {{$pasteursatu->room}}
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0 text-gray-700">Session : <span class="">
                                                            {{$pasteursatu->title_ses}}</span></p>
                                                    <p class="text-gray-700">Moderator : <span class="">
                                                            {{$pasteursatu->moderator}}
                                                        </span></p>
                                                    <div class="overflow-x-auto mt-5">
                                                        <table class="table text-gray-700">
                                                            <!-- head -->
                                                            <thead>
                                                                <tr>
                                                                    <th style="width: 18%">Time</th>
                                                                    <th>Topic</th>
                                                                    <th>Speaker</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($pasteursatu->schedules as $schedule)
                                                                <tr>
                                                                    <th scope="row">{{$schedule->time_speaker}}</th>
                                                                    <td>{{$schedule->topic_title}}</td>
                                                                    <td>{{$schedule->speaker}}</td>
                                                                </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="modal-action">
                                                        <form method="dialog">
                                                            <!-- if there is a button in form, it will close the modal -->
                                                            <button class="btn">Close</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </dialog>
                                            @endforeach
                                        </td>
                                        <td class="align-top">
                                            @foreach ($dua as $pasteurtiga)
                                            @if ($pasteurtiga->room == 'Pasteur 3 Convention')
                                            <button class="hover:shadow-md block w-full my-1 hover:cursor-pointer"
                                                onclick="modal_{{$pasteurtiga->id}}.showModal()">
                                                <div
                                                    class="px-0 py-4 w-full rounded-lg bg-green-50 hover:bg-green-100 ">
                                                    <div class="badge badge-sm badge-accent mb-2">
                                                        {{$pasteurtiga->category_sesi}}</div>
                                                    <br>
                                                    {{$pasteurtiga->time}} <br>
                                                    {{$pasteurtiga->title_ses}} <br>
                                                    <span class="text-xs text-gray-600">{{$pasteurtiga->room}}</span>
                                                </div>
                                            </button>
                                            @endif

                                            <dialog id="modal_{{$pasteurtiga->id}}" class="modal">
                                                <div class="modal-box w-11/12 max-w-5xl text-start">
                                                    <div class="flex justify-between mb-3 text-gray-700">
                                                        <div class="text-start">
                                                            <h3 class="mb-0">Date: <span class="">
                                                                    {{\Carbon\Carbon::parse($pasteurtiga->date)->format('d
                                                                    F
                                                                    Y')}}</span></h3>
                                                            <h3 class="mb-0">Time: <span class="">
                                                                    {{$pasteurtiga->time}}</span></h3>
                                                        </div>
                                                        <div>
                                                            <p class="">Room :<span class="">
                                                                    {{$pasteurtiga->room}}
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0 text-gray-700">Session : <span class="">
                                                            {{$pasteurtiga->title_ses}}</span></p>
                                                    <p class="text-gray-700">Moderator : <span class="">
                                                            {{$pasteurtiga->moderator}}
                                                        </span></p>
                                                    <div class="overflow-x-auto mt-5">
                                                        <table class="table text-gray-700">
                                                            <!-- head -->
                                                            <thead>
                                                                <tr>
                                                                    <th style="width: 18%">Time</th>
                                                                    <th>Topic</th>
                                                                    <th>Speaker</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($pasteurtiga->schedules as $schedule)
                                                                <tr>
                                                                    <th scope="row">{{$schedule->time_speaker}}</th>
                                                                    <td>{{$schedule->topic_title}}</td>
                                                                    <td>{{$schedule->speaker}}</td>
                                                                </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="modal-action">
                                                        <form method="dialog">
                                                            <!-- if there is a button in form, it will close the modal -->
                                                            <button class="btn">Close</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </dialog>
                                            @endforeach
                                        </td>
                                        <td class="align-top">
                                            @foreach ($dua as $imperium)
                                            @if ($imperium->room == 'Imperium 1,2,3')
                                            <button class="hover:shadow-md block w-full my-1 hover:cursor-pointer"
                                                onclick="modal_{{$imperium->id}}.showModal()">
                                                <div
                                                    class="px-0 py-4 w-full rounded-lg bg-green-50 hover:bg-green-100 ">
                                                    <div class="badge badge-sm badge-accent mb-2">
                                                        {{$imperium->category_sesi}}</div>
                                                    <br>
                                                    {{$imperium->time}} <br>
                                                    {{$imperium->title_ses}} <br>
                                                    <span class="text-xs text-gray-600">{{$imperium->room}}</span>
                                                </div>
                                            </button>
                                            @endif

                                            <dialog id="modal_{{$imperium->id}}" class="modal">
                                                <div class="modal-box w-11/12 max-w-5xl text-start">
                                                    <div class="flex justify-between mb-3 text-gray-700">
                                                        <div class="text-start">
                                                            <h3 class="mb-0">Date: <span class="">
                                                                    {{\Carbon\Carbon::parse($imperium->date)->format('d
                                                                    F
                                                                    Y')}}</span></h3>
                                                            <h3 class="mb-0">Time: <span class="">
                                                                    {{$imperium->time}}</span></h3>
                                                        </div>
                                                        <div>
                                                            <p class="">Room :<span class="">
                                                                    {{$imperium->room}}
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0 text-gray-700">Session : <span class="">
                                                            {{$imperium->title_ses}}</span></p>
                                                    <p class="text-gray-700">Moderator : <span class="">
                                                            {{$imperium->moderator}}
                                                        </span></p>
                                                    <div class="overflow-x-auto mt-5">
                                                        <table class="table text-gray-700">
                                                            <!-- head -->
                                                            <thead>
                                                                <tr>
                                                                    <th style="width: 18%">Time</th>
                                                                    <th>Topic</th>
                                                                    <th>Speaker</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($imperium->schedules as $schedule)
                                                                <tr>
                                                                    <th scope="row">{{$schedule->time_speaker}}</th>
                                                                    <td>{{$schedule->topic_title}}</td>
                                                                    <td>{{$schedule->speaker}}</td>
                                                                </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="modal-action">
                                                        <form method="dialog">
                                                            <!-- if there is a button in form, it will close the modal -->
                                                            <button class="btn">Close</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </dialog>
                                            @endforeach
                                        </td>
                                        <td class="align-top">
                                            @foreach ($dua as $empiresatu)
                                            @if ($empiresatu->room == 'Empire 1')
                                            <button class="hover:shadow-md block w-full my-1 hover:cursor-pointer"
                                                onclick="modal_{{$empiresatu->id}}.showModal()">
                                                <div
                                                    class="px-0 py-4 w-full rounded-lg bg-green-50 hover:bg-green-100 ">
                                                    <div class="badge badge-sm badge-accent mb-2">
                                                        {{$empiresatu->category_sesi}}</div>
                                                    <br>
                                                    {{$empiresatu->time}} <br>
                                                    {{$empiresatu->title_ses}} <br>
                                                    <span class="text-xs text-gray-600">{{$empiresatu->room}}</span>
                                                </div>
                                            </button>
                                            @endif

                                            <dialog id="modal_{{$empiresatu->id}}" class="modal">
                                                <div class="modal-box w-11/12 max-w-5xl text-start">
                                                    <div class="flex justify-between mb-3 text-gray-700">
                                                        <div class="text-start">
                                                            <h3 class="mb-0">Date: <span class="">
                                                                    {{\Carbon\Carbon::parse($empiresatu->date)->format('d
                                                                    F
                                                                    Y')}}</span></h3>
                                                            <h3 class="mb-0">Time: <span class="">
                                                                    {{$empiresatu->time}}</span></h3>
                                                        </div>
                                                        <div>
                                                            <p class="">Room :<span class="">
                                                                    {{$empiresatu->room}}
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0 text-gray-700">Session : <span class="">
                                                            {{$empiresatu->title_ses}}</span></p>
                                                    <p class="text-gray-700">Moderator : <span class="">
                                                            {{$empiresatu->moderator}}
                                                        </span></p>
                                                    <div class="overflow-x-auto mt-5">
                                                        <table class="table text-gray-700">
                                                            <!-- head -->
                                                            <thead>
                                                                <tr>
                                                                    <th style="width: 18%">Time</th>
                                                                    <th>Topic</th>
                                                                    <th>Speaker</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($empiresatu->schedules as $schedule)
                                                                <tr>
                                                                    <th scope="row">{{$schedule->time_speaker}}</th>
                                                                    <td>{{$schedule->topic_title}}</td>
                                                                    <td>{{$schedule->speaker}}</td>
                                                                </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="modal-action">
                                                        <form method="dialog">
                                                            <!-- if there is a button in form, it will close the modal -->
                                                            <button class="btn">Close</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </dialog>
                                            @endforeach
                                        </td>
                                        <td class="align-top">
                                            @foreach ($dua as $empiredua)
                                            @if ($empiredua->room == 'Empire 2')
                                            <button class="hover:shadow-md block w-full my-1 hover:cursor-pointer"
                                                onclick="modal_{{$empiredua->id}}.showModal()">
                                                <div
                                                    class="px-0 py-4 w-full rounded-lg bg-green-50 hover:bg-green-100 ">
                                                    <div class="badge badge-sm badge-accent mb-2">
                                                        {{$empiredua->category_sesi}}</div>
                                                    <br>
                                                    {{$empiredua->time}} <br>
                                                    {{$empiredua->title_ses}} <br>
                                                    <span class="text-xs text-gray-600">{{$empiredua->room}}</span>
                                                </div>
                                            </button>
                                            @endif

                                            <dialog id="modal_{{$empiredua->id}}" class="modal">
                                                <div class="modal-box w-11/12 max-w-5xl text-start">
                                                    <div class="flex justify-between mb-3 text-gray-700">
                                                        <div class="text-start">
                                                            <h3 class="mb-0">Date: <span class="">
                                                                    {{\Carbon\Carbon::parse($empiredua->date)->format('d
                                                                    F
                                                                    Y')}}</span></h3>
                                                            <h3 class="mb-0">Time: <span class="">
                                                                    {{$empiredua->time}}</span></h3>
                                                        </div>
                                                        <div>
                                                            <p class="">Room :<span class="">
                                                                    {{$empiredua->room}}
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0 text-gray-700">Session : <span class="">
                                                            {{$empiredua->title_ses}}</span></p>
                                                    <p class="text-gray-700">Moderator : <span class="">
                                                            {{$empiredua->moderator}}
                                                        </span></p>
                                                    <div class="overflow-x-auto mt-5">
                                                        <table class="table text-gray-700">
                                                            <!-- head -->
                                                            <thead>
                                                                <tr>
                                                                    <th style="width: 18%">Time</th>
                                                                    <th>Topic</th>
                                                                    <th>Speaker</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($empiredua->schedules as $schedule)
                                                                <tr>
                                                                    <th scope="row">{{$schedule->time_speaker}}</th>
                                                                    <td>{{$schedule->topic_title}}</td>
                                                                    <td>{{$schedule->speaker}}</td>
                                                                </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="modal-action">
                                                        <form method="dialog">
                                                            <!-- if there is a button in form, it will close the modal -->
                                                            <button class="btn">Close</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </dialog>
                                            @endforeach
                                        </td>


                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                    <div x-show="openTab === 4"
                        class="transition-all duration-300 bg-white p-4 rounded-lg shadow-md border-x-4 border-[#72c6b7]">
                        <div class="overflow-x-auto">
                            <table class="table">
                                <thead>
                                    <tr class="text-base font-semibold mb-2">
                                        <th style="width: 20%"></th>
                                        <th style="width: 20%"></th>
                                        <th style="width: 20%"></th>
                                        <th style="width: 20%"></th>
                                        <th style="width: 20%"></th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="">
                                        <td class="align-top">
                                            @foreach ($tiga as $pasteursatu)
                                            @if ($pasteursatu->room == 'Pasteur 1&2 Convention')
                                            <button class="hover:shadow-md block w-full my-1 hover:cursor-pointer"
                                                onclick="modal_{{$pasteursatu->id}}.showModal()">
                                                <div
                                                    class="px-0 py-4 w-full rounded-lg bg-green-50 hover:bg-green-100 ">
                                                    <div class="badge badge-sm badge-accent mb-2">
                                                        {{$pasteursatu->category_sesi}}</div>
                                                    <br>
                                                    {{$pasteursatu->time}} <br>
                                                    {{$pasteursatu->title_ses}} <br>
                                                    <span class="text-xs text-gray-600">{{$pasteursatu->room}}</span>
                                                </div>
                                            </button>
                                            @endif

                                            <dialog id="modal_{{$pasteursatu->id}}" class="modal">
                                                <div class="modal-box w-11/12 max-w-5xl text-start">
                                                    <div class="flex justify-between mb-3 text-gray-700">
                                                        <div class="text-start">
                                                            <h3 class="mb-0">Date: <span class="">
                                                                    {{\Carbon\Carbon::parse($pasteursatu->date)->format('d
                                                                    F
                                                                    Y')}}</span></h3>
                                                            <h3 class="mb-0">Time: <span class="">
                                                                    {{$pasteursatu->time}}</span></h3>
                                                        </div>
                                                        <div>
                                                            <p class="">Room :<span class="">
                                                                    {{$pasteursatu->room}}
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0 text-gray-700">Session : <span class="">
                                                            {{$pasteursatu->title_ses}}</span></p>
                                                    <p class="text-gray-700">Moderator : <span class="">
                                                            {{$pasteursatu->moderator}}
                                                        </span></p>
                                                    <div class="overflow-x-auto mt-5">
                                                        <table class="table text-gray-700">
                                                            <!-- head -->
                                                            <thead>
                                                                <tr>
                                                                    <th style="width: 18%">Time</th>
                                                                    <th>Topic</th>
                                                                    <th>Speaker</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($pasteursatu->schedules as $schedule)
                                                                <tr>
                                                                    <th scope="row">{{$schedule->time_speaker}}</th>
                                                                    <td>{{$schedule->topic_title}}</td>
                                                                    <td>{{$schedule->speaker}}</td>
                                                                </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="modal-action">
                                                        <form method="dialog">
                                                            <!-- if there is a button in form, it will close the modal -->
                                                            <button class="btn">Close</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </dialog>
                                            @endforeach
                                        </td>
                                        <td class="align-top">
                                            @foreach ($tiga as $pasteurtiga)
                                            @if ($pasteurtiga->room == 'Pasteur 3 Convention')
                                            <button class="hover:shadow-md block w-full my-1 hover:cursor-pointer"
                                                onclick="modal_{{$pasteurtiga->id}}.showModal()">
                                                <div
                                                    class="px-0 py-4 w-full rounded-lg bg-green-50 hover:bg-green-100 ">
                                                    <div class="badge badge-sm badge-accent mb-2">
                                                        {{$pasteurtiga->category_sesi}}</div>
                                                    <br>
                                                    {{$pasteurtiga->time}} <br>
                                                    {{$pasteurtiga->title_ses}} <br>
                                                    <span class="text-xs text-gray-600">{{$pasteurtiga->room}}</span>
                                                </div>
                                            </button>
                                            @endif

                                            <dialog id="modal_{{$pasteurtiga->id}}" class="modal">
                                                <div class="modal-box w-11/12 max-w-5xl text-start">
                                                    <div class="flex justify-between mb-3 text-gray-700">
                                                        <div class="text-start">
                                                            <h3 class="mb-0">Date: <span class="">
                                                                    {{\Carbon\Carbon::parse($pasteurtiga->date)->format('d
                                                                    F
                                                                    Y')}}</span></h3>
                                                            <h3 class="mb-0">Time: <span class="">
                                                                    {{$pasteurtiga->time}}</span></h3>
                                                        </div>
                                                        <div>
                                                            <p class="">Room :<span class="">
                                                                    {{$pasteurtiga->room}}
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0 text-gray-700">Session : <span class="">
                                                            {{$pasteurtiga->title_ses}}</span></p>
                                                    <p class="text-gray-700">Moderator : <span class="">
                                                            {{$pasteurtiga->moderator}}
                                                        </span></p>
                                                    <div class="overflow-x-auto mt-5">
                                                        <table class="table text-gray-700">
                                                            <!-- head -->
                                                            <thead>
                                                                <tr>
                                                                    <th style="width: 18%">Time</th>
                                                                    <th>Topic</th>
                                                                    <th>Speaker</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($pasteurtiga->schedules as $schedule)
                                                                <tr>
                                                                    <th scope="row">{{$schedule->time_speaker}}</th>
                                                                    <td>{{$schedule->topic_title}}</td>
                                                                    <td>{{$schedule->speaker}}</td>
                                                                </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="modal-action">
                                                        <form method="dialog">
                                                            <!-- if there is a button in form, it will close the modal -->
                                                            <button class="btn">Close</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </dialog>
                                            @endforeach
                                        </td>
                                        <td class="align-top">
                                            @foreach ($tiga as $empiresatu)
                                            @if ($empiresatu->room == 'Empire 1')
                                            <button class="hover:shadow-md block w-full my-1 hover:cursor-pointer"
                                                onclick="modal_{{$empiresatu->id}}.showModal()">
                                                <div
                                                    class="px-0 py-4 w-full rounded-lg bg-green-50 hover:bg-green-100 ">
                                                    <div class="badge badge-sm badge-accent mb-2">
                                                        {{$empiresatu->category_sesi}}</div>
                                                    <br>
                                                    {{$empiresatu->time}} <br>
                                                    {{$empiresatu->title_ses}} <br>
                                                    <span class="text-xs text-gray-600">{{$empiresatu->room}}</span>
                                                </div>
                                            </button>
                                            @endif

                                            <dialog id="modal_{{$empiresatu->id}}" class="modal">
                                                <div class="modal-box w-11/12 max-w-5xl text-start">
                                                    <div class="flex justify-between mb-3 text-gray-700">
                                                        <div class="text-start">
                                                            <h3 class="mb-0">Date: <span class="">
                                                                    {{\Carbon\Carbon::parse($empiresatu->date)->format('d
                                                                    F
                                                                    Y')}}</span></h3>
                                                            <h3 class="mb-0">Time: <span class="">
                                                                    {{$empiresatu->time}}</span></h3>
                                                        </div>
                                                        <div>
                                                            <p class="">Room :<span class="">
                                                                    {{$empiresatu->room}}
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0 text-gray-700">Session : <span class="">
                                                            {{$empiresatu->title_ses}}</span></p>
                                                    <p class="text-gray-700">Moderator : <span class="">
                                                            {{$empiresatu->moderator}}
                                                        </span></p>
                                                    <div class="overflow-x-auto mt-5">
                                                        <table class="table text-gray-700">
                                                            <!-- head -->
                                                            <thead>
                                                                <tr>
                                                                    <th style="width: 18%">Time</th>
                                                                    <th>Topic</th>
                                                                    <th>Speaker</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($empiresatu->schedules as $schedule)
                                                                <tr>
                                                                    <th scope="row">{{$schedule->time_speaker}}</th>
                                                                    <td>{{$schedule->topic_title}}</td>
                                                                    <td>{{$schedule->speaker}}</td>
                                                                </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="modal-action">
                                                        <form method="dialog">
                                                            <!-- if there is a button in form, it will close the modal -->
                                                            <button class="btn">Close</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </dialog>
                                            @endforeach
                                        </td>
                                        <td class="align-top">
                                            @foreach ($tiga as $empiredua)
                                            @if ($empiredua->room == 'Empire 2')
                                            <button class="hover:shadow-md block w-full my-1 hover:cursor-pointer"
                                                onclick="modal_{{$empiredua->id}}.showModal()">
                                                <div
                                                    class="px-0 py-4 w-full rounded-lg bg-green-50 hover:bg-green-100 ">
                                                    <div class="badge badge-sm badge-accent mb-2">
                                                        {{$empiredua->category_sesi}}</div>
                                                    <br>
                                                    {{$empiredua->time}} <br>
                                                    {{$empiredua->title_ses}} <br>
                                                    <span class="text-xs text-gray-600">{{$empiredua->room}}</span>
                                                </div>
                                            </button>
                                            @endif

                                            <dialog id="modal_{{$empiredua->id}}" class="modal">
                                                <div class="modal-box w-11/12 max-w-5xl text-start">
                                                    <div class="flex justify-between mb-3 text-gray-700">
                                                        <div class="text-start">
                                                            <h3 class="mb-0">Date: <span class="">
                                                                    {{\Carbon\Carbon::parse($empiredua->date)->format('d
                                                                    F
                                                                    Y')}}</span></h3>
                                                            <h3 class="mb-0">Time: <span class="">
                                                                    {{$empiredua->time}}</span></h3>
                                                        </div>
                                                        <div>
                                                            <p class="">Room :<span class="">
                                                                    {{$empiredua->room}}
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0 text-gray-700">Session : <span class="">
                                                            {{$empiredua->title_ses}}</span></p>
                                                    <p class="text-gray-700">Moderator : <span class="">
                                                            {{$empiredua->moderator}}
                                                        </span></p>
                                                    <div class="overflow-x-auto mt-5">
                                                        <table class="table text-gray-700">
                                                            <!-- head -->
                                                            <thead>
                                                                <tr>
                                                                    <th style="width: 18%">Time</th>
                                                                    <th>Topic</th>
                                                                    <th>Speaker</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($empiredua->schedules as $schedule)
                                                                <tr>
                                                                    <th scope="row">{{$schedule->time_speaker}}</th>
                                                                    <td>{{$schedule->topic_title}}</td>
                                                                    <td>{{$schedule->speaker}}</td>
                                                                </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="modal-action">
                                                        <form method="dialog">
                                                            <!-- if there is a button in form, it will close the modal -->
                                                            <button class="btn">Close</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </dialog>
                                            @endforeach
                                        </td>
                                        <td class="align-top">
                                            @foreach ($tiga as $imperium)
                                            @if ($imperium->room == 'Imperium 1,2,3')
                                            <button class="hover:shadow-md block w-full my-1 hover:cursor-pointer"
                                                onclick="modal_{{$imperium->id}}.showModal()">
                                                <div
                                                    class="px-0 py-4 w-full rounded-lg bg-green-50 hover:bg-green-100 ">
                                                    <div class="badge badge-sm badge-accent mb-2">
                                                        {{$imperium->category_sesi}}</div>
                                                    <br>
                                                    {{$imperium->time}} <br>
                                                    {{$imperium->title_ses}} <br>
                                                    <span class="text-xs text-gray-600">{{$imperium->room}}</span>
                                                </div>
                                            </button>
                                            @endif

                                            <dialog id="modal_{{$imperium->id}}" class="modal">
                                                <div class="modal-box w-11/12 max-w-5xl text-start">
                                                    <div class="flex justify-between mb-3 text-gray-700">
                                                        <div class="text-start">
                                                            <h3 class="mb-0">Date: <span class="">
                                                                    {{\Carbon\Carbon::parse($imperium->date)->format('d
                                                                    F
                                                                    Y')}}</span></h3>
                                                            <h3 class="mb-0">Time: <span class="">
                                                                    {{$imperium->time}}</span></h3>
                                                        </div>
                                                        <div>
                                                            <p class="">Room :<span class="">
                                                                    {{$imperium->room}}
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0 text-gray-700">Session : <span class="">
                                                            {{$imperium->title_ses}}</span></p>
                                                    <p class="text-gray-700">Moderator : <span class="">
                                                            {{$imperium->moderator}}
                                                        </span></p>
                                                    <div class="overflow-x-auto mt-5">
                                                        <table class="table text-gray-700">
                                                            <!-- head -->
                                                            <thead>
                                                                <tr>
                                                                    <th style="width: 18%">Time</th>
                                                                    <th>Topic</th>
                                                                    <th>Speaker</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($imperium->schedules as $schedule)
                                                                <tr>
                                                                    <th scope="row">{{$schedule->time_speaker}}</th>
                                                                    <td>{{$schedule->topic_title}}</td>
                                                                    <td>{{$schedule->speaker}}</td>
                                                                </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="modal-action">
                                                        <form method="dialog">
                                                            <!-- if there is a button in form, it will close the modal -->
                                                            <button class="btn">Close</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </dialog>
                                            @endforeach
                                        </td>

                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                    {{--<div x-show="openTab === 5"
                        class="transition-all duration-300 bg-white p-4 rounded-lg shadow-md border-x-4 border-[#72c6b7]">

                        <p>tgl 28</p>
                    </div> --}}
                </div>
            </div>

        </div>
        <div class="px-4 md:px-10 mt-10">
            <p class="text-sm text-error italic">
                Note: <br>
                The scientific schedule is provisional and may be adjusted as required.
            </p>
        </div>
    </section>
</div>