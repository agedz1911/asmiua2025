<ul class="flex gap-6 uppercase">
    <li>
        <a href="/" wire:navigate
            class="{{ request()->is('/') ? 'text-accent' : 'text-green-950' }} hover:text-[#72C6B7] hover:underline ">Home
        </a>
    </li>
    <div class="dropdown dropdown-hover">
        <div tabindex="0"
            class="{{ request()->is('organizing-committee') || request()->is('faculties') || request()->is('welcome-message') ? 'text-accent' : 'text-green-950' }} hover:cursor-pointer hover:text-[#72C6B7]">
            Congress Information <i class="fa-solid fa-angle-down"></i></div>
        <ul tabindex="0" class="dropdown-content menu bg-base-100 rounded-box gap-2 w-60 p-2 shadow-sm">
            <li>
                <a href="/welcome-message" wire:navigate
                    class="{{ request()->is('welcome-message') ? 'text-accent' : '' }} justify-between hover:text-[#72C6B7] ">Welcome Message <i class="fa-solid fa-angle-right"></i></a>
            </li>
            <li>
                <a href="/organizing-committee" wire:navigate
                    class="{{ request()->is('organizing-committee') ? 'text-accent' : '' }} justify-between hover:text-[#72C6B7] ">Organizing
                    Committee <i class="fa-solid fa-angle-right"></i></a>
            </li>
            <li>
                <a href="/faculties" wire:navigate
                    class="{{ request()->is('faculties') ? 'text-accent' : '' }} justify-between hover:text-[#72C6B7] ">Faculties
                    <i class="fa-solid fa-angle-right"></i></a>
            </li>
        </ul>
    </div>

    <div class="dropdown dropdown-hover">
        <div tabindex="0"
            class="{{ request()->is('program-at-glance') || request()->is('topics') || request()->is('scientific-schedule') ? 'text-accent' : 'text-green-950' }} hover:cursor-pointer hover:text-[#72C6B7]">
            Scientific Program <i class="fa-solid fa-angle-down"></i></div>
        <ul tabindex="0" class="dropdown-content menu bg-base-100 rounded-box gap-2 w-60 p-2 shadow-sm">
            
            <li>
                <a href="#" wire:navigate
                    class="{{ request()->is('program-at-glance') ? 'text-accent' : '' }} justify-between hover:text-[#72C6B7]">Program
                    at Glance <i class="fa-solid fa-angle-right"></i></a>
            </li>
            <li>
                <a href="#" wire:navigate
                    class="{{ request()->is('scientific-schedule') ? 'text-accent' : '' }} justify-between hover:text-[#72C6B7]">Scientific
                    Schedule <i class="fa-solid fa-angle-right"></i></a>
            </li>
            {{-- <li>
                <a href="#" wire:navigate
                    class="{{ request()->is('topics') ? 'text-accent' : '' }} justify-between hover:text-[#72C6B7]">
                    Program Book <i class="fa-solid fa-angle-right"></i></a>
            </li> --}}
    </div>


    <li>
        <a href="/registration" wire:navigate
            class="{{ request()->is('registration') ? 'text-accent' : 'text-green-950' }} hover:text-[#72C6B7] hover:underline">Registration
        </a>
    </li>
    <li>
        <a href="/accommodation" wire:navigate
            class="{{ request()->is('accommodation') ? 'text-accent' : 'text-green-950' }} hover:text-[#72C6B7] hover:underline">Accommodation
        </a>
    </li>
    
    <div class="dropdown dropdown-hover">
        <div tabindex="0"
            class="{{ request()->is('submission')  || request()->is('presentation-schedule')  ? 'text-accent' : 'text-green-950' }} hover:cursor-pointer hover:text-[#72C6B7]">
            Free Paper <i class="fa-solid fa-angle-down"></i></div>
        <ul tabindex="0" class="dropdown-content menu bg-base-100 rounded-box gap-2 w-60 p-2 shadow-sm">
            <li>
                <a href="/presentation-schedule" wire:navigate
                    class="{{ request()->is('presentation-schedule') ? 'text-accent' : '' }} justify-between hover:text-[#72C6B7]">
                    Free Paper Schedule <i class="fa-solid fa-angle-right"></i></a>
            </li>
            <li>
                <a href="#"
                    class="justify-between hover:text-[#72C6B7]">Free Paper Presentation Submission <i class="fa-solid fa-angle-right"></i></a>
            </li>
            <li>
                <a href="/submission" wire:navigate
                    class="{{ request()->is('submission') ? 'text-accent' : '' }} justify-between hover:text-[#72C6B7]">Abstract Submission<i class="fa-solid fa-angle-right"></i></a>
            </li>
    </div>
    <div class="dropdown dropdown-hover">
        <div tabindex="0"
            class="{{ request()->is('visiting')  || request()->is('social-program')  ? 'text-accent' : 'text-green-950' }} hover:cursor-pointer hover:text-[#72C6B7]">
            Visiting <i class="fa-solid fa-angle-down"></i></div>
        <ul tabindex="0" class="dropdown-content menu bg-base-100 rounded-box gap-2 w-60 p-2 shadow-sm">
            <li>
                <a href="/visiting" wire:navigate
                    class="{{ request()->is('visiting') ? 'text-accent' : '' }} justify-between hover:text-[#72C6B7]">
                    Bandung <i class="fa-solid fa-angle-right"></i></a>
            </li>
            {{-- <li>
                <a href="/visiting#venue"
                    class="{{ request()->is('visiting#venue') ? 'text-accent' : '' }} justify-between hover:text-[#72C6B7]">Conference Venue <i class="fa-solid fa-angle-right"></i></a>
            </li>
            <li>
                <a href="/social-program" wire:navigate
                    class="{{ request()->is('social-program') ? 'text-accent' : '' }} justify-between hover:text-[#72C6B7]">Social Program <i class="fa-solid fa-angle-right"></i></a>
            </li> --}}
    </div>

</ul>