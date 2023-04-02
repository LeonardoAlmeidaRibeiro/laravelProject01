<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Produto;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            UserSeeder::class,
            CategoriaSeeder::class,
            ProdutoSeeder::class,
        ]);
    }
}
// recuperar a tabela produtos
// // Schema::create('produtos', function (Blueprint $table) {
// //     $table->bigIncrements('id');
// //     $table->string('nome');
// //     $table->text('descricao');
// //     $table->double('preco', 10, 2);
// //     $table->string('slug');
// //     $table->string('imagem')->nullable();
// //     $table->unsignedBigInteger('id_categoria')->references('id')->on('categorias')->onDelete('cascade')->onUpdate('cascade');
// //     $table->unsignedBigInteger('id_user')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');

// //     $table->timestamps();
// // });
