
@extends('layouts.homeLayout')

@section('title')
Ticket
@endsection

@section('content')
<section>
    <div class="container mx-auto stroke-2 rounded-full flex justify-center mt-40 shadow-lg py-2 px-20 mb-4 h-32 bg-gray-50 w-10/12">
        <form method="GET" action="/search" class="flex justify-between items-center gap-16">
            <div class="flex justify-center w-3/6 gap-5">
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
            <div class="flex justify-between items-center w-full">
                <div>
                    <label class="block text-blue-600 font-bold font-medium mb-2" for="arrival-date">Classes</label>
                    <button id="premier_class" type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-4 rounded-full uppercase font-bold text-sm"
                            >1ère classe</button>
                    <button id="deuxieme_class" type="submit" class="bg-gray-400 hover:bg-gray-600 text-white px-5 py-4 rounded-full uppercase font-bold text-sm"
                            >2ère classe</button>
                </div>

                <div class="mx-auto">
                    <label class="block text-blue-600 font-bold font-medium mb-2" for="arrival-date">VOYAGEURS</label>
                    <div class="relative border-2 px-3 py-1.5 rounded-2xl flex items-center gap-6">
                        <button type="button" id="decrement-button" data-input-counter-decrement="counter-input" class="flex-shrink-0 bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-gray-200 inline-flex items-center justify-center border border-gray-300 rounded-md h-5 w-5 focus:ring-gray-100 dark:focus:ring-gray-700 focus:ring-2 focus:outline-none">
                            <svg class="w-2.5 h-2.5 text-gray-900 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h16"/>
                            </svg>
                        </button>
                        <button type="button" id="increment-button" data-input-counter-increment="counter-input" class="flex-shrink-0 bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-gray-200 inline-flex items-center justify-center border border-gray-300 rounded-md h-5 w-5 focus:ring-gray-100 dark:focus:ring-gray-700 focus:ring-2 focus:outline-none">
                            <svg class="w-2.5 h-2.5 text-gray-900 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="flex gap-6 mt-8">
                    <button type="submit" class="bg-blue-600 hover:bg-blue-700 hover:text-black text-white font-bold px-5 py-3 rounded-full text-lg">
                        search <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>
