<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\User;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    //
    public function showComment()
    {
        return view('search.app');
    }

    public function search(Request $request)
    {   
        if($request->has('search'))
        {
            $comments = Comment::search($request->search)->paginate(5);
            return view('search.app', compact('comments'));
        }
        
    }


    //USER
    public function searchUser(){
        $users = User::all();

        // User::search($users)
        return view('search.user', compact('users'));
    }
}
