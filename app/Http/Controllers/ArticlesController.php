<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleStoreRequest;
use App\Tags;
use App\Articles;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Pagination\Paginator;

class ArticlesController extends Controller
{

    public function index()
    {
        $articles = Articles::paginate(15);
        return view('dashboard.articles.articles_read', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $taglist = Tags::All();
        return view('dashboard.articles.articles_create', compact('taglist'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticleStoreRequest $request)
    {

        //Validate request
        $validated = $request->validated();

        //saving to Articles
        $articles = new Articles([
            'title' => $request->get('title'),
            'article_info' => $request->get('article_info'),
            'article_tags' => implode(',', $request->get('article_tags')),
            'image' => $request->get('image'),

        ]);
        $articles->save();
        return redirect('/articles')->with('success', 'New article was added.');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $articles = Articles::findorfail($id);

        return view('dashboard.articles.articles_show', compact('articles'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Articles::findOrFail($id);
        $taglist = Tags::All();

        return view('dashboard.articles.articles_edit', compact('article', 'taglist'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(ArticleStoreRequest $request, $id)
    {
        //Validate request
        $validated = $request->validated();

        $article = Articles::findorfail($id);

        $article->title = $request->get('title');
        $article->article_info = $request->get('article_info');
        $article->article_tags = implode(',', $request->get('article_tags'));
        $article->image = $request->get('image');
        $article->save();

        return redirect()->route('articles.index')
            ->with('success', 'Article updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $articles = Articles::findOrFail($id);
        $articles->delete();

        return back()->with('error', 'Article was deleted!');
    }

}
