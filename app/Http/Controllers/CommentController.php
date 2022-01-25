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
        $data['parent_id'] = 1;
        $data['commentable_id'] = 1;
        $data['commentable_type'] = 'type';

        Comment::create($data);

        return ('thank you');
    }

    public function replyStore(Request $request)
    {
    }
}
