@extends('layouts.app')
@section('content')
    <div class="row" style="margin-top: 50px;">
        <a class="btn btn-outline-success" href="{{route('companies.create')}}"> Add New Company</a>
    </div>
    @if(count($companies) > 0)
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
            @foreach($companies as $company)
                <tr>
                    <th><a href="{{route('companies.show', $company)}}">{{$company->name}}</a> </th>
                    <td>{{$company->address}}</td>
                    <td>{{$company->website}}</td>
                    <td>{{$company->email}}</td>
                    <td>
                        <div class="row">
                            <a class="btn btn-primary" href="{{route('companies.edit', $company)}}" style="margin-right: 10px">Edit</a>
                            <form class="form-inline" action="{{route('companies.destroy', $company)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @else
        <h1>No Companies Yet</h1>
    @endif

@endsection
