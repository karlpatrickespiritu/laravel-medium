<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Repositories\ArticleRepository;

class HomeController extends Controller
{
    protected $articles;

    public function __construct(ArticleRepository $articles)
    {
        $this->articles = $articles;
    }

    public function index(Request $request)
    {
        return view('home', [
            'articles' => Article::paginate(10)
        ]);
    }
}
