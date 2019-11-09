<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRanksTable extends Migration
{
    /**
     * Run the migrations.
     * 职级
     * @return void
     */
    public function up()
    {
        Schema::create('ranks', function (Blueprint $table) {
            $table->bigIncrements('id')->comment("ID");
            $table->string('no',10)->unique()->comment("职级编号");
            $table->string('name',20)->comment("职级名称");
            $table->integer('category')->default(10)->comment("职务类别");
            $table->string('max',10)->comment("最高职等");
            $table->string('min',10)->comment("最低职等");
            $table->integer('status')->default(10)->comment("状态");
            $table->string('remark',255)->comment("备注");
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
        Schema::dropIfExists('ranks');
    }
}
