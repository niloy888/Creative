<?php

namespace App\Http\Controllers\Client;

use App\Client;
use App\Http\Controllers\Controller;
use App\Model\Category\Category;
use App\Model\Client\ContactUs;
use App\Model\Client\Order;
use App\Model\Product\Product;
use App\Model\Brand\Brand;
use App\Model\ProductImage\ProductImage;
use App\ProductReview;
use Illuminate\Http\Request;
use Cart;
use Session;
use DB;
use Image;

class ClientController extends Controller
{
    public function index()
    {
         $categories = Category::where('root_id',0)->get();
         $products = Product::all();


        return view('client.home.home',[
            'categories'=>$categories,
            'products'=>$products,

        ]);


    }

    public function category($id)
    {

        $brands = Brand::all();
        $categories = Category::all();
        $products = Product::with('category')->where('category_id', $id)->get();
        return view('client.category.category')->with([
            'brands' => $brands,
            'categories' => $categories,
            'products' => $products,
        ]);
    }


    public function subCategory($id)
    {

        $brands = Brand::all();
        $categories = Category::all();
        $products = Product::with('category')->where('subcategory_id', $id)->get();
        return view('client.category.sub-category')->with([
            'brands' => $brands,
            'categories' => $categories,
            'products' => $products,
        ]);
    }


    public function productDetails($id, $category_id)
    {

        $products = Product::with('category')
            ->where('category_id', $category_id)
            ->where('id', '!=', $id)
            ->take(4)->get();

        $product = Product::find($id);

        $productImages = ProductImage::where('product_id', $id)->get();
        //return $productImages;

        $bestProducts = Product::take(3)->orderBy('popularity', 'desc')->get();

        $reviews = DB::table('product_reviews')
            ->join('products', 'product_reviews.product_id', '=', 'products.id')
            ->join('clients', 'clients.id', '=', 'product_reviews.client_id')
            ->select('product_reviews.*', 'clients.full_name')
            ->where('product_reviews.product_id', $product->id)
            ->get();

        return view('client.product.details.product')->with([
            'product' => $product,
            'products' => $products,
            'reviews' => $reviews,
            'bestProducts' => $bestProducts,
            'productImages' => $productImages,
        ]);
    }


    public function productReview(Request $request)
    {


        $this->validate($request, [
            'description' => 'required',
            'title' => 'required',
            'rating' => 'required'
        ]);


        //$product = product::find($request->product_id);
        $product = new ProductReview();
        $product->product_id = $request->product_id;
        $product->client_id = $request->client_id;
        $product->title = $request->title;
        $product->description = $request->description;
        $product->rating = $request->rating;
        $product->save();
        return back()->with('message', 'Review submitted successfully');

    }

    public function brandProducts($id)
    {

        $brands = Brand::all();
        $categories = Category::all();
        $products = Product::with('brand')->where('brand_id', $id)->get();
        return view('client.brand-products.products')->with([
            'brands' => $brands,
            'categories' => $categories,
            'products' => $products,
        ]);
    }

}
