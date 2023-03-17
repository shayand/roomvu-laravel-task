<?php

namespace App\Models;

use Carbon\Traits\Timestamp;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 *
 * @property User User()
 * @property User user_id
 * @property float amount
 * @property integer id
 */
class UserTransaction extends Model
{

    protected $table = 'user_transaction';

    use HasFactory,SoftDeletes,Timestamp;

    /**
     * @var string[]
     */
    protected $fillable = [
        'amount'
    ];

    /**
     * @return void
     */
    public function User(): void
    {
        $this->belongsTo('users');
    }
}
