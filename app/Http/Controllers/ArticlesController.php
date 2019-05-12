<?php

namespace App\Http\Controllers;

use App\Tags;
use App\Articles;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{

    public function index()
    {
        $articles=Articles::All();
        return view('dashboard.articles.articles_read', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $taglist=Tags::All();
        return view('dashboard.articles.articles_create',compact('taglist'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'article_info'=> 'required',
            'article_tags' => 'string',
            'image' => 'string'
        ]);
        $articles = new Articles([
            'title' => $request->get('title'),
            'article_info'=> $request->get('article_info'),
            'article_tags'=> $request->get('article_tags'),
            'image'=> $request->get('image'),

        ]);
        $articles->save();
        return redirect('/articles')->with('success', 'Stock has been added');
        //TODO add messages
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
              $articles = Articles::Find($id);

               return view('dashboard.articles.articles_show', compact('articles'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $articles = Articles::find($id);
        $articles->delete();

        return redirect('/articles')->with('success', 'Stock has been deleted Successfully');
        //TODO add messages
    }
}
