<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDealsTable extends Migration
{
    public function up()
    {
        Schema::create('deals', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->unsignedBigInteger('account_id');   // Foreign key for the associated account
            $table->foreign('account_id')->references('id')->on('accounts')->onDelete('cascade');
            $table->unsignedBigInteger('contact_id')->nullable(); // Foreign key for contact
            $table->foreign('contact_id')->references('id')->on('contacts')->onDelete('cascade');
            $table->enum('stage', ['lead', 'negotiation', 'closed', 'lost']);  // Deal stage
            $table->decimal('amount', 10, 2)->nullable();   // Deal value
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('deals');
    }
};
