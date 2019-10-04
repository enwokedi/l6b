@extends('app')

@section('title', 'Edit Customer')

@section('content')

    <h1>Edit Customer</h1>

    <form action="/customer/{{ $customer->id }}" method="post">
    @method('PATCH')
        
    @include('customer.form')

    <button>Save Customer</button>
    </form>
    
@endsection