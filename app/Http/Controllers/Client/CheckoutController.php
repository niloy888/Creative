<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Model\Category\Category;
use App\Model\Client\Client;
use App\Model\Product\Product;
use Illuminate\Http\Request;
use Session;

class CheckoutController extends Controller
{
    public function login()
    {

        $categories = Category::where('root_id',0)->get();
        $subCategories = Category::where('root_id','!=',0)->get();
        $popularProducts = Product::take(5)->orderBy('id','desc')->get();
        $latestProducts = Product::take(5)->orderBy('popularity','desc')->get();
        return view('client.login.login',[
            'categories'=>$categories,
            'subCategories'=>$subCategories,
            'popularProducts'=>$popularProducts,
            'latestProducts'=>$latestProducts,
        ]);

    }


    public function loginProcess(Request $request)
    {
        $client = Client::where('email', $request->email)->first();
        if ($client) {
            if (password_verify($request->password, $client->password)) {

                if($client->status == 1){
                    Session::put('client_id', $client->id);
                    Session::put('client_name', $client->full_name);
                    Session::put('client_first_name', $client->first_name);
                    Session::put('client_last_name', $client->last_name);
                    Session::put('client_email', $client->email);
                    Session::put('client_contact_no', $client->contact_no);
                    Session::put('client_nid', $client->nid);
                    Session::put('client_present_address', $client->present_address);
                    Session::put('client_permanent_address', $client->permanent_address);
                    return redirect('/');
                }
                else{
                    return redirect('client-login')->with('message', 'please verify your account first!!');
                }

            } else {
                return redirect('client-login')->with('message', 'Wrong Password!!');
            }
        } else {
            return redirect('client-login')->with('message', 'Invalid email!!');
        }

    }


    public function register()
    {
        $categories = Category::where('root_id',0)->get();
        $subCategories = Category::where('root_id','!=',0)->get();
        $popularProducts = Product::take(5)->orderBy('id','desc')->get();
        $latestProducts = Product::take(5)->orderBy('popularity','desc')->get();

        return view('client.register.register',[
            'categories'=>$categories,
            'subCategories'=>$subCategories,
            'popularProducts'=>$popularProducts,
            'latestProducts'=>$latestProducts,
        ]);

    }


    public function registerProcess(Request $request)
    {

        $this->validate($request, [
            'full_name' => 'required',
            'email' => 'required|unique:clients',
            'contact_no' => 'required',
            'password' => 'required'
        ]);
        $client = new Client();
        $client->full_name         = $request->full_name;
        $client->email             = $request->email;
        $client->contact_no        = $request->contact_no;
        $client->password          = bcrypt($request->password);

        $client->save();

        Session::put('client_id', $client->id);
        Session::put('client_name', $client->full_name);
        Session::put('client_email', $client->email);
        Session::put('client_contact_no', $client->contact_no);

        return redirect('/');
    }

    public function logout()
    {

        Session::forget('client_id');

        return redirect('/');

    }

}
