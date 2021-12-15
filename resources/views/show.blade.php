@extends('layout-base')

@section('content')
    <div class="container mt-5">
        <div class="col-12 my-2">
            <div class="wrapper">
                <a href="{{ route('edit', $contact) }}" class="btn btn-info">Edit</a>

                <form action="{{ route('delete', $contact) }}" method="post" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-info" onclick="confirm('Are you sure?');">Delete</button>
                </form>
            </div>
        </div>
        <div class="col-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h2 class="card-title">{{ $contact->name }}</h2>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <p><strong>ID</strong> {{ $contact->id }}</p>
                        <p><strong>Contact</strong> <a href="tel:{{$contact->contact}}" class="btn btn-link">{{ $contact->contact }}</a></p>
                        <p><strong>E-mail</strong> <a href="mail:{{$contact->contact}}" class="btn btn-link">{{ $contact->email }}</a></p>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
@endsection