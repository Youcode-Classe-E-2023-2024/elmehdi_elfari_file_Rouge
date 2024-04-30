<!DOCTYPE html>
<html>
<head>
    <title>Votre Billet de Train</title>
    <style>
        /* Styles for the reservation ticket */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #e1e1e1;
            border-radius: 8px;
            background-color: #f9f9f9;
        }
        .header {
            font-size: 14px;
            color: #f44336;
            background-color: #ffeeee;
            padding: 5px 10px;
            border-radius: 5px;
            text-align: center;
            margin-bottom: 10px;
        }
        .ticket-details {
            display: flex;
            justify-content: space-around;
            margin-bottom: 10px;
        }
        .ticket-details > div {
            flex: 1;
            margin-right: 10px;
        }
        .ticket-details > div:last-child {
            margin-right: 0;
        }
        .ticket-details div p {
            margin: 5px 0;
            font-size: 14px;
        }
        .ticket-price {
            font-size: 18px;
            font-weight: bold;
            color: #333;
            background-color: #e1e1e1;
            padding: 5px 10px;
            border-radius: 5px;
        }
        .route {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }
        .route > span {
            text-align: center;
            font-size: 14px;
        }
        .route img {
            height: 30px;
        }
    </style>
</head>
<body>

<div class="container">

    <!-- Header -->
    <div class="header">
        Départ imminent
    </div>

    <!-- Ticket Details -->
    <div class="ticket-details">
        <div>
            <p>Départ:</p>
            <p><strong>{{ \Carbon\Carbon::parse($parcours->time_depart)->format('H:i') }}</strong></p>
            <p>{{ $parcours->City_depart->name }}</p>
        </div>
        <div>
            <p>Durée:</p>
            <p><strong>{{ $parcours->duree }}</strong></p>
        </div>
        <div>
            <p>Arrivée:</p>
            <p><strong>{{ \Carbon\Carbon::parse($parcours->arrive_time)->format('H:i') }}</strong></p>
            <p>{{ $parcours->City_arrive->name }}</p>
        </div>
        <div>
            <p>Prix:</p>
            <div class="ticket-price">
                <span>{{ $parcours->Prix_Parcour }}</span> MAD
            </div>
        </div>
    </div>

    <!-- Route Information -->
    <div class="route">
        <span>
            <img src="{{ asset('img/train.png') }}" alt="Train Icon">
            <p>TL <br> {{ $parcours->City_depart->name }}</p>
        </span>
        <span>
            <img src="{{ asset('img/train.png') }}" alt="Train Icon">
            <p>TL <br> {{ $parcours->City_arrive->name }}</p>
        </span>
    </div>

</div>

</body>
</html>
