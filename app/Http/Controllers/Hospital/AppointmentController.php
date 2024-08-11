<?php

namespace App\Http\Controllers\Hospital;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Appointments;
use App\Models\Doctor;
use App\Models\Department;
use Cookie;
use Tracker;
use Session;

class AppointmentController extends Controller
{
    public function View_Appointment(){
       $data['allData'] =  Appointments::all();

        $data['data'] = Doctor::all();
        $data['deptdata'] = Department::all();

        #dd($dept);
    
        return view('hospital.Appointment.appointment',$data);
       }




       public function Store_Appointment(Request $request){
       


      $apptdata = new Appointments();
      
      $apptdata->doctor_id = $request->doctor;
      $apptdata->appointment_date = $request->date;
      $apptdata->total_fee = $request->fee;

      

      if($apptdata->doctor_id!=NULL){
         $apptdata->save();

         $notification = array(
            'message' => 'Appointment inserted successfully',
            'alert-type' => 'success'
     
         );

      

         return redirect()->route('appointment.view')->with($notification);
      }else{
         return redirect()->route('appointment.view');
        #dd($apptdata); 
      }
    
      
  
  
      
     }


     public function Delete_Appointment($id){
      $delete_data = Appointments::find($id);
  
      $delete_data->delete();
  
      $notification = array(
         'message' => 'Appointment Deleted successfully',
         'alert-type' => 'warning'
  
      );
      return redirect()->route('appointment.view')->with($notification);
   } 

   public function Keep_Appointment(Request $request){
      $validateData = $request->validate([
         'name' => 'required|unique:doctors',
       ]);
  
     

      $apptdata = new Appointments();
      
      $apptdata->doctor_id = $request->hidden_dr_id;
      $apptdata->patient_name = $request->name;
      $apptdata->total_fee = $request->fee;
      $apptdata->patient_phone = $request->phone;
      $apptdata->paid_amount = $request->amount;
      $apptdata->save();
  
      if($apptdata->paid_amount == $apptdata->total_fee){
         $notification = array(
            'message' => 'Appointment inserted successfully',
            'alert-type' => 'success'
     
         );
         return redirect()->route('appointment.view')->with($notification);
      }else{
         
      }
     
   }
}
