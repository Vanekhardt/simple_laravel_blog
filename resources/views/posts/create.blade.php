@extends('layouts.app')


@section( 'blog')

<h1>Create : </h1>
<br>

<form action="{{Route("store")}}" method="POST">
    @csrf 
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Title</label>
  <input name="title" type="text" class="form-control" id="exampleFormControlInput1" placeholder="title">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Description</label>
  <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
 
<select name="author" class="form-select" aria-label="Default select example">
 @foreach ($users as $user )
 <option value="{{$user->id}}">{{$user->name}}</option>
 
 @endforeach
  
</select>  
<br>

<button type="submit" class="btn btn-outline-secondary">Create</button>













</form>


@endsection