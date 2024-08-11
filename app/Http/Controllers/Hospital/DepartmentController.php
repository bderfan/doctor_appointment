<?php

namespace App\Http\Controllers\Hospital;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Department;

class DepartmentController extends Controller
{
    public function View_Department(){
        $data['allData'] = Department::all();
    
        return view('hospital.Department.department',$data);
       }
    

       public function Add_Department(){
        return view('hospital.Department.departmentadd');
     }


     public function Store_Department(Request $request){
        $validateData = $request->validate([
           'name' => 'required|unique:departments',
         ]);
    
        $data = new Department();
    
        $data->name = $request->name;
        
        $data->save();
    
    
        $notification = array(
           'message' => 'Department inserted successfully',
           'alert-type' => 'success'
    
        );
        return redirect()->route('department.view')->with($notification);
     }

     public function Edit_Department($id){
        $Department = Department::find($id);
    
        return view('hospital.Department.departmentedit',compact('Department'));
     }


     public function Update_Department(Request $request, $id){
        $data = Department::find($id);
    
        $data->name = $request->name;
        $data->save();
    
    
        $notification = array(
           'message' => 'Department Updated successfully',
           'alert-type' => 'info'
    
        );
        return redirect()->route('department.view')->with($notification);
     }

     public function Delete_Department($id){
      $delete_data = Department::find($id);
  
      $delete_data->delete();
  
      $notification = array(
         'message' => 'Department Deleted successfully',
         'alert-type' => 'warning'
  
      );
      return redirect()->route('department.view')->with($notification);
   } //
}
