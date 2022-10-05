<?php

namespace App\Http\Livewire\Admin\Home;

use Livewire\Component;
use App\Models\Home;
use Livewire\WithFileUploads;
use File;

class CustomerPortal extends Component
{
    use WithFileUploads;

    public $heading;

    public $cardOneText;
    public $cardTwoText;
    public $cardThreeText;
    public $cardFourText;
    public $cardOneImage;
    public $cardTwoImage;
    public $cardThreeImage;
    public $cardFourImage;

    public $cardOnePreview;
    public $cardTwoPreview;
    public $cardThreePreview;
    public $cardFourPreview;

    public function mount()
    {
        $portal = Home::where('id', 1)->first(
            [
                'portal_heading',
                'portal_card_one_text',
                'portal_card_two_text',
                'portal_card_three_text',
                'portal_card_four_text',
                'portal_card_one_image',
                'portal_card_two_image',
                'portal_card_three_image',
                'portal_card_four_image',
            ]
        );

        $this->heading = $portal->portal_heading;
        $this->cardOneText = $portal->portal_card_one_text;
        $this->cardTwoText = $portal->portal_card_two_text;
        $this->cardThreeText = $portal->portal_card_three_text;
        $this->cardFourText = $portal->portal_card_four_text;
        $this->cardOnePreview = $portal->portal_card_one_image;
        $this->cardTwoPreview = $portal->portal_card_two_image;
        $this->cardThreePreview = $portal->portal_card_three_image;
        $this->cardFourPreview = $portal->portal_card_four_image;
    }

    protected $rules = [
        'heading' => 'required',
        'cardOneText' => 'required',
        'cardTwoText' => 'required',
        'cardThreeText' => 'required',
        'cardFourText' => 'required'
    ];

    public function submit()
    {
        $this->validate();

        $portal = Home::where('id', 1)->first();
        $portal->portal_heading = $this->heading;
        $portal->portal_card_one_text = $this->cardOneText;
        $portal->portal_card_two_text = $this->cardTwoText;
        $portal->portal_card_three_text = $this->cardThreeText;
        $portal->portal_card_four_text = $this->cardFourText;

        if ($this->cardOneImage != '') {

            $this->validate([
                'cardOneImage' => 'image'
            ]);

            $extension1 = $this->cardOneImage->getClientOriginalExtension();
            $img1 = $this->cardOneImage->storeAs('home', 'portal_1.'.$extension1 , 'public');
            $imgUrl1 = 'storage/'.$img1;
            $portal->portal_card_one_image = $imgUrl1;

        }

        if ($this->cardTwoImage != '') {

            $this->validate([
                'cardTwoImage' => 'image'
            ]);

            $extension2 = $this->cardTwoImage->getClientOriginalExtension();
            $img2 = $this->cardTwoImage->storeAs('home', 'portal_2.'.$extension2 , 'public');
            $imgUrl2 = 'storage/'.$img2;
            $portal->portal_card_two_image = $imgUrl2;

        }

        if ($this->cardThreeImage != '') {

            $this->validate([
                'cardThreeImage' => 'image'
            ]);

            $extension3 = $this->cardThreeImage->getClientOriginalExtension();
            $img3 = $this->cardThreeImage->storeAs('home', 'portal_3.'.$extension3 , 'public');
            $imgUrl3 = 'storage/'.$img3;
            $portal->portal_card_three_image = $imgUrl3;

        }

        if ($this->cardFourImage != '') {

            $this->validate([
                'cardFourImage' => 'image'
            ]);

            $extension4 = $this->cardFourImage->getClientOriginalExtension();
            $img4 = $this->cardFourImage->storeAs('home', 'portal_4.'.$extension4 , 'public');
            $imgUrl4 = 'storage/'.$img4;
            $portal->portal_card_four_image = $imgUrl4;

        }

        $portal->save();
        session()->flash('successMessage', 'Updated!');
    }

    public function render()
    {
        return view('livewire.admin.home.customer-portal');
    }
}
