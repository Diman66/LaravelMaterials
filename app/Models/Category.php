<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\Material;

class Category extends Model
{
    use HasFactory;

	protected $guarded = false;

    public function materials()
	{
		return $this->hasMany(Material::class);
	}

}
