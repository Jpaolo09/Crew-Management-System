@extends('layout')

@section('content')
<section>
    <div class="align-items-center">
        <div class="d-flex container mt-5 justify-content-between">
            <h1 style="font-weight: bold;">{{ $crew->lastname }}'s Details</h1>
            <div>
                <a href="/crews/{{ $crew->id }}/edit"><button type="button" class="btn btn-success">Edit</button></a>
                <a href="/crews/{{ $crew->id }}/delete"><button type="button" class="btn btn-danger">Delete</button></a>
            </div>
        </div>

        <div class="container mt-5">
            <div class="card">
                <div class="card-body p-5">
                    <p><b>Name: </b>{{ $crew->firstname }}</p>
                    <p><b>Middle Name: </b>{{ $crew->middlename }}</p>
                    <p><b>Last Name: </b>{{ $crew->lastname }}</p>
                    <p><b>Email: </b>{{ $crew->email }}</p>
                    <p><b>Address: </b>{{ $crew->address }}</p>
                    <p><b>Education: </b>{{ $crew->education }}</p>
                    <p><b>Contact: </b>{{ $crew->firstname }}</p>
                    <p><b>Created At: </b>{{ $crew->created_at }}</p>
                    <p><b>Updated At: </b>{{ $crew->updated_at }}</p>
                </div>
            </div>
        </div>

        <br>
        <div class="container justify-content-center pt-5">
            <h4>{{ $crew->lastname }}'s Documents</h4>
            <br>

            <a href="/documents/create/{{ $crew->id }}"><button type="button" class="btn btn-primary">Add document to this crew</button></a>
            <br>
            <br>
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">Code</th>
                    <th scope="col">Name</th>
                    <th scope="col">Document No.</th>
                    <th scope="col">Date Issued</th>
                    <th scope="col">Date Expiry</th>
                    <th scope="col">Remarks</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Updated At</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($crew->documents as $document)
                    <tr>
                      <td>{{ $document->code }}</td>
                      <td>{{ $document->name }}</td>
                      <td>{{ $document->number }}</td>
                      <td>{{ $document->date_issued }}</td>
                      <td>{{ $document->date_expiry }}</td>
                      <td>{{ $document->remarks }}</td>
                      <td>{{ $document->created_at }}</td>
                      <td>{{ $document->updated_at }}</td>
                      <td>
                          <div>
                              <a href="/documents/{{ $document->id }}"><button type="button" class="btn btn-primary">View</button></a>
                              <a href="/documents/{{ $document->id }}/edit"><button type="button" class="btn btn-success">Edit</button></a>
                              <a href="/documents/{{ $document->id }}/delete"><button type="button" class="btn btn-danger">Delete</button></a>
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