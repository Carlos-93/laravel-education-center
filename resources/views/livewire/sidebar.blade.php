<!-- component -->
<link rel="stylesheet" href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" />

<div>
    <aside class="fixed top-0 left-0 z-40 w-full transition-transform -translate-x-full sm:translate-x-0"
        aria-label="Sidebar">
        <div class="fixed flex flex-col items-center w-64 bg-[#003664] overflow-hidden h-screen py-10">
            <div class="flex items-center justify-center mb-10">
                <img src="/images/logo.png" alt="Logo Tech-Play Education" class="w-52">
            </div>
            <ul class="flex flex-col pr-10 gap-10">
                <li>
                    <a href={{ route('dashboard') }}
                        class="flex items-center gap-3 transform hover:translate-x-3 transition-transform ease-in duration-200 text-white hover:text-yellow-400">
                        <span class="inline-flex items-center justify-center text-lg">
                            <i class="bx bx-home text-2xl"></i>
                        </span>
                        <span class="text-sm font-bold">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center gap-3 transform hover:translate-x-3 transition-transform ease-in duration-200 text-white hover:text-yellow-400">
                        <span class="inline-flex items-center justify-center">
                            <i class="bx bxs-graduation text-2xl"></i>
                        </span>
                        <span class="text-sm font-bold">Students</span>
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center gap-3 transform hover:translate-x-3 transition-transform ease-in duration-200 text-white hover:text-yellow-400">
                        <span class="inline-flex items-center justify-center">
                            <i class='bx bxs-briefcase text-2xl'></i>
                        </span>
                        <span class="text-sm font-bold">Teachers</span>
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center gap-3 transform hover:translate-x-3 transition-transform ease-in duration-200 text-white hover:text-yellow-400">
                        <span class="inline-flex items-center justify-center">
                            <i class="bx bxs-school text-2xl"></i>
                        </span>
                        <span class="text-sm font-bold">Courses</span>
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center gap-3 transform hover:translate-x-3 transition-transform ease-in duration-200 text-white hover:text-yellow-400">
                        <span class="inline-flex items-center justify-center">
                            <i class="bx bx-stats text-2xl"></i>
                        </span>
                        <span class="text-sm font-bold">Stadistics</span>
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center gap-3 transform hover:translate-x-3 transition-transform ease-in duration-200 text-white hover:text-yellow-400">
                        <span class="inline-flex items-center justify-center">
                            <i class="bx bxs-cog text-2xl"></i>
                        </span>
                        <span class="text-sm font-bold">Settings</span>
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center gap-3 transform hover:translate-x-3 transition-transform ease-in duration-200 text-white hover:text-yellow-400">
                        <span class="inline-flex items-center justify-center">
                            <i class="bx bxs-conversation text-2xl"></i>
                        </span>
                        <span class="text-sm font-bold">Staff Room</span>
                    </a>
                </li>
                <form method="POST" action="{{ route('logout') }}" x-data>
                    @csrf
                    <li class="flex mt-32">
                        <a href="{{ route('logout') }}" @click.prevent="$root.submit();"
                            class="flex items-center gap-3 transform hover:translate-x-3 transition-transform ease-in duration-200 text-yellow-400 hover:text-yellow-400">
                            <span class="inline-flex items-center justify-center">
                                <i class="bx bx-log-out text-2xl"></i>
                            </span>
                            <span class="text-sm font-bold">Log Out</span>
                        </a>
                    </li>
                </form>
            </ul>
        </div>
    </aside>
</div>
