<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\AboutPage;

class AboutPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $aboutPage = AboutPage::updateOrCreate(
            ['id' => 1],
            [
                'hero_head' => 'About Us',
                'hero_text' => 'FastCarsMoney Loans has been passionate about creating a superior level respect and understanding for our customers.',
                'hero_btn' => 'Apply for loan',
                'hero_background' => 'img/about/about-hero-bg.jpg',
                'hero_hidden' => 0,

                'who_head' => 'Who We Are',
                'who_text' => 'FastCarMoney is one of the nation’s largest title lending companies. Every day, FastCarMoney helps thousands of people get the cash they need with a title loan, title pawn or now in select states, with a personal loan. We offer rates that are very competitive, while providing a superior level of customer service. Since the first store’s opening in 1998 in Georgia, FastCarMoney has expanded to over 900 locations spanning 14 states. With more than 2,000 team members nationwide, we pride ourselves on providing customers with clarity and confidence. <br>You’ll rest easy knowing that FastCarMoney is here to help.',
                'who_img1' => 'img/about/who-1.jpg',
                'who_img2' => 'img/about/who-2.jpg',
                'who_img3' => 'img/about/who-3.jpg',
                'who_img4' => 'img/about/who-4.jpg',
                'who_hidden' => 0,

                'offer_head' => 'What We Offer',
                'offer_point_head_1' => 'Car Title Loans',
                'offer_point_text_1' => 'Lorem ipsum, dolor sit amet, consectetur adipisicing elit. Eaque soluta ratione dolores sunt porro nulla corrupti laboriosam, tenetur obcaecati, repellat optio, aliquam ducimus perspiciatis quod pariatur. Consequuntur consectetur inventore, sunt. Dicta explicabo odio dolorum asperiores earum nostrum placeat enim autem laudantium. Blanditiis mollitia minus odio dolorem saepe temporibus maiores, optio. Id quisquam, ab blanditiis amet quam excepturi facere architecto tempora.',
                'offer_point_head_2' => 'Car Title Pawns',
                'offer_point_text_2' => 'Lorem ipsum, dolor sit amet, consectetur adipisicing elit. Eaque soluta ratione dolores sunt porro nulla corrupti laboriosam, tenetur obcaecati, repellat optio, aliquam ducimus perspiciatis quod pariatur. Consequuntur consectetur inventore, sunt. Dicta explicabo odio dolorum asperiores earum nostrum placeat enim autem laudantium. Blanditiis mollitia minus odio dolorem saepe temporibus maiores, optio. Id quisquam, ab blanditiis amet quam excepturi facere architecto tempora.',
                'offer_point_head_3' => 'Motorcycle Title Loans',
                'offer_point_text_3' => 'Lorem ipsum, dolor sit amet, consectetur adipisicing elit. Eaque soluta ratione dolores sunt porro nulla corrupti laboriosam, tenetur obcaecati, repellat optio, aliquam ducimus perspiciatis quod pariatur. Consequuntur consectetur inventore, sunt. Dicta explicabo odio dolorum asperiores earum nostrum placeat enim autem laudantium. Blanditiis mollitia minus odio dolorem saepe temporibus maiores, optio. Id quisquam, ab blanditiis amet quam excepturi facere architecto tempora.',
                'offer_point_head_4' => 'Personal Loans',
                'offer_point_text_4' => 'Lorem ipsum, dolor sit amet, consectetur adipisicing elit. Eaque soluta ratione dolores sunt porro nulla corrupti laboriosam, tenetur obcaecati, repellat optio, aliquam ducimus perspiciatis quod pariatur. Consequuntur consectetur inventore, sunt. Dicta explicabo odio dolorum asperiores earum nostrum placeat enim autem laudantium. Blanditiis mollitia minus odio dolorem saepe temporibus maiores, optio. Id quisquam, ab blanditiis amet quam excepturi facere architecto tempora.',
                'offer_hidden' => 0,
            ],
        );
    }
}
