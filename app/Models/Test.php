<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    use HasFactory;

    protected $fillable = ['name','mail'];

    public static $rules = array(
        'name' => 'required',
        'mail' => 'required | email',
    );
}
