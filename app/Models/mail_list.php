<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mail_list extends Model
{
    use HasFactory;
    // if this below line of code is not added, laravel will not reconized the table name
    // which your system is fetching details from.
    // "mail_list" is the name of the table
    protected $table = 'mail_list';
}
