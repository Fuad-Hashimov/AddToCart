<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function cart()
    {
        if (session('cartItems')) {
            $total = 0;
            $products = session()->get('cartItems');
            foreach ($products as $key => $val) {
                $total += $val['price'] *  ((int)$val['quantity'] == 0 ? 1 : (int)$val['quantity']);
            }
            return view('cart.cart', compact('total'));
        }
        return view('cart.cart');
    }

    public function addToCart($id)
    {
        $product = Product::findOrFail($id);
        $cartItems = session()->get("cartItems", []);
        if (isset($cartItems[$id])) {
            $cartItems[$id]['quantity']++;
        } else {

            $cartItems[$id] = [
                'image_path' => $product->image_path,
                'name' => $product->name,
                'decsription' => $product->decsription,
                'price' => $product->price,
                'quantity' => (int)$product->quantity,
            ];
        }

        session()->put('cartItems', $cartItems);
        return redirect()->back()->with("Success", 'Product add to cart');
    }

    public function delete(Request $request)
    {
        if ($request->id) {
            $cartItems = session()->get('cartItems');
            if (isset($cartItems[$request->id])) {
                unset($cartItems[$request->id]);
                session()->put("cartItems", $cartItems);
            }
            return redirect()->back()->with('success', 'Prduct deleted');
        }
    }

    public function increment($id,$action)
    {
        if ($id) {
            $cartItems = session()->get('cartItems');
            if (isset($cartItems[$id])) {
                if($action == 'inc'){
                    $cartItems[$id]['quantity']++;
                }
                else{
                    $cartItems[$id]['quantity']--;
                }
                $newQuantity = $cartItems[$id]['quantity'];

                $cartItems[$id]['quantity'] = $newQuantity;

                session()->put('cartItems', $cartItems);
                return redirect()->back()->with('success', 'Cart Updated');
            }
        }

        return redirect()->back()->with('error', 'Hass Errors');
    }




}
