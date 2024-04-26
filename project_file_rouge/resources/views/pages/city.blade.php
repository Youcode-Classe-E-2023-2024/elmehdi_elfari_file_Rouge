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
<body>
<div class="min-h-screen bg-gray-50/50">
    @include('layouts.side')
    <div class="p-4 xl:ml-80">
        <nav class="block w-full max-w-full bg-transparent text-white shadow-none rounded-xl transition-all px-0 py-1">
            <div class="flex flex-col-reverse justify-between gap-6 md:flex-row md:items-center">
                <div class="capitalize">
                    <nav aria-label="breadcrumb" class="w-max">
                        <ol class="flex flex-wrap items-center w-full bg-opacity-60 rounded-md bg-transparent p-0 transition-all">
                            <li class="flex items-center text-blue-gray-900 antialiased font-sans text-sm font-normal leading-normal cursor-pointer transition-colors duration-300 hover:text-light-blue-500">
                                <a href="#">
                                    <p class="block antialiased font-sans text-sm leading-normal text-blue-900 font-normal opacity-50 transition-all hover:text-blue-500 hover:opacity-100">
                                        dashboard</p>
                                </a>
                                <span
                                    class="text-gray-500 text-sm antialiased font-sans font-normal leading-normal mx-2 pointer-events-none select-none">/</span>
                            </li>
                            <li class="flex items-center text-blue-900 antialiased font-sans text-sm font-normal leading-normal cursor-pointer transition-colors duration-300 hover:text-blue-500">
                                <p class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal">
                                    home</p>
                            </li>
                        </ol>
                    </nav>
                    <h6 class="block antialiased tracking-normal font-sans text-base font-semibold leading-relaxed text-gray-900">
                        home</h6>
                </div>
            </div>
        </nav>
        <div class="max-w-3xl mt-8 mx-auto bg-white p-6 rounded-lg shadow-md" x-data="categoryModal()">
            <h1 class="text-2xl font-semibold mb-4">City List</h1>

            <table class="min-w-full border border-gray-300">
                <thead>
                <tr>
                    <th class="border-b p-2">ID</th>
                    <th class="border-b p-2">Name</th>
                    <th class="border-b p-2">Action</th>
                </tr>
                </thead>
                <tbody>
                @if(session('success'))
                    <div class="bg-green-100 text-green-800 pl-4 pr-10 py-4 rounded relative" role="alert">
                        <div class="inline-block max-sm:mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 fill-green-500 inline mr-4"
                                 viewBox="0 0 512 512">
                                <ellipse cx="256" cy="256" fill="#32bea6" data-original="#32bea6" rx="256"
                                         ry="255.832"/>
                                <path fill="#fff"
                                      d="m235.472 392.08-121.04-94.296 34.416-44.168 74.328 57.904 122.672-177.016 46.032 31.888z"
                                      data-original="#ffffff"/>
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
                                    data-original="#ea2d3f"/>
                            </svg>
                            <strong class="font-bold text-base">Error!</strong>
                        </div>
                        <span class="block sm:inline text-sm mx-4 max-sm:ml-0 max-sm:mt-1">{{ session('error') }}</span>
                    </div>
                @endif
                <br>
                @forelse($cities as $city)
                    <tr>
                        <td class="border-b p-2">{{ $city->id }}</td>
                        <td class="border-b p-2">{{ $city->name }}</td>
                        <td class="border-b p-2">
                            <a href="{{ route('city.edit', $city->id) }}" class="text-blue-500 hover:underline">Edit</a>
                            <form action="{{ route('city.destroy', $city->id) }}" method="POST" class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:underline">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    No city
                @endforelse
                </tbody>
            </table>

            <div class="fixed bottom-8 right-8">
                <button @click="openModal"
                        class="bg-blue-500 text-white p-4 rounded-full shadow-lg hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300">
                    + Add Category
                </button>

                <div x-show="isModalOpen" @click.away="closeModal"
                     class="fixed inset-0 z-50 flex items-center justify-center">
                    <div class="bg-white p-8 max-w-md mx-auto rounded-md shadow-lg">
                        <h2 class="text-2xl font-semibold mb-4">Add Category</h2>

                        <form action="{{ route('city') }}" method="POST">
                            @csrf

                            <label class="block mb-2">Name:</label>
                            <input type="text" name="name" class="w-full border p-2 mb-4"
                                   placeholder="Enter station name" required>

                            <button type="submit"
                                    class="bg-blue-500 text-white p-2 rounded-full hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300">
                                Save
                            </button>
                        </form>
                        <button @click="closeModal"
                                class="mt-4 bg-gray-500 text-white p-2 rounded-full hover:bg-gray-600 focus:outline-none focus:ring focus:border-gray-300">
                            Close
                        </button>
                    </div>
                </div>

                <!-- Edit City Modal -->
                @if(isset($edit) && $edit)
                    <div class="fixed inset-0 z-50 flex items-center justify-center">
                        <div class="bg-white p-8 max-w-md mx-auto rounded-md shadow-lg">
                            <h2 class="text-2xl font-semibold mb-4">Edit City</h2>

                            <form action="{{ route('city.update', $wantedCity) }}" method="POST">
                                @csrf
                                @method('PUT')

                                <input type="hidden" name="id" value="{{ $wantedCity->id }}">

                                <label class="block mb-2">Name:</label>
                                <input type="text" name="name" class="w-full border p-2 mb-4"
                                       placeholder="Enter city name" value="{{ $wantedCity->name }}" required>

                                <button type="submit"
                                        class="bg-blue-500 text-white p-2 rounded-full hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300">
                                    Save
                                </button>
                                <a href="{{ route('city') }}"
                                   class="mt-4 bg-gray-500 text-white p-2 rounded-full hover:bg-gray-600 focus:outline-none focus:ring focus:border-gray-300">
                                    Close
                                </a>
                            </form>

                        </div>
                    </div>
                @endif
            </div>

            <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.js" defer></script>

            <script>
                function categoryModal() {
                    return {
                        isModalOpen: false,
                        openModal() {
                            this.isModalOpen = true;
                        },
                        closeModal() {
                            this.isModalOpen = false;
                        },

                        isEditModalOpen: false,
                        editCityId: null,
                        editCityName: '',
                    };
                }
            </script>

        </div>
    </div>
</div>
</body>
</html>

