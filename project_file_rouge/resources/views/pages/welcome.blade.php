<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body class="bg-blueGray-600">
@include('layouts.nav')
<link rel="stylesheet" href=" {{ asset('css/app.css') }}">
<link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
<link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">

<div class="relative pt-16 pb-32 flex content-center items-center justify-center min-h-screen-75">
    <div class="absolute top-0 w-full h-full bg-center bg-cover">
        <img class="w-full h-full" src="{{ asset('img/14.jpg') }}" alt="Paris">
    </div>
    <div class="container relative mb-20 mx-auto">
        <div class="items-center flex flex-wrap">
            <div class="w-full lg:w-6/12 px-4 ml-auto mr-auto text-center">
                <div class="pr-12 bg-gray-50 bg-opacity-50 rounded-lg shadow-lg p-8">
                    <h1 class="text-black-50 font-semibold text-5xl">
                        Your story starts with us.
                    </h1>
                    <p class="mt-4 text-lg text-blueGray-900">
                        This is a simple example of a Landing Page you can build using
                        Notus JS. It features multiple CSS components based on the
                        Tailwind CSS design system.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden h-70-px" style="transform: translateZ(0px)">
        <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
            <polygon class="text-blueGray-600 fill-current" points="2560 0 2560 100 0 100"></polygon>
        </svg>
    </div>
</div>
<section class="pb-10 bg-blueGray-600 ">
    <div class="container mx-auto px-4">
        <div class="flex flex-wrap">
            <div class="lg:pt-12 pt-6 w-full md:w-4/12 px-4 text-center">
                <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                    <div class="px-4 py-5 flex-auto">
                        <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-red-400">
                            <i class="fas fa-award"></i>
                        </div>
                        <h6 class="text-xl font-semibold">Awarded Agency</h6>
                        <p class="mt-2 mb-4 text-blueGray-500">
                            Divide details about your product or agency work into parts.
                            A paragraph describing a feature will be enough.
                        </p>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-4/12 px-4 text-center">
                <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                    <div class="px-4 py-5 flex-auto">
                        <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-lightBlue-400">
                            <i class="fas fa-retweet"></i>
                        </div>
                        <h6 class="text-xl font-semibold">Free Revisions</h6>
                        <p class="mt-2 mb-4 text-blueGray-500">
                            Keep you user engaged by providing meaningful information.
                            Remember that by this time, the user is curious.
                        </p>
                    </div>
                </div>
            </div>
            <div class="pt-6 w-full md:w-4/12 px-4 text-center">
                <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                    <div class="px-4 py-5 flex-auto">
                        <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-emerald-400">
                            <i class="fas fa-fingerprint"></i>
                        </div>
                        <h6 class="text-xl font-semibold">Verified Company</h6>
                        <p class="mt-2 mb-4 text-blueGray-500">
                            Write a few lines about each one. A paragraph describing a
                            feature will be enough. Keep you user engaged!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container mx-auto rounded-lg shadow-lg p-8 mb-4 bg-gray-50 mx-auto w-9/12">
        <form method="GET" action='/search' class="flex justify-between gap-6">
            <div class="flex w-full mb-4">
                <select name="depart_id" class="form-select rounded-2xl w-full border p-3 mb-4 mr-4">
                    <option value="" selected disabled>Gare de départ</option>
                    @foreach($cities as $city)
                        <option value="{{ $city->id }}">{{ $city->name }}</option>
                    @endforeach
                </select>

                <select name="arrive_id" class="form-select rounded-2xl w-full border p-3 mb-4">
                    <option value="" selected disabled>Gare d'arrivée</option>
                    @foreach($cities as $city)
                        <option value="{{ $city->id }}">{{ $city->name }}</option>
                    @endforeach
                </select>
            </div>
            <!-- Search Button -->
            <div class="mt-1">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-3 px-4 rounded-full text-lg">Search</button>
            </div>
        </form>

        <form action="/filter" method="GET" class="flex flex-col items-center w-full mb-4">
            <!-- Departure Date Picker -->
            <div class="w-full grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-medium mb-2" for="departure-date">Departure Date</label>
                    <input name="start_date" class="appearance-none rounded-2xl bg-transparent border-b-2 border-purple-600 w-full text-gray-700 p-3 leading-tight focus:outline-none" type="date" id="departure-date">
                </div>
                <!-- Return Date Picker -->
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-medium mb-2" for="return-date">Return Date</label>
                    <input name="end_date" class="appearance-none rounded-2xl bg-transparent border-b-2 border-purple-600 w-full text-gray-700 p-3 leading-tight focus:outline-none" type="date" id="return-date">
                </div>
            </div>
            <div class="flex flex-col md:flex-row items-center gap-3 py-2 mb-4 ">
                <button class="bg-blue-500 hover:bg-blue-700 text-white py-2 px-4 font-bold px-4 rounded-full text-lg" type="submit">Filter</button>
                <a href="{{ route('home') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded-full text-lg">Back</a>
            </div>
        </form>

        <div class="flex justify-center gap-10 mb-4">
                <!-- Class Toggle -->
                <div>
                    <button class="bg-purple-600 text-white px-6 py-3 rounded-l-full uppercase font-bold text-sm">1st Class</button>
                    <button class="bg-gray-200 text-gray-700 px-6 py-3 rounded-r-full uppercase font-bold text-sm">2nd Class</button>
                </div>
                <!-- Number of Seats Input -->
                <div>
                    <input class="appearance-none rounded-2xl bg-transparent border-b-2 border-purple-600 w-full text-gray-700 p-3 leading-tight focus:outline-none" type="number" placeholder="Number de reservation">
                </div>
            </div>

    </div>
