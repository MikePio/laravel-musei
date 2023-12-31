<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('operas', function (Blueprint $table) {
            $table->dropColumn('artist');
            $table->unsignedBigInteger('artist_id')->nullable()->after('id');

            $table->foreign('artist_id')
                  ->references('id')
                  ->on('artists')
                  ->onDelete('set null');

            $table->string('slug')->unique();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('operas', function (Blueprint $table) {
            $table->dropForeign(['artist_id']);
            $table->dropColumn('artist_id');
        });
    }
};
