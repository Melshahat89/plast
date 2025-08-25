<?php

namespace App\Application\Controllers\Website;



use App\Application\Controllers\AbstractController;
use App\Application\Controllers\Controller;
use App\Application\Model\Categories;
use App\Application\Model\News;
use App\Application\Model\Page;
use App\Application\Model\Products;
use App\Application\Model\Slider;
use App\Application\Model\User;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->data['title'] = 'Home Page';
        $this->data['sliders'] = Slider::limit(5)->get();
        $this->data['products'] = Products::where('published',true)->orderBy('id','desc')->limit(12)->get();
        $this->data['news'] = News::where('published',true)->orderBy('id','desc')->limit(3)->get();


        return view('website.home', $this->data);
    }

    public function product($slug)
    {
        $this->data['title'] = 'product Page';
        $this->data['product'] = Products::where('slug', $slug)->firstOrfail();
        $this->data['relatedProducts'] = Products::where('categories_id', $this->data['product']->categories_id)
            ->where('id', '!=', $this->data['product']->id)
            ->where('published', true)
            ->take(4)
            ->get();
        $this->data['topSellingProducts'] = Products::where('published', true)
            ->where('bestseller', true)
            ->take(4)
            ->get();



        return view('website.product', $this->data);
    }
    public function category($id)
    {
        $this->data['title'] = 'product Page';
        $this->data['category'] = Categories::findOrfail($id);
        $this->data['products'] = Products::where('categories_id',$id)->where('published',true)->paginate(12);

        return view('website.products', $this->data);
    }
    public function news()
    {
        $this->data['title'] = 'news Page';
        $this->data['news'] = News::where('published',true)->paginate(12);

        return view('website.news', $this->data);
    }
    public function new($id)
    {
        $this->data['title'] = 'news Page';
        $this->data['news'] = News::findOrfail($id);

        return view('website.new', $this->data);
    }


    public function welcome(){
        return view(layoutHomePage('website'));
    }

    public function deleteImage($model, $id, Request $request)
    {
        if (auth()->check()) {
            if (file_exists(public_path(env('UPLOAD_PATH') . DS . $request->name))) {
                $model = 'App\\Application\\Model\\' . ucfirst($model);
                $filed = $request->has('filed_name') ? $request->get('filed_name') : 'image';
                if (class_exists($model)) {
                    $item = $model::findorFail($id);
                    if (json_decode($item->{$filed})) {
                        $array = [];
                        foreach (json_decode($item->{$filed}) as $file) {
                            if ($file != $request->name) {
                                $array[] = $file;
                            }
                        }
                        $item->{$filed} = json_encode($array);
                        $item->save();
                        alert()->success("Done Delete", "Done");
                        return redirect()->back();
                    }
                    alert()->error("Filed not found", "Error");
                    return redirect()->back();
                }
                alert()->error("Class not exists", "Error");
                return redirect()->back();
            }
            alert()->error("File not exists", "Error");
            return redirect()->back();
        }
        abort('404');
    }

}
