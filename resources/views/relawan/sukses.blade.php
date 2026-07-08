<!DOCTYPE html>
<html lang="id">

<head>
<meta charset="UTF-8">
<title>Pendaftaran Berhasil</title>

<script src="https://cdn.tailwindcss.com"></script>

</head>


<body class="bg-[#F7F2EB] min-h-screen relative">


<!-- ORNAMEN -->

<div class="absolute -top-20 -left-20
w-80 h-80
bg-amber-300/30
rounded-full
blur-[120px]">
</div>



<div class="absolute bottom-0 right-0
w-96 h-96
bg-orange-300/25
rounded-full
blur-[140px]">
</div>



<div class="absolute top-48 right-56
w-40 h-40
bg-yellow-200/30
rounded-full
blur-[100px]">
</div>





<!-- NAVBAR -->

<nav class="bg-gradient-to-r

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

<img src="{{ asset('images/buku.png') }}"

class="w-8">


<h1 class="font-bold text-2xl">

GemaAksara

</h1>

</div>





<div class="flex gap-14 font-medium">


<a href="/relawan"

class="hover:text-yellow-300">

Beranda Kegiatan

</a>



<a href="/relawan/jadwal"
class="hover:text-yellow-300">
    Jadwal Saya
</a>


</div>





<div class="flex items-center gap-3">

Halo, Relawan


<div class="w-8 h-8

rounded-full

bg-amber-700

flex

justify-center

items-center">

👤

</div>


</div>


</nav>






<section class="relative flex justify-center items-center py-8">


    <!-- Balon kiri atas -->

    <div class="absolute
top-24
left-10
w-[220px]
h-[220px]
rounded-full
bg-amber-200
opacity-70
blur-[30px]">
</div>

    



    <!-- Balon kanan bawah -->

<div class="absolute
bottom-10
right-10
w-[260px]
h-[260px]
rounded-full
bg-orange-200
opacity-70
blur-[30px]">
</div>




    <!-- Bulatan kecil -->

    <div class="absolute

                left-40

                top-[420px]

                w-16

                h-16

                rounded-full

                bg-yellow-200/70

                blur-3xl">

    </div>






    <!-- CARD -->

    <div class="bg-white

                w-[440px]

                rounded-[30px]

                overflow-hidden

                shadow-[0_15px_40px_rgba(120,80,30,0.12)]

                z-10">



       

        





        <div class="px-8 py-0 text-center">



            <!-- icon -->

            <div class="w-20 h-20

                        mx-auto

                        rounded-full

                        bg-green-50

                        shadow-lg

                        flex

                        items-center

                        justify-center">



                <div class="w-14 h-14

                            rounded-full

                            bg-green-600

                            flex

                            items-center

                            justify-center">



                    <span class="text-4xl text-white">

                        ✓

                    </span>


                </div>



            </div>






            <h1 class="mt-0

                       text-[34px]

                       font-bold

                       leading-tight

                       text-amber-950">


                Pendaftaran Berhasil


                <br>


                Dikirim!


            </h1>






            <div class="flex

                        justify-center

                        items-center

                        gap-3

                        mt-4">



                <div class="w-14 h-[2px] bg-amber-400"></div>



                <div class="w-3 h-3 rounded-full bg-amber-400"></div>



                <div class="w-14 h-[2px] bg-amber-400"></div>



            </div>







            <p class="mt-3 text-gray-700">



                Terima kasih telah mendaftar sebagai relawan di



                <b>GemaAksara</b>



            </p>






            <p class="mt-2 text-gray-600">



                Data formulir Anda sedang diperiksa oleh pihak Admin.



            </p>






            <p class="mt-3

                      text-gray-600

                      leading-7">



                Anda dapat memantau status kelulusan



                pendaftaran ini secara berkala



                melalui menu



                <b>Jadwal Saya</b>



            </p>







           <button

class="mt-6

relative

bottom-2

bg-gradient-to-r

from-[#6B240C]

via-[#B45309]

to-[#7C2D12]

text-white

px-6

py-2

text-sm

rounded-xl

shadow-lg

hover:scale-105

duration-300">

📅 Cek Jadwal Saya

</button>



        </div>




    </div>




</section>

</body>

</html>