<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDealsTable extends Migration
{
    public function up()
{
    if (!Schema::hasTable('deals')) { // Only create if the table doesn't exist
        Schema::create('deals', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->foreignId('account_id')->constrained()->onDelete('cascade');
            $table->foreignId('contact_id')->nullable()->constrained()->onDelete('cascade');
            $table->enum('stage', ['lead', 'negotiation', 'closed', 'lost']);
            $table->decimal('amount', 10, 2)->nullable();
            $table->timestamps();
        });
    }
}
    public function down()
    {
        Schema::dropIfExists('deals');
    }
};
