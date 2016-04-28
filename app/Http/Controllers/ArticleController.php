<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;

class ArticleController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required:max:255',
            'content' => 'required',
        ]);

        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput();
        }

        $request->user()->articles()->create([
            'title' => $request->title,
            'content' => $request->content,
        ]);

        return redirect('/');
    }
}
