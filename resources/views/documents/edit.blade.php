@extends('layout')

@section('content')
<section>
    <div class="align-items-center">
        <div class="justify-content-center">
            <div class="container mt-5 text-center">
                <h1 style="font-weight: bold;">Edit Document</h1>
            </div>

            <div class="container d-flex justify-content-center mt-5">
                <div class="card shadow" style="width: 600px;">
                    <div class="card-body p-5">
                        <form action="/documents/{{$document->id}}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <input hidden type="text" class="form-control" id="crew_id" name="crew_id" aria-describedby="crew_idHelp" value="{{ $document->crew_id }}">
                            </div>

                            <div class="form-group">
                                <label for="code">Code:</label>
                                <input type="text" class="form-control" id="code" name="code" aria-describedby="codeHelp" placeholder="Code" value="{{ $document->code }}">
                                @error('code')
                                <small class="text-danger" id="code-text" class="form-text text-muted">{{ $message }}</small>
                                <br>
                                @enderror
                            </div>
    
                            <div class="form-group">
                                <label for="name">Document Name:</label>
                                <input type="text" class="form-control" id="name" name="name" aria-describedby="nameHelp" placeholder="Document Name" value={{ $document->name }}>
                                @error('name')
                                <small class="text-danger" id="firstname-text" class="form-text text-muted">{{ $message }}</small>
                                <br>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="number">Document No.:</label>
                                <input type="number" class="form-control" id="number" name="number" aria-describedby="numberHelp" placeholder="Document No." value={{ $document->number }}>
                                @error('number')
                                <small class="text-danger" id="firstname-text" class="form-text text-muted">{{ $message }}</small>
                                <br>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="date_issued">Date Issued:</label>
                                <input type="date" class="form-control" id="date_issued" name="date_issued" aria-describedby="date_issuedHelp" value={{ $document->date_issued }}>
                                @error('date_issued')
                                <small class="text-danger" id="firstname-text" class="form-text text-muted">{{ $message }}</small>
                                <br>
                                @enderror
                            </div>
    
                            <div class="form-group">
                                <label for="date_expiry">Date Expiry:</label>
                                <input type="date" class="form-control" id="date_expiry" name="date_expiry" aria-describedby="date_expiryHelp" value={{ $document->date_expiry }}>
                                @error('date_expiry')
                                <small class="text-danger" id="firstname-text" class="form-text text-muted">{{ $message }}</small>
                                <br>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="remarks">Remarks:</label>
                                <input type="remarks" class="form-control" id="remarks" name="remarks" aria-describedby="remarksHelp" placeholder="Remarks" value={{ $document->remarks }}>
                                @error('remarks')
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