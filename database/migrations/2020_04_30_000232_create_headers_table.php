<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHeadersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('headers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("name");
            $table->string("job");
            $table->string("user_img");
            $table->string("facebook_url")->nullable();
            $table->string("instagram_url")->nullable();
            $table->string("linkedin_url");
            $table->string("github_url");
            $table->string("about_yourself");
            $table->string("about_skills");
            $table->date("born_date");
            $table->string("mail");
            $table->string("phone");
            $table->string("location");
            $table->string("theme");
            $table->string("skill_1");
            $table->string("skill_2");
            $table->string("skill_3");
            $table->string("skill_4");
            $table->string("skill_5");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('headers');
    }
}
