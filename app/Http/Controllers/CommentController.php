<?php

    namespace App\Http\Controllers;

    use App\Blog;
    use App\Comment;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Auth;

    class CommentController extends Controller
    {
        public $incrementing = false;

        public function __construct()
        {
            $this->middleware('auth');
        }

        public function store(Request $request, $blog_id)
        {

            $blog = Blog::find($blog_id);

            $url = url()->previous();
            $blog_id = intval(substr($url, strrpos($url, '/') + 1));

            $comment = new Comment;
            $comment->user_id = Auth::id();
            $comment->name = $request->get('name');
            $comment->email = $request->get('email');
            $comment->message = $request->get('message');
            $comment->blog_id = $blog_id;
            $comment->save();

            return redirect($url);
        }

    }
