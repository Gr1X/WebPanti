<?php

namespace App\Http\Controllers;

use App\Models\Donasi;
use Illuminate\Http\Request;

class AdminPaymentController extends Controller
{
    public function index()
    {
        $payments = Donasi::all();
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
