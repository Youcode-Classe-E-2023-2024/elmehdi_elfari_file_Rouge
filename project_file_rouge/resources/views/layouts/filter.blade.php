<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket Booking Form</title>
    <!-- Include Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@latest/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
<div class="container  ">
    <!-- Form Section -->
    <div class="rounded-lg shadow-lg p-8 mb-4 bg-gray-50 mx-auto">
        <form action="{{ route('cities.filter') }}" method="get">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mb-4">
                <!-- Departure Station Input -->
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-medium mb-2" for="departure-station">Gare de départ</label>
                    <select id="city" name="depart_id" class="form-select w-full border p-2 mb-4">
                        <option value="" selected disabled>Choisissez une ville</option>
                        @foreach($cities as $city)
                            <option value="{{ $city->id }}">{{ $city->name }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Arrival Station Input -->
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-medium mb-2" for="arrival-station">Gare de d'arrive</label>
                    <select id="city" name="depart_id" class="form-select w-full border p-2 mb-4">
                        <option value="" selected disabled>Choisissez une ville</option>
                        @foreach($cities as $city)
                            <option value="{{ $city->id }}">{{ $city->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>


            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
                <!-- Departure Date Picker -->
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-medium mb-2" for="departure-date">Departure Date</label>
                    <input class="appearance-none bg-transparent border-b-2 border-purple-600 w-full text-gray-700 py-2 px-2 leading-tight focus:outline-none" type="date" id="departure-date">
                </div>

                <!-- Return Date Picker -->
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-medium mb-2" for="return-date">Return Date</label>
                    <input class="appearance-none bg-transparent border-b-2 border-purple-600 w-full text-gray-700 py-2 px-2 leading-tight focus:outline-none" type="date" id="return-date">
                </div>

                <!-- Travelers Dropdown -->
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-medium mb-2" for="travelers">Travelers</label>
                    <select class="block appearance-none w-full bg-white border border-purple-600 text-gray-700 py-2 px-4 rounded leading-tight focus:outline-none focus:bg-white focus:border-purple-600" id="travelers">
                        <option>1 Adult</option>
                        <!-- Additional options here -->
                    </select>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                <!-- Class Toggle -->
                <div class="mb-4 inline-flex">
                    <button class="bg-purple-600 text-white px-6 py-2 rounded-l-full uppercase font-bold text-sm">1st Class</button>
                    <button class="bg-gray-200 text-gray-700 px-6 py-2 rounded-r-full uppercase font-bold text-sm">2nd Class</button>
                </div>
            </div>

            <!-- Search Button -->
            <div class="flex justify-center mt-6">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full text-lg">Search</button>
            </div>
        </form>
    </div>
</div>
</body>
</html>
