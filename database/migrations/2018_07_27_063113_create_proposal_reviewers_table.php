<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProposalReviewersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proposal_reviewers', function (Blueprint $table) {
             $table->increments('id');
             $table->integer('proposal_id');
             $table->integer('department_id');
             $table->integer('hod_user_id');
             $table->integer('lead_user_id');
             $table->integer('poc_user_id');
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
        Schema::dropIfExists('proposal_reviewers');
    }
}
