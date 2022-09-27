<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FormFillout\Form;
use App\Models\User;
use App\Models\Blog;
use App\Models\Faq;
use App\Models\Testimonial;
use App\Models\Email;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }
    public function adminProfile()
    {
        return view('admin.profile');
    }
    public function homepageCustomization()
    {
        return view('admin.customize.home');
    }

    // LOAN APPLICATIONS
    public function viewLoanApplications()
    {
        return view('admin.loanApplications.index');
    }
    public function viewLoanApplication($id)
    {
        $application = Form::where('form_specific_id', $id)->first();
        return view('admin.loanApplications.view', compact('application'));
    }

    // CLIENTS
    public function viewClients()
    {
        $users = User::where('is_admin', '!=', '1')->latest()->get();
        return view('admin.clients.index', compact('users'));
    }

    // BLOGS
    public function viewBlogs()
    {
        $blogs = Blog::latest()->get();
        return view('admin.blogs.index', compact('blogs'));
    }
    public function editBlog($id)
    {
        $blog = Blog::findOrFail($id);
        return view('admin.blogs.edit', compact('blog'));
    }
    public function deleteBlog($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();
        return redirect()->back()->with('success', 'Blog Deleted!');
    }
    public function addNewBlog()
    {
        return view('admin.blogs.create');
    }

    // FAQS
    public function viewFaqs()
    {
        $faqs = Faq::latest()->get();
        return view('admin.faqs.index', compact('faqs'));
    }
    public function editFaq($id)
    {
        $faq = Faq::findOrFail($id);
        return view('admin.faqs.edit', compact('faq'));
    }
    public function deleteFaq($id)
    {
        $faq = Faq::findOrFail($id);
        $faq->delete();
        return redirect()->back()->with('success', 'Faq Deleted!');
    }
    public function addNewFaq()
    {
        return view('admin.faqs.create');
    }

    // TESTIMONIALS
    public function viewTestimonials()
    {
        $testimonials = Testimonial::latest()->get();
        return view('admin.testimonials.index', compact('testimonials'));
    }
    public function addNewTestimonial()
    {
        return view('admin.testimonials.create');
    }
    public function editTestimonial($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        return view('admin.testimonials.edit', compact('testimonial'));
    }
    public function deleteTestimonial($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        $testimonial->delete();
        return redirect()->back()->with('success', 'Testimonial Deleted!');
    }

    // EMAILS
    public function loanApproval()
    {
        $approval = Email::first();
        return view('admin.emails.loan-approval', compact('approval'));
    }
    public function loanRejected()
    {
        $rejected = Email::first();
        return view('admin.emails.loan-rejected', compact('rejected'));
    }
}
