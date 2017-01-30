<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use JavaScript;
use App\News;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function post(Request $request) {
        News::create(['message' =>$request->message, 'title' => $request->title, 'user_id' => Auth::user()->id]);
        return 'worked';
    }
}
