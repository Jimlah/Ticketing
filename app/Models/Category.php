<?php

namespace App\Models;

use App\Models\SubCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected $with = ['sub_categories'];

    protected $fillable = ['name', 'color'];

    public function sub_categories()
    {
        return $this->hasMany(SubCategory::class);
    }
}
