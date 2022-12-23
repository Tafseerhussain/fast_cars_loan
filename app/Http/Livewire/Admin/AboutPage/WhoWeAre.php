<?php

namespace App\Http\Livewire\Admin\AboutPage;

use Livewire\Component;
use App\Models\AboutPage;
use Livewire\WithFileUploads;

class WhoWeAre extends Component
{
    use WithFileUploads;

    public $sectionTitle;
    public $sectionText;

    public $firstImage;
    public $secondImage;
    public $thirdImage;
    public $fourthImage;

    public $firstImagePreview;
    public $secondImagePreview;
    public $thirdImagePreview;
    public $fourthImagePreview;
    
    public $isHidden;

    public function submit()
    {
        $this->validate([
            'sectionTitle' => 'required',
            'sectionText' => 'required',
        ]);

        $who = AboutPage::where('id', 1)->first();
        $who->who_head = $this->sectionTitle;
        $who->who_text = $this->sectionText;

        if ($this->firstImage != '') {
            $this->validate([
                'firstImage' => 'image'
            ]);
            $extension1 = $this->firstImage->getClientOriginalExtension();
            $img1 = $this->firstImage->storeAs('about', 'who_1.'.$extension1 , 'public');
            $imgUrl1 = 'storage/'.$img1;
            $who->who_img1 = $imgUrl1;
        }

        if ($this->secondImage != '') {
            $this->validate([
                'secondImage' => 'image'
            ]);
            $extension2 = $this->secondImage->getClientOriginalExtension();
            $img2 = $this->secondImage->storeAs('about', 'who_2.'.$extension2 , 'public');
            $imgUrl2 = 'storage/'.$img2;
            $who->who_img2 = $imgUrl2;
        }

        if ($this->thirdImage != '') {
            $this->validate([
                'thirdImage' => 'image'
            ]);
            $extension3 = $this->thirdImage->getClientOriginalExtension();
            $img3 = $this->thirdImage->storeAs('about', 'who_3.'.$extension3 , 'public');
            $imgUrl3 = 'storage/'.$img3;
            $who->who_img3 = $imgUrl3;
        }

        if ($this->fourthImage != '') {
            $this->validate([
                'fourthImage' => 'image'
            ]);
            $extension4 = $this->fourthImage->getClientOriginalExtension();
            $img4 = $this->fourthImage->storeAs('about', 'who_4.'.$extension4 , 'public');
            $imgUrl4 = 'storage/'.$img4;
            $who->who_img4 = $imgUrl4;
        }

        $who->save();
        session()->flash('successMessage', 'Saved!');
    }

    public function hideUnhideSection($value)
    {
        $this->isHidden = $value;
        $who = AboutPage::where('id', 1)->first();
        $who->who_hidden = $value;
        $who->save();
    }

    public function render()
    {
        $who = AboutPage::where('id', 1)->first(
            [
                'who_head',
                'who_text', 
                'who_hidden',
                'who_img1',
                'who_img2',
                'who_img3',
                'who_img4',
            ]);
        $this->sectionTitle = $who->who_head;
        $this->sectionText = $who->who_text;
        $this->isHidden = $who->who_hidden;

        $this->firstImagePreview = $who->who_img1;
        $this->secondImagePreview = $who->who_img2;
        $this->thirdImagePreview = $who->who_img3;
        $this->fourthImagePreview = $who->who_img4;
        return view('livewire.admin.about-page.who-we-are');
    }
}
