<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\FederativeUnit;

class FederativeUnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        FederativeUnit::firstOrCreate( [
            'name' => 'Acre',
        ] );

        FederativeUnit::firstOrCreate( [
            'name' => 'Alagoas',
        ] );

        FederativeUnit::firstOrCreate( [
            'name' => 'Amapá',
        ] );

        FederativeUnit::firstOrCreate( [
            'name' => 'Amazonas',
        ] );

        FederativeUnit::firstOrCreate( [
            'name' => 'Bahia',
        ] );

        FederativeUnit::firstOrCreate( [
            'name' => 'Ceará',
        ] );

        FederativeUnit::firstOrCreate( [
            'name' => 'Distrito Federal',
        ] );

        FederativeUnit::firstOrCreate( [
            'name' => 'Espírito Santo',
        ] );

        FederativeUnit::firstOrCreate( [
            'name' => 'Goiás',
        ] );

        FederativeUnit::firstOrCreate( [
            'name' => 'Maranhão',
        ] );

        FederativeUnit::firstOrCreate( [
            'name' => 'Mato Grosso',
        ] );

        FederativeUnit::firstOrCreate( [
            'name' => 'Mato Grosso do Sul',
        ] );

        FederativeUnit::firstOrCreate( [
            'name' => 'Minas Gerais',
        ] );

        FederativeUnit::firstOrCreate( [
            'name' => 'Pará',
        ] );

        FederativeUnit::firstOrCreate( [
            'name' => 'Paraíba',
        ] );

        FederativeUnit::firstOrCreate( [
            'name' => 'Paraná',
        ] );

        FederativeUnit::firstOrCreate( [
            'name' => 'Pernambuco',
        ] );

        FederativeUnit::firstOrCreate( [
            'name' => 'Piauí',
        ] );

        FederativeUnit::firstOrCreate( [
            'name' => 'Rio de Janeiro',
        ] );

        FederativeUnit::firstOrCreate( [
            'name' => 'Rio Grande do Norte',
        ] );

        FederativeUnit::firstOrCreate( [
            'name' => 'Rio Grande do Sul',
        ] );

        FederativeUnit::firstOrCreate( [
            'name' => 'Rondônia',
        ] );

        FederativeUnit::firstOrCreate( [
            'name' => 'Roraima',
        ] );

        FederativeUnit::firstOrCreate( [
            'name' => 'Santa Catarina',
        ] );

        FederativeUnit::firstOrCreate( [
            'name' => 'São Paulo',
        ] );

        FederativeUnit::firstOrCreate( [
            'name' => 'Sergipe',
        ] );

        FederativeUnit::firstOrCreate( [
            'name' => 'Tocantins',
        ] );
    }
}
