<?php

namespace App\Models\FormFillout;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\FormFillout\Form;

class DisposableIncome extends Model
{
    use HasFactory;

    public function form()
    {
        return $this->belongsTo(Form::class);
    }
}
