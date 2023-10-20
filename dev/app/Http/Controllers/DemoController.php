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
		
		$data = \DB::select('select * from sessions limit 1');
		
		return view('demo.index', [
				'data'=>$data,
		]);
		
	}
	
	
	public function spa_demo(){
		
// 		// すでにログアウトになったらlogoutであることをフロントエンド側に知らせる。
// 		if(\Auth::id() == null) return json_encode(['err_msg'=>'logout']);
		
		$json=$_POST['key1'];
		$res = json_decode($json,true);
		$res['name'] = '新しい猫';
		$res['age'] = 1;
		$res['date'] = '2020-7-23';
		
		$json = json_encode($res, JSON_HEX_TAG | JSON_HEX_QUOT | JSON_HEX_AMP | JSON_HEX_APOS);
		
		return $json;
	}
	
}
