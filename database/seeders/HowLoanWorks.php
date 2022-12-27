<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\HowTitleLoanWork;
use App\Models\HowPersonalLoanWork;
use App\Models\TitleLoanState;

class HowLoanWorks extends Seeder
{
    public function run()
    {
        $titleLoanPage = HowTitleLoanWork::updateOrCreate(
            ['id' => 1],
            [
                'hero_head' => 'Watch this short video to learn How Title Loans Work',
                'video_url' => 'https://iframe.videodelivery.net/e38cc282b1a22ea34652995035f210b2?preload=true&loop=false&autoplay=false&controls=true',
                'hero_text' => 'Getting car title loans or motorcycle title loans with TitleMax® is easy! The entire process can be completed in as little as 30 minutes.',
                'hero_btn' => 'Apply for loan',
                'hero_background' => 'img/how-loan-works/hero.jpg',
                'hero_hidden' => 0,
                'what_head' => 'What do I Need to be Approved for a Loan or Pawn with FastCarsMoney?',
                'what_text' => 'Depending on the type of loan or pawn you’d like to get and the state from which you plan on getting it, the requirements vary slightly. However, the process of getting a FastCarMoney loan or pawn remains constant. After you fill out some simple paperwork and you and our highly trained customer service representative decide on the amount of your loan, you take your cash and go along with your day! We know that your vehicle is the ticket to your livelihood, that’s why it stays with you. Yes, you get to keep driving your car or motorcycle throughout the entire duration of your FastCarMoney loan or pawn. When you’re a customer of FastCarMoney, we’re working together… as a team. So, bring the required items as listed below to your neighborhood FastCarMoney location and let us help you by putting cash in your pocket in as little as 30 minutes.',
                'what_img' => 'img/how-loan-works/loan-pawn-img.jpg',
                'what_hidden' => 0,
                'state_hidden' => 0,
            ]
        );

        $states = TitleLoanState::updateOrCreate(
            ['id' => 1],
            [
                'state_name' => 'Alabama',
                'state_text' => 'In the state of Alabama, you must be at least 19 years old to be approved for a car title loan or a motorcycle title loan. In order to be approved for an Alabama FastCarsMoney car title loan or motorcycle title loan at any of our numerous Alabama FastCarsMoney locations, your age must be confirmed via a valid government-issued ID, like a driver’s license. The only other items you’ll need are your vehicle and a clear vehicle title that is registered in the same name as is listed on your valid government-issued ID.'
            ],
            ['id' => 2],
            [
                'state_name' => 'Arizona',
                'state_text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil distinctio, praesentium assumenda, soluta nesciunt a reprehenderit. Magnam, doloribus adipisci illo, reprehenderit facere vel, dignissimos quas cum, saepe porro voluptates natus. Tempora fugiat quam consectetur voluptates, quia dolores ea quibusdam magnam incidunt deserunt recusandae officia id quisquam modi autem odit eveniet dolorem minima minus, nesciunt aperiam consequatur totam inventore. Esse, maiores.'
            ],
            ['id' => 3],
            [
                'state_name' => 'Georgia',
                'state_text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil distinctio, praesentium assumenda, soluta nesciunt a reprehenderit. Magnam, doloribus adipisci illo, reprehenderit facere vel, dignissimos quas cum, saepe porro voluptates natus. Tempora fugiat quam consectetur voluptates, quia dolores ea quibusdam magnam incidunt deserunt recusandae officia id quisquam modi autem odit eveniet dolorem minima minus, nesciunt aperiam consequatur totam inventore. Esse, maiores.'
            ],
            ['id' => 4],
            [
                'state_name' => 'Mississippi',
                'state_text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil distinctio, praesentium assumenda, soluta nesciunt a reprehenderit. Magnam, doloribus adipisci illo, reprehenderit facere vel, dignissimos quas cum, saepe porro voluptates natus. Tempora fugiat quam consectetur voluptates, quia dolores ea quibusdam magnam incidunt deserunt recusandae officia id quisquam modi autem odit eveniet dolorem minima minus, nesciunt aperiam consequatur totam inventore. Esse, maiores.',
            ]
        );
    }
}
