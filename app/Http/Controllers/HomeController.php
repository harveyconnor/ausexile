<?php

namespace App\Http\Controllers;

use JavaScript;
use App\News;
use Illuminate\Http\Request;
use \Auth;

class HomeController extends Controller
{
   /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $news = News::query()->orderBy('created_at', 'desc')->paginate(5);

        foreach($news as $post){
            $post->time = $post->created_at->diffForHumans();
        }

        JavaScript::put([
            'news' => $news->toJson(),
            'nextPage' => $news->toArray()['next_page_url'],
        ]);

        $data['news'] = $news->toArray();
        $data['nextPage'] = $news->toArray()['next_page_url'];

        if ($request->ajax() && $request->has('page')) {

            $data['news'] = $news->toArray();
            $data['nextPage'] = $news->toArray()['next_page_url'];

            return $data;
        }

        return view('welcome',compact('news'));

    }

    public function post(Request $request) {

        $this->validate($request,[
            'message' => 'required',
            'title' => 'required'
        ]);

        News::create(['message' =>$request->message, 'title' => $request->title, 'user_id' => Auth::user()->id]);
        return 'worked';
    }

    public function editPost(Request $request, $post) {

        $this->validate($request,[
            'message' => 'required',
            'title' => 'required'
        ]);

        News::query()->where('id',$post)->update(['message' =>$request->message, 'title' => $request->title]);

        return 'worked';
    }

    public function create() {
        return view('news.create');
    }

    public function newsList(Request $request) {

        $news = News::query()->orderBy('created_at', 'desc')->paginate(10);

        foreach($news as $post){
            $post->time = $post->created_at->diffForHumans();
        }

        JavaScript::put([
            'news' => $news->toJson(),
            'nextPage' => $news->toArray()['next_page_url'],
        ]);

        $data['news'] = $news->toArray();
        $data['nextPage'] = $news->toArray()['next_page_url'];

        if ($request->ajax() && $request->has('page')) {

            $data['news'] = $news->toArray();
            $data['nextPage'] = $news->toArray()['next_page_url'];

            return $data;
        }

        return view('news.index', compact('news'));
    }

    public function newsEdit($post) {

        $news = News::query()->where('id',$post)->first();

        JavaScript::put([
            'news' => $news->toJson(),
        ]);

        $data['news'] = $news->toArray();

        return view('news.edit',compact('news'));
    }
}
