<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FormFillout\Form;
use App\Models\User;
use App\Models\Blog;
use App\Models\Faq;
use App\Models\Testimonial;
use App\Models\Email;
use App\Models\BaseFormData;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

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
    public function aboutpageCustomization()
    {
        return view('admin.customize.about');
    }
    public function howTitleLoanWorksCustomization()
    {
        return view('admin.customize.how-title-loan-works');
    }
    public function howPersonalLoanWorksCustomization()
    {
        return view('admin.customize.how-personal-loan-works');
    }
    public function carTitleLoanCustomization()
    {
        return view('admin.customize.loans.car-title-loan');
    }

    // LOAN APPLICATIONS
    public function viewLoanApplications()
    {
        return view('admin.loanApplications.index');
    }
    public function viewLoanApplication($id)
    {
        $application = Form::where('id', $id)->first();
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

    // BASE FORM
    public function baseForm()
    {
        return view('admin.forms.base-form');
    }
    public function baseFormRequests()
    {
        $forms = BaseFormData::latest()->get();
        return view('admin.forms.base-form-requests', compact('forms'));
    }
    // APPROVING THE LOAN
    public function approveLoanApplication(Request $request)
    {
        $id = $request->applicationID;
        $form = Form::findOrFail($id);
        $form->approved = 1;
        $form->save();

        $user = $form->user;
        $em = Email::first();

        try {

            $phpmailer = new PHPMailer(true);

            $phpmailer->isSMTP();
            $phpmailer->Host = 'business87.web-hosting.com';
            $phpmailer->SMTPAuth = true;
            $phpmailer->Username = 'admin@fastcarsfastmoney.com';
            $phpmailer->Password = 'FomkOdZqdQIh';
            $phpmailer->SMTPSecure = 'tls';
            $phpmailer->Port = env('MAIL_PORT');

            //Recipients
            $phpmailer->setFrom('admin@fastcarsfastmoney.com');
            $phpmailer->addAddress($user->email);

            //Content
            $phpmailer->isHTML(true);                                  //Set email format to HTML
            $phpmailer->Subject = "Loan Approved";
            $phpmailer->Body    = view('emails.admin.loan-approval', compact(['user', 'em', 'form']))->render();

            $phpmailer->send();
            echo 'Message has been sent';

        } catch (Exception $e) {

            echo "Message could not be sent. Mailer Error: {$phpmailer->ErrorInfo}";

        }

        return redirect('/admin/loan-applications')->with('success', 'Loan Application Approved!');
    }

    // REJECTING THE LOAN
    public function rejectLoanApplication(Request $request)
    {
        $id = $request->applicationID;
        $form = Form::findOrFail($id);
        $form->approved = 2;
        $form->save();

        $user = $form->user;
        $em = Email::first();
        
        try {

            $phpmailer = new PHPMailer(true);

            $phpmailer->isSMTP();
            $phpmailer->Host = 'business87.web-hosting.com';
            $phpmailer->SMTPAuth = true;
            $phpmailer->Username = 'admin@fastcarsfastmoney.com';
            $phpmailer->Password = 'FomkOdZqdQIh';
            $phpmailer->SMTPSecure = 'tls';
            $phpmailer->Port = env('MAIL_PORT');

            //Recipients
            $phpmailer->setFrom('admin@fastcarsfastmoney.com');
            $phpmailer->addAddress($user->email);

            //Content
            $phpmailer->isHTML(true);                                  //Set email format to HTML
            $phpmailer->Subject = "Loan Approved";
            $phpmailer->Body    = view('emails.admin.loan-rejection', compact(['user', 'em', 'form']))->render();

            $phpmailer->send();
            echo 'Message has been sent';

        } catch (Exception $e) {

            echo "Message could not be sent. Mailer Error: {$phpmailer->ErrorInfo}";

        }

        return redirect('/admin/loan-applications')->with('rejected', 'Loan Application Rejected!');
    }
}
