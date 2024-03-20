<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation Form</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-200">
<button id="openPopup" class="fixed bottom-0 right-0 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full m-8">Réserver</button>

<div id="popupBackground" class="hidden fixed top-0 left-0 w-full h-full bg-black opacity-50"></div>

<div id="popupContainer" class="hidden fixed inset-0 flex items-center justify-center">
    <div class="bg-white rounded-lg p-8 w-96">
        <h2 class="text-lg font-semibold mb-4">Réserver un billet de train</h2>
        <form>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="departure_station">Gare de départ</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="departure_station" type="text" placeholder="Gare de départ">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="arrival_station">Gare d'arrivée</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="arrival_station" type="text" placeholder="Gare d'arrivée">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="departure_date">Départ le</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="departure_date" type="date">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="return_date">Retour le</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="return_date" type="date">
            </div>
            <div class="flex justify-end">
                <button id="closePopup" type="button" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Fermer</button>
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded ml-2 focus:outline-none focus:shadow-outline" type="submit">Réserver</button>
            </div>
        </form>
    </div>
</div>

<script>
    const openPopupBtn = document.getElementById('openPopup');
    const closePopupBtn = document.getElementById('closePopup');
    const popupContainer = document.getElementById('popupContainer');
    const popupBackground = document.getElementById('popupBackground');

    openPopupBtn.addEventListener('click', function() {
        popupContainer.classList.remove('hidden');
        popupBackground.classList.remove('hidden');
    });

    closePopupBtn.addEventListener('click', function() {
        popupContainer.classList.add('hidden');
        popupBackground.classList.add('hidden');
    });
</script>
</body>
</html>
