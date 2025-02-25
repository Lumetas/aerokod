<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Mortgage;
use Illuminate\Http\Request;

class MortgageController extends Controller
{
    // Список активных ипотек
    public function indexPublic()
    {
        $mortgages = Mortgage::where('is_active', true)
            ->select(['id', 'title', 'percent', 'min_price', 'max_price'])
            ->get();
    
        return response()->json($mortgages);
    }

    // Детальная информация об ипотеке
    public function showPublic($id)
    {
        $mortgage = Mortgage::where('is_active', true)->find($id);

        if (!$mortgage) {
            return response()->json(['error' => 'Ипотека не найдена'], 404);
        }

        return response()->json($mortgage);
    }
}