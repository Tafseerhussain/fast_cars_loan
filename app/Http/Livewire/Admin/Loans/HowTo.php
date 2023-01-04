<?php

namespace App\Http\Livewire\Admin\Loans;

use Livewire\Component;

use App\Models\Loan\CarLoan;
use Livewire\WithFileUploads;

class HowTo extends Component
{
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

        $loan = CarLoan::where('id', 1)->first();
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

            $extension1 = $this->pointOneImage->getClientOriginalExtension();
            $img1 = $this->pointOneImage->storeAs('loan/car-loan', 'point_1.'.$extension1 , 'public');
            $imgUrl1 = 'storage/'.$img1;
            $loan->how_img1 = $imgUrl1;

        }
        if ($this->pointTwoImage != '') {

            $this->validate([
                'pointTwoImage' => 'image'
            ]);
            $extension2 = $this->pointTwoImage->getClientOriginalExtension();
            $img2 = $this->pointTwoImage->storeAs('loan/car-loan', 'point_2.'.$extension2 , 'public');
            $imgUrl2 = 'storage/'.$img2;
            $loan->how_img2 = $imgUrl2;
            
        }
        if ($this->pointThreeImage != '') {

            $this->validate([
                'pointThreeImage' => 'image'
            ]);
            $extension3 = $this->pointThreeImage->getClientOriginalExtension();
            $img3 = $this->pointThreeImage->storeAs('loan/car-loan', 'point_3.'.$extension3 , 'public');
            $imgUrl3 = 'storage/'.$img3;
            $loan->how_img3 = $imgUrl3;
            
        }

        $loan->save();
        session()->flash('successMessage', 'Saved!');
    }

    public function hideUnhideSection($value)
    {
        $this->isHidden = $value;
        $loan = CarLoan::where('id', 1)->first();
        $loan->how_hidden = $value;
        $loan->save();
    }

    public function render()
    {
        $loan = CarLoan::where('id', 1)->first(
            [
                'how_head','how_text', 'how_btn', 'how_img1', 'how_img2', 'how_img3', 'how_point1', 'how_point2', 'how_point3', 'how_hidden',
            ]
        );
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
