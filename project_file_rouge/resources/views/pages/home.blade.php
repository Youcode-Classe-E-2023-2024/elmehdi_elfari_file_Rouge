@extends('layouts.homeLayout')

@section('title' , 'Home')


@section('content')

<section>
    <div class="relative pt-16 pb-28 flex content-center items-center justify-center min-h-screen-75"
         style="background-image: url('{{ asset('img/14.jpg') }}'); height: 100%; background-attachment: fixed; background-repeat: no-repeat; background-size: cover;">
        <div class="container relative mb-20 mx-auto bg-gray-100 bg-opacity-50 rounded-lg shadow-lg py-8 md:w-1/2">
            <div class="items-center">
                <div class="m-auto text-center">
                    <h1 class="text-black font-semibold text-5xl">
                        Your story starts with us.
                    </h1>
                    <p class="mt-4 text-lg text-blueGray-900">
                        This is a simple example of a Landing Page you can build using Notus JS.
                        <br>It features multiple CSS components based on the Tailwind CSS design
                        <br> system.
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
                <div class="card-content relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
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
                <div class="card-content relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
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
                <div class="card-content relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
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
    <div class="container mx-auto border-2 border-orange-500 rounded-full flex justify-center shadow-lg mb-4 h-32 bg-gray-50 w-7/12">
        <form method="GET" action="/search" class="flex justify-between items-center gap-16">
            <div class="flex justify-between ml-10 w-3/6 gap-10">
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

                <div class="flex mt-8">
                    <button type="submit" class="bg-blue-600 hover:bg-blue-700 hover:text-black text-white font-bold px-5 py-3 rounded-full text-lg">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>
</section>


<section class="flex justify-center items-center">
    <div class="content">
        <div>
            <div class="flex mb-10">
                <h1 class="title1 border-b-2 font-medium border-orange-500">Les promos</h1>
                <h1 class="title2 font-medium"> reKlam</h1>
            </div>
            <p class="text-xl">
                Nos offres exclusives sont disponibles pour une durée limitée. Soyez parmi les <br> premiers à profiter de ces tarifs imbattables.
                Ne manquez pas cette occasion <br> de voyager à prix réduit et réservez dès maintenant pour garantir votre place à train !
            </p>
            <div class=" m-3">
                <a href="{{route('promos')}}"
                   class="botton px-5 py-2">Découvrez les offres >
                </a>
            </div>

        </div>
        <div class="pic-ctn">
            <img src="https://picsum.photos/200/300?t=1" alt="" class="pic">
            <img src="https://picsum.photos/200/300?t=2" alt="" class="pic">
            <img src="https://picsum.photos/200/300?t=3" alt="" class="pic">
            <img src="https://picsum.photos/200/300?t=4" alt="" class="pic">
            <img src="https://picsum.photos/200/300?t=5" alt="" class="pic">
        </div>
    </div>

