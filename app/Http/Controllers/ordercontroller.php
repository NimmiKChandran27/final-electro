<?php

namespace App\Http\Controllers;
use App\Http\Controllers\usercontroller;
use Illuminate\Http\Request;
use App\Models\order;
use App\Models\product;
use App\Models\cart;
use Illuminate\Support\Facades\DB;
class ordercontroller extends Controller
{
    function delete1($id)
    {
        $data=order::find($id);
        $data->delete();
        return redirect('editcustomer');
    }

    function show()

    {
      $data=order::all();
        return view('editcustomer',['order'=>$data]);
    }
    function showdata($id)
    {
        $data= order::find($id);
        return view('edit1',['order'=>$data]);
    }
    function update(Request $req)
    {
        
       // return $req->input();
       $order= order::find($req->id);
     $order->status=$req->status;
      $order->payment_status=$req->pstatus;
       $order->save();
       return redirect('editcustomer');
    }
}
