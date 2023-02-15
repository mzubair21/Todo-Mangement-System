@extends('layouts.main') @section('content')
    <div class="flex justify-center items-center overflow-x-hidden min-h-screen">
        <div
            class="bg-fixed bg-[url(https://images.pexels.com/photos/3122192/pexels-photo-3122192.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1)] bg-cover flex items-center">
            <form action="{{ url('/login') }}" method="post" class="w-[90vw] border-4 border-white rounded-2xl">
                @csrf
                <div class="grid grid-cols-12 h-full min-h-max">
                    <div class="col-span-6"></div>
                    <div class="col-span-12 md:col-span-6 px-10 py-10 md:pr-40 bg-white">
                        <h3 class="text-xl font-bold text-green-700 text-center md:text-left uppercase" style="">Login
                        </h3>
                        <form action="">
                            <label class="mt-4 inline-block text-xsm" for="email">Email</label>
                            <input
                                class="p-2 px-5 my-3 ring-1 ring-slate-700/10 rounded-xl text-msm w-full focus:outline-none focus:ring-2 focus:ring-green-800/50"
                                required id="email" name="email" placeholder="Email" type="email" />

                            <label class="mt-4 inline-block text-xsm" for="password">Password</label>
                            <input
                                class="p-2 px-5 my-3 ring-1 ring-slate-700/10 rounded-xl text-msm w-full focus:outline-none focus:ring-2 focus:ring-green-800/50"
                                required id="password" name="password" placeholder="Password" type="password" />

                            <div class="flex items-center gap-2 py-3">
                                <input type="checkbox" id="remember" name="remember" />
                                <label for="remember" class="text-xsm">
                                    Remember me</label>
                            </div>

                            <button type="submit"
                                class="bg-green-800 text-white text-msm px-8 p-2 rounded-full mt-4 hover:bg-blue-500">
                                Sign in
                            </button>

                            <p class="text-msm mt-5">
                                Dont have an Account?
                                <a href="{{ url('/register') }}" class="font-bold hover:text-green-800">Create the
                                    Account</a>
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
