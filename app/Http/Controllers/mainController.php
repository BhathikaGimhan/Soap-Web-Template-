<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Product;
class mainController extends Controller
{
    public function index(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
            'image' => 'required',
        ]);

        $product = new Product();
        $product->name = $request->input('name');
        $product->price =$request->input('price');
        $product->discription = $request->input('description');
        if($request->hasfile('image')){
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $fileName = time().'.'.$extention;
            $file->move('uploads/products/',$fileName);
            $product->img_path = $fileName;
        }
        $data = Product::all()->sortBy("id");
        $product->save();
        return redirect()->route('redirect',compact('data'));
    }
    public function update($id){
        $product = Product::find($id);
        return view("admin.update", compact('product'));
    }

    public function updateNow(Request $request, $id){
        $this->validate($request,[
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
        ]);

        $product = Product::find($id);
        $product->name = $request->input('name');
        $product->price =$request->input('price');
        $product->discription = $request->input('description');
        if($request->hasfile('image')){
            $destination = 'uploads/products/'.$product->img_path;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $fileName = time().'.'.$extention;
            $file->move('uploads/products/',$fileName);
            $product->img_path = $fileName;
        }
        $data = Product::all()->sortBy("id");
        $product->save();
        return redirect()->route('redirect',compact('data'));
    }

    public function delete($id){
        $delProduct = Product::find($id);

        $destination = 'uploads/products/'.$delProduct->img_path;
        if(File::exists($destination)){
            File::delete($destination);
        }
        $delProduct->delete();
        $data = Product::all()->sortBy("id");
        return redirect()->route('redirect',compact('data'));
    }

    public function shop()
    {
        $data = Product::all()->sortByDesc("id");
        return view('user.shop',compact('data'));
    }
}
