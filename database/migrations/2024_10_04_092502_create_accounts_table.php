<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->id();                                 // Auto-incrementing primary key
            $table->string('name');                       // Account name
            $table->string('industry')->nullable();       // Industry of the account
            $table->string('size')->nullable();           // Size of the organization
            $table->string('location')->nullable();       // Location of the organization
            $table->timestamps();                         // Timestamps: created_at, updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accounts');
    }
}
