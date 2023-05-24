<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Installment extends Model
{
    use HasFactory;

    const PAID = 'Y';

    const NOT_PAID = 'N';

    protected $fillable = [
        'expense_id',
        'number',
        'due_date',
        'value',
        'paid',
    ];
}
