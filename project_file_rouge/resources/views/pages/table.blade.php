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
        <div class="mb-4 grid grid-cols-1 gap-6 xl:grid-cols-2">
            <div class="relative flex flex-col bg-clip-border rounded-xl mt-20 bg-gray-200 text-gray-700 shadow-md overflow-hidden xl:col-span-2">
                <div class="overflow-x-auto">
                    <table class="min-w-full bg-white font-sans">
                        <thead class="bg-gray-700 whitespace-nowrap my-2">
                        <tr>
                            <th class="px-6 py-3 text-left text-sm font-semibold text-white">Name</th>
                            <th class="px-6 py-3 text-left text-sm font-semibold text-white">Email</th>
                            <th class="px-6 py-3 text-left text-sm font-semibold text-white">Role</th>
                            <th class="px-6 py-3 text-left text-sm font-semibold text-white">Created At</th>
                            <th class="px-6 py-3 text-left text-sm font-semibold text-white">Actions</th>
                        </tr>
                        </thead>
                        <tbody class="whitespace-nowrap">
                        @if(session('success'))
                            <div class="bg-green-100 text-green-800 pl-4 pr-10 py-4 rounded relative" role="alert">
                                <div class="inline-block max-sm:mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 fill-green-500 inline mr-4" viewBox="0 0 512 512">
                                        <ellipse cx="256" cy="256" fill="#32bea6" data-original="#32bea6" rx="256" ry="255.832" />
                                        <path fill="#fff" d="m235.472 392.08-121.04-94.296 34.416-44.168 74.328 57.904 122.672-177.016 46.032 31.888z"
                                              data-original="#ffffff" />
                                    </svg>
                                    <strong class="font-bold text-base">Success!</strong>
                                </div>
                                <span class="block sm:inline text-sm mx-4 max-sm:ml-0 max-sm:mt-1">{{ session('success') }}</span>
                            </div>
                        @elseif(session('error'))
                            <div class="bg-red-100 text-red-800 pl-4 pr-10 py-4 rounded relative" role="alert">
                                <div class="inline-block max-sm:mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 fill-red-500 inline mr-4" viewBox="0 0 32 32">
                                        <path
                                            d="M16 1a15 15 0 1 0 15 15A15 15 0 0 0 16 1zm6.36 20L21 22.36l-5-4.95-4.95 4.95L9.64 21l4.95-5-4.95-4.95 1.41-1.41L16 14.59l5-4.95 1.41 1.41-5 4.95z"
                                            data-original="#ea2d3f" />
                                    </svg>
                                    <strong class="font-bold text-base">Error!</strong>
                                </div>
                                <span class="block sm:inline text-sm mx-4 max-sm:ml-0 max-sm:mt-1">{{ session('error') }}</span>
                            </div>
                        @endif
                        @foreach($users as $user)
                            <tr>
                                <td class="px-6 py-3 text-left text-sm font-semibold">{{ $user->name }}</td>
                                <td class="px-6 py-3 text-left text-sm font-semibold">{{ $user->email }}</td>
                                <td class="px-6 py-3 text-left text-sm font-semibold">{{ $user->role }}</td>
                                <td class="px-6 py-3 text-left text-sm font-semibold">{{ $user->created_at }}</td>
                                <td class="px-6 py-3 text-left text-bold text-sm font-semibold">
                                    <form action="{{ route('users.toggleStatus', $user) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        @if ($user->status === 'ban')
                                            <button type="submit"
                                                    class="px-6 py-2 rounded-full text-black text-sm tracking-wider font-medium outline-none border-2 border-green-600 hover:bg-green-600 hover:text-white transition-all duration-300">
                                                Unban
                                            </button>
                                        @else
                                            <button type="submit"
                                                    class="px-6 py-2 rounded-full text-black text-sm tracking-wider font-medium outline-none border-2 border-red-600 hover:bg-red-600 hover:text-white transition-all duration-300">
                                                Ban
                                            </button>
                                        @endif
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

