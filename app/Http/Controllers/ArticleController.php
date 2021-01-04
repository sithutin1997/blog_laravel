<?php

namespace App\Http\Controllers;
use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //
    public function index()
    {
        $data = Article::latest()->paginate(5);
        return view('articles.index',[
            'articles'=> $data
        ]);
    }

    public function detail($id)
    {
        $data = Article::find($id);
        return view('articles.detail',[
            'article' => $data
        ]);
    }

    public function add()
    {
        $data = [
            ["id"=>1, "name"=>"news"],
            ["id"=>2, "name"=>"tech"],
        ];
        return view('articles.add',[
            "categories" => $data
        ]);
    }

    public function create()
    {
        $validator = validator(request()->all(),[
            'title'=>'required',
            'content' => 'required',
            'category_id' => 'required',
        ]);

        if($validator->fails())
        {
            return back()->withErrors($validator);
        }

        $article = new Article;
        $article->title = request()->title;
        $article->content = request()->content;
        $article->category_id = request()->category_id;
        $article->save();
        return redirect('/articles');
    }

    public function delete()
    {
        
    }
}
