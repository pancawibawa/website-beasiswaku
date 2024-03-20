@extends('layouts.app')

@section('content')
    <div class="row justify-content-center mt-5 mb-5">
        <div class="col-md-3">
            <h1 class="h3 mb-3 fw-normal text-center">Silahkan Daftar</h1>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-floating">
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name"
                        placeholder="name" autofocus required value="{{ old('name') }}"required autocomplete="name"
                        autofocus>
                    <label for="name">Masukan Nama</label>
                    @error('name')
                        <div class="invalid-feedback" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                    <br>
                </div>
                <div class="form-floating">
                    <input type="text" name="email" class="form-control @error('email') is-invalid @enderror"
                        id="email" placeholder="email" autofocus required value="{{ old('email') }}"required
                        autocomplete="email" autofocus>
                    <label for="email">Masukan Email</label>
                    @error('email')
                        <div class="invalid-feedback" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                    <br>
                </div>
                <div class="form-floating">
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                        id="password" placeholder="password" autofocus required value="{{ old('password') }}"required
                        autocomplete="new-password" autofocus>
                    <label for="password">Masukan Password</label>
                    @error('password')
                        <div class="invalid-feedback" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                    <br>
                </div>
                <div class="form-floating">
                    <input type="password" name="password_confirmation" class="form-control @error('password') is-invalid @enderror"
                        id="password-confirm" placeholder="password" autofocus required value="{{ old('password') }}"required
                        autocomplete="new-password" autofocus>
                    <label for="password-confirm">Konfirmasi Password</label>
                    @error('password-confirm')
                        <div class="invalid-feedback" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                    <br>
                </div>





                {{-- <div class="row mb-3">
                    <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                            name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                            name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="password-confirm"
                        class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                    <div class="col-md-6">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                            required autocomplete="new-password">
                    </div>
                </div> --}}
                <button class="w-100 login_button" type="submit">Daftar</button>
            </form>
            <small>
                @if (Route::has('login'))
                    <p class="text pt-3 text-muted">sudah punya akun?
                        <a class="btn-daftar" href="{{ route('login') }}">Masuk</a>
                    </p>
                @endif
            </small>

            </main>
        </div>
    </div>


    {{-- <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="name"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password-confirm"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
@endsection
