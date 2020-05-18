<?php

namespace App\Http\Controllers;

use App\Http\Requests\CheckoutRequest;
use App\Mail\ContactUs;
use App\Mail\OrderConfirmation;
use App\Models\Customer;
use App\Models\Order;
use App\Models\OrdersProducts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('checkout.index');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CheckoutRequest $request)
    {
        $token = bin2hex(openssl_random_pseudo_bytes(16));

        $customer = new Customer();
        $customer->name = $request->first_name . ' ' . $request->first_name;
        $customer->email = $request->email;
        $customer->address = $request->address . ' ' . $request->city;
        $customer->zip_code = $request->zip_code;
        $customer->save();

        $order = new Order();
        $order->order_number = $token;
        $order->customer_id = $customer->id;
        $order->save();

        foreach (session()->get('userCart') as $product) {
            $orders_products = new OrdersProducts();
            $orders_products->order_id = $order->id;
            $orders_products->product_id = $product['product_id'];
            $orders_products->save();
        }


        Mail::to('yoeledelman@gmail.com')
            ->send(new OrderConfirmation($request->except('_token')));

        session()->flash('Votre commande a été envoyé avec succès');
        $products = session()->get('userCart');

        return view('checkout.confirmation', compact('customer', 'products'));
    }
}
