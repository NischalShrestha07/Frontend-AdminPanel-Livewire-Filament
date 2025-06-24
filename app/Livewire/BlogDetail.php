<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;

class BlogDetail extends Component
{
    public $blog;
    public function mount($id)
    {
        $this->blog = Article::select('articles.*', 'categories.name as category_name')->leftJoin('categories', 'categories.id', 'articles.category_id')->findOrFail($id);
        // dd($this->blog);
    }
    public function render()
    {
        return view('livewire.blog-detail', ['blog' => $this->blog]);
    }
}
