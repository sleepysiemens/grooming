<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Products;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title');
            $table->decimal('price');
        });

        $datas=
            [
              [
                  'title'=>'Комплексный уход для собак',
                  'price'=>'1500',
              ],
                [
                    'title'=>'Гигиенический уход для собак',
                    'price'=>'1000',
                ],
                [
                    'title'=>'Экспресс-линька кошек',
                    'price'=>'600',
                ],
                [
                    'title'=>'Стрижка кошек',
                    'price'=>'800',
                ],
            ];

        foreach ($datas as $data) {
            Products::create($data);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
