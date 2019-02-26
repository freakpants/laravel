<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class OverviewController extends Controller
{
	public function show(Request $request){
		return view('welcome');
	}
}
