<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{ 

    protected $guarded = [];
    
    public function getRouteKeyName()
    {
        return 'url';
    }

    public function category()
    {

        return $this->belongsTo(Category::class, 'category_id');

    }

    
}
