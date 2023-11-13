<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Richmenu;

class RichmenuController extends Controller
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
		
		return view('richmenu.index', [
				'data'=>$data,
		]);
		
	}
	
	
	public function spa_demo(Request $request){
		
		
		
		
		
		$accessToken = 'lPdXJ1j4doZCNpA8gecTEldh9R+mq3XboSroYwUTwiU0cwQRoqEHG8DF8QXLlM9xVekwxxRMhckI2Aim+nqF3SOaKvZMrtipijoqzvjjocigrg7oPCwCmUZXpXSXpXvi2GqIlV5QBSagUHTzrmKLSAdB04t89/1O/w1cDnyilFU='; // ここに実際のアクセストークンを設定
		$url = 'https://api.line.me/v2/bot/richmenu';
		
		$data = [
				"size" => [
						"width" => 2500,
						"height" => 1686
				],
				"selected" => false,
				"name" => "デフォルトのリッチメニューのテスト",
				"chatBarText" => "Tap to open",
				"areas" => [
						[
								"bounds" => [
										"x" => 0,
										"y" => 0,
										"width" => 1666,
										"height" => 1686
								],
								"action" => [
										"type" => "uri",
										"label" => "タップ領域A",
										"uri" => "https://developers.line.biz/ja/news/"
								]
						],
						// 他のタップ領域も同様に設定
				]
		];
		
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_HTTPHEADER, [
				'Content-Type: application/json',
				'Authorization: Bearer ' . $accessToken
		]);
		curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
		
		$result = curl_exec($ch);
		curl_close($ch);
		
		
		
		
		
		
		
		
// 		// すでにログアウトになったらlogoutであることをフロントエンド側に知らせる。
// 		if(\Auth::id() == null) return json_encode(['err_msg'=>'logout']);
		

// 		$buta = $request->buta;

// 		$res = [];
		
// 		$res['buta'] = $buta;
// 		$res['name'] = 'リッチメニュー送信完了';
// 		$res['age'] = 1;
// 		$res['date'] = '2020-7-23';
		
		$json = json_encode($result, JSON_HEX_TAG | JSON_HEX_QUOT | JSON_HEX_AMP | JSON_HEX_APOS);
		
		return $json;
	}
	
	/**
	 * 一覧データを取得する
	 * @param Request $request
	 * @return \Illuminate\Http\JsonResponse
	 */
	public function get_list_spa(Request $request)
	{

		$query = RichMenu::query();

		// 検索条件の適用
		if ($request->filled('name')) {
			$query->where('name', 'like', '%' . $request->input('name') . '%');
		}
		
		if ($request->filled('segment')) {
			$query->where('segment', 'like', '%' . $request->input('segment') . '%');
		}
		
		// ソートの適用
		$sortField = $request->input('sortField', 'created_at');
		$sortOrder = $request->input('sortOrder', 'asc') === 'ascend' ? 'asc' : 'desc';
		$query->orderBy($sortField, $sortOrder);
		
		// ページネーションの設定
		$pageSize = $request->input('pagination.pageSize', 5);
		
		// データの取得とページネーション
		$richMenus = $query->paginate($pageSize);

		return response()->json($richMenus);
	}
	
}
