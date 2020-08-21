<?php

namespace App\Http\Controllers;

use App\Model\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Psy\Util\Str;

class ProductAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('crud.insert');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        if (Auth::check()){
            $this->validate($request,[
                'name' => 'required|string|max:255',
                'type' => 'required|string|max:255',
                'slug' => 'required|string|max:255',
                'url_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                'description' => 'required|string',
                'sku' => 'required|string|max:255',
                'price' => 'required|integer',
                'quantity' => 'required|integer',
                'status' => 'required|integer',
                'category_id' => 'required|integer',
            ]);

//        Upload gallery
            $image = $request->file('url_image');
            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path("images"),$new_name);
//

            $product = Product::create([
                'name' => $request->get('name'),
                'type' => $request->get('type'),
                'slug' => $request->get('slug'),
                'url_image' => $new_name,
                'description' => $request->get('description'),
                'sku' => $request->get('sku'),
                'price' => $request->get('price'),
                'quantity' => $request->get('quantity'),
                'status' => $request->get('status'),
                'category_id' => $request->get('category_id'),
            ]);

            return redirect()->back()->with('success','Add Success');
        }
        else{
            return redirect('get-login');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        $product = Product::find($id);
        return view('crud.update',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name' => 'required|string|max:255',
            'url_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'required|string',
            'sku' => 'required|string|max:255',
            'price' => 'required|integer',
            'quantity' => 'required|integer',
            'status' => 'required|integer',
            'category_id' => 'required|integer',
        ]);

        $product = Product::find($id);

        $product->name = $request->input('name');
        $product->type = $request->input('type');
        $product->slug = $request->input('slug');
        $product->description = $request->input('description');
        $product->sku = $request->input('sku');
        $product->price = $request->input('price');
        $product->quantity = $request->input('quantity');
        $product->status = $request->input('status');
        $product->category_id = $request->input('category_id');

        if($request->hasFile('url_image')){
                $file = $request->file('url_image');
                $extension = $file->getClientOriginalExtension();
                $filename = rand() . '.' . $extension;
                $file->move('images/',$filename);
                $product->url_image = $filename;
        }

        $product->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();

        return redirect()->back();
    }
}
