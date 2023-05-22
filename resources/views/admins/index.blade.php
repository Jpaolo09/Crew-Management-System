@extends('layout')

@section('content')
<section>
    <div class="d-flex align-items-center">
        <div class="container justify-content-center text-center pt-5" style="width: 100%;">
            <h1 style="font-weight: bold">Admin Dashboard</h1>
            <br>

            <a href="/register"><button type="button" class="btn btn-primary">Add Admin</button></a>
            <br>
            <br>
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($admins as $admin)
                    <tr>
                      <td>{{ $admin->name }}</td>
                      <td>{{ $admin->email }}</td>
                      <td>
                          <div>
                              <a href="/users/{{ $admin->id }}/delete"><button type="button" class="btn btn-danger">Delete</button></a>
                          </div>
                      </td>
                    </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>
</section>
@endsection