</section>
<section class="parcours_section">
    <div class="container flex flex-wrap justify-center gap-4 mt-20 mx-auto">
        @forelse($parcours as $parcour)
            <form method="POST" action="{{ route('ticket') }}" class="flex w-7/12 px-3 mb-6">
                @csrf
                <div class="mr-4 flex-grow">
                    <div class="bg-gray-100 rounded-lg shadow-md p-6">
                        <div class="flex justify-between items-center mb-4">
                            <span class="text-sm font-semibold text-red-600 bg-red-100 rounded-full px-3 py-1">Départ imminent</span>
                            <div>
                                <div class="text-xs text-gray-500">depart date</div>
                                <div id="time_depart" class="text-lg text-gray-900">{{ $parcour->depart_date }}</div>
                            </div>
                        </div>
                        <div class="flex justify-between items-center">

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
                            <div class="ml-4 flex-shrink-0">
                                <div>
                                    <p class="font-bold text-xl mb-3">A partir de :</p>
                                    <input type="hidden" id="ticketPriceHidden">
                                    <span class="text-lg ml-5 font-semibold font-bold bg-gray-200 rounded-2xl p-2 text-gray-800" id="ticketPrice" ticketPrice="{{ $parcour->Prix_Parcour }}">{{ $parcour->Prix_Parcour }}</span>MAD
                                </div>
                            </div>
                        </div>
                        <hr class="my-4">
                        <div class="flex justify-between items-center mb-4">
                            <div class="flex justify-center items-center">
                                <span class="flex text-xs font-semibold">
                                    <img src="{{ asset('img/train.png') }}" alt=""> TL <br> {{ $parcour->City_depart->name }}
                                </span>
                            </div>
                            <div class="flex items-center">
                                <span class="flex text-xs font-semibold">
                                    <img src="{{ asset('img/train.png') }}" alt=""> TL <br> {{ $parcour->City_arrive->name }}
                                </span>
                            </div>
                                <div class="flex items-center">
                                    <input type="hidden" id="nbr_place">
                                    <span class="flex items-center text-ms font-bold">
                                        Number de place :{{ $parcour->nbr_place }}
                                    </span>
                                </div>
                        <div>
                    </div>
            </form>
            @auth
                @if (!Auth::user()->isAdmin())
                <form action="{{ route('session', $parcour) }}" method="POST">
                    @csrf
                    <input type="text" name="number_of_reservations" id="counter-input" data-input-counter class="flex-shrink-0 text-gray-900 dark:text-white border-0 bg-transparent text-lg font-normal focus:outline-none focus:ring-0 w-12 text-center" placeholder="" required />
                    <select name="Classes" hidden id="class-selection">
                        <option value="deuxieme">Second Class</option>
                        <option value="premier">Premier Class</option>
                    </select>
                    <input id="depart_date" name="date" hidden type="date">
                    <input type="hidden" name="price" id="priceprice" >

                    <button type="submit" id="checkout-live-button" class="px-6 py-2 rounded-full text-black text-sm tracking-wider font-medium outline-none border-2 border-blue-600 hover:bg-blue-600 hover:text-white transition-all duration-300">Reservation</button>
                </form>
                @else
                    <p class="text-gray-600 dark:text-gray-400">Admins cannot make reservations.</p>
                @endif
            @endauth

    </div>
            </div>
        </div>
    @empty
        <p class="text-center text-xl my-28 text-dark">Aucun parcours disponible actuellement.</p>
    @endforelse
</div>

    <script>
        const ticketPriceHidden = document.getElementById('ticketPriceHidden');
        const ticketPriceElement = document.getElementById('ticketPrice');
        const premierClass = document.getElementById('premier_class');
        const secondClass = document.getElementById('deuxieme_class');
        const counterInput = document.getElementById('counter-input');
        const decrementButton = document.getElementById('decrement-button');
        const incrementButton = document.getElementById('increment-button');
        const classSelection = document.getElementById('class-selection');
        const timeDepart = document.getElementById('time_depart');
        const departTime = document.getElementById('depart_date');
        const pricePrice = document.getElementById('priceprice');

        const initialPrice = parseFloat(ticketPriceElement.textContent);
        let premierClassSelected = false;
        let secondClassSelected = false;

        counterInput.value = 1;
        departTime.value = timeDepart.textContent;
        pricePrice.value = ticketPriceElement.textContent;
        classSelection.value = 'deuxieme';
        function updatePrice() {
            let currentCount = Number(counterInput.value);
            let price = initialPrice;

            if (premierClassSelected) {
                price += 30;
            }

            ticketPriceElement.textContent = (price * currentCount);
            localStorage.setItem('ticketPrice', ticketPriceElement.textContent);
            pricePrice.value = ticketPriceElement.textContent;
        }

        premierClass.addEventListener('click', function(event) {
            event.preventDefault();
            premierClassSelected = true;
            secondClassSelected = false;
            classSelection.value = 'premier';
            updatePrice();

        });

        secondClass.addEventListener('click', function(event) {
            event.preventDefault();
            premierClassSelected = false;
            secondClassSelected = true;
            classSelection.value = 'deuxieme';
            updatePrice();
        });

        incrementButton.addEventListener('click', function(event) {
            event.preventDefault();
            if (counterInput.value < 7) {
                counterInput.value = Number(counterInput.value) + 1;
                updatePrice();
            }
        });

        decrementButton.addEventListener('click', function(event) {
            event.preventDefault();
            if (counterInput.value > 1) {
                counterInput.value = Number(counterInput.value) - 1;
                updatePrice();
            }
        });
    </script>

</section>
@endsection
