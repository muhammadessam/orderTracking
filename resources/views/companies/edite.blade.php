@extends('layouts.app')
@section('content')
    <form method="POST" action="{{route('companies.update', $company)}}">
        @method('PATCH')
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input name="name" value="{{$company->name}}"  required type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Your Company name ....">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" value="{{$company->email}}" required class="form-control" id="email" name="email" placeholder="Your Company Email....">
        </div>
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="tel" value="{{$company->phone}}" required class="form-control" name="phone" id="phone" placeholder="Your Company Phone....">
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" value="{{$company->address}}" required class="form-control" name="address" id="address" placeholder="Your Company Address....">
        </div>
        <div class="form-group">
            <label for="website">Website</label>
            <input type="text" value="{{$company->website}}" required class="form-control" name="website" id="website" placeholder="Your Company Website....">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>


@endsection
