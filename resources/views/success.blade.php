@extends('layout')

@section('content')

<div class="container flex items-center justify-center h-screen px-3 mx-auto ">
    <section class="bg-white dark:bg-gray-900 border rounded-lg border-blue-500">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
            <div class="mx-auto max-w-screen-sm text-center">
                {{-- <h1 class="mb-4 text-7xl tracking-tight font-extrabold lg:text-9xl text-blue-600 dark:text-blue-500">200</h1> --}}
                <img class="mx-auto p-2 max-h-48" src="img/logoBanner.png" alt="" />
                <p class="mb-4 text-3xl tracking-tight font-bold text-gray-900 md:text-4xl dark:text-white">Anda Berhasil Mendaftar</p>
                <p class="mb-4 text-lg font-light text-gray-500 dark:text-gray-400">terima kasih atas partisipasi anda dalam mengikuti acara ini ! berikan halaman web ini kepada staff pendaftaran untuk bisa masuk ke dalam acara </p>
                <a href="{{ route('home') }}" class="inline-flex text-white bg-blue-600 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:focus:ring-blue-900 my-4">Back to Homepage</a>
            </div>
        </div>
    </section>
</div>

@endsection

