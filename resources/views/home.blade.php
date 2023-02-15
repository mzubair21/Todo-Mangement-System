@extends('layouts.main')
@include('layouts.nav')
@section('content')
    <section class=" h-max min-h-[90vh] relative">
        <div class="container text-center text-black py-20">
            <h3 class="font-bold text-2xl">Task manager for small teams</h3>
            <p class="max-w-md m-auto py-10 text-ssm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Id vero
                doloremque voluptates error esse pariatur cumque.</p>
            <button class="bg-black cursor-pointer text-white p-3 px-10 hover:bg-blue-600 transition
        ">Get Started
                for free</button>
        </div>
        <img style="mix-blend-mode: multiply"
            class="h-[45%] object-cover absolute bottom-0 -z-10 left-1/2 transform -translate-x-1/2
        "
            src="{{ asset('/assets/images/Todo.png') }}" alt="">
    </section>
@endsection
