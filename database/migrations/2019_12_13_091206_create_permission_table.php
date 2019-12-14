<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermissionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permission', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('parent_id')->default(0);
            $table->tinyInteger('level')->default(1)->comment('等级');
            $table->string('name',50)->comment('权限名');
            $table->string('icon',50)->default('')->comment('icon图标');
            $table->string('path',50)->default('')->comment('路由');
            $table->tinyInteger('sort')->default(1)->comment('排序');
            $table->tinyInteger('is_menu')->default(0)->comment('是否菜单');
            $table->tinyInteger('status')->default(1)->comment('状态 1-启动，2-禁用');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permission');
    }
}
