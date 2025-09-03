<div>
    <section class="banner page-banner position-relative pb-0">
        <div class="overlay">
        </div>
        <div class="container">
            <div class="page-title text-center position-relative py-11">
                <h2 class="text-white text-uppercase">Program at Glance</h2>
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
                                                            {{$convention->title_ses}}</h1>
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
                                                            {{$ballroom1->title_ses}}</h1>
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
                                                            {{$ballroom2->title_ses}}</h1>
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
                                                            {{$santika15->title_ses}}</h1>
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
                                                            {{$santika5_25->title_ses}}</h1>
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
                                                            {{$santika7->title_ses}}</h1>
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
                                                            {{$santika8->title_ses}}</h1>
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
                                                            {{$foyer->title_ses}}</h1>
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
                                                            {{$santika9_25->title_ses}}</h1>
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
                                                            {{$convention->title_ses}}</h1>
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
                                                            {{$ballroom1->title_ses}}</h1>
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
                                                            {{$ballroom2->title_ses}}</h1>
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
                                                            {{$santika5->title_ses}}</h1>
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
                                                            {{$santika15->title_ses}}</h1>
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
                                                            {{$santika7->title_ses}}</h1>
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
                                                            {{$santika8->title_ses}}</h1>
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
                                                            {{$ballroom2_27->title_ses}}</h1>
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
                                                            {{$santika15->title_ses}}</h1>
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
                                                            {{$santika5->title_ses}}</h1>
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
                                                            {{$santika7->title_ses}}</h1>
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
                                                            {{$santika10->title_ses}}</h1>
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
                                                            {{$santika9->title_ses}}</h1>
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
                                                            {{$santika12->title_ses}}</h1>
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
                                                            {{$santika8->title_ses}}</h1>
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