<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Comment;
use App\Subscription;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Jorenvh\Share\ShareFacade;

class BlogController extends Controller
{
    public function index()
    {
        $client = new Client();
        $model = new Blog();

        $news = Blog::inRandomOrder()->limit(3)->get();
        $blogsFromDb = Blog::paginate(9);
//            $data = $client->request('GET', 'https://newsdata.io/api/1/news?apikey=pub_93395393af1896576c8258380ec6caec0348&language=en&category=technology');
//            $blogs = json_decode(($data)->getBody())->results;
//
//            foreach ($blogs as $blog) {
//                $model = new Blog();
//                $model->title = str_replace('"', "", json_encode($blog->title));
//                $model->category = $blog->category[0];
//                $model->description = str_replace('"', "", json_encode($blog->description));
//                $model->pubDate = str_replace(':', "", $blog->pubDate ? $blog->pubDate : "");
//                $model->content = str_replace(':', "", $blog->content ? $blog->content : "");
//                $model->img = str_replace('"', "", $blog->image_url);
//                $model->author = str_replace('"', "", $blog->creator ? $blog->creator[0] : "unknown");
//                $model->save();
//            }

        return view('blog.index', ['blogs' => $blogsFromDb], compact('news'));
    }

    function show(Blog $blog)
    {
        $url = url()->current();
        $blog_id = intval(substr($url, strrpos($url, '/') + 1));

        $comments = Comment::where('blog_id', $blog_id)->get();
        $shareButtons = ShareFacade::page(
            'https://www.itsolutionstuff.com'
            )
            ->facebook()
            ->twitter()
            ->linkedin()
            ->telegram()
            ->whatsapp()
            ->reddit();

        $news = Blog::all()->take(3);
        return View('blog.show', ['blog' => $blog], compact('news', 'shareButtons', 'comments'));
    }

    public function store(Request $request)
    {
        $subscription = new Subscription;
        $subscription->name = $request->name;
        $subscription->email = $request->email;
        $subscription->subject = $request->subject;
        $subscription->message = $request->message;
        $subscription->save();
        return redirect('/')->with('status', 'Blog Post Form Data Has Been inserted');
    }
}
