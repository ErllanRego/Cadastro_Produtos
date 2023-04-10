<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function format_float_number($float_number){

        //Converter float number para o formato padrão do banco
        if($float_number != null && $float_number > 0){
            $search = ['.', ','];
            $replace = ['', '.'];
            $float_number_formated = str_replace($search, $replace, $float_number);
        }else{
            $float_number_formated = 0.0;
        }
        
        
        return $float_number_formated;
    }

    /*public function product_detail(){
        return view('');
    }*/

    public function home(){

        $products = Produto::join('categories', 'produtos.category_id', 'categories.id')
        ->select('produtos.*', 'categories.name as category')
        ->get();
        
        return view('welcome_shop', compact('products'));
    }

    public function create(){

        $categories = Categories::all();

        return view('products.create', compact('categories'));
    }

    public function store(Request $request){

        $data = $request->all();
        
        if($request->file('image') == null){
            return redirect()->route('product.create')->with('image_null', true);
        }

        $image = $request->file('image');
        $extension = $request->file('image')->extension();

        $b64 = base64_encode($image->getContent());

        $data['image_b64'] = "data:application/$extension;base64," . $b64;
        
        $data['price'] = $this->format_float_number($data['price']);

        Produto::create($data);

        return redirect()->route('home')->with('created', true);
    }

    public function edit($id){
        $product = Produto::find($id);
        
        $categories = Categories::all();
        
        return view('products.edit', compact('categories', 'product'));
    }

    public function update(Request $request, $id){
        $data = $request->all();

        $product = Produto::find($id);

        if($request->file('image') != null){
            $image = $request->file('image');
            $extension = $request->file('image')->extension();

            $b64 = base64_encode($image->getContent());

            $data['image_b64'] = "data:application/$extension;base64," . $b64;
        }

        $product->name = $data['name'];
        $product->price = $this->format_float_number($data['price']);
        $product->category_id = $data['category_id'];
        $product->description = $data['description'];
        $product->save();

        return redirect()->route('home')->with('updated', true);

    }

    public function delete($id){

        $product = Produto::find($id)->delete();

        return redirect()->route('home')->with('deleted', true);
    }
}
