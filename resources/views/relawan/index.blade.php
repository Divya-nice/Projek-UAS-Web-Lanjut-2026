<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Beranda Relawan</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-stone-100">

    <!-- Navbar -->
    <nav class="sticky top-0 z-50 bg-amber-900 text-white px-12 py-5 flex justify-between items-center shadow-md">

        <div class="flex items-center gap-3">

            <img src="{{ asset('images/buku.png') }}"
                 class="w-10 h-10 object-contain">

            <h1 class="font-bold text-2xl">
                GemaAksara
            </h1>

        </div>


        <div class="space-x-8">

            <a href=""
               class="hover:text-yellow-300 duration-300">

                Beranda Kegiatan

            </a>


            <a href=""
               class="hover:text-yellow-300 duration-300">

                Jadwal Saya

            </a>

        </div>


        <div>

            Halo, Relawan 👋

        </div>


    </nav>




    <!-- Banner -->

    <section class="mx-10 mt-8">


        <div class="bg-gradient-to-r from-amber-900 to-yellow-700 rounded-3xl shadow-xl p-10 text-white">


            <h1 class="text-5xl font-bold leading-tight">

                Jadilah Bagian dari Gerakan Literasi Pontianak


            </h1>



            <p class="mt-5 text-amber-100 text-lg">

                Temukan kegiatan membaca, mendongeng,
                dan edukasi anak bersama relawan GemaAksara.


            </p>



            <a href="#kegiatan"

               class="inline-block mt-6 bg-white text-amber-900 px-6 py-3 rounded-xl font-semibold hover:bg-amber-100 transition">


                Jelajahi Kegiatan


            </a>



        </div>


    </section>







    <!-- Kegiatan -->


    <section id="kegiatan"

             class="mx-10 mt-12 mb-16">



        <h2 class="text-3xl font-bold text-amber-900 mb-8">


            Daftar Kegiatan


        </h2>





        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">





            <div class="bg-white rounded-3xl shadow-lg hover:shadow-2xl duration-300 overflow-hidden">






                <img src="{{ asset('images/Gema aksara gambar.png') }}"

                     class="w-full h-56 object-cover">






                <div class="p-6">




                    <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-sm">

                        Pendaftaran Dibuka

                    </span>





                    <p class="mt-4 text-gray-500">

                        📅 25 Juni 2026

                    </p>




                    <p class="text-gray-500">

                        🕘 09.00 WIB

                    </p>






                    <h3 class="text-2xl font-bold mt-3 text-amber-900">


                        Petualangan Membaca Bersama


                    </h3>






                    <p class="text-gray-600 mt-3">


                        📍 Aula Perpustakaan Daerah


                    </p>






                    
                    <a href="/relawan/detail"
                        class="mt-5 block w-full bg-amber-700 hover:bg-amber-800 text-white py-3 rounded-xl font-semibold text-center transition">

                        Lihat Detail & Daftar

                    </a>

                </div>



            </div>





        </div>



    </section>




</body>

</html>