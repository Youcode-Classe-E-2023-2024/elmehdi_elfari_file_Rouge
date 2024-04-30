@extends('layouts.homeLayout')

@section('title' , 'Home')


@section('content')

<section>
    <div class="relative pt-16 pb-28 flex content-center items-center justify-center min-h-screen-75"
         style="background-image: url('{{ asset('img/14.jpg') }}'); background-attachment: fixed; background-repeat: no-repeat; background-size: cover; background-position: center;">
        <div class="container relative mb-20 mx-auto bg-gray-100 bg-opacity-75 rounded-lg shadow-lg py-8 w-11/12 md:w-1/2">
            <div class="flex items-center justify-center text-center">
                <div class="m-auto">
                    <h1 class="text-black font-semibold text-3xl md:text-5xl">
                        Your story starts with us.
                    </h1>
                    <p class="mt-4 text-base md:text-lg text-blueGray-900">
                        This is a simple example of a Landing Page you can build using Notus JS.
                        <br class="hidden md:block" /> It features multiple CSS components based on the Tailwind CSS design
                        <br class="hidden md:block" /> system.
                    </p>
                </div>
            </div>
        </div>

        <div class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden h-70-px"
             style="transform: translateZ(0px)">
            <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none"
                 version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                <polygon class="text-white fill-current" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
    </div>
    <hr>
</section>

