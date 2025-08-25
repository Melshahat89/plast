<?php
 namespace App\Application\Model;
 use Illuminate\Database\Eloquent\Model;
 class Products extends Model
{
   public $table = "products";
   public function categories(){
		return $this->belongsTo(Categories::class, "categories_id");
		}
     protected $fillable = [
   'categories_id',
        'name','description','shortdescription','slug','price','image','quantity','futured','published','bestseller'
         ,'type','youtubelink','metadescription','metatitle','seokeywords'
   ];
  }
