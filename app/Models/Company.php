<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Http\Controllers\Email;

class Company extends Model
{
    use HasFactory;
    protected $table = 'gm_companies';

    protected $fillable = ['name'];

    public function emails() {
        return $this->hasMany(Email);
    }
}
