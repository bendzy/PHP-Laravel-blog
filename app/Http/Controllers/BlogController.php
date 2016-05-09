<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Post;
use Illuminate\Http\Request;

use App\Http\Requests\PostRequest;

class BlogController extends Controller
{

    /**************** POSTS *********************/
    /*******************************************/


    // route / function displays all posts from DB
    public function index () {
       $posts = Post::all();

        return view("index",["posts"=>$posts]);
    }

    //function returns form to submit new post
    public function create() {
            return view("create");
    }

    // function stores input to database
    //input gets from form,we use PostRequest class ("FORM REQUEST validator") to set authorization on user &
    // set fillables rows in database
    public function store(PostRequest $request) {

            //get request
        $input = $request->all();

        Post::create($input);

        return redirect("/");
    }
    //about me page
    public function about() {
        return view("about");
    }

    //show post details

    public function show($id) {
        $post = Post::find($id);

            if (is_null($post)) {
                abort(404);
            }

            return view ("details",["post"=>$post]);
    }


    //edit post
    public function edit($id) {
        $post = Post::find($id);

            if (is_null($post)) {
                abort(404);
            }
        return view("edit",["post"=>$post]);
    }

    public function update(PostRequest $request, $id) {
        $post = Post::find($id);
            if (is_null($post)) {
                abort(404);
            }
        $post->update($request->all());

        return redirect("/");
    }

    public function  destroy($id) {
        $post = Post::find($id);
            if (is_null($post)) {
                abort(404);
            }
        $post->delete();

        //redirect
        //message ki potrdi da smo usmeno zbrisali post
        //v / samo invcludamo errors/list v katerem imamo izpis sporocila
        return redirect("/")->with("status", "Post Deleted");
    }






    /************ COMMENTS **********************/
    /********************************************/

    public function comment($id) {

        $post = Post::find($id);

        $comment = new Comment();
        $comment->post_id = $post->id;
        $comment->save();

        return view('comment',['post'=>$post]);

    }




}



































