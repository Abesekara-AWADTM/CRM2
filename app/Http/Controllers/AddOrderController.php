<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customer;
use App\Models\order;
use DB;


class AddOrderController extends Controller
{
   


    public function AddOrderDetails(Request $req)
    {
        $customer= new Customer;
        $customer->Name=$req->Name;
        $customer->MobileNo=$req->MobileNo;
        $customer->Address=$req->Address;
        $customer->email=$req->email;
        $customer->NIC=$req->NIC;
         if(count($req->productname)>0){
                foreach($req->productname as $order=>$v)
                $data=array(
                          'Items'=>$req->productname[$order],
                          'Qty'=>$req->Quntity[$order]);
                         // DB::table('orders')->insert($data);
            
         }
         return back()-> with('success','data insert');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function GetOrderDetails()
    {
        return customer::all();
    }
    public function DeleteOrderDetails($CustomerID )
    {
        $customer=customer::findOrFail($CustomerID );
       
        if ($customer) {
            $customer->delete();
            
        } else {

            return response()->json(null);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function SearchOrderDetails($Name)
    {
        return customer::where("Name","%".$Name."%")->get();

    }

    public function SearchOrder($CustomerID){
      $customer=customer::findOrFail($CustomerID);
       return $customer;

    }

    public function edit($id)
    {
        //
    }
    public function UpdateOrderDetails(Request $req)
    {
        $customer=customer::find($req->CustomerID);
        $customer->Name=$req->Name;
        $customer->MobileNo=$req->MobileNo;
        $customer->Address=$req->Address;
        $customer->email=$req->email;
        $customer->NIC=$req->NIC;
        $result=$customer->save();
        if ($result) {
            return ["Result"=>"Data has been saved"];
        } else {
            return ["Result"=>"operation failed"];
        }
    }

    
}
