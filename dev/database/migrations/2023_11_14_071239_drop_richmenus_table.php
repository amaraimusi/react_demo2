<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
    	// rich_menusテーブルに変更したのでrichmenusを削除。
    	Schema::dropIfExists('richmenus');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
