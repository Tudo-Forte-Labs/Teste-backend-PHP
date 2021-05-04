<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        State::firstOrCreate( [
            'name' => 'Acre',
        ] );

        State::firstOrCreate( [
            'name' => 'Alagoas',
        ] );

        State::firstOrCreate( [
            'name' => 'Amapá',
        ] );

        State::firstOrCreate( [
            'name' => 'Amazonas',
        ] );

        State::firstOrCreate( [
            'name' => 'Bahia',
        ] );

        State::firstOrCreate( [
            'name' => 'Ceará',
        ] );

        State::firstOrCreate( [
            'name' => 'Distrito Federal',
        ] );

        State::firstOrCreate( [
            'name' => 'Espírito Santo',
        ] );

        State::firstOrCreate( [
            'name' => 'Goiás',
        ] );

        State::firstOrCreate( [
            'name' => 'Maranhão',
        ] );

        State::firstOrCreate( [
            'name' => 'Mato Grosso',
        ] );

        State::firstOrCreate( [
            'name' => 'Mato Grosso do Sul',
        ] );

        State::firstOrCreate( [
            'name' => 'Minas Gerais',
        ] );

        State::firstOrCreate( [
            'name' => 'Pará',
        ] );

        State::firstOrCreate( [
            'name' => 'Paraíba',
        ] );

        State::firstOrCreate( [
            'name' => 'Paraná',
        ] );

        State::firstOrCreate( [
            'name' => 'Pernambuco',
        ] );

        State::firstOrCreate( [
            'name' => 'Piauí',
        ] );

        State::firstOrCreate( [
            'name' => 'Rio de Janeiro',
        ] );

        State::firstOrCreate( [
            'name' => 'Rio Grande do Norte',
        ] );

        State::firstOrCreate( [
            'name' => 'Rio Grande do Sul',
        ] );

        State::firstOrCreate( [
            'name' => 'Rondônia',
        ] );

        State::firstOrCreate( [
            'name' => 'Roraima',
        ] );

        State::firstOrCreate( [
            'name' => 'Santa Catarina',
        ] );

        State::firstOrCreate( [
            'name' => 'São Paulo',
        ] );

        State::firstOrCreate( [
            'name' => 'Sergipe',
        ] );

        State::firstOrCreate( [
            'name' => 'Tocantins',
        ] );
    }
}
