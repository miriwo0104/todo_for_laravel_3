<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\TodoContent;

class ContentController extends Controller
{
    //
    public function index() {
        return view('content.index');
    }

    public function new() {
        return view('content.new');
    }

    public function check(Request $request) {
        //バリデーションの記載をする、今は迂回
    }

    public function create(Request $request) {
        //受け取った値をDBに保存する処理を記載

        $user_id = Auth::id();

        $new_todo_info = new TodoContent();

        $new_todo_info->title = $request['title'];
        $new_todo_info->user_id = $user_id;
        $new_todo_info->memo = $request['memo'];

        $new_todo_info->save();

        return redirect('/content/index');

    }
}
