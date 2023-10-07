<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DemoController extends Controller
{
	/**
	 * indexページのアクション
	 *
	 * @param  Request  $request
	 * @return \Illuminate\View\View
	 */
	public function index(Request $request){
		
		// ログアウトになっていたらログイン画面にリダイレクト
		//if(\Auth::id() == null) return redirect('login');
		$data = ['neko'=>'ニャー'];
		
		$data = \DB::select('select * from nekos limit 4');
		
		return view('demo.index', [
				'data'=>$data,
		]);
		
	}
}
