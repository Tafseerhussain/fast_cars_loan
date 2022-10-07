<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Blog;

class latestBlogs extends Component
{
    public $blogs;

    public function __construct()
    {
        $this->blogs = Blog::latest()->get();
    }

    public function render()
    {
        return view('components.latest-blogs');
    }
}
