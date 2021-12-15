@extends('layout-base')

@section('content')
    <div class="container">
        <div class="col-12 mt-5">
            <div class="card card-primary">
                <div class="card-header">
                    <h5 class="card-title">Edit contact</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('update', $contact) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <p>ID: {{ $contact->id }}</p>
                        </div>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Name" required value="{{ old('name', $contact->name) }}">
                            @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="contact">Contact</label>
                            <input type="text" class="form-control" name="contact" maxlength="9" id="contact" placeholder="Contact" required value="{{ old('contact', $contact->contact) }}">
                            @error('contact')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="text" class="form-control" name="email" id="email" placeholder="E-mail" required value="{{ old('email', $contact->email) }}">
                            @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="btn-action">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
    </div>
@endsection