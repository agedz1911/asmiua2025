<header class="main_header_area position-absolute w-100">
    <div class="header-content text-white">
        <div class="container">
            <div class="header-content-inner py-2">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="social-links ">
                            <ul class="m-0 p-0">
                                <li class="d-inline">
                                    <a href="mailto:asmiua2025@pharma-pro.com">
                                        <i class="fa fa-envelope-open border-social rounded-circle text-center"></i>
                                    </a>
                                </li>
                                <li class="d-inline">
                                    <a href="tel:+622163869502 ">
                                        <i class="fa fa-mobile-screen border-social rounded-circle text-center"></i>
                                    </a>
                                </li>
                                <li class="d-inline">
                                    <a href="https://wa.me/+628111018517">
                                        <i class="fa fa-whatsapp border-social rounded-circle text-center"></i>
                                    </a>
                                </li>
                                <li class="d-inline">
                                    <a href="javascript:void(0)">
                                        <i class="fa fa-instagram border-social rounded-circle text-center"></i>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="header-event-info text-end">
                            <ul class="m-0 p-0">
                                <li class="px-2 border-end border-lightgrey border-opacity-50 d-inline">
                                    <i class="fa fa-phone pe-1"></i>
                                    <a href="tel:+622163869502">
                                        <small>+62 21 6386 9502 </small>
                                    </a>
                                </li>
                                <li class=" px-2 border-end d-inline border-lightgrey border-opacity-50">
                                    <i class="fa fa-envelope-o pe-1"></i>
                                    <a href="mailto:asmiua2025@pharma-pro.com">
                                        <small>asmiua2025@pharma-pro.com</small>
                                    </a>
                                </li>
                                {{-- <li class=" px-2 d-inline ">
                                    <i class="fa fa-whatsapp pe-1"></i>
                                    <a href="https://wa.me/+628111018517">
                                        <small>+62 811 1018 517</small>
                                    </a>
                                </li> --}}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Navigation Bar -->
    <div class="header_menu" id="header_menu">

        <nav class="navbar navbar-expand-lg container py-2">
            <div class="row">
                <div class="col-lg-2 col-md-6">
                    <div class="navbar-brand m-0">
                        <img src="assets/images/logo/1.png" alt="Logo" class="w-100">
                    </div>
                </div>
                <div class="col-lg-10 col-md-6">
                    <div class="collapse navbar-collapse " id="bs-example-navbar-collapse-1">
                        <ul class="navbar-nav align-items-center" id="responsive-menu">
                            <li class="nav-item ">
                                <a class="nav-link px-2 my-4 py-0  {{ request()->is('/') ? 'active' : '' }}"
                                    aria-current="page" href="/">Home</a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle px-2 my-4 py-0 {{ request()->is('organizing-committee') || request()->is('welcome-message') || request()->is('/faculties') ? 'active' : '' }}"
                                    href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Congress Information
                                </a>
                                <ul class="dropdown-menu bg-lightgrey p-0 rounded">
                                    <li><a class="dropdown-item py-3 px-6 text-capitalize black border-0 {{ request()->is('welcome-message') ? 'text-warning' : '' }}"
                                            href="/welcome-message">Welcome Message</a></li>
                                    <li><a class="dropdown-item py-3 px-6 text-capitalize black border-0 {{ request()->is('organizing-committee') ? 'text-warning' : '' }}"
                                            href="/organizing-committee">Organizing Committee</a></li>
                                    <li><a class="dropdown-item py-3 px-6 text-capitalize black border-0"
                                            href="/faculties">Faculties</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle px-2 my-4 py-0 {{ request()->is('program-at-glance') || request()->is('scientific-schedule')  ? 'active' : '' }}" href="/program-at-glance" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Scientific Program
                                </a>
                                <ul class="dropdown-menu bg-lightgrey p-0 rounded">
                                    <li><a class="dropdown-item py-3 px-6 text-capitalize black border-0 {{request()->is('program-at-glance') ? 'text-warning' : ''}}"
                                            href="/program-at-glance">Program at Glance</a></li>
                                    <li><a class="dropdown-item py-3 px-6 text-capitalize black border-0 {{request()->is('scientific-schedule') ? 'text-warning' : ''}}"
                                            href="/scientific-schedule">Scientific Schedule </a></li>
                                    <li><a class="dropdown-item py-3 px-6 text-capitalize black border-0 {{request()->is('scientific-schedule') ? 'text-warning' : ''}}"
                                            href="/download/Program_Schedule-ASMIUA_2025.pdf" target="_blank">Program Book </a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link px-2 my-4 py-0 {{ request()->is('registration') ? 'active' : '' }}" href="/registration">Registration</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link px-2 my-4 py-0 {{ request()->is('accommodation') ? 'active' : '' }}"
                                    href="/accommodation">Accommodation</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle px-3 my-4 py-0 {{ request()->is('submission') || request()->is('presentation-schedule') ? 'active' : '' }}"
                                    href="#">Free Paper</a>
                                <ul class="dropdown-menu bg-lightgrey p-0 rounded">
                                    <li><a class="dropdown-item py-3 px-6 text-capitalize black border-0 {{ request()->is('presentation-schedule') ? 'text-warning' : '' }}"
                                            href="/presentation-schedule">Free Paper Schedule</a></li>
                                    <li><a class="dropdown-item py-3 px-6 text-capitalize black border-0"
                                            href="https://expo.virconex-id.com/eposter/asmiua2025/input_eposter/login.php">Free Paper Presentation Submission</a></li>
                                    <li><a class="dropdown-item py-3 px-6 text-capitalize black border-0 {{ request()->is('submission') ? 'text-warning' : '' }}"
                                            href="/submission">Submission</a></li>
                                </ul>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle px-3 my-4 py-0 {{ request()->is('visiting') || request()->is('venue') ? 'active' : '' }}"
                                    href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Visiting
                                </a>
                                <ul class="dropdown-menu bg-lightgrey p-0 rounded">
                                    <li><a class="dropdown-item py-3 px-6 text-capitalize black border-0 {{ request()->is('visiting') ? 'text-warning' : '' }}"
                                            href="/visiting">Medan, North Sumatra</a></li>
                                    <li><a class="dropdown-item py-3 px-6 text-capitalize black border-0"
                                            href="javascript:void(0)">Venue</a></li>
                                </ul>
                            </li>

                        </ul>
                        <!-- <a class="btn" href="#search1">Contact us</a> -->
                    </div>
                </div>

                <div id="slicknav-mobile"></div>
            </div>
        </nav>

        <!-- <div id="search1">
            <button type="button" class="close">×</button>
            <form>
                <input class="form-control form-control-lg rounded" placeholder="Search...">
            </form>
            <button type="button" class="btn"><i class="fa fa-search" aria-hidden="true"></i></button>
        </div> -->

    </div>
    <!-- Navigation Bar Ends -->
</header>