<section class="pb-10 bg-white">
    <div class="container mx-auto px-8">
        <div class="flex flex-wrap justify-center">
            <div class="card w-full md:w-4/12 px-4 text-center">
                <div class="card-content relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg h-100">
                    <div class="card-body px-2 py-5 flex-auto">
                        <div class="icon-container text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-red-400">
                            <i class="fas fa-award"></i>
                        </div>
                        <h6 class="card-title text-xl font-semibold">Awarded Agency</h6>
                        <p class="card-text mt-2 mb-4 text-blueGray-500">
                            Divide details about your product or agency work into parts. A paragraph describing a feature will be enough.
                        </p>
                    </div>
                </div>
            </div>
            <div class="card w-full md:w-4/12 px-4 text-center">
                <div class="card-content relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg h-100">
                    <div class="card-body px-4 py-5 flex-auto">
                        <div class="icon-container text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-lightBlue-400">
                            <i class="fas fa-retweet"></i>
                        </div>
                        <h6 class="card-title text-xl font-semibold">Free Revisions</h6>
                        <p class="card-text mt-2 mb-4 text-blueGray-500">
                            Keep your user engaged by providing meaningful information. Remember that by this time, the user is curious.
                        </p>
                    </div>
                </div>
            </div>
            <div class="card w-full md:w-4/12 px-4 text-center">
                <div class="card-content relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg h-100">
                    <div class="card-body px-4 py-5 flex-auto">
                        <div class="icon-container text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-emerald-400">
                            <i class="fas fa-fingerprint"></i>
                        </div>
                        <h6 class="card-title text-xl font-semibold">Verified Company</h6>
                        <p class="card-text mt-2 mb-4 text-blueGray-500">
                            Write a few lines about each one. A paragraph describing a feature will be enough. Keep your user engaged!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container mx-auto border-2 border-orange-500 rounded-2xl flex flex-col md:flex-row justify-center shadow-lg mb-4 h-auto md:h-32 bg-gray-50 w-11/12 md:w-7/12">
        <form method="GET" action="/search" class="flex flex-col md:flex-row justify-between items-center gap-4 md:gap-16 p-4">
            <div class="flex flex-col md:flex-row justify-between md:ml-10 w-full md:w-3/6 gap-4 md:gap-10">
                <div class="flex flex-col w-full">
                    <label class="block text-blue-600 font-bold font-medium mb-2" for="departure-date">Départ</label>
                    <select name="depart_id" class="form-select rounded-2xl w-full md:w-48 border p-3">
                        <option value="" selected disabled>Ville de départ</option>
                        @foreach ($cities as $city)
                            <option value="{{ $city->id }}">{{ $city->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="flex flex-col w-full">
                    <label class="block text-blue-600 font-bold font-medium mb-2" for="arrival-date">Arrivée</label>
                    <select name="arrive_id" class="form-select rounded-2xl w-full md:w-48 border p-3">
                        <option value="" selected disabled>Ville d'arrivée</option>
                        @foreach ($cities as $city)
                            <option value="{{ $city->id }}">{{ $city->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="flex flex-col w-full">
                    <label class="block text-blue-600 font-bold font-medium mb-2">Date de départ</label>
                    <input name="depart_date" class="form-input rounded-2xl w-full md:w-48 border p-3" type="date">
                </div>
            </div>

            <div class="flex mt-4 md:mt-0 md:ml-4">
                <button type="submit" class="bg-blue-600 hover:bg-blue-700 hover:text-black mt-4 text-white font-bold px-5 py-3 rounded-full text-lg">
                   search  <i class="fas fa-search"></i>
                </button>
            </div>
        </form>
    </div>
</section>

<section class="container mx-auto flex flex-col items-center md:flex-row justify-center py-4">
    <div class="content md:w-1/2 px-4 md:px-0 md:pr-4 mb-6 md:mb-0">
        <div>
            <div class="flex flex-col md:flex-row mb-4">
                <h1 class="title1 text-3xl md:text-4xl border-b-2 font-bold border-orange-500 mb-2 md:mb-0 md:mr-2">Les promos</h1>
                <h1 class="title2 text-3xl md:text-4xl font-bold">reKlam</h1>
            </div>
            <p class="text-base md:text-xl text-center md:text-left">
                Nos offres exclusives sont disponibles pour une durée limitée. Soyez parmi les
                <br class="hidden md:block" /> premiers à profiter de ces tarifs imbattables.
                <br class="hidden md:block" /> Ne manquez pas cette occasion de voyager à prix réduit et
                <br class="hidden md:block" /> réservez dès maintenant pour garantir votre place à train !
            </p>
            <div class="my-4 text-center md:text-left">
                <a href="{{route('promos')}}"
                   class="button px-4 py-2 bg-orange-500 text-white rounded-full">Découvrez les offres >
                </a>
            </div>
        </div>
    </div>
    <div class="pic-ctn grid grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-4 md:w-1/2 md:ml-4">
        <img src="https://picsum.photos/200/300?t=1" alt="Image 1" class="pic w-full h-auto rounded-md">
        <img src="https://picsum.photos/200/300?t=2" alt="Image 2" class="pic w-full h-auto rounded-md">
        <img src="https://picsum.photos/200/300?t=3" alt="Image 3" class="pic w-full h-auto rounded-md">
        <img src="https://picsum.photos/200/300?t=4" alt="Image 4" class="pic w-full h-auto rounded-md">
        <img src="https://picsum.photos/200/300?t=5" alt="Image 5" class="pic w-full h-auto rounded-md">
    </div>
</section>

<hr class="w-75 my-10">

<section class="container mt-10 px-4 mx-auto">
    <div class="flex flex-col items-center md:items-start md:ml-16 md:flex-row gap-10">
        <h1 class="text-2xl md:text-3xl font-medium">Réserver en 3 étapes</h1>
        <div class="flex flex-col md:flex-row gap-4">
            <p class="flex items-center text-lg md:text-xl gap-2 md:gap-4"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.66699 9.41666L8.16699 11.9167L12.3337 6.91666" stroke="#61B61F" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M9.00033 17.3333C13.6027 17.3333 17.3337 13.6024 17.3337 9C17.3337 4.39762 13.6027 0.666664 9.00033 0.666664C4.39795 0.666664 0.666992 4.39762 0.666992 9C0.666992 13.6024 4.39795 17.3333 9.00033 17.3333Z" stroke="#61B61F"></path>
                </svg>Simple</p>
            <p class="flex items-center text-lg md:text-xl gap-2 md:gap-4"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.66699 9.41666L8.16699 11.9167L12.3337 6.91666" stroke="#61B61F" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M9.00033 17.3333C13.6027 17.3333 17.3337 13.6024 17.3337 9C17.3337 4.39762 13.6027 0.666664 9.00033 0.666664C4.39795 0.666664 0.666992 4.39762 0.666992 9C0.666992 13.6024 4.39795 17.3333 9.00033 17.3333Z" stroke="#61B61F"></path>
                </svg>Rapide</p>
            <p class="flex items-center text-lg md:text-xl gap-2 md:gap-4"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.66699 9.41666L8.16699 11.9167L12.3337 6.91666" stroke="#61B61F" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M9.00033 17.3333C13.6027 17.3333 17.3337 13.6024 17.3337 9C17.3337 4.39762 13.6027 0.666664 9.00033 0.666664C4.39795 0.666664 0.666992 4.39762 0.666992 9C0.666992 13.6024 4.39795 17.3333 9.00033 17.3333Z" stroke="#61B61F"></path>
                </svg>Sécurisé</p>
        </div>
    </div>
    <div class="my-8 text-center md:text-left md:ml-16">
        <p class="text-lg text-bold md:text-xl">Grâce à notre plateforme de réservation en ligne, réservez votre ticket de Train n'a jamais été aussi facile.</p>
    </div>
    <div class="flex flex-col gap-8 md:flex-row md:justify-around md:gap-16 my-20">
        <div class="flex flex-col items-center gap-3">
            <div class="flex items-center gap-3">
                <div class="flex items-center justify-center w-14 h-14 rounded-full bg-gray-900 border-2 border-gray-300">
                    <svg xmlns="http://www.w3.org/2000/svg" width="27" height="30" viewBox="0 0 24 24">
                        <path fill="white" d="M10 5c-4.42 0-8 .5-8 4v10c0 .85.37 1.66 1 2.22V23c0 .55.45 1 1 1h1c.55 0 1-.45 1-1v-1h8v1c0 .55.45 1 1 1h1c.55 0 1-.45 1-1v-1.78c.63-.56 1-1.37 1-2.22V9c0-3.5-3.58-4-8-4M5.5 20c-.83 0-1.5-.67-1.5-1.5S4.67 17 5.5 17s1.5.67 1.5 1.5S6.33 20 5.5 20m9 0c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5s1.5.67 1.5 1.5s-.67 1.5-1.5 1.5m1.5-6H4V9h12v5m6-9v10c0 .85-.37 1.66-1 2.22V19c0 .55-.45 1-1 1h-.12c.07-.32.12-.65.12-1V9c0-6-7-6-10-6c-.91 0-2.2 0-3.54.17C7.55 1.32 10.5 1 14 1c4.42 0 8 .5 8 4Z"></path>
                    </svg>
                </div>
                <div>
                    <p class="text-lg">Etape 1</p>
                    <h1 class="text-xl font-bold">Choisir</h1>
                </div>
            </div>
            <div>
                <p class="text-center text-lg md:text-xl">Trouvez l'offre qui vous convient et sélectionnez <br> les sièges de votre choix.</p>
            </div>
        </div>
        <div class="flex flex-col items-center gap-3">
            <div class="flex items-center gap-3">
                <div class="flex items-center justify-center w-14 h-14 rounded-full bg-gray-900 border-2 border-gray-300">
                    <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" viewBox="0 0 24 24">
                        <path fill="white" fill-rule="evenodd" d="M16 4H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a1 1 0 1 1 2 0h2a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-2a1 1 0 1 1-2 0zm1 5.001a1 1 0 0 0 1-1V8a1 1 0 1 0-2 0v.001a1 1 0 0 0 1 1zm1 3a1 1 0 1 1-2 0V12a1 1 0 1 1 2 0v.001zm0 3.998a1 1 0 1 1-2 0V16a1 1 0 1 1 2 0v.999zM16 8.001a2 2 0 1 1 0-4.001 2 2 0 0 1 0 4zM4 2h8a1 1 0 1 1 0 2H4a1 1 0 1 1 0-2zm8 14.998H4a1 1 0 1 1 0-2h8a1 1 0 0 1 0 2zm1.367-1.498h3.367a2 2 0 0 0 1.25-.5l.111-.122a1 1 0 0 0-.113-1.359l-.081-.078a1.5 1.5 0 0 0-.166-.14l-3.49-2.833a.5.5 0 0 0-.66 0l-1.387 1.13a.5.5 0 0 0 .117.81l.124.094a1 1 0 0 1 .41.78zM4.5 12.5a.5.5 0 0 1-.5-.5V9.5a.5.5 0 0 1 .5-.5h1a.5.5 0 1 1 0 1h-.5v2.5a.5.5 0 0 1-.5.5zM8.5 12.5a.5.5 0 0 1-.5-.5V9.5a.5.5 0 0 1 .5-.5h1a.5.5 0 1 1 0 1h-.5v2.5a.5.5 0 0 1-.5.5zM13 12.5a.5.5 0 0 1-.5-.5V9.5a.5.5 0 0 1 .5-.5h1a.5.5 0 1 1 0 1h-.5v2.5a.5.5 0 0 1-.5.5z"></path>
                    </svg>
                </div>
                <div>
                    <p class="text-lg">Etape 2</p>
                    <h1 class="text-xl font-bold">Payer</h1>
                </div>
            </div>
            <div>
                <p class="text-center text-lg md:text-xl">Procédez au paiement de votre ticket en toute sécurité <br> avec les moyens de paiement acceptés.</p>
            </div>
        </div>
        <div class="flex flex-col items-center gap-3">
            <div class="flex items-center gap-3">
                <div class="flex items-center justify-center w-14 h-14 rounded-full bg-gray-900 border-2 border-gray-300">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="white" class="bi bi-ticket" viewBox="0 0 16 16">
                        <path d="M0 4.5A1.5 1.5 0 0 1 1.5 3h13A1.5 1.5 0 0 1 16 4.5V6a.5.5 0 0 1-.5.5 1.5 1.5 0 0 0 0 3 .5.5 0 0 1 .5.5v1.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 11.5V10a.5.5 0 0 1 .5-.5 1.5 1.5 0 1 0 0-3A.5.5 0 0 1 0 6zM1.5 4a.5.5 0 0 0-.5.5v1.05a2.5 2.5 0 0 1 0 4.9v1.05a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-1.05a2.5 2.5 0 0 1 0-4.9V4.5a.5.5 0 0 0-.5-.5z"/>
                    </svg>
                </div>
                <div>
                    <p class="text-lg">Etape 3</p>
                    <h1 class="text-xl font-bold">Voyager</h1>
                </div>
            </div>
            <div>
                <p class="text-center text-lg md:text-xl">Montez à bord de votre train et profitez <br> de votre voyage sereinement.</p>
            </div>
        </div>
    </div>
</section>



@endsection


