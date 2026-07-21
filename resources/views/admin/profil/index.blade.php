@extends('admin.layouts.app')

@extends(Auth::user()->role == 'admin' ? 'admin.layouts.app' : 'relawan.layouts.app')

@section('title','Profil Saya')

@section('content')


@if(session('success'))

<div class="alert alert-success">
    {{ session('success') }}
</div>

@endif


<div class="card-custom">


    <div class="card-header-custom">

        <i class="bi bi-person-circle me-2"></i>

        Profil Saya

    </div>


    <div class="card-body-custom">


        <div class="row g-4">


            <!-- BAGIAN KIRI PROFIL -->
            <div class="col-md-4">


                <div class="text-center">


                    <i class="bi bi-person-circle"
                       style="font-size:100px;color:#6F4E37;">
                    </i>


                    <h3 class="mt-3">

                        {{ $user->name }}

                    </h3>


                    <span class="badge bg-secondary">

                        {{ ucfirst($user->role) }}

                    </span>


                </div>


            </div>



            <!-- BAGIAN KANAN FORM -->
            <div class="col-md-8">


                <form action="{{ route('profil.update') }}"
                      method="POST">


                    @csrf
                    @method('PUT')


                    <div class="mb-3">

                        <label class="form-label">
                            Nama
                        </label>

                        <input
                            type="text"
                            name="name"
                            class="form-control"
                            value="{{ old('name',$user->name) }}">

                    </div>



                    <div class="mb-3">

                        <label class="form-label">
                            Email
                        </label>

                        <input
                            type="email"
                            name="email"
                            class="form-control"
                            value="{{ old('email',$user->email) }}">

                    </div>

                    <div class="mb-4">

                        <label class="form-label">
                            Password 
                        </label>

                        <div class="position-relative">

                            <input
                                type="password"
                                name="password"
                                id="password"
                                class="form-control pe-5">
                                

                            <button
                                type="button"
                                class="btn position-absolute top-50 end-0 translate-middle-y me-2"
                                onclick="togglePassword('password')">

                                <i class="bi bi-eye-fill" id="icon-password"></i>

                            </button>

                        </div>

                    </div>

                    <div class="mb-4">

                        <label class="form-label">
                            Konfirmasi Password
                        </label>

                    <div class="position-relative">

                        <input
                            type="password"
                            name="password_confirmation"
                            id="password_confirmation"
                            class="form-control pe-5">

                        <button
                            type="button"
                            class="btn position-absolute top-50 end-0 translate-middle-y me-2"
                            onclick="togglePassword('password_confirmation')">

                            <i class="bi bi-eye-fill" id="icon-password_confirmation"></i>

                        </button>

                    </div>

                </div>

                <!-- TOMBOL SIMPAN -->
                <button
                    type="submit"
                    class="btn btn-brown">

                    <i class="bi bi-check-circle-fill"></i>

                    Simpan Perubahan

                </button>

                </form>

            </div>

        </div>

    </div>

</div>

<script>

function togglePassword(id)
{
    let input = document.getElementById(id);

    let icon = document.getElementById('icon-' + id);


    if(input.type === "password")
    {

        input.type = "text";

        icon.classList.remove('bi-eye-fill');

        icon.classList.add('bi-eye-slash-fill');

    }
    else
    {

        input.type = "password";

        icon.classList.remove('bi-eye-slash-fill');

        icon.classList.add('bi-eye-fill');

    }

}

</script>

@endsection