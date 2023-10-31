@extends('layout')

@section('content')

    <div class="flex items-center justify-center h-screen ">
      <div class="container home m-auto">
        <img class="mx-auto" src="img/logoBanner.png" alt="" />
        <h1 class="text-white font-bold text-center text-4xl mt-3 mb-2">
          Transforkr4b
        </h1>
        <p class="text-white text-base text-center">
          Selamat Datang di Event Tahunan SMKN 4 Bogor <br />
          Kegiatan yang diselenggarakan adalah <br />
          Job Fair, Edu Fair & Panen Karya
        </p>
        <div class="mx-auto flex justify-center mt-10">
          <a
            href="{{ route('login-event') }}"
            class="text-white bg-blue-950 hover:bg-blue-950 focus:outline-none focus:ring-4 focus:ring-orange-500 font-bold rounded-full text-xl px-20 py-4 text-center mb-2 outline outline-offset-2 outline-orange-500 hover:outline-none"
          >
            Sudah Registrasi
          </a>
        </div>
        <div class="mx-auto flex justify-center mt-3">
          <a
            href="{{ route('register-event') }}"
            class="text-white bg-blue-950 hover:bg-blue-950 focus:outline-none focus:ring-4 focus:ring-orange-500 font-bold rounded-full text-xl px-20 py-4 text-center mb-2 outline outline-offset-2 outline-orange-500 hover:outline-none"
          >
            Belum Registrasi
          </a>
        </div>
      </div>
    </div>

@endsection
