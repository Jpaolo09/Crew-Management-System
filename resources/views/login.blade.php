<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <title>CMS | Login</title>
</head>

<body>
    <div class="p-5">
        <div class="row align-items-center" style="margin-top: 150px;">
            <div class="col-lg-6 col-sm-12 order-lg-1 mx-xs-0 image-responsive">
                <div class="d-flex justify-content-center">
                    <h1 class="my-5 display-5 fw-bold ls-tight">
                        Crew Management <br />
                        <span class="text-primary">System</span>
                        <br>
                        <p class="mt-3" style="color: hsl(217, 10%, 50.8%); font-size: 20px; opacity: 50%;">
                            Developed for Elite Software and Data Security Technical Examination
                        </p>
                    </h1>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12 order-lg-2">
                <div class="d-flex justify-content-center">
                    <div class="card shadow" style="width: 35rem;">
                        <div class="card-body p-5">
                            <h3 class="card-title">Login</h3>
                            <br>
                            <form action="/users/authenticate" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="username">Username:</label>
                                    <input type="text" class="form-control" id="username" name="username" aria-describedby="uasernameHelp" placeholder="Username">
                                    @error('username')
                                    <small class="text-danger" id="name-text" class="form-text text-muted">{{ $message }}</small>
                                    <br>
                                    @enderror
                                </div>

                                <br>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                    @error('password')
                                    <small class="text-danger" id="name-text" class="form-text text-muted">{{ $message }}</small>
                                    <br>
                                    @enderror
                                </div>

                                <br>

                                <button type="submit" class="btn btn-primary">Login</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>