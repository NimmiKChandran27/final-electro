<?php



namespace App\Http\Controllers;
use App\Http\Controllers\usercontroller;
use Illuminate\Http\Request;
use App\Models\product;
use App\Models\cart;
use App\Models\order;
use Session;
use Illuminate\Support\Facades\DB;
class productcontroller extends Controller
{
    function index()
    {
        $data=product::all();
      return view('product',['products'=>$data]);
       // return "welcome";
    }


    function detail($id)
    {
          $data=product::find($id);
          return view('detail',['product'=>$data]);
    }
    function search(Request $req )
    {
            
          $data=product::where('name','like','%'.$req->input('query').'%')->get();
          return view('search',['products'=>$data]);
    }

    function addtocart(Request $req )
    {
        if($req->session()->has('user'))
        {

        $cart= new cart;
        $cart->product_id=$req->product_id;
        $cart->user_id=$req->session()->get('user')['id'];
        $cart->save();
        return redirect('/');
        }
        else
        {
           return redirect('/login');
        }
    }


    static function  cartitem()
    { 
    
        $user_Id=Session::get('user')['id'];
        return Cart::where('user_id',$user_Id)->count();
    }
    function cartList(Request $req)
    {        
        
        
        
           $user_Id=Session::get('user')['id'];
             $products=DB::table('cart')
            ->leftjoin('products','cart.product_id','=','products.id')
             ->where('cart.user_id',$user_Id)
            ->select('products.*','cart.id  as cart_id')
            ->get();
            return view('cartlist',['products'=>$products]);
    }

    function removeCart($id)
    {
         cart::destroy($id);
         return redirect('cartlist');
    }

    function orderNow()
    {
        $userId=Session::get('user')['id'];
        $total= $products= DB::table('cart')
       
            ->join('products','cart.product_id','=','products.id')
            ->where('cart.user_id',$userId)
            ->sum('products.totalprice');
            return view('ordernow',['total'=>$total]);
    }

    function orderPlace(Request $req)
    {
        $userId=Session::get('user')['id'];
        $allCart=Cart::where('user_id',$userId)->get(); 
        foreach($allCart as $cart)
        {
            $order=new order;  
            $order->product_id=$cart['product_id'];
            $order->user_id=$cart['user_id'];
            $order->status="pending";
            $order->payment_method=$req->payment;
            $order->payment_status="pending";
            $order->address =$req->address;
            $order->save();
            Cart::where('user_id',$userId)->delete();
        }

       $req->input();
       return redirect('/');
      
    }


    function myOrders()
    {
        $userId=Session::get('user')['id'];
       $orders=DB::table('orders')
       
            ->join('products','orders.product_id','=','products.id')
            ->where('orders.user_id',$userId)
            ->get();
           return view('myorders',['orders'=>$orders]);
    }


    function show()

    {
        $data=product::all();
        return view('list',['products'=>$data]);
    }

    function addData(Request $req)
    {
        $product=new product;
        $product->prodtype=$req->ptype;
        $product->name=$req->name;
        $product->productdescription=$req->pdesc;
        $product->stock=$req->stock;
        $product->price=$req->price;
        $product->offerprice=$req->oprice;
        $product->delivery=$req->del;
        $product->deliverycharge=$req->dyn;
        $product->totalprice=$req->tprice;
        $product->gallery=$req->gallery;
        $product->save();
        return "PRODUCT SUCCESFULLY ADDED";

    }

    function delete($id)
    {
        $data=product::find($id);
        $data->delete();
        return redirect('list');
    }
    function showdata($id)
    {
        $data= product::find($id);
        return view('edit',['products'=>$data]);
    }
    function update(Request $req)
    {
        //return $req->input();
        $product= product::find($req->id);
        $product->prodtype=$req->ptype;
        $product->name=$req->name;
        $product->productdescription=$req->pdesc;
        $product->stock=$req->stock;
        $product->price=$req->price;
        $product->offerprice=$req->oprice;
        $product->delivery=$req->del;
        $product->deliverycharge=$req->dyn;
        $product->totalprice=$req->tprice;
        $product->gallery=$req->gallery;
        $product->save();
        return redirect('list');
    }

}
