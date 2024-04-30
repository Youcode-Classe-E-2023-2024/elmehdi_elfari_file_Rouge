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
<footer class="bg-gray-900 py-12 px-16 font-[sans-serif] ">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
        <div>
            <h2 class="text-white text-lg font-bold mb-4">Quick Links</h2>
            <ul class="space-y-3">
                <li>
                    <a href="javascript:void(0)" class="text-gray-400 hover:text-white text-base transition-all">Newsroom</a>
                </li>
                <li>
                    <a href="javascript:void(0)" class="text-gray-400 hover:text-white text-base transition-all">Tailwind CSS</a>
                </li>
                <li>
                    <a href="javascript:void(0)" class="text-gray-400 hover:text-white text-base transition-all">Careers</a>
                </li>
            </ul>
        </div>
        <div>
            <h2 class="text-white text-lg font-bold mb-4">Follow Us</h2>
            <ul class="space-y-3">
                <li>
                    <a href="javascript:void(0)" class="text-gray-400 hover:text-white text-base transition-all">Github</a>
                </li>
                <li>
                    <a href="javascript:void(0)" class="text-gray-400 hover:text-white text-base transition-all">linkedin</a>
                </li>
                <li>
                    <a href="javascript:void(0)" class="text-gray-400 hover:text-white text-base transition-all">Twitter</a>
                </li>
            </ul>
        </div>
        <div>
            <h2 class="text-white text-lg font-bold mb-4">Company</h2>
            <ul class="space-y-3">
                <li>
                    <a href="javascript:void(0)" class="text-gray-400 hover:text-white text-base transition-all">About</a>
                </li>
                <li>
                    <a href="javascript:void(0)" class="text-gray-400 hover:text-white text-base transition-all">Privacy Policy</a>
                </li>
                <li>
                    <a href="javascript:void(0)" class="text-gray-400 hover:text-white text-base transition-all">Terms &amp; Conditions</a>
                </li>
            </ul>
        </div>
        <div class="flex items-center lg:justify-center">
            <a href='{{ url('/') }} '><img src="{{ asset('img/16.png') }}" alt="logo" class='w-60' /></a>
        </div>
    </div>
</footer>
</body>
</html>
