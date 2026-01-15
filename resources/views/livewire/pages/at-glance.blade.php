<div>
    <section class="breadcrumbs relative pb-0">
        {{-- <div class="absolute inset-0 bg-gradient-to-b from-[#008068]/80 to-[#78c9bb]/10"></div> --}}
        <div class="py-16 lg:py-28 text-center relative">
            <h2 class="text-accent uppercase text-2xl font-semibold tracking-wide lg:text-4xl">Program at Glance</h2>
        </div>
    </section>

    <section class="px-5 md:px-10 pt-0 pb-10 md:py-20 bg-competition">
        <div class="flex items-center justify-center">
            <div x-data="{ openTab: 1 }" class="lg:w-11/12 w-full mx-auto">
                <div class="">
                    <div class="mb-4 flex flex-wrap space-x-4 p-2 bg-white rounded-lg shadow-md">
                        <button x-on:click="openTab = 1" :class="{ 'bg-warning text-white': openTab === 1 }"
                            class="flex-1 py-2 px-4 rounded-md focus:outline-none focus:shadow-outline-blue transition-all duration-300">1
                            October</button>
                        <button x-on:click="openTab = 2" :class="{ 'bg-warning text-white': openTab === 2 }"
                            class="flex-1 py-2 px-4 rounded-md focus:outline-none focus:shadow-outline-blue transition-all duration-300">2
                            October</button>
                        <button x-on:click="openTab = 3" :class="{ 'bg-warning text-white': openTab === 3 }"
                            class="flex-1 py-2 px-4 rounded-md focus:outline-none focus:shadow-outline-blue transition-all duration-300">3
                            October</button>
                        {{-- <button x-on:click="openTab = 4" :class="{ 'bg-warning text-white': openTab === 4 }"
                            class="flex-1 py-2 px-4 rounded-md focus:outline-none focus:shadow-outline-blue transition-all duration-300">4
                            October</button>
                        <button x-on:click="openTab = 5" :class="{ 'bg-warning text-white': openTab === 5 }"
                            class="flex-1 py-2 px-4 rounded-md focus:outline-none focus:shadow-outline-blue transition-all duration-300">5
                            October</button> --}}

<<<<<<< HEAD
                    </div>

                    <div x-show="openTab === 1"
                        class="transition-all duration-300 bg-white p-4 rounded-lg shadow-md border-x-4 border-warning">
                        <div class="overflow-x-auto">
                            <table class="table">
                                <thead>
                                    <tr class="text-base font-semibold mb-2">

                                        <th>Fatmawati Hospital</th>
=======
    <section>
        <div class="flex items-center justify-center">
            <div x-data="{ openTab: 3 }" class="lg:w-11/12 w-full mx-auto">
                <div class="">
                    <div class="mb-4 flex flex-wrap space-x-4 p-2 bg-white rounded-lg shadow-md">
                        <button x-on:click="openTab = 1" :class="{ 'bg-primary text-white': openTab === 1 }"
                            class="flex-1 py-2 px-4 rounded-md focus:outline-none focus:shadow-outline-blue transition-all duration-300">28
                            October</button>
                        <button x-on:click="openTab = 2" :class="{ 'bg-primary text-white': openTab === 2 }"
                            class="flex-1 py-2 px-4 rounded-md focus:outline-none focus:shadow-outline-blue transition-all duration-300">29
                            October</button>
                        <button x-on:click="openTab = 3" :class="{ 'bg-primary text-white': openTab === 3 }"
                            class="flex-1 py-2 px-4 rounded-md focus:outline-none focus:shadow-outline-blue transition-all duration-300">30
                            October</button>
                        <button x-on:click="openTab = 4" :class="{ 'bg-primary text-white': openTab === 4 }"
                            class="flex-1 py-2 px-4 rounded-md focus:outline-none focus:shadow-outline-blue transition-all duration-300">31
                            October</button>
                        <button x-on:click="openTab = 5" :class="{ 'bg-primary text-white': openTab === 5 }"
                            class="flex-1 py-2 px-4 rounded-md focus:outline-none focus:shadow-outline-blue transition-all duration-300">1
                            November</button>
                    </div>

                    <div x-show="openTab === 1"
                        class="transition-all duration-300 bg-white p-4 rounded-lg shadow-md border-x-4 border-primary">
                        <div class="overflow-x-auto">
                            <table class="table">
                                <thead>
                                    <tr class="text-base font-semibold mb-2 text-primary-800 ">

                                        <th>Skill Lab FK Universitas Mataram</th>
                                        <th>PLN</th>
>>>>>>> 0c7f8abe9566543b850cd23ec2c4883b74874075
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="">
                                        <td class="align-top">
<<<<<<< HEAD
                                            {{-- @dd($duasembilan) --}}
                                            @foreach ($satu as $fatmawati)
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

