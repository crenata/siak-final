@extends("layouts.app")

@section("content")
<div class="vh-100">
  <div class="container py-5 h-100">
    <div class="row d-flex align-items-center justify-content-center h-100">
        <h2 class="text-center fw-bold">{{ __("LOG IN") }}</h2>
      <div class="col-md-8 col-lg-7 col-xl-6">
        <img src="https://jobs.semnet.id/jobzilla/images/login-bg.png"
          class="img-fluid" alt="Phone image">
      </div>
      <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
          <!-- Email input -->
          <div class="form-outline mb-4">
            <form method="POST" action="{{ route("login") }}">
                @csrf
                                <input
                                    id="email"
                                    type="email"
                                    class="form-control @error("email") is-invalid @enderror"
                                    name="email"
                                    value="{{ old("email") }}"
                                    required
                                    autocomplete="email"
                                    autofocus
                                    placeholder="Email Address"
                                />
                                @error("email")
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
          </div>

          <!-- Password input -->
          <div class="form-outline mb-4">
                                <input
                                    id="password"
                                    type="password"
                                    class="form-control @error("password") is-invalid @enderror"
                                    name="password"
                                    required
                                    autocomplete="current-password"
                                    placeholder="Password"
                                />
                                @error("password")
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
          </div>

          <div class="form-check mt-3">
                                <input
                                    class="form-check-input"
                                    type="checkbox"
                                    name="remember"
                                    id="remember" {{ old("remember") ? "checked" : "" }}
                                />
                                <label class="form-check-label" for="remember">{{ __("Remember Me") }}</label>
            </div>
            <div class="mt-3">
                            <button type="submit" class="btn btn-success">{{ __("Log in") }}</button>  
                            <br><br>
                            <a style="text-decoration:none" href="{{ route("admin.login") }}">
                                    {{ __("Log in as Admin?") }}
                            </a>                               
                            @if (Route::has("password.request"))
                                <a style="text-decoration:none" class="btn btn-link" href="{{ route("password.request") }}">
                                    {{ __("Forgot Your Password?") }}
                                </a>
                            @endif 
                </div>
            </form>
        </div>
    </div>
  </div>
</div>
@endsection
