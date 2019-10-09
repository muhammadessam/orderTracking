@extends('layouts.app')
@section('content')
    <div class="jumbotron">
        <h1 class="display-4">{{$company->name}}</h1>
        <p class="lead">
        <hr class="my-4">
        <p>{{$company->email}}</p>
        <a class="btn btn-primary btn-lg" href="{{route('createOrder',$company)}}" role="button">Add Orders</a>
        <a class="btn btn-primary btn-lg" href="{{route('createTag',$company)}}" role="button">Add Tags</a>
    </div>
    @if(count($company->orders)>0)
        <h1>Your Orders</h1>
        <table class="table" style="margin-top: 50px;">
            <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Address</th>
                <th scope="col">WebSite</th>
                <th scope="col">Email</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            @foreach($company->orders as $order)
                <tr>
                    <th>{{$order->address}}</th>
                    <td>{{$order->orderInfo}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>

    @else
    <h1>No orders yet click to add new orders</h1>
    @endif
@endsection
