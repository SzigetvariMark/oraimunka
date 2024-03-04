<?php
 
namespace Database\Seeders;
 
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
 
use App\Models\Kategoria;
use Illuminate\Database\Seeder;
 
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
 
        $kategoriak = ['Ház', 'Lakás', 'Építési telek', 'Garázs',
        'Mezőgazdasági terület', 'Ipari ingatlan'];
        foreach($kategoriak as $key => $value){
            Kategoria::create(['nev' => $value]);
        }
    }
}
 