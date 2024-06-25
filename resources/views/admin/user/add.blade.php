@extends("layouts.admin")

@section("content")
<div class="content-wrapper">

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Mahasiswa</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Data Mahasiswa</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>


    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-6 offset-md-3">
                    <h3 class="text-center fw-bold">{{ __("Add User") }}</h3>

                    <div class="mt-4">
                        <form method="POST" action="{{ route("user.store") }}">
                            @csrf

                            <div class="">
                                <label for="name">{{ __("Name") }}</label>
                                <input
                                    id="name"
                                    type="text"
                                    class="form-control @error("name") is-invalid @enderror"
                                    name="name"
                                    value="{{ old("name") }}"
                                    required
                                    autocomplete="name"
                                    autofocus
                                />
                                @error("name")
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="mt-3">
                                <label for="nim">{{ __("NIM") }}</label>
                                <input
                                    id="nim"
                                    type="text"
                                    class="form-control @error("nim") is-invalid @enderror"
                                    name="nim"
                                    value="{{ old("nim") }}"
                                    required
                                    autocomplete="nim"
                                    autofocus
                                />
                                @error("nim")
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="mt-3">
                                <label for="ttl">{{ __("TTL") }}</label>
                                <input
                                    id="ttl"
                                    type="text"
                                    class="form-control @error("ttl") is-invalid @enderror"
                                    name="ttl"
                                    value="{{ old("ttl") }}"
                                    required
                                    autocomplete="ttl"
                                    autofocus
                                />
                                @error("ttl")
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="mt-3">
                                <label for="religion">{{ __("Agama") }}</label>
                                <input
                                    id="religion"
                                    type="text"
                                    class="form-control @error("religion") is-invalid @enderror"
                                    name="religion"
                                    value="{{ old("religion") }}"
                                    required
                                    autocomplete="religion"
                                    autofocus
                                />
                                @error("religion")
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="mt-3">
                                <label for="gender">{{ __("Jenis Kelamin") }}</label>
                                <input
                                    id="gender"
                                    type="text"
                                    class="form-control @error("gender") is-invalid @enderror"
                                    name="gender"
                                    value="{{ old("gender") }}"
                                    required
                                    autocomplete="gender"
                                    autofocus
                                />
                                @error("gender")
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="mt-3">
                                <label for="phone">{{ __("No. Hp") }}</label>
                                <input
                                    id="phone"
                                    type="text"
                                    class="form-control @error("phone") is-invalid @enderror"
                                    name="phone"
                                    value="{{ old("phone") }}"
                                    required
                                    autocomplete="phone"
                                    autofocus
                                />
                                @error("phone")
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="mt-3">
                                <label for="address">{{ __("Alamat") }}</label>
                                <input
                                    id="address"
                                    type="text"
                                    class="form-control @error("address") is-invalid @enderror"
                                    name="address"
                                    value="{{ old("address") }}"
                                    required
                                    autocomplete="address"
                                    autofocus
                                />
                                @error("address")
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="mt-3">
                                <label for="mother">{{ __("Ibu Kandung") }}</label>
                                <input
                                    id="mother"
                                    type="text"
                                    class="form-control @error("mother") is-invalid @enderror"
                                    name="mother"
                                    value="{{ old("mother") }}"
                                    required
                                    autocomplete="mother"
                                    autofocus
                                />
                                @error("mother")
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="mt-3">
                                <label for="major">{{ __("Jurusan") }}</label>
                                <input
                                    id="major"
                                    type="text"
                                    class="form-control @error("major") is-invalid @enderror"
                                    name="major"
                                    value="{{ old("major") }}"
                                    required
                                    autocomplete="major"
                                    autofocus
                                />
                                @error("major")
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="mt-3">
                                <label for="semester">{{ __("Semester") }}</label>
                                <input
                                    id="semester"
                                    type="number"
                                    class="form-control @error("semester") is-invalid @enderror"
                                    name="semester"
                                    value="{{ old("semester") }}"
                                    required
                                    autocomplete="semester"
                                    autofocus
                                />
                                @error("semester")
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="mt-3">
                                <label for="prodi">{{ __("Prodi") }}</label>
                                <input
                                    id="prodi"
                                    type="text"
                                    class="form-control @error("prodi") is-invalid @enderror"
                                    name="prodi"
                                    value="{{ old("prodi") }}"
                                    required
                                    autocomplete="prodi"
                                    autofocus
                                />
                                @error("prodi")
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="mt-3">
                                <label for="email">{{ __("Email") }}</label>
                                <input
                                    id="email"
                                    type="email"
                                    class="form-control @error("email") is-invalid @enderror"
                                    name="email"
                                    value="{{ old("email") }}"
                                    required
                                    autocomplete="email"
                                />
                                @error("email")
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="mt-3">
                                <label for="password">{{ __("Password") }}</label>
                                <input
                                    id="password"
                                    type="password"
                                    class="form-control @error("password") is-invalid @enderror"
                                    name="password"
                                    required
                                    autocomplete="new-password"
                                />
                                @error("password")
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="mt-3">
                                <label for="confirm-password">{{ __("Confirm Password") }}</label>
                                <input
                                    id="confirm-password"
                                    type="password"
                                    class="form-control @error("confirm_password") is-invalid @enderror"
                                    name="confirm_password"
                                    required
                                    autocomplete="new-password"
                                />
                                @error("confirm_password")
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="mt-3 text-center">
                                <a href="{{ route("user.index") }}" class="btn btn-danger">
                                    {{ __("Cancel") }}
                                </a>
                                <button type="submit" class="btn btn-success ms-3">
                                    {{ __("Add") }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
