<?php

namespace App\Http\Livewire\Admin\Loans;

use Livewire\Component;

use App\Models\Loan\CarLoan;
use Livewire\WithFileUploads;
use App\Models\PersonalLoan;

class HowTo extends Component
{
    public $currentUrl;
    public $personalLoanPage = 'admin.personal-loan.customize';
    public $carLoanPage = 'admin.car-title-loan.customize';

    use WithFileUploads;

    public $sectionHeading;
    public $sectionText;
    public $sectionBtn;

    public $pointOneText;
    public $pointOneImage;
    public $oneImagePreview;
    public $pointTwoText;
    public $pointTwoImage;
    public $twoImagePreview;
    public $pointThreeText;
    public $pointThreeImage;
    public $threeImagePreview;

    public $isHidden;

    public function mount()
    {
        session()->put('currentUrl', \Request::route()->getName());
    }

    public function submit()
    {
        $this->validate([
            'sectionHeading' => 'required',
            'sectionText' => 'required',
            'sectionBtn' => 'required',
            'pointOneText' => 'required',
            'pointTwoText' => 'required',
            'pointThreeText' => 'required',
        ]);
        if (session('currentUrl') == $this->personalLoanPage) {
            $loan = PersonalLoan::where('id', 1)->first();
        }
        if (session('currentUrl') == $this->carLoanPage) {
            $loan = CarLoan::where('id', 1)->first();
        }
        // $loan = CarLoan::where('id', 1)->first();
        $loan->how_head = $this->sectionHeading;
        $loan->how_text = $this->sectionText;
        $loan->how_btn = $this->sectionBtn;
        $loan->how_point1 = $this->pointOneText;
        $loan->how_point2 = $this->pointTwoText;
        $loan->how_point3 = $this->pointThreeText;

        if ($this->pointOneImage != '') {

            $this->validate([
                'pointOneImage' => 'image'
            ]);
            if (session('currentUrl') == $this->personalLoanPage) {
                $loan = PersonalLoan::where('id', 1)->first();
                $extension1 = $this->pointOneImage->getClientOriginalExtension();
                $img1 = $this->pointOneImage->storeAs('loan/personal-loan', 'point_1.'.$extension1 , 'public');
            }
            if (session('currentUrl') == $this->carLoanPage) {
                $loan = CarLoan::where('id', 1)->first();
                $extension1 = $this->pointOneImage->getClientOriginalExtension();
                $img1 = $this->pointOneImage->storeAs('loan/car-loan', 'point_1.'.$extension1 , 'public');
            }
            
            $imgUrl1 = 'storage/'.$img1;
            $loan->how_img1 = $imgUrl1;

        }
        if ($this->pointTwoImage != '') {

            $this->validate([
                'pointTwoImage' => 'image'
            ]);
            if (session('currentUrl') == $this->personalLoanPage) {
                $loan = PersonalLoan::where('id', 1)->first();
                $extension2 = $this->pointTwoImage->getClientOriginalExtension();
                $img2 = $this->pointTwoImage->storeAs('loan/personal-loan', 'point_2.'.$extension2 , 'public');
            }
            if (session('currentUrl') == $this->carLoanPage) {
                $loan = CarLoan::where('id', 1)->first();
                $extension2 = $this->pointTwoImage->getClientOriginalExtension();
                $img2 = $this->pointTwoImage->storeAs('loan/car-loan', 'point_2.'.$extension2 , 'public');
            }
            
            $imgUrl2 = 'storage/'.$img2;
            $loan->how_img2 = $imgUrl2;
            
        }
        if ($this->pointThreeImage != '') {

            $this->validate([
                'pointThreeImage' => 'image'
            ]);
            if (session('currentUrl') == $this->personalLoanPage) {
                $loan = PersonalLoan::where('id', 1)->first();
                $extension3 = $this->pointThreeImage->getClientOriginalExtension();
                $img3 = $this->pointThreeImage->storeAs('loan/personal-loan', 'point_3.'.$extension3 , 'public');
            }
            if (session('currentUrl') == $this->carLoanPage) {
                $loan = CarLoan::where('id', 1)->first();
                $extension3 = $this->pointThreeImage->getClientOriginalExtension();
                $img3 = $this->pointThreeImage->storeAs('loan/car-loan', 'point_3.'.$extension3 , 'public');
            }
            
            $imgUrl3 = 'storage/'.$img3;
            $loan->how_img3 = $imgUrl3;
            
        }

        $loan->save();
        session()->flash('successMessage', 'Saved!');
    }

    public function hideUnhideSection($value)
    {
        $this->isHidden = $value;
        if (session('currentUrl') == $this->personalLoanPage) {
            $loan = PersonalLoan::where('id', 1)->first();
        }
        if (session('currentUrl') == $this->carLoanPage) {
            $loan = CarLoan::where('id', 1)->first();
        }
        // $loan = CarLoan::where('id', 1)->first();
        $loan->how_hidden = $value;
        $loan->save();
    }

    public function render()
    {
        if (session('currentUrl') == $this->personalLoanPage) {
            $loan = PersonalLoan::where('id', 1)->first(
                [
                    'how_head','how_text', 'how_btn', 'how_img1', 'how_img2', 'how_img3', 'how_point1', 'how_point2', 'how_point3', 'how_hidden',
                ]
            );
        }
        if (session('currentUrl') == $this->carLoanPage) {
            $loan = CarLoan::where('id', 1)->first(
                [
                    'how_head','how_text', 'how_btn', 'how_img1', 'how_img2', 'how_img3', 'how_point1', 'how_point2', 'how_point3', 'how_hidden',
                ]
            );
        }
        
        $this->sectionHeading = $loan->how_head;
        $this->sectionText = $loan->how_text;
        $this->sectionBtn = $loan->how_btn;
        $this->pointOneText = $loan->how_point1;
        $this->pointTwoText = $loan->how_point2;
        $this->pointThreeText = $loan->how_point3;
        $this->oneImagePreview = $loan->how_img1;
        $this->twoImagePreview = $loan->how_img2;
        $this->threeImagePreview = $loan->how_img3;
        $this->isHidden = $loan->how_hidden;

        return view('livewire.admin.loans.how-to');
    }
}
