<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RichMenuCategoriesTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 */
	public function run(): void
	{
		
		// 既存のデータをクリアする
		DB::table('rich_menu_categories')->truncate();
		
 		$list_a = ['なし', '登山コミュニティ' , 'リラクゼーション' , 'B級グルメの旅', '野草料理同好会', 'インドを旅・コミュニティ'];
		
		
		$sampleData = [];
		for ($i = 0; $i < 6; $i++) {
			
			$seg_a = $list_a[array_rand($list_a, 1)];

			$sampleData[] = [
					'id'                => $i,
					'name'              => $list_a[$i],
					'delete_flg'        => 0,
					'created_at'        => now(),
					'updated_at'        => now(),
			];
		}
		
		DB::table('rich_menu_categories')->insert($sampleData);
	}
	
	// セグメントを生成
	private function makeSegment($segItems){
		
		// ランダムに3つの値を選択
		$selectedItems = array_rand($segItems, 3);
		
		// 選んだ値を空白で連結して一つの文字列にする
		$resultString = $segItems[$selectedItems[0]] . " " . $segItems[$selectedItems[1]] . " " . $segItems[$selectedItems[2]];
		
		return  $resultString;
	}
}
