<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDailyReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daily_reports', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('project_id')->nullable();
            $table->string('attachment')->nullable();
            $table->string('weather')->nullable()->default('clear_sunny');
            $table->integer('temperature')->nullable()->default(0);
            $table->integer('wind')->nullable()->default(25);
            $table->string('preciptation_am')->nullable();
            $table->string('preciptation_pm')->nullable();
            $table->text('additional_comment')->nullable();
            $table->integer('contractor_company_id')->nullable();
            $table->integer('contractor_no_of_crew')->nullable();
            $table->integer('contractor_total_no_of_hours')->nullable();
            $table->text('contractor_additional_comment')->nullable();
            $table->integer('subcontractor_company_id')->nullable();
            $table->integer('subcontractor_no_of_crew')->nullable();
            $table->integer('subcontractor_total_no_of_hours')->nullable();
            $table->text('subcontractor_additional_comment')->nullable();
            $table->text('daily_activity')->nullable();
            $table->integer('more_info_1')->nullable();
            $table->text('more_info_detail_1')->nullable();
            $table->integer('more_info_2')->nullable();
            $table->text('more_info_detail_2')->nullable();
            $table->integer('more_info_3')->nullable();
            $table->text('more_info_detail_3')->nullable();
            $table->integer('more_info_4')->nullable();
            $table->text('more_info_detail_4')->nullable();
            $table->integer('more_info_5')->nullable();
            $table->text('more_info_detail_5')->nullable();
            $table->integer('health_safety_1')->nullable();
            $table->integer('health_safety_2')->nullable();
            $table->integer('health_safety_3')->nullable();
            $table->integer('visitor_information')->nullable();
            $table->text('visitor_information_additional_comment')->nullable();
            $table->string('completed_by')->nullable();
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
        Schema::dropIfExists('daily_reports');
    }
}