=======
                                            @foreach ($duadelapan as $labFk)
                                            @if ($labFk->room == 'Skill Lab FK Universitas Mataram')
                                            <button class="hover:shadow-lg hover:shadow-perhati-800 block w-full"
                                                onclick="labFk28{{$loop->index}}.showModal()">
                                                <div class="border px-0 py-4 w-full rounded-md bg-[{{$labFk->color}}]">
                                                    {{$labFk->time}} <br>
                                                    {{$labFk->title}}
                                                </div>
                                            </button>
                                            @endif

                                            <dialog id="labFk28{{$loop->index}}" class="modal">
                                                <div class="modal-box w-11/12 max-w-5xl text-start">
                                                    <div class="flex justify-between mb-3">
                                                        <div class="text-start">
                                                            <h3 class="mb-0">Date: <span class="">
                                                                    {{\Carbon\Carbon::parse($labFk->date)->format('d F
                                                                    Y')}}</span></h3>
                                                            <h3 class="mb-0">Time: <span class="">
                                                                    {{$labFk->time}}</span></h3>
                                                        </div>
                                                        <div>
                                                            <p class="">Room :<span class="">
                                                                    {{$labFk->room}}
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0">Session : <span class="">
                                                            {{$labFk->title}}</span></p>
                                                    <p class="">Moderator : <span class="">
                                                            {{$labFk->moderator}}
                                                        </span></p>
                                                    <div class="overflow-x-auto mt-5">
                                                        <table class="table">
                                                            <!-- head -->
                                                            <thead>
                                                                <tr>
                                                                    <th style="width: 18%">Time</th>
                                                                    <th>Topic</th>
                                                                    <th>Speaker</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($labFk->schedules as $schedule)
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
                                        <td>
                                            @foreach ($duadelapan as $pln)
                                            @if ($pln->room == 'PLN')
                                            <button class="hover:shadow-lg hover:shadow-perhati-800 block w-full"
                                                onclick="pln28{{$loop->index}}.showModal()">
                                                <div class="border px-0 py-4 w-full rounded-md bg-[{{$pln->color}}]">
                                                    {{$pln->time}} <br>
                                                    {{$pln->title}}
                                                </div>
                                            </button>
                                            @endif
                                            <dialog id="pln28{{$loop->index}}" class="modal">
                                                <div class="modal-box w-11/12 max-w-5xl text-start">
                                                    <div class="flex justify-between mb-3">
                                                        <div class="text-start">
                                                            <h3 class="mb-0">Date: <span class="">
                                                                    {{\Carbon\Carbon::parse($pln->date)->format('d F
                                                                    Y')}}</span></h3>
                                                            <h3 class="mb-0">Time: <span class="">
                                                                    {{$pln->time}}</span></h3>
                                                        </div>
                                                        <div>
                                                            <p class="">Room :<span class="">
                                                                    {{$pln->room}}
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0">Session : <span class="">
                                                            {{$pln->title}}</span></p>
                                                    <p class="">Moderator : <span class="">
                                                            {{$pln->moderator}}
                                                        </span></p>
                                                    <div class="overflow-x-auto mt-5">
                                                        <table class="table">
                                                            <!-- head -->
                                                            <thead>
                                                                <tr>
                                                                    <th style="width: 18%">Time</th>
                                                                    <th>Topic</th>
                                                                    <th>Speaker</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($pln->schedules as $schedule)
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
>>>>>>> 0c7f8abe9566543b850cd23ec2c4883b74874075
                                    </tr>
                                </tbody>
                            </table>
                        </div>
<<<<<<< HEAD
=======
                    </div>

                    <div x-show="openTab === 2"
                        class="transition-all duration-300 bg-white p-4 rounded-lg shadow-md border-x-4 border-primary">

                        <div class="overflow-x-auto">
                            <table class="table">
                                <thead>
                                    <tr class="text-base font-semibold mb-2 text-primary-800 text-center">
                                        <th>Skill Lab FK <br> Universitas Mataram</th>
                                        <th>IBS RSUD NTB</th>
                                        <th> Gili Meno </th>
                                        <th> Gili Trawangan </th>
                                        <th> Mandalika </th>
                                        <th> Pejanggik </th>
                                        <th> Rinjani Ballroom </th>
                                        <th> Gili Air </th>
                                        <th> Sangkareang </th>
                                        <th> Melati 1</th>
                                        <th> Melati 2</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="text-center text-xs">
                                        <td class="align-top">
                                            @foreach ($duasembilan as $labFk)
                                            @if ($labFk->room == 'Skill Lab FK Universitas Mataram')
                                            <button class="hover:shadow-lg hover:shadow-perhati-800 block w-full"
                                                onclick="labFk29{{$loop->index}}.showModal()">
                                                <div class="border px-2 py-4 w-full rounded-md bg-[{{$labFk->color}}]">
                                                    {{$labFk->time}} <br>
                                                    {{$labFk->title}}
                                                </div>
                                            </button>
                                            @endif
                                            <dialog id="labFk29{{$loop->index}}" class="modal">
                                                <div class="modal-box w-11/12 max-w-5xl text-start">
                                                    <div class="flex justify-between mb-3">
                                                        <div class="text-start">
                                                            <h3 class="mb-0">Date: <span class="">
                                                                    {{\Carbon\Carbon::parse($labFk->date)->format('d F
                                                                    Y')}}</span></h3>
                                                            <h3 class="mb-0">Time: <span class="">
                                                                    {{$labFk->time}}</span></h3>
                                                        </div>
                                                        <div>
                                                            <p class="">Room :<span class="">
                                                                    {{$labFk->room}}
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0">Session : <span class="">
                                                            {{$labFk->title}}</span></p>
                                                    <p class="">Moderator : <span class="">
                                                            {{$labFk->moderator}}
                                                        </span></p>
                                                    <div class="overflow-x-auto mt-5">
                                                        <table class="table">
                                                            <!-- head -->
                                                            <thead>
                                                                <tr>
                                                                    <th style="width: 18%">Time</th>
                                                                    <th>Topic</th>
                                                                    <th>Speaker</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($labFk->schedules as $schedule)
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
                                            @foreach ($duasembilan as $ibs)
                                            @if ($ibs->room == 'IBS RSUD NTB')
                                            <button class="hover:shadow-lg hover:shadow-perhati-800 block w-full"
                                                onclick="ibs29{{$loop->index}}.showModal()">
                                                <div class="border px-2 py-4 w-full rounded-md bg-[{{$ibs->color}}]">
                                                    {{$ibs->time}} <br>
                                                    {{$ibs->title}}
                                                </div>
                                            </button>
                                            @endif
                                            <dialog id="ibs29{{$loop->index}}" class="modal">
                                                <div class="modal-box w-11/12 max-w-5xl text-start">
                                                    <div class="flex justify-between mb-3">
                                                        <div class="text-start">
                                                            <h3 class="mb-0">Date: <span class="">
                                                                    {{\Carbon\Carbon::parse($ibs->date)->format('d F
                                                                    Y')}}</span></h3>
                                                            <h3 class="mb-0">Time: <span class="">
                                                                    {{$ibs->time}}</span></h3>
                                                        </div>
                                                        <div>
                                                            <p class="">Room :<span class="">
                                                                    {{$ibs->room}}
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0">Session : <span class="">
                                                            {{$ibs->title}}</span></p>
                                                    <p class="">Moderator : <span class="">
                                                            {{$ibs->moderator}}
                                                        </span></p>
                                                    <div class="overflow-x-auto mt-5">
                                                        <table class="table">
                                                            <!-- head -->
                                                            <thead>
                                                                <tr>
                                                                    <th style="width: 18%">Time</th>
                                                                    <th>Topic</th>
                                                                    <th>Speaker</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($ibs->schedules as $schedule)
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
                                            @foreach ($duasembilan as $meno)
                                            @if ($meno->room == 'Gili Meno')
                                            <button class="hover:shadow-lg hover:shadow-perhati-800 block w-full"
                                                onclick="meno29{{$loop->index}}.showModal()">
                                                <div class="border px-2 py-4 w-full rounded-md bg-[{{$meno->color}}]">
                                                    {{$meno->time}} <br>
                                                    {{$meno->title}}
                                                </div>
                                            </button>
                                            @endif
                                            <dialog id="meno29{{$loop->index}}" class="modal">
                                                <div class="modal-box w-11/12 max-w-5xl text-start">
                                                    <div class="flex justify-between mb-3">
                                                        <div class="text-start">
                                                            <h3 class="mb-0">Date: <span class="">
                                                                    {{\Carbon\Carbon::parse($meno->date)->format('d F
                                                                    Y')}}</span></h3>
                                                            <h3 class="mb-0">Time: <span class="">
                                                                    {{$meno->time}}</span></h3>
                                                        </div>
                                                        <div>
                                                            <p class="">Room :<span class="">
                                                                    {{$meno->room}}
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0">Session : <span class="">
                                                            {{$meno->title}}</span></p>
                                                    <p class="">Moderator : <span class="">
                                                            {{$meno->moderator}}
                                                        </span></p>
                                                    <div class="overflow-x-auto mt-5">
                                                        <table class="table">
                                                            <!-- head -->
                                                            <thead>
                                                                <tr>
                                                                    <th style="width: 18%">Time</th>
                                                                    <th>Topic</th>
                                                                    <th>Speaker</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($meno->schedules as $schedule)
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
                                            @foreach ($duasembilan as $trawangan)
                                            @if ($trawangan->room == 'Gili Trawangan')
                                            <button class="hover:shadow-lg hover:shadow-perhati-800 block w-full"
                                                onclick="trawangan29{{$loop->index}}.showModal()">
                                                <div
                                                    class="border px-2 py-4 w-full rounded-md bg-[{{$trawangan->color}}]">
                                                    {{$trawangan->time}} <br>
                                                    {{$trawangan->title}}
                                                </div>
                                            </button>
                                            @endif
                                            <dialog id="trawangan29{{$loop->index}}" class="modal">
                                                <div class="modal-box w-11/12 max-w-5xl text-start">
                                                    <div class="flex justify-between mb-3">
                                                        <div class="text-start">
                                                            <h3 class="mb-0">Date: <span class="">
                                                                    {{\Carbon\Carbon::parse($trawangan->date)->format('d
                                                                    F
                                                                    Y')}}</span></h3>
                                                            <h3 class="mb-0">Time: <span class="">
                                                                    {{$trawangan->time}}</span></h3>
                                                        </div>
                                                        <div>
                                                            <p class="">Room :<span class="">
                                                                    {{$trawangan->room}}
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0">Session : <span class="">
                                                            {{$trawangan->title}}</span></p>
                                                    <p class="">Moderator : <span class="">
                                                            {{$trawangan->moderator}}
                                                        </span></p>
                                                    <div class="overflow-x-auto mt-5">
                                                        <table class="table">
                                                            <!-- head -->
                                                            <thead>
                                                                <tr>
                                                                    <th style="width: 18%">Time</th>
                                                                    <th>Topic</th>
                                                                    <th>Speaker</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($trawangan->schedules as $schedule)
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
                                            @foreach ($duasembilan as $mandalika)
                                            @if ($mandalika->room == 'Mandalika')
                                            <button class="hover:shadow-lg hover:shadow-perhati-800 block w-full"
                                                onclick="mandalika29{{$loop->index}}.showModal()">
                                                <div
                                                    class="border px-2 py-4 w-full rounded-md bg-[{{$mandalika->color}}]">
                                                    {{$mandalika->time}} <br>
                                                    {{$mandalika->title}}
                                                </div>
                                            </button>
                                            @endif
                                            <dialog id="mandalika29{{$loop->index}}" class="modal">
                                                <div class="modal-box w-11/12 max-w-5xl text-start">
                                                    <div class="flex justify-between mb-3">
                                                        <div class="text-start">
                                                            <h3 class="mb-0">Date: <span class="">
                                                                    {{\Carbon\Carbon::parse($mandalika->date)->format('d
                                                                    F
                                                                    Y')}}</span></h3>
                                                            <h3 class="mb-0">Time: <span class="">
                                                                    {{$mandalika->time}}</span></h3>
                                                        </div>
                                                        <div>
                                                            <p class="">Room :<span class="">
                                                                    {{$mandalika->room}}
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0">Session : <span class="">
                                                            {{$mandalika->title}}</span></p>
                                                    <p class="">Moderator : <span class="">
                                                            {{$mandalika->moderator}}
                                                        </span></p>
                                                    <div class="overflow-x-auto mt-5">
                                                        <table class="table">
                                                            <!-- head -->
                                                            <thead>
                                                                <tr>
                                                                    <th style="width: 18%">Time</th>
                                                                    <th>Topic</th>
                                                                    <th>Speaker</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($mandalika->schedules as $schedule)
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
                                            @foreach ($duasembilan as $Pejanggik)
                                            @if ($Pejanggik->room == 'Pejanggik')
                                            <button class="hover:shadow-lg hover:shadow-perhati-800 block w-full"
                                                onclick="Pejanggik29{{$loop->index}}.showModal()">
                                                <div
                                                    class="border px-2 py-4 w-full rounded-md bg-[{{$Pejanggik->color}}]">
                                                    {{$Pejanggik->time}} <br>
                                                    {{$Pejanggik->title}}
                                                </div>
                                            </button>
                                            @endif
                                            <dialog id="Pejanggik29{{$loop->index}}" class="modal">
                                                <div class="modal-box w-11/12 max-w-5xl text-start">
                                                    <div class="flex justify-between mb-3">
                                                        <div class="text-start">
                                                            <h3 class="mb-0">Date: <span class="">
                                                                    {{\Carbon\Carbon::parse($Pejanggik->date)->format('d
                                                                    F
                                                                    Y')}}</span></h3>
                                                            <h3 class="mb-0">Time: <span class="">
                                                                    {{$Pejanggik->time}}</span></h3>
                                                        </div>
                                                        <div>
                                                            <p class="">Room :<span class="">
                                                                    {{$Pejanggik->room}}
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0">Session : <span class="">
                                                            {{$Pejanggik->title}}</span></p>
                                                    <p class="">Moderator : <span class="">
                                                            {{$Pejanggik->moderator}}
                                                        </span></p>
                                                    <div class="overflow-x-auto mt-5">
                                                        <table class="table">
                                                            <!-- head -->
                                                            <thead>
                                                                <tr>
                                                                    <th style="width: 18%">Time</th>
                                                                    <th>Topic</th>
                                                                    <th>Speaker</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($Pejanggik->schedules as $schedule)
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
                                            @foreach ($duasembilan as $rinjani)
                                            @if ($rinjani->room == 'Rinjani Ballroom')
                                            <button class="hover:shadow-lg hover:shadow-perhati-800 block w-full"
                                                onclick="rinjani29{{$loop->index}}.showModal()">
                                                <div
                                                    class="border px-2 py-4 w-full rounded-md bg-[{{$rinjani->color}}]">
                                                    {{$rinjani->time}} <br>
                                                    {{$rinjani->title}}
                                                </div>
                                            </button>
                                            @endif
                                            <dialog id="rinjani29{{$loop->index}}" class="modal">
                                                <div class="modal-box w-11/12 max-w-5xl text-start">
                                                    <div class="flex justify-between mb-3">
                                                        <div class="text-start">
                                                            <h3 class="mb-0">Date: <span class="">
                                                                    {{\Carbon\Carbon::parse($rinjani->date)->format('d F
                                                                    Y')}}</span></h3>
                                                            <h3 class="mb-0">Time: <span class="">
                                                                    {{$rinjani->time}}</span></h3>
                                                        </div>
                                                        <div>
                                                            <p class="">Room :<span class="">
                                                                    {{$rinjani->room}}
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0">Session : <span class="">
                                                            {{$rinjani->title}}</span></p>
                                                    <p class="">Moderator : <span class="">
                                                            {{$rinjani->moderator}}
                                                        </span></p>
                                                    <div class="overflow-x-auto mt-5">
                                                        <table class="table">
                                                            <!-- head -->
                                                            <thead>
                                                                <tr>
                                                                    <th style="width: 18%">Time</th>
                                                                    <th>Topic</th>
                                                                    <th>Speaker</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($rinjani->schedules as $schedule)
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
                                            @foreach ($duasembilan as $air)
                                            @if ($air->room == 'Gili Air')
                                            <button class="hover:shadow-lg hover:shadow-perhati-800 block w-full"
                                                onclick="air29{{$loop->index}}.showModal()">
                                                <div class="border px-2 py-4 w-full rounded-md bg-[{{$air->color}}]">
                                                    {{$air->time}} <br>
                                                    {{$air->title}}
                                                </div>
                                            </button>
                                            @endif
                                            <dialog id="air29{{$loop->index}}" class="modal">
                                                <div class="modal-box w-11/12 max-w-5xl text-start">
                                                    <div class="flex justify-between mb-3">
                                                        <div class="text-start">
                                                            <h3 class="mb-0">Date: <span class="">
                                                                    {{\Carbon\Carbon::parse($air->date)->format('d F
                                                                    Y')}}</span></h3>
                                                            <h3 class="mb-0">Time: <span class="">
                                                                    {{$air->time}}</span></h3>
                                                        </div>
                                                        <div>
                                                            <p class="">Room :<span class="">
                                                                    {{$air->room}}
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0">Session : <span class="">
                                                            {{$air->title}}</span></p>
                                                    <p class="">Moderator : <span class="">
                                                            {{$air->moderator}}
                                                        </span></p>
                                                    <div class="overflow-x-auto mt-5">
                                                        <table class="table">
                                                            <!-- head -->
                                                            <thead>
                                                                <tr>
                                                                    <th style="width: 18%">Time</th>
                                                                    <th>Topic</th>
                                                                    <th>Speaker</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($air->schedules as $schedule)
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
                                            @foreach ($duasembilan as $Sangkareang)
                                            @if ($Sangkareang->room == 'Sangkareang')
                                            <button class="hover:shadow-lg hover:shadow-perhati-800 block w-full"
                                                onclick="Sangkareang29{{$loop->index}}.showModal()">
                                                <div
                                                    class="border px-2 py-4 w-full rounded-md bg-[{{$Sangkareang->color}}]">
                                                    {{$Sangkareang->time}} <br>
                                                    {{$Sangkareang->title}}
                                                </div>
                                            </button>
                                            @endif
                                            <dialog id="Sangkareang29{{$loop->index}}" class="modal">
                                                <div class="modal-box w-11/12 max-w-5xl text-start">
                                                    <div class="flex justify-between mb-3">
                                                        <div class="text-start">
                                                            <h3 class="mb-0">Date: <span class="">
                                                                    {{\Carbon\Carbon::parse($Sangkareang->date)->format('d
                                                                    F
                                                                    Y')}}</span></h3>
                                                            <h3 class="mb-0">Time: <span class="">
                                                                    {{$Sangkareang->time}}</span></h3>
                                                        </div>
                                                        <div>
                                                            <p class="">Room :<span class="">
                                                                    {{$Sangkareang->room}}
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0">Session : <span class="">
                                                            {{$Sangkareang->title}}</span></p>
                                                    <p class="">Moderator : <span class="">
                                                            {{$Sangkareang->moderator}}
                                                        </span></p>
                                                    <div class="overflow-x-auto mt-5">
                                                        <table class="table">
                                                            <!-- head -->
                                                            <thead>
                                                                <tr>
                                                                    <th style="width: 18%">Time</th>
                                                                    <th>Topic</th>
                                                                    <th>Speaker</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($Sangkareang->schedules as $schedule)
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
                                            @foreach ($duasembilan as $melati0)
                                            @if ($melati0->room == 'Melati 1')
                                            <button class="hover:shadow-lg hover:shadow-perhati-800 block w-full"
                                                onclick="melati029{{$loop->index}}.showModal()">
                                                <div
                                                    class="border px-2 py-4 w-full rounded-md bg-[{{$melati0->color}}]">
                                                    {{$melati0->time}} <br>
                                                    {{$melati0->title}}
                                                </div>
                                            </button>
                                            @endif
                                            <dialog id="melati029{{$loop->index}}" class="modal">
                                                <div class="modal-box w-11/12 max-w-5xl text-start">
                                                    <div class="flex justify-between mb-3">
                                                        <div class="text-start">
                                                            <h3 class="mb-0">Date: <span class="">
                                                                    {{\Carbon\Carbon::parse($melati0->date)->format('d F
                                                                    Y')}}</span></h3>
                                                            <h3 class="mb-0">Time: <span class="">
                                                                    {{$melati0->time}}</span></h3>
                                                        </div>
                                                        <div>
                                                            <p class="">Room :<span class="">
                                                                    {{$melati0->room}}
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0">Session : <span class="">
                                                            {{$melati0->title}}</span></p>
                                                    <p class="">Moderator : <span class="">
                                                            {{$melati0->moderator}}
                                                        </span></p>
                                                    <div class="overflow-x-auto mt-5">
                                                        <table class="table">
                                                            <!-- head -->
                                                            <thead>
                                                                <tr>
                                                                    <th style="width: 18%">Time</th>
                                                                    <th>Topic</th>
                                                                    <th>Speaker</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($melati0->schedules as $schedule)
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
                                            @foreach ($duasembilan as $melati2)
                                            @if ($melati2->room == 'Melati 2')
                                            <button class="hover:shadow-lg hover:shadow-perhati-800 block w-full"
                                                onclick="melati229{{$loop->index}}.showModal()">
                                                <div
                                                    class="border px-2 py-4 w-full rounded-md bg-[{{$melati2->color}}]">
                                                    {{$melati2->time}} <br>
                                                    {{$melati2->title}}
                                                </div>
                                            </button>
                                            @endif
                                            <dialog id="melati229{{$loop->index}}" class="modal">
                                                <div class="modal-box w-11/12 max-w-5xl text-start">
                                                    <div class="flex justify-between mb-3">
                                                        <div class="text-start">
                                                            <h3 class="mb-0">Date: <span class="">
                                                                    {{\Carbon\Carbon::parse($melati2->date)->format('d F
                                                                    Y')}}</span></h3>
                                                            <h3 class="mb-0">Time: <span class="">
                                                                    {{$melati2->time}}</span></h3>
                                                        </div>
                                                        <div>
                                                            <p class="">Room :<span class="">
                                                                    {{$melati2->room}}
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0">Session : <span class="">
                                                            {{$melati2->title}}</span></p>
                                                    <p class="">Moderator : <span class="">
                                                            {{$melati2->moderator}}
                                                        </span></p>
                                                    <div class="overflow-x-auto mt-5">
                                                        <table class="table">
                                                            <!-- head -->
                                                            <thead>
                                                                <tr>
                                                                    <th style="width: 18%">Time</th>
                                                                    <th>Topic</th>
                                                                    <th>Speaker</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($melati2->schedules as $schedule)
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
                        class="transition-all duration-300 bg-white p-4 rounded-lg shadow-md border-x-4 border-primary">

                        <div class="overflow-x-auto">
                            <table class="table table-bordered">
                                <thead>
                                    <tr class="text-base font-semibold mb-2 text-primary-800 text-center">
                                        <th>Melati 1</th>
                                        <th>Melati 2</th>
                                        <th>Pejanggik</th>
                                        <th> Mandalika </th>
                                        <th> Rinjani Ballroom </th>
                                        <th> Gili Air </th>
                                        <th> Gili Meno </th>
                                        <th> Gili Trawangan </th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="text-center text-xs">
                                        <td class="align-top">
                                            @foreach ($tigapuluh as $melati)
                                            @if ($melati->room == 'Melati 1')
                                            <button class="hover:shadow-lg hover:shadow-perhati-800 block w-full"
                                                onclick="melati030{{$loop->index}}.showModal()">
                                                <div class="border px-0 py-4 w-full rounded-md bg-[{{$melati->color}}]">
                                                    {{$melati->time}} <br>
                                                    {{$melati->title}}
                                                </div>
                                            </button>
                                            @endif
                                            <dialog id="melati030{{$loop->index}}" class="modal">
                                                <div class="modal-box w-11/12 max-w-5xl text-start">
                                                    <div class="flex justify-between mb-3">
                                                        <div class="text-start">
                                                            <h3 class="mb-0">Date: <span class="">
                                                                    {{\Carbon\Carbon::parse($melati->date)->format('d F
                                                                    Y')}}</span></h3>
                                                            <h3 class="mb-0">Time: <span class="">
                                                                    {{$melati->time}}</span></h3>
                                                        </div>
                                                        <div>
                                                            <p class="">Room :<span class="">
                                                                    {{$melati->room}}
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0">Session : <span class="">
                                                            {{$melati->title}}</span></p>
                                                    <p class="">Moderator : <span class="">
                                                            {{$melati->moderator}}
                                                        </span></p>
                                                    <div class="overflow-x-auto mt-5">
                                                        <table class="table">
                                                            <!-- head -->
                                                            <thead>
                                                                <tr>
                                                                    <th style="width: 18%">Time</th>
                                                                    <th>Topic</th>
                                                                    <th>Speaker</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($melati->schedules as $schedule)
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
                                            @foreach ($tigapuluh as $melati_2)
                                            @if ($melati_2->room == 'Melati 2')
                                            <button class="hover:shadow-lg hover:shadow-perhati-800 block w-full"
                                                onclick="melati230{{$loop->index}}.showModal()">
                                                <div class="border px-0 py-4 w-full rounded-md bg-[{{$melati->color}}]">
                                                    {{$melati_2->time}} <br>
                                                    {{$melati_2->title}}
                                                </div>
                                            </button>
                                            @endif
                                            <dialog id="melati230{{$loop->index}}" class="modal">
                                                <div class="modal-box w-11/12 max-w-5xl text-start">
                                                    <div class="flex justify-between mb-3">
                                                        <div class="text-start">
                                                            <h3 class="mb-0">Date: <span class="">
                                                                    {{\Carbon\Carbon::parse($melati_2->date)->format('d
                                                                    F
                                                                    Y')}}</span></h3>
                                                            <h3 class="mb-0">Time: <span class="">
                                                                    {{$melati_2->time}}</span></h3>
                                                        </div>
                                                        <div>
                                                            <p class="">Room :<span class="">
                                                                    {{$melati_2->room}}
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0">Session : <span class="">
                                                            {{$melati_2->title}}</span></p>
                                                    <p class="">Moderator : <span class="">
                                                            {{$melati_2->moderator}}
                                                        </span></p>
                                                    <div class="overflow-x-auto mt-5">
                                                        <table class="table">
                                                            <!-- head -->
                                                            <thead>
                                                                <tr>
                                                                    <th style="width: 18%">Time</th>
                                                                    <th>Topic</th>
                                                                    <th>Speaker</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($melati_2->schedules as $schedule)
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
                                            @foreach ($tigapuluh as $pejanggik)
                                            @if ($pejanggik->room == 'Pejanggik')
                                            <button class="hover:shadow-lg hover:shadow-perhati-800 block w-full"
                                                onclick="pejanggik30{{$loop->index}}.showModal()">
                                                <div
                                                    class="border px-0 py-4 w-full rounded-md bg-[{{$pejanggik->color}}]">
                                                    {{$pejanggik->time}} <br>
                                                    {{$pejanggik->title}}
                                                </div>
                                            </button>
                                            @endif
                                            <dialog id="pejanggik30{{$loop->index}}" class="modal">
                                                <div class="modal-box w-11/12 max-w-5xl text-start">
                                                    <div class="flex justify-between mb-3">
                                                        <div class="text-start">
                                                            <h3 class="mb-0">Date: <span class="">
                                                                    {{\Carbon\Carbon::parse($pejanggik->date)->format('d
                                                                    F
                                                                    Y')}}</span></h3>
                                                            <h3 class="mb-0">Time: <span class="">
                                                                    {{$pejanggik->time}}</span></h3>
                                                        </div>
                                                        <div>
                                                            <p class="">Room :<span class="">
                                                                    {{$pejanggik->room}}
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0">Session : <span class="">
                                                            {{$pejanggik->title}}</span></p>
                                                    <p class="">Moderator : <span class="">
                                                            {{$pejanggik->moderator}}
                                                        </span></p>
                                                    <div class="overflow-x-auto mt-5">
                                                        <table class="table">
                                                            <!-- head -->
                                                            <thead>
                                                                <tr>
                                                                    <th style="width: 18%">Time</th>
                                                                    <th>Topic</th>
                                                                    <th>Speaker</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($pejanggik->schedules as $schedule)
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
                                            @foreach ($tigapuluh as $mandalika)
                                            @if ($mandalika->room == 'Mandalika')
                                            <button class="hover:shadow-lg hover:shadow-perhati-800 block w-full"
                                                onclick="mandalika30{{$loop->index}}.showModal()">
                                                <div
                                                    class="border px-0 py-4 w-full rounded-md bg-[{{$mandalika->color}}]">
                                                    {{$mandalika->time}} <br>
                                                    {{$mandalika->title}}
                                                </div>
                                            </button>
                                            @endif
                                            <dialog id="mandalika30{{$loop->index}}" class="modal">
                                                <div class="modal-box w-11/12 max-w-5xl text-start">
                                                    <div class="flex justify-between mb-3">
                                                        <div class="text-start">
                                                            <h3 class="mb-0">Date: <span class="">
                                                                    {{\Carbon\Carbon::parse($mandalika->date)->format('d
                                                                    F
                                                                    Y')}}</span></h3>
                                                            <h3 class="mb-0">Time: <span class="">
                                                                    {{$mandalika->time}}</span></h3>
                                                        </div>
                                                        <div>
                                                            <p class="">Room :<span class="">
                                                                    {{$mandalika->room}}
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0">Session : <span class="">
                                                            {{$mandalika->title}}</span></p>
                                                    <p class="">Moderator : <span class="">
                                                            {{$mandalika->moderator}}
                                                        </span></p>
                                                    <div class="overflow-x-auto mt-5">
                                                        <table class="table">
                                                            <!-- head -->
                                                            <thead>
                                                                <tr>
                                                                    <th style="width: 18%">Time</th>
                                                                    <th>Topic</th>
                                                                    <th>Speaker</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($mandalika->schedules as $schedule)
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
                                            @foreach ($tigapuluh as $rinjani)
                                            @if ($rinjani->room == 'Rinjani Ballroom')
                                            <button class="hover:shadow-lg hover:shadow-perhati-800 block w-full"
                                                onclick="rinjani30{{$loop->index}}.showModal()">
                                                <div
                                                    class="border px-0 py-4 w-full rounded-md bg-[{{$rinjani->color}}]">
                                                    {{$rinjani->time}} <br>
                                                    {{$rinjani->title}}
                                                </div>
                                            </button>
                                            @endif
                                            <dialog id="rinjani30{{$loop->index}}" class="modal">
                                                <div class="modal-box w-11/12 max-w-5xl text-start">
                                                    <div class="flex justify-between mb-3">
                                                        <div class="text-start">
                                                            <h3 class="mb-0">Date: <span class="">
                                                                    {{\Carbon\Carbon::parse($rinjani->date)->format('d F
                                                                    Y')}}</span></h3>
                                                            <h3 class="mb-0">Time: <span class="">
                                                                    {{$rinjani->time}}</span></h3>
                                                        </div>
                                                        <div>
                                                            <p class="">Room :<span class="">
                                                                    {{$rinjani->room}}
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0">Session : <span class="">
                                                            {{$rinjani->title}}</span></p>
                                                    <p class="">Moderator : <span class="">
                                                            {{$rinjani->moderator}}
                                                        </span></p>
                                                    <div class="overflow-x-auto mt-5">
                                                        <table class="table">
                                                            <!-- head -->
                                                            <thead>
                                                                <tr>
                                                                    <th style="width: 18%">Time</th>
                                                                    <th>Topic</th>
                                                                    <th>Speaker</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($rinjani->schedules as $schedule)
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
                                            @foreach ($tigapuluh as $air)
                                            @if ($air->room == 'Gili Air')
                                            <button class="hover:shadow-lg hover:shadow-perhati-800 block w-full"
                                                onclick="air30{{$loop->index}}.showModal()">
                                                <div class="border px-0 py-4 w-full rounded-md bg-[{{$air->color}}]">
                                                    {{$air->time}} <br>
                                                    {{$air->title}}
                                                </div>
                                            </button>
                                            @endif
                                            <dialog id="air30{{$loop->index}}" class="modal">
                                                <div class="modal-box w-11/12 max-w-5xl text-start">
                                                    <div class="flex justify-between mb-3">
                                                        <div class="text-start">
                                                            <h3 class="mb-0">Date: <span class="">
                                                                    {{\Carbon\Carbon::parse($air->date)->format('d F
                                                                    Y')}}</span></h3>
                                                            <h3 class="mb-0">Time: <span class="">
                                                                    {{$air->time}}</span></h3>
                                                        </div>
                                                        <div>
                                                            <p class="">Room :<span class="">
                                                                    {{$air->room}}
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0">Session : <span class="">
                                                            {{$air->title}}</span></p>
                                                    <p class="">Moderator : <span class="">
                                                            {{$air->moderator}}
                                                        </span></p>
                                                    <div class="overflow-x-auto mt-5">
                                                        <table class="table">
                                                            <!-- head -->
                                                            <thead>
                                                                <tr>
                                                                    <th style="width: 18%">Time</th>
                                                                    <th>Topic</th>
                                                                    <th>Speaker</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($air->schedules as $schedule)
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
                                            @foreach ($tigapuluh as $meno)
                                            @if ($meno->room == 'Gili Meno')
                                            <button class="hover:shadow-lg hover:shadow-perhati-800 block w-full"
                                                onclick="meno30{{$loop->index}}.showModal()">
                                                <div class="border px-0 py-4 w-full rounded-md bg-[{{$meno->color}}]">
                                                    {{$meno->time}} <br>
                                                    {{$meno->title}}
                                                </div>
                                            </button>
                                            @endif
                                            <dialog id="meno30{{$loop->index}}" class="modal">
                                                <div class="modal-box w-11/12 max-w-5xl text-start">
                                                    <div class="flex justify-between mb-3">
                                                        <div class="text-start">
                                                            <h3 class="mb-0">Date: <span class="">
                                                                    {{\Carbon\Carbon::parse($meno->date)->format('d F
                                                                    Y')}}</span></h3>
                                                            <h3 class="mb-0">Time: <span class="">
                                                                    {{$meno->time}}</span></h3>
                                                        </div>
                                                        <div>
                                                            <p class="">Room :<span class="">
                                                                    {{$meno->room}}
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0">Session : <span class="">
                                                            {{$meno->title}}</span></p>
                                                    <p class="">Moderator : <span class="">
                                                            {{$meno->moderator}}
                                                        </span></p>
                                                    <div class="overflow-x-auto mt-5">
                                                        <table class="table">
                                                            <!-- head -->
                                                            <thead>
                                                                <tr>
                                                                    <th style="width: 18%">Time</th>
                                                                    <th>Topic</th>
                                                                    <th>Speaker</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($meno->schedules as $schedule)
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
                                            @foreach ($tigapuluh as $trawangan)
                                            @if ($trawangan->room == 'Gili Trawangan')
                                            <button class="hover:shadow-lg hover:shadow-perhati-800 block w-full"
                                                onclick="trawangan30{{$loop->index}}.showModal()">
                                                <div
                                                    class="border px-0 py-4 w-full rounded-md bg-[{{$trawangan->color}}]">
                                                    {{$trawangan->time}} <br>
                                                    {{$trawangan->title}}
                                                </div>
                                            </button>
                                            @endif

                                            <dialog id="trawangan30{{$loop->index}}" class="modal">
                                                <div class="modal-box w-11/12 max-w-5xl text-start">
                                                    <div class="flex justify-between mb-3">
                                                        <div class="text-start">
                                                            <h3 class="mb-0">Date: <span class="">
                                                                    {{\Carbon\Carbon::parse($trawangan->date)->format('d
                                                                    F
                                                                    Y')}}</span></h3>
                                                            <h3 class="mb-0">Time: <span class="">
                                                                    {{$trawangan->time}}</span></h3>
                                                        </div>
                                                        <div>
                                                            <p class="">Room :<span class="">
                                                                    {{$trawangan->room}}
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0">Session : <span class="">
                                                            {{$trawangan->title}}</span></p>
                                                    <p class="">Moderator : <span class="">
                                                            {{$trawangan->moderator}}
                                                        </span></p>
                                                    <div class="overflow-x-auto mt-5">
                                                        <table class="table">
                                                            <!-- head -->
                                                            <thead>
                                                                <tr>
                                                                    <th style="width: 18%">Time</th>
                                                                    <th>Topic</th>
                                                                    <th>Speaker</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($trawangan->schedules as $schedule)
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
                        class="transition-all duration-300 bg-white p-4 rounded-lg shadow-md border-x-4 border-primary">

                        <div class="overflow-x-auto">
                            <table class="table table-bordered">
                                <thead>
                                    <tr class="text-base font-semibold mb-2 text-primary-800 text-center">
                                        <th>Melati 1</th>
                                        <th>Melati 2</th>
                                        <th>Pejanggik</th>
                                        <th> Mandalika </th>
                                        <th> Rinjani Ballroom </th>
                                        <th> Gili Air </th>
                                        <th> Gili Meno </th>
                                        <th> Gili Trawangan </th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="text-center text-xs">
                                        <td class="align-top">
                                            @foreach ($tigapuluhsatu as $melati)
                                            @if ($melati->room == 'Melati 1')
                                            <button class="hover:shadow-lg hover:shadow-perhati-800 block w-full"
                                                onclick="melati131{{$loop->index}}.showModal()">
                                                <div class="border px-0 py-4 w-full rounded-md bg-[{{$melati->color}}]">
                                                    {{$melati->time}} <br>
                                                    {{$melati->title}}
                                                </div>
                                            </button>
                                            @endif
                                            <dialog id="melati131{{$loop->index}}" class="modal">
                                                <div class="modal-box w-11/12 max-w-5xl text-start">
                                                    <div class="flex justify-between mb-3">
                                                        <div class="text-start">
                                                            <h3 class="mb-0">Date: <span class="">
                                                                    {{\Carbon\Carbon::parse($melati->date)->format('d F
                                                                    Y')}}</span></h3>
                                                            <h3 class="mb-0">Time: <span class="">
                                                                    {{$melati->time}}</span></h3>
                                                        </div>
                                                        <div>
                                                            <p class="">Room :<span class="">
                                                                    {{$melati->room}}
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0">Session : <span class="">
                                                            {{$melati->title}}</span></p>
                                                    <p class="">Moderator : <span class="">
                                                            {{$melati->moderator}}
                                                        </span></p>
                                                    <div class="overflow-x-auto mt-5">
                                                        <table class="table">
                                                            <!-- head -->
                                                            <thead>
                                                                <tr>
                                                                    <th style="width: 18%">Time</th>
                                                                    <th>Topic</th>
                                                                    <th>Speaker</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($melati->schedules as $schedule)
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
                                            @foreach ($tigapuluhsatu as $melati_3)
                                            @if ($melati_3->room == 'Melati 2')
                                            <button class="hover:shadow-lg hover:shadow-perhati-800 block w-full"
                                                onclick="melati_331{{$loop->index}}.showModal()">
                                                <div
                                                    class="border px-0 py-4 w-full rounded-md bg-[{{$melati_3->color}}]">
                                                    {{$melati_3->time}} <br>
                                                    {{$melati_3->title}}
                                                </div>
                                            </button>
                                            @endif
                                            <dialog id="melati_331{{$loop->index}}" class="modal">
                                                <div class="modal-box w-11/12 max-w-5xl text-start">
                                                    <div class="flex justify-between mb-3">
                                                        <div class="text-start">
                                                            <h3 class="mb-0">Date: <span class="">
                                                                    {{\Carbon\Carbon::parse($melati_3->date)->format('d
                                                                    F
                                                                    Y')}}</span></h3>
                                                            <h3 class="mb-0">Time: <span class="">
                                                                    {{$melati_3->time}}</span></h3>
                                                        </div>
                                                        <div>
                                                            <p class="">Room :<span class="">
                                                                    {{$melati_3->room}}
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0">Session : <span class="">
                                                            {{$melati_3->title}}</span></p>
                                                    <p class="">Moderator : <span class="">
                                                            {{$melati_3->moderator}}
                                                        </span></p>
                                                    <div class="overflow-x-auto mt-5">
                                                        <table class="table">
                                                            <!-- head -->
                                                            <thead>
                                                                <tr>
                                                                    <th style="width: 18%">Time</th>
                                                                    <th>Topic</th>
                                                                    <th>Speaker</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($melati_3->schedules as $schedule)
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
                                            @foreach ($tigapuluhsatu as $pejanggik)
                                            @if ($pejanggik->room == 'Pejanggik')
                                            <button class="hover:shadow-lg hover:shadow-perhati-800 block w-full"
                                                onclick="pejanggik31{{$loop->index}}.showModal()">
                                                <div
                                                    class="border px-0 py-4 w-full rounded-md bg-[{{$pejanggik->color}}]">
                                                    {{$pejanggik->time}} <br>
                                                    {{$pejanggik->title}}
                                                </div>
                                            </button>
                                            @endif
                                            <dialog id="pejanggik31{{$loop->index}}" class="modal">
                                                <div class="modal-box w-11/12 max-w-5xl text-start">
                                                    <div class="flex justify-between mb-3">
                                                        <div class="text-start">
                                                            <h3 class="mb-0">Date: <span class="">
                                                                    {{\Carbon\Carbon::parse($pejanggik->date)->format('d
                                                                    F
                                                                    Y')}}</span></h3>
                                                            <h3 class="mb-0">Time: <span class="">
                                                                    {{$pejanggik->time}}</span></h3>
                                                        </div>
                                                        <div>
                                                            <p class="">Room :<span class="">
                                                                    {{$pejanggik->room}}
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0">Session : <span class="">
                                                            {{$pejanggik->title}}</span></p>
                                                    <p class="">Moderator : <span class="">
                                                            {{$pejanggik->moderator}}
                                                        </span></p>
                                                    <div class="overflow-x-auto mt-5">
                                                        <table class="table">
                                                            <!-- head -->
                                                            <thead>
                                                                <tr>
                                                                    <th style="width: 18%">Time</th>
                                                                    <th>Topic</th>
                                                                    <th>Speaker</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($pejanggik->schedules as $schedule)
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
                                            @foreach ($tigapuluhsatu as $mandalika)
                                            @if ($mandalika->room == 'Mandalika')
                                            <button class="hover:shadow-lg hover:shadow-perhati-800 block w-full"
                                                onclick="mandalika31{{$loop->index}}.showModal()">
                                                <div
                                                    class="border px-0 py-4 w-full rounded-md bg-[{{$mandalika->color}}]">
                                                    {{$mandalika->time}} <br>
                                                    {{$mandalika->title}}
                                                </div>
                                            </button>
                                            @endif
                                            <dialog id="mandalika31{{$loop->index}}" class="modal">
                                                <div class="modal-box w-11/12 max-w-5xl text-start">
                                                    <div class="flex justify-between mb-3">
                                                        <div class="text-start">
                                                            <h3 class="mb-0">Date: <span class="">
                                                                    {{\Carbon\Carbon::parse($mandalika->date)->format('d
                                                                    F
                                                                    Y')}}</span></h3>
                                                            <h3 class="mb-0">Time: <span class="">
                                                                    {{$mandalika->time}}</span></h3>
                                                        </div>
                                                        <div>
                                                            <p class="">Room :<span class="">
                                                                    {{$mandalika->room}}
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0">Session : <span class="">
                                                            {{$mandalika->title}}</span></p>
                                                    <p class="">Moderator : <span class="">
                                                            {{$mandalika->moderator}}
                                                        </span></p>
                                                    <div class="overflow-x-auto mt-5">
                                                        <table class="table">
                                                            <!-- head -->
                                                            <thead>
                                                                <tr>
                                                                    <th style="width: 18%">Time</th>
                                                                    <th>Topic</th>
                                                                    <th>Speaker</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($mandalika->schedules as $schedule)
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
                                            @foreach ($tigapuluhsatu as $rinjani)
                                            @if ($rinjani->room == 'Rinjani Ballroom')
                                            <button class="hover:shadow-lg hover:shadow-perhati-800 block w-full"
                                                onclick="rinjani31{{$loop->index}}.showModal()">
                                                <div
                                                    class="border px-0 py-4 w-full rounded-md bg-[{{$rinjani->color}}]">
                                                    {{$rinjani->time}} <br>
                                                    {{$rinjani->title}}
                                                </div>
                                            </button>
                                            @endif
                                            <dialog id="rinjani31{{$loop->index}}" class="modal">
                                                <div class="modal-box w-11/12 max-w-5xl text-start">
                                                    <div class="flex justify-between mb-3">
                                                        <div class="text-start">
                                                            <h3 class="mb-0">Date: <span class="">
                                                                    {{\Carbon\Carbon::parse($rinjani->date)->format('d F
                                                                    Y')}}</span></h3>
                                                            <h3 class="mb-0">Time: <span class="">
                                                                    {{$rinjani->time}}</span></h3>
                                                        </div>
                                                        <div>
                                                            <p class="">Room :<span class="">
                                                                    {{$rinjani->room}}
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0">Session : <span class="">
                                                            {{$rinjani->title}}</span></p>
                                                    <p class="">Moderator : <span class="">
                                                            {{$rinjani->moderator}}
                                                        </span></p>
                                                    <div class="overflow-x-auto mt-5">
                                                        <table class="table">
                                                            <!-- head -->
                                                            <thead>
                                                                <tr>
                                                                    <th style="width: 18%">Time</th>
                                                                    <th>Topic</th>
                                                                    <th>Speaker</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($rinjani->schedules as $schedule)
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
                                            @foreach ($tigapuluhsatu as $air)
                                            @if ($air->room == 'Gili Air')
                                            <button class="hover:shadow-lg hover:shadow-perhati-800 block w-full"
                                                onclick="air31{{$loop->index}}.showModal()">
                                                <div class="border px-0 py-4 w-full rounded-md bg-[{{$air->color}}]">
                                                    {{$air->time}} <br>
                                                    {{$air->title}}
                                                </div>
                                            </button>
                                            @endif
                                            <dialog id="air31{{$loop->index}}" class="modal">
                                                <div class="modal-box w-11/12 max-w-5xl text-start">
                                                    <div class="flex justify-between mb-3">
                                                        <div class="text-start">
                                                            <h3 class="mb-0">Date: <span class="">
                                                                    {{\Carbon\Carbon::parse($air->date)->format('d F
                                                                    Y')}}</span></h3>
                                                            <h3 class="mb-0">Time: <span class="">
                                                                    {{$air->time}}</span></h3>
                                                        </div>
                                                        <div>
                                                            <p class="">Room :<span class="">
                                                                    {{$air->room}}
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0">Session : <span class="">
                                                            {{$air->title}}</span></p>
                                                    <p class="">Moderator : <span class="">
                                                            {{$air->moderator}}
                                                        </span></p>
                                                    <div class="overflow-x-auto mt-5">
                                                        <table class="table">
                                                            <!-- head -->
                                                            <thead>
                                                                <tr>
                                                                    <th style="width: 18%">Time</th>
                                                                    <th>Topic</th>
                                                                    <th>Speaker</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($air->schedules as $schedule)
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
                                            @foreach ($tigapuluhsatu as $meno)
                                            @if ($meno->room == 'Gili Meno')
                                            <button class="hover:shadow-lg hover:shadow-perhati-800 block w-full"
                                                onclick="meno31{{$loop->index}}.showModal()">
                                                <div class="border px-0 py-4 w-full rounded-md bg-[{{$meno->color}}]">
                                                    {{$meno->time}} <br>
                                                    {{$meno->title}}
                                                </div>
                                            </button>
                                            @endif
                                            <dialog id="meno31{{$loop->index}}" class="modal">
                                                <div class="modal-box w-11/12 max-w-5xl text-start">
                                                    <div class="flex justify-between mb-3">
                                                        <div class="text-start">
                                                            <h3 class="mb-0">Date: <span class="">
                                                                    {{\Carbon\Carbon::parse($meno->date)->format('d F
                                                                    Y')}}</span></h3>
                                                            <h3 class="mb-0">Time: <span class="">
                                                                    {{$meno->time}}</span></h3>
                                                        </div>
                                                        <div>
                                                            <p class="">Room :<span class="">
                                                                    {{$meno->room}}
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0">Session : <span class="">
                                                            {{$meno->title}}</span></p>
                                                    <p class="">Moderator : <span class="">
                                                            {{$meno->moderator}}
                                                        </span></p>
                                                    <div class="overflow-x-auto mt-5">
                                                        <table class="table">
                                                            <!-- head -->
                                                            <thead>
                                                                <tr>
                                                                    <th style="width: 18%">Time</th>
                                                                    <th>Topic</th>
                                                                    <th>Speaker</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($meno->schedules as $schedule)
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
                                            @foreach ($tigapuluhsatu as $trawangan)
                                            @if ($trawangan->room == 'Gili Trawangan')
                                            <button class="hover:shadow-lg hover:shadow-perhati-800 block w-full"
                                                onclick="trawangan31{{$loop->index}}.showModal()">
                                                <div
                                                    class="border px-0 py-4 w-full rounded-md bg-[{{$trawangan->color}}]">
                                                    {{$trawangan->time}} <br>
                                                    {{$trawangan->title}}
                                                </div>
                                            </button>
                                            @endif
                                            <dialog id="trawangan31{{$loop->index}}" class="modal">
                                                <div class="modal-box w-11/12 max-w-5xl text-start">
                                                    <div class="flex justify-between mb-3">
                                                        <div class="text-start">
                                                            <h3 class="mb-0">Date: <span class="">
                                                                    {{\Carbon\Carbon::parse($trawangan->date)->format('d
                                                                    F
                                                                    Y')}}</span></h3>
                                                            <h3 class="mb-0">Time: <span class="">
                                                                    {{$trawangan->time}}</span></h3>
                                                        </div>
                                                        <div>
                                                            <p class="">Room :<span class="">
                                                                    {{$trawangan->room}}
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0">Session : <span class="">
                                                            {{$trawangan->title}}</span></p>
                                                    <p class="">Moderator : <span class="">
                                                            {{$trawangan->moderator}}
                                                        </span></p>
                                                    <div class="overflow-x-auto mt-5">
                                                        <table class="table">
                                                            <!-- head -->
                                                            <thead>
                                                                <tr>
                                                                    <th style="width: 18%">Time</th>
                                                                    <th>Topic</th>
                                                                    <th>Speaker</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($trawangan->schedules as $schedule)
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
                        class="transition-all duration-300 bg-white p-4 rounded-lg shadow-md border-x-4 border-primary">

                        <div class="overflow-x-auto">
                            <table class="table table-bordered">
                                <thead>
                                    <tr class="text-base font-semibold mb-2 text-primary-800 text-center">
                                        <th>Melati 1</th>
                                        <th>Melati 2</th>
                                        <th>Pejanggik</th>
                                        <th> Mandalika </th>
                                        <th> Rinjani Ballroom </th>
                                        <th> Gili Air </th>
                                        <th> Gili Meno </th>
                                        <th> Gili Trawangan </th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="text-center text-xs">
                                        <td class="align-top">
                                            @foreach ($satu as $melati)
                                            @if ($melati->room == 'Melati 1')
                                            <button class="hover:shadow-lg hover:shadow-perhati-800 block w-full"
                                                onclick="melati1_1{{$loop->index}}.showModal()">
                                                <div class="border px-0 py-4 w-full rounded-md bg-[{{$melati->color}}]">
                                                    {{$melati->time}} <br>
                                                    {{$melati->title}}
                                                </div>
                                            </button>
                                            @endif
                                            <dialog id="melati1_1{{$loop->index}}" class="modal">
                                                <div class="modal-box w-11/12 max-w-5xl text-start">
                                                    <div class="flex justify-between mb-3">
                                                        <div class="text-start">
                                                            <h3 class="mb-0">Date: <span class="">
                                                                    {{\Carbon\Carbon::parse($melati->date)->format('d F
                                                                    Y')}}</span></h3>
                                                            <h3 class="mb-0">Time: <span class="">
                                                                    {{$melati->time}}</span></h3>
                                                        </div>
                                                        <div>
                                                            <p class="">Room :<span class="">
                                                                    {{$melati->room}}
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0">Session : <span class="">
                                                            {{$melati->title}}</span></p>
                                                    <p class="">Moderator : <span class="">
                                                            {{$melati->moderator}}
                                                        </span></p>
                                                    <div class="overflow-x-auto mt-5">
                                                        <table class="table">
                                                            <!-- head -->
                                                            <thead>
                                                                <tr>
                                                                    <th style="width: 18%">Time</th>
                                                                    <th>Topic</th>
                                                                    <th>Speaker</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($melati->schedules as $schedule)
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
                                            @foreach ($satu as $melati_4)
                                            @if ($melati_4->room == 'Melati 2')
                                            <button class="hover:shadow-lg hover:shadow-perhati-800 block w-full"
                                                onclick="melati4_1{{$loop->index}}.showModal()">
                                                <div
                                                    class="border px-0 py-4 w-full rounded-md bg-[{{$melati_4->color}}]">
                                                    {{$melati_4->time}} <br>
                                                    {{$melati_4->title}}
                                                </div>
                                            </button>
                                            @endif
                                            <dialog id="melati4_1{{$loop->index}}" class="modal">
                                                <div class="modal-box w-11/12 max-w-5xl text-start">
                                                    <div class="flex justify-between mb-3">
                                                        <div class="text-start">
                                                            <h3 class="mb-0">Date: <span class="">
                                                                    {{\Carbon\Carbon::parse($melati_4->date)->format('d
                                                                    F
                                                                    Y')}}</span></h3>
                                                            <h3 class="mb-0">Time: <span class="">
                                                                    {{$melati_4->time}}</span></h3>
                                                        </div>
                                                        <div>
                                                            <p class="">Room :<span class="">
                                                                    {{$melati_4->room}}
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0">Session : <span class="">
                                                            {{$melati_4->title}}</span></p>
                                                    <p class="">Moderator : <span class="">
                                                            {{$melati_4->moderator}}
                                                        </span></p>
                                                    <div class="overflow-x-auto mt-5">
                                                        <table class="table">
                                                            <!-- head -->
                                                            <thead>
                                                                <tr>
                                                                    <th style="width: 18%">Time</th>
                                                                    <th>Topic</th>
                                                                    <th>Speaker</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($melati_4->schedules as $schedule)
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
                                            @foreach ($satu as $pejanggik)
                                            @if ($pejanggik->room == 'Pejanggik')
                                            <button class="hover:shadow-lg hover:shadow-perhati-800 block w-full"
                                                onclick="pejanggik1{{$loop->index}}.showModal()">
                                                <div
                                                    class="border px-0 py-4 w-full rounded-md bg-[{{$pejanggik->color}}]">
                                                    {{$pejanggik->time}} <br>
                                                    {{$pejanggik->title}}
                                                </div>
                                            </button>
                                            @endif
                                            <dialog id="pejanggik1{{$loop->index}}" class="modal">
                                                <div class="modal-box w-11/12 max-w-5xl text-start">
                                                    <div class="flex justify-between mb-3">
                                                        <div class="text-start">
                                                            <h3 class="mb-0">Date: <span class="">
                                                                    {{\Carbon\Carbon::parse($pejanggik->date)->format('d
                                                                    F
                                                                    Y')}}</span></h3>
                                                            <h3 class="mb-0">Time: <span class="">
                                                                    {{$pejanggik->time}}</span></h3>
                                                        </div>
                                                        <div>
                                                            <p class="">Room :<span class="">
                                                                    {{$pejanggik->room}}
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0">Session : <span class="">
                                                            {{$pejanggik->title}}</span></p>
                                                    <p class="">Moderator : <span class="">
                                                            {{$pejanggik->moderator}}
                                                        </span></p>
                                                    <div class="overflow-x-auto mt-5">
                                                        <table class="table">
                                                            <!-- head -->
                                                            <thead>
                                                                <tr>
                                                                    <th style="width: 18%">Time</th>
                                                                    <th>Topic</th>
                                                                    <th>Speaker</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($pejanggik->schedules as $schedule)
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
                                            @foreach ($satu as $mandalika)
                                            @if ($mandalika->room == 'Mandalika')
                                            <button class="hover:shadow-lg hover:shadow-perhati-800 block w-full"
                                                onclick="mandalika1{{$loop->index}}.showModal()">
                                                <div
                                                    class="border px-0 py-4 w-full rounded-md bg-[{{$mandalika->color}}]">
                                                    {{$mandalika->time}} <br>
                                                    {{$mandalika->title}}
                                                </div>
                                            </button>
                                            @endif
                                            <dialog id="mandalika1{{$loop->index}}" class="modal">
                                                <div class="modal-box w-11/12 max-w-5xl text-start">
                                                    <div class="flex justify-between mb-3">
                                                        <div class="text-start">
                                                            <h3 class="mb-0">Date: <span class="">
                                                                    {{\Carbon\Carbon::parse($mandalika->date)->format('d
                                                                    F
                                                                    Y')}}</span></h3>
                                                            <h3 class="mb-0">Time: <span class="">
                                                                    {{$mandalika->time}}</span></h3>
                                                        </div>
                                                        <div>
                                                            <p class="">Room :<span class="">
                                                                    {{$mandalika->room}}
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0">Session : <span class="">
                                                            {{$mandalika->title}}</span></p>
                                                    <p class="">Moderator : <span class="">
                                                            {{$mandalika->moderator}}
                                                        </span></p>
                                                    <div class="overflow-x-auto mt-5">
                                                        <table class="table">
                                                            <!-- head -->
                                                            <thead>
                                                                <tr>
                                                                    <th style="width: 18%">Time</th>
                                                                    <th>Topic</th>
                                                                    <th>Speaker</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($mandalika->schedules as $schedule)
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
                                            @foreach ($satu as $rinjani)
                                            @if ($rinjani->room == 'Rinjani Ballroom')
                                            <button class="hover:shadow-lg hover:shadow-perhati-800 block w-full"
                                                onclick="rinjani1{{$loop->index}}.showModal()">
                                                <div
                                                    class="border px-0 py-4 w-full rounded-md bg-[{{$rinjani->color}}]">
                                                    {{$rinjani->time}} <br>
                                                    {{$rinjani->title}}
                                                </div>
                                            </button>
                                            @endif
                                            <dialog id="rinjani1{{$loop->index}}" class="modal">
                                                <div class="modal-box w-11/12 max-w-5xl text-start">
                                                    <div class="flex justify-between mb-3">
                                                        <div class="text-start">
                                                            <h3 class="mb-0">Date: <span class="">
                                                                    {{\Carbon\Carbon::parse($rinjani->date)->format('d F
                                                                    Y')}}</span></h3>
                                                            <h3 class="mb-0">Time: <span class="">
                                                                    {{$rinjani->time}}</span></h3>
                                                        </div>
                                                        <div>
                                                            <p class="">Room :<span class="">
                                                                    {{$rinjani->room}}
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0">Session : <span class="">
                                                            {{$rinjani->title}}</span></p>
                                                    <p class="">Moderator : <span class="">
                                                            {{$rinjani->moderator}}
                                                        </span></p>
                                                    <div class="overflow-x-auto mt-5">
                                                        <table class="table">
                                                            <!-- head -->
                                                            <thead>
                                                                <tr>
                                                                    <th style="width: 18%">Time</th>
                                                                    <th>Topic</th>
                                                                    <th>Speaker</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($rinjani->schedules as $schedule)
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
                                            @foreach ($satu as $air)
                                            @if ($air->room == 'Gili Air')
                                            <button class="hover:shadow-lg hover:shadow-perhati-800 block w-full"
                                                onclick="air1{{$loop->index}}.showModal()">
                                                <div class="border px-0 py-4 w-full rounded-md bg-[{{$air->color}}]">
                                                    {{$air->time}} <br>
                                                    {{$air->title}}
                                                </div>
                                            </button>
                                            @endif
                                            <dialog id="air1{{$loop->index}}" class="modal">
                                                <div class="modal-box w-11/12 max-w-5xl text-start">
                                                    <div class="flex justify-between mb-3">
                                                        <div class="text-start">
                                                            <h3 class="mb-0">Date: <span class="">
                                                                    {{\Carbon\Carbon::parse($air->date)->format('d F
                                                                    Y')}}</span></h3>
                                                            <h3 class="mb-0">Time: <span class="">
                                                                    {{$air->time}}</span></h3>
                                                        </div>
                                                        <div>
                                                            <p class="">Room :<span class="">
                                                                    {{$air->room}}
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0">Session : <span class="">
                                                            {{$air->title}}</span></p>
                                                    <p class="">Moderator : <span class="">
                                                            {{$air->moderator}}
                                                        </span></p>
                                                    <div class="overflow-x-auto mt-5">
                                                        <table class="table">
                                                            <!-- head -->
                                                            <thead>
                                                                <tr>
                                                                    <th style="width: 18%">Time</th>
                                                                    <th>Topic</th>
                                                                    <th>Speaker</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($air->schedules as $schedule)
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
                                            @foreach ($satu as $meno)
                                            @if ($meno->room == 'Gili Meno')
                                            <button class="hover:shadow-lg hover:shadow-perhati-800 block w-full"
                                                onclick="meno1{{$loop->index}}.showModal()">
                                                <div class="border px-0 py-4 w-full rounded-md bg-[{{$meno->color}}]">
                                                    {{$meno->time}} <br>
                                                    {{$meno->title}}
                                                </div>
                                            </button>
                                            @endif
                                            <dialog id="meno1{{$loop->index}}" class="modal">
                                                <div class="modal-box w-11/12 max-w-5xl text-start">
                                                    <div class="flex justify-between mb-3">
                                                        <div class="text-start">
                                                            <h3 class="mb-0">Date: <span class="">
                                                                    {{\Carbon\Carbon::parse($meno->date)->format('d F
                                                                    Y')}}</span></h3>
                                                            <h3 class="mb-0">Time: <span class="">
                                                                    {{$meno->time}}</span></h3>
                                                        </div>
                                                        <div>
                                                            <p class="">Room :<span class="">
                                                                    {{$meno->room}}
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0">Session : <span class="">
                                                            {{$meno->title}}</span></p>
                                                    <p class="">Moderator : <span class="">
                                                            {{$meno->moderator}}
                                                        </span></p>
                                                    <div class="overflow-x-auto mt-5">
                                                        <table class="table">
                                                            <!-- head -->
                                                            <thead>
                                                                <tr>
                                                                    <th style="width: 18%">Time</th>
                                                                    <th>Topic</th>
                                                                    <th>Speaker</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($meno->schedules as $schedule)
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
                                            @foreach ($satu as $trawangan)
                                            @if ($trawangan->room == 'Gili Trawangan')
                                            <button class="hover:shadow-lg hover:shadow-perhati-800 block w-full"
                                                onclick="trawangan1{{$loop->index}}.showModal()">
                                                <div
                                                    class="border px-0 py-4 w-full rounded-md bg-[{{$trawangan->color}}]">
                                                    {{$trawangan->time}} <br>
                                                    {{$trawangan->title}}
                                                </div>
                                            </button>
                                            @endif
                                            <dialog id="trawangan1{{$loop->index}}" class="modal">
                                                <div class="modal-box w-11/12 max-w-5xl text-start">
                                                    <div class="flex justify-between mb-3">
                                                        <div class="text-start">
                                                            <h3 class="mb-0">Date: <span class="">
                                                                    {{\Carbon\Carbon::parse($trawangan->date)->format('d
                                                                    F
                                                                    Y')}}</span></h3>
                                                            <h3 class="mb-0">Time: <span class="">
                                                                    {{$trawangan->time}}</span></h3>
                                                        </div>
                                                        <div>
                                                            <p class="">Room :<span class="">
                                                                    {{$trawangan->room}}
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0">Session : <span class="">
                                                            {{$trawangan->title}}</span></p>
                                                    <p class="">Moderator : <span class="">
                                                            {{$trawangan->moderator}}
                                                        </span></p>
                                                    <div class="overflow-x-auto mt-5">
                                                        <table class="table">
                                                            <!-- head -->
                                                            <thead>
                                                                <tr>
                                                                    <th style="width: 18%">Time</th>
                                                                    <th>Topic</th>
                                                                    <th>Speaker</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($trawangan->schedules as $schedule)
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
>>>>>>> 0c7f8abe9566543b850cd23ec2c4883b74874075
                    </div>

                    <div x-show="openTab === 2"
                        class="transition-all duration-300 bg-white p-4 rounded-lg shadow-md border-x-4 border-[#72c6b7]">

                        <p>tgl 35</p>

                    </div>

                    <div x-show="openTab === 3"
                        class="transition-all duration-300 bg-white p-4 rounded-lg shadow-md border-x-4 border-[#72c6b7]">

                        <p>tgl 26</p>

                    </div>
                    {{-- <div x-show="openTab === 4"
                        class="transition-all duration-300 bg-white p-4 rounded-lg shadow-md border-x-4 border-[#72c6b7]">
                    <p>tgl 27</p>

                    </div>
                    <div x-show="openTab === 5"
                        class="transition-all duration-300 bg-white p-4 rounded-lg shadow-md border-x-4 border-[#72c6b7]">

                        <p>tgl 28</p>
                    </div> --}}
                </div>
            </div>

        </div>
    </section>
</div>