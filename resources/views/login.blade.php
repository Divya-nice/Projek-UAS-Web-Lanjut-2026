@extends('layouts.app')

@section('title','Login - GemaAksara')

@section('content')

<style>
    @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&display=swap');
    .font-serif-custom {
        font-family: 'Playfair Display', serif;
    }
</style>

<div class="h-screen flex items-center justify-center overflow-hidden px-6" style="background-color: #F5F0EA;">

    <div class="w-full max-w-[850px] h-[520px] bg-white rounded-[32px] shadow-[0_20px_50px_rgba(107,79,59,0.15)] overflow-hidden grid grid-cols-2">

        <div class="relative p-8 flex flex-col items-center justify-center text-center overflow-hidden" 
             style="background: linear-gradient(135deg, #8A6746 0%, #C0A083 50%, #E3CDB6 100%);">
            
            <div class="absolute inset-0 z-0 pointer-events-none">
                <svg viewBox="0 0 425 520" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full h-full object-cover">
                    <circle cx="380" cy="40" r="280" fill="#5A3E26" fill-opacity="0.08"/>
                    <circle cx="-20" cy="480" r="320" fill="#FFFFFF" fill-opacity="0.18"/>
                </svg>
            </div>

            <div class="relative z-10 flex flex-col items-center px-4 mt-2">
                
                <div class="w-24 h-24 bg-white rounded-[24px] shadow-[0_10px_20px_rgba(90,62,38,0.2)] flex items-center justify-center p-3 mb-6">
                    <img src="{{ asset('images/buku.png.png') }}" class="w-full h-full object-contain">
                </div>

                <h2 class="text-[30px] font-bold text-white tracking-wide mb-3 font-serif-custom drop-shadow-sm">
                    GemaAksara
                </h2>

                <p class="text-[12.5px] leading-relaxed font-light max-w-[240px] mb-8 text-white drop-shadow-sm">
                    Platform komunitas pecinta buku untuk berdiskusi, membaca bersama, dan mengikuti berbagai kegiatan literasi.
                </p>

                <div class="flex gap-2 items-center">
                    <span class="w-2.5 h-2.5 rounded-full bg-white shadow-sm"></span>
                    <span class="w-2 h-2 rounded-full bg-white opacity-40"></span>
                    <span class="w-2 h-2 rounded-full bg-white opacity-40"></span>
                    <span class="w-2 h-2 rounded-full bg-white opacity-40"></span>
                </div>

            </div>

            <div class="absolute bottom-8 left-8 z-10 flex flex-col gap-1.5 opacity-40 w-14">
                <div class="h-[1.5px] bg-white w-full"></div>
                <div class="h-[1.5px] bg-white w-3/4"></div>
                <div class="h-[1.5px] bg-white w-1/2"></div>
            </div>

        </div>


        <div class="bg-white px-12 py-10 flex flex-col justify-center">
            
            <div class="mb-6">
                <h1 class="text-[32px] font-bold tracking-tight mb-1 font-serif-custom" style="color: #3B2818;">
                    Masuk Akun
                </h1>
                <p class="text-[12px] font-light" style="color: #8C7865;">
                    Gabung ke komunitas literasi terbaik
                </p>
                <div class="w-full border-t mt-4" style="border-color: #EFE8E0;"></div>
            </div>

            @if(session('success'))
                <div class="mb-4 p-3 bg-green-50 border border-green-200 text-green-700 text-xs rounded-xl font-medium">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('login.process') }}" method="POST" class="space-y-4">
                @csrf

                <div>
                    <input
                        type="email"
                        name="email"
                        value="{{ old('email') }}"
                        placeholder="Email"
                        class="w-full px-4 py-3.5 border rounded-[14px] outline-none text-[13.5px] transition-all placeholder-stone-400 focus:border-[#8A6746]"
                        style="background-color: #FDFBF8; border-color: #EAE1D8; color: #4A3524;"
                        required>
                    @error('email')
                        <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span>
                    @enderror
                </div>

                <div class="relative">
                    <input
                        type="password"
                        id="password"
                        name="password"
                        placeholder="Password"
                        class="w-full px-4 py-3.5 border rounded-[14px] outline-none text-[13.5px] transition-all placeholder-stone-400 focus:border-[#8A6746]"
                        style="background-color: #FDFBF8; border-color: #EAE1D8; color: #4A3524;"
                        required>
                    
                    <div 
                        id="togglePassword" 
                        onclick="
                            const input = document.getElementById('password');
                            const eye = document.getElementById('eyeIcon');
                            const eyeSlash = document.getElementById('eyeSlashIcon');
                            if (input.type === 'password') {
                                input.type = 'text';
                                eye.classList.add('hidden');
                                eyeSlash.classList.remove('hidden');
                            } else {
                                input.type = 'password';
                                eyeSlash.classList.add('hidden');
                                eye.classList.remove('hidden');
                            }
                        "
                        class="absolute right-4 top-1/2 -translate-y-1/2 text-stone-400 hover:text-stone-600 cursor-pointer z-50 p-1 select-none">
                        
                        <svg id="eyeIcon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        </svg>

                        <svg id="eyeSlashIcon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 hidden">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.98 8.223A10.477 10.477 0 0 0 1.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.451 10.451 0 0 1 12 4.5c4.756 0 8.773 3.162 10.065 7.498a10.522 10.522 0 0 1-4.293 5.774M6.228 6.228 3 3m3.228 3.228 3.65 3.65m7.894 7.894L21 21m-3.228-3.228-3.65-3.65m0 0a3 3 0 1 1-4.243-4.243m4.242 4.242L9.88 9.88" />
                        </svg>
                    </div>
                </div>

                <div class="flex justify-between items-center text-[11.5px] pt-1">
                    <label class="flex items-center gap-2 cursor-pointer select-none" style="color: #8C7865;">
                        <input type="checkbox" name="remember" class="rounded w-3.5 h-3.5 checked:bg-[#8A6746]" style="border-color: #DCD0C0;">
                        Ingat saya
                    </label>
                    <a href="#" class="font-medium hover:underline" style="color: #8A6746;">Lupa password?</a>
                </div>

                <button
                    type="submit"
                    class="w-full h-12 rounded-[14px] font-semibold text-white text-[15px] transition-all transform active:scale-[0.98] mt-2 shadow-[0_6px_15px_rgba(138,103,70,0.25)]"
                    style="background: linear-gradient(180deg, #967455 0%, #7A5B3E 100%);">
                    Masuk Sekarang
                </button>
            </form>

            <div class="flex items-center my-4">
                <div class="flex-1 border-t" style="border-color: #EFE8E0;"></div>
                <span class="px-3 text-[11px] font-light" style="color: #A49382;">atau masuk dengan</span>
                <div class="flex-1 border-t" style="border-color: #EFE8E0;"></div>
            </div>

            <button 
                type="button"
                class="w-full h-12 border rounded-[14px] flex items-center justify-center gap-2.5 text-[14px] font-medium bg-white hover:bg-stone-50 transition-all"
                style="border-color: #EAE1D8; color: #4A3524;">
                <img src="https://www.gstatic.com/firebasejs/ui/2.0.0/images/auth/google.svg" class="w-4 h-4">
                Masuk dengan Google
            </button>

            <p class="text-center text-[13px] mt-5" style="color: #8C7865;">
                Belum punya akun? 
                <a href="{{ route('register') }}" class="font-bold hover:underline ml-1" style="color: #6D4C30;">Daftar</a>
            </p>

        </div>
    </div>
</div>

@endsection