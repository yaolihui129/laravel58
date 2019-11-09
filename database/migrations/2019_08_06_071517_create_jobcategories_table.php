<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobcategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *  职务类别
     * @return void
     */
    public function up()
    {
        Schema::create('jobcategories', function (Blueprint $table) {
            $table->bigIncrements('id')->comment("ID");
            $table->string('no',10)->unique()->comment("职务类别编号");
            $table->string('name',20)->comment("职务类别名称");
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
        Schema::dropIfExists('jobcategories');
    }
}
