@extends('layout')

@section('content')
<section>
    <div class="align-items-center">
        <div class="justify-content-center">
            <div class="container mt-5 text-center">
                <h1 style="font-weight: bold;">Add Admin</h1>
            </div>

            <div class="container d-flex justify-content-center mt-5">
                <div class="card shadow" style="width: 600px;">
                    <div class="card-body p-5">
                        <form action="/user" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" class="form-control" id="name" name="name" aria-describedby="nameHelp" placeholder="Name" value="{{ old('name') }}">
                                @error('name')
                                <small class="text-danger" id="name-text" class="form-text text-muted">{{ $message }}</small>
                                <br>
                                @enderror
                            </div>

                            <br>
                            <div class="form-group">
                                <label for="username">Username:</label>
                                <input type="text" class="form-control" id="username" name="username" aria-describedby="usernameHelp" placeholder="Userame" value="{{ old('username') }}">
                                @error('username')
                                <small class="text-danger" id="name-text" class="form-text text-muted">{{ $message }}</small>
                                <br>
                                @enderror
                            </div>
    
                            <br>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Email" value="{{ old('email') }}">
                                @error('email')
                                <small class="text-danger" id="firstname-text" class="form-text text-muted">{{ $message }}</small>
                                <br>
                                @enderror
                            </div>

                            <br>
                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input type="password" class="form-control" id="password" name="password" aria-describedby="passwordHelp" placeholder="Password" value="{{ old('password') }}">
                                @error('password')
                                <small class="text-danger" id="firstname-text" class="form-text text-muted">{{ $message }}</small>
                                <br>
                                @enderror
                            </div>

                            <br>
                            <div class="form-group">
                                <label for="password_confirm">Confirm Password:</label>
                                <input type="password" class="form-control" id="password_confirm" name="password_confirmation" aria-describedby="password_confirmHelp" placeholder="Confirm Password" value="{{ old('password_confirm') }}">
                                @error('password_confirm')
                                <small class="text-danger" id="firstname-text" class="form-text text-muted">{{ $message }}</small>
                                <br>
                                @enderror
                            </div>
    
                            <br>
                            <a href="/dashboard"><button type="button" class="btn btn-danger">Cancel</button></a>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</section>
@endsection