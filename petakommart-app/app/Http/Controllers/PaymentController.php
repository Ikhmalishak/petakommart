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
        $customerName = $request->input('customer_name');
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
            'customer_name' => $customerName
        ];
        session(['cart' => $cartItems]);

        return redirect()->route('payments.index');
    }

    public function checkout(Request $request)
    {
        $cartItems = session('cart', []);
        $totalPurchase = $this->calculateTotalPurchase($cartItems);
        $customerName = $request->input('customer_name');
        // Store in database
        $receipt = Payment::create([
            'customer_name' => 'ikhmal',// Replace with the actual customer name
            'total_amount' => $totalPurchase,
        ]);

        foreach ($cartItems as $item) {
            // Deduct the purchased quantity from the inventory
            $inventoryItem = Inventory::find($item['item_id']);
            if ($inventoryItem) {
                $inventoryItem->quantity -= $item['quantity'];
                $inventoryItem->save();
            }

        }
        // foreach ($cartItems as $item) {
        //     $receipt->items()->create([
        //         'item_name' => $item['item_name'],
        //         'quantity' => $item['quantity'],
        //         'price' => $item['price_per_item'],
        //         'total_price' => $item['total_price_per_item'],
        //     ]);
        // }
        session()->forget('cart');
          // Redirect back to the previous page
    return redirect()->back();
    // return redirect()->route('payments.report', ['paymentID' => $receipt->id]);
    }

    public function generateReport()
    {
        $report = Payment::select(Payment::raw('DATE(created_at) as day'), DB::raw('SUM(total_amount) as total'))
            ->groupBy('day')
            ->orderBy('day', 'ASC')
            ->get();

        return view('payment.report', compact('report'));
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
