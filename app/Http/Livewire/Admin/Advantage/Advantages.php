<?php

namespace App\Http\Livewire\Admin\Advantage;

use Livewire\Component;
use App\Models\Advantage;
use Livewire\WithFileUploads;
use File;

class Advantages extends Component
{
    use WithFileUploads;

    public $advantageOneHeading;
    public $advantageOneText;
    public $advantageOneImage;

    public $advantageTwoHeading;
    public $advantageTwoText;
    public $advantageTwoImage;

    public $advantageThreeHeading;
    public $advantageThreeText;
    public $advantageThreeImage;

    public $advantageFourHeading;
    public $advantageFourText;
    public $advantageFourImage;

    public $advantageFiveHeading;
    public $advantageFiveText;
    public $advantageFiveImage;

    public $advantageSixHeading;
    public $advantageSixText;
    public $advantageSixImage;

    public $advantageSevenHeading;
    public $advantageSevenText;
    public $advantageSevenImage;

    public $advantageOnePreview;
    public $advantageTwoPreview;
    public $advantageThreePreview;
    public $advantageFourPreview;
    public $advantageFivePreview;
    public $advantageSixPreview;
    public $advantageSevenPreview;

    public $isHidden;

    public function submit()
    {
        $this->validate([
            'advantageOneHeading' => 'required',
            'advantageOneText' => 'required',
            'advantageTwoHeading' => 'required',
            'advantageTwoText' => 'required',
            'advantageThreeHeading' => 'required',
            'advantageThreeText' => 'required',
            'advantageFourHeading' => 'required',
            'advantageFourText' => 'required',
            'advantageFiveHeading' => 'required',
            'advantageFiveText' => 'required',
            'advantageSixHeading' => 'required',
            'advantageSixText' => 'required',
            'advantageSevenHeading' => 'required',
            'advantageSevenText' => 'required',
        ]);
        $adv = Advantage::where('id', 1)->first();
        $adv->advantage_head1 = $this->advantageOneHeading;
        $adv->advantage_text1 = $this->advantageOneText;
        $adv->advantage_head2 = $this->advantageTwoHeading;
        $adv->advantage_text2 = $this->advantageTwoText;
        $adv->advantage_head3 = $this->advantageThreeHeading;
        $adv->advantage_text3 = $this->advantageThreeText;
        $adv->advantage_head4 = $this->advantageFourHeading;
        $adv->advantage_text4 = $this->advantageFourText;
        $adv->advantage_head5 = $this->advantageFiveHeading;
        $adv->advantage_text5 = $this->advantageFiveText;
        $adv->advantage_head6 = $this->advantageSixHeading;
        $adv->advantage_text6 = $this->advantageSixText;
        $adv->advantage_head7 = $this->advantageSevenHeading;
        $adv->advantage_text7 = $this->advantageSevenText;

        // ONE
        if ($this->advantageOneImage != '') {

            $this->validate([
                'advantageOneImage' => 'image'
            ]);

            $extension1 = $this->advantageOneImage->getClientOriginalExtension();
            $img1 = $this->advantageOneImage->storeAs('advantage', 'adv_1.'.$extension1 , 'public');
            $imgUrl1 = 'storage/'.$img1;
            $adv->advantage_img1 = $imgUrl1;

        }
        // TWO
        if ($this->advantageTwoImage != '') {

            $this->validate([
                'advantageTwoImage' => 'image'
            ]);

            $extension2 = $this->advantageTwoImage->getClientOriginalExtension();
            $img2 = $this->advantageTwoImage->storeAs('advantage', 'adv_1.'.$extension2 , 'public');
            $imgUrl2 = 'storage/'.$img2;
            $adv->advantage_img2 = $imgUrl2;

        }
        // THREE
        if ($this->advantageThreeImage != '') {

            $this->validate([
                'advantageThreeImage' => 'image'
            ]);

            $extension3 = $this->advantageThreeImage->getClientOriginalExtension();
            $img3 = $this->advantageThreeImage->storeAs('advantage', 'adv_3.'.$extension3 , 'public');
            $imgUrl3 = 'storage/'.$img3;
            $adv->advantage_img3 = $imgUrl3;

        }
        // FOUR
        if ($this->advantageFourImage != '') {

            $this->validate([
                'advantageFourImage' => 'image'
            ]);

            $extension4 = $this->advantageFourImage->getClientOriginalExtension();
            $img4 = $this->advantageFourImage->storeAs('advantage', 'adv_4.'.$extension4 , 'public');
            $imgUrl4 = 'storage/'.$img4;
            $adv->advantage_img4 = $imgUrl4;

        }
        // FIVE
        if ($this->advantageFiveImage != '') {

            $this->validate([
                'advantageFiveImage' => 'image'
            ]);

            $extension5 = $this->advantageFiveImage->getClientOriginalExtension();
            $img5 = $this->advantageFiveImage->storeAs('advantage', 'adv_5.'.$extension5 , 'public');
            $imgUrl5 = 'storage/'.$img5;
            $adv->advantage_img5 = $imgUrl5;

        }
        // SIX
        if ($this->advantageSixImage != '') {

            $this->validate([
                'advantageSixImage' => 'image'
            ]);

            $extension6 = $this->advantageSixImage->getClientOriginalExtension();
            $img6 = $this->advantageSixImage->storeAs('advantage', 'adv_6.'.$extension6 , 'public');
            $imgUrl6 = 'storage/'.$img6;
            $adv->advantage_img6 = $imgUrl6;

        }
        // SEVEN
        if ($this->advantageSevenImage != '') {

            $this->validate([
                'advantageSevenImage' => 'image'
            ]);

            $extension7 = $this->advantageSevenImage->getClientOriginalExtension();
            $img7 = $this->advantageSevenImage->storeAs('advantage', 'adv_7.'.$extension7 , 'public');
            $imgUrl7 = 'storage/'.$img7;
            $adv->advantage_img7 = $imgUrl7;

        }

        $adv->save();
        session()->flash('successMessage', 'Saved!');
    }

