<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlagTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flag_tests', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned()->comment('ID');
            $table->boolean('social_insurance_flag')->nullable()->comment('社会保険扶養フラグ');
            $table->text('social_insurance_remark')->nullable()->comment('社会保険についての備考');
            $table->boolean('income_tax_flag')->nullable()->comment('所得税フラグ');
            $table->text('income_tax_remark')->nullable()->comment('所得税についての備考');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('flag_tests');
    }
}
