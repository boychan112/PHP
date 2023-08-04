@extends('layout')
@section('title')
 My Todo App
@endsection

@section('content')
<div class="row mt-3">
    <div class="col-12 align-self-center">
        <ul class="list-group">
            @foreach($todos as $item)
            <li class="list-group-item"><a href="details/{{$item->id}}">{{$item->name}}</a>
            @endforeach

            <!-- <li class="list-group-item"><a href="details">Dummy todo here1</a></li>
            <li class="list-group-item"><a href="details">Dummy todo here2</a></li>
            <li class="list-group-item"><a href="details">Dummy todo here3</a></li>
            <li class="list-group-item"><a href="details">Dummy todo here4</a></li>
            <li class="list-group-item"><a href="details">Dummy todo here5</a></li> -->
        </ul>
    </div>
</div>
@endsection