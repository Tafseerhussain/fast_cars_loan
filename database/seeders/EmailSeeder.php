<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class EmailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $em = DB::table('emails')->where('id', 1)->first();
        if ($em === null) {
           DB::table('emails')->insert([
                'approval_message' => 'Congratulations! Your loan have been approved by Fast Cars Fast Money.',
                'approval_message_line_two' => 'To take advantage of this loan offer, check the loan contract below for more details.',
                'link_to_contract' => 'temp',
                'denial_message' => 'After reviewing your loan application, I regret to inform you that we are unable to loan you the requested amount of:',
                'denial_reason' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'last_message_approval' => 'Thank you for thinking of Fast Cars Fast Money for your lending needs.',
                'last_message_rejected' => 'Thank you for thinking of Fast Cars Fast Money for your lending needs. Please don\'t hesitate to reapply after meeting the conditions mentioned above.',
           ]);
        } else {
            DB::table('emails')->where('id', 1)->update([
                'approval_message' => 'Congratulations! Your loan have been approved by Fast Cars Fast Money.',
                'approval_message_line_two' => 'To take advantage of this loan offer, check the loan contract below for more details.',
                'link_to_contract' => 'temp',
                'denial_message' => 'After reviewing your loan application, I regret to inform you that we are unable to loan you the requested amount of:',
                'denial_reason' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'last_message_approval' => 'Thank you for thinking of Fast Cars Fast Money for your lending needs.',
                'last_message_rejected' => 'Thank you for thinking of Fast Cars Fast Money for your lending needs. Please don\'t hesitate to reapply after meeting the conditions mentioned above.',
            ]);
        }
    }
}
