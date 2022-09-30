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
        $phpmailer->Body    = '

text/x-generic OrderPlaced.blade.php ( HTML document text )
<!doctype html>
<html>
  <head>
    <meta name="viewport" content="width=device-width" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <title>Order Recieved</title>
    <style>
      /* -------------------------------------
          GLOBAL RESETS
      ------------------------------------- */
      
      /*All the styling goes here*/
      
      img {
        border: none;
        -ms-interpolation-mode: bicubic;
        max-width: 100%; 
      }

      body {
        background-color: #edf2f7;
        font-family: "poppins", sans-serif;
        -webkit-font-smoothing: antialiased;
        font-size: 14px;
        line-height: 1.4;
        margin: 0;
        padding: 0;
        -ms-text-size-adjust: 100%;
        -webkit-text-size-adjust: 100%; 
      }

      table {
        border-collapse: separate;
        mso-table-lspace: 0pt;
        mso-table-rspace: 0pt;
        width: 100%; }
        table td {
          font-family: "poppins", sans-serif;
          font-size: 14px;
          vertical-align: top; 
      }

      /* -------------------------------------
          BODY & CONTAINER
      ------------------------------------- */

      .body {
        background-color: #edf2f7;
        width: 100%; 
      }

      /* Set a max-width, and make it display as block so it will automatically stretch to that width, but will also shrink down on a phone or something */
      .container {
        display: block;
        margin: 0 auto !important;
        /* makes it centered */
        max-width: 580px;
        padding: 10px;
        width: 580px; 
      }

      /* This should also be a block element, so that it will fill 100% of the .container */
      .content {
        box-sizing: border-box;
        display: block;
        margin: 0 auto;
        max-width: 580px;
        padding: 10px; 
      }

      /* -------------------------------------
          HEADER, FOOTER, MAIN
      ------------------------------------- */
      .main {
        background: #ffffff;
        border-radius: 3px;
        width: 100%; 
      }

      .wrapper {
        box-sizing: border-box;
        padding: 20px; 
      }

      .content-block {
        padding-bottom: 10px;
        padding-top: 10px;
      }

      .footer {
        clear: both;
        margin-top: 10px;
        text-align: center;
        width: 100%; 
      }
        .footer td,
        .footer p,
        .footer span,
        .footer a {
          color: #999999;
          font-size: 12px;
          text-align: center; 
      }

      /* -------------------------------------
          TYPOGRAPHY
      ------------------------------------- */
      h1,
      h2,
      h3,
      h4 {
        color: #000000;
        font-family: "poppins", sans-serif;
        font-weight: 400;
        line-height: 1.4;
        margin: 0;
        margin-bottom: 30px; 
      }

      h1 {
        font-size: 35px;
        font-weight: 300;
        text-align: center;
        text-transform: capitalize; 
      }

      p,
      ul,
      ol {
        font-family: "poppins", sans-serif;
        font-size: 14px;
        font-weight: normal;
        margin: 0;
        margin-bottom: 15px; 
      }
        p li,
        ul li,
        ol li {
          list-style-position: inside;
          margin-left: 5px; 
      }

      a {
        color: #3498db;
        text-decoration: underline; 
      }

      /* -------------------------------------
          BUTTONS
      ------------------------------------- */
      .btn {
        box-sizing: border-box;
        width: 100%; }
        .btn > tbody > tr > td {
          padding-bottom: 15px; }
        .btn table {
          width: auto; 
      }
        .btn table td {
          background-color: #ffffff;
          border-radius: 5px;
          text-align: center; 
      }
        .btn a {
          background-color: #ffffff;
          border: solid 1px #3498db;
          border-radius: 5px;
          box-sizing: border-box;
          color: #3498db;
          cursor: pointer;
          display: inline-block;
          font-size: 14px;
          font-weight: bold;
          margin: 0;
          padding: 12px 25px;
          text-decoration: none;
          text-transform: capitalize; 
      }
      .btn-primary table th {
        text-align: left;
        padding: 5px;
      }
      .btn-primary table td {
        text-align: left;
        border: 1px solid #edf2f9;
        border-radius: 0;
        padding: 5px;
        font-size: 12px;
      }

      .btn-primary a {
        background-color: #3498db;
        border-color: #3498db;
        color: #ffffff; 
      }

      /* -------------------------------------
          OTHER STYLES THAT MIGHT BE USEFUL
      ------------------------------------- */
      .last {
        margin-bottom: 0; 
      }

      .first {
        margin-top: 0; 
      }

      .align-center {
        text-align: center; 
      }

      .align-right {
        text-align: right; 
      }

      .align-left {
        text-align: left; 
      }

      .clear {
        clear: both; 
      }

      .mt0 {
        margin-top: 0; 
      }

      .mb0 {
        margin-bottom: 0; 
      }

      .preheader {
        color: transparent;
        display: none;
        height: 0;
        max-height: 0;
        max-width: 0;
        opacity: 0;
        overflow: hidden;
        mso-hide: all;
        visibility: hidden;
        width: 0; 
      }

      .powered-by a {
        text-decoration: none; 
      }

      hr {
        border: 0;
        border-bottom: 1px solid #edf2f9;
        margin: 20px 0; 
      }

      /* -------------------------------------
          RESPONSIVE AND MOBILE FRIENDLY STYLES
      ------------------------------------- */
      @media only screen and (max-width: 620px) {
        table[class=body] h1 {
          font-size: 28px !important;
          margin-bottom: 10px !important; 
        }
        table[class=body] p,
        table[class=body] ul,
        table[class=body] ol,
        table[class=body] td,
        table[class=body] span,
        table[class=body] a {
          font-size: 16px !important; 
        }
        table[class=body] .wrapper,
        table[class=body] .article {
          padding: 10px !important; 
        }
        table[class=body] .content {
          padding: 0 !important; 
        }
        table[class=body] .container {
          padding: 0 !important;
          width: 100% !important; 
        }
        table[class=body] .main {
          border-left-width: 0 !important;
          border-radius: 0 !important;
          border-right-width: 0 !important; 
        }
        table[class=body] .btn table {
          width: 100% !important; 
        }
        table[class=body] .btn a {
          width: 100% !important; 
        }
        table[class=body] .img-responsive {
          height: auto !important;
          max-width: 100% !important;
          width: auto !important; 
        }
      }

      /* -------------------------------------
          PRESERVE THESE STYLES IN THE HEAD
      ------------------------------------- */
      @media all {
        .ExternalClass {
          width: 100%; 
        }
        .ExternalClass,
        .ExternalClass p,
        .ExternalClass span,
        .ExternalClass font,
        .ExternalClass td,
        .ExternalClass div {
          line-height: 100%; 
        }
        .apple-link a {
          color: inherit !important;
          font-family: inherit !important;
          font-size: inherit !important;
          font-weight: inherit !important;
          line-height: inherit !important;
          text-decoration: none !important; 
        }
        #MessageViewBody a {
          color: inherit;
          text-decoration: none;
          font-size: inherit;
          font-family: inherit;
          font-weight: inherit;
          line-height: inherit;
        }
      }
      .lavender-btn {
        background-image: linear-gradient(45deg, #9c9cff, #8585de);
        border-radius: 2px !important;
        padding: 0.4rem 0.7rem !important;
        white-space: nowrap !important;
        text-decoration: none !important;
        color: #fff !important;
        border: none !important;
        display: inline-block !important;
        box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.2) !important;
      }
    </style>
  </head>
  <body class="">
    <table role="presentation" border="0" cellpadding="0" cellspacing="0" class="body">
      <tr>
        <td>&nbsp;</td>
        <td class="container">
          <div class="content">

            <!-- START CENTERED WHITE CONTAINER -->
            <table role="presentation" class="main">

              <!-- START MAIN CONTENT AREA -->
              <tr>
                <td class="wrapper">
                  <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                      <td colspan="4" style="text-align: center;">
                        <img src="http://fastcarsfastmoney.com/img/logo.png" style="margin-top: 20px;width: 150px;margin-bottom: 50px;">
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <p>Loan Approved</p>
                        <hr>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>

            <!-- END MAIN CONTENT AREA -->
            </table>
            <!-- END CENTERED WHITE CONTAINER -->

            <!-- START FOOTER -->
            <div class="footer">
              <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td class="content-block">
                    <span class="apple-link">Sent By </span> <a href="http://www.lavender.com.pk" target="_blank">Lavender</a>.
                  </td>
                </tr>
              </table>
            </div>
            <!-- END FOOTER -->

          </div>
        </td>
        <td>&nbsp;</td>
      </tr>
    </table>
  </body>
</html>';

        $phpmailer->send();
        echo 'Message has been sent';

    } catch (Exception $e) {

        echo "Message could not be sent. Mailer Error: {$phpmailer->ErrorInfo}";

    }

});