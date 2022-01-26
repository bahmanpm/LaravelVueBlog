<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $data = array();
        $data['comment'] = $request->body;
        $data['name'] = $request->name;

        Comment::create($data);

        return ('thank you');
    }
}
