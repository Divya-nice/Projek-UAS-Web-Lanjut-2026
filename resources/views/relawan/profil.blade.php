<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <title>Profil Saya</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>


<body class="bg-[#F7F2EB] pt-20 relative overflow-x-hidden">



<!-- Navbar -->

<nav class="fixed top-0 left-0 w-full z-50
    bg-gradient-to-r
    from-amber-950
    via-amber-900
    to-yellow-800
    text-white
    px-12
    py-4
    flex
    justify-between
    items-center
    shadow-lg">


    <div class="flex items-center gap-3">

        <img src="{{ asset('images/buku.png') }}" class="w-8">

        <h1 class="font-bold text-2xl">
            GemaAksara
        </h1>

    </div>



    <div class="flex gap-14 font-medium">


        <a href="/relawan"
           class="hover:text-yellow-300 transition">

            Beranda Kegiatan

        </a>



        <a href="/relawan/jadwal"
           class="hover:text-yellow-300 transition">

            Jadwal Saya

        </a>



        <a href="{{ route('profil.index') }}"
           class="text-yellow-300">

            Profil Saya

        </a>


    </div>



    <div class="flex items-center gap-6">


        <span class="font-medium">

            Halo, {{ Auth::user()->name }}

        </span>



        <form action="/logout" method="POST">

            @csrf


            <button
                type="submit"
                class="bg-white text-amber-900 px-4 py-2 rounded-xl font-semibold hover:bg-amber-100 transition">

                Logout

            </button>


        </form>


    </div>


</nav>





<!-- CONTENT -->

<div class="max-w-5xl mx-auto mt-10">


@if(session('success'))

<div class="bg-green-100 text-green-800 px-5 py-3 rounded-xl mb-5">

    {{ session('success') }}

</div>

@endif




<div class="bg-white rounded-2xl shadow-lg overflow-hidden">



    <div class="bg-gradient-to-r from-amber-950 via-amber-900 to-yellow-800 text-white px-8 py-5">

        <h2 class="text-xl font-semibold">

            Profil Saya

        </h2>

    </div>



    <div class="p-8">


        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">



            <!-- KIRI : DATA PROFIL -->


            <div class="bg-[#F7F2EB] rounded-2xl p-8 text-center">


                <div class="w-28 h-28 mx-auto rounded-full bg-amber-100 flex items-center justify-center">

                    <i class="bi bi-person-fill text-6xl text-amber-900"></i>

                </div>



                <h3 class="text-2xl font-bold mt-5">

                    {{ $user->name }}

                </h3>



                <p class="text-gray-500 mt-2">

                    Relawan GemaAksara

                </p>


            </div>

            <!-- KANAN : FORM -->

            <div>


                <form action="{{ route('profil.update') }}"
                      method="POST">


                    @csrf

                    @method('PUT')



                    <label class="block mb-2 font-medium">

                        Nama

                    </label>


                    <input
                        type="text"
                        name="name"
                        value="{{ old('name',$user->name) }}"
                        class="w-full border rounded-xl px-4 py-3 mb-4">



                    <label class="block mb-2 font-medium">

                        Email

                    </label>


                    <input
                        type="email"
                        name="email"
                        value="{{ old('email',$user->email) }}"
                        class="w-full border rounded-xl px-4 py-3 mb-4">
                    <label class="block mb-2 font-medium">

                        Password Baru

                    </label>



                    <div class="relative">


                        <input
                            type="password"
                            name="password"
                            id="password"
                            class="w-full border rounded-xl px-4 py-3 pr-12">



                        <button
                            type="button"
                            onclick="togglePassword('password')"
                            class="absolute right-3 top-3 text-gray-500">


                            <i class="bi bi-eye"
                               id="icon-password"></i>


                        </button>


                    </div>




                    <label class="block mt-4 mb-2 font-medium">

                        Konfirmasi Password

                    </label>



                    <div class="relative">


                        <input
                            type="password"
                            name="password_confirmation"
                            id="password_confirmation"
                            class="w-full border rounded-xl px-4 py-3 pr-12">



                        <button
                            type="button"
                            onclick="togglePassword('password_confirmation')"
                            class="absolute right-3 top-3 text-gray-500">


                            <i class="bi bi-eye"
                               id="icon-password_confirmation"></i>


                        </button>


                    </div>




                    <button
                        type="submit"
                        class="mt-6 bg-amber-900 text-white px-6 py-3 rounded-xl font-semibold hover:bg-amber-800 transition">


                        Simpan Perubahan


                    </button>



                </form>


            </div>


        </div>


    </div>


</div>


</div>





<script>


function togglePassword(id){


    let input = document.getElementById(id);

    let icon = document.getElementById('icon-' + id);



    if(input.type === "password"){


        input.type = "text";

        icon.classList.remove('bi-eye');

        icon.classList.add('bi-eye-slash');


    }else{


        input.type = "password";

        icon.classList.remove('bi-eye-slash');

        icon.classList.add('bi-eye');


    }


}



</script>



</body>

</html>