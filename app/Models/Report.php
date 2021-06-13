<?php

namespace App\Models;

use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'slug',
        'sku',
        'toc',
        'description',
        'published',
        'single_price',
        'multiple_price',
        'corporate_price',
        'category_id',
        'user_id',
        'meta_id',
        'status',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];

    public function user() {
        return $this->belongsTo('App\Models\User');
    }
    public function category() {
        return $this->belongsTo('App\Models\Category');
    }
    public function meta() {
        return $this->belongsTo('App\Models\Meta');
    }

    public function isActive() {
        if ($this->status == 1 || $this->status == '1') {
            return true;
        }
        return false;
    }
    
    public function getPublishedAttribute($value) {
        $date = Carbon::createFromFormat('Y-m-d', $value)->format('F, Y');
        return $date;
    }
}
