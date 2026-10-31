<?php

namespace App\Http\Controllers;

class NewsController extends Controller
{
    private $news = [
        1 => ['title' => 'news1', 'content' => 'fakhri'],
        2 => ['title' => 'news2', 'content' => 'content2'],
        3 => ['title' => 'news3', 'content' => 'content3'],
        4 => ['title' => 'اخبار التاسعة', 'content' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus eu orci accumsan, ultrices justo eu, iaculis nisi. Proin neque odio, vestibulum eu enim in, convallis consequat lectus. Cras placerat lobortis scelerisque. Maecenas viverra ligula vitae turpis tristique, in aliquam tellus elementum. Cras et nulla a erat elementum pulvinar. Maecenas at placerat libero. Mauris nec risus lacinia, mollis est quis, porttitor purus. Etiam placerat dui posuere neque sodales porta. Maecenas ultrices quis quam ut vehicula. Vivamus mauris odio, faucibus ut interdum vitae, commodo blandit ligula. Duis scelerisque vel velit vitae molestie."],
    ];


    public function index()
    {
        return view('news.index', ['news' => $this->news]);
    }


    public function show(int $id)
    {
        if (!isset($this->news[$id])) {
            abort(404);
        }

        return view('news.show', ['item' => $this->news[$id]]);
    }
}
