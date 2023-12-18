<?php

namespace App\Livewire\Article;

use App\Models\Article;
use Livewire\Component;

class Grid extends Component
{
    public function render()
    {
        $articles = Article::limit(3)->get();

        return view('livewire.article.grid', [
            'articles' => $articles,
        ]);
    }
}
