<?php

namespace App\Http\Controllers;

use App\Models\Donasi;
use Illuminate\Http\Request;

class AdminPaymentController extends Controller
{
    public function index(Request $request)
    {
        $query = Donasi::with('user', 'target');
    
        // Filter berdasarkan nama donatur
        if ($request->has('search') && $request->search != '') {
            $query->whereHas('user', function ($q) use ($request) {
                $q->where('name', 'like', '%' . $request->search . '%');
            });
        }
    
        // Filter berdasarkan status
        if ($request->has('status') && $request->status != '') {
            $query->where('status', $request->status);
        }
    
        $payments = $query->get();
    
        return view('admin.payments.index', compact('payments'));
    }  

    public function confirm($id)
    {
        $payment = Donasi::findOrFail($id);
        $payment->status = 'confirmed';
        $payment->save();

        return redirect()->route('admin.payments.index')->with('success', 'Payment has been confirmed.');
    }

    public function reject($id)
    {
        $payment = Donasi::findOrFail($id);
        $payment->delete();

        return redirect()->route('admin.payments.index')->with('success', 'Payment has been rejected and deleted.');
    }
}
