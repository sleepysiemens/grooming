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
            $table->text('description');
            $table->decimal('price');
        });

        $datas=
            [
              [
                  'title'=>'Комплексный уход для собак',
                  'description'=>"Чистка ушей, глаз и желез,<br>
                  Механическая чистка зубов,<br>
                  Стрижка когтей, выстригание шерсти с подушечек лап,<br>
                  3-х этапное мытье профессиональной косметикой + сушка,<br>
                  Стрижка по породе или экспресс-линька для гладкошёрстных пород",
                  'price'=>'1500',
              ],
                [
                    'title'=>'Гигиенический уход для собак',
                    'description'=>"Чистка ушей, глаз и желез<br>Механическая чистка зубов<br>Стрижка когтей, выстригание шерсти с подушечек лап<br>3-х этапное мытье профессиональной косметикой + сушка",
                    'price'=>'1000',
                ],
                [
                    'title'=>'Экспресс-линька кошек',
                    'description'=>"Стрижка когтей<br>Чистка ушей<br>3-х этапное мытье профессиональной косметикой + сушка<br>Вычесывание шерсти профессиональными инструментами",
                    'price'=>'600',
                ],
                [
                    'title'=>'Стрижка кошек',
                    'description'=>"Стрижка когтей<br>Чистка ушей<br>Стрижка машинкой<br>3-х этапное мытье профессиональной косметикой + сушка",
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
