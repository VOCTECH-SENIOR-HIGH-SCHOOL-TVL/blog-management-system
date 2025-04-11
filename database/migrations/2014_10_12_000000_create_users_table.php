<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name', 191); 
            $table->string('last_name', 191); 
            $table->string('email', 191)->unique();       
            $table->string('password');                    
            $table->string('picture')->default('avatar.png'); 
            $table->text('about')->nullable();             
            $table->string('admin')->default('false');
        });

        DB::table('users')->insert([
            'first_name' => 'Admin',
            'last_name' => 'Root',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'), 
            'admin' => 'true', 
        ]);
    }
    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
