<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CategoriaSeeder::class);
        $this->call(SubcategoriaSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(TiponotificacionesSeeder::class);
        $this->call(NotificacionesSeeder::class);
        $this->call(PlanSeeder::class);
        $this->call(DepartamentoSeeder::class);
        $this->call(MemoSeeder::class);
        $this->call(TipomemoSeeder::class);
    }
}
