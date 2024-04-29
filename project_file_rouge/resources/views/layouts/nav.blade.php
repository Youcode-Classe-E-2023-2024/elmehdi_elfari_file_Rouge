<header class="navbar bg-blueGray-400 top-0 fixed z-10 w-full bg-opacity-25">
    <nav class="container mx-auto py-2 ">
        <div class="flex items-center justify-between">
            <div class="flex text-black-50 font-bold text-xl">
                <a href="{{ url('/') }} " class="flex items-center"><img class="w-24 h-16"  src="{{ asset('img/16.png') }}" alt="Train">Train</a>
            </div>
            <div class="hidden md:block">
                <ul class="flex items-center space-x-8">
                    <li><a href="{{ url('/') }}" class="text-black-50">Home</a></li>
                    <li><a href="{{ route('promos') }}" class="text-black-50">Promos</a></li>
                    @if(Auth()->check())
                    <li>
                        <form method="POST" action="{{ url('/logout') }}">
                            @csrf
                            <button
                                class="block antialiased font-sans font-bold transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 rounded-lg block px-4 py-2 text-white bg-gray-700 rounded w-full flex items-center gap-4 px-4 capitalize"
                                type="submit">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="w-5 h-5 text-inherit">
                                    <path fill-rule="evenodd" d="M7.5 3.75A1.5 1.5 0 006 5.25v13.5a1.5 1.5 0 001.5 1.5h6a1.5 1.5 0 001.5-1.5V15a.75.75 0 011.5 0v3.75a3 3 0 01-3 3h-6a3 3 0 01-3-3V5.25a3 3 0 013-3h6zm10.72 4.72a.75.75 0 011.06 0l3 3a.75.75 0 010 1.06l-3 3a.75.75 0 11-1.06-1.06l1.72-1.72H9a.75.75 0 010-1.5h10.94l-1.72-1.72a.75.75 0 010-1.06z" clip-rule="evenodd"></path>
                                </svg>
                                <p class="block antialiased font-sans text-base leading-relaxed text-inherit font-medium capitalize">Logout</p>
                            </button>
                        </form>
                    </li>
                    @else
                        <li><a href="{{ route('Form-register') }}" class="block px-4 py-2 text-white bg-gray-700 rounded">Contact</a></li>
                    @endif
                </ul>

            </div>
            <div class="md:hidden">
                <button class="outline-none mobile-menu-button">
                    <svg class="w-6 h-6 text-white" x-show="!showMenu" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
        <div class="mobile-menu hidden md:hidden">
            <ul class="mt-4 space-y-4">
                <li><a href="{{ url('/') }}" class="block px-4 py-2 text-white bg-gray-900 rounded">Home</a></li>
                <li><a href="{{ route('promos') }}" class="block px-4 py-2 text-white bg-gray-900 rounded">Promos</a></li>
                @if(Auth()->check())
                    <li>
                        <form method="POST" action="{{ url('/logout') }}">
                            @csrf
                            <button
                                class="block antialiased font-sans font-bold transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 rounded-lg block px-4 py-2 text-white bg-gray-700 rounded w-full flex items-center gap-4 px-4 capitalize"
                                type="submit">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="w-5 h-5 text-inherit">
                                    <path fill-rule="evenodd" d="M7.5 3.75A1.5 1.5 0 006 5.25v13.5a1.5 1.5 0 001.5 1.5h6a1.5 1.5 0 001.5-1.5V15a.75.75 0 011.5 0v3.75a3 3 0 01-3 3h-6a3 3 0 01-3-3V5.25a3 3 0 013-3h6zm10.72 4.72a.75.75 0 011.06 0l3 3a.75.75 0 010 1.06l-3 3a.75.75 0 11-1.06-1.06l1.72-1.72H9a.75.75 0 010-1.5h10.94l-1.72-1.72a.75.75 0 010-1.06z" clip-rule="evenodd"></path>
                                </svg>
                                <p class="block antialiased font-sans text-base leading-relaxed text-inherit font-medium capitalize">Logout</p>
                            </button>
                        </form>
                    </li>
                @else
                    <li><a href="{{ route('Form-register') }}" class="block px-4 py-2 text-white bg-gray-700 rounded">Contact</a></li>
                @endif

            </ul>
        </div>
    </nav>
</header>
<script>
    window.addEventListener('scroll', function () {
        console.log('test')
        var navbar = document.querySelector('.navbar');
        if (window.scrollY > 0) {
            navbar.classList.add('bg-blueGray-200');
            navbar.classList.remove('bg-opacity-25');
        } else {
            navbar.classList.remove('bg-blueGray-200');
            navbar.classList.add('bg-blueGray-200', 'bg-opacity-25');
        }
    });
</script>