</section>
<hr class="w-75">
<section class="mt-10">
    <div class="flex w-68 ml-56 gap-20">
        <h1 class="text-3xl font-medium">Réserver en 3 étapes</h1>
        <p class="flex items-center text-xl gap-4"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M5.66699 9.41666L8.16699 11.9167L12.3337 6.91666" stroke="#61B61F" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M9.00033 17.3333C13.6027 17.3333 17.3337 13.6024 17.3337 9C17.3337 4.39762 13.6027 0.666664 9.00033 0.666664C4.39795 0.666664 0.666992 4.39762 0.666992 9C0.666992 13.6024 4.39795 17.3333 9.00033 17.3333Z" stroke="#61B61F"></path>
            </svg>Simple</p>
        <p class="flex items-center text-xl gap-4"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M5.66699 9.41666L8.16699 11.9167L12.3337 6.91666" stroke="#61B61F" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M9.00033 17.3333C13.6027 17.3333 17.3337 13.6024 17.3337 9C17.3337 4.39762 13.6027 0.666664 9.00033 0.666664C4.39795 0.666664 0.666992 4.39762 0.666992 9C0.666992 13.6024 4.39795 17.3333 9.00033 17.3333Z" stroke="#61B61F"></path>
            </svg>Rapide</p>
        <p class="flex items-center text-xl gap-4"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M5.66699 9.41666L8.16699 11.9167L12.3337 6.91666" stroke="#61B61F" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M9.00033 17.3333C13.6027 17.3333 17.3337 13.6024 17.3337 9C17.3337 4.39762 13.6027 0.666664 9.00033 0.666664C4.39795 0.666664 0.666992 4.39762 0.666992 9C0.666992 13.6024 4.39795 17.3333 9.00033 17.3333Z" stroke="#61B61F"></path>
            </svg>Sécurisé</p>
    </div>
    <div class="my-10 ml-56">
        <p class="text-xl">Grâce à notre plateforme de réservation en ligne, réservez votre ticket de Train n'a jamais été aussi facile.</p>
    </div>
    <div class="flex justify-around my-20">
        <div class="flex flex-col justify-center items-center gap-3">
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
            <div >
                <p class="text-lg text-center">Trouvez l'offre qui vous convient et <br> sélectionnez les sièges de votre choix.</p>
            </div>
        </div>
        <div class="flex flex-col justify-center items-center gap-3">
            <div class="flex items-center gap-3">
                <div class="flex items-center justify-center w-14 h-14 rounded-full bg-gray-900 border-2 border-gray-300">
                    <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" viewBox="0 0 24 24">
                        <path fill="white" fill-rule="evenodd" d="M16 4H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a1 1 0 1 1 2 0h2a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-2a1 1 0 1 1-2 0zm1 5.001a1 1 0 0 0 1-1V8a1 1 0 1 0-2 0v.001a1 1 0 0 0 1 1zm1 3a1 1 0 1 1-2 0V12a1 1 0 1 1 2 0v.001zm-1 5a1 1 0 0 0 1-1V16a1 1 0 1 0-2 0v.001a1 1 0 0 0 1 1zm-3.168-7.446a1 1 0 0 0-1.664-1.11L8.845 13.43l-1.138-1.137a1 1 0 0 0-1.414 1.414l2 2a1 1 0 0 0 1.54-.152l4-6z" clip-rule="evenodd"></path>
                    </svg>
                </div>
                <div>
                    <p class="text-lg">Etape 2</p>
                    <h1 class="text-xl font-bold">Réserver</h1>
                </div>
            </div>
            <div>
                <p class="text-lg text-center">Choisissez parmi nos différents moyens de <br> paiements (par carte ou espèces) et payer en
                    <br> toute sécurité. Vous recevrez une confirmation
                    <br> de votre réservation par e-mail.</p>
            </div>
        </div>
        <div class="flex flex-col justify-center items-center gap-3">
            <div class="flex items-center gap-3">
                <div class="flex items-center justify-center w-14 h-14 rounded-full bg-gray-900 border-2 border-gray-300">
                    <svg class="rtl:-scale-x-100 ltr:scale-x-100" xmlns="http://www.w3.org/2000/svg" width="27" height="27" viewBox="0 0 576 512">
                        <path fill="white" d="M432 96a48 48 0 1 0 0-96a48 48 0 1 0 0 96zm-84.3 104.5c1-.4 1.9-.8 2.9-1.2l-16.9 63.5c-5.6 21.1-.1 43.6 14.7 59.7l70.7 77.1l22 88.1c4.3 17.1 21.7 27.6 38.8 23.3s27.6-21.7 23.3-38.8l-23-92.1c-1.9-7.8-5.8-14.9-11.2-20.8l-49.5-54l19.3-65.5l9.6 23c4.4 10.6 12.5 19.3 22.8 24.5l26.7 13.3c15.8 7.9 35 1.5 42.9-14.3s1.5-35-14.3-42.9L505 232.7l-15.3-36.8c-17.2-41.1-57.4-67.9-102-67.9c-22.8 0-45.3 4.8-66.1 14l-8 3.5c-32.9 14.6-58.1 42.4-69.4 76.5l-2.6 7.8c-5.6 16.8 3.5 34.9 20.2 40.5s34.9-3.5 40.5-20.2l2.6-7.8c5.7-17.1 18.3-30.9 34.7-38.2l8-3.5zm-30 135.1l-25 62.4l-59.4 59.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l61.7-61.7c4.6-4.6 8.2-10.1 10.6-16.1l14.5-36.2l-40.7-44.4c-2.5-2.7-4.8-5.6-7-8.6zM256 274.1c-7.7-4.4-17.4-1.8-21.9 5.9l-32 55.4l-54.4-31.4c-15.3-8.8-34.9-3.6-43.7 11.7L40 426.6c-8.8 15.3-3.6 34.9 11.7 43.7l55.4 32c15.3 8.8 34.9 3.6 43.7-11.7l64-110.9c1.5-2.6 2.6-5.2 3.3-8l43.8-75.7c4.4-7.7 1.8-17.4-5.9-21.9z"></path>
                    </svg>
                </div>
                <div>
                    <p class="text-lg">Etape 3</p>
                    <h1 class="text-xl font-bold">Embarquer</h1>
                </div>
            </div>
            <div>
                <p class="text-lg text-center">Rendez-vous à l’adresse de départ avec votre <br> code du ticket, présentez le à l'embarquement
                    <br> et montez à bord du bus en toute tranquillité.</p>
            </div>
        </div>
    </div>
</section>

@endsection


