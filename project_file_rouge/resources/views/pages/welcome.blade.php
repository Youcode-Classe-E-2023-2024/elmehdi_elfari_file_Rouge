<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <title>Document</title>
</head>

<body class="bg-blueGray-600">
@include('layouts.nav')
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
<link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">

<div class="relative pt-16 pb-32 flex content-center items-center justify-center min-h-screen-75"
     style="background-image: url('{{ asset('img/14.jpg') }}'); height: 100%; background-attachment: fixed; background-repeat: no-repeat; background-size: cover;">
    <div class="container relative mb-20 mx-auto bg-gray-50 bg-opacity-50 rounded-lg shadow-lg p-8 md:w-1/2">
        <div class="items-center">
            <div class="m-auto text-center">
                <h1 class="text-black-50 font-semibold text-5xl">
                    Your story starts with us.
                </h1>
                <p class="mt-4 text-lg text-blueGray-900">
                    This is a simple example of a Landing Page you can build using Notus JS.
                    <br>It features multiple CSS components based on the Tailwind CSS design <br> system.
                </p>
            </div>
        </div>
    </div>
    <div class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden h-70-px"
         style="transform: translateZ(0px)">
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
    <div class="container mx-auto stroke-2 rounded-full shadow-lg py-2 px-20 mb-4 bg-gray-50 md:w-full">
        <form method="GET" action='/search' class="flex justify-between gap-8">
            <div class="flex w-3/6 gap-10 mt-5">
                <div>
                    <label class="block text-blue-600 text-bold font-medium mb-2" for="departure-date">DÉPART</label>
                        <select name="depart_id" class="form-select  rounded-2xl w-full border p-3 mb-4 mr-10">
                        <option value="" selected disabled>Ville de départ</option>
                        @foreach($cities as $city)
                            <option value="{{ $city->id }}">{{ $city->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label class="block text-blue-600 text-bold font-medium mb-2" for="departure-date">ARRIVÉE</label>
                    <select name="arrive_id" class="form-select rounded-2xl w-full border p-3 mb-4 mr-10">
                        <option value="" selected disabled>Ville d'arrivée</option>
                        @foreach($cities as $city)
                            <option value="{{ $city->id }}">{{ $city->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="flex w-3/6 gap-10 mt-5">
                <div class=" mb-4">
                    <label class="block text-blue-600 text-bold font-medium mb-2" for="departure-date">Departure Date</label>
                    <input name="start_date" class="appearance-none rounded-2xl p-3 w-full focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="date" id="departure-date">
                </div>
                <!-- Return Date Picker -->
                <div class=" mb-4">
                    <label class="block text-blue-600 text-bold font-medium mb-2" for="return-date">Return Date</label>
                    <input name="end_date" class="appearance-none rounded-2xl w-full p-3 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="date" id="return-date">
                </div>
            </div>
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
            <!-- Search Button -->
            <div class="flex m-auto">
                <button type="submit" class="bg-blue-600 hover:bg-blue-700 hover:text-black text-white font-bold px-20 py-2 rounded-full text-lg">Recherche<i class="fas fa-search"></i></button>
            </div>

        </form>

    </div>
</section>

<section class="relative overflow-hidden">
    <div class="carousel relative overflow-hidden w-full">
        <div class="carousel-inner relative">
            <input class="carousel-open hidden" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="" checked="checked">
            <div class="carousel-item absolute opacity-0" style="height:50vh;">
                <img src="img/123.jpg" class="block w-full" alt="First slide">
            </div>
            <input class="carousel-open hidden" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
            <div class="carousel-item absolute opacity-0" style="height:50vh;">
                <img src="img/213.jpg" class="block w-full" alt="Second slide">
            </div>
            <input class="carousel-open hidden" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">
            <div class="carousel-item absolute opacity-0" style="height:50vh;">
                <img src="img/321.jpg" class="block w-full" alt="Third slide">
            </div>

            <label for="carousel-3" class="prev control-1 absolute left-0 bottom-0 w-16 h-16 bg-white rounded-full text-4xl">&lsaquo;</label>
            <label for="carousel-2" class="next control-1 absolute right-0 bottom-0 w-16 h-16 bg-white rounded-full text-4xl">&rsaquo;</label>

            <label for="carousel-2" class="prev control-2 absolute left-0 bottom-0 w-16 h-16 bg-white rounded-full text-4xl">&lsaquo;</label>
            <label for="carousel-1" class="next control-2 absolute right-0 bottom-0 w-16 h-16 bg-white rounded-full text-4xl">&rsaquo;</label>

            <label for="carousel-1" class="prev control-3 absolute left-0 bottom-0 w-16 h-16 bg-white rounded-full text-4xl">&lsaquo;</label>
            <label for="carousel-3" class="next control-3 absolute right-0 bottom-0 w-16 h-16 bg-white rounded-full text-4xl">&rsaquo;</label>
        </div>
    </div>
</section>

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
                        <div class="mx-auto mt-4">
                            <form action="/session" method="POST">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <button type="submit" class="bg-purple-600 text-bold rounded-lg text-white hover:bg-purple-700 p-2 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:ring-opacity-50 ...">
                                    Reservation
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <p>No results found.</p>
        @endif
    </div>

</section>


{{-- secript de carousel --}}

@include('layouts.footer')
</body>
</html>
