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
        Schema::table('movies', function (Blueprint $table) {
            $table->dropColumn("titolo");
            $table->string("title", 100)->nullable();
            $table->string("original_title", 100)->nullable();
            $table->string("cover", 255)->nullable();
            $table->string("nationality", 20)->nullable();
            $table->date("date")->nullable();
            $table->float("vote", 2, 1, true)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('movies', function (Blueprint $table) {
            $table->dropColumn(
                [  
                    "title",
                    "original_title",
                    "cover",
                    "nationality",
                    "date",
                    "vote"
                ]
            );
            $table->string("titolo");
        });
    }
};
