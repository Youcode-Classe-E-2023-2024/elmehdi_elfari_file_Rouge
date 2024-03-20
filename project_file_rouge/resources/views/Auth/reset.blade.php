<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>register</title>
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
                <form class="space-y-4 md:space-y-6" method="post" action="{{ route('reset') }}"
                      enctype="multipart/form-data">


                    @csrf
                    <input type="hidden" name="token" value="{{ $token }}">

                    @error('token')
                    <p class="text-red-800 text-sm my-3">{{ $message }}</p>
                    @enderror

                    <div class="mt-8">
                        <label for="confirm-password"
                               class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-600">
                            password</label>
                        <div class="relative flex items-center">
                            <input name="password" type="password" required
                                   class="bg-transparent w-full text-sm border-b border-[#333] px-2 py-3 outline-none placeholder:text-[#333]"
                                   placeholder="Enter password" />
                            <svg xmlns="http://www.w3.org/2000/svg" fill="#333" stroke="#333"
                                 class="w-[18px] h-[18px] absolute right-2 cursor-pointer" viewBox="0 0 128 128">
                                <path
                                    d="M64 104C22.127 104 1.367 67.496.504 65.943a4 4 0 0 1 0-3.887C1.367 60.504 22.127 24 64 24s62.633 36.504 63.496 38.057a4 4 0 0 1 0 3.887C126.633 67.496 105.873 104 64 104zM8.707 63.994C13.465 71.205 32.146 96 64 96c31.955 0 50.553-24.775 55.293-31.994C114.535 56.795 95.854 32 64 32 32.045 32 13.447 56.775 8.707 63.994zM64 88c-13.234 0-24-10.766-24-24s10.766-24 24-24 24 10.766 24 24-10.766 24-24 24zm0-40c-8.822 0-16 7.178-16 16s7.178 16 16 16 16-7.178 16-16-7.178-16-16-16z"
                                    data-original="#000000"></path>
                            </svg>
                            @error('password')
                            <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="mt-8">
                        <label for="confirm-password"
                               class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-600">Confirm
                            password</label>
                        <div class="relative flex items-center">
                            <input name="password_confirmation" type="password" required
                                   class="bg-transparent w-full text-sm border-b border-[#333] px-2 py-3 outline-none placeholder:text-[#333]"
                                   placeholder="Enter password" />
                            <svg xmlns="http://www.w3.org/2000/svg" fill="#333" stroke="#333"
                                 class="w-[18px] h-[18px] absolute right-2 cursor-pointer" viewBox="0 0 128 128">
                                <path
                                    d="M64 104C22.127 104 1.367 67.496.504 65.943a4 4 0 0 1 0-3.887C1.367 60.504 22.127 24 64 24s62.633 36.504 63.496 38.057a4 4 0 0 1 0 3.887C126.633 67.496 105.873 104 64 104zM8.707 63.994C13.465 71.205 32.146 96 64 96c31.955 0 50.553-24.775 55.293-31.994C114.535 56.795 95.854 32 64 32 32.045 32 13.447 56.775 8.707 63.994zM64 88c-13.234 0-24-10.766-24-24s10.766-24 24-24 24 10.766 24 24-10.766 24-24 24zm0-40c-8.822 0-16 7.178-16 16s7.178 16 16 16 16-7.178 16-16-7.178-16-16-16z"
                                    data-original="#000000"></path>
                            </svg>
                            @error('password_confirmation')
                            <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
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
