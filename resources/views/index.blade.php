@extends('layout-base')

@section('content')
<div class="container mt-5">
        <div class="row">
            <div class="col-12 my-3">
                <a href="{{ route('create') }}" class="btn btn-primary">Create contact</a>

                <div class="float-right">
                    @if(Auth::check())
                        <form action="{{ route('logout') }}" method="POST" class="d-inline">
                            @csrf
                            <button type="submit" class="btn btn-link" href="{{ route('logout') }}">Logout</a>
                        </form>
                    @else 
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                       
                    @endif
                </div>
            </div>
            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Contact</th>
                            <th>E-mail</th>
                            @if(Auth::check())
                                <th>Actions</th>
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($contacts as $contact)
                            <tr>
                                <td>{{ $contact->id }}</td>
                                <td>{{ $contact->name }}</td>
                                <td>{{ $contact->contact }}</td>
                                <td>{{ $contact->email }}</td>
                                @if(Auth::check())
                                    <td>
                                        <div class="wrapper">
                                            <a href="{{ route('show', $contact) }}" class="btn btn-info">Show</a>
                                            <a href="{{ route('edit', $contact) }}" class="btn btn-info">Edit</a>
                                            <form action="{{ route('delete', $contact) }}" method="post" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-info" onclick="confirm('Are you sure?');">Delete</button>
                                            </form>
                                        </div>
                                    </td>
                                @endif
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection