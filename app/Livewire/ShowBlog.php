<?php

namespace App\Livewire;

use App\Models\Article;
use App\Models\Category;
use Livewire\Attributes\Url;
use Livewire\Component;

class ShowBlog extends Component
{
    #[Url()]
    public $categorySlug = null;

    public function render()
    {
        if (!empty($this->categorySlug)) {
            $category = Category::where('slug', $this->categorySlug)->first();
            // dd($category);

            if (empty($category)) {
                abort(404);
            }

            $blogs = Article::orderBy('created_at', 'desc')
                ->where('category_id', $category->id)
                ->where('status', 1)->paginate(5);
        } else {
            $blogs = Article::orderBy('created_at', 'desc')
                ->where('status', 1)->paginate(5);
        }
        $latestArticles = Article::orderBy('created_at', 'desc')
            ->where('status', 1)->take(3)->get();


        $categories = Category::all();
        // $blogs = Article::orderBy('created_at', 'desc')->paginate(5);
        return view('livewire.show-blog', compact('blogs', 'categories', 'latestArticles'));
    }
}
