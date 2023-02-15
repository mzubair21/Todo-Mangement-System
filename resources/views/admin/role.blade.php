@extends('layouts.main')
@include('layouts.nav')
@section('content')
    <section class=" h-max min-h-[90vh] relative">
        <div class="container text-center text-black pt-20 pb-5">
            <h3 class="font-bold text-2xl">Roles</h3>
            <p class="max-w-md m-auto py-10 text-ssm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Id vero
                doloremque voluptates error esse pariatur cumque.</p>
            @if (Auth::user()->hasRole('Admin'))
                <form action="{{ route('admin.role.create') }}" method="post">
                    @csrf
                    <input type="text"
                        class="outline-none bg-slate-200  p-3 px-10 focus:bg-green-700 focus:placeholder:text-white focus:text-white"
                        placeholder="Add Role" name="name">
                    <button type="submit" class="bg-black cursor-pointer text-white p-3 px-10 hover:bg-blue-600 transition"
                        type="submit">Add
                        Role</button>
                </form>
            @endif
        </div>
        <div class="text-center mb-5">

            @if (session('status'))
                <div class="bg-green-100 border inline-block border-green-400 text-green-700 px-4 py-3 rounded relative">
                    <strong class="font-bold">Success!</strong>
                    <span class="block sm:inline pr-10">{{ session('status') }}</span>
                    <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                        <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20">
                            <title>Close</title>
                            <path
                                d="M14.348 14.849a1.25 1.25 0 001.768-1.768l-8.485-8.485a1.25 1.25 0 00-1.768 0l-8.485 8.485a1.25 1.25 0 001.768 1.768l8.485-8.485 8.485 8.485z" />
                        </svg>
                    </span>
                </div>
            @endif
        </div>
        <div class="overflow-auto max-h-96 max-w-screen-md m-auto rounded-lg border mb-10">
            <table class="roleInformation">
                <thead class="thead-inverse">
                    <tr>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($roles as $role)
                        <tr>
                            <td scope="row">{{ $role->name }}</td>
                            <td><button>Delete</button></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection
