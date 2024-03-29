<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Models\FormFillout\VehicleInformation;
use App\Models\Home;
use App\Models\AboutPage;
use App\Models\Faq;
use App\Models\Testimonial;
use App\Models\HowTitleLoanWork;
use App\Models\HowPersonalLoanWork;
use App\Models\TitleLoanState;
use App\Models\Loan\CarLoan;
use App\Models\PersonalLoan;
use App\Models\Advantage;
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
})->name('welcome');

Route::get('/about', function () {
    $whoWeAre = AboutPage::where('id', 1)->first(['who_head', 'who_text', 'who_img1', 'who_img2', 'who_img3','who_img4', 'who_hidden']);
    $offer = AboutPage::where('id', 1)->first(
        [
            'offer_head',
            'offer_point_head_1', 
            'offer_point_head_2', 
            'offer_point_head_3', 
            'offer_point_head_4',
            'offer_point_text_1', 
            'offer_point_text_2', 
            'offer_point_text_3', 
            'offer_point_text_4', 
            'offer_hidden'
        ]
    );
    return view('about', compact(['whoWeAre', 'offer']));
})->name('about-page');

Route::get('/how-title-loan-works', function () {
    $loan = HowTitleLoanWork::find(1);
    $states = TitleLoanState::all();
    return view('how-title-loan-works', compact(['loan', 'states']));
})->name('how-title-loan-works');

Route::get('/how-personal-loan-works', function () {
    $loan = HowPersonalLoanWork::find(1);
    return view('how-personal-loan-works', compact(['loan']));
})->name('how-personal-loan-works');

Route::get('/car-title-loan', function () {
    $loan = CarLoan::find(1);
    return view('car-title-loan', compact(['loan']));
})->name('car-title-loan');
Route::get('/personal-loan', function () {
    $loan = PersonalLoan::find(1);
    return view('personal-loan', compact(['loan']));
})->name('personal-loan');

Route::get('/advantages', function () {
    $advantage = Advantage::find(1);
    return view('advantages', compact(['advantage']));
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
    Route::get('/admin/customize/about', [App\Http\Controllers\AdminController::class, 'aboutpageCustomization'])->name('admin.about.customize');
    Route::get('/admin/customize/how-title-loan-works', [App\Http\Controllers\AdminController::class, 'howTitleLoanWorksCustomization'])->name('admin.how-title-loan-works.customize');
    Route::get('/admin/customize/how-personal-loan-works', [App\Http\Controllers\AdminController::class, 'howPersonalLoanWorksCustomization'])->name('admin.how-personal-loan-works.customize');
    Route::get('/admin/customize/car-title-loan', [App\Http\Controllers\AdminController::class, 'carTitleLoanCustomization'])->name('admin.car-title-loan.customize');
    Route::get('/admin/customize/personal-loan', [App\Http\Controllers\AdminController::class, 'personalLoanCustomization'])->name('admin.personal-loan.customize');
    Route::get('/admin/customize/advantage', [App\Http\Controllers\AdminController::class, 'advantagePageCustomization'])->name('admin.advantage.customize');

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

    Route::post('/admin/application/approve', [App\Http\Controllers\AdminController::class, 'approveLoanApplication'])->name('admin.application.approve');
    Route::post('/admin/application/reject', [App\Http\Controllers\AdminController::class, 'rejectLoanApplication'])->name('admin.application.reject');

    Route::get('/admin/base_form', [App\Http\Controllers\AdminController::class, 'baseForm'])->name('admin.baseform');
    Route::get('/admin/base_form_requests', [App\Http\Controllers\AdminController::class, 'baseFormRequests'])->name('admin.baseform.requests');

});

Route::group(['middleware' => ['auth']], function () {
    Route::get('/application-form', function () {
        return view('application-form');
    })->name('application-form');
});

Route::get('test', function() {

    try {

        $phpmailer = new PHPMailer(true);

        $phpmailer->isSMTP();
        $phpmailer->Host = 'business87.web-hosting.com';
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
        $phpmailer->Subject = "Loan Approved";
        $test = "Sajjad Aslam";
        $phpmailer->Body    = view('emails.admin.loan-approval', compact('test'))->render();

        $phpmailer->send();
        echo 'Message has been sent';

    } catch (Exception $e) {

        echo "Message could not be sent. Mailer Error: {$phpmailer->ErrorInfo}";

    }

});