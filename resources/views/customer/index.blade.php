@extends('app')

@section('title', 'Services')

@section('content')

    <h1>Customers</h1>

    <a href="/customer/create">Add New Customer</a>

    @forelse($customers as $customer)
        <p><strong>
                <a href="/customer/{{ $customer->id }}">{{ $customer->name}}</a>
            </strong> ({{ $customer->email }})</p>

    @empty

        <p>No Customers to show</p>
    @endforelse
    


@endsection