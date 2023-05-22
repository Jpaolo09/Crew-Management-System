@extends('layout')

@section('content')
<section>
    <div class="align-items-center">
        <div class="d-flex container mt-5 justify-content-between">
            <h1 style="font-weight: bold;">Document Details</h1>
            <div>
                <a href="/documents/{{ $document->id }}/edit"><button type="button" class="btn btn-success">Edit</button></a>
                <a href="/documents/{{ $document->id }}/delete"><button type="button" class="btn btn-danger">Delete</button></a>
            </div>
        </div>

        <div class="container mt-5">
            <div class="card">
                <div class="card-body p-5">
                    <p><b>Code: </b>{{ $document->code }}</p>
                    <p><b>Name: </b>{{ $document->name }}</p>
                    <p><b>Number: </b>{{ $document->number }}</p>
                    <p><b>Date Issued: </b>{{ $document->date_issued }}</p>
                    <p><b>Date Expiry: </b>{{ $document->date_expiry }}</p>
                    <p><b>Remarks: </b>{{ $document->remarks }}</p>
                    <p><b>Created At: </b>{{ $document->created_at }}</p>
                    <p><b>Updated At: </b>{{ $document->updated_at }}</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection