<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Home;

class HomeSeeder extends Seeder
{
    public function run()
    {
        $home = Home::updateOrCreate(
            ['id' => 1],
            [
                // HERO SECTION
                'hero_head' => 'Lorem Ipsum dolor sit amet consectetur.',
                'hero_text' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam obcaecati, repudiandae est perferendis odio suscipit ea inventore laudantium expedita.',
                'hero_btn' => 'Apply for Loan',
                'form_head' => 'Have your cash in hand with a few clicks!',
                'hero_background' => 'img/home/hero-bg.jpg',

                // STEPS SECTION
                'steps_heading' => '3 Easy Steps to Apply for Fast Title Loans Online or Near You!',
                'step_one_heading' => 'Click or Call',
                'step_one_text' => 'The loan process is extremely fast and hassle-free. Apply over the phone or online in 30 minutes or less',
                'step_one_image' => 'icons/call.svg',
                'step_two_heading' => 'Submit Info Text',
                'step_two_text' => 'The loan process is extremely fast and hassle-free. Apply over the phone or online in 30 minutes or less',
                'step_two_image' => 'icons/customer-info.svg',
                'step_three_heading' => 'Get Your Money',
                'step_three_text' => 'The loan process is extremely fast and hassle-free. Apply over the phone or online in 30 minutes or less',
                'step_three_image' => 'icons/get-money.svg',

                // FASTCARS PRODUCTS SECTION
                'product_heading' => 'FastCarsMoney products',
                'product_subheading' => 'We have a variety of products so that our customers can choose the best option.<br>At FastCarsMoney we offer:',
                'product_points' => 'Vehicle Title Loans,Pawns on vehicle title,Motorcycle title loans and pawns,Personal loans',
                'product_text' => 'At FastCarMoney we know that a crisis from the past does not determine the rest of your life. For us it is essential that our service guarantees your satisfaction and ensures the success of your future, which is why we take care of every aspect of our vehicle title loans. Take advantage of our policy of accepting most types of credit scores, allowing us to help you get back on track with your finances.',
                'product_image' => 'img/home/product.jpg',

                // WHY GET FUNDED SECTION
                'funding_heading' => 'Why Get Funded With the Help of FastCarsMoney Title Loans?',
                'funding_subheading' => 'Title Loan Benefits You can get today.',
                'funding_background' => 'img/home/funded-bg.jpg',

                'funding_card_one_image' => 'img/home/fast-cash.svg',
                'funding_card_one_heading' => 'Get Cash Fast',
                'funding_card_one_text' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.',

                'funding_card_two_image' => 'img/home/keep-car.svg',
                'funding_card_two_heading' => 'Keep Your Car',
                'funding_card_two_text' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.',

                'funding_card_three_image' => 'img/home/bad-credit.svg',
                'funding_card_three_heading' => 'Bad Credit OK',
                'funding_card_three_text' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.',

                'funding_card_four_image' => 'img/home/convenient-terms.svg',
                'funding_card_four_heading' => 'Convenient Terms',
                'funding_card_four_text' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.',
            ]
        );
    }
}
