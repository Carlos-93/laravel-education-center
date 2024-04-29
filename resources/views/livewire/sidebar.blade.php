<!-- component -->
<link rel="stylesheet" href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" />

<div>
    <aside class="fixed top-0 left-0 z-10" aria-label="Sidebar">
        <div class="fixed sm:flex flex-col items-center w-64 bg-[#003664] hidden h-screen py-10">
            <div class="flex items-center justify-center mb-10">
                <img src="/images/logo.png" alt="Logo Tech-Play Education" class="w-52">
            </div>
            <div class="flex flex-col h-full w-full justify-between pl-16 font-bold">
                <ul class="flex flex-col gap-10 justify-center items-start">
                    <li>
                        <a href="{{ route('dashboard') }}"
                            class="{{ request()->routeIs('dashboard') ? 'text-yellow-400' : 'text-white hover:text-yellow-400' }} flex items-center gap-3 transform hover:translate-x-3 transition-transform ease-in duration-200">
                            <span>
                                <i class="bx bx-home text-2xl"></i>
                            </span>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('course-management') }}"
                            class="{{ request()->routeIs('course-management') ? 'text-yellow-400' : 'text-white hover:text-yellow-400' }} flex items-start gap-3 transform hover:translate-x-3 transition-transform ease-in duración-200">
                            <span>
                                <i class="bx bxs-school text-2xl"></i>
                            </span>
                            <span>Courses</span>
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-start gap-3 transform hover:translate-x-3 transition-transform ease-in duración-200 text-white hover:text-yellow-400">
                            <span>
                                <i class="bx bxs-calendar text-2xl"></i>
                            </span>
                            <span>Calendar</span>
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-start gap-3 transform hover:translate-x-3 transition-transform ease-in duración-200 text-white hover:text-yellow-400">
                            <span>
                                <i class="bx bxs-conversation text-2xl"></i>
                            </span>
                            <span>Staff Room</span>
                        </a>
                    </li>
                </ul>

                <ul class="flex flex-col gap-10 justify-center items-start">
                    <li>
                        <a href="{{ route('profile.show') }}"
                            class="{{ request()->routeIs('profile.show') ? 'text-yellow-400 translate-x-3' : 'text-white hover:text-yellow-400' }} flex items-start gap-3 transform hover:translate-x-3 transition-transform ease-in duration-200">
                            <span>
                                <i class="bx bxs-cog text-2xl"></i>
                            </span>
                            <span>Settings</span>
                        </a>
                    </li>
                    <li>
                        <form method="POST" action="{{ route('logout') }}" x-data>
                            @csrf
                            <a href="{{ route('logout') }}" @click.prevent="$root.submit();"
                                class="flex items-start gap-3 transform hover:translate-x-3 transition-transform ease-in duración-200 text-yellow-400 hover:text-yellow-400">
                                <span>
                                    <i class="bx bx-log-out text-2xl"></i>
                                </span>
                                <span>Log Out</span>
                            </a>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </aside>
</div>
