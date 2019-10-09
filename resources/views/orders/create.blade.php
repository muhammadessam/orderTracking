@extends('layouts.app')
@section('content')
    <div>
        <form method="POST" action="{{route('storeOrder', $company)}}">
            @csrf
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" name="address" class="form-control" id="address" placeholder="Address ...">
            </div>
            <div class="form-group">
                <label for="orderInfo">Info</label>
                <textarea  class="form-control" name="orderInfo" id="orderInfo" cols="30" rows="10"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Add Order</button>
        </form>
    </div>
@endsection