</section>



<div id="default-carousel" class="relative w-full" data-carousel="slide">
    <!-- Carousel wrapper -->
    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
        <!-- Item 1 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="/docs/images/carousel/carousel-1.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 2 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="/docs/images/carousel/carousel-2.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 3 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="/docs/images/carousel/carousel-3.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 4 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="/docs/images/carousel/carousel-4.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 5 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="/docs/images/carousel/carousel-5.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
    </div>
    <!-- Slider indicators -->
    <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
        <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
    </div>
    <!-- Slider controls -->
    <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
            </svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
            </svg>
            <span class="sr-only">Next</span>
        </span>
    </button>
</div>


<section>
    <div class="container flex flex-wrap justify-content-between mx-auto">
        @if($parcours->isNotEmpty())
            @foreach($parcours as $parcour)
                <div class="w-full md:w-1/2 lg:w-1/2 xl:w-1/2 px-3 mb-6 ">
                    <div class="bg-white rounded-lg shadow-md p-6">
                        <div class="flex justify-between items-center mb-4">
                            <span class="text-sm font-semibold text-red-600 bg-red-100 rounded-full px-3 py-1">Départ imminent</span>
                            <span class="text-lg font-semibold font-bold bg-gray-200 rounded-2xl p-2 text-gray-800">{{ $parcour->Prix_Parcour }} DH</span>
                        </div>
                        <div class="flex justify-between items-center mb-4">
                            <div>
                                <div class="text-xs text-gray-500">Départ</div>
                                <div class="text-xl font-bold text-gray-800">{{ \Carbon\Carbon::parse($parcour->time_depart)->format('H:i') }}</div>
                                <div class="text-xs text-gray-500">{{ $parcour->City_depart->name }}</div>
                            </div>
                            <div>
                                <div class="text-xs text-gray-500">Durée</div>
                                <div class="text-lg font-semibold text-gray-800">{{ $parcour->duree }}</div>
                            </div>
                            <div>
                                <div class="text-xs text-gray-500">Arrivée</div>
                                <div class="text-xl font-bold text-gray-800">{{ \Carbon\Carbon::parse($parcour->arrive_time)->format('H:i') }}</div>
                                <div class="text-xs text-gray-500">{{ $parcour->City_arrive->name }}</div>
                            </div>
                        </div>
                        <div class="flex justify-between items-center mb-4">
                            <div class="flex items-center">
                                <svg class="h-6 w-6 text-gray-800 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <!-- Train icon SVG path here -->
                                </svg>
                                <span class="text-xs font-semibold">TL {{ $parcour->City_depart->name }} / {{ $parcour->City_arrive->name }}</span>
                            </div>
                            <div class="text-xs text-gray-500">Direct</div>
                        </div>
                        <div class="flex justify-center">
                            <button class="w-72 bg-purple-600 text-white py-2 text-bold rounded-lg hover:bg-purple-700 hover:text-black focus:outline-none focus:ring-2 focus:ring-purple-600 focus:ring-opacity-50">
                                Réserver
                            </button>
                        </div>

                    </div>
                </div>
            @endforeach
        @else
            <p>No results found.</p>
        @endif
    </div>
    <div class="mt-4">
        {{--  {{ $parcours->links() }}--}}
    </div>
</section>


{{-- secript de carousel --}}

@include('layouts.footer')
</body>
</html>
