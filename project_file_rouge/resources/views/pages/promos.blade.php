<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Promos List</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
<div class="min-h-screen bg-gray-50/50">
    @include('layouts.side')


    <!-- Main content -->
    <div class="p-4 xl:ml-80">
        <nav
            class="block w-full max-w-full bg-transparent text-white shadow-none rounded-xl transition-all px-0 py-1">
            <div class="flex flex-col-reverse justify-between gap-6 md:flex-row md:items-center">
                <div class="capitalize">
                    <nav aria-label="breadcrumb" class="w-max">
                        <ol
                            class="flex flex-wrap items-center w-full bg-opacity-60 rounded-md bg-transparent p-0 transition-all">
                            <li
                                class="flex items-center text-blue-gray-900 antialiased font-sans text-sm font-normal leading-normal cursor-pointer transition-colors duration-300 hover:text-light-blue-500">
                                <a href="#">
                                    <p
                                        class="block antialiased font-sans text-sm leading-normal text-blue-900 font-normal opacity-50 transition-all hover:text-blue-500 hover:opacity-100">
                                        dashboard</p>
                                </a>
                                <span
                                    class="text-gray-500 text-sm antialiased font-sans font-normal leading-normal mx-2 pointer-events-none select-none">/</span>
                            </li>
                            <li
                                class="flex items-center text-blue-900 antialiased font-sans text-sm font-normal leading-normal cursor-pointer transition-colors duration-300 hover:text-blue-500">
                                <p
                                    class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal">
                                    home</p>
                            </li>
                        </ol>
                    </nav>
                    <h6
                        class="block antialiased tracking-normal font-sans text-base font-semibold leading-relaxed text-gray-900">
                        home</h6>
                </div>
            </div>
        </nav>
        @if ($errors->any())
            <div class="container bg-red-100 text-red-800  pl-4 pr-10 py-4 rounded-md relative" role="alert">
                <strong class="font-bold text-base">Error!</strong>
                <div class="block text-sm sm:inline max-sm:mt-1 max-sm:ml-0 mx-4">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif

        <div class="max-w-8xl mt-8 mx-auto bg-white p-6 rounded-lg shadow-md">
            <h1 class="text-2xl font-semibold mb-4">Promos List</h1>

            <table class="min-w-full border border-gray-300">
                <thead>
                <tr>
                    <th class="border-b p-2">ID</th>
                    <th class="border-b p-2">Care_depart</th>
                    <th class="border-b p-2">Gare_arrive</th>
                    <th class="border-b p-2">distance_Parcour</th>
                    <th class="border-b p-2">Prix_Parcour</th>
                    <th class="border-b p-2">time_depart</th>
                    <th class="border-b p-2">time_d'arrive</th>
                    <th class="border-b p-2">depart_date</th>
                    <th class="border-b p-2">Nbr_Place</th>
                    <th class="border-b p-2">Action</th>
                </tr>
                </thead>
                <tbody>
                @if (session('success'))
                    <div class="bg-green-100 text-green-800 pl-4 pr-10 py-4 rounded relative" role="alert">
                        <div class="inline-block max-sm:mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 fill-green-500 inline mr-4"
                                 viewBox="0 0 512 512">
                                <ellipse cx="256" cy="256" fill="#32bea6"
                                         data-original="#32bea6" rx="256" ry="255.832" />
                                <path fill="#fff"
                                      d="m235.472 392.08-121.04-94.296 34.416-44.168 74.328 57.904 122.672-177.016 46.032 31.888z"
                                      data-original="#ffffff" />
                            </svg>
                            <strong class="font-bold text-base">Success!</strong>
                        </div>
                        <span
                            class="block sm:inline text-sm mx-4 max-sm:ml-0 max-sm:mt-1">{{ session('success') }}</span>
                    </div>
                @elseif(session('error'))
                    <div class="bg-red-100 text-red-800 pl-4 pr-10 py-4 rounded relative" role="alert">
                        <div class="inline-block max-sm:mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 fill-red-500 inline mr-4"
                                 viewBox="0 0 32 32">
                                <path
                                    d="M16 1a15 15 0 1 0 15 15A15 15 0 0 0 16 1zm6.36 20L21 22.36l-5-4.95-4.95 4.95L9.64 21l4.95-5-4.95-4.95 1.41-1.41L16 14.59l5-4.95 1.41 1.41-5 4.95z"
                                    data-original="#ea2d3f" />
                            </svg>
                            <strong class="font-bold text-base">Error!</strong>
                        </div>
                        <span
                            class="block sm:inline text-sm mx-4 max-sm:ml-0 max-sm:mt-1">{{ session('error') }}</span>
                    </div>
                @endif
                <br>
                @foreach ($Promos as $Promo)
                    <tr>
                        <td class="border-b p-2">{{ $Promo->id }}</td>
                        <td class="border-b p-2">{{ $Promo->City_depart->name }}</td>
                        <td class="border-b p-2">{{ $Promo->City_arrive->name }}</td>
                        <td class="border-b p-2">{{ $Promo->distance_Parcour }}</td>
                        <td class="border-b p-2">{{ $Promo->Prix_Parcour }}</td>
                        <td class="border-b p-2">{{ $Promo->time_depart }}</td>
                        <td class="border-b p-2">{{ $Promo->arrive_time }}</td>
                        <td class="border-b p-2">{{ $Promo->depart_date }}</td>
                        <td class="border-b p-2">{{ $Promo->nbr_place }}</td>
                        <td class="border-b p-2">
                            <!-- Edit Button -->
                            <button onclick="openEditModal({{ $Promo->id }}, 'parcour_name')"
                                    class="bg-blue-500 text-white p-2 rounded-full hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300">Edit</button>
                            <!-- Delete Form -->
                            <form action="{{ route('Promos.destroy', $Promo->id) }}" method="POST"
                                  class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                        class="bg-red-500 text-white p-2 rounded-full hover:bg-red-600 focus:outline-none focus:ring focus:border-red-300">Delete</button>
                            </form>
                            <div id="editModal-{{ $Promo->id }}"
                                 class="fixed inset-0 z-50 flex items-center justify-center hidden">
                                <div class="bg-white p-8 w-96 mx-auto rounded-md shadow-lg">
                                    <h2 class="text-2xl font-semibold mb-4">Edit Promos</h2>
                                    <form action="{{ route('Promos.update', $Promo) }}" method="POST"
                                          enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <!-- Selecteur pour la ville de départ -->
                                        <select id="city" name="depart_id"
                                                class="form-select w-full border p-2 mb-4">
                                            <option value="" selected disabled>Choisissez une ville
                                            </option>
                                            @foreach ($cities as $city)
                                                <option value="{{ $city->id }}">{{ $city->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        <div class="text-red-500">
                                            @error('depart_id')
                                            {{ $message }}
                                            @enderror
                                        </div>

                                        <!-- Selecteur pour la ville d'arrivée -->
                                        <select id="city" name="arrive_id"
                                                class="form-select w-full border p-2 mb-4">
                                            <option value="" selected disabled>Choisissez une ville
                                            </option>
                                            @foreach ($cities as $city)
                                                <option value="{{ $city->id }}">{{ $city->name }}
                                                </option>
                                            @endforeach
                                        </select>

                                        <!-- Champ pour la longueur du parcours -->
                                        <label class="block mb-2">Distance du Promos:</label>
                                        <input type="number" name="distance_Parcour"
                                               class="w-full border p-2 mb-4"
                                               placeholder="Entrez la longueur du Promos"
                                               value="{{ $Promo->distance_Parcour ?? '' }}" required>
                                        @error('distance_Parcour')
                                        {{ $message }}
                                        @enderror

                                        <!-- Champ pour le prix du parcours -->
                                        <label class="block mb-2">Prix du Promos:</label>
                                        <input type="number" name="Prix_Parcour"
                                               class="w-full border p-2 mb-4"
                                               placeholder="Entrez le prix du Promos"
                                               value="{{ $Promo->Prix_Parcour ?? '' }}" required>
                                        @error('Prix_Parcour')
                                        {{ $message }}
                                        @enderror

                                        <label class="block mb-2">Time de depart:</label>
                                        <input type="time" name="time_depart"
                                               class="w-full border p-2 mb-4"
                                               value="{{ $Promo->time_depart ?? '' }}" step="60"
                                               required>

                                        @error('time_depart')
                                        {{ $message }}
                                        @enderror

                                        <label class="block mb-2">Time d'arrivée:</label>
                                        <input type="time" name="arrive_time"
                                               class="w-full border p-2 mb-4"
                                               value="{{ $Promo->arrive_time ?? '' }}" step="60"
                                               required>
                                        @error('arrive_time')
                                        {{ $message }}
                                        @enderror

                                        <label class="block mb-2">Depart Date:</label>
                                        <input type="date" name="depart_date"
                                               class="w-full border p-2 mb-4"
                                               value="{{ $Promo->depart_date ?? '' }}"
                                               required>
                                        @error('depart_date')
                                        {{ $message }}
                                        @enderror

                                        <label class="block mb-2">Number Place:</label>
                                        <input type="number" name="nbr_place"
                                               class="w-full border p-2 mb-4"
                                               value="{{ $Promo->nbr_place ?? '' }}"
                                               required>
                                        @error('nbr_place')
                                        {{ $message }}
                                        @enderror
                                        <br>
                                        <button type="submit"
                                                class="bg-blue-500 text-white p-2 rounded-full hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300">Update</button>
                                    </form>
                                    <button onclick="closeEditModal({{ $Promo->id }})"
                                            class="mt-4 bg-gray-500 text-white p-2 rounded-full hover:bg-gray-600 focus:outline-none focus:ring focus:border-gray-300">Close</button>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

            <!-- Add Category Button -->
            <div class="fixed bottom-8 right-8">
                <button onclick="openModal()"
                        class="bg-blue-500 text-white p-4 rounded-full shadow-lg hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300">+
                    Add Promos</button>
            </div>

            <div id="modal" class="fixed inset-0 z-50 flex items-center justify-center hidden">
                <div class="bg-white p-8 max-w-md mx-auto rounded-md shadow-lg">
                    <h2 class="text-2xl font-semibold mb-4">Add Promos</h2>
                    <form action="{{ route('Promos') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <select id="city" name="depart_id" class="form-select w-full border p-2 mb-4">
                            <option value="" selected disabled>Choisissez une ville</option>
                            @foreach ($cities as $city)
                                <option value="{{ $city->id }}">{{ $city->name }}</option>
                            @endforeach
                        </select>

                        <select id="city" name="arrive_id" class="form-select w-full border p-2 mb-4">
                            <option value="" selected disabled>Choisissez une ville</option>
                            @foreach ($cities as $city)
                                <option value="{{ $city->id }}">{{ $city->name }}</option>
                            @endforeach
                        </select>

                        <label class="block mb-2">Distance Parcour:</label>
                        <input type="number" name="distance_Parcour" class="w-full border p-2 mb-4"
                               placeholder="Enter station name" required>
                        @error('distance_Parcour')
                        {{ $message }}
                        @enderror

                        <label class="block mb-2">Prix_Parcour:</label>
                        <input type="number" name="Prix_Parcour" class="w-full border p-2 mb-4"
                               placeholder="Enter station name" required>
                        @error('Prix_Parcour')
                        {{ $message }}
                        @enderror

                        <label class="block mb-2">Time de depart:</label>
                        <input type="time" name="time_depart" class="w-full border p-2 mb-4" step="60"
                               required>

                        @error('time_depart')
                        {{ $message }}
                        @enderror

                        <label class="block mb-2">Time d'arrivée:</label>
                        <input type="time" name="arrive_time" class="w-full border p-2 mb-4" step="60"
                               required>
                        @error('arrive_time')
                        {{ $message }}
                        @enderror

                        <label class="block mb-2">Depart Date:</label>
                        <input type="date" name="depart_date" class="w-full border p-2 mb-4" required>
                        @error('depart_date')
                        <span class="text-red-500">{{ $message }}</span>
                        @enderror

                        <label class="block mb-2">nbr_place:</label>
                        <input type="number" name="nbr_place" class="w-full border p-2 mb-4"
                               placeholder="Enter station name" required>
                        @error('nbr_place')
                        {{ $message }}
                        @enderror

                        <button type="submit"
                                class="bg-blue-500 text-white p-2 rounded-full hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300">Save</button>
                    </form>
                    <button onclick="closeModal()"
                            class="mt-4 bg-gray-500 text-white p-2 rounded-full hover:bg-gray-600 focus:outline-none focus:ring focus:border-gray-300">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Edit Category Modal -->



    <!-- JavaScript -->

    <script>
        // Function to open the edit modal and populate data
        function openEditModal(id, name) {
            console.log(id)
            let elm = `editModal-${id}`;
            console.log(elm)

            document.getElementById(elm).classList.remove('hidden');
            document.getElementById('editCategoryName').value = name;
            document.getElementById('editCategoryId').value = id;
        }

        // Function to close the edit modal
        function closeEditModal(id) {
            let elm = `editModal-${id}`;
            document.getElementById(elm).classList.add('hidden');
        }

        // Function to open the add modal
        function openModal() {
            document.getElementById('modal').classList.remove('hidden');
        }

        // Function to close the add modal
        function closeModal() {
            document.getElementById('modal').classList.add('hidden');
        }

        // Function to handle form submission in the edit modal
        function saveEditModalForm() {
            // Get the form element
            const form = document.getElementById('editForm');

            // Add an event listener to the form submission
            form.addEventListener('submit', function(event) {
                // Prevent the default form submission
                console.log('ndifso');
                event.preventDefault();

                // Perform any client-side validation here if needed

                // Submit the form asynchronously using JavaScript's Fetch API or other method
                // Replace the URL with your form submission endpoint
                fetch(form.action, {
                    method: 'POST',
                    body: new FormData(form),
                })
                    .then(response => {
                        // Handle the response here (e.g., show success message, close modal, etc.)
                        console.log('Form submitted successfully');
                        // Optionally, close the modal after successful submission
                        closeEditModal();
                    })
                    .catch(error => {
                        // Handle any errors here
                        console.error('Error submitting form:', error);
                        // Optionally, display an error message to the user
                    });
            });
        }
    </script>

    <script>
        // Function to handle form submission in the edit modal
        function saveEditModalForm() {
            // Get the form element
            const form = document.getElementById('editForm');

            // Add an event listener to the form submission
            form.addEventListener('submit', function(event) {
                // Prevent the default form submission
                event.preventDefault();

                // Submit the form asynchronously using JavaScript's Fetch API or other method
                fetch(form.action, {
                    method: 'POST',
                    body: new FormData(form),
                })
                    .then(response => {
                        // Check if the response indicates a successful update
                        if (response.ok) {
                            // Handle success response here (e.g., show success message)
                            console.log('Form submitted successfully');
                            // Optionally, close the modal after successful submission
                            closeEditModal();
                        } else {
                            // Handle error response here (e.g., display error message)
                            console.error('Error submitting form:', response.statusText);
                        }
                    })
                    .catch(error => {
                        // Handle any network errors here
                        console.error('Error submitting form:', error);
                    });
            });
        }
    </script>


</body>

</html>

