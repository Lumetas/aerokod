<?php
// use App\Http\Controllers\Admin\MortgageController;
// use App\Http\Controllers\Public\MortgageController;

Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('mortgages', App\Http\Controllers\Admin\MortgageController::class);
});

Route::prefix('public')->group(function () {
    Route::get('mortgages', [App\Http\Controllers\Public\MortgageController::class, 'indexPublic']);
    Route::get('mortgages/{id}', [App\Http\Controllers\Public\MortgageController::class, 'showPublic']);
});
