<!DOCTYPE html>
<html>
<head>
    <title>Votre Billet de Train</title>
</head>
<body>

<div class="container">
    <!-- Header -->
    <div class="header">
        Départ imminent
    </div>

    <!-- Ticket Details -->
    <div class="ticket-details">
        <!-- Departure Information -->
        <ul>
            <li>Départ</li>
            <li><strong>{{ \Carbon\Carbon::parse($reservations->Parcours->time_depart)->format('H:i') }}</strong></li>
            <li>{{ $reservations->Parcours->City_depart->name }}</li>
        </ul>

        <!-- Duration -->
        <ul>
            <li>Durée</li>
            <li><strong>{{ $reservations->Parcours->duree }}</strong></li>
        </ul>

        <!-- Arrival Information -->
        <ul>
            <li>Arrivée</li>
            <li><strong>{{ \Carbon\Carbon::parse($reservations->Parcours->arrive_time )->format('H:i') }}</strong></li>
            <li>{{ $reservations->Parcours->City_arrive->name }}</li>
        </ul>
    </div>

    <!-- Ticket Price -->
    <ul class="ticket-price">
        <li><strong>{{ $reservations->price }}</strong> MAD</li>
    </ul>

    <!-- Route Information -->
    <ul class="route">
        <li>
            <p>TL<br>{{ $reservations->Parcours->City_depart->name }}</p>
        </li>
        <li>
            <p>TL<br>{{ $reservations->Parcours->City_arrive->name }}</p>
        </li>
    </ul>
</div>

</body>
</html>
