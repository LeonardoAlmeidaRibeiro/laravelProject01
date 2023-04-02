<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Categoria::create([
            'nome' => 'Eletrônicos',
            'descricao' => 'Produtos eletrônicos',
        ]);
        Categoria::create([
            'nome' => 'Roupas',
            'descricao' => 'Roupas e acessórios',
        ]);
        Categoria::create([
            'nome' => 'Alimentos',
            'descricao' => 'Produtos alimentícios',
        ]);
        Categoria::create([
            'nome' => 'Casa e Jardim',
            'descricao' => 'Produtos para casa e jardim',
        ]);
        Categoria::create([
            'nome' => 'Livros',
            'descricao' => 'Livros de diversos gêneros',
        ]);
        Categoria::create([
            'nome' => 'Limpeza',
            'descricao' => 'Produtos para Limpeza',
        ]);
    }
}
