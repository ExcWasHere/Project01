@auth
    <header class="fixed top-0 left-0 right-0 z-40 w-full px-4 py-3 bg-white shadow-md">
        <div class="mx-auto container flex items-center justify-between">
            <a href="/" class="flex items-center gap-5 transition-opacity text-xl font-bold text-[#1a4167] hover:opacity-80">
                <img src="{{ asset('img/logo-beacukai.png') }}" alt="Logo" class="w-8 h-8">
                SIMAP
            </a>
            <nav class="hidden items-center gap-6 lg:flex">
                <a href="/intelijen" class="text-gray-600 hover:text-gray-900 {{ request()->is('/') ? 'active' : '' }}">
                    Intelijen
                </a>
                <a href="/penyidikan" class="text-gray-600 hover:text-gray-900 {{ request()->is('intelijen*') ? 'active' : '' }}">
                    Penyidikan
                </a>
                <a href="/penindakan" class="text-gray-600 hover:text-gray-900 {{ request()->is('intelijen*') ? 'active' : '' }}">
                    Penindakan
                </a>
                <a href="/monitoring" class="text-gray-600 hover:text-gray-900 {{ request()->is('penindakan*') ? 'active' : '' }}">
                    Monitoring
                </a>
                <span class="h-6 w-px bg-gray-200"></span>
                <form method="POST" action="{{ route('logout') }}" class="inline">
                    @csrf
                    <button
                        type="submit"
                        class="flex cursor-pointer items-center text-gray-600 transition-colors duration-300 hover:text-red-600"
                    >
                        <i class="fas fa-sign-out-alt mr-1"></i>
                        &ensp;Keluar
                    </button>
                </form>
            </nav>
            <i class="fa-solid fa-bars cursor-pointer text-xl text-gray-600 hover:text-gray-900 focus:outline-none lg:!hidden" id="mobile-menu-button"></i>
            @include('shared.navigation.mobile-menu')
        </div>
    </header>
@endauth