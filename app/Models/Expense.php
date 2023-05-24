<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    use HasFactory;

    const PAID = 'Y';

    const NOT_PAID = 'N';

    protected $fillable = [
        'type_id',
        'segment_id',
        'description',
        'observation',
        'date',
        'has_installment',
        'due_date',
        'total_value',
        'paid',
    ];
}
