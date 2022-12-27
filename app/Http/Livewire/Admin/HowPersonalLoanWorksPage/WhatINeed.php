<?php

namespace App\Http\Livewire\Admin\HowPersonalLoanWorksPage;

use Livewire\Component;

use App\Models\HowPersonalLoanWork;

class WhatINeed extends Component
{
    public $sectionHeading;
    public $firstSubheading;
    public $firstHeadingFirstPoint;
    public $firstHeadingSecondPoint;
    public $firstHeadingThirdPoint;
    public $firstHeadingFourthPoint;
    public $secondSubheading;
    public $secondHeadingFirstPoint;
    public $secondHeadingSecondPoint;
    public $secondHeadingThirdPoint;
    public $secondHeadingFourthPoint;

    public $isHidden;

    public function hideUnhideSection($value)
    {
        $this->isHidden = $value;
        $loan = HowPersonalLoanWork::where('id', 1)->first();
        $loan->need_hidden = $value;
        $loan->save();
    }

    public function submit()
    {
        $this->validate([
            'sectionHeading' => 'required',
            'firstSubheading' => 'required',
            'firstHeadingFirstPoint' => 'required',
            'firstHeadingSecondPoint' => 'required',
            'firstHeadingThirdPoint' => 'required',
            'firstHeadingFourthPoint' => 'required',
            'secondSubheading' => 'required',
            'secondHeadingFirstPoint' => 'required',
            'secondHeadingSecondPoint' => 'required',
            'secondHeadingThirdPoint' => 'required',
            'secondHeadingFourthPoint' => 'required',
        ]);
        $loan = HowPersonalLoanWork::where('id', 1)->first();
        $loan->need_head = $this->sectionHeading;
        $loan->instore_head = $this->firstSubheading;
        $loan->instore_point1 = $this->firstHeadingFirstPoint;
        $loan->instore_point2 = $this->firstHeadingSecondPoint;
        $loan->instore_point3 = $this->firstHeadingThirdPoint;
        $loan->instore_point4 = $this->firstHeadingFourthPoint;
        $loan->items_head = $this->secondSubheading;
        $loan->items_point1 = $this->secondHeadingFirstPoint;
        $loan->items_point2 = $this->secondHeadingSecondPoint;
        $loan->items_point3 = $this->secondHeadingThirdPoint;
        $loan->items_point4 = $this->secondHeadingFourthPoint;
        $loan->save();
        session()->flash('successMessage', 'Saved!');
    }

    public function render()
    {
        $loan = HowPersonalLoanWork::where('id', 1)->first(
            [
                'need_head', 
                'instore_head', 'instore_point1', 'instore_point2', 'instore_point3', 'instore_point4', 
                'items_head', 'items_point1', 'items_point2', 'items_point3', 'items_point4',
                'need_hidden'
            ]
        );
        $this->sectionHeading = $loan->need_head;
        $this->firstSubheading = $loan->instore_head;
        $this->firstHeadingFirstPoint = $loan->instore_point1;
        $this->firstHeadingSecondPoint = $loan->instore_point2;
        $this->firstHeadingThirdPoint = $loan->instore_point3;
        $this->firstHeadingFourthPoint = $loan->instore_point4;
        $this->secondSubheading = $loan->items_head;
        $this->secondHeadingFirstPoint = $loan->items_point1;
        $this->secondHeadingSecondPoint = $loan->items_point2;
        $this->secondHeadingThirdPoint = $loan->items_point3;
        $this->secondHeadingFourthPoint = $loan->items_point4;
        $this->isHidden = $loan->need_hidden;
        return view('livewire.admin.how-personal-loan-works-page.what-i-need');
    }
}
