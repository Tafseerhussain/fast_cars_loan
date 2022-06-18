<?php

namespace App\Http\Livewire\Blogs;

use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Blog;
use Livewire\WithPagination;

class AllBlogs extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $filter = 'recent';

    public function updateFilter($filterValue)
    {
        $this->filter = $filterValue;
    }

    public function render()
    {
        if ($this->filter == 'recent') {
            $blogs = Blog::latest()->paginate(10);
        } else if ($this->filter == 'old') {
            $blogs = Blog::orderBy('created_at', 'ASC')->paginate(10);
        } else if ($this->filter == 'random') {
            $blogs = Blog::inRandomOrder()->paginate(10);
        }
        return view('livewire.blogs.all-blogs', compact('blogs'));
    }
}
