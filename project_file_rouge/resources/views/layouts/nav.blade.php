<header class="navbar bg-blueGray-400 top-0 fixed z-10 w-full bg-opacity-25">
    <nav class="container mx-auto py-2 ">
        <div class="flex items-center justify-between">
            <div class="flex text-black-50 font-bold text-xl">
                <a href="{{ url('/') }} " class="flex items-center"><img class="w-24 h-16"  src="{{ asset('img/16.png') }}" alt="Train">Train</a>
            </div>
            <div class="hidden md:block">
                <ul class="flex items-center space-x-8">
                    <li><a href="{{ url('/') }}" class="text-black-50">Home</a></li>
                    <li><a href="#" class="text-black-50">About</a></li>
                    <li><a href="#" class="text-black-50">Services</a></li>
                    <li><a href="{{ route('Form-register') }}" class="block px-4 py-2 text-white bg-gray-700 rounded">Contact</a></li>
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
                <li><a href="#" class="block px-4 py-2 text-white bg-gray-900 rounded">About</a></li>
                <li><a href="#" class="block px-4 py-2 text-white bg-gray-900 rounded">Services</a></li>
                <li><a href="{{ route('Form-register') }}" class="block px-4 py-2 text-white bg-gray-900 rounded">Contact</a></li>

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

