<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="sign-in-page vh-100"
        style="background-image: url(./assets/images/pages/01.webp); background-size: cover; background-repeat: no-repeat;">
        <div class="container">
            <div class="row justify-content-center align-items-center height-self-center vh-100">
                <div class="col-lg-5 col-md-12 align-self-center">
                    <div class="user-login-card rounded-3">
                        <a href="{{ url('/') }}">
                            <img class="img-fluid logo" src="{{ asset('/logo-w.webp') }}" alt="#">
                        </a>
                        <div class="sign-in-page-data">
                            <div class="sign-in-from w-100 m-auto">
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="email" class="mb-2 custom-form-label">
                                            {{ __('Email Address') }}
                                        </label>
                                        <input placeholder="Enter email" autocomplete="off" required type="email"
                                            id="email" name="email"
                                            class="mb-0 form-control @error('email') is-invalid @enderror"
                                            value="{{ old('email') }}" autofocus />
                                        @error('email')
                                            <div class="invalid-feedback  ">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="mb-2 custom-form-label">
                                            {{ __('Password') }}
                                        </label>
                                        <div class="input-group custom-input-group mb-3">
                                            <input placeholder="Password" required type="password"
                                                id="password" name="password"
                                                class="mb-0 form-control @error('password') is-invalid @enderror"
                                                autocomplete="current-password">
                                            <span class="input-group-text">
                                                <i class="ph ph-eye-slash" id="togglePassword"></i>
                                            </span>
                                        </div>
                                        @error('password')
                                            <div class="invalid-feedback d-block">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="checkbox" id="remember_me" name="remember">
                                        <label class="form-check-label" for="remember_me">
                                            {{ __('Remember me') }}
                                        </label>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        @if (Route::has('password.request'))
                                            <a class="text-sm text-primary" href="{{ route('password.request') }}">
                                                {{ __('Forgot your password?') }}
                                            </a>
                                        @endif
                                    </div>
                                    <button type="submit" class="btn btn-primary text-capitalize position-relative w-100 my-3 rounded-3">
                                        <span class="button-text">{{ __('Log in') }}</span>
                                    </button>
                                    <div class="d-flex justify-content-center align-items-center gap-2 links my-3">
                                        {{ __('If You are new?') }}
                                        <a href="{{ route('register') }}" class="st-sub-card setting-dropdown">
                                            <h6 class="m-0 text-primary">
                                                {{ __('Sign Up') }}
                                            </h6>
                                        </a>
                                    </div>
                                    <div class="seperator d-flex justify-content-center align-items-center">
                                        <span class="line"></span>
                                        <span class="mx-2">OR</span>
                                        <span class="line"></span>
                                    </div>
                                    {{-- <div class="css_prefix-social-login-section text-center">
                                        {{ __('No apps configured. Please contact your administrator.') }}
                                    </div> --}}
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
