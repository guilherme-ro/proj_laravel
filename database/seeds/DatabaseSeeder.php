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
        // $this->call(UsersTableSeeder::class);

        for ($i = 1; $i <= 10; $i++) {
            DB::table('enderecos')->insert([
            'endereco' => Str::random(10),
            'nro_endereco' => Str::random(10),
            'complemento' => Str::random(10),
            'bairro' => Str::random(10),
            'cidade' => Str::random(10),
            'uf' => Str::random(2),
            'cod_pessoa' => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        
            
        ]);
            }
    }
}