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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string( "full_name", 100 )->unique();
            $table->date( "born" )->nullable();
            $table->string( "address", 100 );
            $table->string( "phone_number", 15 )->comment( "Telefonszám" );
            $table->foreignId( "city_id" );
            $table->foreignId( "school_class_id" );
            $table->foreignId( "course_id" );
            $table->foreignId( "user_id" );
            $table->timestamps();
            $table->enum( "gender", [ "férfi", "nő", "egyéb" ]);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
