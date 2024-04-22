<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
          integrity="sha512-xxxxxx" crossorigin="anonymous"/>

    <title>Document</title>
</head>

<body class="bg-blueGray-600">
@include('layouts.nav')
<link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
<link rel="stylesheet"
      href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">

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
        <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none"
             version="1.1" viewBox="0 0 2560 100" x="0" y="0">
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
                        <div
                            class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-red-400">
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
                        <div
                            class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-lightBlue-400">
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
                        <div
                            class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-emerald-400">
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
    <div class="container mx-auto stroke-2 rounded-full flex justify-center shadow-lg py-2 px-20 mb-4 h-32 bg-gray-50 w-10/12">
        <form method="GET" action="/search" class="flex justify-around items-center gap-20">
            <div class="flex justify-center w-3/6 gap-10">
                <div>
                    <label class="block text-blue-600 font-bold font-medium mb-2" for="departure-date">Départ</label>
                    <select name="depart_id" class="form-select rounded-2xl w-48 border p-3">
                        <option value="" selected disabled>Ville de départ</option>
                        @foreach ($cities as $city)
                            <option value="{{ $city->id }}">{{ $city->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label class="block text-blue-600 font-bold font-medium mb-2" for="arrival-date">Arrivée</label>
                    <select name="arrive_id" class="form-select rounded-2xl w-48 border p-3">
                        <option value="" selected disabled>Ville d'arrivée</option>
                        @foreach ($cities as $city)
                            <option value="{{ $city->id }}">{{ $city->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label class="block text-blue-600 font-bold font-medium mb-2">Date de départ</label>
                    <input name="depart_date" class="form-input rounded-2xl w-48 border p-3" type="date">
                </div>
            </div>
            <div class="flex justify-between items-center w-full mt-8">
                <div class="flex gap-6">
                    <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-4 rounded-full uppercase font-bold text-sm"
                            value="1Class" name="premier_class">1ère classe</button>
                    <button type="submit" class="bg-gray-400 hover:bg-gray-600 text-white px-5 py-4 rounded-full uppercase font-bold text-sm"
                            value="2Class" name="deuxieme_class">2ère classe</button>                </div>
                <div class="w-20 gap-6">
                    <div class="relative flex items-center w-3/12">
                        <button type="button" id="decrement-button" data-input-counter-decrement="bedrooms-input" class="bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-gray-200 border border-gray-300 rounded-s-lg p-3 h-11 focus:ring-gray-100 dark:focus:ring-gray-700 focus:ring-2 focus:outline-none">
                            <svg class="w-3 h-3 text-gray-900 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h16"/>
                            </svg>
                        </button>
                        <input type="text" id="bedrooms-input" data-input-counter data-input-counter-min="1" data-input-counter-max="5" aria-describedby="helper-text-explanation" class="bg-gray-50 border-x-0 border-gray-300 h-11 font-medium text-center text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full pb-6 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" value="3" required/>
                        <button type="button" id="increment-button" data-input-counter-increment="bedrooms-input" class="bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-gray-200 border border-gray-300 rounded-e-lg p-3 h-11 focus:ring-gray-100 dark:focus:ring-gray-700 focus:ring-2 focus:outline-none">
                            <svg class="w-3 h-3 text-gray-900 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                            </svg>
                        </button>
                    </div>
                </div>
                <div>
                    <button type="submit" class="bg-blue-600 hover:bg-blue-700 hover:text-black text-white font-bold px-10 py-2 rounded-full text-lg">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>
</section>

<section class="parcours_section">
    <div class="container flex flex-wrap justify-center justify-center mx-auto">
        @foreach ($parcours as $parcour)
            <div class="flex w-4/12 md:w-1/2 lg:w-1/2 xl:w-1/2 px-3 mb-6">
                <!-- Left side content -->
                <div class="mr-4 flex-grow">
                    <div class="bg-white rounded-lg shadow-md p-6">
                        <div class="flex justify-between items-center mb-4">
                            <span class="text-sm font-semibold text-red-600 bg-red-100 rounded-full px-3 py-1">Départ imminent</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <div>
                                <div class="text-xs text-gray-500">Départ</div>
                                <div
                                    class="text-xl font-bold text-gray-800">{{ \Carbon\Carbon::parse($parcour->time_depart)->format('H:i') }}</div>
                                <div class="text-xs text-gray-500">{{ $parcour->City_depart->name }}</div>
                            </div>
                            <div>
                                <div class="text-xs text-gray-500">Durée</div>
                                <div class="text-lg font-semibold text-gray-800">{{ $parcour->duree }}</div>
                            </div>
                            <div>
                                <div class="text-xs text-gray-500">Arrivée</div>
                                <div
                                    class="text-xl font-bold text-gray-800">{{ \Carbon\Carbon::parse($parcour->arrive_time)->format('H:i') }}</div>
                                <div class="text-xs text-gray-500">{{ $parcour->City_arrive->name }}</div>
                            </div>
                            <div class="ml-4 flex-shrink-0">
                                <div>
                                    <p class="font-bold text-xl mb-3">
                                        A partir de :
                                    </p>
                                    <span class="text-lg ml-5 font-semibold font-bold bg-gray-200 rounded-2xl p-2 text-gray-800">{{ $parcour->Prix_Parcour }}DH</span>
                                </div>
                            </div>
                        </div>
                        <hr class="my-4">
                        <div class="flex justify-between items-center mb-4">
                            <div class="flex justify-center items-center">
                                <span class="flex text-xs font-semibold"> <img src="{{ asset('img/train.png') }}"
                                                                               alt=""> TL <br> {{ $parcour->City_depart->name }} </span>
                            </div>
                            <div class="flex items-center">
                                <span class="flex text-xs font-semibold"> <img src="{{ asset('img/train.png') }}"
                                                                               alt=""> TL <br> {{ $parcour->City_arrive->name }}  </span>
                            </div>

                            <div>
                                <form action="/session" method="POST">
                                    @csrf
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <button type="submit"
                                            class="bg-blue-600 text-bold rounded-lg text-white hover:bg-blue-700 px-5 py-2 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:ring-opacity-50 ...">
                                        Reservation
                                    </button>
                                </form>
                            </div>
                        </div>

                        <div class="flex justify-center mt-4">

                        </div>

                    </div>

                </div>
            </div>

        @endforeach

    </div>

</section>

@include('layouts.footer')
</body>
<script src="{{ asset('js/parcours.js') }}"></script>

</html>
