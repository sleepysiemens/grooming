<?php

use App\Models\ProductInclude;
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
        Schema::create('product_includes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('product_id');
            $table->string('title');

            $table->foreign('product_id')->references('id')->on('products');
        });
        $datas=
            [
                ['product_id'=>1, 'title'=>'Чистка ушей, глаз и желез'],
                ['product_id'=>1, 'title'=>'Механическая чистка зубов'],
                ['product_id'=>1, 'title'=>'Стрижка когтей, выстригание шерсти с подушечек лап'],
                ['product_id'=>1, 'title'=>'3-х этапное мытье профессиональной косметикой + сушка'],
                ['product_id'=>1, 'title'=>'Стрижка по породе или экспресс-линька для гладкошёрстных пород'],

                ['product_id'=>2, 'title'=>'Чистка ушей, глаз и желез'],
                ['product_id'=>2, 'title'=>'Механическая чистка зубов'],
                ['product_id'=>2, 'title'=>'Стрижка когтей, выстригание шерсти с подушечек лап'],
                ['product_id'=>2, 'title'=>'3-х этапное мытье профессиональной косметикой + сушка'],

                ['product_id'=>3, 'title'=>'Стрижка когтей'],
                ['product_id'=>3, 'title'=>'Чистка ушей'],
                ['product_id'=>3, 'title'=>'3-х этапное мытье профессиональной косметикой + сушка'],
                ['product_id'=>3, 'title'=>'Вычесывание шерсти профессиональными инструментами'],

                ['product_id'=>4, 'title'=>'Стрижка когтей'],
                ['product_id'=>4, 'title'=>'Чистка ушей'],
                ['product_id'=>4, 'title'=>'3-х этапное мытье профессиональной косметикой + сушка'],

            ];

        foreach ($datas as $data)
        {
            ProductInclude::create($data);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_includes');
    }
};
