@extends('layouts.main') @section('content')
    <div class="flex justify-center items-center overflow-x-hidden min-h-screen">
        <div
            class="bg-fixed bg-[url(https://images.pexels.com/photos/3122192/pexels-photo-3122192.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1)] bg-cover flex items-center">
            <form action="{{ url('/register') }}" method="post" class="w-[90vw] border-4 border-white rounded-2xl">
                @csrf
                <div class="grid grid-cols-12 h-full min-h-max">
                    <div class="col-span-6 order-2"></div>
                    <div class="col-span-12 md:col-span-6 px-10 py-8 md:pr-40 bg-white">
                        <h3 class="text-xl font-bold text-green-700 mb-2" style="">Join us today</h3>
                        <form action="">
                            <label class="mt-2 inline-block text-xsm" for="email">Username</label>
                            <input
                                class="p-2 px-5 mt-2 ring-1 ring-slate-700/10 rounded-xl text-msm w-full focus:outline-none focus:ring-2 focus:ring-green-800/50"
                                required id="username" name="name" placeholder="Username" type="text" />
                            @error('name')
                                <div class="text-red-500 text-xsm">
                                    {{ $message }}
                                </div>
                            @enderror
                            <span class="mb-3 block"></span>
                            <!--End Name-->
                            <label class="inline-block text-xsm" for="email">Email</label>
                            <input
                                class="p-2 px-5 mt-2 ring-1 ring-slate-700/10 rounded-xl text-msm w-full focus:outline-none focus:ring-2 focus:ring-green-800/50"
                                required id="email" name="email" placeholder="Email" type="email" />
                            @error('email')
                                <div class="text-red-500 text-xsm">
                                    {{ $message }}
                                </div>
                            @enderror
                            <span class="mb-3 block"></span>
                            <!--End Email-->

                            <label class="inline-block text-xsm" for="password">Password</label>
                            <input
                                class="p-2 px-5 mt-3 ring-1 ring-slate-700/10 rounded-xl text-msm w-full focus:outline-none focus:ring-2 focus:ring-green-800/50"
                                required id="password" name="password" placeholder="Password" type="password" />
                            @error('password')
                                <div class="text-red-500 text-xsm">
                                    {{ $message }}
                                </div>
                            @enderror
                            <span class="mb-3 block"></span>
                            <!--End Password-->

                            <label class="inline-block text-xsm" for="password_confirmation">Confirm Password</label>
                            <input
                                class="p-2 px-5 mt-3 ring-1 ring-slate-700/10 rounded-xl text-msm w-full focus:outline-none focus:ring-2 focus:ring-green-800/50"
                                required id="password_confirmation" name="password_confirmation"
                                placeholder="Confirm Password" type="password" />
                            @error('password_confirmation')
                                <div class="text-red-500 text-xsm">
                                    {{ $message }}
                                </div>
                            @enderror
                            <span class="mb-3 block"></span>
                            <!--End Confirm Password-->

                            <button type="submit"
                                class="bg-green-800 hover:bg-blue-500 text-white text-msm px-8 p-2 rounded-full mt-4">
                                Register
                            </button>

                            <p class="text-msm mt-5">
                                Already have an Account?
                                <a href="{{ url('/login') }}" class="font-bold hover:text-green-800">Login</a>
                            </p>
                        </form>
                    </div>
                </div>
            </form>
        </div>
        <div
            class="-z-10 absolute top-0 h-screen min-h-max w-full bg-fixed bg-[url(https://images.pexels.com/photos/3122192/pexels-photo-3122192.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1)] blur-sm">
        </div>
    </div>
@endsection
