<?php

namespace App\Http\Livewire\ApplyForm;

use Livewire\Component;
use App\Models\BaseFormData;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class BaseForm extends Component
{
    public $message;

    public $firstName;
    public $lastName;
    public $email;
    public $mobileCode;
    public $mobileNumber;
    public $income;
    public $creditScore = '';
    public $agree;

    public $leastIncome;
    public $creditScores;

    public $creditScoreValues;
    public $leastIncomeValue;

    public function mount($message)
    {
        $this->message = $message;
        $base = \App\Models\BaseForm::first();
        $this->leastIncomeValue = $base->least_income;
        $this->creditScoreValues = $base->credit_scores;
    }

    protected $rules = [
        'firstName' => 'required',
        'lastName' => 'required',
        'email' => 'required',
        'mobileCode' => 'required',
        'mobileNumber' => 'required|numeric',
        'income' => 'required|numeric',
        'creditScore' => 'required',
    ];

    public function submit()
    {
        $this->validate();

        $form = new BaseFormData;
        $form->first_name = $this->firstName;
        $form->last_name = $this->lastName;
        $form->email = $this->email;
        $form->mob_code = $this->mobileCode;
        $form->mob_number = $this->mobileNumber;
        $form->income = $this->income;
        $form->credit_score = $this->creditScore;
        $form->save();

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
            $phpmailer->addAddress($this->email);

            //Content
            $phpmailer->isHTML(true);                                  //Set email format to HTML
            $phpmailer->Subject = "Loan Request";
            $phpmailer->Body    = view('emails.admin.base-form-request', compact(['form']))->render();

            $phpmailer->send();
            echo('Message has been sent');

        } catch (Exception $e) {

            echo( "Message could not be sent. Mailer Error: {$phpmailer->ErrorInfo}");

        }

        $this->firstName = '';
        $this->lastName = '';
        $this->email = '';
        $this->mobileCode = '';
        $this->mobileNumber = '';
        $this->income = '';
        $this->creditScore = '';

        session()->flash('success_message', 'message sent.');
    }

    public function hideMessage()
    {
        session()->forget('success_message');
    }
    public function render()
    {
        return view('livewire.apply-form.base-form');
    }
}
