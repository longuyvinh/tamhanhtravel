<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tours extends Model
{
    use SoftDeletes;
    protected $table = 'tours';
	protected $dates = ['deleted_at'];
}
