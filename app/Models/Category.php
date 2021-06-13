<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'meta_id',
    ];

    public function reports() {
        return $this->hasMany('App\Models\Report');
    }

    public function meta() {
        return $this->belongsTo('App\Models\Meta');
    }
}
