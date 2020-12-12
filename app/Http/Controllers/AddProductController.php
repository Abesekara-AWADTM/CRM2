<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class AddProductController extends Controller
{
    public function AddProduct(Request $request)
    {
        $this->validate($request, [
             'productName'=>'min:2|max:25',
              'Brand'=>'min:2|max:25',
              'description'=>'required|min:5|max:100'
         ]);


        $product=new product;
        $product->ProductName=$request->ProductName;
        $product->Price=$request->Price;
        $product->Brand=$request->Brand;
        $product->Qty=$request->Quantity;
        $product->Description=$request->description;
        $result=$product->save();
        /*if ($result) {
            return ["Result"=>"Data has been saved"];
        } else {
            return ["Result"=>"operation failed"];
        }*/
        return redirect('ViewProducts');
    }


    public function ViewProduct()
    {
        $data= product::paginate(5);
        return  view('ViewProducts', ['products'=>$data]);
    }
      
    public function EditProducts($ProductID)
    {
        $data=product::find($ProductID);
        return view('EditProducts', ['data'=>$data]);
    }


    public function ShowUpdatesProducts(Request $req)
    {
        $data=product::find($req->ProductID);

        $data->ProductName=$req->ProductName;
        $data->Brand=$req->Brand;
        $data->Price=$req->Price;
        $data->Qty=$req->Quantity;
        $data->Description=$req->description;
        $data->save();
        return redirect('ViewProducts');
    }


    public function DeleteProducts($ProductID)
    {
        $data=product::find($ProductID);
        $data->delete();
        return redirect('ViewProducts');
    }
  
    public function SearchProducts(Request $request)
    {
        
    $request->validate([
          'query'=>'required']);

        $query=$request->input('query') ;
        //dd($query);
        $product=product::where('ProductName', 'like', "%$query%")->orWhere('Description', 'like', "%$query%")->paginate(5);
        //dd($product);
        if (count($product)>0) {
            return view('/search', ['products'=>$product]);
        } else {
            return redirect()->back()->with('error', 'Invalid Search , Enter Available Product ...');
        }

        
    }
}