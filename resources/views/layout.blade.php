<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <title>CMS</title>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-light bg-light justify-content-between p-3">
        <div>
            <a class="navbar-brand" style="font-weight: bold; font-size: 1.5rem;" href="/dashboard">Crew Management System</a>
            <br>
            <small style="font-weight: bold; opacity: 50%;">EliteSDSI Technical Exam</small>
        </div>
        <div class="d-inline-flex">
            <a class="me-3" href="/admin">Admin</a>
            <form action="/logout" method="POST">
                @csrf
                <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Logout</button>
            </form>
        </div>
    </nav>
    <!-- navbar -->

    <!-- content -->
    @yield('content')
    <!-- content -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>

</html>