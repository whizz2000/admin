<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CategoryModel extends Model
{
    public $table = 'p_category';
    public $primaryKey = 'cat_id';
    public $timestamps = false;
}
