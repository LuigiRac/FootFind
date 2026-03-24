<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\FootMatch;

class FootMatchTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        $newMatch = new FootMatch();
        $newMatch->title = 'Partita amichevole';
        $newMatch->city = 'Milano';
        $newMatch->province = 'MI';
        $newMatch->field_name = 'Campo Centrale';
        $newMatch->field_type = '5';
        $newMatch->address = 'Via Roma 123';
        $newMatch->date_time = '2024-07-01 18:00:00';
        $newMatch->match_type = 'open';
        $newMatch->max_players = 10;       // 5vs5 → max 10 giocatori
        $newMatch->needed_players = null;  // open → non necessario
        $newMatch->role_needed = null;     // open → non necessario
        $newMatch->seeking_opponent = false; // open → non cerca squadra avversaria
        $newMatch->created_by = null;         // ID dell'utente creatore
        $newMatch->save();
    }
}
