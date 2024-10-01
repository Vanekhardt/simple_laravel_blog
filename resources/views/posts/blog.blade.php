@extends('layouts.app')


@section('blog')


        <div class="text-center">
        <a href ="{{Route("create")}}" class="btn btn-secondary">Create a post</a>
        </div>
        <table class="table mt-5">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Author</th>
      <th scope="col">Title</th>
      
      <th scope="col">Created at</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($all_posts as $post )
    <tr>
      <th scope="row">{{$post["id"]}}</th>
      <td>{{$post->user ? $post->user->name:'NULL'}}</td>
      <td>{{$post["title"]}}</td>
      <td>{{$post["created_at"]}}</td>
      <td><span>
      <a href="{{Route("post.detail", $post["id"])}}" class="btn btn-primary">View</a>
        <a href="{{Route("edit",$post["id"])}}" class="btn btn-success">Edit</a>
        <form action="{{Route("post.delete" , $post["id"])}}" method="POST"
        style="display:inline">
          @csrf
          @method("DELETE")
        <button type="submit" class="btn btn-danger">Delete</button>
        </form>
       
      </span></td>
    </tr>
    @endforeach
    
   
  </tbody>
</table>

@endsection