@extends('layouts.main') @section('main')
<style>
    .form-registration {
        margin-top: 10%;
        margin-bottom: 15%;
    }

    .form-registration input {
        border-radius: 0;
        margin-bottom: -1px;
    }
</style>

<div class="row justify-content-center mt-4" style="min-height: 68vh">
    <div class="col-lg-4 mt-sm-5">
        <img
            src="img/3d-register-1.png"
            width="350"
            alt=""
            class="d-none d-md-block"
        />
    </div>
    <div class="col-lg-5">
        <main class="form-registration">
            <h1 class="h3 mb-3 fw-normal text-center">Register Account</h1>
            <img src="" alt="" />
            <form action="/register" method="POST">
                @csrf
                <div class="form-floating">
                    <input
                        type="text"
                        name="name"
                        class="
                            form-control
                            rounded-top
                            @error('name')is-invalid
                            @enderror
                        "
                        id="name"
                        placeholder="Your name"
                        required
                        value="{{ old('name') }}"
                    />
                    <label for="name">Name</label>
                    @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-floating">
                    <input
                        type="text"
                        name="username"
                        class="
                            form-control
                            @error('username')is-invalid
                            @enderror
                        "
                        id="username"
                        placeholder="Your username"
                        required
                        value="{{ old('username') }}"
                    />
                    <label for="username">Username</label>
                    @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-floating">
                    <input
                        type="email"
                        name="email"
                        class="form-control @error('email')is-invalid @enderror"
                        id="email"
                        placeholder="name@example.com"
                        required
                        value="{{ old('email') }}"
                    />
                    <label for="email">Email address</label>
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-floating">
                    <input
                        type="password"
                        name="password"
                        class="
                            form-control
                            rounded-bottom
                            @error('password')is-invalid
                            @enderror
                        "
                        id="password"
                        placeholder="Password"
                        required
                    />
                    <label for="password">Password</label>
                    @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <button class="w-100 btn btn-lg btn-primary mt-4" type="submit">
                    Register
                </button>
                <small class="d-block text-center mt-2 mb-3">
                    Already registered ?<a href="/login">Login</a>
                </small>
            </form>
        </main>
    </div>
    <div class="col-lg-3 mt-sm-5">
        <img
            src="img/3d-register-2.png"
            width="380"
            alt=""
            class="d-none d-md-block"
        />
    </div>
</div>
@endsection
