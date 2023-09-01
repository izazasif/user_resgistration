<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile_info extends Model
{
    use HasFactory;

    protected $table = 'profile_infos';
    protected $fillable = [
     'full_name','user_id','goals','height','weight',
     'dob','address','phone_number','email','parents','image',
     'h_school','gpa','act','major','achievements','club','position',
     'c_achievements','footage','h_contact','additional_information',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
