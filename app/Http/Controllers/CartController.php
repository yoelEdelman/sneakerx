<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdToCartRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $total = 0;
        if (!session('userCart') == null) {
            foreach (session('userCart') as $product) {
                if ($product['quantity'] > 1) {
                    for ($i = 0; $i < $product['quantity']; $i++) {
                        $total += $product['price'];
                    }
                }
                else {
                    $total += $product['price'];
                }
            }
        }

        session()->put('userCartTotal', $total);

        return view('cart.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdToCartRequest $request)
    {
        $id = $request['product_id'];
        $cart = session()->get('userCart');

        if(!$cart) {
            $cart = [
                $id => [
                    'product_id' => $id,
                    'image' => $request['main_image'],
                    'name' => $request['product_name'],
                    'description' => $request['product_description'],
                    'price' => $request['product_price'],
                    'color' => $request['color'],
                    'size' => $request['size'],
                    'quantity' => $request['quantity'],
                    'brand' => $request['product_brand']
                ]
            ];
        }

        $cart[$id] = [
            'product_id' => $id,
            'image' => $request['main_image'],
            'name' => $request['product_name'],
            'description' => $request['product_description'],
            'price' => $request['product_price'],
            'color' => $request['color'],
            'size' => $request['size'],
            'quantity' => $request['quantity'],
            'brand' => $request['product_brand']
        ];

        session()->put('userCart', $cart);
        session()->flash('success', 'Product added to cart successfully!');

        return redirect()->route('cart.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if ($request['action'] == 'add') {
            $cart = session()->get('userCart');

            $cart[$id]["quantity"]++;
        }
        elseif ($request['action'] == 'remove') {
            $cart = session()->get('userCart');

            $cart[$id]["quantity"]--;
        }

        session()->put('userCart', $cart);
        session()->flash('success', 'Cart updated successfully');

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if($id)
        {
            $cart = session()->get('userCart');

            if(isset($cart[$id])) {

                unset($cart[$id]);

                session()->put('userCart', $cart);
            }

            session()->flash('success', 'Product removed successfully');
            return redirect()->back();
        }
    }
}
