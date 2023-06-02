<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Payment;
class PaymentController extends Controller

{
    public function index()
    {
        $cartItems = session('cart', []);

        return view('managepayment.index', compact('cartItems'));
    }
    public function addToCart(Request $request)
    {
        $itemId = $request->input('item_id');
        $quantity = $request->input('quantity');
    
     /*   // Store in session
        $cartItems = session('cart', []);
        $cartItems[] = [
            'item_id' => $itemId,
            'quantity' => $quantity,
        ];
        session(['cart' => $cartItems]);
    
        // Store in database
        $receipt = Receipt::create([
            'customer_name' => 'John Doe', // Replace with the actual customer name
            'total_amount' => 0, // Replace with the actual total amount
        ]);
    
        $receiptItem = ReceiptItem::create([
            'receipt_id' => $receipt->id,
            'item_name' => 'Sample Item', // Replace with the actual item name
            'quantity' => $quantity,
            'price' => 0, // Replace with the actual item price
        ]);

        return redirect()->route('payments.index');
    */}
    

}
