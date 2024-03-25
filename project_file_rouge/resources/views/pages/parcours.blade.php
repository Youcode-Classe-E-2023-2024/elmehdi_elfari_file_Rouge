<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Parcours List</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
<div class="min-h-screen bg-gray-50/50">
    <aside class="bg-gradient-to-br from-gray-800 to-gray-900 -translate-x-80 fixed inset-0 z-50 my-4 ml-4 h-[calc(100vh-32px)] w-72 rounded-xl transition-transform duration-300 xl:translate-x-0">
        <div class="relative border-b border-white/20">
            <a class="flex items-center gap-4 py-6 px-8" href="#/">
                <h6 class="block antialiased tracking-normal font-sans text-base font-semibold leading-relaxed text-white">Material Tailwind Dashboard</h6>
            </a>
            <button class="middle none font-sans font-medium text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-8 max-w-[32px] h-8 max-h-[32px] rounded-lg text-xs text-white hover:bg-white/10 active:bg-white/30 absolute right-0 top-0 grid rounded-br-none rounded-tl-none xl:hidden" type="button">
        <span class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" aria-hidden="true" class="h-5 w-5 text-white">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
          </svg>
        </span>
            </button>
        </div>
        <div class="m-4">
            <ul class="mb-4 flex flex-col gap-1">
                <li>
                    <a aria-current="page" class="active" href="{{ route('dashboard') }}">
                        <button class="middle none font-sans font-bold center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 rounded-lg bg-gradient-to-tr from-blue-600 to-blue-400 text-white shadow-md shadow-blue-500/20 hover:shadow-lg hover:shadow-blue-500/40 active:opacity-[0.85] w-full flex items-center gap-4 px-4 capitalize" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="w-5 h-5 text-inherit">
                                <path d="M11.47 3.84a.75.75 0 011.06 0l8.69 8.69a.75.75 0 101.06-1.06l-8.689-8.69a2.25 2.25 0 00-3.182 0l-8.69 8.69a.75.75 0 001.061 1.06l8.69-8.69z"></path>
                                <path d="M12 5.432l8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 01-.75-.75v-4.5a.75.75 0 00-.75-.75h-3a.75.75 0 00-.75.75V21a.75.75 0 01-.75.75H5.625a1.875 1.875 0 01-1.875-1.875v-6.198a2.29 2.29 0 00.091-.086L12 5.43z"></path>
                            </svg>
                            <p class="block antialiased font-sans text-base leading-relaxed text-inherit font-medium capitalize">dashboard</p>
                        </button>
                    </a>
                </li>
                <li>
                    <a class="" href="#">
                        <button class="middle none font-sans font-bold center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 rounded-lg text-white hover:bg-white/10 active:bg-white/30 w-full flex items-center gap-4 px-4 capitalize" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="w-5 h-5 text-inherit">
                                <path fill-rule="evenodd" d="M18.685 19.097A9.723 9.723 0 0021.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 003.065 7.097A9.716 9.716 0 0012 21.75a9.716 9.716 0 006.685-2.653zm-12.54-1.285A7.486 7.486 0 0112 15a7.486 7.486 0 015.855 2.812A8.224 8.224 0 0112 20.25a8.224 8.224 0 01-5.855-2.438zM15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" clip-rule="evenodd"></path>
                            </svg>
                            <p class="block antialiased font-sans text-base leading-relaxed text-inherit font-medium capitalize">profile</p>
                        </button>
                    </a>
                </li>
                <li>
                    <a class="" href="{{ route('table') }}">
                        <button class="middle none font-sans font-bold center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 rounded-lg text-white hover:bg-white/10 active:bg-white/30 w-full flex items-center gap-4 px-4 capitalize" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="w-5 h-5 text-inherit">
                                <path fill-rule="evenodd" d="M1.5 5.625c0-1.036.84-1.875 1.875-1.875h17.25c1.035 0 1.875.84 1.875 1.875v12.75c0 1.035-.84 1.875-1.875 1.875H3.375A1.875 1.875 0 011.5 18.375V5.625zM21 9.375A.375.375 0 0020.625 9h-7.5a.375.375 0 00-.375.375v1.5c0 .207.168.375.375.375h7.5a.375.375 0 00.375-.375v-1.5zm0 3.75a.375.375 0 00-.375-.375h-7.5a.375.375 0 00-.375.375v1.5c0 .207.168.375.375.375h7.5a.375.375 0 00.375-.375v-1.5zm0 3.75a.375.375 0 00-.375-.375h-7.5a.375.375 0 00-.375.375v1.5c0 .207.168.375.375.375h7.5a.375.375 0 00.375-.375v-1.5zM10.875 18.75a.375.375 0 00.375-.375v-1.5a.375.375 0 00-.375-.375h-7.5a.375.375 0 00-.375.375v1.5c0 .207.168.375.375.375h7.5zM3.375 15h7.5a.375.375 0 00.375-.375v-1.5a.375.375 0 00-.375-.375h-7.5a.375.375 0 00-.375.375v1.5c0 .207.168.375.375.375zm0-3.75h7.5a.375.375 0 00.375-.375v-1.5A.375.375 0 0010.875 9h-7.5A.375.375 0 003 9.375v1.5c0 .207.168.375.375.375z" clip-rule="evenodd"></path>
                            </svg>
                            <p class="block antialiased font-sans text-base leading-relaxed text-inherit font-medium capitalize">tables</p>
                        </button>
                    </a>
                </li>
                <li> <a class="" href="{{ route('reservation') }}">
                        <button class="middle none font-sans font-bold center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 rounded-lg text-white hover:bg-white/10 active:bg-white/30 w-full flex items-center gap-4 px-4 capitalize" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="w-5 h-5 text-inherit">
                                <path fill-rule="evenodd" d="M1.5 5.625c0-1.036.84-1.875 1.875-1.875h17.25c1.035 0 1.875.84 1.875 1.875v12.75c0 1.035-.84 1.875-1.875 1.875H3.375A1.875 1.875 0 011.5 18.375V5.625zM21 9.375A.375.375 0 0020.625 9h-7.5a.375.375 0 00-.375.375v1.5c0 .207.168.375.375.375h7.5a.375.375 0 00.375-.375v-1.5zm0 3.75a.375.375 0 00-.375-.375h-7.5a.375.375 0 00-.375.375v1.5c0 .207.168.375.375.375h7.5a.375.375 0 00.375-.375v-1.5zm0 3.75a.375.375 0 00-.375-.375h-7.5a.375.375 0 00-.375.375v1.5c0 .207.168.375.375.375h7.5a.375.375 0 00.375-.375v-1.5zM10.875 18.75a.375.375 0 00.375-.375v-1.5a.375.375 0 00-.375-.375h-7.5a.375.375 0 00-.375.375v1.5c0 .207.168.375.375.375h7.5zM3.375 15h7.5a.375.375 0 00.375-.375v-1.5a.375.375 0 00-.375-.375h-7.5a.375.375 0 00-.375.375v1.5c0 .207.168.375.375.375zm0-3.75h7.5a.375.375 0 00.375-.375v-1.5A.375.375 0 0010.875 9h-7.5A.375.375 0 003 9.375v1.5c0 .207.168.375.375.375z" clip-rule="evenodd"></path>
                            </svg>
                            <p class="block antialiased font-sans text-base leading-relaxed text-inherit font-medium capitalize">reservation</p>
                        </button>
                    </a>
                </li>
                <li>
                    <a class="" href="{{ route('city') }}">
                        <button class="middle none font-sans font-bold center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 rounded-lg text-white hover:bg-white/10 active:bg-white/30 w-full flex items-center gap-4 px-4 capitalize" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="w-5 h-5 text-inherit">
                                <path fill-rule="evenodd" d="M1.5 5.625c0-1.036.84-1.875 1.875-1.875h17.25c1.035 0 1.875.84 1.875 1.875v12.75c0 1.035-.84 1.875-1.875 1.875H3.375A1.875 1.875 0 011.5 18.375V5.625zM21 9.375A.375.375 0 0020.625 9h-7.5a.375.375 0 00-.375.375v1.5c0 .207.168.375.375.375h7.5a.375.375 0 00.375-.375v-1.5zm0 3.75a.375.375 0 00-.375-.375h-7.5a.375.375 0 00-.375.375v1.5c0 .207.168.375.375.375h7.5a.375.375 0 00.375-.375v-1.5zm0 3.75a.375.375 0 00-.375-.375h-7.5a.375.375 0 00-.375.375v1.5c0 .207.168.375.375.375h7.5a.375.375 0 00.375-.375v-1.5zM10.875 18.75a.375.375 0 00.375-.375v-1.5a.375.375 0 00-.375-.375h-7.5a.375.375 0 00-.375.375v1.5c0 .207.168.375.375.375h7.5zM3.375 15h7.5a.375.375 0 00.375-.375v-1.5a.375.375 0 00-.375-.375h-7.5a.375.375 0 00-.375.375v1.5c0 .207.168.375.375.375zm0-3.75h7.5a.375.375 0 00.375-.375v-1.5A.375.375 0 0010.875 9h-7.5A.375.375 0 003 9.375v1.5c0 .207.168.375.375.375z" clip-rule="evenodd"></path>
                            </svg>
                            <p class="block antialiased font-sans text-base leading-relaxed text-inherit font-medium capitalize">City</p>
                        </button>
                    </a>
                </li>
                <li>
                    <a class="" href="{{ route('Parcours') }}">
                        <button class="middle none font-sans font-bold center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 rounded-lg text-white hover:bg-white/10 active:bg-white/30 w-full flex items-center gap-4 px-4 capitalize" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="w-5 h-5 text-inherit">
                                <path fill-rule="evenodd" d="M1.5 5.625c0-1.036.84-1.875 1.875-1.875h17.25c1.035 0 1.875.84 1.875 1.875v12.75c0 1.035-.84 1.875-1.875 1.875H3.375A1.875 1.875 0 011.5 18.375V5.625zM21 9.375A.375.375 0 0020.625 9h-7.5a.375.375 0 00-.375.375v1.5c0 .207.168.375.375.375h7.5a.375.375 0 00.375-.375v-1.5zm0 3.75a.375.375 0 00-.375-.375h-7.5a.375.375 0 00-.375.375v1.5c0 .207.168.375.375.375h7.5a.375.375 0 00.375-.375v-1.5zm0 3.75a.375.375 0 00-.375-.375h-7.5a.375.375 0 00-.375.375v1.5c0 .207.168.375.375.375h7.5a.375.375 0 00.375-.375v-1.5zM10.875 18.75a.375.375 0 00.375-.375v-1.5a.375.375 0 00-.375-.375h-7.5a.375.375 0 00-.375.375v1.5c0 .207.168.375.375.375h7.5zM3.375 15h7.5a.375.375 0 00.375-.375v-1.5a.375.375 0 00-.375-.375h-7.5a.375.375 0 00-.375.375v1.5c0 .207.168.375.375.375zm0-3.75h7.5a.375.375 0 00.375-.375v-1.5A.375.375 0 0010.875 9h-7.5A.375.375 0 003 9.375v1.5c0 .207.168.375.375.375z" clip-rule="evenodd"></path>
                            </svg>
                            <p class="block antialiased font-sans text-base leading-relaxed text-inherit font-medium capitalize">Parcours</p>
                        </button>
                    </a>
                </li>
                <li>
                    <a class="" href="#">
                        <button class="middle none font-sans font-bold center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 rounded-lg text-white hover:bg-white/10 active:bg-white/30 w-full flex items-center gap-4 px-4 capitalize" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="w-5 h-5 text-inherit">
                                <path fill-rule="evenodd" d="M5.25 9a6.75 6.75 0 0113.5 0v.75c0 2.123.8 4.057 2.118 5.52a.75.75 0 01-.297 1.206c-1.544.57-3.16.99-4.831 1.243a3.75 3.75 0 11-7.48 0 24.585 24.585 0 01-4.831-1.244.75.75 0 01-.298-1.205A8.217 8.217 0 005.25 9.75V9zm4.502 8.9a2.25 2.25 0 104.496 0 25.057 25.057 0 01-4.496 0z" clip-rule="evenodd"></path>
                            </svg>
                            <p class="block antialiased font-sans text-base leading-relaxed text-inherit font-medium capitalize">notifactions</p>
                        </button>
                    </a>
                </li>
            </ul>
            <ul class="mb-4 flex flex-col gap-1">
                <li class="mx-3.5 mt-4 mb-2">
                    <p class="block antialiased font-sans text-sm leading-normal text-white font-black uppercase opacity-75">auth pages</p>
                </li>
                <li>
                    <form method="POST" action="{{ url('/logout') }}">
                        @csrf
                        <button class="middle none font-sans font-bold center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 rounded-lg text-white hover:bg-white/10 active:bg-white/30 w-full flex items-center gap-4 px-4 capitalize" type="submit">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="w-5 h-5 text-inherit">
                                <path fill-rule="evenodd" d="M7.5 3.75A1.5 1.5 0 006 5.25v13.5a1.5 1.5 0 001.5 1.5h6a1.5 1.5 0 001.5-1.5V15a.75.75 0 011.5 0v3.75a3 3 0 01-3 3h-6a3 3 0 01-3-3V5.25a3 3 0 013-3h6a3 3 0 013 3V9A.75.75 0 0115 9V5.25a1.5 1.5 0 00-1.5-1.5h-6zm10.72 4.72a.75.75 0 011.06 0l3 3a.75.75 0 010 1.06l-3 3a.75.75 0 11-1.06-1.06l1.72-1.72H9a.75.75 0 010-1.5h10.94l-1.72-1.72a.75.75 0 010-1.06z" clip-rule="evenodd"></path>
                            </svg>
                            <p class="block antialiased font-sans text-base leading-relaxed text-inherit font-medium capitalize">Logout</p>
                        </button>
                    </form>
                </li>
            </ul>
        </div>
    </aside>


    <!-- Main content -->
    <div class="p-4 xl:ml-80">
        <nav class="block w-full max-w-full bg-transparent text-white shadow-none rounded-xl transition-all px-0 py-1">
            <div class="flex flex-col-reverse justify-between gap-6 md:flex-row md:items-center">
                <div class="capitalize">
                    <nav aria-label="breadcrumb" class="w-max">
                        <ol class="flex flex-wrap items-center w-full bg-opacity-60 rounded-md bg-transparent p-0 transition-all">
                            <li class="flex items-center text-blue-gray-900 antialiased font-sans text-sm font-normal leading-normal cursor-pointer transition-colors duration-300 hover:text-light-blue-500">
                                <a href="#">
                                    <p class="block antialiased font-sans text-sm leading-normal text-blue-900 font-normal opacity-50 transition-all hover:text-blue-500 hover:opacity-100">dashboard</p>
                                </a>
                                <span class="text-gray-500 text-sm antialiased font-sans font-normal leading-normal mx-2 pointer-events-none select-none">/</span>
                            </li>
                            <li class="flex items-center text-blue-900 antialiased font-sans text-sm font-normal leading-normal cursor-pointer transition-colors duration-300 hover:text-blue-500">
                                <p class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal">home</p>
                            </li>
                        </ol>
                    </nav>
                    <h6 class="block antialiased tracking-normal font-sans text-base font-semibold leading-relaxed text-gray-900">home</h6>
                </div>
            </div>
        </nav>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="max-w-7xl mt-8 mx-auto bg-white p-6 rounded-lg shadow-md">
            <h1 class="text-2xl font-semibold mb-4">Parcour List</h1>

            <table class="min-w-full border border-gray-300">
                <thead>
                <tr>
                    <th class="border-b p-2">ID</th>
                    <th class="border-b p-2">Image</th>
                    <th class="border-b p-2">Care_depart</th>
                    <th class="border-b p-2">Gare_arrive</th>
                    <th class="border-b p-2">Longeur_Parcour</th>
                    <th class="border-b p-2">Prix_Parcour</th>
                    <th class="border-b p-2">Nbr_Place</th>
                    <th class="border-b p-2">Action</th>
                </tr>
                </thead>
                <tbody>
                <!-- Loop through parcours -->
                @foreach($parcours as $parcour)
                    <tr>
                        <td class="border-b p-2">{{ $parcour->id }}</td>
                        <td class="border-b p-2 w-28"><img src="{{ Storage::url($parcour->image) }}" alt=""></td>
                        <td class="border-b p-2">{{ $parcour->City_depart -> name }}</td>
                        <td class="border-b p-2">{{ $parcour->City_arrive -> name }}</td>
                        <td class="border-b p-2">{{ $parcour->longeur_Parcour }}</td>
                        <td class="border-b p-2">{{ $parcour->Prix_Parcour }}</td>
                        <td class="border-b p-2">{{ $parcour->nbr_place }}</td>
                        <td class="border-b p-2">
                            <!-- Edit Button -->
                            <button onclick="openEditModal('parcour_id', 'parcour_name')" class="bg-blue-500 text-white p-2 rounded-full hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300">Edit</button>
                            <!-- Delete Form -->
                            <form action="{{ route('parcours.destroy', $parcour->id) }}" method="POST" class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 text-white p-2 rounded-full hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

            <!-- Add Category Button -->
            <div class="fixed bottom-8 right-8">
                <button onclick="openModal()" class="bg-blue-500 text-white p-4 rounded-full shadow-lg hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300">+ Add Parcours</button>
            </div>

            <div id="editModal" class="fixed inset-0 z-50 flex items-center justify-center hidden">
                <div class="bg-white p-8 max-w-md mx-auto rounded-md shadow-lg">
                    <h2 class="text-2xl font-semibold mb-4">Add Parcour</h2>
                    <form id="editForm" action="{{ route('Parcours') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <select id="city" name="depart_id" class="form-select w-full border p-2 mb-4">
                            <option value="" selected disabled>Choisissez une ville</option>
                            @foreach($cities as $city)
                                <option value="{{ $city->id }}">{{ $city->name }}</option>
                            @endforeach
                        </select>

                        <select id="city" name="arrive_id" class="form-select w-full border p-2 mb-4">
                            <option value="" selected disabled>Choisissez une ville</option>
                            @foreach($cities as $city)
                                <option value="{{ $city->id }}">{{ $city->name }}</option>
                            @endforeach
                        </select>

                        <label class="block mb-2">longeur_Parcour:</label>
                        <input type="number" name="longeur_Parcour" class="w-full border p-2 mb-4" placeholder="Enter station name" required>
                        @error('longeur_Parcour')
                            {{$message}}
                        @enderror

                        <label class="block mb-2">Prix_Parcour:</label>
                        <input type="number" name="Prix_Parcour" class="w-full border p-2 mb-4" placeholder="Enter station name" required>
                        @error('Prix_Parcour')
                        {{$message}}
                        @enderror

                        <label class="block mb-2">nbr_place:</label>
                        <input type="number" name="nbr_place" class="w-full border p-2 mb-4" placeholder="Enter station name" required>
                        @error('nbr_place')
                        {{$message}}
                        @enderror

                        <label for="uploadFile1"
                               class="bg-gray-800 hover:bg-gray-700 text-white text-sm px-4 py-2.5 outline-none rounded w-max cursor-pointer mx-auto block font-[sans-serif]">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 mr-2 fill-white inline" viewBox="0 0 32 32">
                                <path
                                    d="M23.75 11.044a7.99 7.99 0 0 0-15.5-.009A8 8 0 0 0 9 27h3a1 1 0 0 0 0-2H9a6 6 0 0 1-.035-12 1.038 1.038 0 0 0 1.1-.854 5.991 5.991 0 0 1 11.862 0A1.08 1.08 0 0 0 23 13a6 6 0 0 1 0 12h-3a1 1 0 0 0 0 2h3a8 8 0 0 0 .75-15.956z"
                                    data-original="#000000" />
                                <path
                                    d="M20.293 19.707a1 1 0 0 0 1.414-1.414l-5-5a1 1 0 0 0-1.414 0l-5 5a1 1 0 0 0 1.414 1.414L15 16.414V29a1 1 0 0 0 2 0V16.414z"
                                    data-original="#000000" />
                            </svg>
                            Upload
                            <input type="file" name="image" id="uploadFile1" accept=".png, .jpg, .jpeg, .svg" class="hidden" />
                        </label>
                        @error('image')
                        {{$message}}
                        @enderror

                        <button type="submit" class="bg-blue-500 text-white p-2 rounded-full hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300">Save</button>
                    </form>
                    <button type="button" onclick="closeEditModal()" class="mt-4 bg-gray-500 text-white p-2 rounded-full hover:bg-gray-600 focus:outline-none focus:ring focus:border-gray-300">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Edit Category Modal -->
    <div id="editModal" class="fixed inset-0 z-50 flex items-center justify-center hidden">
        <div class="bg-white p-8 max-w-md mx-auto rounded-md shadow-lg">
            <h2 class="text-2xl font-semibold mb-4">Edit Parcours</h2>
            <form id="editForm" action="{{ route('update.parcours', $parcour->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <!-- Selecteur pour la ville de départ -->
                <select id="city" name="depart_id" class="form-select w-full border p-2 mb-4">
                    <option value="" selected disabled>Choisissez une ville</option>
                    @foreach($cities as $city)
                        <option value="{{ $city->id }}">{{ $city->name }}</option>
                    @endforeach
                </select>

                <!-- Selecteur pour la ville d'arrivée -->
                <select id="city" name="arrive_id" class="form-select w-full border p-2 mb-4">
                    <option value="" selected disabled>Choisissez une ville</option>
                    @foreach($cities as $city)
                        <option value="{{ $city->id }}">{{ $city->name }}</option>
                    @endforeach
                </select>

                <!-- Champ pour la longueur du parcours -->
                <label class="block mb-2">Longueur du Parcours:</label>
                <input type="number" name="longeur_Parcour" class="w-full border p-2 mb-4" placeholder="Entrez la longueur du parcours" value="{{ $parcour->longeur_Parcour ?? '' }}" required>
                @error('longeur_Parcour')
                {{ $message }}
                @enderror

                <!-- Champ pour le prix du parcours -->
                <label class="block mb-2">Prix du Parcours:</label>
                <input type="number" name="Prix_Parcour" class="w-full border p-2 mb-4" placeholder="Entrez le prix du parcours" value="{{ $parcour->Prix_Parcour ?? '' }}" required>
                @error('Prix_Parcour')
                {{ $message }}
                @enderror

                <!-- Champ pour le nombre de places -->
                <label class="block mb-2">Nombre de Places:</label>
                <input type="number" name="nbr_place" class="w-full border p-2 mb-4" placeholder="Entrez le nombre de places" value="{{ $parcour->nbr_place ?? '' }}" required>
                @error('nbr_place')
                {{ $message }}
                @enderror

                <!-- Champ pour le téléchargement de l'image -->
                <label for="uploadFile1" class="bg-gray-800 hover:bg-gray-700 text-white text-sm px-4 py-2.5 outline-none rounded w-max cursor-pointer mx-auto block font-[sans-serif]">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 mr-2 fill-white inline" viewBox="0 0 32 32">
                        <path d="M23.75 11.044a7.99 7.99 0 0 0-15.5-.009A8 8 0 0 0 9 27h3a1 1 0 0 0 0-2H9a6 6 0 0 1-.035-12 1.038 1.038 0 0 0 1.1-.854 5.991 5.991 0 0 1 11.862 0A1.08 1.08 0 0 0 23 13a6 6 0 0 1 0 12h-3a1 1 0 0 0 0 2h3a8 8 0 0 0 .75-15.956z" data-original="#000000" />
                        <path d="M20.293 19.707a1 1 0 0 0 1.414-1.414l-5-5a1 1 0 0 0-1.414 0l-5 5a1 1 0 0 0 1.414 1.414L15 16.414V29a1 1 0 0 0 2 0V16.414z" data-original="#000000" />
                    </svg>
                    Upload
                    <input type="file" name="image" id="uploadFile1" accept=".png, .jpg, .jpeg, .svg" class="hidden" required>
                </label>
                @error('image')
                {{ $message }}
                @enderror

                <!-- Bouton de sauvegarde -->
                <button type="submit" class="bg-blue-500 text-white p-2 rounded-full hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300">Update</button>
            </form>
            <button onclick="closeEditModal()" class="mt-4 bg-gray-500 text-white p-2 rounded-full hover:bg-gray-600 focus:outline-none focus:ring focus:border-gray-300">Close</button>
        </div>
    </div>


    <script>
        function openEditModal(id, name) {
            document.getElementById('editModal').classList.remove('hidden');
            document.getElementById('editCategoryId').value = id;
            document.getElementById('editCategoryName').value = name;
        }

        function closeEditModal() {
            document.getElementById('editModal').classList.add('hidden');
        }

        function openModal() {
            document.getElementById('modal').classList.remove('hidden');
        }

        function closeModal() {
            document.getElementById('modal').classList.add('hidden');
        }

        function saveEditModalForm() {
            const form = document.getElementById('editForm');

            form.addEventListener('submit', function(event) {
                event.preventDefault();

                fetch(form.action, {
                    method: 'POST',
                    body: new FormData(form),
                })
                    .then(response => {
                        console.log('Form submitted successfully');
                        closeEditModal();
                    })
                    .catch(error => {
                        console.error('Error submitting form:', error);
                    });
            });
        }
    </script>


</body>

</html>


