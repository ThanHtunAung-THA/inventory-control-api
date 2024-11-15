<?php

namespace App\Http\Controllers\API;

use App\Model\Sale;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class SaleController extends Controller
{
    // Display a listing of sales
    public function getAllSales()
    {
        $result = Sale::all();
        if (count($result) > 0) return response()->json(['status' => 'OK', 'data' => $result], 200);
        return response()->json(['status' => 'NG', 'message' => 'Data does not exist!'], 200);
    }
    public function getAllSaleBy10()
    {
        $result = Sale::paginate(10);
        if (count($result) > 0) return response()->json(['status' => 'OK', 'data' => $result], 200);
        return response()->json(['status' => 'NG', 'message' => 'Data does not exist!'], 200);
    }

    // Store a newly created sale in storage
    public function store(Request $request)
    {
        $request->validate([
            'user_code' => 'required|string|max:50',
            // 'admin_code' => 'nullable|string|max:50',
            'date' => 'required|date',
            'location' => 'required|string|max:10',
            'item_id' => 'nullable|string',
            'customer' => 'required|string',
            'payment_type' => 'required|string',
            'currency' => 'nullable|string|max:10',
            'quantity' => 'required|numeric',
            'discount_and_foc' => 'nullable|numeric',
            'paid' => 'nullable|numeric',
            'total' => 'required|numeric',
            'balance' => 'nullable|numeric',
        ]);

        $sale = Sale::create($request->all());

        return response()->json(['status' => 'OK', 'message' => 'Sale created successfully', 'data' => $sale], 201);
    }

    // Display the specified sale
    public function show($id)
    {
        $sale = Sale::find($id);

        if ($sale) {
            return response()->json(['status' => 'OK', 'data' => $sale], 200);
        }

        return response()->json(['status' => 'NG', 'message' => 'Sale not found'], 404);
    }

    // Update the specified sale in storage
    public function update(Request $request, $id)
    {
        $sale = Sale::find($id);

        if (!$sale) {
            return response()->json(['status' => 'NG', 'message' => 'Sale not found'], 404);
        }

        $request->validate([
            'user_code' => 'nullable|string|max:50',
            // 'admin_code' => 'nullable|string|max:50',
            'date' => 'nullable|date',
            'location' => 'nullable|string|max:10',
            'item_id' => 'nullable|string',
            'customer' => 'nullable|string',
            'payment_type' => 'nullable|string',
            'currency' => 'nullable|string|max:10',
            'quantity' => 'nullable|numeric',
            'discount_and_foc' => 'nullable|numeric',
            'paid' => 'nullable|numeric',
            'total' => 'nullable|numeric',
            'balance' => 'nullable|numeric',
        ]);

        $sale->update($request->all());

        return response()->json(['status' => 'OK', 'message' => 'Sale updated successfully', 'data' => $sale], 200);
    }

    // Remove the specified sale from storage
    public function destroy($id)
    {
        $sale = Sale::find($id);

        if (!$sale) {
            return response()->json(['status' => 'NG', 'message' => 'Sale not found'], 404);
        }

        $sale->delete();

        return response()->json(['status' => 'OK', 'message' => 'Sale deleted successfully'], 200);
    }
}
