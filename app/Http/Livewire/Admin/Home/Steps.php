<?php

namespace App\Http\Livewire\Admin\Home;

use Livewire\Component;
use App\Models\Home;
use Livewire\WithFileUploads;
use File;

class Steps extends Component
{
    use WithFileUploads;

    public $stepsHeading;

    public $stepOneHeading;
    public $stepOneText;
    public $stepOneImage;

    public $stepTwoHeading;
    public $stepTwoText;
    public $stepTwoImage;

    public $stepThreeHeading;
    public $stepThreeText;
    public $stepThreeImage;

    public $stepOneImagePreview;
    public $stepTwoImagePreview;
    public $stepThreeImagePreview;

    protected $rules = [
        'stepsHeading' => 'required',

        'stepOneHeading' => 'required',
        'stepOneText' => 'required|max:190',

        'stepTwoHeading' => 'required',
        'stepTwoText' => 'required|max:190',

        'stepThreeHeading' => 'required',
        'stepThreeText' => 'required|max:190',
    ];

    public function submit()
    {
        $this->validate();

        $steps = Home::where('id', 1)->first();
        $steps->steps_heading = $this->stepsHeading;

        $steps->step_one_heading = $this->stepOneHeading ;
        $steps->step_one_text = $this->stepOneText;
        // $steps->step_one_image = $this->stepOneImage;

        $steps->step_two_heading = $this->stepTwoHeading;
        $steps->step_two_text = $this->stepTwoText;
        // $steps->step_two_image = $this->stepTwoImage;

        $steps->step_three_heading = $this->stepThreeHeading;
        $steps->step_three_text = $this->stepThreeText;
        // $steps->step_three_image = $this->stepThreeImage;

        if ($this->stepOneImage != '') {

            $this->validate([
                'stepOneImage' => 'image'
            ]);

            $extension1 = $this->stepOneImage->getClientOriginalExtension();
            $img1 = $this->stepOneImage->storeAs('home', 'step_1.'.$extension1 , 'public');
            $imgUrl1 = 'storage/'.$img1;
            $steps->step_one_image = $imgUrl1;

        }
        if ($this->stepTwoImage != '') {

            $this->validate([
                'stepTwoImage' => 'image'
            ]);
            $extension2 = $this->stepTwoImage->getClientOriginalExtension();
            $img2 = $this->stepTwoImage->storeAs('home', 'step_2.'.$extension2 , 'public');
            $imgUrl2 = 'storage/'.$img2;
            $steps->step_two_image = $imgUrl2;
            
        }
        if ($this->stepThreeImage != '') {

            $this->validate([
                'stepThreeImage' => 'image'
            ]);
            $extension3 = $this->stepThreeImage->getClientOriginalExtension();
            $img3 = $this->stepThreeImage->storeAs('home', 'step_3.'.$extension3 , 'public');
            $imgUrl3 = 'storage/'.$img3;
            $steps->step_three_image = $imgUrl3;
            
        }

        $steps->save();
        session()->flash('successMessage', 'Saved!');
    }

    public function render()
    {
        $steps = Home::where('id', 1)->first([
            'steps_heading',
            'step_one_heading', 'step_one_text', 'step_one_image',
            'step_two_heading', 'step_two_text', 'step_two_image',
            'step_three_heading', 'step_three_text', 'step_three_image',
        ]);

        $this->stepsHeading = $steps->steps_heading;

        $this->stepOneHeading = $steps->step_one_heading;
        $this->stepOneText = $steps->step_one_text;
        $this->stepOneImagePreview = $steps->step_one_image;

        $this->stepTwoHeading = $steps->step_two_heading;
        $this->stepTwoText = $steps->step_two_text;
        $this->stepTwoImagePreview = $steps->step_two_image;

        $this->stepThreeHeading = $steps->step_three_heading;
        $this->stepThreeText = $steps->step_three_text;
        $this->stepThreeImagePreview = $steps->step_three_image;
        return view('livewire.admin.home.steps', compact('steps'));
    }
}
