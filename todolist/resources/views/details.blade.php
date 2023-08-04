@extends('layout')
@section('title')
 Create To Do
@endsection

@section('content')
    <ul class="details-ul">
        <li class="todo-details"><h1><b>TODO DETAILS</b></h1></li>
        <li>
            <h3 class="todo-name">{{$todos->name}}</h3>
            <p>{{$todos->description}}</p>
            
            <a href="/edit/{{$todos->id}}"><span class="btn btn-primary">Edit</span></a>
            <a href="/delete/{{$todos->id}}"><span class="btn btn-danger">Delete</span></a>
            <!-- <a href="/"><span class="btn btn-primary">Edit</span></a>
            <a href="delete"><span class="btn btn-primary delete">Delete</span></a> -->
        </li>
    </ul>
@endsection