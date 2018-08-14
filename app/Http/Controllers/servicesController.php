<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\services;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class servicesController extends Controller
{
   public function index()
    {
        return  services::all();
    }
 
    public function show($id)
    {
        return services::find($id);
    }
    
    
    
     public function search($query)
    {
         $services = services::query();
if ($query) {
    return $services->where('city', 'like', '%' . $query . '%')->get();
}
//$service = $books->get();
      //  return services::find($id);
    }

    public function store(Request $request)
    {
        
          $user = Auth::guard('api')->user();

    if ($user || true) {
      return services::create($request->all());
    }else{
        return response()->json(['msg' => "Not loggedin", ''], 400);
    }
        
        
    }

    public function update(Request $request, $id)
    {
        $user = Auth::guard('api')->user();

    if ($user || true) {
        $service = services::findOrFail($id);
        $service->update($request->all());
    }else{
        return response()->json(['msg' => "Not loggedin", ''], 400);
    }
        

        return $service;
    }

    public function delete(Request $request, $id)
    {
           $user = Auth::guard('api')->user();

    if ($user || true) {
        $service = services::findOrFail($id);
        $service->delete();

    }else{
        return response()->json(['msg' => "Not loggedin", ''], 400);
    }
        
        
      
        return 204;
    }
}
