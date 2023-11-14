<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class RichMenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    	
    	// 既存のデータをクリアする
    	DB::table('rich_menus')->truncate();
    	
    	$list_a = ['ネコ', 'イヌ' , 'ブタ' , 'ヤギ'];
    	
    	$lineAccountId = ['01gz18jmtaz1tz2yewmg0qh62d', 'xxxx'];
    	
    	$segItems = ["化粧品", "動物", "アウトドア", "PC", "外食", "旅行", "スポーツ", "ドライブ", "ゲーム"];

    	$statuses = ["draft", "line_linked"];

    	



//     	chat_bar_text	チャットバーテキスト    リッチメニューのバー上に表示されるテキスト
//     	line_rich_menu_id	LINE側のリッチメニューID(richMenuId)
//     	rich_menu_img	リッチメニュー画像
//     	review_svg	SVG画像
//     	start_time	期間・開始
//     	end_time	期間・終了
//     	delete_flg	削除フラグ
    	
    	$sampleData = [];
    	for ($i = 0; $i < 65; $i++) {
    		
    		$seg_a = $list_a[array_rand($list_a, 1)];
    		$name = 'Sample Rich Menu' . $seg_a . $i;
    		$line_account_id = $lineAccountId[array_rand($lineAccountId, 1)];
    		$rich_menu_category_id = rand(0, 5); // リッチメニュー・カテゴリ分類
    		$segment = $this->makeSegment($segItems); // セグメント
    		$status = $statuses[array_rand($statuses, 1)]; //     	status	ステータス (draft:下書き, line_linked:LINEとリンク済)
    		$chat_bar_text = $seg_a . 'のメニューバーTEST';
    		
    		
    		$sampleData[] = [
    				'id'                => 'RM' . $i,
    				'name'              => $name,
    				'line_account_id'   => $line_account_id,
    				'rich_menu_category_id'=> $rich_menu_category_id,
    				'segment'           => $segment,
    				'status'           => $status,
    				'size_w'            => 2500,
    				'size_h'            => 1686,
    				'default_selected'  => rand(0, 1),
    				'chat_bar_text'     => $chat_bar_text,
    				'line_rich_menu_id' => Str::random(26),
    				'rich_menu_img'     => 'https://example.com/img/' . $i . '.jpg',
    				'review_svg'        => 'https://example.com/svg/' . $i . '.svg',
    				'start_time'        => now()->toDateTimeString(),
    				'end_time'          => now()->addDays(rand(1, 30))->toDateTimeString(),
    				'delete_flg'        => 0,
    				'created_at'        => now(),
    				'updated_at'        => now(),
    		];
    	}
    	
    	DB::table('rich_menus')->insert($sampleData);
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
