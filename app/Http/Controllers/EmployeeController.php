<?php

namespace App\Http\Controllers;

use App\Models\EmployeeDetail;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class EmployeeController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = EmployeeDetail::select('*');
            return DataTables::of($data)
                    ->addIndexColumn()  
                    ->addColumn('action', function($row)
                    {  
                     
                           return '<a href="'.route('edit_employee', $row->id).'" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i>Edit </a>
                           <a href="'.route('delete_employee', $row->id).'" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i>Delete </a>';
                   })
                   ->rawColumns(['action'])        
                  
                    ->make(true);
        }
     
        return view('employee_details');
    }

    public function create()
    {
        return view('add_employee');
    }

    public function store(Request $request){

        // $validate=$request->validate([
        //     'name'=>'required',
        //     'email'=>'required',
        //     'password'=>'required',

        // ]);

        

        // if($validate){

       $user=new EmployeeDetail();

       $user->name=$request->name;
       $user->age=$request->age;
       $user->address=$request->address;   
        $user->save();

        return redirect('/')->with('message','admin added successfully');

        // }

        // else{

        //     return $request->input();
        // }
    }


    public function edit($id)
    {
        $data=EmployeeDetail::find($id);
        return view('edit_employee',compact('data'));
    }

    public function update(Request $request ,$admin_id)
    {      
      $user=EmployeeDetail::find($admin_id);

        if($user)
        {
            $user->name=$request->name;
            $user->age=$request->age;
            $user->address=$request->address;
        }

        $user->save();   

        return redirect('/');
        } 
        
    public function delete($admin_id)
    {

    $user=EmployeeDetail::find($admin_id);
    $user->delete();  
 
    return redirect()->back();
    }


  


    }
