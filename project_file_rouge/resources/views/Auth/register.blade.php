@extends('layouts.register')

@section('title' , 'Register')


@section('content')
<div class="flex justify-center items-center font-[sans-serif] text-[#333] h-full min-h-screen p-4"
     style="background-image: url(https://readymadeui.com/background-image.webp); background-repeat: no-repeat; background-size: cover;">
    <div class="max-w-md w-full mx-auto">
        @if (!empty(session('success')))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-2xl relative"
                 role="alert">
                <strong class="font-bold">Successfully:)</strong>
                <span class="block sm:inline">{{ session('success') }}</span>
            </div>
        @endif
            <br>
        <div class="bg-opacity-70 bg-white rounded-2xl p-6 shadow-[0_2px_16px_-3px_rgba(6,81,237,0.3)]">
            <div class="mb-10">
                <h3 class="text-3xl font-extrabold">Sign Up</h3>
            </div>
            <!-- Form starts here -->
            <form class="space-y-4 md:space-y-6" action="{{ route('register') }}" method="post">
                @csrf
                <div>
                    <!-- Input field for name -->
                    <div class="relative flex items-center">
                        <input name="name" type="text" required
                               class="bg-transparent w-full text-sm border-b border-[#333] px-2 py-3 outline-none placeholder:text-[#333]"
                               placeholder="Enter name" />
                        <!-- Icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" fill="#333" stroke="#333" class="w-[18px] h-[18px] absolute right-2" viewBox="0 0 24 24">
                            <path d="M12 2c-2.2 0-4 1.8-4 4s1.8 4 4 4s4-1.8 4-4S14.2 2 12 2zM12 10c-2.2 0-6 1.1-6 3v1c0 0.6 0.4 1 1 1h10c0.6 0 1-0.4 1-1v-1C18 11.1 14.2 10 12 10zM6 17c0-0.6 0.4-1 1-1h10c0.6 0 1 0.4 1 1v2c0 0.6-0.4 1-1 1H7c-0.6 0-1-0.4-1-1V17z"></path>
                        </svg>

                        <!-- Display validation errors for name field -->
                        @error('name')
                        <p class="text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <!-- Input field for email -->
                <div class="mt-8">
                    <div class="relative flex items-center">
                        <input name="email" type="text" required
                               class="bg-transparent w-full text-sm border-b border-[#333] px-2 py-3 outline-none placeholder:text-[#333]"
                               placeholder="Enter email" />
                        <!-- Icon -->
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
                    <!-- Display validation errors for email field -->
                    @error('email')
                    <p class="text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <!-- Input field for password -->
                <div class="mt-8">
                    <div class="relative flex items-center">
                        <input name="password" type="password" required
                               class="bg-transparent w-full text-sm border-b border-[#333] px-2 py-3 outline-none placeholder:text-[#333]"
                               placeholder="Enter password" />
                        <!-- Icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" fill="#333" stroke="#333"
                             class="w-[18px] h-[18px] absolute right-2 cursor-pointer" viewBox="0 0 128 128">
                            <path
                                d="M64 104C22.127 104 1.367 67.496.504 65.943a4 4 0 0 1 0-3.887C1.367 60.504 22.127 24 64 24s62.633 36.504 63.496 38.057a4 4 0 0 1 0 3.887C126.633 67.496 105.873 104 64 104zM8.707 63.994C13.465 71.205 32.146 96 64 96c31.955 0 50.553-24.775 55.293-31.994C114.535 56.795 95.854 32 64 32 32.045 32 13.447 56.775 8.707 63.994zM64 88c-13.234 0-24-10.766-24-24s10.766-24 24-24 24 10.766 24 24-10.766 24-24 24zm0-40c-8.822 0-16 7.178-16 16s7.178 16 16 16 16-7.178 16-16-7.178-16-16-16z"
                                data-original="#000000"></path>
                        </svg>
                    </div>
                    <!-- Display validation errors for password field -->
                    @error('password')
                    <p class="text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <!-- Submit button -->
                <div class="mt-14">
                    <button type="submit"
                            class="w-full py-2.5 px-4 text-sm font-semibold rounded-full text-white bg-[#333] hover:bg-[#222] focus:outline-none">
                        Sign Up
                    </button>
                    <p class="text-sm text-center mt-6">Don't have an account <a href="{{ route('Form-login') }}"
                                                                                 class="font-semibold hover:underline ml-1 whitespace-nowrap">Login here</a></p>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
