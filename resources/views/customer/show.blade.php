@extends('app')

@section('title', 'Customer Details')

@section('content')

    <h1>Customer Details</h1>

    <strong>Name</strong>
    <p>{{ $customer->name }}</p>

    <strong>Email</strong>
    <p>{{ $customer->email }}

    <div>
        <a href="/customer/{{ $customer->id }}/edit">Edit</a>

        <form action="/customer/{{ $customer->id }}" method="post">
            @method('DELETE')
            @csrf
            <button>Delete</button>
        </form>
    </div>
    


@endsection