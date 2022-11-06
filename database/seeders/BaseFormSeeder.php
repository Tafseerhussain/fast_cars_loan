<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\BaseForm;

class BaseFormSeeder extends Seeder
{
    public function run()
    {
        $form = BaseForm::updateOrCreate(
            ['id' => 1],
            [
                'least_income' => 1600,
                'credit_scores' => 'Poor 280-559,Fair 560-659,Good 660-724,Very Good 725-759,Excellent 760-850', 
            ]
        );
    }
}
