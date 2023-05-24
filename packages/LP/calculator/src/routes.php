<?php 

Route::get('calculator', function(){
    echo "Hello From Calculator Package";
});

Route::get('add/{a}/{b}', [LP\Calculator\CalculatorController::class, 'add']);
Route::get('subtract/{a}/{b}', [LP\Calculator\CalculatorController::class, 'subtract']);
