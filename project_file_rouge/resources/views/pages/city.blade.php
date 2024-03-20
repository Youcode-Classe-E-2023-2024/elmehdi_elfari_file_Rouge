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
<div class="max-w-3xl mt-8 mx-auto bg-white p-6 rounded-lg shadow-md" x-data="categoryModal()">
    <h1 class="text-2xl font-semibold mb-4">Category List</h1>

    <table class="min-w-full border border-gray-300">
        <thead>
        <tr>
            <th class="border-b p-2">ID</th>
            <th class="border-b p-2">Name_gare_depart</th>
            <th class="border-b p-2">Name_gare_arriver</th>
            <th class="border-b p-2">Action</th>
        </tr>
        </thead>
        <tbody>

        @foreach($cities as $city)
            <tr>
                <td class="border-b p-2">{{ $city->id }}</td>
                <td class="border-b p-2">{{ $city->name_gare_depart }}</td>
                <td class="border-b p-2">{{ $city->name_gare_arriver }}</td>
                <td class="border-b p-2">
                    <a href="{{ route('city.edit', $city) }}" class="text-blue-500 hover:underline">Edit</a>
                    <form action="{{ route('city.destroy', $city) }}" method="POST" class="inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500 hover:underline">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <div class="fixed bottom-8 right-8">
        <button @click="openModal" class="bg-blue-500 text-white p-4 rounded-full shadow-lg hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300">
            + Add Category
        </button>

        <div x-show="isModalOpen" @click.away="closeModal" class="fixed inset-0 z-50 flex items-center justify-center">
            <div class="bg-white p-8 max-w-md mx-auto rounded-md shadow-lg">
                <h2 class="text-2xl font-semibold mb-4">Add Category</h2>

                <form action="{{ route('city') }}" method="POST">
                    @csrf
                    <label class="block mb-2">Name_gare_depart:</label>
                    <input type="text" name="name_gare_depart" class="w-full border p-2 mb-4" placeholder="Enter category name" required>

                    <label class="block mb-2">Name_gare_arriver:</label>
                    <input type="text" name="name_gare_arriver" class="w-full border p-2 mb-4" placeholder="Enter category name" required>

                    <button type="submit" class="bg-blue-500 text-white p-2 rounded-full hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300">Save</button>
                </form>
                <button @click="closeModal" class="mt-4 bg-gray-500 text-white p-2 rounded-full hover:bg-gray-600 focus:outline-none focus:ring focus:border-gray-300">Close</button>
            </div>
        </div>
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
            };
        }
    </script>
</div>
</body>
</html>
