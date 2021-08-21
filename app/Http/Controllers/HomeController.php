<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Cars;
use App\RentCar;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

     //Redirect to login for all home routes
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();
        //Will not allow customers to access Agency Page
        if ($user->user_type == 'customer') {
            return redirect('/');
        } else {
            $user_id = Auth::id();
            $cars = Cars::where('user_id', $user_id)->get();
            return view('home')->with('cars', $cars);
        }
    }
    
    public function rentReq() {

        $user = Auth::user();
        //Will not allow customers to access Agency Page
        if ($user->user_type == 'customer') {
            return redirect('/');
        } else {
            

        $user_id = Auth::id();

        $rents = RentCar::where('agency', $user_id)->get();
            $data = [];
        foreach($rents as $rent) {
            $car = Cars::find($rent->car_id);
            $customer = User::find($rent->customer);
    
            $res = [
                'car_model' => $car->car_model,
                'day_rent' => $car->day_rent,
                'customer_name' => $customer->name,
                'customer_email' => $customer->email,
                'car_img' => $car->car_img,
                'rent_date' => date("Y-m-d",strtotime($rent->created_at))
                ];
            array_push($data, $res);
        }

        return view('rentreq')->with('data', $data);
        
     }
    }
}
