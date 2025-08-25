<?php
 namespace App\Application\Requests\Website\Products;
 use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Route;
 class UpdateRequestProducts extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
     /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $id = Route::input('id');
        return [
        	"categories_id" => "required|integer",
            "name" => "",
   "description" => "",
   "shortdescription" => "",
   "slug" => "",
   "price" => "",
   "image" => "",
   "quantity" => "",
   "futured" => "",
   "published" => "",
   "bestseller" => "",
   "type" => "",
   "youtubelink" => "",
   "metadescription" => "",
   "metatitle" => "",
   "seokeywords.*" => "",
            ];
    }
}
