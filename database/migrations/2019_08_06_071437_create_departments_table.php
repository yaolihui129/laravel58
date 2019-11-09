<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDepartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departments', function (Blueprint $table) {
            $table->bigIncrements('id')->comment("ID");
            $table->string('no',10)->unique()->comment("部门编码");
            $table->string('name',20)->comment("部门名称");
            $table->integer('superior')->comment("所属上级");
            $table->integer('nature')->comment("部门性质");
            $table->integer('cadre')->comment("负责人");
            $table->integer('leader')->comment("分管领导");
            $table->integer('enable')->comment("启用日期");
            $table->integer('invalid')->comment("失效日期");
            $table->integer('status')->default(10)->comment("状态");
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
        Schema::dropIfExists('departments');
    }
}
