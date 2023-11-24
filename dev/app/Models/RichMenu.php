<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class RichMenu extends Model
{

	protected $primaryKey = 'id'; // これが適切に設定されていることを確認
	public $incrementing = false; // これを追加
	protected $keyType = 'string'; // これを追加
	
    // テーブル名を設定（省略可）
    protected $table = 'rich_menus';

    // マスアサインメント対象のカラム
    protected $fillable = [
    		'id', // リッチメニューID
    		'name', // リッチメニュー名
    		'line_account_id', // LINEアカウントID
    		'rich_menu_category_id', // リッチメニュー・カテゴリ分類
    		'segment', // セグメント
    		'status', // ステータス (draft:下書き, line_linked:LINEとリンク済)
    		'size_w', // リッチメニューの横幅
    		'size_h', // リッチメニューの縦幅
    		'default_selected', // デフォルト表示
    		'chat_bar_text', // チャットバーテキスト    リッチメニューのバー上に表示されるテキスト
    		'line_rich_menu_id', // LINE側のリッチメニューID(richMenuId)
    		'rich_menu_img', // リッチメニュー画像
    		'review_svg', // SVG画像
    		'start_time', // 期間・開始
    		'end_time', // 期間・終了
    		'delete_flg', // 削除フラグ
    		'created_at',
    		'updated_at',
    ];
}