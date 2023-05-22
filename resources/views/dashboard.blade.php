@extends('layout')

@section('content')
<section>
    <div class="d-flex align-items-center">
        <div class="container justify-content-center text-center pt-5" style="width: 100%;">
            <h1 style="font-weight: bold">Dashboard</h1>
            <br>

            <a href="/crews/create"><button type="button" class="btn btn-primary">Add Crew</button></a>
            <br>
            <br>
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">First Name</th>
                    <th scope="col">Middle Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Address</th>
                    <th scope="col">Education</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($crews as $crew)
                    <tr>
                      <td>{{ $crew->firstname }}</td>
                      <td>{{ $crew->middlename }}</td>
                      <td>{{ $crew->lastname }}</td>
                      <td>{{ $crew->email }}</td>
                      <td>{{ $crew->address }}</td>
                      <td>{{ $crew->education }}</td>
                      <td>{{ $crew->phone }}</td>
                      <td>
                          <div>
                              <a href="/crews/{{ $crew->id }}"><button type="button" class="my-2 btn btn-primary">View</button></a>
                              <a href="/crews/{{ $crew->id }}/edit"><button type="button" class="my-2 btn btn-success">Edit</button></a>
                              <a href="/crews/{{ $crew->id }}/delete"><button type="button" class="my-2 btn btn-danger">Delete</button></a>
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