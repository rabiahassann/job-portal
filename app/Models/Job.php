<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    
    protected $fillable = ['posteddate', 'enddate', 'noOfApplicants', 'category_id', 'title', 'description', 'location'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    
}
