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

        $phpmailer->SMTPDebug = SMTP::DEBUG_SERVER; 
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
        $phpmailer->Subject = "Here is the subject";
        $phpmailer->Body    = '
            <!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
                <html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
                <head>
                <!--[if gte mso 9]>
                <xml>
                  <o:OfficeDocumentSettings>
                    <o:AllowPNG/>
                    <o:PixelsPerInch>96</o:PixelsPerInch>
                  </o:OfficeDocumentSettings>
                </xml>
                <![endif]-->
                  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
                  <meta name="viewport" content="width=device-width, initial-scale=1.0">
                  <meta name="x-apple-disable-message-reformatting">
                  <!--[if !mso]><!--><meta http-equiv="X-UA-Compatible" content="IE=edge"><!--<![endif]-->
                  <title></title>
                  
                    <style type="text/css">
                      @media only screen and (min-width: 620px) {
                  .u-row {
                    width: 600px !important;
                  }
                  .u-row .u-col {
                    vertical-align: top;
                  }

                  .u-row .u-col-100 {
                    width: 600px !important;
                  }

                }

                @media (max-width: 620px) {
                  .u-row-container {
                    max-width: 100% !important;
                    padding-left: 0px !important;
                    padding-right: 0px !important;
                  }
                  .u-row .u-col {
                    min-width: 320px !important;
                    max-width: 100% !important;
                    display: block !important;
                  }
                  .u-row {
                    width: calc(100% - 40px) !important;
                  }
                  .u-col {
                    width: 100% !important;
                  }
                  .u-col > div {
                    margin: 0 auto;
                  }
                  }
                body {
                  margin: 0;
                  padding: 0;
                }

                table,
                tr,
                td {
                  vertical-align: top;
                  border-collapse: collapse;
                }

                p {
                  margin: 0;
                }

                .ie-container table,
                .mso-container table {
                  table-layout: fixed;
                }

                * {
                  line-height: inherit;
                }

                a[x-apple-data-detectors='true'] {
                  color: inherit !important;
                  text-decoration: none !important;
                }

                table, td { color: #000000; } #u_body a { color: #0000ee; text-decoration: underline; }
                    </style>
                  
                  

                <!--[if !mso]><!--><link href="https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap" rel="stylesheet" type="text/css"><!--<![endif]-->

                </head>

                <body class="clean-body u_body" style="margin: 0;padding: 0;-webkit-text-size-adjust: 100%;background-color: #ffffff;color: #000000">
                  <!--[if IE]><div class="ie-container"><![endif]-->
                  <!--[if mso]><div class="mso-container"><![endif]-->
                  <table id="u_body" style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;min-width: 320px;Margin: 0 auto;background-color: #ffffff;width:100%" cellpadding="0" cellspacing="0">
                  <tbody>
                  <tr style="vertical-align: top">
                    <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top">
                    <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td align="center" style="background-color: #ffffff;"><![endif]-->
                    

                <div class="u-row-container" style="padding: 0px;background-color: transparent">
                  <div class="u-row" style="Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;">
                    <div style="border-collapse: collapse;display: table;width: 100%;height: 100%;background-color: transparent;">
                      <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:600px;"><tr style="background-color: transparent;"><![endif]-->
                      
                <!--[if (mso)|(IE)]><td align="center" width="600" style="width: 600px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;" valign="top"><![endif]-->
                <div class="u-col u-col-100" style="max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;">
                  <div style="height: 100%;width: 100% !important;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;">
                  <!--[if (!mso)&(!IE)]><!--><div style="height: 100%; padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;"><!--<![endif]-->
                  
                <table style="font-family:"Montserrat",sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                  <tbody>
                    <tr>
                      <td style="overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:"Montserrat",sans-serif;" align="left">
                        
                <table width="100%" cellpadding="0" cellspacing="0" border="0">
                  <tr>
                    <td style="padding-right: 0px;padding-left: 0px;" align="center">
                      
                      <img align="center" border="0" src="images/image-5.png" alt="" title="" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: inline-block !important;border: none;height: auto;float: none;width: 100%;max-width: 158px;" width="158"/>
                      
                    </td>
                  </tr>
                </table>

                      </td>
                    </tr>
                  </tbody>
                </table>

                  <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
                  </div>
                </div>
                <!--[if (mso)|(IE)]></td><![endif]-->
                      <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
                    </div>
                  </div>
                </div>



                <div class="u-row-container" style="padding: 0px;background-color: #f5f5f5">
                  <div class="u-row" style="Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;">
                    <div style="border-collapse: collapse;display: table;width: 100%;height: 100%;background-color: transparent;">
                      <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: #f5f5f5;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:600px;"><tr style="background-color: transparent;"><![endif]-->
                      
                <!--[if (mso)|(IE)]><td align="center" width="600" style="width: 600px;padding: 30px 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;" valign="top"><![endif]-->
                <div class="u-col u-col-100" style="max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;">
                  <div style="height: 100%;width: 100% !important;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;">
                  <!--[if (!mso)&(!IE)]><!--><div style="height: 100%; padding: 30px 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;"><!--<![endif]-->
                  
                <table style="font-family:"Montserrat",sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                  <tbody>
                    <tr>
                      <td style="overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:"Montserrat",sans-serif;" align="left">
                        
                  <h1 style="margin: 0px; line-height: 140%; text-align: left; word-wrap: break-word; font-weight: normal; font-family: arial,helvetica,sans-serif; font-size: 22px;">
                    <div>Hi User,</div>
                  </h1>

                      </td>
                    </tr>
                  </tbody>
                </table>

                <table style="font-family:"Montserrat",sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                  <tbody>
                    <tr>
                      <td style="overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:"Montserrat",sans-serif;" align="left">
                        
                  <div style="line-height: 140%; text-align: left; word-wrap: break-word;">
                    <p style="font-size: 14px; line-height: 140%;">Congratulations! Your loan have been approved by Fast Cars Fast Money.</p>
                  </div>

                      </td>
                    </tr>
                  </tbody>
                </table>

                <table style="font-family:"Montserrat",sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                  <tbody>
                    <tr>
                      <td style="overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:"Montserrat",sans-serif;" align="left">
                        
                  <h2 style="margin: 0px; color: #52c234; line-height: 140%; text-align: center; word-wrap: break-word; font-weight: normal; font-family: arial,helvetica,sans-serif; font-size: 20px;">
                    <div>$3000</div>
                  </h2>

                      </td>
                    </tr>
                  </tbody>
                </table>

                <table style="font-family:"Montserrat",sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                  <tbody>
                    <tr>
                      <td style="overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:"Montserrat",sans-serif;" align="left">
                        
                  <div style="line-height: 140%; text-align: left; word-wrap: break-word;">
                    <p style="font-size: 14px; line-height: 140%;">To take advantage of this loan offer, check the loan contract below for more details.</p>
                  </div>

                      </td>
                    </tr>
                  </tbody>
                </table>

                <table style="font-family:"Montserrat",sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                  <tbody>
                    <tr>
                      <td style="overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:"Montserrat",sans-serif;" align="left">
                        
                  <!--[if mso]><style>.v-button {background: transparent !important;}</style><![endif]-->
                <div align="center">
                  <!--[if mso]><v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="" style="height:36px; v-text-anchor:middle; width:138px;" arcsize="11%"  stroke="f" fillcolor="#21367f"><w:anchorlock/><center style="color:#FFFFFF;font-family:"Montserrat",sans-serif;"><![endif]-->  
                    <a href="" target="_blank" class="v-button" style="box-sizing: border-box;display: inline-block;font-family:"Montserrat",sans-serif;text-decoration: none;-webkit-text-size-adjust: none;text-align: center;color: #FFFFFF; background-color: #21367f; border-radius: 4px;-webkit-border-radius: 4px; -moz-border-radius: 4px; width:auto; max-width:100%; overflow-wrap: break-word; word-break: break-word; word-wrap:break-word; mso-border-alt: none;">
                      <span style="display:block;padding:10px 20px;line-height:120%;"><span style="font-size: 14px; line-height: 16.8px;">View Contract</span></span>
                    </a>
                  <!--[if mso]></center></v:roundrect><![endif]-->
                </div>

                      </td>
                    </tr>
                  </tbody>
                </table>

                <table style="font-family:"Montserrat",sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                  <tbody>
                    <tr>
                      <td style="overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:"Montserrat",sans-serif;" align="left">
                        
                  <table height="0px" align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;border-top: 1px solid #BBBBBB;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%">
                    <tbody>
                      <tr style="vertical-align: top">
                        <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;font-size: 0px;line-height: 0px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%">
                          <span>&#160;</span>
                        </td>
                      </tr>
                    </tbody>
                  </table>

                      </td>
                    </tr>
                  </tbody>
                </table>

                <table style="font-family:"Montserrat",sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                  <tbody>
                    <tr>
                      <td style="overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:"Montserrat",sans-serif;" align="left">
                        
                  <div style="line-height: 140%; text-align: center; word-wrap: break-word;">
                    <p style="font-size: 14px; line-height: 140%;">Thank you for thinking of Fast Cars Fast Money for your lending needs. Please don\'t hesitate to re-apply after meeting the conditions mentioned above.</p>
                  </div>

                      </td>
                    </tr>
                  </tbody>
                </table>

                  <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
                  </div>
                </div>
                <!--[if (mso)|(IE)]></td><![endif]-->
                      <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
                    </div>
                  </div>
                </div>



                <div class="u-row-container" style="padding: 0px;background-color: #21367f">
                  <div class="u-row" style="Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;">
                    <div style="border-collapse: collapse;display: table;width: 100%;height: 100%;background-color: transparent;">
                      <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: #21367f;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:600px;"><tr style="background-color: transparent;"><![endif]-->
                      
                <!--[if (mso)|(IE)]><td align="center" width="600" style="width: 600px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;" valign="top"><![endif]-->
                <div class="u-col u-col-100" style="max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;">
                  <div style="height: 100%;width: 100% !important;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;">
                  <!--[if (!mso)&(!IE)]><!--><div style="height: 100%; padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;"><!--<![endif]-->
                  
                <table style="font-family:"Montserrat",sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                  <tbody>
                    <tr>
                      <td style="overflow-wrap:break-word;word-break:break-word;padding:50px 10px 10px;font-family:"Montserrat",sans-serif;" align="left">
                        
                <div align="center">
                  <div style="display: table; max-width:187px;">
                  <!--[if (mso)|(IE)]><table width="187" cellpadding="0" cellspacing="0" border="0"><tr><td style="border-collapse:collapse;" align="center"><table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse:collapse; mso-table-lspace: 0pt;mso-table-rspace: 0pt; width:187px;"><tr><![endif]-->
                  
                    
                    <!--[if (mso)|(IE)]><td width="32" style="width:32px; padding-right: 15px;" valign="top"><![endif]-->
                    <table align="left" border="0" cellspacing="0" cellpadding="0" width="32" height="32" style="width: 32px !important;height: 32px !important;display: inline-block;border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;margin-right: 15px">
                      <tbody><tr style="vertical-align: top"><td align="left" valign="middle" style="word-break: break-word;border-collapse: collapse !important;vertical-align: top">
                        <a href="https://facebook.com/" title="Facebook" target="_blank">
                          <img src="images/image-1.png" alt="Facebook" title="Facebook" width="32" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: none;height: auto;float: none;max-width: 32px !important">
                        </a>
                      </td></tr>
                    </tbody></table>
                    <!--[if (mso)|(IE)]></td><![endif]-->
                    
                    <!--[if (mso)|(IE)]><td width="32" style="width:32px; padding-right: 15px;" valign="top"><![endif]-->
                    <table align="left" border="0" cellspacing="0" cellpadding="0" width="32" height="32" style="width: 32px !important;height: 32px !important;display: inline-block;border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;margin-right: 15px">
                      <tbody><tr style="vertical-align: top"><td align="left" valign="middle" style="word-break: break-word;border-collapse: collapse !important;vertical-align: top">
                        <a href="https://twitter.com/" title="Twitter" target="_blank">
                          <img src="images/image-2.png" alt="Twitter" title="Twitter" width="32" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: none;height: auto;float: none;max-width: 32px !important">
                        </a>
                      </td></tr>
                    </tbody></table>
                    <!--[if (mso)|(IE)]></td><![endif]-->
                    
                    <!--[if (mso)|(IE)]><td width="32" style="width:32px; padding-right: 15px;" valign="top"><![endif]-->
                    <table align="left" border="0" cellspacing="0" cellpadding="0" width="32" height="32" style="width: 32px !important;height: 32px !important;display: inline-block;border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;margin-right: 15px">
                      <tbody><tr style="vertical-align: top"><td align="left" valign="middle" style="word-break: break-word;border-collapse: collapse !important;vertical-align: top">
                        <a href="https://linkedin.com/" title="LinkedIn" target="_blank">
                          <img src="images/image-3.png" alt="LinkedIn" title="LinkedIn" width="32" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: none;height: auto;float: none;max-width: 32px !important">
                        </a>
                      </td></tr>
                    </tbody></table>
                    <!--[if (mso)|(IE)]></td><![endif]-->
                    
                    <!--[if (mso)|(IE)]><td width="32" style="width:32px; padding-right: 0px;" valign="top"><![endif]-->
                    <table align="left" border="0" cellspacing="0" cellpadding="0" width="32" height="32" style="width: 32px !important;height: 32px !important;display: inline-block;border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;margin-right: 0px">
                      <tbody><tr style="vertical-align: top"><td align="left" valign="middle" style="word-break: break-word;border-collapse: collapse !important;vertical-align: top">
                        <a href="https://instagram.com/" title="Instagram" target="_blank">
                          <img src="images/image-4.png" alt="Instagram" title="Instagram" width="32" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: none;height: auto;float: none;max-width: 32px !important">
                        </a>
                      </td></tr>
                    </tbody></table>
                    <!--[if (mso)|(IE)]></td><![endif]-->
                    
                    
                    <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
                  </div>
                </div>

                      </td>
                    </tr>
                  </tbody>
                </table>

                <table style="font-family:"Montserrat",sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                  <tbody>
                    <tr>
                      <td style="overflow-wrap:break-word;word-break:break-word;padding:10px 10px 60px;font-family:"Montserrat",sans-serif;" align="left">
                        
                  <div style="color: #ffffff; line-height: 140%; text-align: center; word-wrap: break-word;">
                    <p style="font-size: 14px; line-height: 140%;">2261 Market Street #4667 San Francisco, CA 94114</p>
                <p style="font-size: 14px; line-height: 140%;">All rights reserved.  Company No. 94114</p>
                <p style="font-size: 14px; line-height: 140%;"> </p>
                <p style="font-size: 14px; line-height: 140%;">Preferences | Unsubscribe  | View in browser</p>
                  </div>

                      </td>
                    </tr>
                  </tbody>
                </table>

                  <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
                  </div>
                </div>
                <!--[if (mso)|(IE)]></td><![endif]-->
                      <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
                    </div>
                  </div>
                </div>


                    <!--[if (mso)|(IE)]></td></tr></table><![endif]-->
                    </td>
                  </tr>
                  </tbody>
                  </table>
                  <!--[if mso]></div><![endif]-->
                  <!--[if IE]></div><![endif]-->
                </body>

                </html>

        ';
        $phpmailer->AltBody = "This is the body in plain text for non-HTML mail clients";

        $phpmailer->send();
        echo 'Message has been sent';

    } catch (Exception $e) {

        echo "Message could not be sent. Mailer Error: {$phpmailer->ErrorInfo}";

    }

});