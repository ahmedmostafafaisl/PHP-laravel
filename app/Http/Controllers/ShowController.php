<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function showData()
    {
        $allposts = [
            ['title' => 'Mvc', 'posted_By' => 'ahmed', 'email' => 'ahmed@gmail.com	'],
            ['title' => 'php', 'posted_By' => 'mo', 'email' => 'mo@gmail.com	'],
            ['title' => 'ali', 'posted_By' => 'ali', 'email' => 'ali@gmail.com	']
        ];
        return view('index', ['posts' => $allposts]);
    }
}