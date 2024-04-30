<!-- component -->
<link rel="stylesheet" href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" />

<div>
    <aside class="fixed top-0 left-0 z-10" aria-label="Sidebar">
        <div class="fixed sm:flex flex-col items-center w-64 bg-[#003664] hidden h-screen py-10">
            <div class="flex items-center justify-center mb-10">
                <img src="/images/logo.png" alt="Logo Tech-Play Education" class="w-52">
            </div>
            <div class="flex flex-col h-full w-full justify-between font-bold">
                <ul class="flex flex-col gap-4 justify-center items-start">
                    <a href="{{ route('dashboard') }}"
                        class="{{ request()->routeIs('dashboard') ? 'text-yellow-400' : 'text-white hover:text-yellow-400' }} transform hover:pl-20 ease-in duration-200 w-full gradient-box flex items-center gap-3 pl-14">
                        <li class="py-3 flex items-center gap-2">
                            <span>
                                <i class="bx bx-home text-2xl"></i>
                            </span>
                            <span>Dashboard</span>
                        </li>
                    </a>
                    <a href="{{ route('course-management') }}"
                        class="{{ request()->routeIs('course-management') ? 'text-yellow-400' : 'text-white hover:text-yellow-400' }} transform hover:pl-20 ease-in duration-200 w-full gradient-box flex items-center gap-3 pl-14">
                        <li class="py-3 flex items-start gap-2">
                            <span>
                                <i class='bx bxs-graduation text-2xl'></i>
                            </span>
                            <span>Courses</span>
                        </li>
                    </a>
                    <a href="#"
                        class="{{ request()->routeIs('course-management') ? 'text-yellow-400' : 'text-white hover:text-yellow-400' }} transform hover:pl-20 ease-in duration-200 w-full gradient-box flex items-center gap-3 pl-14">
                        <li class="py-3 flex items-center gap-2">
                            <span>
                                <i class="bx bxs-calendar text-2xl"></i>
                            </span>
                            <span>Calendar</span>
                        </li>
                    </a>
                    <a href="#"
                        class="flex items-start gap-3 transform hover:translate-x-3 transition-transform ease-in duración-200 text-white hover:text-yellow-400 pl-14">
                        <li class="py-3 flex items-start gap-2">
                            <span>
                                <i class="bx bx-edit text-2xl"></i>
                            </span>
                            <span>Grades</span>
                        </li>
                    </a>
                    <a href="#"
                        class="flex items-start gap-3 transform hover:translate-x-3 transition-transform ease-in duración-200 text-white hover:text-yellow-400 pl-14">
                        <li class="py-3 flex items-start gap-2">
                            <span>
                                <i class="bx bxs-conversation text-2xl"></i>
                            </span>
                            <span>Staff Room</span>
                        </li>
                    </a>
                    <a href="#"
                        class="flex items-start gap-3 transform hover:translate-x-3 transition-transform ease-in duración-200 text-white hover:text-yellow-400 pl-14">
                        <li class="py-3 flex items-start gap-2">
                            <span>
                                <i class="bx bxs-user-detail text-2xl"></i>
                            </span>
                            <span>User Manag.</span>
                        </li>
                    </a>
                </ul>

                <ul class="flex flex-col justify-center items-start">
                    <a href="{{ route('profile.show') }}"
                        class="{{ request()->routeIs('profile.show') ? 'text-yellow-400 translate-x-3' : 'text-white hover:text-yellow-400' }} flex items-start gap-3 transform hover:translate-x-3 transition-transform ease-in duration-200 pl-14">
                        <li class="py-3 flex items-start gap-2">
                            <span>
                                <i class="bx bxs-cog text-2xl"></i>
                            </span>
                            <span>Settings</span>
                        </li>
                    </a>
                    <form method="POST" action="{{ route('logout') }}" x-data>
                        <a href="{{ route('logout') }}" @click.prevent="$root.submit();"
                            class="flex items-start gap-3 transform hover:translate-x-3 transition-transform ease-in duración-200 text-yellow-400 hover:text-yellow-400 pl-14">
                            <li class="py-3 flex items-start gap-2">
                                @csrf
                                <span>
                                    <i class="bx bx-log-out text-2xl"></i>
                                </span>
                                <span>Log Out</span>
                            </li>
                        </a>
                    </form>
                </ul>
            </div>
        </div>
    </aside>
</div>
