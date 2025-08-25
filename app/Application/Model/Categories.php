<?php
 namespace App\Application\Model;
 use Illuminate\Database\Eloquent\Model;
 class Categories extends Model
{
   public $table = "categories";
  public function products(){
		return $this->hasMany(Products::class, "categories_id");
		}
     protected $fillable = [
        'name','published'
   ];
  }
