<?php

namespace App\Http\Livewire\Admin\Home;

use Livewire\Component;
use App\Models\Home;
use Livewire\WithFileUploads;

class WhyGetFunded extends Component
{
    use WithFileUploads;

    public $heading;
    public $subHeading;
    public $backgroundImage;
    public $backgroundPreview;

    public $cardOneImage;
    public $cardOneHeading;
    public $cardOneText;

    public $cardTwoImage;
    public $cardTwoHeading;
    public $cardTwoText;
    
    public $cardThreeImage;
    public $cardThreeHeading;
    public $cardThreeText;

    public $cardFourImage;
    public $cardFourHeading;
    public $cardFourText;
    
    public $cardOnePreview;
    public $cardTwoPreview;
    public $cardThreePreview;
    public $cardFourPreview;

    public $isHidden;

    public function mount()
    {
        $funded = Home::where('id', 1)->first(
            [
                'funding_heading',
                'funding_subheading',
                'funding_background',
                'funding_card_one_image',
                'funding_card_one_heading',
                'funding_card_one_text',
                'funding_card_two_image',
                'funding_card_two_heading',
                'funding_card_two_text',
                'funding_card_three_image',
                'funding_card_three_heading',
                'funding_card_three_text',
                'funding_card_four_image',
                'funding_card_four_heading',
                'funding_card_four_text',
                'funding_hidden'
            ]
        );

        $this->heading = $funded->funding_heading;
        $this->subHeading = $funded->funding_subheading;
        $this->backgroundPreview = $funded->funding_background;

        $this->cardOneHeading = $funded->funding_card_one_heading;
        $this->cardOneText = $funded->funding_card_one_text;
        $this->cardOnePreview = $funded->funding_card_one_image;

        $this->cardTwoHeading = $funded->funding_card_two_heading;
        $this->cardTwoText = $funded->funding_card_two_text;
        $this->cardTwoPreview = $funded->funding_card_two_image;

        $this->cardThreeHeading = $funded->funding_card_three_heading;
        $this->cardThreeText = $funded->funding_card_three_text;
        $this->cardThreePreview = $funded->funding_card_three_image;

        $this->cardFourHeading = $funded->funding_card_four_heading;
        $this->cardFourText = $funded->funding_card_four_text;
        $this->cardFourPreview = $funded->funding_card_four_image;

        $this->isHidden = $funded->funding_hidden;
    }

    public function submit()
    {
        $this->validate([
            'heading' => 'required',
            'subHeading' => 'required'
        ]);
        $funding = Home::where('id', 1)->first();
        $funding->funding_heading = $this->heading;
        $funding->funding_subheading = $this->subHeading;
        $funding->save();
        session()->flash('successMessage', 'Saved!');
    }

    public function submitImage()
    {
        $this->validate([
            'backgroundImage' => 'required|image',
        ]);
        $funding = Home::where('id', 1)->first();
        $extension = $this->backgroundImage->getClientOriginalExtension();
        $img = $this->backgroundImage->storeAs('home', 'funded-bg.'.$extension , 'public');
        $imgUrl = 'storage/'.$img;
        $funding->funding_background = $imgUrl;
        $funding->save();
        session()->flash('successMessageImage', 'Updated!');
    }

    public function submitCards()
    {
        $this->validate([
            'cardOneHeading' => 'required',
            'cardOneText' => 'required',

            'cardTwoHeading' => 'required',
            'cardTwoText' => 'required',

            'cardThreeHeading' => 'required',
            'cardThreeText' => 'required',

            'cardFourHeading' => 'required',
            'cardFourText' => 'required',
        ]);

        $funded = Home::where('id', 1)->first();

        $funded->funding_card_one_heading = $this->cardOneHeading;
        $funded->funding_card_one_text = $this->cardOneText;

        $funded->funding_card_two_heading = $this->cardTwoHeading;
        $funded->funding_card_two_text = $this->cardTwoText;

        $funded->funding_card_three_heading = $this->cardThreeHeading;
        $funded->funding_card_three_text = $this->cardThreeText;

        $funded->funding_card_four_heading = $this->cardFourHeading;
        $funded->funding_card_four_text = $this->cardFourText;

        if ($this->cardOneImage != '') {

            $this->validate([
                'cardOneImage' => 'image'
            ]);

            $extension1 = $this->cardOneImage->getClientOriginalExtension();
            $img1 = $this->cardOneImage->storeAs('home', 'funded_card_1.'.$extension1 , 'public');
            $imgUrl1 = 'storage/'.$img1;
            $funded->funding_card_one_image = $imgUrl1;

        }

        if ($this->cardTwoImage != '') {

            $this->validate([
                'cardTwoImage' => 'image'
            ]);

            $extension2 = $this->cardTwoImage->getClientOriginalExtension();
            $img2 = $this->cardTwoImage->storeAs('home', 'funded_card_2.'.$extension2 , 'public');
            $imgUrl2 = 'storage/'.$img2;
            $funded->funding_card_two_image = $imgUrl2;

        }

        if ($this->cardThreeImage != '') {

            $this->validate([
                'cardThreeImage' => 'image'
            ]);

            $extension3 = $this->cardThreeImage->getClientOriginalExtension();
            $img3 = $this->cardThreeImage->storeAs('home', 'funded_card_3.'.$extension3 , 'public');
            $imgUrl3 = 'storage/'.$img3;
            $funded->funding_card_three_image = $imgUrl3;

        }

        if ($this->cardFourImage != '') {

            $this->validate([
                'cardFourImage' => 'image'
            ]);

            $extension4 = $this->cardFourImage->getClientOriginalExtension();
            $img4 = $this->cardFourImage->storeAs('home', 'funded_card_4.'.$extension4 , 'public');
            $imgUrl4 = 'storage/'.$img1;
            $funded->funding_card_four_image = $imgUrl4;

        }

        $funded->save();
        session()->flash('successMessageCards', 'Saved!');
    }

    public function hideUnhideSection($value)
    {
        $this->isHidden = $value;
        $funded = Home::where('id', 1)->first();
        $funded->funding_hidden = $value;
        $funded->save();
    }

    public function render()
    {
        return view('livewire.admin.home.why-get-funded');
    }
}
