<?php

namespace App\Http\Livewire\Admin\Emails;

use Livewire\Component;
use App\Models\Email;

class LoanApproval extends Component
{
    public $approvalMessage;
    public $approvalMessageLineTwo;
    public $linkToContract;
    public $lastMessage;

    public function mount($approval)
    {
        $this->approvalMessage = $approval->approval_message;
        $this->approvalMessageLineTwo = $approval->approval_message_line_two;
        $this->linkToContract = $approval->link_to_contract;
        $this->lastMessage = $approval->last_message_approval;
    }

    public function submit()
    {
        $this->validate([
            'approvalMessage' => 'required',
            'approvalMessageLineTwo' => 'required',
            'linkToContract' => 'required',
            'lastMessage' => 'required',
        ]);
        $em = Email::first();
        $em->approval_message = $this->approvalMessage;
        $em->approval_message_line_two = $this->approvalMessageLineTwo;
        $em->link_to_contract = $this->linkToContract;
        $em->last_message_approval = $this->lastMessage;
        $em->save();

        session()->flash('successMessage', 'Template Updated');
    }

    public function render()
    {
        return view('livewire.admin.emails.loan-approval');
    }
}
