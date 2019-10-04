@extends('app')

@section('title', 'Services')

@section('content')

    <h1>Welcome to Services</h1>

    <form action="/service" method="post">
        @csrf
        <input type="text" name="name" autocomplete="off">

        <button>Add Service</button>

    </form>
    <p style="color: red;">@error('name') {{ $message }} @enderror</p>

    <ul>
        @forelse($services as $service)
            <li>{{ $service->name }}</li>
        @empty

            <li>No services available</li>
        
        @endforelse
    </ul>


@endsection