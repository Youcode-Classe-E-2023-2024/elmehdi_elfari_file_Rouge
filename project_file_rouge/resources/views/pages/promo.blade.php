@extends('layouts.promo')

@section('title' , 'Promos')

@section('content')


    <div class=" grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 my-32">
        @forelse($Promos as $Promo)
            <a href=" {{ route('ticket.Promos' , $Promo->id) }}" class="block mx-auto max-w-sm mb-10 p-6 bg-gray-100 border border-gray-400 rounded-lg shadow-lg transition-transform duration-300 transform-gpu hover:scale-105 ">
                <svg xmlns="http://www.w3.org/2000/svg" width="350" height="150">

                    <text x="175" y="30" font-family="Arial" font-size="16" font-weight="bold" text-anchor="middle"
                          stroke="orange" stroke-width="1"
                    >
                        {{$Promo->parcours ->City_depart->name}} >>> {{$Promo->parcours->City_arrive->name}}
                    </text>
                    <text x="280" y="100" font-family="Arial" font-size="14" font-weight="bold" fill="#FF4500">{{ $Promo->Prix_Parcour }} MAD</text>
                    <text x="25" y="100" font-family="Arial" font-size="14">Date: {{ $Promo->depart_date }}</text>
                    <text x="25" y="120" font-family="Arial" font-size="14">Time: {{ \Carbon\Carbon::parse($Promo->time_depart)->format('H:i') }}</text>

                </svg>

            </a>
        @empty
            <div class="mb-10 mx-auto">
                <h1>NO PROMOS</h1>
            </div>

        @endforelse
    </div>






@endsection
