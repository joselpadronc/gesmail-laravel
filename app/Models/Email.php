<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Http\Controllers\email;
use App\Http\Controllers\User;

class Email extends Model
{
    use HasFactory;
    protected $table = 'gm_emails';

    public function email() {
        return $this->hasOne(Email);
    }

    public function user() {
      return $this->hasOne(User);
    }
}
