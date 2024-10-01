<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class BlogController extends Controller
{
    public function Action(){
        
        $all_posts = Post::all();
        
        /**$all_posts = [
            ["id"=>0 , "author"=>"mounir","title"=>"PHp","created_at"=>"2024/06/29"],
            ["id"=>1 , "author"=>"mahdi","title"=>"js","created_at"=>"2024/06/26"],
            ["id"=>2 , "author"=>"akram","title"=>"java","created_at"=>"2024/06/20"],
        ];**/
        return view("posts.blog",["all_posts"=>$all_posts]);
    }
    public function PostDetail($postid){
        //$post =Post::find($postid);
        //$post = Post::where('id',$postid)->get(); collcetion objects
        $post = Post::where('id',$postid)->first(); //firts object

        if(is_null($post)){
            return to_route("home");
        }
        return view('posts.show',['post'=>$post]);
    }
    public function create(){
        $users = User::all();
        return view('posts.create',["users"=>$users]);
    }
   
   
   
   
    public function store(){
        //show the data
        //$data = $_POST;
        //1-grap the data
        $data = request()->all();
        $title= request()->title;
        $description = request()->description;
        $author = request()->author;
        
        //dd($data);

        //2 store the data
        
        /**$post = new Post;

        $post->title=$title;
        $post->description=$description;

        $post->save();**/
        Post::create([
            'title'=>$title,
            'description'=>$description,
            'user_id'=>$author
        ]);
       
       
       
        //to return to any page after submit
        return to_route("home");
    }
   
   
public function edit(Post $post){
    $users = User::all();
    return view('posts.edit',['post'=>$post,"users"=>$users]);

   }
public function editpost($postid){
    //return to_route("home");
    $data = request()->all();
    $title= request()->title;
    $description = request()->description;
    $author = request()->author;
    $post =Post::find($postid);
    $post->update([
        'title'=>$title,
        'description'=>$description,
        'user_id'=>$author
    ]);
    
    
    //dd($data);
    //return "update success";
    return to_route("post.detail",$postid);
   }
   public function delete($postid){
    //return "you are deleting this post";

    $post=Post::find($postid);
    //dd($post);
    $post->delete();
    return to_route("home",);
   }
}
