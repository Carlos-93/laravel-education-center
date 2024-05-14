<aside>
    <nav :class="{ 'sm:left-0': !close, 'sm:left-[-16rem]': close }"
        class="sm:flex sm:flex-col sm:items-center py-5 h-full w-[16rem] fixed top-0 left-[-16rem] sm:left-0 bg-[#003664] transition-all ease-in-out duration-300">
        <div class="flex items-center justify-center mb-5">
            <a href="{{ route('dashboard') }}">
                <img src="/images/logo.png" alt="Logo Tech-Play Education" class="w-52">
            </a>
        </div>
        <div class="flex flex-col h-full w-full justify-between font-bold">
            <ul class="flex flex-col gap-4 justify-center items-start">
                <a href="{{ route('dashboard') }}"
                    class="{{ request()->routeIs('dashboard') ? 'text-yellow-400 white-gradient' : 'text-white hover:text-yellow-400' }} transform hover:pl-20 ease-in duration-200 w-full gradient-box flex items-center pl-14">
                    <li class="py-3 flex items-center gap-2">
                        <i class="bx bx-home text-2xl"></i>
                        <span>Dashboard</span>
                    </li>
                </a>
                <a href="{{ route('courses') }}"
                    class="{{ request()->routeIs('courses') ? 'text-yellow-400 white-gradient' : 'text-white hover:text-yellow-400' }} transform hover:pl-20 ease-in duration-200 w-full gradient-box flex items-center pl-14">
                    <li class="py-3 flex items-center gap-2">
                        <i class='bx bxs-graduation text-2xl'></i>
                        <span>Courses</span>
                    </li>
                </a>
                <a href="{{ route('games') }}"
                    class="{{ request()->routeIs('games') ? 'text-yellow-400 white-gradient' : 'text-white hover:text-yellow-400' }} transform hover:pl-20 ease-in duration-200 w-full gradient-box flex items-center pl-14">
                    <li class="py-3 flex items-center gap-2">
                        <i class='bx bx-game text-2xl'></i>
                        <span>Games</span>
                    </li>
                </a>
                <a href="{{ route('calendar') }}"
                    class="{{ request()->routeIs('calendar') ? 'text-yellow-400 white-gradient' : 'text-white hover:text-yellow-400' }} transform hover:pl-20 ease-in duration-200 w-full gradient-box flex items-center pl-14">
                    <li class="py-3 flex items-center gap-2">
                        <i class="bx bxs-calendar text-2xl"></i>
                        <span>Calendar</span>
                    </li>
                </a>
                <a href="{{ route('grades') }}"
                    class="{{ request()->routeIs('grades') ? 'text-yellow-400 white-gradient' : 'text-white hover:text-yellow-400' }} transform hover:pl-20 ease-in duration-200 w-full gradient-box flex items-center pl-14">
                    <li class="py-3 flex items-center gap-2">
                        <i class="bx bx-edit text-2xl"></i>
                        <span>Grades</span>
                    </li>
                </a>
                @if (auth()->user()->isAdmin() || auth()->user()->isTeacher())
                    <a href="{{ route('staff-room') }}"
                        class="{{ request()->routeIs('staff-room') ? 'text-yellow-400 white-gradient' : 'text-white hover:text-yellow-400' }} transform hover:pl-20 ease-in duration-200 w-full gradient-box flex items-center pl-14">
                        <li class="py-3 flex items-center gap-2">
                            <i class="bx bxs-conversation text-2xl"></i>
                            <span>Staff Room</span>
                        </li>
                    </a>
                @endif

                @if (auth()->user()->isAdmin())
                    <a href="{{ route('user-management') }}"
                        class="{{ request()->routeIs('user-management') ? 'text-yellow-400 white-gradient' : 'text-white hover:text-yellow-400' }} transform hover:pl-20 ease-in duration-200 w-full gradient-box flex items-center pl-14">
                        <li class="py-3 flex items-center gap-2">
                            <i class="bx bxs-user-detail text-2xl"></i>
                            <span>User Manager</span>
                        </li>
                    </a>
                @endif
            </ul>

            <ul class="flex flex-col justify-center items-start">
                <a href="{{ route('profile.show') }}"
                    class="{{ request()->routeIs('profile.show') ? 'text-yellow-400 white-gradient' : 'text-white hover:text-yellow-400' }} transform hover:pl-20 ease-in duration-200 w-full gradient-box flex items-center pl-14">
                    <li class="py-3 flex items-center gap-2">
                        <i class="bx bxs-cog text-2xl"></i>
                        <span>Settings</span>
                    </li>
                </a>
                <form method="POST" action="{{ route('logout') }}" x-data
                    class="text-yellow-400 transform hover:pl-20 ease-in duration-200 w-full gradient-box flex items-center pl-14">
                    <a href="{{ route('logout') }}" @click.prevent="$root.submit();" class="w-full">
                        <li class="py-3 flex items-center gap-2">
                            @csrf
                            <i class="bx bx-log-out text-2xl"></i>
                            <span>Log Out</span>
                        </li>
                    </a>
                </form>
            </ul>
        </div>
    </nav>
</aside>
