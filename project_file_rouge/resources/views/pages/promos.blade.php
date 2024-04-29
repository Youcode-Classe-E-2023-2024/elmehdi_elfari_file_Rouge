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
                    <th class="border-b p-2">Parcour</th>
                    <th class="border-b p-2">Discount</th>
                    <th class="border-b p-2">New Price</th>
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
                    <tr class="ml-5">
                        <td class="border-b p-2">{{ $Promo->id }}</td>
                        <td class="border-b p-2">{{ $Promo->Parcours->City_depart->name }}/{{ $Promo->Parcours->City_arrive->name }}</td>
                        <td class="border-b p-2">{{ $Promo->discount }}</td>
                        <td class="border-b p-2">{{ $Promo->Prix_Parcour }}</td>

                        <td class="border-b p-2">

                            <form action="{{ route('Promos.destroy', $Promo->id) }}" method="POST"
                                  class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                        class="bg-red-500 text-white px-5 py-2 rounded-full hover:bg-red-600 focus:outline-none focus:ring focus:border-red-300">Delete</button>
                            </form>
                            <div id="editModal-{{ $Promo->id }}"
                                 class="fixed inset-0 z-50 flex items-center justify-center hidden">
                                <div class="bg-white p-8 w-96 mx-auto rounded-md shadow-lg">
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

                       <select name="parcour_id" class="form-select w-full border p-2 mb-4">
                            <option value="" selected disabled>Choisissez une ville</option>
                            @foreach ($parcours as $parcour)
                                <option value="{{ $parcour->id }}">{{ $parcour->City_depart->name }} , {{ $parcour->City_arrive->name }}</option>
                            @endforeach
                        </select>


                        <label class="block mb-2">Discount :</label>
                        <input type="number" name="discount" class="w-full border p-2 mb-4"
                               placeholder="Enter station name" required>
                        @error('discount')
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

    <script>
        // Function to open the add modal
        function openModal() {
            document.getElementById('modal').classList.remove('hidden');
        }

        // Function to close the add modal
        function closeModal() {
            document.getElementById('modal').classList.add('hidden');
        }

    </script>

</body>

</html>

