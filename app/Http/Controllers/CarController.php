<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    //
    public function index(){

        //$cars=Car::all();
        $cars=Car::paginate(3); //by default 15
       // dd($trainings);  //cara debug dump & die
       return view('cars.index', compact('cars'));
       //recources/views/cars/index.blade.php

    }

    public function create(){
        return view ('cars.create');
    }

    public function store(Request $request){
        //dd($request->all());
        //store all data from form to car table
        $car=new Car();
        $car->name=$request->name;
        $car->register_no=$request->register_no;
        $car->color=$request->color;
        $car->save();

        //return redirect()->back();
        return redirect()
        ->route('car:list')
        ->with (
            ['alert-type' => 'alert-primary',
            'alert'=>'Your car info saved']);
        //return view('cars.store');
         //recources/views/cars/create.blade.php
    }
    public function show(Car $car){
      
        return view('cars.show', compact('car'));

    }

    public function edit(Car $car){
       
         return view('cars.edit',compact('car'));
     }

     public function update(Car $car, Request $request){
       
        $car->update($request->only('name','register_no','color'));
      
        //return redirect()->route('car:list');
        return redirect()
        ->route('car:list')
        ->with (
            ['alert-type' => 'alert-success',
            'alert'=>'Your car info updated']);
        
    }

    public function delete(Car $car){
        $car->delete();
        //return redirect()->route('car:list');
        return redirect()
        ->route('car:list')
        ->with (
        ['alert-type' => 'alert-danger',
        'alert'=>'Your car info deleted']);
    }
}
