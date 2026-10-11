<?php

namespace Database\Seeders;


use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = [
            [
                'title' => 'Custos fixos', 
                'color' => '#B83737', 
                'user_id' => null, 
                'description' => 'Despesas essenciais e recorrentes para manter sua rotina, como aluguel, contas de consumo, internet e mensalidades.'
            ],
            [
                'title' => 'Conforto', 
                'color' => '#37B067', 
                'user_id' => null, 
                'description' => 'Gastos que proporcionam conveniência, lazer e bem-estar, como restaurantes, entretenimento, delivery e compras pessoais.'
            ],
            [
                'title' => 'Conhecimento', 
                'color' => '#F5EC7D', 
                'user_id' => null, 
                'description' => 'Investimentos no aprendizado e no desenvolvimento pessoal ou profissional, como cursos, livros, materiais de estudo e certificações.'
            ],
            [
                'title' => 'Metas', 
                'color' => '#C4E2FF', 
                'user_id' => null, 
                'description' => 'Gastos destinados a objetivos específicos, como viagens planejadas, aquisição de bens, projetos pessoais ou outras conquistas.'
            ],
            [
                'title' => 'Liberdade financeira', 
                'color' => '#699EC9', 
                'user_id' => null, 
                'description' => 'Recursos destinados à construção de patrimônio e à independência financeira, como aportes em investimentos, reservas financeiras e amortização de dívidas.'
            ],
        ];

        foreach ($tags as $tag){
            Tag::firstOrCreate([
                'title' => $tag['title'],
                'description' => $tag['description'],
                'color' => $tag['color'],
                'user_id' => $tag['user_id']
            ]);
        }
    }
}
