<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Subscription;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SubscriptionController extends Controller
{
    public function index(): View
    {
        $subscriptions = Subscription::with('product')
            ->where('user_id', auth()->id())
            ->latest()
            ->get();

        return view('subscriptions.index', compact('subscriptions'));
    }

    public function store(Request $request, Product $product): RedirectResponse
    {
        $validated = $request->validate([
            'phone' => 'required|string|max:30',
            'address' => 'required|string|max:1000',
            'notes' => 'nullable|string|max:1000',
        ], [
            'phone.required' => 'Nomor telepon wajib diisi.',
            'address.required' => 'Alamat pemasangan wajib diisi.',
        ]);

        Subscription::create([
            'user_id' => auth()->id(),
            'product_id' => $product->id,
            'phone' => $validated['phone'],
            'address' => $validated['address'],
            'notes' => $validated['notes'] ?? null,
            'status' => 'pending',
        ]);

        return redirect()->route('subscriptions.index')
            ->with('success', 'Pengajuan langganan "'.$product->name.'" berhasil dikirim. Tim kami akan segera menghubungi Anda.');
    }
}
