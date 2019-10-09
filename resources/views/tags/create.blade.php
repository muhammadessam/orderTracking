@extends('layouts.app')
@section('content')
    @foreach($tags as $tag)

        <form style="margin: 10px;" action="{{route('storeTag',[$company, $tag])}}" method="POST">
            @csrf
            <button type="submit" class="btn btn-primary">{{$tag->name}}</button>
        </form>
    @endforeach
@endsection
