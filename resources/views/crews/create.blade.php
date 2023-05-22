@extends('layout')

@section('content')
<section>
    <div class="align-items-center">
        <div class="justify-content-center">
            <div class="container mt-5 text-center">
                <h1 style="font-weight: bold;">Add Crew</h1>
            </div>

            <div class="container d-flex justify-content-center mt-5">
                <div class="card shadow" style="width: 600px;">
                    <div class="card-body p-5">
                        <form action="/crews" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="firstname">First Name:</label>
                                <input type="text" class="form-control" id="firstname" name="firstname" aria-describedby="firstnameHelp" placeholder="First Name" value="{{ old('firstname') }}">
                                @error('firstname')
                                <small class="text-danger" id="firstname-text" class="form-text text-muted">{{ $message }}</small>
                                <br>
                                @enderror
                            </div>
    
                            <div class="form-group">
                                <label for="middlename">Middle Name:</label>
                                <input type="text" class="form-control" id="middlename" name="middlename" aria-describedby="middlenameHelp" placeholder="Middle Name" value="{{ old('middlename') }}">
                                @error('middlename')
                                <small class="text-danger" id="firstname-text" class="form-text text-muted">{{ $message }}</small>
                                <br>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="lastname">Last Name:</label>
                                <input type="text" class="form-control" id="lastname" name="lastname" aria-describedby="lastnameHelp" placeholder="Last Name" value="{{ old('lastname') }}">
                                @error('lastname')
                                <small class="text-danger" id="firstname-text" class="form-text text-muted">{{ $message }}</small>
                                <br>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Email" value="{{ old('email') }}">
                                @error('email')
                                <small class="text-danger" id="firstname-text" class="form-text text-muted">{{ $message }}</small>
                                <br>
                                @enderror
                            </div>
    
                            <div class="form-group">
                                <label for="address">Address:</label>
                                <input type="address" class="form-control" id="address" name="address" aria-describedby="addressHelp" placeholder="Address" value="{{ old('address') }}">
                                @error('address')
                                <small class="text-danger" id="firstname-text" class="form-text text-muted">{{ $message }}</small>
                                <br>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="education">Education:</label>
                                <input type="education" class="form-control" id="education" name="education" aria-describedby="educationHelp" placeholder="Education" value="{{ old('education') }}">
                                @error('education')
                                <small class="text-danger" id="firstname-text" class="form-text text-muted">{{ $message }}</small>
                                <br>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="phone">Phone No:</label>
                                <input type="phone" class="form-control" id="phone" name="phone" aria-describedby="phoneHelp" placeholder="Phone No." value="{{ old('phone') }}">
                                @error('phone')
                                <small class="text-danger" id="firstname-text" class="form-text text-muted">{{ $message }}</small>
                                <br>
                                @enderror
                            </div>

                            <br>
                            <small style="font-weight: bold; opacity: 50%;">note: you can add documents to this crew after creating the record.</small>
                            <br>
    
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