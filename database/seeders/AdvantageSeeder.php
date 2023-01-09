<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Advantage;

class AdvantageSeeder extends Seeder
{
    public function run()
    {
        $advantage = Advantage::updateOrCreate(
            ['id' => 1],
            [
                'hero_head' => 'Advantages',
                'hero_text' => 'We know you have options when looking for a car title loan. At FastCarsMoney Title Loans we want your business! We differentiate ourselves through our service and options.',
                'hero_img' => 'img/advantage/advantage.jpg',
                'hero_btn' => 'Apply for loan',
                'hero_hidden' => 0,

                'advantage_img1' => 'img/advantage/1.svg',
                'advantage_head1' => 'Any Car—Up to $750',
                'advantage_text1' => 'At FastCarsMoney Title Loans, if you have a car, we have a car title loan for you! We can provide loans on almost ANY car, regardless of the year, mileage, or condition. If you have a paid off car and you can legally drive it to our store, we can loan you up to $750 as a minimum and up to $25,000 as a maximum. As always, the total amount and conditions we can loan varies by state so visit or call your local store for an estimate for your car.',

                'advantage_img2' => 'img/advantage/2.svg',
                'advantage_head2' => 'Many Ways to Pay',
                'advantage_text2' => 'Some lenders only accept cash at the office. We accept cash, money orders, cashier’s checks and in many states, debit cards! Paying with a debit card saves you a trip into the store to make your payment. We can take your information over the phone or set up automatic monthly payments. Some stores may require a processing fee for debit card transactions.',

                'advantage_img3' => 'img/advantage/3.svg',
                'advantage_head3' => 'No Insurance Required',
                'advantage_text3' => 'While some lenders require insurance or require that you purchase their road side assistance protection in order to get a car title loan, we don’t! No insurance required—Period. Our goal is to get you the funds you need, not sell you insurance.',

                'advantage_img4' => 'img/advantage/4.svg',
                'advantage_head4' => 'We Will Work with You',
                'advantage_text4' => 'Life happens. Things happen. We understand that. If you find yourself short one month, call us, we will do everything we can to work with you and your circumstances.',

                'advantage_img5' => 'img/advantage/5.svg',
                'advantage_head5' => 'You Keep Your Car',
                'advantage_text5' => 'When you get a title loan with American Title Loans your car remains your car; you keep it, you drive it! We hold onto the car title while the loan is outstanding. Once the car title loan is paid back, the car title is yours.',

                'advantage_img6' => 'img/advantage/6.svg',
                'advantage_head6' => '$100 for Referring a Friend',
                'advantage_text6' => 'We appreciate your business and show our appreciation when you spread the word. Regardless if you are a customer or not, send in a friend (who hasn’t had a loan with us before), and if your friend gets a $500 or greater car title loan from us, we’ll give you $100 cash as our way to say thanks!',

                'advantage_img7' => 'img/advantage/7.svg',
                'advantage_head7' => 'Foreign ID’s OK',
                'advantage_text7' => 'We require a valid government issued ID, we just don’t care what government issues the ID. Your current Foreign ID is fine with us.',
                'advantage_hidden' => 0,

                'get_head' => 'Less than 30 minutes to get your loan.',
                'get_text' => 'That’s right! With American Title Loans the entire process generally takes less than 30 minutes. So not only can you continue to use your car, you will leave our store with the money you need.',
                'get_btn1' => 'Apply Now',
                'get_btn2' => 'How it works',
                'get_img' => 'img/advantage/get-your-loan.jpg',
                'get_hidden' => 0,
            ]
        );
    }
}
