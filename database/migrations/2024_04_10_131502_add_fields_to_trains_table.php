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
        Schema::table('trains', function (Blueprint $table) {
            $table->string('company', 30);
            $table->string("departure_station", 30);
            $table->string("arrival_tation", 30);
            $table->date('departure_date');
            $table->time("departure_time");
            $table->time("arrival_time");
            $table->string('train_code', 15);
            $table->tinyInteger('number_of_coaches');
            $table->boolean('on_time');
            $table->boolean('cancelled');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('trains', function (Blueprint $table) {
            $table->dropColumn('company');
            $table->dropColumn("departure_station");
            $table->dropColumn("arrival_tation");
            $table->dropColumn("departure_time");
            $table->dropColumn("arrival_time");
            $table->dropColumn('train_code');
            $table->dropColumn('number_of_coaches');
            $table->dropColumn('on_time');
            $table->dropColumn('cancelled');
        });
    }
};
