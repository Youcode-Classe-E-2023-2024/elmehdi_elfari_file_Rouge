<!DOCTYPE html>
<html>
<head>
    <title>Your Train Ticket</title>
</head>
<body>


<div class="container flex flex-wrap justify-center gap-4 mt-20 mx-auto">

    <div class="mr-4 flex-grow">
        <div class="bg-gray-100 rounded-lg shadow-md p-6">
            <div class="flex justify-between items-center mb-4">
                <span class="text-sm font-semibold text-red-600 bg-red-100 rounded-full px-3 py-1">Départ imminent</span>
            </div>
            <div class="flex justify-between items-center">
                <div>
                    <div class="text-xs text-gray-500">Départ</div>
                    <div class="text-xl font-bold text-gray-800">{{--{{ \Carbon\Carbon::parse($parcours->time_depart)->format('H:i') }}--}}</div>
                    <div class="text-xs text-gray-500">{{--{{ $parcours->City_depart->name }}--}}</div>
                </div>
                <div>
                    <div class="text-xs text-gray-500">Durée</div>
                    <div class="text-lg font-semibold text-gray-800">{{--{{ $parcours->duree }}--}}</div>
                </div>
                <div>
                    <div class="text-xs text-gray-500">Arrivée</div>
                    <div class="text-xl font-bold text-gray-800">{{--{{ \Carbon\Carbon::parse($parcours->arrive_time)->format('H:i') }}--}}</div>
                    <div class="text-xs text-gray-500">{{--{{ $parcours->City_arrive->name }}--}}</div>
                </div>
                <div class="ml-4 flex-shrink-0">
                    <div>
                        <p class="font-bold text-xl mb-3">Prix :</p>
                        <input type="hidden" id="ticketPriceHidden">
                        <span class="text-lg ml-5 font-semibold font-bold bg-gray-200 rounded-2xl p-2 text-gray-800" id="ticketPrice" >{{--{{ $parcours->Prix_Parcour }}--}}</span>MAD
                    </div>
                </div>
            </div>
            <hr class="my-4">
            <div class="flex justify-between items-center mb-4">
                <div class="flex justify-center items-center">
                    <span class="flex text-xs font-semibold">
                        <img src="{{ asset('img/train.png') }}" alt=""> TL <br> {{--{{ $parcours->City_depart->name }}--}}
                    </span>
                </div>
                <div class="flex items-center">
                    <span class="flex text-xs font-semibold">
                        <img src="{{ asset('img/train.png') }}" alt=""> TL <br> {{--{{ $parcours->City_arrive->name }}--}}
                    </span>
                </div>
            </div>
        </div>
    </div>

</div>


</body>
</html>
