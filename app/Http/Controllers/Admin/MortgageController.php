<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Mortgage;

class MortgageController extends Controller
{
    public function index()
    {
        $mortgages = Mortgage::all();
        return view('admin.mortgages.index', compact('mortgages'));
    }

    public function create()
    {
        return view('admin.mortgages.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'is_active' => 'boolean',
            'description' => 'nullable|string',
            'percent' => 'required|integer|max:40',
            'min_first_payment' => 'required|integer|max:98',
            'max_price' => 'required|numeric',
            'min_price' => 'required|numeric',
            'min_term' => 'required|integer',
            'max_term' => 'required|integer',
        ]);

        Mortgage::create($validated);

        return redirect()->route('admin.mortgages.index')->with('success', 'Ипотека успешно добавлена');
    }

    public function show(Mortgage $mortgage)
    {
        return view('admin.mortgages.show', compact('mortgage'));
    }

    public function edit(Mortgage $mortgage)
    {
        return view('admin.mortgages.edit', compact('mortgage'));
    }

    public function update(Request $request, Mortgage $mortgage)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'is_active' => 'boolean',
            'description' => 'nullable|string',
            'percent' => 'required|integer|max:40',
            'min_first_payment' => 'required|integer|max:98',
            'max_price' => 'required|numeric',
            'min_price' => 'required|numeric',
            'min_term' => 'required|integer',
            'max_term' => 'required|integer',
        ]);

        $mortgage->update($validated);

        return redirect()->route('admin.mortgages.index')->with('success', 'Ипотека успешно обновлена');
    }

    public function destroy(Mortgage $mortgage)
    {
        $mortgage->delete();
        return redirect()->route('admin.mortgages.index')->with('success', 'Ипотека успешно удалена');
    }
}
