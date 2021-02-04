<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    //return view('welcome');
    
    $report = new Lendme\Reporting\SalesReporter(new \Lendme\Repositories\SalesRepository);
    
    $begin = Carbon\Carbon::now()->subDays(10);
    $end = Carbon\Carbon::now();
    
    return $report->between($begin, $end, new Lendme\Reporting\HtmlOutput);
});