    public function hideUnhideSection($value)
    {
        $this->isHidden = $value;
        $hero = Advantage::where('id', 1)->first();
        $hero->advantage_hidden = $value;
        $hero->save();
    }

    public function render()
    {
        $adv = Advantage::where('id', 1)->first([
            'advantage_head1', 'advantage_text1', 'advantage_img1',
            'advantage_head2', 'advantage_text2', 'advantage_img2',
            'advantage_head3', 'advantage_text3', 'advantage_img3',
            'advantage_head4', 'advantage_text4', 'advantage_img4',
            'advantage_head5', 'advantage_text5', 'advantage_img5',
            'advantage_head6', 'advantage_text6', 'advantage_img6',
            'advantage_head7', 'advantage_text7', 'advantage_img7',
            'advantage_hidden'
        ]);
        $this->advantageOneHeading = $adv->advantage_head1;
        $this->advantageOneText = $adv->advantage_text1;
        $this->advantageOnePreview = $adv->advantage_img1;

        $this->advantageTwoHeading = $adv->advantage_head2;
        $this->advantageTwoText = $adv->advantage_text2;
        $this->advantageTwoPreview = $adv->advantage_img2;

        $this->advantageThreeHeading = $adv->advantage_head3;
        $this->advantageThreeText = $adv->advantage_text3;
        $this->advantageThreePreview = $adv->advantage_img3;

        $this->advantageFourHeading = $adv->advantage_head4;
        $this->advantageFourText = $adv->advantage_text4;
        $this->advantageFourPreview = $adv->advantage_img4;

        $this->advantageFiveHeading = $adv->advantage_head5;
        $this->advantageFiveText = $adv->advantage_text5;
        $this->advantageFivePreview = $adv->advantage_img5;

        $this->advantageSixHeading = $adv->advantage_head6;
        $this->advantageSixText = $adv->advantage_text6;
        $this->advantageSixPreview = $adv->advantage_img6;

        $this->advantageSevenHeading = $adv->advantage_head7;
        $this->advantageSevenText = $adv->advantage_text7;
        $this->advantageSevenPreview = $adv->advantage_img7;

        $this->isHidden = $adv->advantage_hidden;

        return view('livewire.admin.advantage.advantages');
    }
}
