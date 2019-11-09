<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     * 职务
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->string('no',10)->unique()->comment("职务编号");
            $table->string('name',20)->comment("职务名称");
            $table->string('category',10)->comment("职务类别");
            $table->string('grade',10)->comment("职级");
            $table->integer('max')->default(10)->comment("最高职等");
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
        Schema::dropIfExists('jobs');
    }
}
