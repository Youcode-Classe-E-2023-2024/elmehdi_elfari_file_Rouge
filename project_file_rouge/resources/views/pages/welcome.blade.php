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
<body  class="bg-blueGray-200">
@include('layouts.nav')
<!-- component -->
<link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
<link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">

<div class="relative pt-16 pb-32 flex content-center items-center justify-center min-h-screen-75">
    <div class="absolute top-0 w-full h-full bg-center bg-cover" {{--style="
        background-image: url('https://images.unsplash.com/photo-1557804506-669a67965ba0?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1267&amp;q=80');
      "--}}>
        <img class="w-full h-full"  src="{{ asset('img/14.jpg') }}" alt="Paris">
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
            <polygon class="text-blueGray-200 fill-current" points="2560 0 2560 100 0 100"></polygon>
        </svg>
    </div>
</div>
<!-- Add Category Button -->
{{--<div class="fixed bottom-8 right-8">
    <button onclick="openModal()" class="bg-blue-500 text-white p-4 rounded-full shadow-lg hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300">+ Add Reservation</button>
</div>

<div id="modal" class="fixed inset-0 z-50 flex items-center justify-center hidden">
    <div class="bg-white p-8 max-w-md mx-auto rounded-md shadow-lg">
        <h2 class="text-2xl font-semibold mb-4">Add Parcour</h2>
        <form action="{{ route('Parcours') }}" method="POST">
            @csrf

            <label class="block mb-2">Gare de depart:</label>
            <select id="city" name="depart_id" class="form-select w-full border p-2 mb-4">
                <option value="" selected disabled>Choisissez une ville</option>
                @foreach($cities as $city)
                    <option value="{{ $city->id }}">{{ $city->name }}</option>
                @endforeach
            </select>

            <label class="block mb-2">Gare d'arrivee:</label>
            <select id="city" name="arrive_id" class="form-select w-full border p-2 mb-4">
                <option value="" selected disabled>Choisissez une ville</option>
                @foreach($cities as $city)
                    <option value="{{ $city->id }}">{{ $city->name }}</option>
                @endforeach
            </select>

            <label class="block mb-2">longeur_Parcour:</label>
            <input type="text" name="longeur_Parcour" class="w-full border p-2 mb-4" placeholder="Enter station name" required>

            <label class="block mb-2">Prix_Parcour:</label>
            <input type="text" name="Prix_Parcour" class="w-full border p-2 mb-4" placeholder="Enter station name" required>

            <label class="block mb-2">nbr_place:</label>
            <input type="text" name="nbr_place" class="w-full border p-2 mb-4" placeholder="Enter station name" required>

            <button type="submit" class="bg-blue-500 text-white p-2 rounded-full hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300">Acheter</button>
        </form>
        <button @click="closeModal" class="mt-4 bg-gray-500 text-white p-2 rounded-full hover:bg-gray-600 focus:outline-none focus:ring focus:border-gray-300">ferme</button>
    </div>
</div>

<!-- Add Parcour Modal -->
<div id="modal" class="fixed inset-0 z-50 flex items-center justify-center hidden">
    <div class="bg-white p-8 max-w-md mx-auto rounded-md shadow-lg">
        <h2 class="text-2xl font-semibold mb-4">Add Parcour</h2>
        <form action="{{ route('Parcours') }}" method="POST">
            @csrf

            <select id="depart_city" name="depart_id" class="form-select">
                <option value="" selected disabled>Choisissez une ville</option>
                @foreach($cities as $city)
                    <option value="{{ $city->id }}">{{ $city->name }}</option>
                @endforeach
            </select>

            <select id="arrive_city" name="arrive_id" class="form-select">
                <option value="" selected disabled>Choisissez une ville</option>
                @foreach($cities as $city)
                    <option value="{{ $city->id }}">{{ $city->name }}</option>
                @endforeach
            </select>

            <label class="block mb-2">longeur_Parcour:</label>
            <input type="text" name="longeur_Parcour" class="w-full border p-2 mb-4" placeholder="Enter length of parcour" required>

            <label class="block mb-2">Prix_Parcour:</label>
            <input type="text" name="Prix_Parcour" class="w-full border p-2 mb-4" placeholder="Enter price of parcour" required>

            <label class="block mb-2">nbr_place:</label>
            <input type="text" name="nbr_place" class="w-full border p-2 mb-4" placeholder="Enter number of places" required>

            <button type="submit" class="bg-blue-500 text-white p-2 rounded-full hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300">Save</button>
        </form>
        <button onclick="closeModal()" class="mt-4 bg-gray-500 text-white p-2 rounded-full hover:bg-gray-600 focus:outline-none focus:ring focus:border-gray-300">Close</button>
    </div>
</div>

<!-- Edit Parcour Modal -->
<div id="modal" class="fixed inset-0 z-50 flex items-center justify-center hidden">
    <div class="bg-white p-8 max-w-md mx-auto rounded-md shadow-lg">
        <h2 class="text-2xl font-semibold mb-4">Add Parcour</h2>
        <form id="reservationForm" action="{{ route('Parcours') }}" method="POST">
            @csrf

            <label for="depart_id" class="block mb-2">Départ:</label>
            <select id="depart_id" name="depart_id" class="form-select w-full border p-2 mb-4" onchange="fetchLengthAndPrice()">
                <option value="" selected disabled>Choisissez une ville de départ</option>
                @foreach($cities as $city)
                    <option value="{{ $city->id }}">{{ $city->name }}</option>
                @endforeach
            </select>

            <label for="arrive_id" class="block mb-2">Arrivée:</label>
            <select id="arrive_id" name="arrive_id" class="form-select w-full border p-2 mb-4" onchange="fetchLengthAndPrice()">
                <option value="" selected disabled>Choisissez une ville d'arrivée</option>
                @foreach($cities as $city)
                    <option value="{{ $city->id }}">{{ $city->name }}</option>
                @endforeach
            </select>

            <input type="hidden" id="Prix_id" name="Prix_id">
            <input type="hidden" id="longeur_id" name="longeur_id">

            <label for="nbr_place" class="block mb-2">Nombre de Places:</label>
            <input type="text" id="nbr_place" name="nbr_place" class="w-full border p-2 mb-4" placeholder="Entrez le nombre de places" required>

            <button type="submit" class="bg-blue-500 text-white p-2 rounded-full hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300">Acheter</button>
        </form>

        <button @click="closeModal" class="mt-4 bg-gray-500 text-white p-2 rounded-full hover:bg-gray-600 focus:outline-none focus:ring focus:border-gray-300">Fermer</button>
    </div>
</div>--}}

<section class="pb-10 bg-blueGray-200 ">
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
</section>
<section>
    <div class="sliderAx h-auto mt-20">
        <div id="slider-1" class="container mx-auto">
            <div class="bg-cover bg-center  h-auto text-white py-24 px-10 object-fill" style="background-image: url(https://images.unsplash.com/photo-1544427920-c49ccfb85579?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1422&q=80)">
                <div class="md:w-1/2">
                    <p class="font-bold text-sm uppercase">Services</p>
                    <p class="text-3xl font-bold">Hello world</p>
                    <p class="text-2xl mb-10 leading-none">Carousel with TailwindCSS and jQuery</p>
                    <a href="#" class="bg-purple-800 py-4 px-8 text-white font-bold uppercase text-xs rounded hover:bg-gray-200 hover:text-gray-800">Contact us</a>
                </div>
            </div> <!-- container -->
            <br>
        </div>

        <div id="slider-2" class="container mx-auto">
            <div class="bg-cover bg-top  h-auto text-white py-24 px-10 object-fill" style="background-image: url(https://images.unsplash.com/photo-1544144433-d50aff500b91?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80)">

                <p class="font-bold text-sm uppercase">Services</p>
                <p class="text-3xl font-bold">Hello world</p>
                <p class="text-2xl mb-10 leading-none">Carousel with TailwindCSS and jQuery</p>
                <a href="#" class="bg-purple-800 py-4 px-8 text-white font-bold uppercase text-xs rounded hover:bg-gray-200 hover:text-gray-800">Contact us</a>

            </div> <!-- container -->
        </div>
    </div>
    <div  class="flex justify-between w-12 mx-auto pb-2">
        <button id="sButton1" onclick="sliderButton1()" class="bg-purple-400 rounded-full w-4 pb-2 " ></button>
        <button id="sButton2" onclick="sliderButton2() " class="bg-purple-400 rounded-full w-4 p-2"></button>
    </div>


</section>
    <div class="flex flex-wrap justify-center mx-5">
        <div class="relative my-20 mx-4 flex-wrap text-gray-700 bg-white shadow-md bg-clip-border rounded-xl w-96">
            <!-- Card 1 -->
            <div class="relative h-56 -mt-6 overflow-hidden text-white shadow-lg bg-clip-border rounded-xl bg-blue-gray-500 shadow-blue-gray-500/40">
                <img src="https://images.unsplash.com/photo-1540553016722-983e48a2cd10?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=800&amp;q=80" alt="card-image" />
            </div>
            <div class="p-6">
                <h5 class="block mb-2 font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
                    UI/UX Review Check
                </h5>
                <p class="block font-sans text-base antialiased font-light leading-relaxed text-inherit">
                    The place is close to Barceloneta Beach and bus stop just 2 min by walk
                    and near to "Naviglio" where you can enjoy the main night life in
                    Barcelona.
                </p>
            </div>
            <div class="p-6 pt-0">
                <button class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg bg-gray-900 text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none" type="button">
                    Read More
                </button>
            </div>
        </div>
        <div class="relative my-20 mx-4 flex-wrap text-gray-700 bg-white shadow-md bg-clip-border rounded-xl w-96">
            <!-- Card 1 -->
            <div class="relative h-56 -mt-6 overflow-hidden text-white shadow-lg bg-clip-border rounded-xl bg-blue-gray-500 shadow-blue-gray-500/40">
                <img src="https://images.unsplash.com/photo-1540553016722-983e48a2cd10?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=800&amp;q=80" alt="card-image" />
            </div>
            <div class="p-6">
                <h5 class="block mb-2 font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
                    UI/UX Review Check
                </h5>
                <p class="block font-sans text-base antialiased font-light leading-relaxed text-inherit">
                    The place is close to Barceloneta Beach and bus stop just 2 min by walk
                    and near to "Naviglio" where you can enjoy the main night life in
                    Barcelona.
                </p>
            </div>
            <div class="p-6 pt-0">
                <button class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg bg-gray-900 text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none" type="button">
                    Read More
                </button>
            </div>
        </div>
        <div class="relative my-20 mx-4 flex-wrap text-gray-700 bg-white shadow-md bg-clip-border rounded-xl w-96">
            <!-- Card 1 -->
            <div class="relative h-56 -mt-6 overflow-hidden text-white shadow-lg bg-clip-border rounded-xl bg-blue-gray-500 shadow-blue-gray-500/40">
                <img src="https://images.unsplash.com/photo-1540553016722-983e48a2cd10?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=800&amp;q=80" alt="card-image" />
            </div>
            <div class="p-6">
                <h5 class="block mb-2 font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
                    UI/UX Review Check
                </h5>
                <p class="block font-sans text-base antialiased font-light leading-relaxed text-inherit">
                    The place is close to Barceloneta Beach and bus stop just 2 min by walk
                    and near to "Naviglio" where you can enjoy the main night life in
                    Barcelona.
                </p>
            </div>
            <div class="p-6 pt-0">
                <button class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg bg-gray-900 text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none" type="button">
                    Read More
                </button>
            </div>
        </div>
    </div>

</section>

<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
{{--<script>
    function openModal() {
        document.getElementById('modal').classList.remove('hidden');
    }

    function closeModal() {
        document.getElementById('modal').classList.add('hidden');
    }

    function openEditModal(id, name) {
        document.getElementById('editModal').classList.remove('hidden');
        // Set values for editing
        document.getElementById('editCategoryName').value = name;
        document.getElementById('editCategoryId').value = id;
    }

    function closeEditModal() {
        document.getElementById('editModal').classList.add('hidden');
    }
</script>--}}
{{--
<script>
    function fetchLengthAndPrice() {
        var departId = document.getElementById('depart_id').value;
        var arriveId = document.getElementById('arrive_id').value;

        // You may want to add additional logic here to handle cases where departId or arriveId is not selected

        // Assuming you have a route to fetch length and price IDs based on departId and arriveId
        fetch(`/get-length-and-price?depart_id=${departId}&arrive_id=${arriveId}`)
            .then(response => response.json())
            .then(data => {
                document.getElementById('Prix_id').value = data.prix_id;
                document.getElementById('longeur_id').value = data.longeur_id;
            })
            .catch(error => console.error('Error:', error));
    }
</script>
--}}




<script>
    // Functions to open and close the modal
    function openReservationModal() {
        document.getElementById('reservationModal').style.display = 'block';
        document.body.classList.add('overflow-hidden');
    }

    function closeReservationModal() {
        document.getElementById('reservationModal').style.display = 'none';
        document.body.classList.remove('overflow-hidden');
    }
</script>
<head>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
    <script>
        var cont=0;
        function loopSlider(){
            var xx= setInterval(function(){
                switch(cont)
                {
                    case 0:{
                        $("#slider-1").fadeOut(400);
                        $("#slider-2").delay(400).fadeIn(400);
                        $("#sButton1").removeClass("bg-purple-800");
                        $("#sButton2").addClass("bg-purple-800");
                        cont=1;

                        break;
                    }
                    case 1:
                    {

                        $("#slider-2").fadeOut(400);
                        $("#slider-1").delay(400).fadeIn(400);
                        $("#sButton2").removeClass("bg-purple-800");
                        $("#sButton1").addClass("bg-purple-800");

                        cont=0;

                        break;
                    }


                }},8000);

        }

        function reinitLoop(time){
            clearInterval(xx);
            setTimeout(loopSlider(),time);
        }



        function sliderButton1(){

            $("#slider-2").fadeOut(400);
            $("#slider-1").delay(400).fadeIn(400);
            $("#sButton2").removeClass("bg-purple-800");
            $("#sButton1").addClass("bg-purple-800");
            reinitLoop(4000);
            cont=0

        }

        function sliderButton2(){
            $("#slider-1").fadeOut(400);
            $("#slider-2").delay(400).fadeIn(400);
            $("#sButton1").removeClass("bg-purple-800");
            $("#sButton2").addClass("bg-purple-800");
            reinitLoop(4000);
            cont=1

        }

        $(window).ready(function(){
            $("#slider-2").hide();
            $("#sButton1").addClass("bg-purple-800");


            loopSlider();






        });


    </script>
</head>
@include('layouts.footer')
</body>
</html>
