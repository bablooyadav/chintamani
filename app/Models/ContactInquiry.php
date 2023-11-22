<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactInquiry extends Model
{
    protected $table = 'cms_contact_enquiry';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'subject',
    ];
}