<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>request</title>
</head>

<body>
<div class="flex justify-center items-center font-[sans-serif] text-[#333] h-full min-h-screen p-4"
     style="background-image: url(https://readymadeui.com/background-image.webp); background-repeat: no-repeat; background-size: cover;">
    <div class="max-w-md w-full mx-auto">
        <div class="bg-opacity-70 bg-white rounded-2xl p-6 shadow-[0_2px_16px_-3px_rgba(6,81,237,0.3)]">
            <div class="mb-10">
                <h3 class="text-3xl font-extrabold">Sign in</h3>
            </div>
                <h1
                    class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-gray-600">
                    Sign in to your account
                </h1>
                <form class="space-y-4 md:space-y-6" method="post" action="{{ route('request.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <div class="relative flex items-center">
                            <input name="email" type="text" required
                                   class="bg-transparent w-full text-sm border-b border-[#333] px-2 py-3 outline-none placeholder:text-[#333]"
                                   placeholder="Enter email" />
                            <svg xmlns="http://www.w3.org/2000/svg" fill="#333" stroke="#333" class="w-[18px] h-[18px] absolute right-2"
                                 viewBox="0 0 682.667 682.667">
                                <defs>
                                    <clipPath id="a" clipPathUnits="userSpaceOnUse">
                                        <path d="M0 512h512V0H0Z" data-original="#000000"></path>
                                    </clipPath>
                                </defs>
                                <g clip-path="url(#a)" transform="matrix(1.33 0 0 -1.33 0 682.667)">
                                    <path fill="none" stroke-miterlimit="10" stroke-width="40"
                                          d="M452 444H60c-22.091 0-40-17.909-40-40v-39.446l212.127-157.782c14.17-10.54 33.576-10.54 47.746 0L492 364.554V404c0 22.091-17.909 40-40 40Z"
                                          data-original="#000000"></path>
                                    <path
                                        d="M472 274.9V107.999c0-11.027-8.972-20-20-20H60c-11.028 0-20 8.973-20 20V274.9L0 304.652V107.999c0-33.084 26.916-60 60-60h392c33.084 0 60 26.916 60 60v196.653Z"
                                        data-original="#000000"></path>
                                </g>
                            </svg>
                        </div>
                        @error('email')
                        <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <button type="submit"
                            class="w-full py-2.5 px-4 text-sm font-semibold rounded-full text-white bg-[#333] hover:bg-[#222] focus:outline-none">
                        Submit
                    </button>
                    <p class="text-sm font-light text-gray-500 dark:text-white">
                        Don’t have an account yet? <a href="/register"
                                                      class="font-medium text-primary-600 hover:underline dark:text-primary-500">Sign up</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</div>
</body>

</html>
