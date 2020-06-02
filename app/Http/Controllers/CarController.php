<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;
use App\ModelCar;
use App\Brand;
use App\Body;
use App\CarImage;
use App\Condition;
use App\Offer;
use App\Transmision;
use DB;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if(request()->has('brand'))
        {
            $cars = Car::with('carBrand')->whereHas('carBrand', function($query){
                $query->where('brand', request()->brand);
            })->get();
            $brands = Brand::all();
        }

        if(request()->has('condId'))
        {
            $cars = Car::with('carCondition')->whereHas('carCondition', function($query){
                $query->where('condition_id', request()->condId);
            })->get();
            $conditions = Condition::all();
        }

        if(request()->has('transmision'))
        {
            $cars = Car::with('transmision')->whereHas('transmision', function($query){
                $query->where('transmision_type', request()->transmision);
            })->get();
            $transmisions = Transmision::all();


        } else {
            $cars = Car::inRandomOrder()->take(9)->get();
            $brands = Brand::all();
            $conditions = Condition::all();
            $transmisions = Transmision::all();
        }
      

        return view('theme.cars.index')->with([
            'cars' =>         $cars,
            'brands' =>       $brands,
            'conditions' =>   $conditions,
            'transmisions' => $transmisions
           
         
        ]);
        
 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function showCar($id)
    {
        $cars = Car::findOrFail($id);
        return view('theme.cars.show', compact('cars'));
    }


}
