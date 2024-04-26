<!-- component -->
<link rel="stylesheet" href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" />

<div>
    <aside class="fixed top-0 left-0 z-10" aria-label="Sidebar">
        <div class="fixed sm:flex flex-col items-center w-64 bg-[#003664] hidden h-screen py-10">
            <div class="flex items-center justify-center mb-10">
                <img src="/images/logo.png" alt="Logo Tech-Play Education" class="w-52">
            </div>
            <div class="flex flex-col gap-10 h-full w-full justify-between">
                <ul class="flex flex-col gap-10">
                    <a href="{{ route('dashboard') }}"
                        class="{{ request()->routeIs('dashboard') ? 'text-yellow-400 translate-x-3' : 'text-white hover:text-yellow-400' }} flex items-center gap-3 transform hover:translate-x-3 transition-transform ease-in duration-200">
                        <li>
                            <span class="inline-flex items-center justify-center">
                                <i class="bx bx-home text-2xl"></i>
                            </span>
                            <span class="font-bold">Dashboard</span>
                        </li>
                    </a>

                    <a href="{{ route('course-management') }}"
                        class="{{ request()->routeIs('course-management') ? 'text-yellow-400 translate-x-3' : 'text-white hover:text-yellow-400' }} w-full  flex items-center gap-3 transform hover:translate-x-3 transition-transform ease-in duration-200">
                        <li>
                            <span class="inline-flex items-center justify-center">
                                <i class="bx bxs-school text-2xl"></i>
                            </span>
                            <span class="font-bold">Courses</span>
                        </li>
                    </a>

                    <a href="#"
                        class="flex items-center gap-3 transform hover:translate-x-3 transition-transform ease-in duration-200 text-white hover:text-yellow-400">
                        <span class="inline-flex items-center justify-center">
                            <li>
                                <i class="bx bxs-calendar text-2xl"></i>
                        </span>
                        <span class="font-bold">Calendar</span>
                        </li>
                    </a>
                    <li>
                        <a href="#"
                            class="flex items-center gap-3 transform hover:translate-x-3 transition-transform ease-in duration-200 text-white hover:text-yellow-400">
                            <span class="inline-flex items-center justify-center">
                                <i class="bx bxs-conversation text-2xl"></i>
                            </span>
                            <span class="font-bold">Staff Room</span>
                        </a>
                    </li>
                </ul>
                <ul class="flex flex-col gap-10">
                    <li>
                        <a href="{{ route('profile.show') }}"
                            class="{{ request()->routeIs('profile.show') ? 'text-yellow-400 translate-x-3' : 'text-white hover:text-yellow-400' }} flex items-center gap-3 transform hover:translate-x-3 transition-transform ease-in duration-200">
                            <span class="inline-flex items-center justify-center">
                                <i class="bx bxs-cog text-2xl"></i>
                            </span>
                            <span class="font-bold">Settings</span>
                        </a>
                    </li>
                    <form method="POST" action="{{ route('logout') }}" x-data>
                        @csrf
                        <li>
                            <a href="{{ route('logout') }}" @click.prevent="$root.submit();"
                                class="flex items-center gap-3 transform hover:translate-x-3 transition-transform ease-in duration-200 text-yellow-400 hover:text-yellow-400">
                                <span class="inline-flex items-center justify-center">
                                    <i class="bx bx-log-out text-2xl"></i>
                                </span>
                                <span class="font-bold">Log Out</span>
                            </a>
                        </li>
                    </form>
                </ul>
            </div>
            {{-- <ul class="flex flex-col pr-10 gap-10">
                <li>
                    <a href="{{ route('dashboard') }}"
                        class="{{ request()->routeIs('dashboard') ? 'text-yellow-400 translate-x-3' : 'text-white hover:text-yellow-400' }} flex items-center gap-3 transform hover:translate-x-3 transition-transform ease-in duration-200">
                        <span class="inline-flex items-center justify-center">
                            <i class="bx bx-home text-2xl"></i>
                        </span>
                        <span class="font-bold">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('course-management') }}"
                        class="{{ request()->routeIs('course-management') ? 'text-yellow-400 translate-x-3' : 'text-white hover:text-yellow-400' }} flex items-center gap-3 transform hover:translate-x-3 transition-transform ease-in duration-200">
                        <span class="inline-flex items-center justify-center">
                            <i class="bx bxs-school text-2xl"></i>
                        </span>
                        <span class="font-bold">Courses</span>
                    </a>
                </li>

                <li>
                    <a href="#"
                        class="flex items-center gap-3 transform hover:translate-x-3 transition-transform ease-in duration-200 text-white hover:text-yellow-400">
                        <span class="inline-flex items-center justify-center">
                            <i class="bx bxs-calendar text-2xl"></i>
                        </span>
                        <span class="font-bold">Calendar</span>
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center gap-3 transform hover:translate-x-3 transition-transform ease-in duration-200 text-white hover:text-yellow-400">
                        <span class="inline-flex items-center justify-center">
                            <i class="bx bxs-conversation text-2xl"></i>
                        </span>
                        <span class="font-bold">Staff Room</span>
                    </a>
                </li>
                
                <li>
                    <a href="{{ route('profile.show') }}"
                        class="{{ request()->routeIs('profile.show') ? 'text-yellow-400 translate-x-3' : 'text-white hover:text-yellow-400' }} flex items-center gap-3 transform hover:translate-x-3 transition-transform ease-in duration-200">
                        <span class="inline-flex items-center justify-center">
                            <i class="bx bxs-cog text-2xl"></i>
                        </span>
                        <span class="font-bold">Settings</span>
                    </a>
                </li>
                <form method="POST" action="{{ route('logout') }}" x-data>
                    @csrf
                    <li>
                        <a href="{{ route('logout') }}" @click.prevent="$root.submit();"
                            class="flex items-center gap-3 transform hover:translate-x-3 transition-transform ease-in duration-200 text-yellow-400 hover:text-yellow-400">
                            <span class="inline-flex items-center justify-center">
                                <i class="bx bx-log-out text-2xl"></i>
                            </span>
                            <span class="font-bold">Log Out</span>
                        </a>
                    </li>
                </form>
            </ul> --}}
        </div>
    </aside>
</div>
