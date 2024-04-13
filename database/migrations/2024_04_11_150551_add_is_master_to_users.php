<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->boolean('is_master')->default(false);
        });


        User::create(
            [
                'name'=>'Мастер 1',
                'email'=>'master@master.com',
                'password'=>Hash::make('master1234'),
                'is_master'=>true,
            ]);

        User::create(
            [
                'name'=>'Мастер 2',
                'email'=>'master2@master.com',
                'password'=>Hash::make('master1234'),
                'is_master'=>true,
            ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
