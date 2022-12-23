<?php

namespace App\Http\Livewire\Admin\AboutPage;

use Livewire\Component;
use App\Models\AboutPage;

class WhatWeOffer extends Component
{
    public $sectionTitle;
    public $firstHeading;
    public $firstText;
    public $secondHeading;
    public $secondText;
    public $thirdHeading;
    public $thirdText;
    public $fourthHeading;
    public $fourthText;
    public $isHidden;

    public function hideUnhideSection($value)
    {
        $this->isHidden = $value;
        $offer = AboutPage::where('id', 1)->first();
        $offer->offer_hidden = $value;
        $offer->save();
    }

    public function submit()
    {
        $this->validate([
            'sectionTitle' => 'required',
            'firstHeading' => 'required',
            'firstText' => 'required',
            'secondHeading' => 'required',
            'secondText' => 'required',
            'thirdHeading' => 'required',
            'thirdText' => 'required',
            'fourthHeading' => 'required',
            'fourthText' => 'required',
        ]);
        $offer = AboutPage::where('id', 1)->first();
        $offer->offer_head = $this->sectionTitle;
        $offer->offer_point_head_1 = $this->firstHeading;
        $offer->offer_point_head_2 = $this->secondHeading;
        $offer->offer_point_head_3 = $this->thirdHeading;
        $offer->offer_point_head_4 = $this->fourthHeading;
        $offer->offer_point_text_1 = $this->firstText;
        $offer->offer_point_text_2 = $this->secondText;
        $offer->offer_point_text_3 = $this->thirdText;
        $offer->offer_point_text_4 = $this->fourthText;
        $offer->save();
        session()->flash('successMessage', 'Saved!');
    }

    public function render()
    {
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
            ]);
        $this->sectionTitle = $offer->offer_head;
        $this->firstHeading = $offer->offer_point_head_1;
        $this->firstText = $offer->offer_point_text_1;
        $this->secondHeading = $offer->offer_point_head_2;
        $this->secondText = $offer->offer_point_text_2;
        $this->thirdHeading = $offer->offer_point_head_3;
        $this->thirdText = $offer->offer_point_text_3;
        $this->fourthHeading = $offer->offer_point_head_4;
        $this->fourthText = $offer->offer_point_text_4;
        return view('livewire.admin.about-page.what-we-offer');
    }
}
