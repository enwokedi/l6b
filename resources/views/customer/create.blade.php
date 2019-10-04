@extends('app')

@section('title', 'Services')

@section('content')

    <h1>Add New Customer</h1>

    <form action="/customer" method="post">
        
        @include('customer.form')

        <button>Add New Customer</button>

    </form>




@endsection