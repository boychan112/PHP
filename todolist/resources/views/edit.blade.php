@extends('layout')
@section('title')
Edit Todo
@endsection
@section('content')
<from action="/update/{{$todos->id}}" method="post" class="mt-4 p-4">
    @csrf
    <div class="form-group m-3">
        <label for="name">Todo Name</label>
        <input type="text" class="form-control" name="name">
    </div>
    <div class="form-group m-3">
        <label for="description">Todo Description</label>
        <textarea class="form-control" name="description" row="3">
    </div>
    <div class="form-group m-3">
        <input type="submit" class="btn btn-primary float-end" value="Update">
    </div>
</form>
@endsection