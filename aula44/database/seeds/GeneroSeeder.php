<?php

use Illuminate\Database\Seeder;

class GeneroSeeder.php extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   // $generos = Generos::all();
      //foreach($generos as $genero){
      //  $genero->delete();
        //}
        //
        //$genreo = Generos::create(['name' => 'Genero 1', 'ranking'=> 20]);
        //$genero->active
        $generos = factory(Generos::class)->times(50)->create();
    }
}
