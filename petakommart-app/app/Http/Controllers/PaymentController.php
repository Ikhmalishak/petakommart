<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use App\Models\Inventory;

class PaymentController extends Controller
{
    public function index()
    {
        $cartItems = session('cart', []);
        $totalPurchase = $this->calculateTotalPurchase($cartItems);

        return view('managepayment.index', compact('cartItems', 'totalPurchase'));
    }

    public function addToCart(Request $request)
    {
        $itemId = $request->input('item_id');
        $quantity = $request->input('quantity');

        // Fetch item from the database
        $item = Inventory::find($itemId);

        if (!$item) {
            return redirect()->back()->withErrors('Item not found');
        }

        // Calculate total price per item
        $totalPricePerItem = $item->price * $quantity;

        // Store in session
        $cartItems = session('cart', []);
        $cartItems[] = [
            'item_id' => $itemId,
            'item_name' => $item->product_name,
            'quantity' => $quantity,
            'price_per_item' => $item->price,
            'total_price_per_item' => $totalPricePerItem,
        ];
        session(['cart' => $cartItems]);

        return redirect()->route('payments.index');
    }

     public function checkout()
    {
        $cartItems = session('cart', []);
        $totalPurchase = $this->calculateTotalPurchase($cartItems);

        // Store in database
        $receipt = Payment::create([
            'customer_name' => 'John Doe', // Replace with the actual customer name
            'total_amount' => $totalPurchase,
        ]);

        foreach ($cartItems as $item) {
            $receipt->items()->create([
                'item_name' => $item['item_name'],
                'quantity' => $item['quantity'],
                'price' => $item['price_per_item'],
                'total_price' => $item['total_price_per_item'],
            ]);
        }

   
        // Clear the cart from session
        session(['cart' => []]);

        return redirect()->route('payments.index')->withSuccess('Payment successful. Receipt created.');
    }

    private function calculateTotalPurchase($cartItems)
    {
        $totalPurchase = 0;

        foreach ($cartItems as $item) {
            $totalPurchase += $item['total_price_per_item'];
        }

        return $totalPurchase;
    }
    
}
