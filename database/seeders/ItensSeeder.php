<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Item;
class ItensSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Item::Insert([
            'img'=>'imagensItens/placeHolder.jpg',
            'nome'=>'Casaco 2',
            'localizacao'=>'Banheiro do Bloco A',
            'descricao'=>'Casaco Preto com 2 botoes faltando, com capuz',
        ]);
    }
}
