<?php

namespace App\Http\Controllers\Hospital;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Department;

class DoctorController extends Controller
{
   public function View_Doctor(){
      $data['allData'] =  Doctor::select('department_id')->groupby('department_id')->orderby('id','desc')->get();
   
  
      return view('hospital.doctor.doctor',$data);
     }
  

     public function Add_Doctor(){
      $department['data'] = Department::all();

      return view('hospital.doctor.doctoradd',$department);
   }


   public function Store_Doctor(Request $request){
      $validateData = $request->validate([
         'name' => 'required|unique:doctors',
       ]);
  
      $data = new Doctor();
  
      $data->department_id = $request->department;
      $data->name = $request->name;
      $data->phone = $request->phone;
      $data->fee = $request->fee;
      $data->save();
  
  
      $notification = array(
         'message' => 'Doctor inserted successfully',
         'alert-type' => 'success'
  
      );
      return redirect()->route('doctor.view')->with($notification);
   }

   public function Edit_Doctor($id){
      $Doctor = Doctor::find($id);
  
      return view('hospital.doctor.doctoredit',compact('Doctor'));
   }


   public function Update_Doctor(Request $request, $id){
      $data = Doctor::find($id);
  
      $data->name = $request->name;
      $data->phone = $request->phone;
      $data->fee = $request->fee;
      $data->save();
  
  
      $notification = array(
         'message' => 'Doctor Updated successfully',
         'alert-type' => 'info'
  
      );
      return redirect()->route('doctor.view')->with($notification);
   }

   public function Delete_Doctor($id){
      $delete_data = Doctor::find($id);
  
      $delete_data->delete();
  
      $notification = array(
         'message' => 'Doctor Deleted successfully',
         'alert-type' => 'warning'
  
      );
      return redirect()->route('doctor.view')->with($notification);
   } 

 public function Details_Doctor($department_id){
   $data['detailsdata'] = Doctor::where('department_id', $department_id)->get();

   return view('hospital.doctor.doctordetails',$data);
}
}
