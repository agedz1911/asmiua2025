<div>
    <section class="breadcrumbs relative pb-0">
        {{-- <div class="absolute inset-0 bg-gradient-to-b from-[#008068]/80 to-[#78c9bb]/10"></div> --}}
        <div class="py-16 lg:py-28 text-center relative">
            <h2 class="text-accent uppercase text-2xl font-semibold tracking-wide lg:text-4xl">Sponsors</h2>
        </div>
    </section>

    <section class="px-5 md:px-10 pt-0 pb-10 md:py-20 bg-competition">
        <div class="flex items-center justify-center">
            <div x-data="{ openTab: 5 }" class="lg:w-11/12 w-full mx-auto">
                <div class="">
                    <div class="mb-4 flex flex-wrap space-x-4 p-2 bg-white rounded-lg shadow-md">
                        <button x-on:click="openTab = 5" :class="{ 'bg-[#b9608d] text-white': openTab === 5 }"
                            class="flex-1 py-2 px-4 rounded-md focus:outline-none focus:shadow-outline-blue transition-all duration-300">28
                            July</button>
                        <button x-on:click="openTab = 1" :class="{ 'bg-[#b9608d] text-white': openTab === 1 }"
                            class="flex-1 py-2 px-4 rounded-md focus:outline-none focus:shadow-outline-blue transition-all duration-300">29
                            July</button>
                        <button x-on:click="openTab = 2" :class="{ 'bg-[#b9608d] text-white': openTab === 2 }"
                            class="flex-1 py-2 px-4 rounded-md focus:outline-none focus:shadow-outline-blue transition-all duration-300">30
                            July</button>
                        <button x-on:click="openTab = 3" :class="{ 'bg-[#b9608d] text-white': openTab === 3 }"
                            class="flex-1 py-2 px-4 rounded-md focus:outline-none focus:shadow-outline-blue transition-all duration-300">31
                            July</button>
                        <button x-on:click="openTab = 4" :class="{ 'bg-[#b9608d] text-white': openTab === 4 }"
                            class="flex-1 py-2 px-4 rounded-md focus:outline-none focus:shadow-outline-blue transition-all duration-300">1
                            August</button>
                        
                    </div>

                    <div x-show="openTab === 1"
                        class="transition-all duration-300 bg-white p-4 rounded-lg shadow-md border-x-4 border-[#302b88]">
                        <div class="overflow-x-auto">
                            <table class="table">
                                <thead>
                                    <tr class="text-base font-semibold mb-2">

                                        <th>Fatmawati Hospital</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="">
                                        <td class="align-top">
                                            {{-- @dd($duasembilan) --}}
                                            @foreach ($duasembilan as $fatmawati)
                                            @if ($fatmawati->room == 'Fatmawati Hospital')
                                            <button class="hover:shadow-lg hover:shadow-slate-300 block w-full my-1"
                                                onclick="fatmawati28{{$loop->index}}.showModal()">
                                                <div class="border px-0 py-4 w-full rounded-md bg-slate-200 ">
                                                    <div class="badge badge-sm badge-info mb-2">{{$fatmawati->category_sesi}}</div>
                                                    <br>
                                                    {{$fatmawati->time}} <br>
                                                    {{$fatmawati->title_ses}}
                                                </div>
                                            </button>
                                            @endif

                                            <dialog id="fatmawati28{{$loop->index}}" class="modal">
                                                <div class="modal-box w-11/12 max-w-5xl text-start">
                                                    <div class="flex justify-between mb-3 text-gray-700">
                                                        <div class="text-start">
                                                            <h3 class="mb-0">Date: <span class="">
                                                                    {{\Carbon\Carbon::parse($fatmawati->date)->format('d
                                                                    F
                                                                    Y')}}</span></h3>
                                                            <h3 class="mb-0">Time: <span class="">
                                                                    {{$fatmawati->time}}</span></h3>
                                                        </div>
                                                        <div>
                                                            <p class="">Room :<span class="">
                                                                    {{$fatmawati->room}}
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0 text-gray-700">Session : <span class="">
                                                            {{$fatmawati->title_ses}}</span></p>
                                                    <p class="text-gray-700">Moderator : <span class="">
                                                            {{$fatmawati->moderator}}
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
                                                                @foreach ($fatmawati->schedules as $schedule)
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
                        class="transition-all duration-300 bg-white p-4 rounded-lg shadow-md border-x-4 border-[#302b88]">

                        <div class="overflow-x-auto">
                            <table class="table">
                                <thead>
                                    <tr class="text-base font-semibold mb-2">

                                        <th>Fatmawati Hospital</th>
                                        <th>Zeiss Office</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="">
                                        <td class="align-top">
                                            @foreach ($tigapuluh as $fatmawati30)
                                            @if ($fatmawati30->room == 'Fatmawati Hospital')
                                            <button class="hover:shadow-lg hover:shadow-slate-300 block w-full my-1"
                                                onclick="fatmawati30{{$loop->index}}.showModal()">
                                                <div class="border px-0 py-4 w-full rounded-md bg-slate-200 ">
                                                    <div class="badge badge-sm badge-info mb-2">{{$fatmawati30->category_sesi}}
                                                    </div>
                                                    <br>
                                                    {{$fatmawati30->time}} <br>
                                                    {{$fatmawati30->title_ses}}
                                                </div>
                                            </button>
                                            @endif

                                            <dialog id="fatmawati30{{$loop->index}}" class="modal">
                                                <div class="modal-box w-11/12 max-w-5xl text-start">
                                                    <div class="flex justify-between mb-3 text-gray-700">
                                                        <div class="text-start">
                                                            <h3 class="mb-0">Date: <span class="">
                                                                    {{\Carbon\Carbon::parse($fatmawati30->date)->format('d
                                                                    F
                                                                    Y')}}</span></h3>
                                                            <h3 class="mb-0">Time: <span class="">
                                                                    {{$fatmawati30->time}}</span></h3>
                                                        </div>
                                                        <div>
                                                            <p class="">Room :<span class="">
                                                                    {{$fatmawati30->room}}
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0 text-gray-700">Session : <span class="">
                                                            {{$fatmawati30->title_ses}}</span></p>
                                                    <p class="text-gray-700">Moderator : <span class="">
                                                            {{$fatmawati30->moderator}}
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
                                                                @foreach ($fatmawati30->schedules as $schedule)
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
                                            @foreach ($tigapuluh as $zeiss)
                                            @if ($zeiss->room == 'Zeiss Office')
                                            <button class="hover:shadow-lg hover:shadow-slate-300 block w-full my-1"
                                                onclick="zeiss{{$loop->index}}.showModal()">
                                                <div class="border px-0 py-4 w-full rounded-md bg-slate-200 ">
                                                    <div class="badge badge-sm badge-info mb-2">{{$zeiss->category_sesi}}</div>
                                                    <br>
                                                    {{$zeiss->time}} <br>
                                                    {{$zeiss->title_ses}}
                                                </div>
                                            </button>
                                            @endif

                                            <dialog id="zeiss{{$loop->index}}" class="modal">
                                                <div class="modal-box w-11/12 max-w-5xl text-start">
                                                    <div class="flex justify-between mb-3 text-gray-700">
                                                        <div class="text-start">
                                                            <h3 class="mb-0">Date: <span class="">
                                                                    {{\Carbon\Carbon::parse($zeiss->date)->format('d
                                                                    F
                                                                    Y')}}</span></h3>
                                                            <h3 class="mb-0">Time: <span class="">
                                                                    {{$zeiss->time}}</span></h3>
                                                        </div>
                                                        <div>
                                                            <p class="">Room :<span class="">
                                                                    {{$zeiss->room}}
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0 text-gray-700">Session : <span class="">
                                                            {{$zeiss->title_ses}}</span></p>
                                                    <p class="text-gray-700">Moderator : <span class="">
                                                            {{$zeiss->moderator}}
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
                                                                @foreach ($zeiss->schedules as $schedule)
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
                        class="transition-all duration-300 bg-white p-4 rounded-lg shadow-md border-x-4 border-[#302b88]">

                        <div class="overflow-x-auto">
                            <table class="table">
                                <thead>
                                    <tr class="text-base font-semibold mb-2">

                                        <th>Zurich Ballroom</th>
                                        <th>Lausanne Ballroom I</th>
                                        <th>Lausanne Ballroom II</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="">
                                        <td class="align-top">
                                            @foreach ($tigapuluhsatu as $Zurich31)
                                            @if ($Zurich31->room == 'Zurich Ballroom')
                                            <button class="hover:shadow-lg hover:shadow-slate-300 block w-full my-1"
                                                onclick="Zurich31{{$loop->index}}.showModal()">
                                                <div class="border px-0 py-4 w-full rounded-md bg-slate-200 ">
                                                    <div class="badge badge-sm badge-info mb-2">{{$Zurich31->category_sesi}}</div>
                                                    <br>
                                                    {{$Zurich31->time}} <br>
                                                    {{$Zurich31->title_ses}}
                                                </div>
                                            </button>
                                            @endif

                                            <dialog id="Zurich31{{$loop->index}}" class="modal">
                                                <div class="modal-box w-11/12 max-w-5xl text-start">
                                                    <div class="flex justify-between mb-3 text-gray-700">
                                                        <div class="text-start">
                                                            <h3 class="mb-0">Date: <span class="">
                                                                    {{\Carbon\Carbon::parse($Zurich31->date)->format('d
                                                                    F
                                                                    Y')}}</span></h3>
                                                            <h3 class="mb-0">Time: <span class="">
                                                                    {{$Zurich31->time}}</span></h3>
                                                        </div>
                                                        <div>
                                                            <p class="">Room :<span class="">
                                                                    {{$Zurich31->room}}
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0 text-gray-700">Session : <span class="">
                                                            {{$Zurich31->title_ses}}</span></p>
                                                    <p class="text-gray-700">Moderator : <span class="">
                                                            {{$Zurich31->moderator}}
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
                                                                @foreach ($Zurich31->schedules as $schedule)
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
                                            @foreach ($tigapuluhsatu as $Lausanne31)
                                            @if ($Lausanne31->room == 'Lausanne Ballroom I')
                                            <button class="hover:shadow-lg hover:shadow-slate-300 block w-full my-1"
                                                onclick="Lausanne31{{$loop->index}}.showModal()">
                                                <div class="border px-0 py-4 w-full rounded-md bg-slate-200 ">
                                                    <div class="badge badge-sm badge-info mb-2">{{$Lausanne31->category_sesi}}
                                                    </div>
                                                    <br>
                                                    {{$Lausanne31->time}} <br>
                                                    {{$Lausanne31->title_ses}}
                                                </div>
                                            </button>
                                            @endif

                                            <dialog id="Lausanne31{{$loop->index}}" class="modal">
                                                <div class="modal-box w-11/12 max-w-5xl text-start">
                                                    <div class="flex justify-between mb-3 text-gray-700">
                                                        <div class="text-start">
                                                            <h3 class="mb-0">Date: <span class="">
                                                                    {{\Carbon\Carbon::parse($Lausanne31->date)->format('d
                                                                    F
                                                                    Y')}}</span></h3>
                                                            <h3 class="mb-0">Time: <span class="">
                                                                    {{$Lausanne31->time}}</span></h3>
                                                        </div>
                                                        <div>
                                                            <p class="">Room :<span class="">
                                                                    {{$Lausanne31->room}}
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0 text-gray-700">Session : <span class="">
                                                            {{$Lausanne31->title_ses}}</span></p>
                                                    <p class="text-gray-700">Moderator : <span class="">
                                                            {{$Lausanne31->moderator}}
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
                                                                @foreach ($Lausanne31->schedules as $schedule)
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
                                            @foreach ($tigapuluhsatu as $Lausanne231)
                                            @if ($Lausanne231->room == 'Lausanne Ballroom II')
                                            <button class="hover:shadow-lg hover:shadow-slate-300 block w-full my-1"
                                                onclick="Lausanne231{{$loop->index}}.showModal()">
                                                <div class="border px-0 py-4 w-full rounded-md bg-slate-200 ">
                                                    <div class="badge badge-sm badge-info mb-2">{{$Lausanne231->category_sesi}}
                                                    </div>
                                                    <br>
                                                    {{$Lausanne231->time}} <br>
                                                    {{$Lausanne231->title_ses}}
                                                </div>
                                            </button>
                                            @endif

                                            <dialog id="Lausanne231{{$loop->index}}" class="modal">
                                                <div class="modal-box w-11/12 max-w-5xl text-start">
                                                    <div class="flex justify-between mb-3 text-gray-700">
                                                        <div class="text-start">
                                                            <h3 class="mb-0">Date: <span class="">
                                                                    {{\Carbon\Carbon::parse($Lausanne231->date)->format('d
                                                                    F
                                                                    Y')}}</span></h3>
                                                            <h3 class="mb-0">Time: <span class="">
                                                                    {{$Lausanne231->time}}</span></h3>
                                                        </div>
                                                        <div>
                                                            <p class="">Room :<span class="">
                                                                    {{$Lausanne231->room}}
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0 text-gray-700">Session : <span class="">
                                                            {{$Lausanne231->title_ses}}</span></p>
                                                    <p class="text-gray-700">Moderator : <span class="">
                                                            {{$Lausanne231->moderator}}
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
                                                                @foreach ($Lausanne231->schedules as $schedule)
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
                        class="transition-all duration-300 bg-white p-4 rounded-lg shadow-md border-x-4 border-[#302b88]">

                        <div class="overflow-x-auto">
                            <table class="table">
                                <thead>
                                    <tr class="text-base font-semibold mb-2">

                                        <th>Zurich Ballroom</th>
                                        <th>Lausanne Ballroom I</th>
                                        <th>Lausanne Ballroom II</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="">
                                        <td class="align-top">
                                            @foreach ($satu as $Zurich1)
                                            @if ($Zurich1->room == 'Zurich Ballroom')
                                            <button class="hover:shadow-lg hover:shadow-slate-300 block w-full my-1"
                                                onclick="Zurich1{{$loop->index}}.showModal()">
                                                <div class="border px-0 py-4 w-full rounded-md bg-slate-200 ">
                                                    <div class="badge badge-sm badge-info mb-2">{{$Zurich1->category_sesi}}</div>
                                                    <br>
                                                    {{$Zurich1->time}} <br>
                                                    {{$Zurich1->title_ses}}
                                                </div>
                                            </button>
                                            @endif

                                            <dialog id="Zurich1{{$loop->index}}" class="modal">
                                                <div class="modal-box w-11/12 max-w-5xl text-start">
                                                    <div class="flex justify-between mb-3 text-gray-700">
                                                        <div class="text-start">
                                                            <h3 class="mb-0">Date: <span class="">
                                                                    {{\Carbon\Carbon::parse($Zurich1->date)->format('d
                                                                    F
                                                                    Y')}}</span></h3>
                                                            <h3 class="mb-0">Time: <span class="">
                                                                    {{$Zurich1->time}}</span></h3>
                                                        </div>
                                                        <div>
                                                            <p class="">Room :<span class="">
                                                                    {{$Zurich1->room}}
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0 text-gray-700">Session : <span class="">
                                                            {{$Zurich1->title_ses}}</span></p>
                                                    <p class="text-gray-700">Moderator : <span class="">
                                                            {{$Zurich1->moderator}}
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
                                                                @foreach ($Zurich1->schedules as $schedule)
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
                                            @foreach ($satu as $Lausanne1)
                                            @if ($Lausanne1->room == 'Lausanne Ballroom I')
                                            <button class="hover:shadow-lg hover:shadow-slate-300 block w-full my-1"
                                                onclick="Lausanne1{{$loop->index}}.showModal()">
                                                <div class="border px-0 py-4 w-full rounded-md bg-slate-200 ">
                                                    <div class="badge badge-sm badge-info mb-2">{{$Lausanne1->category_sesi}}
                                                    </div>
                                                    <br>
                                                    {{$Lausanne1->time}} <br>
                                                    {{$Lausanne1->title_ses}}
                                                </div>
                                            </button>
                                            @endif

                                            <dialog id="Lausanne1{{$loop->index}}" class="modal">
                                                <div class="modal-box w-11/12 max-w-5xl text-start">
                                                    <div class="flex justify-between mb-3 text-gray-700">
                                                        <div class="text-start">
                                                            <h3 class="mb-0">Date: <span class="">
                                                                    {{\Carbon\Carbon::parse($Lausanne1->date)->format('d
                                                                    F
                                                                    Y')}}</span></h3>
                                                            <h3 class="mb-0">Time: <span class="">
                                                                    {{$Lausanne1->time}}</span></h3>
                                                        </div>
                                                        <div>
                                                            <p class="">Room :<span class="">
                                                                    {{$Lausanne1->room}}
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0 text-gray-700">Session : <span class="">
                                                            {{$Lausanne1->title_ses}}</span></p>
                                                    <p class="text-gray-700">Moderator : <span class="">
                                                            {{$Lausanne1->moderator}}
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
                                                                @foreach ($Lausanne1->schedules as $schedule)
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
                                            @foreach ($satu as $Lausanne21)
                                            @if ($Lausanne21->room == 'Lausanne Ballroom II')
                                            <button class="hover:shadow-lg hover:shadow-slate-300 block w-full my-1"
                                                onclick="Lausanne21{{$loop->index}}.showModal()">
                                                <div class="border px-0 py-4 w-full rounded-md bg-slate-200 ">
                                                    <div class="badge badge-sm badge-info mb-2">{{$Lausanne21->category_sesi}}
                                                    </div>
                                                    <br>
                                                    {{$Lausanne21->time}} <br>
                                                    {{$Lausanne21->title_ses}}
                                                </div>
                                            </button>
                                            @endif

                                            <dialog id="Lausanne21{{$loop->index}}" class="modal">
                                                <div class="modal-box w-11/12 max-w-5xl text-start">
                                                    <div class="flex justify-between mb-3 text-gray-700">
                                                        <div class="text-start">
                                                            <h3 class="mb-0">Date: <span class="">
                                                                    {{\Carbon\Carbon::parse($Lausanne21->date)->format('d
                                                                    F
                                                                    Y')}}</span></h3>
                                                            <h3 class="mb-0">Time: <span class="">
                                                                    {{$Lausanne21->time}}</span></h3>
                                                        </div>
                                                        <div>
                                                            <p class="">Room :<span class="">
                                                                    {{$Lausanne21->room}}
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0 text-gray-700">Session : <span class="">
                                                            {{$Lausanne21->title_ses}}</span></p>
                                                    <p class="text-gray-700">Moderator : <span class="">
                                                            {{$Lausanne21->moderator}}
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
                                                                @foreach ($Lausanne21->schedules as $schedule)
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
                    <div x-show="openTab === 5"
                        class="transition-all duration-300 bg-white p-4 rounded-lg shadow-md border-x-4 border-[#302b88]">

                    <p>tgl 28</p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section>
        <!-- HTML STATIC -->
        <div class="container">
            <nav>
                <div class="nav nav-tabs nav-justified" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-25-tab" data-bs-toggle="tab" data-bs-target="#nav-25"
                        type="button" role="tab" aria-controls="nav-25" aria-selected="false">25 September</button>
                    <button class="nav-link " id="nav-26-tab" data-bs-toggle="tab" data-bs-target="#nav-26"
                        type="button" role="tab" aria-controls="nav-26" aria-selected="false">26 September</button>
                    <button class="nav-link" id="nav-27-tab" data-bs-toggle="tab" data-bs-target="#nav-27" type="button"
                        role="tab" aria-controls="nav-27" aria-selected="false">27 September</button>
                    {{-- <button class="nav-link" id="nav-28-tab" data-bs-toggle="tab" data-bs-target="#nav-28"
                        type="button" role="tab" aria-controls="nav-28" aria-selected="false">28 September</button> --}}
                </div>
            </nav>
            <div class="tab-content mt-5" id="nav-tabContent">
                <div class="tab-pane show active" id="nav-25" role="tabpanel" aria-labelledby="nav-25-tab" tabindex="0">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th style="width: 11%" class="text-center" scope="col">Convention 2</th>
                                    <th style="width: 11%" class="text-center" scope="col">Ballroom 1</th>
                                    <th style="width: 11%" class="text-center" scope="col">Ballroom 2</th>
                                    <th style="width: 11%" class="text-center" scope="col">Santika 15, 16 & 17</th>
                                    <th style="width: 11%" class="text-center" scope="col">Santika 5 & 6</th>
                                    <th style="width: 11%" class="text-center" scope="col">Santika 7</th>
                                    <th style="width: 11%" class="text-center" scope="col">Santika 8</th>
                                    <th style="width: 11%" class="text-center" scope="col">Foyer 2nd Floor</th>
                                    <th style="width: 11%" class="text-center" scope="col">Santika 9</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        @foreach ($duaPuluhLima as $convention)
                                        @if ($convention->room == 'Convention 2')
                                        <div class="d-flex flex-column mb-2">
                                            <div class="card position-relative program-atglance shadow"
                                                style="cursor: pointer" data-bs-toggle="modal"
                                                data-bs-target="#modal{{$loop->index}}">
                                                <div class="card-header">
                                                    <small
                                                        class="badge text-light bg-success py-2">{{$convention->category_sesi}}</small>
                                                </div>
                                                <div class="card-body">

                                                    <p class="black fw-bold text-center">{{$convention->time}}</p>
                                                    <p class="mb-0 text-muted text-center">{{$convention->title_ses}}
                                                    </p>

                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                        <div class="modal fade" id="modal{{$loop->index}}" tabindex="-1"
                                            aria-labelledby="InaSPUModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="InaSPUModalLabel">
                                                            {{$convention->title_ses}}
                                                        </h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="d-flex flex-row justify-content-between">
                                                            <div>
                                                                <p class="mb-0">Date :<span class="fw-bold black">
                                                                        {{\Carbon\Carbon::parse($convention->date)->format('d
                                                                        F Y')}}</p>
                                                                <p class="">Time :<span class="fw-bold black">
                                                                        {{$convention->time}}
                                                                    </span></p>
                                                            </div>
                                                            <div>
                                                                <p class="">Room :<span class="fw-bold black">
                                                                        {{$convention->room}}
                                                                    </span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <p class="mb-0">Session : <span class="fw-bold black">
                                                                {{$convention->title_ses}}</span></p>
                                                        <p class="">Moderator : <span class="fw-bold black">
                                                                {{$convention->moderator}}
                                                            </span></p>
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col" style="width: 18%">Time</th>
                                                                    <th scope="col">Topic</th>
                                                                    <th scope="col">Speaker</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($convention->schedules as $schedule)

                                                                <tr>
                                                                    <th scope="row">{{$schedule->time_speaker}}</th>
                                                                    <td>{{$schedule->topic_title}}</td>
                                                                    <td>{{$schedule->speaker}}</td>
                                                                </tr>
                                                                @endforeach


                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn1 "
                                                            data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach ($duaPuluhLima as $ballroom1)
                                        @if ($ballroom1->room == 'Ballroom 1')
                                        <div class="d-flex flex-column mb-2">
                                            <div class="card position-relative program-atglance shadow"
                                                style="cursor: pointer" data-bs-toggle="modal"
                                                data-bs-target="#modal{{$loop->index}}">
                                                <div class="card-header">
                                                    <small
                                                        class="badge text-light bg-success py-2">{{$ballroom1->category_sesi}}</small>
                                                </div>
                                                <div class="card-body">

                                                    <p class="black fw-bold text-center">{{$ballroom1->time}}</p>
                                                    <p class="mb-0 text-muted text-center">{{$ballroom1->title_ses}}</p>

                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                        <div class="modal fade" id="modal{{$loop->index}}" tabindex="-1"
                                            aria-labelledby="InaSPUModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="InaSPUModalLabel">
                                                            {{$ballroom1->title_ses}}
                                                        </h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="d-flex flex-row justify-content-between">
                                                            <div>
                                                                <p class="mb-0">Date :<span class="fw-bold black">
                                                                        {{\Carbon\Carbon::parse($ballroom1->date)->format('d
                                                                        F Y')}}</p>
                                                                <p class="">Time :<span class="fw-bold black">
                                                                        {{$ballroom1->time}}
                                                                    </span></p>
                                                            </div>
                                                            <div>
                                                                <p class="">Room :<span class="fw-bold black">
                                                                        {{$ballroom1->room}}
                                                                    </span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <p class="mb-0">Session : <span class="fw-bold black">
                                                                {{$ballroom1->title_ses}}</span></p>
                                                        <p class="">Moderator : <span class="fw-bold black">
                                                                {{$ballroom1->moderator}}
                                                            </span></p>
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col" style="width: 18%">Time</th>
                                                                    <th scope="col">Topic</th>
                                                                    <th scope="col">Speaker</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($ballroom1->schedules as $schedule)

                                                                <tr>
                                                                    <th scope="row">{{$schedule->time_speaker}}</th>
                                                                    <td>{{$schedule->topic_title}}</td>
                                                                    <td>{{$schedule->speaker}}</td>
                                                                </tr>
                                                                @endforeach


                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn1 "
                                                            data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach ($duaPuluhLima as $ballroom2)
                                        @if ($ballroom2->room == 'Ballroom 2')
                                        <div class="d-flex flex-column mb-2">
                                            <div class="card position-relative program-atglance shadow"
                                                style="cursor: pointer" data-bs-toggle="modal"
                                                data-bs-target="#modal{{$loop->index}}">
                                                <div class="card-header">
                                                    <small
                                                        class="badge text-light bg-success py-2">{{$ballroom2->category_sesi}}</small>
                                                </div>
                                                <div class="card-body">

                                                    <p class="black fw-bold text-center">{{$ballroom2->time}}</p>
                                                    <p class="mb-0 text-muted text-center">{{$ballroom2->title_ses}}</p>

                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                        <div class="modal fade" id="modal{{$loop->index}}" tabindex="-1"
                                            aria-labelledby="InaSPUModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="InaSPUModalLabel">
                                                            {{$ballroom2->title_ses}}
                                                        </h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="d-flex flex-row justify-content-between">
                                                            <div>
                                                                <p class="mb-0">Date :<span class="fw-bold black">
                                                                        {{\Carbon\Carbon::parse($ballroom2->date)->format('d
                                                                        F Y')}}</p>
                                                                <p class="">Time :<span class="fw-bold black">
                                                                        {{$ballroom2->time}}
                                                                    </span></p>
                                                            </div>
                                                            <div>
                                                                <p class="">Room :<span class="fw-bold black">
                                                                        {{$ballroom2->room}}
                                                                    </span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <p class="mb-0">Session : <span class="fw-bold black">
                                                                {{$ballroom2->title_ses}}</span></p>
                                                        <p class="">Moderator : <span class="fw-bold black">
                                                                {{$ballroom2->moderator}}
                                                            </span></p>
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col" style="width: 18%">Time</th>
                                                                    <th scope="col">Topic</th>
                                                                    <th scope="col">Speaker</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($ballroom2->schedules as $schedule)

                                                                <tr>
                                                                    <th scope="row">{{$schedule->time_speaker}}</th>
                                                                    <td>{{$schedule->topic_title}}</td>
                                                                    <td>{{$schedule->speaker}}</td>
                                                                </tr>
                                                                @endforeach

                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn1 "
                                                            data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach ($duaPuluhLima as $santika15)
                                        @if ($santika15->room == 'Santika 15, 16 & 17')
                                        <div class="d-flex flex-column mb-2">
                                            <div class="card position-relative program-atglance shadow"
                                                style="cursor: pointer" data-bs-toggle="modal"
                                                data-bs-target="#modal{{$loop->index}}">
                                                <div class="card-header">
                                                    <small
                                                        class="badge text-light bg-success py-2">{{$santika15->category_sesi}}</small>
                                                </div>
                                                <div class="card-body">

                                                    <p class="black fw-bold text-center">{{$santika15->time}}</p>
                                                    <p class="mb-0 text-muted text-center">{{$santika15->title_ses}}</p>

                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                        <div class="modal fade" id="modal{{$loop->index}}" tabindex="-1"
                                            aria-labelledby="InaSPUModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="InaSPUModalLabel">
                                                            {{$santika15->title_ses}}
                                                        </h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="d-flex flex-row justify-content-between">
                                                            <div>
                                                                <p class="mb-0">Date :<span class="fw-bold black">
                                                                        {{\Carbon\Carbon::parse($santika15->date)->format('d
                                                                        F Y')}}</p>
                                                                <p class="">Time :<span class="fw-bold black">
                                                                        {{$santika15->time}}
                                                                    </span></p>
                                                            </div>
                                                            <div>
                                                                <p class="">Room :<span class="fw-bold black">
                                                                        {{$santika15->room}}
                                                                    </span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <p class="mb-0">Session : <span class="fw-bold black">
                                                                {{$santika15->title_ses}}</span></p>
                                                        <p class="">Moderator : <span class="fw-bold black">
                                                                {{$santika15->moderator}}
                                                            </span></p>
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col" style="width: 18%">Time</th>
                                                                    <th scope="col">Topic</th>
                                                                    <th scope="col">Speaker</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($santika15->schedules as $schedule)

                                                                <tr>
                                                                    <th scope="row">{{$schedule->time_speaker}}</th>
                                                                    <td>{{$schedule->topic_title}}</td>
                                                                    <td>{{$schedule->speaker}}</td>
                                                                </tr>
                                                                @endforeach


                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn1 "
                                                            data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach ($duaPuluhLima as $santika5_25)
                                        @if ($santika5_25->room == 'Santika 5 & 6')
                                        <div class="d-flex flex-column mb-2">
                                            <div class="card position-relative program-atglance shadow"
                                                style="cursor: pointer" data-bs-toggle="modal"
                                                data-bs-target="#modal{{$loop->index}}">
                                                <div class="card-header">
                                                    <small
                                                        class="badge text-light bg-success py-2">{{$santika5_25->category_sesi}}</small>
                                                </div>
                                                <div class="card-body">

                                                    <p class="black fw-bold text-center">{{$santika5_25->time}}</p>
                                                    <p class="mb-0 text-muted text-center">{{$santika5_25->title_ses}}</p>

                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                        <div class="modal fade" id="modal{{$loop->index}}" tabindex="-1"
                                            aria-labelledby="InaSPUModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="InaSPUModalLabel">
                                                            {{$santika5_25->title_ses}}
                                                        </h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="d-flex flex-row justify-content-between">
                                                            <div>
                                                                <p class="mb-0">Date :<span class="fw-bold black">
                                                                        {{\Carbon\Carbon::parse($santika5_25->date)->format('d
                                                                        F Y')}}</p>
                                                                <p class="">Time :<span class="fw-bold black">
                                                                        {{$santika5_25->time}}
                                                                    </span></p>
                                                            </div>
                                                            <div>
                                                                <p class="">Room :<span class="fw-bold black">
                                                                        {{$santika5_25->room}}
                                                                    </span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <p class="mb-0">Session : <span class="fw-bold black">
                                                                {{$santika5_25->title_ses}}</span></p>
                                                        <p class="">Moderator : <span class="fw-bold black">
                                                                {{$santika5_25->moderator}}
                                                            </span></p>
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col" style="width: 18%">Time</th>
                                                                    <th scope="col">Topic</th>
                                                                    <th scope="col">Speaker</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($santika5_25->schedules as $schedule)

                                                                <tr>
                                                                    <th scope="row">{{$schedule->time_speaker}}</th>
                                                                    <td>{{$schedule->topic_title}}</td>
                                                                    <td>{{$schedule->speaker}}</td>
                                                                </tr>
                                                                @endforeach


                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn1 "
                                                            data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach ($duaPuluhLima as $santika7)
                                        @if ($santika7->room == 'Santika 7')
                                        <div class="d-flex flex-column mb-2">
                                            <div class="card position-relative program-atglance shadow"
                                                style="cursor: pointer" data-bs-toggle="modal"
                                                data-bs-target="#modal{{$loop->index}}">
                                                <div class="card-header">
                                                    <small
                                                        class="badge text-light bg-success py-2">{{$santika7->category_sesi}}</small>
                                                </div>
                                                <div class="card-body">

                                                    <p class="black fw-bold text-center">{{$santika7->time}}</p>
                                                    <p class="mb-0 text-muted text-center">{{$santika7->title_ses}}</p>

                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                        <div class="modal fade" id="modal{{$loop->index}}" tabindex="-1"
                                            aria-labelledby="InaSPUModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="InaSPUModalLabel">
                                                            {{$santika7->title_ses}}
                                                        </h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="d-flex flex-row justify-content-between">
                                                            <div>
                                                                <p class="mb-0">Date :<span class="fw-bold black">
                                                                        {{\Carbon\Carbon::parse($santika7->date)->format('d
                                                                        F Y')}}</p>
                                                                <p class="">Time :<span class="fw-bold black">
                                                                        {{$santika7->time}}
                                                                    </span></p>
                                                            </div>
                                                            <div>
                                                                <p class="">Room :<span class="fw-bold black">
                                                                        {{$santika7->room}}
                                                                    </span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <p class="mb-0">Session : <span class="fw-bold black">
                                                                {{$santika7->title_ses}}</span></p>
                                                        <p class="">Moderator : <span class="fw-bold black">
                                                                {{$santika7->moderator}}
                                                            </span></p>
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col" style="width: 18%">Time</th>
                                                                    <th scope="col">Topic</th>
                                                                    <th scope="col">Speaker</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($santika7->schedules as $schedule)

                                                                <tr>
                                                                    <th scope="row">{{$schedule->time_speaker}}</th>
                                                                    <td>{{$schedule->topic_title}}</td>
                                                                    <td>{{$schedule->speaker}}</td>
                                                                </tr>
                                                                @endforeach


                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn1 "
                                                            data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach ($duaPuluhLima as $santika8)
                                        @if ($santika8->room == 'Santika 8')
                                        <div class="d-flex flex-column mb-2">
                                            <div class="card position-relative program-atglance shadow"
                                                style="cursor: pointer" data-bs-toggle="modal"
                                                data-bs-target="#modal{{$loop->index}}">
                                                <div class="card-header">
                                                    <small
                                                        class="badge text-light bg-success py-2">{{$santika8->category_sesi}}</small>
                                                </div>
                                                <div class="card-body">

                                                    <p class="black fw-bold text-center">{{$santika8->time}}</p>
                                                    <p class="mb-0 text-muted text-center">{{$santika8->title_ses}}</p>

                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                        <div class="modal fade" id="modal{{$loop->index}}" tabindex="-1"
                                            aria-labelledby="InaSPUModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="InaSPUModalLabel">
                                                            {{$santika8->title_ses}}
                                                        </h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="d-flex flex-row justify-content-between">
                                                            <div>
                                                                <p class="mb-0">Date :<span class="fw-bold black">
                                                                        {{\Carbon\Carbon::parse($santika8->date)->format('d
                                                                        F Y')}}</p>
                                                                <p class="">Time :<span class="fw-bold black">
                                                                        {{$santika8->time}}
                                                                    </span></p>
                                                            </div>
                                                            <div>
                                                                <p class="">Room :<span class="fw-bold black">
                                                                        {{$santika8->room}}
                                                                    </span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <p class="mb-0">Session : <span class="fw-bold black">
                                                                {{$santika8->title_ses}}</span></p>
                                                        <p class="">Moderator : <span class="fw-bold black">
                                                                {{$santika8->moderator}}
                                                            </span></p>
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col" style="width: 18%">Time</th>
                                                                    <th scope="col">Topic</th>
                                                                    <th scope="col">Speaker</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($santika8->schedules as $schedule)

                                                                <tr>
                                                                    <th scope="row">{{$schedule->time_speaker}}</th>
                                                                    <td>{{$schedule->topic_title}}</td>
                                                                    <td>{{$schedule->speaker}}</td>
                                                                </tr>
                                                                @endforeach


                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn1 "
                                                            data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach ($duaPuluhLima as $foyer)
                                        @if ($foyer->room == 'Foyer 2nd Floor')
                                        <div class="d-flex flex-column mb-2">
                                            <div class="card position-relative program-atglance shadow"
                                                style="cursor: pointer" data-bs-toggle="modal"
                                                data-bs-target="#modal{{$loop->index}}">
                                                <div class="card-header">
                                                    <small
                                                        class="badge text-light bg-success py-2">{{$foyer->category_sesi}}</small>
                                                </div>
                                                <div class="card-body">

                                                    <p class="black fw-bold text-center">{{$foyer->time}}</p>
                                                    <p class="mb-0 text-muted text-center">{{$foyer->title_ses}}</p>

                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                        <div class="modal fade" id="modal{{$loop->index}}" tabindex="-1"
                                            aria-labelledby="InaSPUModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="InaSPUModalLabel">
                                                            {{$foyer->title_ses}}
                                                        </h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="d-flex flex-row justify-content-between">
                                                            <div>
                                                                <p class="mb-0">Date :<span class="fw-bold black">
                                                                        {{\Carbon\Carbon::parse($foyer->date)->format('d
                                                                        F Y')}}</p>
                                                                <p class="">Time :<span class="fw-bold black">
                                                                        {{$foyer->time}}
                                                                    </span></p>
                                                            </div>
                                                            <div>
                                                                <p class="">Room :<span class="fw-bold black">
                                                                        {{$foyer->room}}
                                                                    </span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <p class="mb-0">Session : <span class="fw-bold black">
                                                                {{$foyer->title_ses}}</span></p>
                                                        <p class="">Moderator : <span class="fw-bold black">
                                                                {{$foyer->moderator}}
                                                            </span></p>
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col" style="width: 18%">Time</th>
                                                                    <th scope="col">Topic</th>
                                                                    <th scope="col">Speaker</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($foyer->schedules as $schedule)

                                                                <tr>
                                                                    <th scope="row">{{$schedule->time_speaker}}</th>
                                                                    <td>{{$schedule->topic_title}}</td>
                                                                    <td>{{$schedule->speaker}}</td>
                                                                </tr>
                                                                @endforeach


                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn1 "
                                                            data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach ($duaPuluhLima as $santika9_25)
                                        @if ($santika9_25->room == 'Santika 9')
                                        <div class="d-flex flex-column mb-2">
                                            <div class="card position-relative program-atglance shadow"
                                                style="cursor: pointer" data-bs-toggle="modal"
                                                data-bs-target="#modal{{$loop->index}}">
                                                <div class="card-header">
                                                    <small
                                                        class="badge text-light bg-success py-2">{{$santika9_25->category_sesi}}</small>
                                                </div>
                                                <div class="card-body">

                                                    <p class="black fw-bold text-center">{{$santika9_25->time}}</p>
                                                    <p class="mb-0 text-muted text-center">{{$santika9_25->title_ses}}</p>

                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                        <div class="modal fade" id="modal{{$loop->index}}" tabindex="-1"
                                            aria-labelledby="InaSPUModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="InaSPUModalLabel">
                                                            {{$santika9_25->title_ses}}
                                                        </h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="d-flex flex-row justify-content-between">
                                                            <div>
                                                                <p class="mb-0">Date :<span class="fw-bold black">
                                                                        {{\Carbon\Carbon::parse($santika9_25->date)->format('d
                                                                        F Y')}}</p>
                                                                <p class="">Time :<span class="fw-bold black">
                                                                        {{$santika9_25->time}}
                                                                    </span></p>
                                                            </div>
                                                            <div>
                                                                <p class="">Room :<span class="fw-bold black">
                                                                        {{$santika9_25->room}}
                                                                    </span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <p class="mb-0">Session : <span class="fw-bold black">
                                                                {{$santika9_25->title_ses}}</span></p>
                                                        <p class="">Moderator : <span class="fw-bold black">
                                                                {{$santika9_25->moderator}}
                                                            </span></p>
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col" style="width: 18%">Time</th>
                                                                    <th scope="col">Topic</th>
                                                                    <th scope="col">Speaker</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($santika9_25->schedules as $schedule)

                                                                <tr>
                                                                    <th scope="row">{{$schedule->time_speaker}}</th>
                                                                    <td>{{$schedule->topic_title}}</td>
                                                                    <td>{{$schedule->speaker}}</td>
                                                                </tr>
                                                                @endforeach


                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn1 "
                                                            data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>

                <div class="tab-pane fade " id="nav-26" role="tabpanel" aria-labelledby="nav-26-tab" tabindex="0">

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th style="width: 11%" class="text-center" scope="col">Convention 2</th>
                                    <th style="width: 11%" class="text-center" scope="col">Ballroom 1</th>
                                    <th style="width: 11%" class="text-center" scope="col">Ballroom 2</th>
                                    <th style="width: 11%" class="text-center" scope="col">Santika 5, 6</th>
                                    <th style="width: 11%" class="text-center" scope="col">Santika 15, 16 & 17</th>
                                    <th style="width: 11%" class="text-center" scope="col">Santika 7</th>
                                    {{-- <th style="width: 11%" class="text-center" scope="col">Santika 8</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        @foreach ($duaPuluhEnam as $convention)
                                        @if ($convention->room == 'Convention 2')
                                        <div class="d-flex flex-column mb-2">
                                            <div class="card position-relative program-atglance shadow"
                                                style="cursor: pointer" data-bs-toggle="modal"
                                                data-bs-target="#convention{{$loop->index}}">
                                                <div class="card-header">
                                                    <small
                                                        class="badge text-light bg-success py-2">{{$convention->category_sesi}}</small>
                                                </div>
                                                <div class="card-body">

                                                    <p class="black fw-bold text-center">{{$convention->time}}</p>
                                                    <p class="mb-0 text-muted text-center">{{$convention->title_ses}}
                                                    </p>

                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                        <div class="modal fade" id="convention{{$loop->index}}" tabindex="-1"
                                            aria-labelledby="InaSPUModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="InaSPUModalLabel">
                                                            {{$convention->title_ses}}
                                                        </h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="d-flex flex-row justify-content-between">
                                                            <div>
                                                                <p class="mb-0">Date :<span class="fw-bold black">
                                                                        {{\Carbon\Carbon::parse($convention->date)->format('d
                                                                        F Y')}}</p>
                                                                <p class="">Time :<span class="fw-bold black">
                                                                        {{$convention->time}}
                                                                    </span></p>
                                                            </div>
                                                            <div>
                                                                <p class="">Room :<span class="fw-bold black">
                                                                        {{$convention->room}}
                                                                    </span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <p class="mb-0">Session : <span class="fw-bold black">
                                                                {{$convention->title_ses}}</span></p>
                                                        <p class="">Moderator : <span class="fw-bold black">
                                                                {{$convention->moderator}}
                                                            </span></p>
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col" style="width: 18%">Time</th>
                                                                    <th scope="col">Topic</th>
                                                                    <th scope="col">Speaker</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($convention->schedules as $schedule)

                                                                <tr>
                                                                    <th scope="row">{{$schedule->time_speaker}}</th>
                                                                    <td>{{$schedule->topic_title}}</td>
                                                                    <td>{{$schedule->speaker}}</td>
                                                                </tr>
                                                                @endforeach


                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn1 "
                                                            data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach ($duaPuluhEnam as $ballroom1)
                                        @if ($ballroom1->room == 'Ballroom 1')
                                        <div class="d-flex flex-column mb-2">
                                            <div class="card position-relative program-atglance shadow"
                                                style="cursor: pointer" data-bs-toggle="modal"
                                                data-bs-target="#{{$loop->index}}">
                                                <div class="card-header">
                                                    <small
                                                        class="badge text-light bg-success py-2">{{$ballroom1->category_sesi}}</small>
                                                </div>
                                                <div class="card-body">

                                                    <p class="black fw-bold text-center">{{$ballroom1->time}}</p>
                                                    <p class="mb-0 text-muted text-center">{{$ballroom1->title_ses}}</p>

                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                        <div class="modal fade" id="{{$loop->index}}" tabindex="-1"
                                            aria-labelledby="InaSPUModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="InaSPUModalLabel">
                                                            {{$ballroom1->title_ses}}
                                                        </h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="d-flex flex-row justify-content-between">
                                                            <div>
                                                                <p class="mb-0">Date :<span class="fw-bold black">
                                                                        {{\Carbon\Carbon::parse($ballroom1->date)->format('d
                                                                        F Y')}}</p>
                                                                <p class="">Time :<span class="fw-bold black">
                                                                        {{$ballroom1->time}}
                                                                    </span></p>
                                                            </div>
                                                            <div>
                                                                <p class="">Room :<span class="fw-bold black">
                                                                        {{$ballroom1->room}}
                                                                    </span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <p class="mb-0">Session : <span class="fw-bold black">
                                                                {{$ballroom1->title_ses}}</span></p>
                                                        <p class="">Moderator : <span class="fw-bold black">
                                                                {{$ballroom1->moderator}}
                                                            </span></p>
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col" style="width: 18%">Time</th>
                                                                    <th scope="col">Topic</th>
                                                                    <th scope="col">Speaker</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($ballroom1->schedules as $schedule)

                                                                <tr>
                                                                    <th scope="row">{{$schedule->time_speaker}}</th>
                                                                    <td>{{$schedule->topic_title}}</td>
                                                                    <td>{{$schedule->speaker}}</td>
                                                                </tr>
                                                                @endforeach


                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn1 "
                                                            data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach ($duaPuluhEnam as $ballroom2)
                                        @if ($ballroom2->room == 'Ballroom 2')
                                        <div class="d-flex flex-column mb-2">
                                            <div class="card position-relative program-atglance shadow"
                                                style="cursor: pointer" data-bs-toggle="modal"
                                                data-bs-target="#ballroom2{{$loop->index}}">
                                                <div class="card-header">
                                                    <small
                                                        class="badge text-light bg-success py-2">{{$ballroom2->category_sesi}}</small>
                                                </div>
                                                <div class="card-body">

                                                    <p class="black fw-bold text-center">{{$ballroom2->time}}</p>
                                                    <p class="mb-0 text-muted text-center">{{$ballroom2->title_ses}}</p>

                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                        <div class="modal fade" id="ballroom2{{$loop->index}}" tabindex="-1"
                                            aria-labelledby="InaSPUModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="InaSPUModalLabel">
                                                            {{$ballroom2->title_ses}}
                                                        </h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="d-flex flex-row justify-content-between">
                                                            <div>
                                                                <p class="mb-0">Date :<span class="fw-bold black">
                                                                        {{\Carbon\Carbon::parse($ballroom2->date)->format('d
                                                                        F Y')}}</p>
                                                                <p class="">Time :<span class="fw-bold black">
                                                                        {{$ballroom2->time}}
                                                                    </span></p>
                                                            </div>
                                                            <div>
                                                                <p class="">Room :<span class="fw-bold black">
                                                                        {{$ballroom2->room}}
                                                                    </span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <p class="mb-0">Session : <span class="fw-bold black">
                                                                {{$ballroom2->title_ses}}</span></p>
                                                        <p class="">Moderator : <span class="fw-bold black">
                                                                {{$ballroom2->moderator}}
                                                            </span></p>
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col" style="width: 18%">Time</th>
                                                                    <th scope="col">Topic</th>
                                                                    <th scope="col">Speaker</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($ballroom2->schedules as $schedule)

                                                                <tr>
                                                                    <th scope="row">{{$schedule->time_speaker}}</th>
                                                                    <td>{{$schedule->topic_title}}</td>
                                                                    <td>{{$schedule->speaker}}</td>
                                                                </tr>
                                                                @endforeach


                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn1 "
                                                            data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach ($duaPuluhEnam as $santika5)
                                        @if ($santika5->room == 'Santika 5 & 6')
                                        <div class="d-flex flex-column mb-2">
                                            <div class="card position-relative program-atglance shadow"
                                                style="cursor: pointer" data-bs-toggle="modal"
                                                data-bs-target="#santika5{{$loop->index}}">
                                                <div class="card-header">
                                                    <small
                                                        class="badge text-light bg-success py-2">{{$santika5->category_sesi}}</small>
                                                </div>
                                                <div class="card-body">

                                                    <p class="black fw-bold text-center">{{$santika5->time}}</p>
                                                    <p class="mb-0 text-muted text-center">{{$santika5->title_ses}}</p>

                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                        <div class="modal fade" id="santika5{{$loop->index}}" tabindex="-1"
                                            aria-labelledby="InaSPUModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="InaSPUModalLabel">
                                                            {{$santika5->title_ses}}
                                                        </h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="d-flex flex-row justify-content-between">
                                                            <div>
                                                                <p class="mb-0">Date :<span class="fw-bold black">
                                                                        {{\Carbon\Carbon::parse($santika5->date)->format('d
                                                                        F Y')}}</p>
                                                                <p class="">Time :<span class="fw-bold black">
                                                                        {{$santika5->time}}
                                                                    </span></p>
                                                            </div>
                                                            <div>
                                                                <p class="">Room :<span class="fw-bold black">
                                                                        {{$santika5->room}}
                                                                    </span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <p class="mb-0">Session : <span class="fw-bold black">
                                                                {{$santika5->title_ses}}</span></p>
                                                        <p class="">Moderator : <span class="fw-bold black">
                                                                {{$santika5->moderator}}
                                                            </span></p>
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col" style="width: 18%">Time</th>
                                                                    <th scope="col">Topic</th>
                                                                    <th scope="col">Speaker</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($santika5->schedules as $schedule)

                                                                <tr>
                                                                    <th scope="row">{{$schedule->time_speaker}}</th>
                                                                    <td>{{$schedule->topic_title}}</td>
                                                                    <td>{{$schedule->speaker}}</td>
                                                                </tr>
                                                                @endforeach


                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn1 "
                                                            data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach ($duaPuluhEnam as $santika15)
                                        @if ($santika15->room == 'Santika 15, 16 & 17')
                                        <div class="d-flex flex-column mb-2">
                                            <div class="card position-relative program-atglance shadow"
                                                style="cursor: pointer" data-bs-toggle="modal"
                                                data-bs-target="#santika15{{$loop->index}}">
                                                <div class="card-header">
                                                    <small
                                                        class="badge text-light bg-success py-2">{{$santika15->category_sesi}}</small>
                                                </div>
                                                <div class="card-body">

                                                    <p class="black fw-bold text-center">{{$santika15->time}}</p>
                                                    <p class="mb-0 text-muted text-center">{{$santika15->title_ses}}</p>

                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                        <div class="modal fade" id="santika15{{$loop->index}}" tabindex="-1"
                                            aria-labelledby="InaSPUModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="InaSPUModalLabel">
                                                            {{$santika15->title_ses}}
                                                        </h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="d-flex flex-row justify-content-between">
                                                            <div>
                                                                <p class="mb-0">Date :<span class="fw-bold black">
                                                                        {{\Carbon\Carbon::parse($santika15->date)->format('d
                                                                        F Y')}}</p>
                                                                <p class="">Time :<span class="fw-bold black">
                                                                        {{$santika15->time}}
                                                                    </span></p>
                                                            </div>
                                                            <div>
                                                                <p class="">Room :<span class="fw-bold black">
                                                                        {{$santika15->room}}
                                                                    </span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <p class="mb-0">Session : <span class="fw-bold black">
                                                                {{$santika15->title_ses}}</span></p>
                                                        <p class="">Moderator : <span class="fw-bold black">
                                                                {{$santika15->moderator}}
                                                            </span></p>
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col" style="width: 18%">Time</th>
                                                                    <th scope="col">Topic</th>
                                                                    <th scope="col">Speaker</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($santika15->schedules as $schedule)

                                                                <tr>
                                                                    <th scope="row">{{$schedule->time_speaker}}</th>
                                                                    <td>{{$schedule->topic_title}}</td>
                                                                    <td>{{$schedule->speaker}}</td>
                                                                </tr>
                                                                @endforeach


                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn1 "
                                                            data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach ($duaPuluhEnam as $santika7)
                                        @if ($santika7->room == 'Santika 7')
                                        <div class="d-flex flex-column mb-2">
                                            <div class="card position-relative program-atglance shadow"
                                                style="cursor: pointer" data-bs-toggle="modal"
                                                data-bs-target="#santika7{{$loop->index}}">
                                                <div class="card-header">
                                                    <small
                                                        class="badge text-light bg-success py-2">{{$santika7->category_sesi}}</small>
                                                </div>
                                                <div class="card-body">

                                                    <p class="black fw-bold text-center">{{$santika7->time}}</p>
                                                    <p class="mb-0 text-muted text-center">{{$santika7->title_ses}}</p>

                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                        <div class="modal fade" id="santika7{{$loop->index}}" tabindex="-1"
                                            aria-labelledby="InaSPUModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="InaSPUModalLabel">
                                                            {{$santika7->title_ses}}
                                                        </h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="d-flex flex-row justify-content-between">
                                                            <div>
                                                                <p class="mb-0">Date :<span class="fw-bold black">
                                                                        {{\Carbon\Carbon::parse($santika7->date)->format('d
                                                                        F Y')}}</p>
                                                                <p class="">Time :<span class="fw-bold black">
                                                                        {{$santika7->time}}
                                                                    </span></p>
                                                            </div>
                                                            <div>
                                                                <p class="">Room :<span class="fw-bold black">
                                                                        {{$santika7->room}}
                                                                    </span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <p class="mb-0">Session : <span class="fw-bold black">
                                                                {{$santika7->title_ses}}</span></p>
                                                        <p class="">Moderator : <span class="fw-bold black">
                                                                {{$santika7->moderator}}
                                                            </span></p>
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col" style="width: 18%">Time</th>
                                                                    <th scope="col">Topic</th>
                                                                    <th scope="col">Speaker</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($santika7->schedules as $schedule)

                                                                <tr>
                                                                    <th scope="row">{{$schedule->time_speaker}}</th>
                                                                    <td>{{$schedule->topic_title}}</td>
                                                                    <td>{{$schedule->speaker}}</td>
                                                                </tr>
                                                                @endforeach


                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn1 "
                                                            data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </td>
                                    {{-- <td>
                                        @foreach ($duaPuluhEnam as $santika8)
                                        @if ($santika8->room == 'Santika 8')
                                        <div class="d-flex flex-column mb-2">
                                            <div class="card position-relative program-atglance shadow"
                                                style="cursor: pointer" data-bs-toggle="modal"
                                                data-bs-target="#santika8{{$loop->index}}">
                                    <div class="card-header">
                                        <small
                                            class="badge text-light bg-success py-2">{{$santika8->category_sesi}}</small>
                                    </div>
                                    <div class="card-body">

                                        <p class="black fw-bold text-center">{{$santika8->time}}</p>
                                        <p class="mb-0 text-muted text-center">{{$santika8->title_ses}}</p>

                                    </div>
                    </div>
                </div>
                @endif
                <div class="modal fade" id="santika8{{$loop->index}}" tabindex="-1"
                    aria-labelledby="InaSPUModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="InaSPUModalLabel">
                                    {{$santika8->title_ses}}
                                </h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="d-flex flex-row justify-content-between">
                                    <div>
                                        <p class="mb-0">Date :<span class="fw-bold black">
                                                {{\Carbon\Carbon::parse($santika8->date)->format('d
                                                                        F Y')}}</p>
                                        <p class="">Time :<span class="fw-bold black">
                                                {{$santika8->time}}
                                            </span></p>
                                    </div>
                                    <div>
                                        <p class="">Room :<span class="fw-bold black">
                                                {{$santika8->room}}
                                            </span>
                                        </p>
                                    </div>
                                </div>
                                <p class="mb-0">Session : <span class="fw-bold black">
                                        {{$santika8->title_ses}}</span></p>
                                <p class="">Moderator : <span class="fw-bold black">
                                        {{$santika8->moderator}}
                                    </span></p>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col" style="width: 18%">Time</th>
                                            <th scope="col">Topic</th>
                                            <th scope="col">Speaker</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($santika8->schedules as $schedule)

                                        <tr>
                                            <th scope="row">{{$schedule->time_speaker}}</th>
                                            <td>{{$schedule->topic_title}}</td>
                                            <td>{{$schedule->speaker}}</td>
                                        </tr>
                                        @endforeach


                                    </tbody>
                                </table>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn1 "
                                    data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                </td> --}}
                </tr>
                </tbody>
                </table>
            </div>
        </div>
        <div class="tab-pane fade" id="nav-27" role="tabpanel" aria-labelledby="nav-27-tab" tabindex="0">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th style="width: 11%" class="text-center" scope="col">Ballroom 2</th>
                            <th style="width: 11%" class="text-center" scope="col">Santika 15, 16 & 17</th>
                            <th style="width: 11%" class="text-center" scope="col">Santika 5, 6</th>
                            <th style="width: 11%" class="text-center" scope="col">Santika 7</th>
                            <th style="width: 11%" class="text-center" scope="col">Santika 10, 11</th>
                            <th style="width: 11%" class="text-center" scope="col">Santika 9</th>
                            {{-- <th style="width: 11%" class="text-center" scope="col">Santika 12</th> --}}
                            <th style="width: 11%" class="text-center" scope="col">Santika 8</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                @foreach ($duaPuluhTujuh as $ballroom2_27)
                                @if ($ballroom2_27->room == 'Ballroom 2')
                                <div class="d-flex flex-column mb-2">
                                    <div class="card position-relative program-atglance shadow"
                                        style="cursor: pointer" data-bs-toggle="modal"
                                        data-bs-target="#tes{{$loop->index}}">
                                        <div class="card-header">
                                            <small
                                                class="badge text-light bg-success py-2">{{$ballroom2_27->category_sesi}}</small>
                                        </div>
                                        <div class="card-body">

                                            <p class="black fw-bold text-center">{{$ballroom2_27->time}}</p>
                                            <p class="mb-0 text-muted text-center">{{$ballroom2_27->title_ses}}
                                            </p>

                                        </div>
                                    </div>
                                </div>
                                @endif
                                <div class="modal fade" id="tes{{$loop->index}}" tabindex="-1"
                                    aria-labelledby="InaSPUModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="InaSPUModalLabel">
                                                    {{$ballroom2_27->title_ses}}
                                                </h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="d-flex flex-row justify-content-between">
                                                    <div>
                                                        <p class="mb-0">Date :<span class="fw-bold black">
                                                                {{\Carbon\Carbon::parse($ballroom2_27->date)->format('d
                                                                        F Y')}}</p>
                                                        <p class="">Time :<span class="fw-bold black">
                                                                {{$ballroom2_27->time}}
                                                            </span></p>
                                                    </div>
                                                    <div>
                                                        <p class="">Room :<span class="fw-bold black">
                                                                {{$ballroom2_27->room}}
                                                            </span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <p class="mb-0">Session : <span class="fw-bold black">
                                                        {{$ballroom2_27->title_ses}}</span></p>
                                                <p class="">Moderator : <span class="fw-bold black">
                                                        {{$ballroom2_27->moderator}}
                                                    </span></p>
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col" style="width: 18%">Time</th>
                                                            <th scope="col">Topic</th>
                                                            <th scope="col">Speaker</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($ballroom2_27->schedules as $schedule)

                                                        <tr>
                                                            <th scope="row">{{$schedule->time_speaker}}</th>
                                                            <td>{{$schedule->topic_title}}</td>
                                                            <td>{{$schedule->speaker}}</td>
                                                        </tr>
                                                        @endforeach


                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn1 "
                                                    data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </td>
                            <td>
                                @foreach ($duaPuluhTujuh as $santika15)
                                @if ($santika15->room == 'Santika 15, 16 & 17')
                                <div class="d-flex flex-column mb-2">
                                    <div class="card position-relative program-atglance shadow"
                                        style="cursor: pointer" data-bs-toggle="modal"
                                        data-bs-target="#santika15dua{{$loop->index}}">
                                        <div class="card-header">
                                            <small
                                                class="badge text-light bg-success py-2">{{$santika15->category_sesi}}</small>
                                        </div>
                                        <div class="card-body">

                                            <p class="black fw-bold text-center">{{$santika15->time}}</p>
                                            <p class="mb-0 text-muted text-center">{{$santika15->title_ses}}</p>

                                        </div>
                                    </div>
                                </div>
                                @endif
                                <div class="modal fade" id="santika15dua{{$loop->index}}" tabindex="-1"
                                    aria-labelledby="InaSPUModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="InaSPUModalLabel">
                                                    {{$santika15->title_ses}}
                                                </h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="d-flex flex-row justify-content-between">
                                                    <div>
                                                        <p class="mb-0">Date :<span class="fw-bold black">
                                                                {{\Carbon\Carbon::parse($santika15->date)->format('d
                                                                        F Y')}}</p>
                                                        <p class="">Time :<span class="fw-bold black">
                                                                {{$santika15->time}}
                                                            </span></p>
                                                    </div>
                                                    <div>
                                                        <p class="">Room :<span class="fw-bold black">
                                                                {{$santika15->room}}
                                                            </span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <p class="mb-0">Session : <span class="fw-bold black">
                                                        {{$santika15->title_ses}}</span></p>
                                                <p class="">Moderator : <span class="fw-bold black">
                                                        {{$santika15->moderator}}
                                                    </span></p>
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col" style="width: 18%">Time</th>
                                                            <th scope="col">Topic</th>
                                                            <th scope="col">Speaker</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($santika15->schedules as $schedule)

                                                        <tr>
                                                            <th scope="row">{{$schedule->time_speaker}}</th>
                                                            <td>{{$schedule->topic_title}}</td>
                                                            <td>{{$schedule->speaker}}</td>
                                                        </tr>
                                                        @endforeach


                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn1 "
                                                    data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </td>
                            <td>
                                @foreach ($duaPuluhTujuh as $santika5)
                                @if ($santika5->room == 'Santika 5 & 6')
                                <div class="d-flex flex-column mb-2">
                                    <div class="card position-relative program-atglance shadow"
                                        style="cursor: pointer" data-bs-toggle="modal"
                                        data-bs-target="#santikalima{{$loop->index}}">
                                        <div class="card-header">
                                            <small
                                                class="badge text-light bg-success py-2">{{$santika5->category_sesi}}</small>
                                        </div>
                                        <div class="card-body">

                                            <p class="black fw-bold text-center">{{$santika5->time}}</p>
                                            <p class="mb-0 text-muted text-center">{{$santika5->title_ses}}</p>

                                        </div>
                                    </div>
                                </div>
                                @endif
                                <div class="modal fade" id="santikalima{{$loop->index}}" tabindex="-1"
                                    aria-labelledby="InaSPUModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="InaSPUModalLabel">
                                                    {{$santika5->title_ses}}
                                                </h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="d-flex flex-row justify-content-between">
                                                    <div>
                                                        <p class="mb-0">Date :<span class="fw-bold black">
                                                                {{\Carbon\Carbon::parse($santika5->date)->format('d
                                                                        F Y')}}</p>
                                                        <p class="">Time :<span class="fw-bold black">
                                                                {{$santika5->time}}
                                                            </span></p>
                                                    </div>
                                                    <div>
                                                        <p class="">Room :<span class="fw-bold black">
                                                                {{$santika5->room}}
                                                            </span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <p class="mb-0">Session : <span class="fw-bold black">
                                                        {{$santika5->title_ses}}</span></p>
                                                <p class="">Moderator : <span class="fw-bold black">
                                                        {{$santika5->moderator}}
                                                    </span></p>
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col" style="width: 18%">Time</th>
                                                            <th scope="col">Topic</th>
                                                            <th scope="col">Speaker</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($santika5->schedules as $schedule)

                                                        <tr>
                                                            <th scope="row">{{$schedule->time_speaker}}</th>
                                                            <td>{{$schedule->topic_title}}</td>
                                                            <td>{{$schedule->speaker}}</td>
                                                        </tr>
                                                        @endforeach


                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn1 "
                                                    data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </td>
                            <td>
                                @foreach ($duaPuluhTujuh as $santika7)
                                @if ($santika7->room == 'Santika 7')
                                <div class="d-flex flex-column mb-2">
                                    <div class="card position-relative program-atglance shadow"
                                        style="cursor: pointer" data-bs-toggle="modal"
                                        data-bs-target="#santika7dua{{$loop->index}}">
                                        <div class="card-header">
                                            <small
                                                class="badge text-light bg-success py-2">{{$santika7->category_sesi}}</small>
                                        </div>
                                        <div class="card-body">

                                            <p class="black fw-bold text-center">{{$santika7->time}}</p>
                                            <p class="mb-0 text-muted text-center">{{$santika7->title_ses}}</p>

                                        </div>
                                    </div>
                                </div>
                                @endif
                                <div class="modal fade" id="santika7dua{{$loop->index}}" tabindex="-1"
                                    aria-labelledby="InaSPUModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="InaSPUModalLabel">
                                                    {{$santika7->title_ses}}
                                                </h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="d-flex flex-row justify-content-between">
                                                    <div>
                                                        <p class="mb-0">Date :<span class="fw-bold black">
                                                                {{\Carbon\Carbon::parse($santika7->date)->format('d
                                                                        F Y')}}</p>
                                                        <p class="">Time :<span class="fw-bold black">
                                                                {{$santika7->time}}
                                                            </span></p>
                                                    </div>
                                                    <div>
                                                        <p class="">Room :<span class="fw-bold black">
                                                                {{$santika7->room}}
                                                            </span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <p class="mb-0">Session : <span class="fw-bold black">
                                                        {{$santika7->title_ses}}</span></p>
                                                <p class="">Moderator : <span class="fw-bold black">
                                                        {{$santika7->moderator}}
                                                    </span></p>
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col" style="width: 18%">Time</th>
                                                            <th scope="col">Topic</th>
                                                            <th scope="col">Speaker</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($santika7->schedules as $schedule)

                                                        <tr>
                                                            <th scope="row">{{$schedule->time_speaker}}</th>
                                                            <td>{{$schedule->topic_title}}</td>
                                                            <td>{{$schedule->speaker}}</td>
                                                        </tr>
                                                        @endforeach


                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn1 "
                                                    data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </td>
                            <td>
                                @foreach ($duaPuluhTujuh as $santika10)
                                @if ($santika10->room == 'Santika 10 & 11')
                                <div class="d-flex flex-column mb-2">
                                    <div class="card position-relative program-atglance shadow"
                                        style="cursor: pointer" data-bs-toggle="modal"
                                        data-bs-target="#santika10dua{{$loop->index}}">
                                        <div class="card-header">
                                            <small
                                                class="badge text-light bg-success py-2">{{$santika10->category_sesi}}</small>
                                        </div>
                                        <div class="card-body">

                                            <p class="black fw-bold text-center">{{$santika10->time}}</p>
                                            <p class="mb-0 text-muted text-center">{{$santika10->title_ses}}</p>

                                        </div>
                                    </div>
                                </div>
                                @endif
                                <div class="modal fade" id="santika10dua{{$loop->index}}" tabindex="-1"
                                    aria-labelledby="InaSPUModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="InaSPUModalLabel">
                                                    {{$santika10->title_ses}}
                                                </h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="d-flex flex-row justify-content-between">
                                                    <div>
                                                        <p class="mb-0">Date :<span class="fw-bold black">
                                                                {{\Carbon\Carbon::parse($santika10->date)->format('d
                                                                        F Y')}}</p>
                                                        <p class="">Time :<span class="fw-bold black">
                                                                {{$santika10->time}}
                                                            </span></p>
                                                    </div>
                                                    <div>
                                                        <p class="">Room :<span class="fw-bold black">
                                                                {{$santika10->room}}
                                                            </span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <p class="mb-0">Session : <span class="fw-bold black">
                                                        {{$santika10->title_ses}}</span></p>
                                                <p class="">Moderator : <span class="fw-bold black">
                                                        {{$santika10->moderator}}
                                                    </span></p>
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col" style="width: 18%">Time</th>
                                                            <th scope="col">Topic</th>
                                                            <th scope="col">Speaker</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($santika10->schedules as $schedule)

                                                        <tr>
                                                            <th scope="row">{{$schedule->time_speaker}}</th>
                                                            <td>{{$schedule->topic_title}}</td>
                                                            <td>{{$schedule->speaker}}</td>
                                                        </tr>
                                                        @endforeach


                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn1 "
                                                    data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </td>
                            <td>
                                @foreach ($duaPuluhTujuh as $santika9)
                                @if ($santika9->room == 'Santika 9')
                                <div class="d-flex flex-column mb-2">
                                    <div class="card position-relative program-atglance shadow"
                                        style="cursor: pointer" data-bs-toggle="modal"
                                        data-bs-target="#santika9{{$loop->index}}">
                                        <div class="card-header">
                                            <small
                                                class="badge text-light bg-success py-2">{{$santika9->category_sesi}}</small>
                                        </div>
                                        <div class="card-body">

                                            <p class="black fw-bold text-center">{{$santika9->time}}</p>
                                            <p class="mb-0 text-muted text-center">{{$santika9->title_ses}}</p>

                                        </div>
                                    </div>
                                </div>
                                @endif
                                <div class="modal fade" id="santika9{{$loop->index}}" tabindex="-1"
                                    aria-labelledby="InaSPUModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="InaSPUModalLabel">
                                                    {{$santika9->title_ses}}
                                                </h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="d-flex flex-row justify-content-between">
                                                    <div>
                                                        <p class="mb-0">Date :<span class="fw-bold black">
                                                                {{\Carbon\Carbon::parse($santika9->date)->format('d
                                                                        F Y')}}</p>
                                                        <p class="">Time :<span class="fw-bold black">
                                                                {{$santika9->time}}
                                                            </span></p>
                                                    </div>
                                                    <div>
                                                        <p class="">Room :<span class="fw-bold black">
                                                                {{$santika9->room}}
                                                            </span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <p class="mb-0">Session : <span class="fw-bold black">
                                                        {{$santika9->title_ses}}</span></p>
                                                <p class="">Moderator : <span class="fw-bold black">
                                                        {{$santika9->moderator}}
                                                    </span></p>
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col" style="width: 18%">Time</th>
                                                            <th scope="col">Topic</th>
                                                            <th scope="col">Speaker</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($santika9->schedules as $schedule)

                                                        <tr>
                                                            <th scope="row">{{$schedule->time_speaker}}</th>
                                                            <td>{{$schedule->topic_title}}</td>
                                                            <td>{{$schedule->speaker}}</td>
                                                        </tr>
                                                        @endforeach


                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn1 "
                                                    data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </td>
                            {{-- <td>
                                        @foreach ($duaPuluhTujuh as $santika12)
                                        @if ($santika12->room == 'Santika 12')
                                        <div class="d-flex flex-column mb-2">
                                            <div class="card position-relative program-atglance shadow"
                                                style="cursor: pointer" data-bs-toggle="modal"
                                                data-bs-target="#santika12{{$loop->index}}">
                            <div class="card-header">
                                <small
                                    class="badge text-light bg-success py-2">{{$santika12->category_sesi}}</small>
                            </div>
                            <div class="card-body">

                                <p class="black fw-bold text-center">{{$santika12->time}}</p>
                                <p class="mb-0 text-muted text-center">{{$santika12->title_ses}}</p>

                            </div>
            </div>
        </div>
        @endif
        <div class="modal fade" id="santika12{{$loop->index}}" tabindex="-1"
            aria-labelledby="InaSPUModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="InaSPUModalLabel">
                            {{$santika12->title_ses}}
                        </h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="d-flex flex-row justify-content-between">
                            <div>
                                <p class="mb-0">Date :<span class="fw-bold black">
                                        {{\Carbon\Carbon::parse($santika12->date)->format('d
                                                                        F Y')}}</p>
                                <p class="">Time :<span class="fw-bold black">
                                        {{$santika12->time}}
                                    </span></p>
                            </div>
                            <div>
                                <p class="">Room :<span class="fw-bold black">
                                        {{$santika12->room}}
                                    </span>
                                </p>
                            </div>
                        </div>
                        <p class="mb-0">Session : <span class="fw-bold black">
                                {{$santika12->title_ses}}</span></p>
                        <p class="">Moderator : <span class="fw-bold black">
                                {{$santika12->moderator}}
                            </span></p>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col" style="width: 18%">Time</th>
                                    <th scope="col">Topic</th>
                                    <th scope="col">Speaker</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($santika12->schedules as $schedule)

                                <tr>
                                    <th scope="row">{{$schedule->time_speaker}}</th>
                                    <td>{{$schedule->topic_title}}</td>
                                    <td>{{$schedule->speaker}}</td>
                                </tr>
                                @endforeach


                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn1 "
                            data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        </td> --}}
        <td>
            @foreach ($duaPuluhTujuh as $santika8)
            @if ($santika8->room == 'Santika 8')
            <div class="d-flex flex-column mb-2">
                <div class="card position-relative program-atglance shadow"
                    style="cursor: pointer" data-bs-toggle="modal"
                    data-bs-target="#santikadelapan{{$loop->index}}">
                    <div class="card-header">
                        <small
                            class="badge text-light bg-success py-2">{{$santika8->category_sesi}}</small>
                    </div>
                    <div class="card-body">

                        <p class="black fw-bold text-center">{{$santika8->time}}</p>
                        <p class="mb-0 text-muted text-center">{{$santika8->title_ses}}</p>

                    </div>
                </div>
            </div>
            @endif
            <div class="modal fade" id="santikadelapan{{$loop->index}}" tabindex="-1"
                aria-labelledby="InaSPUModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="InaSPUModalLabel">
                                {{$santika8->title_ses}}
                            </h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="d-flex flex-row justify-content-between">
                                <div>
                                    <p class="mb-0">Date :<span class="fw-bold black">
                                            {{\Carbon\Carbon::parse($santika8->date)->format('d
                                                                        F Y')}}</p>
                                    <p class="">Time :<span class="fw-bold black">
                                            {{$santika8->time}}
                                        </span></p>
                                </div>
                                <div>
                                    <p class="">Room :<span class="fw-bold black">
                                            {{$santika8->room}}
                                        </span>
                                    </p>
                                </div>
                            </div>
                            <p class="mb-0">Session : <span class="fw-bold black">
                                    {{$santika8->title_ses}}</span></p>
                            <p class="">Moderator : <span class="fw-bold black">
                                    {{$santika8->moderator}}
                                </span></p>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col" style="width: 18%">Time</th>
                                        <th scope="col">Topic</th>
                                        <th scope="col">Speaker</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($santika8->schedules as $schedule)

                                    <tr>
                                        <th scope="row">{{$schedule->time_speaker}}</th>
                                        <td>{{$schedule->topic_title}}</td>
                                        <td>{{$schedule->speaker}}</td>
                                    </tr>
                                    @endforeach


                                </tbody>
                            </table>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn1 "
                                data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </td>
        </tr>
        </tbody>
        </table>
</div>
</div>
{{-- <div class="tab-pane fade" id="nav-28" role="tabpanel" aria-labelledby="nav-28-tab" tabindex="0">
                    5...
                </div> --}}
</div>

</div>
</section>
</div>