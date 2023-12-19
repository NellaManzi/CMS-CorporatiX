<?php

namespace App\Livewire\Article;

use App\Models\Article;
use Livewire\Component;

class Grid extends Component
{
    public function render()
    {
        $articles = Article::published()->limit(3)->get();
        $titleSection = 'Artigos';

        return view('livewire.article.grid', [
            'title' => $titleSection,
            'articles' => $articles,
        ]);
    }
}
