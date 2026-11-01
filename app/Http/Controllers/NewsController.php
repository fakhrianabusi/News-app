<?php

namespace App\Http\Controllers;

class NewsController extends Controller
{
    private $news = [
        1 => ['title' => 'news1', 'content' => 'fakhri'],
        2 => ['title' => 'news2', 'content' => 'content2'],
        3 => ['title' => 'news3', 'content' => 'content3'],
        // ← أبقِ الخبر رقم 4 (اخبار التاسعة) هنا كما هو عندك
    ];

    private function allNews()
    {
        return session('news', $this->news);
    }

    public function index()
    {
        return view('news.index', ['news' => $this->allNews()]);
    }

    public function show(int $id)
    {
        $news = $this->allNews();

        if (!isset($news[$id])) {
            abort(404);
        }

        return view('news.show', ['item' => $news[$id]]);
    }

    public function store(int $id, string $title, string $content)
    {
        $news = $this->allNews();

        if (isset($news[$id])) {
            return redirect()->route('news.create')
                ->with('error', "News with id $id already exists");
        }

        if (mb_strlen($title) > 255) {
            return redirect()->route('news.create')
                ->with('error', 'Title is too long (max 255 characters)');
        }

        $news[$id] = ['title' => $title, 'content' => $content];
        session(['news' => $news]);

        return redirect()->route('news.index')->with('success', 'News added successfully');
    }

    public function adminIndex()
    {
        return view('admin.news.index', ['news' => $this->allNews()]);
    }

    public function destroy(int $id)
    {
        $news = $this->allNews();
        unset($news[$id]);
        session(['news' => $news]);

        return redirect()->route('admin.news.index')->with('success', 'News deleted');
    }
}
