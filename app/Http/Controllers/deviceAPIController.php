<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\device;

class deviceAPIController extends Controller
{
    //
    // function index(){
    //      return device::all();
    // }

    function list($id=null){
        return $id?device::find($id):device::all();
   }
   function add(Request $req)
   {
       $device= new device;
       $device->deviceName=$req->deviceName;
       $result = $device->save();
       if ($result) {
        return ['result'=>'Data has been posted'];
       } else {
        return ['result'=>'Data has  been failed'];
       }
       
       
    }
    function update(Request $req)
    {
        $device= device::find($req->id);
        $device->deviceName=$req->deviceName;
        $result = $device->save();
        if ($result) {
         return ['result'=>'Data has been updated'];
        } else {
         return ['result'=>'Data has  been failed'];
        }
        
        
     }
}
