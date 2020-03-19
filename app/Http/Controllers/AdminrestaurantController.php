<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminrestaurantController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
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
        $restaurants = Restaurants::all();
        return view('defineadmin.index', ['restaurants'=>$reataurants]);
    }

    public function  restaurants()
    {
        return view('defineadmin.restaurants', ['restaurants'=>$reataurants]);
    }
   
    public function edit(restaurants $restaurants)
    {
        return view('defineadmin.restaurantsEdit', compact('restaurants'));
    }

    public function update(Request $request, restaurants $restaurants)
    {
        $this->validate($request, [

            'name' => 'min:2',
            'email' => 'email|unique:user,email',
            'password' => 'confirmed|min:8',
            'address' => 'min:5',
            'zip' => 'min:5',
            'country' => 'min:2',

       ]);

       $restaurants->fill($request->all());
       $restaurants->save();

        return redirect()->route('defineadmin.index');

    }

}
