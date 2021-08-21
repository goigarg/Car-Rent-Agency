<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Cars;
use App\RentCar;

class CarController extends Controller
{

    //Index Page for Renting Cars
    public function index() {

        $cars = Cars::orderBy('created_at', 'DESC')->take(6)->get();
        $user = Auth::user();
        if(Auth::check() && $user->user_type == 'agency') {
            return redirect('/home');
        }

        return view('home/index')->with('cars', $cars);

    }


    //Search Cars
    public function search(Request $request) {

        $name = $request->input('car_name');
        $search = Cars::where('car_model','like', '%'.$name. '%')->get();
        $data = ['name' => $name, 'search' => $search];
        return view('home.search', $data);
    }


    //Show Car
    public function show ($id) {
        
        //Find Car by id
        $car = Cars::findOrFail($id);
        $allRentCars = [];
        if($user = Auth::user()) {
            //check if user has already rented the car
            $rents = RentCar::where('customer', $user->id)->get(); 
       
            foreach($rents as $rent) {
                array_push($allRentCars, $rent->car_id);
            }
        }

        //Already Requested
        if(in_array($id, $allRentCars)) {
            return view('home.car')->with('car', $car)->with('user', $user)->with('requested', true);

        } else if (Auth::check() && $user->user_type == 'agency' && $car->user_id != Auth::id()){
            return redirect('/home')->with('msg', 'Only Customers can Rent Cars');
        } else {            
        return view('home.car')->with('car', $car)->with('user', $user)->with('requested', false);
        }

    }

    //Rent Car
    public function rent (Request $request) {
        $rent = new RentCar;
        $rent->customer = $request->user_id;
        $rent->car_id = $request->car_id;
        $cars = Cars::find($request->car_id);
        $agency = $cars->user_id;
        $rent->agency = $agency;
        if($rent->save()) {
            return redirect('/')->with('msg', 'Car Rent Request Sent');
        }
    }

    //Add Cars Page
    public function showCar() {
        $user = Auth::user();
        //Will not allow customers to access Agency Page
        if ($user->user_type == 'customer') {
            return redirect('/');
        } else {
            return view('home.addcar');
        }
    }

    //Edit Car Item
    public function editCar($id) {
        try {
            $car = Cars::findOrFail($id);
            if ($car->user_id != Auth::id()){
                throw new \Exception ('You are not allowed to edit this Item');
            }
        return view('home.editcar')->with('car', $car);
        } catch(\Exception $e){
        return $e->getMessage();
        }
    }

    public function edit(Request $request) {
            $car = Cars::findOrFail($request->id);
            $car->car_model = $request->car_model;
            $car->car_number = $request->car_number;
            $car->capacity = $request->capacity;
            $car->day_rent = $request->day_rent;
            if($car->save()) {
                return redirect('/home')->with('msg', 'Car has been edited successfully');
            } else {
                return redirect('car/add')->with('msg', 'Oops An Error has occurred');
            }
    }

    //Add cars 
    public function add(Request $request) {

        //Image validation
        $this->validate($request, [
            'car_img' => 'image|nullable|max:1999'
        ]);

        //Handle Upload
        if ($request->hasFile('car_img')) {
            //Get filename with ext
            $fileNamewithExt = $request->file('car_img')->getClientOriginalName();
            // Get File Name without ext
            $fileName = pathinfo($fileNamewithExt, PATHINFO_FILENAME);
            //Get file ext
            $ext = $request->file('car_img')->getClientOriginalExtension();
            //Filename to Store 
            $fileNameToStore = $fileName . '_' . time() . '.' . $ext;
            //Upload Image
            $path = $request->file('car_img')->storeAs('public/car_img', $fileNameToStore);

        } else {
            $fileNameToStore = 'noimage.jpg';
        }
        //Create Car Ad
        $car = new Cars;
        $car->car_model = $request->car_model;
        $car->car_number = $request->car_number;
        $car->capacity = $request->capacity;
        $car->day_rent = $request->day_rent;
        $car->car_img = $fileNameToStore;
        $car->user_id = Auth::id();
        if($car->save()) {
            return redirect('/home')->with('msg', 'Car has been successfully added');
        } else {
            return redirect('car/add')->with('msg', 'Oops An Error has occurred');
        }

    }
}
