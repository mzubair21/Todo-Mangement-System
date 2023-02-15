<nav class="bg-black p-4 text-white flex">
    <div class="flex w-full container">
        <a class="text-white" href="{{ route('home') }}">Ripple Berry</a>
        <ul class="ml-auto flex gap-10">
            @if (Auth::user() != null && (Auth::user()->hasRole('Admin') || Auth::user()->hasRole('User')))

                <li class="  relative">
                    <button class="ml-auto peer"> {{ Auth::user()->name }}</button>
                    <ul
                        class="  text-black link-hide peer-hover:translate-x-0 hover:translate-x-0 absolute flex flex-col top-0 mt-7  transition-all w-max z-10 overflow-hidden bg-green-700">
                        <li><a href="{{ url('/home') }}"
                                class="w-full p-2 px-5 inline-block text-white hover:bg-white hover:text-black">Dashboard</a>
                        </li>
                        <li><a href="{{ route('admin.role.index') }}"
                                class="w-full ml-auto p-2 px-5 inline-block text-white hover:bg-white hover:text-black">
                                Roles</a></li>
                        @if (Auth::user()->hasRole('Admin'))
                            <li><a href="{{ route('admin.permission.index') }}"
                                    class="w-full ml-auto p-2 px-5 inline-block text-white hover:bg-white hover:text-black">Add
                                    Permission</a></li>
                        @endif
                        <li><a href="{{ url('/logout') }}"
                                class="w-full ml-auto p-2 px-5 inline-block text-white hover:bg-white hover:text-black">Logout</a>
                        </li>
                    @else
                        <li><a href="{{ route('login') }}"
                                class="w-24 text-center ml-auto p-2 px-5 inline-block text-white bg-green-700 rounded hover:bg-white hover:text-black">Login</a>
                        </li>
                        <li><a href="{{ route('signup') }}"
                                class="w-24 text-center ml-auto p-2 px-5 inline-block text-black bg-white rounded hover:bg-green-700 hover:text-white">SignUp</a>
                        </li>

            @endif
        </ul>
        </li>

        </ul>
    </div>
</nav>
