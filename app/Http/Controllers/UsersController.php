<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Repositary\testinterface;
use App\Http\Controllers\Exception;
use Exception as GlobalException;

class UsersController extends Controller
{

protected $repositaryinterface;

public function __construct(testinterface $repositaryinterface){

$this->repositaryinterface=$repositaryinterface;

}





    public function store(Request $request){
        
        $data=$request->validate(
            
            [
                'name'=>'required',
                'email'=>'required',
                'password'=>'required',
                

            ]
            ); 
          $createddata= $this->repositaryinterface->store($data);

           return response()->json(['data'=>$createddata]);
        
           
        
           
    
}


    public function index(){
         $alltestdata=$this->repositaryinterface->index();

        return response()->json(['data'=>$alltestdata]);
    
    }
}
