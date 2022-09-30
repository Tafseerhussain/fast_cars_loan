<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Models\FormFillout\VehicleInformation;
use App\Models\Home;
use App\Models\Faq;
use App\Models\Testimonial;
use App\Mail\Admin\LoanApproval;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
})->name('about-page');

Route::get('/how-title-loan-works', function () {
    return view('how-title-loan-works');
})->name('how-title-loan-works');

Route::get('/how-personal-loan-works', function () {
    return view('how-personal-loan-works');
})->name('how-personal-loan-works');

Route::get('/title-loan', function () {
    return view('title-loan');
})->name('title-loan');

Route::get('/advantages', function () {
    return view('advantages');
})->name('advantages');

Route::get('/blogs', function () {
    return view('blogs.index');
})->name('blogs');

Route::get('/faq', function () {
    $faqs = Faq::all();
    return view('faq', compact('faqs'));
})->name('faq');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/privacy-policy', function () {
    return view('privacy-policy');
})->name('privacy-policy');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// =====================================================
// ADMIN ROUTES
// =====================================================
Route::group(['middleware' => ['admin']], function () {

    Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');
    Route::get('/admin/customize/home', [App\Http\Controllers\AdminController::class, 'homepageCustomization'])->name('admin.home.customize');

    Route::get('/apply-for-loan', function () {
        return view('apply-form');
    })->name('apply-form');

    Route::get('/admin/loan-applications', [App\Http\Controllers\AdminController::class, 'viewLoanApplications'])->name('admin.loan-applications');
    Route::get('/admin/loan-applications/{id}', [App\Http\Controllers\AdminController::class, 'viewLoanApplication'])->name('admin.loan-application');

    Route::get('/admin/clients', [App\Http\Controllers\AdminController::class, 'viewClients'])->name('admin.clients');

    Route::get('/admin/blogs', [App\Http\Controllers\AdminController::class, 'viewBlogs'])->name('admin.blogs');
    Route::get('/admin/blogs/edit/{id}', [App\Http\Controllers\AdminController::class, 'editBlog'])->name('admin.blog.edit');
    Route::get('/admin/blogs/delete/{id}', [App\Http\Controllers\AdminController::class, 'deleteBlog'])->name('admin.blog.delete');
    Route::get('/admin/blogs/add', [App\Http\Controllers\AdminController::class, 'addNewBlog'])->name('admin.blog.add');

    Route::get('/admin/faqs', [App\Http\Controllers\AdminController::class, 'viewFaqs'])->name('admin.faqs');
    Route::get('/admin/faq/edit/{id}', [App\Http\Controllers\AdminController::class, 'editFaq'])->name('admin.faq.edit');
    Route::get('/admin/faq/delete/{id}', [App\Http\Controllers\AdminController::class, 'deleteFaq'])->name('admin.faq.delete');
    Route::get('/admin/faqs/add', [App\Http\Controllers\AdminController::class, 'addNewFaq'])->name('admin.faqs.add');

    Route::get('/admin/testimonials', [App\Http\Controllers\AdminController::class, 'viewTestimonials'])->name('admin.testimonials');
    Route::get('/admin/testimonials/add', [App\Http\Controllers\AdminController::class, 'addNewTestimonial'])->name('admin.testimonials.add');
    Route::get('/admin/testimonials/edit/{id}', [App\Http\Controllers\AdminController::class, 'editTestimonial'])->name('admin.testimonials.edit');
    Route::get('/admin/testimonials/delete/{id}', [App\Http\Controllers\AdminController::class, 'deleteTestimonial'])->name('admin.testimonials.delete');

    Route::get('/admin/profile', [App\Http\Controllers\AdminController::class, 'adminProfile'])->name('admin.profile');

    Route::get('/admin/email/loan-approval', [App\Http\Controllers\AdminController::class, 'loanApproval'])->name('admin.loan.approval');
    Route::get('/admin/email/loan-rejected', [App\Http\Controllers\AdminController::class, 'loanRejected'])->name('admin.loan.rejected');
});

Route::group(['middleware' => ['auth']], function () {
    Route::get('/application-form', function () {
        return view('application-form');
    })->name('application-form');
});

Route::get('test', function() {

    $host = env('MAIL_MAILER');
    try {

        $phpmailer = new PHPMailer(true);

        $phpmailer->SMTPDebug = SMTP::DEBUG_SERVER; 
        $phpmailer->isSMTP();
        $phpmailer->Host = $host;
        $phpmailer->SMTPAuth = true;
        $phpmailer->Username = 'admin@fastcarsfastmoney.com';
        $phpmailer->Password = 'J1thGimZkGvX';
        $phpmailer->SMTPSecure = 'tls';
        $phpmailer->Port = env('MAIL_PORT');

        //Recipients
        $phpmailer->setFrom('admin@fastcarsfastmoney.com');
        $phpmailer->addAddress("sajjadaslammm@gmail.com");

        //Content
        $phpmailer->isHTML(true);                                  //Set email format to HTML
        $phpmailer->Subject = "Here is the subject";
        $phpmailer->Body    = "This is the HTML message body <b>in bold!</b>";
        $phpmailer->AltBody = "This is the body in plain text for non-HTML mail clients";

        $phpmailer->send();
        echo 'Message has been sent';

    } catch (Exception $e) {

        echo "Message could not be sent. Mailer Error: {$phpmailer->ErrorInfo}";

    }

});