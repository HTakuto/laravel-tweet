<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tweet;

class TweetController extends Controller
{
    public function index(){
        $tweets = Tweet::all();
        return view('tweets.index', compact('tweets'));
    }

    public function create()
    {
        $tweet = new Tweet();
        return view('tweets.create', compact('tweet'));
    }

    public function store(Request $request)
    {
        Tweet::create($request->only(['name', 'image', 'text']));
        return view('tweets.store');
    }

    public function destroy($id)
    {
        $tweet = Tweet::find($id);
        $tweet->delete();
        return view('tweets.destroy');
    }
}
