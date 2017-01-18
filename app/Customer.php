<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Customer extends Model
{
    protected $fillable = [
        'name', 'email', 'password',
    ];
    
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function loginCustomer($email) {
        $sql = DB::select("SELECT * FROM customers WHERE email = '" . $email . "'");
        return $sql;
    }
}
