<?php

namespace App\Http\Livewire\Admin\Blog;

use Livewire\Component;
use App\Models\Blog;
use Auth;
use Livewire\WithFileUploads;

class AddNewBlog extends Component
{
    use WithFileUploads;

    public $title;
    public $shortDescription;
    public $longDescription;
    public $image;

    public function submit()
    {
        $this->validate([
            'title' => 'required',
            'shortDescription' => 'required',
            'longDescription' => 'required',
            'image' => 'required|image|max:2048',
        ]);
        $blog = new Blog;
        $blog->user_id = Auth::user()->id;
        $blog->title = $this->title;
        $blog->short_description = $this->shortDescription;
        $blog->description = $this->longDescription;
        $blog->image = 'temp';
        $blog->save();


        $blogImage = Blog::where('id', $blog->id)->first();
        $extension = $this->image->getClientOriginalExtension();
        $img = $this->image->storeAs('blogs', 'blog-'.$blog->id.'.'.$extension , 'public');
        $imgUrl = 'storage/'.$img;
        $blogImage->image = $imgUrl;
        $blogImage->save();

        $this->reset();
        session()->flash('successMessage', 'Saved!');
    }

    public function render()
    {
        return view('livewire.admin.blog.add-new-blog');
    }
}
