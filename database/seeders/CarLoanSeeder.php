<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Loan\CarLoan;

class CarLoanSeeder extends Seeder
{
    public function run()
    {
        $carLoan = CarLoan::updateOrCreate(
            ['id' => 1],
            [
                'hero_head' => 'CAR TITLE LOANS BY FastCarsMoney',
                'hero_text' => 'A title loan is a fast and easy way to get cash using your car title instead of your credit score. When it comes to getting good information for car title loans, online resources are important. The size of your title loan is determined by the amount of cash you need, your vehicle’s value, and your ability to repay. Our focus is on getting you as much cash possible, while keeping your payments manageable. When it comes to our auto title loans, online applications make the process faster and easier. We let you start the process online, so we can get you the cash you need as quickly as possible.',
                'hero_img' => 'img/title-loan/title-loan-img.jpg',
                'hero_box_text' => 'We’re committed to providing the best customer experience possible. If you have any questions we want to hear from you!',
                'hero_box_img' => 'img/title-loan/call.svg',
                'hero_box_head' => 'Give us a call',
                'hero_box_desc' => '844-TITLE-LOAN (854-878-5256)',
                'hero_hidden' => 0,

                'how_head' => 'How Do I Get a Car Title Loan With FastCarsMoney?',
                'how_img1' => 'img/title-loan/easy-process.svg',
                'how_point1' => 'Easy Process',
                'how_img2' => 'img/title-loan/no-credit.svg',
                'how_point2' => 'No credit check',
                'how_img3' => 'img/title-loan/no-insurance.svg',
                'how_point3' => 'No insurance required',
                'how_text' => 'Getting a car title loan could not be easier. If your car is paid off and you have the car title and an ID, you are on your way. Just stop in and get the process started. No credit check! No insurance needed! In most cases, out of state plates or temporary tags are not a problem. We also offer loans on Motorcycles, Boats and RV*',
                'how_btn' => 'Apply for loan',
                'how_hidden' => 0,

                'benefit_head' => 'Title Loan Benefits with FastCarsMoney',
                'benefit_text' => 'Getting a car title loan with FastCarsMoney has plenty of benefits:',
                'benefit_points' => 'Get quick approval for a title loan online, Most credit types accepted, Quick and easy approval process, Friendly customer service, You get to keep driving your car, Convenient payments options, Cash in as little as 30 minutes, All makes and models accepted, No bank account required for a title loan',
                'benefit_hidden' => 0,
            ]
        );
    }
}
