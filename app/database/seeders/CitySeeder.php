<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\FederativeUnit;
use Illuminate\Database\Seeder;


class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        City::firstOrCreate( [

            'name' => 'Alta Floresta Do Oeste',
            'federative_unit_id' =>  FederativeUnit::where('name','Rondônia')->first()->id
        ] );

        City::firstOrCreate( [

            'name' => 'Ariquemes',
            'federative_unit_id' =>  FederativeUnit::where('name','Rondônia')->first()->id
        ] );

        City::firstOrCreate( [

            'name' => 'Cabixi',
            'federative_unit_id' =>  FederativeUnit::where('name','Rondônia')->first()->id
        ] );

        City::firstOrCreate( [

            'name' => 'Cacoal',
            'federative_unit_id' =>  FederativeUnit::where('name','Rondônia')->first()->id
        ] );

        City::firstOrCreate( [

            'name' => 'Cerejeiras',
            'federative_unit_id' =>  FederativeUnit::where('name','Rondônia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Colorado do Oeste',
            'federative_unit_id' =>  FederativeUnit::where('name','Rondônia')->first()->id
        ] );

        City::firstOrCreate( [

            'name' => 'Corumbiara',
            'federative_unit_id' =>  FederativeUnit::where('name','Rondônia')->first()->id
        ] );

        City::firstOrCreate( [

            'name' => 'Costa Marques',
            'federative_unit_id' =>  FederativeUnit::where('name','Rondônia')->first()->id
        ] );

        City::firstOrCreate( [

            'name' => 'Espigão Do Oeste',
            'federative_unit_id' =>  FederativeUnit::where('name','Rondônia')->first()->id
        ] );

        City::firstOrCreate( [

            'name' => 'Guajará-Mirim',
            'federative_unit_id' =>  FederativeUnit::where('name','Rondônia')->first()->id
        ] );

        City::firstOrCreate( [

            'name' => 'Jaru',
            'federative_unit_id' =>  FederativeUnit::where('name','Rondônia')->first()->id
        ] );

        City::firstOrCreate( [

            'name' => 'Ji-Paraná',
            'federative_unit_id' =>  FederativeUnit::where('name','Rondônia')->first()->id
        ] );

        City::firstOrCreate( [

            'name' => 'Machadinho Do Oeste',
            'federative_unit_id' =>  FederativeUnit::where('name','Rondônia')->first()->id
        ] );

        City::firstOrCreate( [

            'name' => 'Nova Brasilândia Do Oeste',
            'federative_unit_id' =>  FederativeUnit::where('name','Rondônia')->first()->id
        ] );

        City::firstOrCreate( [

            'name' => 'Ouro Preto do Oeste',
            'federative_unit_id' =>  FederativeUnit::where('name','Rondônia')->first()->id
        ] );

        City::firstOrCreate( [

            'name' => 'Pimenta Bueno',
            'federative_unit_id' =>  FederativeUnit::where('name','Rondônia')->first()->id
        ] );

        City::firstOrCreate( [

            'name' => 'Porto Velho',
            'federative_unit_id' =>  FederativeUnit::where('name','Rondônia')->first()->id
        ] );

        City::firstOrCreate( [

            'name' => 'Presidente Médici',
            'federative_unit_id' =>  FederativeUnit::where('name','Rondônia')->first()->id
        ] );

        City::firstOrCreate( [

            'name' => 'Rio Crespo',
            'federative_unit_id' =>  FederativeUnit::where('name','Rondônia')->first()->id
        ] );

        City::firstOrCreate( [

            'name' => 'Rolim de Moura',
            'federative_unit_id' =>  FederativeUnit::where('name','Rondônia')->first()->id
        ] );

        City::firstOrCreate( [

            'name' => 'Santa Luzia Do Oeste',
            'federative_unit_id' =>  FederativeUnit::where('name','Rondônia')->first()->id
        ] );

        City::firstOrCreate( [

            'name' => 'Vilhena',
            'federative_unit_id' =>  FederativeUnit::where('name','Rondônia')->first()->id
        ] );

        City::firstOrCreate( [

            'name' => 'São Miguel do Guaporé',
            'federative_unit_id' =>  FederativeUnit::where('name','Rondônia')->first()->id
        ] );

        City::firstOrCreate( [

            'name' => 'Nova Mamoré',
            'federative_unit_id' =>  FederativeUnit::where('name','Rondônia')->first()->id
        ] );

        City::firstOrCreate( [

            'name' => 'Alvorada Do Oeste',
            'federative_unit_id' =>  FederativeUnit::where('name','Rondônia')->first()->id
        ] );

        City::firstOrCreate( [

            'name' => 'Alto Alegre dos Parecis',
            'federative_unit_id' =>  FederativeUnit::where('name','Rondônia')->first()->id
        ] );

        City::firstOrCreate( [

            'name' => 'Alto Paraíso',
            'federative_unit_id' =>  FederativeUnit::where('name','Rondônia')->first()->id
        ] );

        City::firstOrCreate( [

            'name' => 'Buritis',
            'federative_unit_id' =>  FederativeUnit::where('name','Rondônia')->first()->id
        ] );

        City::firstOrCreate( [

            'name' => 'Novo Horizonte do Oeste',
            'federative_unit_id' =>  FederativeUnit::where('name','Rondônia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cacaulândia',
            'federative_unit_id' =>  FederativeUnit::where('name','Rondônia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Campo Novo de Rondônia',
            'federative_unit_id' =>  FederativeUnit::where('name','Rondônia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Candeias do Jamari',
            'federative_unit_id' =>  FederativeUnit::where('name','Rondônia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Castanheiras',
            'federative_unit_id' =>  FederativeUnit::where('name','Rondônia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Chupinguaia',
            'federative_unit_id' =>  FederativeUnit::where('name','Rondônia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cujubim',
            'federative_unit_id' =>  FederativeUnit::where('name','Rondônia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Governador Jorge Teixeira',
            'federative_unit_id' =>  FederativeUnit::where('name','Rondônia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itapuã do Oeste',
            'federative_unit_id' =>  FederativeUnit::where('name','Rondônia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ministro Andreazza',
            'federative_unit_id' =>  FederativeUnit::where('name','Rondônia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Mirante da Serra',
            'federative_unit_id' =>  FederativeUnit::where('name','Rondônia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Monte Negro',
            'federative_unit_id' =>  FederativeUnit::where('name','Rondônia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nova União',
            'federative_unit_id' =>  FederativeUnit::where('name','Rondônia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Parecis',
            'federative_unit_id' =>  FederativeUnit::where('name','Rondônia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pimenteiras do Oeste',
            'federative_unit_id' =>  FederativeUnit::where('name','Rondônia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Primavera de Rondônia',
            'federative_unit_id' =>  FederativeUnit::where('name','Rondônia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Felipe Do Oeste',
            'federative_unit_id' =>  FederativeUnit::where('name','Rondônia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Francisco do Guaporé',
            'federative_unit_id' =>  FederativeUnit::where('name','Rondônia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Seringueiras',
            'federative_unit_id' =>  FederativeUnit::where('name','Rondônia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Teixeirópolis',
            'federative_unit_id' =>  FederativeUnit::where('name','Rondônia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Theobroma',
            'federative_unit_id' =>  FederativeUnit::where('name','Rondônia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Urupá',
            'federative_unit_id' =>  FederativeUnit::where('name','Rondônia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Vale do Anari',
            'federative_unit_id' =>  FederativeUnit::where('name','Rondônia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Vale do Paraíso',
            'federative_unit_id' =>  FederativeUnit::where('name','Rondônia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Acrelândia',
            'federative_unit_id' =>  FederativeUnit::where('name','Acre')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Assis Brasil',
            'federative_unit_id' =>  FederativeUnit::where('name','Acre')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Brasiléia',
            'federative_unit_id' =>  FederativeUnit::where('name','Acre')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Bujari',
            'federative_unit_id' =>  FederativeUnit::where('name','Acre')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Capixaba',
            'federative_unit_id' =>  FederativeUnit::where('name','Acre')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cruzeiro do Sul',
            'federative_unit_id' =>  FederativeUnit::where('name','Acre')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Epitaciolândia',
            'federative_unit_id' =>  FederativeUnit::where('name','Acre')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Feijó',
            'federative_unit_id' =>  FederativeUnit::where('name','Acre')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Jordão',
            'federative_unit_id' =>  FederativeUnit::where('name','Acre')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Mâncio Lima',
            'federative_unit_id' =>  FederativeUnit::where('name','Acre')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Manoel Urbano',
            'federative_unit_id' =>  FederativeUnit::where('name','Acre')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Marechal Thaumaturgo',
            'federative_unit_id' =>  FederativeUnit::where('name','Acre')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Plácido de Castro',
            'federative_unit_id' =>  FederativeUnit::where('name','Acre')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Porto Walter',
            'federative_unit_id' =>  FederativeUnit::where('name','Acre')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Rio Branco',
            'federative_unit_id' =>  FederativeUnit::where('name','Acre')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Rodrigues Alves',
            'federative_unit_id' =>  FederativeUnit::where('name','Acre')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Rosa do Purus',
            'federative_unit_id' =>  FederativeUnit::where('name','Acre')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Senador Guiomard',
            'federative_unit_id' =>  FederativeUnit::where('name','Acre')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Sena Madureira',
            'federative_unit_id' =>  FederativeUnit::where('name','Acre')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Tarauacá',
            'federative_unit_id' =>  FederativeUnit::where('name','Acre')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Xapuri',
            'federative_unit_id' =>  FederativeUnit::where('name','Acre')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Porto Acre',
            'federative_unit_id' =>  FederativeUnit::where('name','Acre')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Alvarães',
            'federative_unit_id' =>  FederativeUnit::where('name','Amazonas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Amaturá',
            'federative_unit_id' =>  FederativeUnit::where('name','Amazonas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Anamã',
            'federative_unit_id' =>  FederativeUnit::where('name','Amazonas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Anori',
            'federative_unit_id' =>  FederativeUnit::where('name','Amazonas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Apuí',
            'federative_unit_id' =>  FederativeUnit::where('name','Amazonas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Atalaia do Norte',
            'federative_unit_id' =>  FederativeUnit::where('name','Amazonas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Autazes',
            'federative_unit_id' =>  FederativeUnit::where('name','Amazonas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Barcelos',
            'federative_unit_id' =>  FederativeUnit::where('name','Amazonas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Barreirinha',
            'federative_unit_id' =>  FederativeUnit::where('name','Amazonas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Benjamin Constant',
            'federative_unit_id' =>  FederativeUnit::where('name','Amazonas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Beruri',
            'federative_unit_id' =>  FederativeUnit::where('name','Amazonas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Boa Vista do Ramos',
            'federative_unit_id' =>  FederativeUnit::where('name','Amazonas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Boca do Acre',
            'federative_unit_id' =>  FederativeUnit::where('name','Amazonas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Borba',
            'federative_unit_id' =>  FederativeUnit::where('name','Amazonas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Caapiranga',
            'federative_unit_id' =>  FederativeUnit::where('name','Amazonas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Canutama',
            'federative_unit_id' =>  FederativeUnit::where('name','Amazonas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Carauari',
            'federative_unit_id' =>  FederativeUnit::where('name','Amazonas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Careiro',
            'federative_unit_id' =>  FederativeUnit::where('name','Amazonas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Careiro da Várzea',
            'federative_unit_id' =>  FederativeUnit::where('name','Amazonas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Coari',
            'federative_unit_id' =>  FederativeUnit::where('name','Amazonas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Codajás',
            'federative_unit_id' =>  FederativeUnit::where('name','Amazonas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Eirunepé',
            'federative_unit_id' =>  FederativeUnit::where('name','Amazonas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Envira',
            'federative_unit_id' =>  FederativeUnit::where('name','Amazonas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Fonte Boa',
            'federative_unit_id' =>  FederativeUnit::where('name','Amazonas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Guajará',
            'federative_unit_id' =>  FederativeUnit::where('name','Amazonas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Humaitá',
            'federative_unit_id' =>  FederativeUnit::where('name','Amazonas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ipixuna',
            'federative_unit_id' =>  FederativeUnit::where('name','Amazonas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Iranduba',
            'federative_unit_id' =>  FederativeUnit::where('name','Amazonas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itacoatiara',
            'federative_unit_id' =>  FederativeUnit::where('name','Amazonas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itamarati',
            'federative_unit_id' =>  FederativeUnit::where('name','Amazonas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itapiranga',
            'federative_unit_id' =>  FederativeUnit::where('name','Amazonas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Japurá',
            'federative_unit_id' =>  FederativeUnit::where('name','Amazonas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Juruá',
            'federative_unit_id' =>  FederativeUnit::where('name','Amazonas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Jutaí',
            'federative_unit_id' =>  FederativeUnit::where('name','Amazonas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Lábrea',
            'federative_unit_id' =>  FederativeUnit::where('name','Amazonas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Manacapuru',
            'federative_unit_id' =>  FederativeUnit::where('name','Amazonas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Manaquiri',
            'federative_unit_id' =>  FederativeUnit::where('name','Amazonas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Manaus',
            'federative_unit_id' =>  FederativeUnit::where('name','Amazonas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Manicoré',
            'federative_unit_id' =>  FederativeUnit::where('name','Amazonas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Maraã',
            'federative_unit_id' =>  FederativeUnit::where('name','Amazonas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Maués',
            'federative_unit_id' =>  FederativeUnit::where('name','Amazonas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nhamundá',
            'federative_unit_id' =>  FederativeUnit::where('name','Amazonas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nova Olinda do Norte',
            'federative_unit_id' =>  FederativeUnit::where('name','Amazonas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Novo Airão',
            'federative_unit_id' =>  FederativeUnit::where('name','Amazonas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Novo Aripuanã',
            'federative_unit_id' =>  FederativeUnit::where('name','Amazonas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Parintins',
            'federative_unit_id' =>  FederativeUnit::where('name','Amazonas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pauini',
            'federative_unit_id' =>  FederativeUnit::where('name','Amazonas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Presidente Figueiredo',
            'federative_unit_id' =>  FederativeUnit::where('name','Amazonas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Rio Preto da Eva',
            'federative_unit_id' =>  FederativeUnit::where('name','Amazonas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Isabel do Rio Negro',
            'federative_unit_id' =>  FederativeUnit::where('name','Amazonas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santo Antônio do Içá',
            'federative_unit_id' =>  FederativeUnit::where('name','Amazonas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Gabriel da Cachoeira',
            'federative_unit_id' =>  FederativeUnit::where('name','Amazonas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Paulo de Olivença',
            'federative_unit_id' =>  FederativeUnit::where('name','Amazonas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Sebastião do Uatumã',
            'federative_unit_id' =>  FederativeUnit::where('name','Amazonas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Silves',
            'federative_unit_id' =>  FederativeUnit::where('name','Amazonas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Tabatinga',
            'federative_unit_id' =>  FederativeUnit::where('name','Amazonas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Tapauá',
            'federative_unit_id' =>  FederativeUnit::where('name','Amazonas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Tefé',
            'federative_unit_id' =>  FederativeUnit::where('name','Amazonas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Tonantins',
            'federative_unit_id' =>  FederativeUnit::where('name','Amazonas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Uarini',
            'federative_unit_id' =>  FederativeUnit::where('name','Amazonas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Urucará',
            'federative_unit_id' =>  FederativeUnit::where('name','Amazonas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Urucurituba',
            'federative_unit_id' =>  FederativeUnit::where('name','Amazonas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Amajari',
            'federative_unit_id' =>  FederativeUnit::where('name','Roraima')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Alto Alegre',
            'federative_unit_id' =>  FederativeUnit::where('name','Roraima')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Boa Vista',
            'federative_unit_id' =>  FederativeUnit::where('name','Roraima')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Bonfim',
            'federative_unit_id' =>  FederativeUnit::where('name','Roraima')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cantá',
            'federative_unit_id' =>  FederativeUnit::where('name','Roraima')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Caracaraí',
            'federative_unit_id' =>  FederativeUnit::where('name','Roraima')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Caroebe',
            'federative_unit_id' =>  FederativeUnit::where('name','Roraima')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Iracema',
            'federative_unit_id' =>  FederativeUnit::where('name','Roraima')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Mucajaí',
            'federative_unit_id' =>  FederativeUnit::where('name','Roraima')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Normandia',
            'federative_unit_id' =>  FederativeUnit::where('name','Roraima')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pacaraima',
            'federative_unit_id' =>  FederativeUnit::where('name','Roraima')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Rorainópolis',
            'federative_unit_id' =>  FederativeUnit::where('name','Roraima')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São João da Baliza',
            'federative_unit_id' =>  FederativeUnit::where('name','Roraima')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Luiz',
            'federative_unit_id' =>  FederativeUnit::where('name','Roraima')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Uiramutã',
            'federative_unit_id' =>  FederativeUnit::where('name','Roraima')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Abaetetuba',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Abel Figueiredo',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Acará',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Afuá',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Água Azul do Norte',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Alenquer',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Almeirim',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Altamira',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Anajás',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ananindeua',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Anapu',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Augusto Corrêa',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Aurora do Pará',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Aveiro',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Bagre',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Baião',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Bannach',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Barcarena',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Belém',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Belterra',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Benevides',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Bom Jesus do Tocantins',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Bonito',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Bragança',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Brasil Novo',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Brejo Grande do Araguaia',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Breu Branco',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Breves',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Bujaru',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cachoeira do Piriá',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cachoeira do Arari',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cametá',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Canaã dos Carajás',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Capanema',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Capitão Poço',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Castanhal',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Chaves',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Colares',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Conceição do Araguaia',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Concórdia do Pará',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cumaru do Norte',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Curionópolis',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Curralinho',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Curuá',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Curuçá',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Dom Eliseu',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Eldorado dos Carajás',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Faro',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Floresta do Araguaia',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Garrafão do Norte',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Goianésia do Pará',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Gurupá',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Igarapé-Açu',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Igarapé-Miri',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Inhangapi',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ipixuna do Pará',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Irituia',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itaituba',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itupiranga',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Jacareacanga',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Jacundá',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Juruti',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Limoeiro do Ajuru',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Mãe do Rio',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Magalhães Barata',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Marabá',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Maracanã',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Marapanim',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Marituba',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Medicilândia',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Melgaço',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Mocajuba',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Moju',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Mojuí dos Campos',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Monte Alegre',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Muaná',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nova Esperança do Piriá',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nova Ipixuna',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nova Timboteua',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Novo Progresso',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Novo Repartimento',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Óbidos',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Oeiras do Pará',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Oriximiná',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ourém',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ourilândia do Norte',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pacajá',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Palestina do Pará',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Paragominas',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Parauapebas',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pau D Arco',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Peixe-Boi',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Piçarra',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Placas',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ponta de Pedras',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Portel',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Porto de Moz',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Prainha',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Primavera',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Quatipuru',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Redenção',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Rio Maria',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Rondon do Pará',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Rurópolis',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Salinópolis',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Salvaterra',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Bárbara do Pará',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Cruz do Arari',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Isabel do Pará',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Luzia do Pará',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Maria das Barreiras',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Maria do Pará',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santana do Araguaia',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santarém',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santarém Novo',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santo Antônio do Tauá',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Caetano de Odivelas',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Domingos do Araguaia',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Domingos do Capim',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Félix do Xingu',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Francisco do Pará',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Geraldo do Araguaia',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São João da Ponta',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São João de Pirabas',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São João do Araguaia',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Miguel do Guamá',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Sebastião da Boa Vista',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Sapucaia',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Senador José Porfírio',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Soure',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Tailândia',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Terra Alta',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Terra Santa',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Tomé-Açu',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Tracuateua',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Trairão',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Tucumã',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Tucuruí',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ulianópolis',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Uruará',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Vigia',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Viseu',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Vitória do Xingu',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Xinguara',
            'federative_unit_id' =>  FederativeUnit::where('name','Pará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Serra do Navio',
            'federative_unit_id' =>  FederativeUnit::where('name','Amapá')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Amapá',
            'federative_unit_id' =>  FederativeUnit::where('name','Amapá')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pedra Branca do Amapari',
            'federative_unit_id' =>  FederativeUnit::where('name','Amapá')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Calçoene',
            'federative_unit_id' =>  FederativeUnit::where('name','Amapá')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cutias',
            'federative_unit_id' =>  FederativeUnit::where('name','Amapá')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ferreira Gomes',
            'federative_unit_id' =>  FederativeUnit::where('name','Amapá')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itaubal',
            'federative_unit_id' =>  FederativeUnit::where('name','Amapá')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Laranjal do Jari',
            'federative_unit_id' =>  FederativeUnit::where('name','Amapá')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Macapá',
            'federative_unit_id' =>  FederativeUnit::where('name','Amapá')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Mazagão',
            'federative_unit_id' =>  FederativeUnit::where('name','Amapá')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Oiapoque',
            'federative_unit_id' =>  FederativeUnit::where('name','Amapá')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Porto Grande',
            'federative_unit_id' =>  FederativeUnit::where('name','Amapá')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pracuúba',
            'federative_unit_id' =>  FederativeUnit::where('name','Amapá')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santana',
            'federative_unit_id' =>  FederativeUnit::where('name','Amapá')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Tartarugalzinho',
            'federative_unit_id' =>  FederativeUnit::where('name','Amapá')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Vitória do Jari',
            'federative_unit_id' =>  FederativeUnit::where('name','Amapá')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Abreulândia',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Aguiarnópolis',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Aliança do Tocantins',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Almas',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Alvorada',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ananás',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Angico',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Aparecida do Rio Negro',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Aragominas',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Araguacema',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Araguaçu',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Araguaína',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Araguanã',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Araguatins',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Arapoema',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Arraias',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Augustinópolis',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Aurora do Tocantins',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Axixá do Tocantins',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Babaçulândia',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Bandeirantes do Tocantins',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Barra do Ouro',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Barrolândia',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Bernardo Sayão',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Bom Jesus do Tocantins',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Brasilândia do Tocantins',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Brejinho de Nazaré',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Buriti do Tocantins',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cachoeirinha',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Campos Lindos',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cariri do Tocantins',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Carmolândia',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Carrasco Bonito',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Caseara',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Centenário',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Chapada de Areia',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Chapada da Natividade',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Colinas do Tocantins',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Combinado',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Conceição do Tocantins',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Couto Magalhães',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cristalândia',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Crixás do Tocantins',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Darcinópolis',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Dianópolis',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Divinópolis do Tocantins',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Dois Irmãos do Tocantins',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Dueré',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Esperantina',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Fátima',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Figueirópolis',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Filadélfia',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Formoso do Araguaia',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Fortaleza do Tabocão',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Goianorte',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Goiatins',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Guaraí',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Gurupi',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ipueiras',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itacajá',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itaguatins',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itapiratins',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itaporã do Tocantins',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Jaú do Tocantins',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Juarina',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Lagoa da Confusão',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Lagoa do Tocantins',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Lajeado',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Lavandeira',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Lizarda',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Luzinópolis',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Marianópolis do Tocantins',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Mateiros',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Maurilândia do Tocantins',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Miracema do Tocantins',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Miranorte',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Monte do Carmo',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Monte Santo do Tocantins',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Palmeiras do Tocantins',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Muricilândia',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Natividade',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nazaré',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nova Olinda',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nova Rosalândia',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Novo Acordo',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Novo Alegre',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Novo Jardim',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Oliveira de Fátima',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Palmeirante',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Palmeirópolis',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Paraíso do Tocantins',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Paranã',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pau D Arco',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pedro Afonso',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Peixe',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pequizeiro',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Colméia',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pindorama do Tocantins',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Piraquê',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pium',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ponte Alta do Bom Jesus',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ponte Alta do Tocantins',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Porto Alegre do Tocantins',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Porto Nacional',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Praia Norte',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Presidente Kennedy',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pugmil',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Recursolândia',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Riachinho',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Rio da Conceição',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Rio dos Bois',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Rio Sono',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Sampaio',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Sandolândia',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Fé do Araguaia',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Maria do Tocantins',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Rita do Tocantins',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Rosa do Tocantins',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Tereza do Tocantins',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Terezinha do Tocantins',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Bento do Tocantins',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Félix do Tocantins',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Miguel do Tocantins',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Salvador do Tocantins',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Sebastião do Tocantins',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Valério',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Silvanópolis',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Sítio Novo do Tocantins',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Sucupira',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Taguatinga',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Taipas do Tocantins',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Talismã',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Palmas',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Tocantínia',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Tocantinópolis',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Tupirama',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Tupiratins',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Wanderlândia',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Xambioá',
            'federative_unit_id' =>  FederativeUnit::where('name','Tocantins')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Açailândia',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Afonso Cunha',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Água Doce do Maranhão',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Alcântara',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Aldeias Altas',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Altamira do Maranhão',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Alto Alegre do Maranhão',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Alto Alegre do Pindaré',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Alto Parnaíba',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Amapá do Maranhão',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Amarante do Maranhão',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Anajatuba',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Anapurus',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Apicum-Açu',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Araguanã',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Araioses',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Arame',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Arari',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Axixá',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Bacabal',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Bacabeira',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Bacuri',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Bacurituba',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Balsas',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Barão de Grajaú',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Barra do Corda',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Barreirinhas',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Belágua',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Bela Vista do Maranhão',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Benedito Leite',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Bequimão',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Bernardo do Mearim',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Boa Vista do Gurupi',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Bom Jardim',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Bom Jesus das Selvas',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Bom Lugar',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Brejo',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Brejo de Areia',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Buriti',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Buriti Bravo',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Buriticupu',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Buritirana',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cachoeira Grande',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cajapió',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cajari',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Campestre do Maranhão',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cândido Mendes',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cantanhede',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Capinzal do Norte',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );

        City::firstOrCreate( [

            'name' => 'Carolina',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Carutapera',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Caxias',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cedral',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Central do Maranhão',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Centro do Guilherme',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Centro Novo do Maranhão',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Chapadinha',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cidelândia',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Codó',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Coelho Neto',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Colinas',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Conceição do Lago-Açu',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Coroatá',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cururupu',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Davinópolis',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Dom Pedro',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Duque Bacelar',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Esperantinópolis',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Estreito',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Feira Nova do Maranhão',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Fernando Falcão',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Formosa da Serra Negra',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Fortaleza dos Nogueiras',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Fortuna',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Godofredo Viana',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Gonçalves Dias',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Governador Archer',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Governador Edison Lobão',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Governador Eugênio Barros',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Governador Luiz Rocha',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Governador Newton Bello',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Governador Nunes Freire',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Graça Aranha',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Grajaú',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Guimarães',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Humberto de Campos',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Icatu',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Igarapé do Meio',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Igarapé Grande',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Imperatriz',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itaipava do Grajaú',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itapecuru Mirim',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itinga do Maranhão',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Jatobá',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Jenipapo dos Vieiras',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'João Lisboa',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Joselândia',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Junco do Maranhão',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Lago da Pedra',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Lago do Junco',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Lago Verde',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Lagoa do Mato',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Lago dos Rodrigues',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Lagoa Grande do Maranhão',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Lajeado Novo',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Lima Campos',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Loreto',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Luís Domingues',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Magalhães de Almeida',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Maracaçumé',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Marajá do Sena',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Maranhãozinho',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Mata Roma',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Matinha',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Matões',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Matões do Norte',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Milagres do Maranhão',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Mirador',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Miranda do Norte',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Mirinzal',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Monção',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Montes Altos',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Morros',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nina Rodrigues',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nova Colinas',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nova Iorque',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nova Olinda do Maranhão',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Olho D Água das Cunhãs',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Olinda Nova do Maranhão',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Paço do Lumiar',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Palmeirândia',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Paraibano',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Parnarama',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Passagem Franca',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pastos Bons',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Paulino Neves',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Paulo Ramos',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pedreiras',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pedro do Rosário',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Penalva',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Peri Mirim',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Peritoró',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pindaré-Mirim',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pinheiro',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pio XII',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pirapemas',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Poção de Pedras',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Porto Franco',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Porto Rico do Maranhão',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Presidente Dutra',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Presidente Juscelino',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Presidente Médici',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Presidente Sarney',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Presidente Vargas',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Primeira Cruz',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Raposa',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Riachão',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ribamar Fiquene',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Rosário',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Sambaíba',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Filomena do Maranhão',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Helena',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Inês',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Luzia',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Luzia do Paruá',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Quitéria do Maranhão',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Rita',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santana do Maranhão',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santo Amaro do Maranhão',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santo Antônio dos Lopes',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Benedito do Rio Preto',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Bento',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Bernardo',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Domingos do Azeitão',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Domingos do Maranhão',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Félix de Balsas',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Francisco do Brejão',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Francisco do Maranhão',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São João Batista',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São João do Carú',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São João do Paraíso',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São João do Soter',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São João dos Patos',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São José de Ribamar',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São José dos Basílios',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Luís',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Luís Gonzaga do Maranhão',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Mateus do Maranhão',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Pedro da Água Branca',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Pedro dos Crentes',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Raimundo das Mangabeiras',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Raimundo do Doca Bezerra',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Roberto',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Vicente Ferrer',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Satubinha',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Senador Alexandre Costa',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Senador La Rocque',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Serrano do Maranhão',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Sítio Novo',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Sucupira do Norte',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Sucupira do Riachão',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Tasso Fragoso',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Timbiras',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Timon',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Trizidela do Vale',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Tufilândia',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Tuntum',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Turiaçu',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Turilândia',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Tutóia',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Urbano Santos',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Vargem Grande',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Viana',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Vila Nova dos Martírios',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Vitória do Mearim',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Vitorino Freire',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Zé Doca',
            'federative_unit_id' =>  FederativeUnit::where('name','Maranhão')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Acauã',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Agricolândia',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Água Branca',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Alagoinha do Piauí',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Alegrete do Piauí',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Alto Longá',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Altos',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Alvorada do Gurguéia',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Amarante',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Angical do Piauí',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Anísio de Abreu',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Antônio Almeida',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Aroazes',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Aroeiras do Itaim',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Arraial',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Assunção do Piauí',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Avelino Lopes',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Baixa Grande do Ribeiro',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Barra D Alcântara',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Barras',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Barreiras do Piauí',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Barro Duro',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Batalha',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Bela Vista do Piauí',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Belém do Piauí',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Beneditinos',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Bertolínia',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Betânia do Piauí',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Boa Hora',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Bocaina',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Bom Jesus',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Bom Princípio do Piauí',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Bonfim do Piauí',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Boqueirão do Piauí',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Brasileira',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Brejo do Piauí',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Buriti dos Lopes',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Buriti dos Montes',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cabeceiras do Piauí',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cajazeiras do Piauí',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cajueiro da Praia',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Caldeirão Grande do Piauí',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Campinas do Piauí',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Campo Alegre do Fidalgo',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Campo Grande do Piauí',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Campo Largo do Piauí',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Campo Maior',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Canavieira',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Canto do Buriti',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Capitão de Campos',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Capitão Gervásio Oliveira',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Caracol',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Caraúbas do Piauí',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Caridade do Piauí',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Castelo do Piauí',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Caxingó',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cocal',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cocal de Telha',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cocal dos Alves',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Coivaras',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Colônia do Gurguéia',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Colônia do Piauí',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Conceição do Canindé',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Coronel José Dias',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Corrente',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cristalândia do Piauí',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cristino Castro',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Curimatá',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Currais',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Curralinhos',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Curral Novo do Piauí',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Demerval Lobão',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Dirceu Arcoverde',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Dom Expedito Lopes',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Domingos Mourão',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Dom Inocêncio',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Elesbão Veloso',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Eliseu Martins',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Esperantina',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Fartura do Piauí',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Flores do Piauí',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Floresta do Piauí',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Floriano',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Francinópolis',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Francisco Ayres',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Francisco Macedo',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Francisco Santos',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Fronteiras',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Geminiano',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Gilbués',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Guadalupe',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Guaribas',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Hugo Napoleão',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ilha Grande',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Inhuma',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ipiranga do Piauí',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Isaías Coelho',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itainópolis',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itaueira',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Jacobina do Piauí',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Jaicós',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Jardim do Mulato',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Jatobá do Piauí',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Jerumenha',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'João Costa',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Joaquim Pires',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Joca Marques',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'José de Freitas',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Juazeiro do Piauí',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Júlio Borges',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Jurema',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Lagoinha do Piauí',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Lagoa Alegre',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Lagoa do Barro do Piauí',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Lagoa de São Francisco',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Lagoa do Piauí',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Lagoa do Sítio',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Landri Sales',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Luís Correia',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Luzilândia',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Madeiro',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Manoel Emídio',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Marcolândia',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Marcos Parente',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Massapê do Piauí',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Matias Olímpio',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Miguel Alves',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Miguel Leão',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Milton Brandão',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Monsenhor Gil',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Monsenhor Hipólito',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Monte Alegre do Piauí',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Morro Cabeça no Tempo',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Morro do Chapéu do Piauí',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Murici dos Portelas',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nazaré do Piauí',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nazária',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nossa Senhora de Nazaré',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nossa Senhora dos Remédios',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Novo Oriente do Piauí',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Novo Santo Antônio',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Oeiras',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Olho D Água do Piauí',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Padre Marcos',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Paes Landim',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pajeú do Piauí',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Palmeira do Piauí',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Palmeirais',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Paquetá',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Parnaguá',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Parnaíba',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Passagem Franca do Piauí',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Patos do Piauí',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pau D Arco do Piauí',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Paulistana',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pavussu',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pedro II',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pedro Laurentino',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nova Santa Rita',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Picos',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pimenteiras',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pio IX',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Piracuruca',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Piripiri',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Porto',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Porto Alegre do Piauí',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Prata do Piauí',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Queimada Nova',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Redenção do Gurguéia',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Regeneração',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Riacho Frio',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ribeira do Piauí',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ribeiro Gonçalves',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Rio Grande do Piauí',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Cruz do Piauí',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Cruz dos Milagres',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Filomena',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Luz',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santana do Piauí',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Rosa do Piauí',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santo Antônio de Lisboa',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santo Antônio dos Milagres',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santo Inácio do Piauí',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Braz do Piauí',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Félix do Piauí',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Francisco de Assis do Piauí',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Francisco do Piauí',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Gonçalo do Gurguéia',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Gonçalo do Piauí',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São João da Canabrava',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São João da Fronteira',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São João da Serra',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São João da Varjota',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São João do Arraial',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São João do Piauí',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São José do Divino',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São José do Peixe',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São José do Piauí',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Julião',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Lourenço do Piauí',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Luis do Piauí',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Miguel da Baixa Grande',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Miguel do Fidalgo',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Miguel do Tapuio',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Pedro do Piauí',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Raimundo Nonato',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Sebastião Barros',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Sebastião Leal',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Sigefredo Pacheco',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Simões',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Simplício Mendes',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Socorro do Piauí',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Sussuapara',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Tamboril do Piauí',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Tanque do Piauí',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Teresina',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'União',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Uruçuí',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Valença do Piauí',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Várzea Branca',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Várzea Grande',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Vera Mendes',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Vila Nova do Piauí',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Wall Ferraz',
            'federative_unit_id' =>  FederativeUnit::where('name','Piauí')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Abaiara',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Acarape',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Acaraú',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Acopiara',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Aiuaba',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Alcântaras',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Altaneira',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Alto Santo',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Amontada',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Antonina do Norte',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Apuiarés',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Aquiraz',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Aracati',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Aracoiaba',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ararendá',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Araripe',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Aratuba',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Arneiroz',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Assaré',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Aurora',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Baixio',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Banabuiú',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Barbalha',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Barreira',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Barro',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Barroquinha',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Baturité',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Beberibe',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Bela Cruz',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Boa Viagem',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Brejo Santo',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Camocim',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Campos Sales',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Canindé',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Capistrano',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Caridade',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cariré',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Caririaçu',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cariús',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Carnaubal',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cascavel',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Catarina',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Catunda',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Caucaia',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cedro',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Chaval',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Choró',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Chorozinho',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Coreaú',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Crateús',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Crato',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Croatá',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cruz',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Deputado Irapuan Pinheiro',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ererê',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Eusébio',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Farias Brito',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Forquilha',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Fortaleza',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Fortim',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Frecheirinha',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'General Sampaio',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Graça',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Granja',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Granjeiro',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Groaíras',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Guaiúba',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Guaraciaba do Norte',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Guaramiranga',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Hidrolândia',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Horizonte',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ibaretama',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ibiapina',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ibicuitinga',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Icapuí',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Icó',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Iguatu',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Independência',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ipaporanga',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ipaumirim',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ipu',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ipueiras',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Iracema',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Irauçuba',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itaiçaba',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itaitinga',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itapagé',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itapipoca',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itapiúna',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itarema',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itatira',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Jaguaretama',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Jaguaribara',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Jaguaribe',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Jaguaruana',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Jardim',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Jati',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Jijoca de Jericoacoara',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Juazeiro do Norte',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Jucás',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Lavras da Mangabeira',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Limoeiro do Norte',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Madalena',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Maracanaú',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Maranguape',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Marco',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Martinópole',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Massapê',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Mauriti',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Meruoca',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Milagres',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Milhã',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Miraíma',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Missão Velha',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Mombaça',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Monsenhor Tabosa',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Morada Nova',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Moraújo',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Morrinhos',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Mucambo',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Mulungu',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nova Olinda',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nova Russas',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Novo Oriente',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ocara',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Orós',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pacajus',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pacatuba',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pacoti',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pacujá',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Palhano',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Palmácia',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Paracuru',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Paraipaba',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Parambu',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Paramoti',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pedra Branca',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Penaforte',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pentecoste',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pereiro',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pindoretama',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Piquet Carneiro',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pires Ferreira',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Poranga',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Porteiras',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Potengi',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Potiretama',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Quiterianópolis',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Quixadá',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Quixelô',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Quixeramobim',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Quixeré',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Redenção',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Reriutaba',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Russas',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Saboeiro',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Salitre',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santana do Acaraú',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santana do Cariri',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Quitéria',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Benedito',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Gonçalo do Amarante',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São João do Jaguaribe',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Luís do Curu',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Senador Pompeu',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Senador Sá',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Sobral',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Solonópole',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Tabuleiro do Norte',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Tamboril',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Tarrafas',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Tauá',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Tejuçuoca',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Tianguá',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Trairi',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Tururu',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ubajara',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Umari',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Umirim',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Uruburetama',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Uruoca',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Varjota',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Várzea Alegre',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Viçosa do Ceará',
            'federative_unit_id' =>  FederativeUnit::where('name','Ceará')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Acari',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Açu',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Afonso Bezerra',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Água Nova',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Alexandria',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Almino Afonso',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Alto do Rodrigues',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Angicos',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Antônio Martins',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Apodi',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Areia Branca',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Arês',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Augusto Severo',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Baía Formosa',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Baraúna',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Barcelona',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Bento Fernandes',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Bodó',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Bom Jesus',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Brejinho',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Caiçara do Norte',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Caiçara do Rio do Vento',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Caicó',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Campo Redondo',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Canguaretama',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Caraúbas',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Carnaúba dos Dantas',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Carnaubais',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ceará-Mirim',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cerro Corá',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Coronel Ezequiel',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Coronel João Pessoa',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cruzeta',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Currais Novos',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Doutor Severiano',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Parnamirim',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Encanto',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Equador',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Espírito Santo',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Extremoz',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Felipe Guerra',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Fernando Pedroza',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Florânia',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Francisco Dantas',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Frutuoso Gomes',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Galinhos',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Goianinha',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Governador Dix-Sept Rosado',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Grossos',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Guamaré',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ielmo Marinho',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ipanguaçu',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ipueira',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itajá',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itaú',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Jaçanã',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Jandaíra',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Janduís',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Januário Cicco',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Japi',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Jardim de Angicos',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Jardim de Piranhas',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Jardim do Seridó',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'João Câmara',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'João Dias',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'José da Penha',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Jucurutu',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Jundiá',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Lagoa D Anta',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Lagoa de Pedras',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Lagoa de Velhos',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Lagoa Nova',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Lagoa Salgada',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Lajes',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Lajes Pintadas',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Lucrécia',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Luís Gomes',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Macaíba',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Macau',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Major Sales',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Marcelino Vieira',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Martins',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Maxaranguape',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Messias Targino',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Montanhas',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Monte Alegre',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Monte das Gameleiras',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Mossoró',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Natal',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nísia Floresta',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nova Cruz',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Olho-D Água do Borges',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ouro Branco',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Paraná',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Paraú',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Parazinho',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Parelhas',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Rio do Fogo',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Passa e Fica',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Passagem',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Patu',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Maria',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pau dos Ferros',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pedra Grande',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pedra Preta',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pedro Avelino',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pedro Velho',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pendências',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pilões',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Poço Branco',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Portalegre',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Porto do Mangue',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Presidente Juscelino',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pureza',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Rafael Fernandes',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Rafael Godeiro',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Riacho da Cruz',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Riacho de Santana',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Riachuelo',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Rodolfo Fernandes',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Tibau',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ruy Barbosa',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Cruz',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santana do Matos',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santana do Seridó',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santo Antônio',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Bento do Norte',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Bento do Trairí',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Fernando',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Francisco do Oeste',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Gonçalo do Amarante',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São João do Sabugi',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São José de Mipibu',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São José do Campestre',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São José do Seridó',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Miguel',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Miguel do Gostoso',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Paulo do Potengi',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Pedro',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Rafael',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Tomé',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Vicente',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Senador Elói de Souza',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Senador Georgino Avelino',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Serra de São Bento',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Serra do Mel',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Serra Negra do Norte',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Serrinha',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Serrinha dos Pintos',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Severiano Melo',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Sítio Novo',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Taboleiro Grande',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Taipu',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Tangará',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Tenente Ananias',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Tenente Laurentino Cruz',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Tibau do Sul',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Timbaúba dos Batistas',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Touros',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Triunfo Potiguar',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Umarizal',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Upanema',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Várzea',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Venha-Ver',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Vera Cruz',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Viçosa',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Vila Flor',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Norte')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Água Branca',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Aguiar',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Alagoa Grande',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Alagoa Nova',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Alagoinha',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Alcantil',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Algodão de Jandaíra',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Alhandra',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São João do Rio do Peixe',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Amparo',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Aparecida',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Araçagi',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Arara',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Araruna',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Areia',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Areia de Baraúnas',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Areial',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Aroeiras',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Assunção',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Baía da Traição',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Bananeiras',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Baraúna',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Barra de Santana',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Barra de Santa Rosa',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Barra de São Miguel',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Bayeux',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Belém',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Belém do Brejo do Cruz',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Bernardino Batista',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Boa Ventura',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Boa Vista',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Bom Jesus',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Bom Sucesso',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Bonito de Santa Fé',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Boqueirão',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Igaracy',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Borborema',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Brejo do Cruz',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Brejo dos Santos',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Caaporã',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cabaceiras',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cabedelo',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cachoeira dos Índios',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cacimba de Areia',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cacimba de Dentro',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cacimbas',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Caiçara',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cajazeiras',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cajazeirinhas',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Caldas Brandão',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Camalaú',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Campina Grande',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Capim',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Caraúbas',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Carrapateira',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Casserengue',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Catingueira',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Catolé do Rocha',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Caturité',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Conceição',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Condado',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Conde',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Congo',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Coremas',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Coxixola',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cruz do Espírito Santo',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cubati',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cuité',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cuitegi',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cuité de Mamanguape',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Curral de Cima',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Curral Velho',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Damião',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Desterro',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Vista Serrana',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Diamante',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Dona Inês',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Duas Estradas',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Emas',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Esperança',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Fagundes',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Frei Martinho',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Gado Bravo',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Guarabira',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Gurinhém',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Gurjão',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ibiara',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Imaculada',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ingá',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itabaiana',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itaporanga',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itapororoca',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itatuba',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Jacaraú',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Jericó',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'João Pessoa',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Juarez Távora',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Juazeirinho',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Junco do Seridó',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Juripiranga',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Juru',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Lagoa',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Lagoa de Dentro',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Lagoa Seca',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Lastro',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Livramento',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Logradouro',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Lucena',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Mãe D Água',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Malta',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Mamanguape',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Manaíra',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Marcação',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Mari',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Marizópolis',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Massaranduba',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Mataraca',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Matinhas',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Mato Grosso',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Maturéia',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Mogeiro',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Montadas',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Monte Horebe',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Monteiro',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Mulungu',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Natuba',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nazarezinho',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nova Floresta',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nova Olinda',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nova Palmeira',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Olho D Água',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Olivedos',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ouro Velho',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Parari',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Passagem',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Patos',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Paulista',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pedra Branca',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pedra Lavrada',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pedras de Fogo',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Piancó',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Picuí',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pilar',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pilões',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pilõezinhos',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pirpirituba',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pitimbu',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pocinhos',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Poço Dantas',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Poço de José de Moura',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pombal',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Prata',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Princesa Isabel',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Puxinanã',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Queimadas',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Quixabá',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Remígio',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pedro Régis',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Riachão',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Riachão do Bacamarte',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Riachão do Poço',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Riacho de Santo Antônio',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Riacho dos Cavalos',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Rio Tinto',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Salgadinho',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Salgado de São Félix',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Cecília',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Cruz',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Helena',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Inês',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Luzia',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santana de Mangueira',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santana dos Garrotes',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Joca Claudino',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Rita',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Teresinha',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santo André',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Bento',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Bentinho',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Domingos do Cariri',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Domingos',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Francisco',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São João do Cariri',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São João do Tigre',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São José da Lagoa Tapada',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São José de Caiana',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São José de Espinharas',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São José dos Ramos',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São José de Piranhas',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São José de Princesa',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São José do Bonfim',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São José do Brejo do Cruz',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São José do Sabugi',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São José dos Cordeiros',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Mamede',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Miguel de Taipu',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Sebastião de Lagoa de Roça',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Sebastião do Umbuzeiro',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Sapé',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Vicente do Seridó',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Serra Branca',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Serra da Raiz',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Serra Grande',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Serra Redonda',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Serraria',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Sertãozinho',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Sobrado',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Solânea',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Soledade',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Sossêgo',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Sousa',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Sumé',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Tacima',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Taperoá',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Tavares',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Teixeira',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Tenório',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Triunfo',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Uiraúna',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Umbuzeiro',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Várzea',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Vieirópolis',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Zabelê',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraíba')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Abreu e Lima',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Afogados da Ingazeira',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Afrânio',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Agrestina',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Água Preta',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Águas Belas',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Alagoinha',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Aliança',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Altinho',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Amaraji',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Angelim',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Araçoiaba',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Araripina',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Arcoverde',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Barra de Guabiraba',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Barreiros',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Belém de Maria',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Belém do São Francisco',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Belo Jardim',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Betânia',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Bezerros',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Bodocó',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Bom Conselho',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Bom Jardim',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Bonito',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Brejão',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Brejinho',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Brejo da Madre de Deus',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Buenos Aires',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Buíque',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cabo de Santo Agostinho',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cabrobó',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cachoeirinha',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );

        City::firstOrCreate( [

            'name' => 'Caetés',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Calçado',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Calumbi',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Camaragibe',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Camocim de São Félix',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Camutanga',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Canhotinho',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Capoeiras',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Carnaíba',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Carnaubeira da Penha',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Carpina',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Caruaru',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Casinhas',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Catende',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cedro',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Chã de Alegria',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Chã Grande',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Condado',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Correntes',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cortês',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cumaru',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cupira',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Custódia',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Dormentes',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Escada',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Exu',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Feira Nova',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Fernando de Noronha',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ferreiros',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Flores',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Floresta',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Frei Miguelinho',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Gameleira',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Garanhuns',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Glória do Goitá',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Goiana',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Granito',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Gravatá',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Iati',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ibimirim',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ibirajuba',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Igarassu',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Iguaraci',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Inajá',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ingazeira',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ipojuca',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ipubi',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itacuruba',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itaíba',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ilha de Itamaracá',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itambé',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itapetim',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itapissuma',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itaquitinga',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Jaboatão dos Guararapes',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Jaqueira',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Jataúba',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Jatobá',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'João Alfredo',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Joaquim Nabuco',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Jucati',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Jupi',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Jurema',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Lagoa do Carro',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Lagoa de Itaenga',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Lagoa do Ouro',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Lagoa dos Gatos',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Lagoa Grande',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Lajedo',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Limoeiro',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Macaparana',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Machados',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Manari',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Maraial',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Mirandiba',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Moreno',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nazaré da Mata',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Olinda',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Orobó',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Orocó',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ouricuri',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Palmares',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Palmeirina',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Panelas',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Paranatama',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Parnamirim',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Passira',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Paudalho',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Paulista',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pedra',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pesqueira',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Petrolândia',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Petrolina',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Poção',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pombos',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Primavera',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Quipapá',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Quixaba',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Recife',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Riacho das Almas',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ribeirão',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Rio Formoso',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Sairé',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Salgadinho',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Salgueiro',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Saloá',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Sanharó',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Cruz',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Cruz da Baixa Verde',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Cruz do Capibaribe',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Filomena',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Maria da Boa Vista',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Maria do Cambucá',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Terezinha',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Benedito do Sul',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Bento do Una',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Caitano',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São João',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Joaquim do Monte',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São José da Coroa Grande',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São José do Belmonte',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São José do Egito',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Lourenço da Mata',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Vicente Ferrer',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Serra Talhada',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Serrita',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Sertânia',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Sirinhaém',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Moreilândia',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Solidão',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Surubim',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Tabira',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Tacaimbó',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Tacaratu',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Tamandaré',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Taquaritinga do Norte',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Terezinha',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Terra Nova',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Timbaúba',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Toritama',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Tracunhaém',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Trindade',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Triunfo',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Tupanatinga',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Tuparetama',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Venturosa',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Verdejante',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Vertente do Lério',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Vertentes',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Vicência',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Vitória de Santo Antão',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Xexéu',
            'federative_unit_id' =>  FederativeUnit::where('name','Pernambuco')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Água Branca',
            'federative_unit_id' =>  FederativeUnit::where('name','Alagoas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Anadia',
            'federative_unit_id' =>  FederativeUnit::where('name','Alagoas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Arapiraca',
            'federative_unit_id' =>  FederativeUnit::where('name','Alagoas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Atalaia',
            'federative_unit_id' =>  FederativeUnit::where('name','Alagoas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Barra de Santo Antônio',
            'federative_unit_id' =>  FederativeUnit::where('name','Alagoas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Barra de São Miguel',
            'federative_unit_id' =>  FederativeUnit::where('name','Alagoas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Batalha',
            'federative_unit_id' =>  FederativeUnit::where('name','Alagoas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Belém',
            'federative_unit_id' =>  FederativeUnit::where('name','Alagoas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Belo Monte',
            'federative_unit_id' =>  FederativeUnit::where('name','Alagoas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Boca da Mata',
            'federative_unit_id' =>  FederativeUnit::where('name','Alagoas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Branquinha',
            'federative_unit_id' =>  FederativeUnit::where('name','Alagoas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cacimbinhas',
            'federative_unit_id' =>  FederativeUnit::where('name','Alagoas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cajueiro',
            'federative_unit_id' =>  FederativeUnit::where('name','Alagoas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Campestre',
            'federative_unit_id' =>  FederativeUnit::where('name','Alagoas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Campo Alegre',
            'federative_unit_id' =>  FederativeUnit::where('name','Alagoas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Campo Grande',
            'federative_unit_id' =>  FederativeUnit::where('name','Alagoas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Canapi',
            'federative_unit_id' =>  FederativeUnit::where('name','Alagoas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Capela',
            'federative_unit_id' =>  FederativeUnit::where('name','Alagoas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Carneiros',
            'federative_unit_id' =>  FederativeUnit::where('name','Alagoas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Chã Preta',
            'federative_unit_id' =>  FederativeUnit::where('name','Alagoas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Coité do Nóia',
            'federative_unit_id' =>  FederativeUnit::where('name','Alagoas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Colônia Leopoldina',
            'federative_unit_id' =>  FederativeUnit::where('name','Alagoas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Coqueiro Seco',
            'federative_unit_id' =>  FederativeUnit::where('name','Alagoas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Coruripe',
            'federative_unit_id' =>  FederativeUnit::where('name','Alagoas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Craíbas',
            'federative_unit_id' =>  FederativeUnit::where('name','Alagoas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Delmiro Gouveia',
            'federative_unit_id' =>  FederativeUnit::where('name','Alagoas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Dois Riachos',
            'federative_unit_id' =>  FederativeUnit::where('name','Alagoas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Estrela de Alagoas',
            'federative_unit_id' =>  FederativeUnit::where('name','Alagoas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Feira Grande',
            'federative_unit_id' =>  FederativeUnit::where('name','Alagoas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Feliz Deserto',
            'federative_unit_id' =>  FederativeUnit::where('name','Alagoas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Flexeiras',
            'federative_unit_id' =>  FederativeUnit::where('name','Alagoas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Girau do Ponciano',
            'federative_unit_id' =>  FederativeUnit::where('name','Alagoas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ibateguara',
            'federative_unit_id' =>  FederativeUnit::where('name','Alagoas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Igaci',
            'federative_unit_id' =>  FederativeUnit::where('name','Alagoas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Igreja Nova',
            'federative_unit_id' =>  FederativeUnit::where('name','Alagoas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Inhapi',
            'federative_unit_id' =>  FederativeUnit::where('name','Alagoas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Jacaré dos Homens',
            'federative_unit_id' =>  FederativeUnit::where('name','Alagoas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Jacuípe',
            'federative_unit_id' =>  FederativeUnit::where('name','Alagoas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Japaratinga',
            'federative_unit_id' =>  FederativeUnit::where('name','Alagoas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Jaramataia',
            'federative_unit_id' =>  FederativeUnit::where('name','Alagoas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Jequiá da Praia',
            'federative_unit_id' =>  FederativeUnit::where('name','Alagoas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Joaquim Gomes',
            'federative_unit_id' =>  FederativeUnit::where('name','Alagoas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Jundiá',
            'federative_unit_id' =>  FederativeUnit::where('name','Alagoas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Junqueiro',
            'federative_unit_id' =>  FederativeUnit::where('name','Alagoas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Lagoa da Canoa',
            'federative_unit_id' =>  FederativeUnit::where('name','Alagoas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Limoeiro de Anadia',
            'federative_unit_id' =>  FederativeUnit::where('name','Alagoas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Maceió',
            'federative_unit_id' =>  FederativeUnit::where('name','Alagoas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Major Isidoro',
            'federative_unit_id' =>  FederativeUnit::where('name','Alagoas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Maragogi',
            'federative_unit_id' =>  FederativeUnit::where('name','Alagoas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Maravilha',
            'federative_unit_id' =>  FederativeUnit::where('name','Alagoas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Marechal Deodoro',
            'federative_unit_id' =>  FederativeUnit::where('name','Alagoas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Maribondo',
            'federative_unit_id' =>  FederativeUnit::where('name','Alagoas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Mar Vermelho',
            'federative_unit_id' =>  FederativeUnit::where('name','Alagoas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Mata Grande',
            'federative_unit_id' =>  FederativeUnit::where('name','Alagoas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Matriz de Camaragibe',
            'federative_unit_id' =>  FederativeUnit::where('name','Alagoas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Messias',
            'federative_unit_id' =>  FederativeUnit::where('name','Alagoas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Minador do Negrão',
            'federative_unit_id' =>  FederativeUnit::where('name','Alagoas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Monteirópolis',
            'federative_unit_id' =>  FederativeUnit::where('name','Alagoas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Murici',
            'federative_unit_id' =>  FederativeUnit::where('name','Alagoas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Novo Lino',
            'federative_unit_id' =>  FederativeUnit::where('name','Alagoas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Olho D Água das Flores',
            'federative_unit_id' =>  FederativeUnit::where('name','Alagoas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Olho D Água do Casado',
            'federative_unit_id' =>  FederativeUnit::where('name','Alagoas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Olho D Água Grande',
            'federative_unit_id' =>  FederativeUnit::where('name','Alagoas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Olivença',
            'federative_unit_id' =>  FederativeUnit::where('name','Alagoas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ouro Branco',
            'federative_unit_id' =>  FederativeUnit::where('name','Alagoas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Palestina',
            'federative_unit_id' =>  FederativeUnit::where('name','Alagoas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Palmeira dos Índios',
            'federative_unit_id' =>  FederativeUnit::where('name','Alagoas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pão de Açúcar',
            'federative_unit_id' =>  FederativeUnit::where('name','Alagoas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pariconha',
            'federative_unit_id' =>  FederativeUnit::where('name','Alagoas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Paripueira',
            'federative_unit_id' =>  FederativeUnit::where('name','Alagoas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Passo de Camaragibe',
            'federative_unit_id' =>  FederativeUnit::where('name','Alagoas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Paulo Jacinto',
            'federative_unit_id' =>  FederativeUnit::where('name','Alagoas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Penedo',
            'federative_unit_id' =>  FederativeUnit::where('name','Alagoas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Piaçabuçu',
            'federative_unit_id' =>  FederativeUnit::where('name','Alagoas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pilar',
            'federative_unit_id' =>  FederativeUnit::where('name','Alagoas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pindoba',
            'federative_unit_id' =>  FederativeUnit::where('name','Alagoas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Piranhas',
            'federative_unit_id' =>  FederativeUnit::where('name','Alagoas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Poço das Trincheiras',
            'federative_unit_id' =>  FederativeUnit::where('name','Alagoas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Porto Calvo',
            'federative_unit_id' =>  FederativeUnit::where('name','Alagoas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Porto de Pedras',
            'federative_unit_id' =>  FederativeUnit::where('name','Alagoas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Porto Real do Colégio',
            'federative_unit_id' =>  FederativeUnit::where('name','Alagoas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Quebrangulo',
            'federative_unit_id' =>  FederativeUnit::where('name','Alagoas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Rio Largo',
            'federative_unit_id' =>  FederativeUnit::where('name','Alagoas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Roteiro',
            'federative_unit_id' =>  FederativeUnit::where('name','Alagoas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Luzia do Norte',
            'federative_unit_id' =>  FederativeUnit::where('name','Alagoas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santana do Ipanema',
            'federative_unit_id' =>  FederativeUnit::where('name','Alagoas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santana do Mundaú',
            'federative_unit_id' =>  FederativeUnit::where('name','Alagoas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Brás',
            'federative_unit_id' =>  FederativeUnit::where('name','Alagoas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São José da Laje',
            'federative_unit_id' =>  FederativeUnit::where('name','Alagoas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São José da Tapera',
            'federative_unit_id' =>  FederativeUnit::where('name','Alagoas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Luís do Quitunde',
            'federative_unit_id' =>  FederativeUnit::where('name','Alagoas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Miguel dos Campos',
            'federative_unit_id' =>  FederativeUnit::where('name','Alagoas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Miguel dos Milagres',
            'federative_unit_id' =>  FederativeUnit::where('name','Alagoas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Sebastião',
            'federative_unit_id' =>  FederativeUnit::where('name','Alagoas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Satuba',
            'federative_unit_id' =>  FederativeUnit::where('name','Alagoas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Senador Rui Palmeira',
            'federative_unit_id' =>  FederativeUnit::where('name','Alagoas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Tanque D Arca',
            'federative_unit_id' =>  FederativeUnit::where('name','Alagoas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Taquarana',
            'federative_unit_id' =>  FederativeUnit::where('name','Alagoas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Teotônio Vilela',
            'federative_unit_id' =>  FederativeUnit::where('name','Alagoas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Traipu',
            'federative_unit_id' =>  FederativeUnit::where('name','Alagoas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'União dos Palmares',
            'federative_unit_id' =>  FederativeUnit::where('name','Alagoas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Viçosa',
            'federative_unit_id' =>  FederativeUnit::where('name','Alagoas')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Amparo de São Francisco',
            'federative_unit_id' =>  FederativeUnit::where('name','Sergipe')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Aquidabã',
            'federative_unit_id' =>  FederativeUnit::where('name','Sergipe')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Aracaju',
            'federative_unit_id' =>  FederativeUnit::where('name','Sergipe')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Arauá',
            'federative_unit_id' =>  FederativeUnit::where('name','Sergipe')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Areia Branca',
            'federative_unit_id' =>  FederativeUnit::where('name','Sergipe')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Barra dos Coqueiros',
            'federative_unit_id' =>  FederativeUnit::where('name','Sergipe')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Boquim',
            'federative_unit_id' =>  FederativeUnit::where('name','Sergipe')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Brejo Grande',
            'federative_unit_id' =>  FederativeUnit::where('name','Sergipe')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Campo do Brito',
            'federative_unit_id' =>  FederativeUnit::where('name','Sergipe')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Canhoba',
            'federative_unit_id' =>  FederativeUnit::where('name','Sergipe')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Canindé de São Francisco',
            'federative_unit_id' =>  FederativeUnit::where('name','Sergipe')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Capela',
            'federative_unit_id' =>  FederativeUnit::where('name','Sergipe')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Carira',
            'federative_unit_id' =>  FederativeUnit::where('name','Sergipe')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Carmópolis',
            'federative_unit_id' =>  FederativeUnit::where('name','Sergipe')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cedro de São João',
            'federative_unit_id' =>  FederativeUnit::where('name','Sergipe')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cristinápolis',
            'federative_unit_id' =>  FederativeUnit::where('name','Sergipe')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cumbe',
            'federative_unit_id' =>  FederativeUnit::where('name','Sergipe')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Divina Pastora',
            'federative_unit_id' =>  FederativeUnit::where('name','Sergipe')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Estância',
            'federative_unit_id' =>  FederativeUnit::where('name','Sergipe')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Feira Nova',
            'federative_unit_id' =>  FederativeUnit::where('name','Sergipe')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Frei Paulo',
            'federative_unit_id' =>  FederativeUnit::where('name','Sergipe')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Gararu',
            'federative_unit_id' =>  FederativeUnit::where('name','Sergipe')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'General Maynard',
            'federative_unit_id' =>  FederativeUnit::where('name','Sergipe')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Gracho Cardoso',
            'federative_unit_id' =>  FederativeUnit::where('name','Sergipe')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ilha das Flores',
            'federative_unit_id' =>  FederativeUnit::where('name','Sergipe')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Indiaroba',
            'federative_unit_id' =>  FederativeUnit::where('name','Sergipe')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itabaiana',
            'federative_unit_id' =>  FederativeUnit::where('name','Sergipe')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itabaianinha',
            'federative_unit_id' =>  FederativeUnit::where('name','Sergipe')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itabi',
            'federative_unit_id' =>  FederativeUnit::where('name','Sergipe')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itaporanga D Ajuda',
            'federative_unit_id' =>  FederativeUnit::where('name','Sergipe')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Japaratuba',
            'federative_unit_id' =>  FederativeUnit::where('name','Sergipe')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Japoatã',
            'federative_unit_id' =>  FederativeUnit::where('name','Sergipe')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Lagarto',
            'federative_unit_id' =>  FederativeUnit::where('name','Sergipe')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Laranjeiras',
            'federative_unit_id' =>  FederativeUnit::where('name','Sergipe')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Macambira',
            'federative_unit_id' =>  FederativeUnit::where('name','Sergipe')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Malhada dos Bois',
            'federative_unit_id' =>  FederativeUnit::where('name','Sergipe')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Malhador',
            'federative_unit_id' =>  FederativeUnit::where('name','Sergipe')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Maruim',
            'federative_unit_id' =>  FederativeUnit::where('name','Sergipe')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Moita Bonita',
            'federative_unit_id' =>  FederativeUnit::where('name','Sergipe')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Monte Alegre de Sergipe',
            'federative_unit_id' =>  FederativeUnit::where('name','Sergipe')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Muribeca',
            'federative_unit_id' =>  FederativeUnit::where('name','Sergipe')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Neópolis',
            'federative_unit_id' =>  FederativeUnit::where('name','Sergipe')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nossa Senhora Aparecida',
            'federative_unit_id' =>  FederativeUnit::where('name','Sergipe')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nossa Senhora da Glória',
            'federative_unit_id' =>  FederativeUnit::where('name','Sergipe')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nossa Senhora das Dores',
            'federative_unit_id' =>  FederativeUnit::where('name','Sergipe')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nossa Senhora de Lourdes',
            'federative_unit_id' =>  FederativeUnit::where('name','Sergipe')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nossa Senhora do Socorro',
            'federative_unit_id' =>  FederativeUnit::where('name','Sergipe')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pacatuba',
            'federative_unit_id' =>  FederativeUnit::where('name','Sergipe')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pedra Mole',
            'federative_unit_id' =>  FederativeUnit::where('name','Sergipe')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pedrinhas',
            'federative_unit_id' =>  FederativeUnit::where('name','Sergipe')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pinhão',
            'federative_unit_id' =>  FederativeUnit::where('name','Sergipe')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pirambu',
            'federative_unit_id' =>  FederativeUnit::where('name','Sergipe')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Poço Redondo',
            'federative_unit_id' =>  FederativeUnit::where('name','Sergipe')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Poço Verde',
            'federative_unit_id' =>  FederativeUnit::where('name','Sergipe')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Porto da Folha',
            'federative_unit_id' =>  FederativeUnit::where('name','Sergipe')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Propriá',
            'federative_unit_id' =>  FederativeUnit::where('name','Sergipe')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Riachão do Dantas',
            'federative_unit_id' =>  FederativeUnit::where('name','Sergipe')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Riachuelo',
            'federative_unit_id' =>  FederativeUnit::where('name','Sergipe')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ribeirópolis',
            'federative_unit_id' =>  FederativeUnit::where('name','Sergipe')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Rosário do Catete',
            'federative_unit_id' =>  FederativeUnit::where('name','Sergipe')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Salgado',
            'federative_unit_id' =>  FederativeUnit::where('name','Sergipe')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Luzia do Itanhy',
            'federative_unit_id' =>  FederativeUnit::where('name','Sergipe')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santana do São Francisco',
            'federative_unit_id' =>  FederativeUnit::where('name','Sergipe')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Rosa de Lima',
            'federative_unit_id' =>  FederativeUnit::where('name','Sergipe')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santo Amaro das Brotas',
            'federative_unit_id' =>  FederativeUnit::where('name','Sergipe')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Cristóvão',
            'federative_unit_id' =>  FederativeUnit::where('name','Sergipe')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Domingos',
            'federative_unit_id' =>  FederativeUnit::where('name','Sergipe')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Francisco',
            'federative_unit_id' =>  FederativeUnit::where('name','Sergipe')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Miguel do Aleixo',
            'federative_unit_id' =>  FederativeUnit::where('name','Sergipe')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Simão Dias',
            'federative_unit_id' =>  FederativeUnit::where('name','Sergipe')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Siriri',
            'federative_unit_id' =>  FederativeUnit::where('name','Sergipe')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Telha',
            'federative_unit_id' =>  FederativeUnit::where('name','Sergipe')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Tobias Barreto',
            'federative_unit_id' =>  FederativeUnit::where('name','Sergipe')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Tomar do Geru',
            'federative_unit_id' =>  FederativeUnit::where('name','Sergipe')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Umbaúba',
            'federative_unit_id' =>  FederativeUnit::where('name','Sergipe')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Abaíra',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Abaré',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Acajutiba',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Adustina',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Água Fria',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Érico Cardoso',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Aiquara',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Alagoinhas',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Alcobaça',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Almadina',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Amargosa',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Amélia Rodrigues',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'América Dourada',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Anagé',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Andaraí',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Andorinha',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Angical',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Anguera',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Antas',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Antônio Cardoso',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Antônio Gonçalves',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Aporá',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Apuarema',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Aracatu',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Araças',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Araci',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Aramari',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Arataca',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Aratuípe',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Aurelino Leal',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Baianópolis',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Baixa Grande',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Banzaê',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Barra',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Barra da Estiva',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Barra do Choça',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Barra do Mendes',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Barra do Rocha',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Barreiras',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Barro Alto',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Barrocas',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Barro Preto',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Belmonte',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Belo Campo',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Biritinga',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Boa Nova',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Boa Vista do Tupim',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Bom Jesus da Lapa',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Bom Jesus da Serra',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Boninal',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Bonito',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Boquira',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Botuporã',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Brejões',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Brejolândia',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Brotas de Macaúbas',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Brumado',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Buerarema',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Buritirama',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Caatiba',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cabaceiras do Paraguaçu',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cachoeira',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Caculé',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Caém',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Caetanos',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Caetité',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cafarnaum',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cairu',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Caldeirão Grande',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Camacan',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Camaçari',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Camamu',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Campo Alegre de Lourdes',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Campo Formoso',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Canápolis',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Canarana',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Canavieiras',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Candeal',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Candeias',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Candiba',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cândido Sales',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cansanção',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Canudos',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Capela do Alto Alegre',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Capim Grosso',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Caraíbas',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Caravelas',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cardeal da Silva',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Carinhanha',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Casa Nova',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Castro Alves',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Catolândia',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Catu',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Caturama',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Central',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Chorrochó',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cícero Dantas',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cipó',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Coaraci',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cocos',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Conceição da Feira',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Conceição do Almeida',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Conceição do Coité',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Conceição do Jacuípe',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Conde',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Condeúba',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Contendas do Sincorá',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Coração de Maria',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cordeiros',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Coribe',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Coronel João Sá',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Correntina',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cotegipe',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cravolândia',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Crisópolis',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cristópolis',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cruz das Almas',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Curaçá',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Dário Meira',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Dias D Ávila',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Dom Basílio',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Dom Macedo Costa',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Elísio Medrado',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Encruzilhada',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Entre Rios',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Esplanada',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Euclides da Cunha',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Eunápolis',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Fátima',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Feira da Mata',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Feira de Santana',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Filadélfia',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Firmino Alves',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Floresta Azul',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Formosa do Rio Preto',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Gandu',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Gavião',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Gentio do Ouro',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Glória',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Gongogi',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Governador Mangabeira',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Guajeru',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Guanambi',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Guaratinga',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Heliópolis',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Iaçu',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ibiassucê',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ibicaraí',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ibicoara',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ibicuí',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ibipeba',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ibipitanga',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ibiquera',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ibirapitanga',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ibirapuã',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ibirataia',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ibitiara',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ibititá',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ibotirama',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ichu',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Igaporã',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Igrapiúna',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Iguaí',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ilhéus',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Inhambupe',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ipecaetá',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ipiaú',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ipirá',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ipupiara',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Irajuba',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Iramaia',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Iraquara',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Irará',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Irecê',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itabela',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itaberaba',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itabuna',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itacaré',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itaeté',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itagi',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itagibá',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itagimirim',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itaguaçu da Bahia',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itaju do Colônia',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itajuípe',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itamaraju',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itamari',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itambé',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itanagra',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itanhém',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itaparica',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itapé',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itapebi',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itapetinga',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itapicuru',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itapitanga',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itaquara',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itarantim',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itatim',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itiruçu',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itiúba',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itororó',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ituaçu',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ituberá',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Iuiú',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Jaborandi',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Jacaraci',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Jacobina',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Jaguaquara',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Jaguarari',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Jaguaripe',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Jandaíra',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Jequié',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Jeremoabo',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Jiquiriçá',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Jitaúna',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'João Dourado',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Juazeiro',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Jucuruçu',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Jussara',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Jussari',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Jussiape',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Lafaiete Coutinho',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Lagoa Real',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Laje',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Lajedão',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Lajedinho',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Lajedo do Tabocal',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Lamarão',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Lapão',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Lauro de Freitas',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Lençóis',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Licínio de Almeida',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Livramento de Nossa Senhora',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Luís Eduardo Magalhães',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Macajuba',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Macarani',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Macaúbas',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Macururé',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Madre de Deus',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Maetinga',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Maiquinique',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Mairi',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Malhada',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Malhada de Pedras',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Manoel Vitorino',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Mansidão',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Maracás',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Maragogipe',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Maraú',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Marcionílio Souza',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Mascote',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Mata de São João',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Matina',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Medeiros Neto',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Miguel Calmon',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Milagres',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Mirangaba',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Mirante',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Monte Santo',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Morpará',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Morro do Chapéu',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Mortugaba',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Mucugê',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Mucuri',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Mulungu do Morro',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Mundo Novo',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Muniz Ferreira',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Muquém de São Francisco',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Muritiba',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Mutuípe',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nazaré',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nilo Peçanha',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nordestina',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nova Canaã',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nova Fátima',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nova Ibiá',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nova Itarana',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nova Redenção',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nova Soure',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nova Viçosa',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Novo Horizonte',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Novo Triunfo',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Olindina',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Oliveira dos Brejinhos',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ouriçangas',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ourolândia',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Palmas de Monte Alto',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Palmeiras',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Paramirim',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Paratinga',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Paripiranga',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pau Brasil',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Paulo Afonso',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pé de Serra',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pedrão',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pedro Alexandre',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Piatã',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pilão Arcado',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pindaí',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pindobaçu',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pintadas',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Piraí do Norte',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Piripá',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Piritiba',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Planaltino',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Planalto',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Poções',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pojuca',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ponto Novo',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Porto Seguro',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Potiraguá',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Prado',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Presidente Dutra',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Presidente Jânio Quadros',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Presidente Tancredo Neves',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Queimadas',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Quijingue',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Quixabeira',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Rafael Jambeiro',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Remanso',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Retirolândia',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Riachão das Neves',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Riachão do Jacuípe',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Riacho de Santana',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ribeira do Amparo',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ribeira do Pombal',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ribeirão do Largo',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Rio de Contas',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Rio do Antônio',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Rio do Pires',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Rio Real',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Rodelas',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ruy Barbosa',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Salinas da Margarida',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Salvador',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Bárbara',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Brígida',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Cruz Cabrália',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Cruz da Vitória',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Inês',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santaluz',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Luzia',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Maria da Vitória',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santana',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santanópolis',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Rita de Cássia',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Teresinha',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santo Amaro',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santo Antônio de Jesus',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santo Estêvão',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Desidério',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Domingos',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Félix',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Félix do Coribe',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Felipe',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Francisco do Conde',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Gabriel',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Gonçalo dos Campos',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São José da Vitória',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São José do Jacuípe',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Miguel das Matas',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Sebastião do Passé',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Sapeaçu',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Sátiro Dias',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Saubara',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Saúde',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Seabra',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Sebastião Laranjeiras',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Senhor do Bonfim',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Serra do Ramalho',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Sento Sé',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Serra Dourada',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Serra Preta',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Serrinha',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Serrolândia',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Simões Filho',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Sítio do Mato',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Sítio do Quinto',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Sobradinho',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Souto Soares',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Tabocas do Brejo Velho',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Tanhaçu',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Tanque Novo',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Tanquinho',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Taperoá',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Tapiramutá',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Teixeira de Freitas',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Teodoro Sampaio',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Teofilândia',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Teolândia',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Terra Nova',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Tremedal',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Tucano',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Uauá',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ubaíra',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ubaitaba',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ubatã',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Uibaí',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Umburanas',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Una',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Urandi',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Uruçuca',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Utinga',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Valença',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Valente',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Várzea da Roça',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Várzea do Poço',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Várzea Nova',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Varzedo',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Vera Cruz',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Vereda',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Vitória da Conquista',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Wagner',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Wanderley',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Wenceslau Guimarães',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Xique-Xique',
            'federative_unit_id' =>  FederativeUnit::where('name','Bahia')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Abadia dos Dourados',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Abaeté',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Abre Campo',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Acaiaca',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Açucena',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Água Boa',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Água Comprida',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Aguanil',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Águas Formosas',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Águas Vermelhas',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Aimorés',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Aiuruoca',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Alagoa',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Albertina',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Além Paraíba',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Alfenas',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Alfredo Vasconcelos',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Almenara',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Alpercata',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Alpinópolis',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Alterosa',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Alto Caparaó',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Alto Rio Doce',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Alvarenga',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Alvinópolis',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Alvorada de Minas',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Amparo do Serra',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Andradas',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cachoeira de Pajeú',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Andrelândia',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Angelândia',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Antônio Carlos',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Antônio Dias',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Antônio Prado de Minas',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Araçaí',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Aracitaba',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Araçuaí',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Araguari',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Arantina',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Araponga',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Araporã',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Arapuá',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Araújos',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Araxá',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Arceburgo',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Arcos',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Areado',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Argirita',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Aricanduva',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Arinos',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Astolfo Dutra',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ataléia',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Augusto de Lima',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Baependi',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Baldim',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Bambuí',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Bandeira',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Bandeira do Sul',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Barão de Cocais',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Barão de Monte Alto',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Barbacena',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Barra Longa',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Barroso',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Bela Vista de Minas',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Belmiro Braga',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Belo Horizonte',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Belo Oriente',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Belo Vale',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Berilo',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Bertópolis',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Berizal',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Betim',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Bias Fortes',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Bicas',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Biquinhas',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Boa Esperança',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Bocaina de Minas',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Bocaiúva',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Bom Despacho',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Bom Jardim de Minas',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Bom Jesus da Penha',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Bom Jesus do Amparo',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Bom Jesus do Galho',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Bom Repouso',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Bom Sucesso',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Bonfim',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Bonfinópolis de Minas',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Bonito de Minas',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Borda da Mata',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Botelhos',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Botumirim',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Brasilândia de Minas',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Brasília de Minas',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Brás Pires',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Braúnas',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Brazópolis',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Brumadinho',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Bueno Brandão',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Buenópolis',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Bugre',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Buritis',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Buritizeiro',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cabeceira Grande',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cabo Verde',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cachoeira da Prata',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cachoeira de Minas',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cachoeira Dourada',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Caetanópolis',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Caeté',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Caiana',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cajuri',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Caldas',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Camacho',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Camanducaia',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cambuí',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cambuquira',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Campanário',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Campanha',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Campestre',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Campina Verde',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Campo Azul',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Campo Belo',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Campo do Meio',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Campo Florido',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Campos Altos',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Campos Gerais',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Canaã',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Canápolis',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cana Verde',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Candeias',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cantagalo',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Caparaó',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Capela Nova',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Capelinha',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Capetinga',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Capim Branco',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Capinópolis',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Capitão Andrade',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Capitão Enéas',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Capitólio',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Caputira',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Caraí',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Caranaíba',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Carandaí',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Carangola',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Caratinga',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Carbonita',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Careaçu',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Carlos Chagas',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Carmésia',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Carmo da Cachoeira',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Carmo da Mata',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Carmo de Minas',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Carmo do Cajuru',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Carmo do Paranaíba',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Carmo do Rio Claro',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Carmópolis de Minas',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Carneirinho',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Carrancas',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Carvalhópolis',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Carvalhos',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Casa Grande',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cascalho Rico',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cássia',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Conceição da Barra de Minas',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cataguases',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Catas Altas',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Catas Altas da Noruega',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Catuji',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Catuti',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Caxambu',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cedro do Abaeté',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Central de Minas',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Centralina',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Chácara',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Chalé',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Chapada do Norte',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Chapada Gaúcha',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Chiador',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cipotânea',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Claraval',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Claro dos Poções',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cláudio',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Coimbra',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Coluna',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Comendador Gomes',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Comercinho',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Conceição da Aparecida',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Conceição das Pedras',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Conceição das Alagoas',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Conceição de Ipanema',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Conceição do Mato Dentro',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Conceição do Pará',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Conceição do Rio Verde',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Conceição dos Ouros',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cônego Marinho',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Confins',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Congonhal',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Congonhas',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Congonhas do Norte',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Conquista',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Conselheiro Lafaiete',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Conselheiro Pena',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Consolação',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Contagem',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Coqueiral',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Coração de Jesus',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cordisburgo',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cordislândia',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Corinto',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Coroaci',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Coromandel',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Coronel Fabriciano',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Coronel Murta',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Coronel Pacheco',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Coronel Xavier Chaves',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Córrego Danta',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Córrego do Bom Jesus',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Córrego Fundo',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Córrego Novo',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Couto de Magalhães de Minas',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Crisólita',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cristais',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cristália',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cristiano Otoni',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cristina',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Crucilândia',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cruzeiro da Fortaleza',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cruzília',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cuparaque',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Curral de Dentro',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Curvelo',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Datas',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Delfim Moreira',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Delfinópolis',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Delta',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Descoberto',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Desterro de Entre Rios',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Desterro do Melo',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Diamantina',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Diogo de Vasconcelos',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Dionísio',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Divinésia',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Divino',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Divino das Laranjeiras',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Divinolândia de Minas',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Divinópolis',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Divisa Alegre',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Divisa Nova',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Divisópolis',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Dom Bosco',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Dom Cavati',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Dom Joaquim',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );

        City::firstOrCreate( [

            'name' => 'Dom Silvério',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Dom Viçoso',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Dona Eusébia',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Dores de Campos',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Dores de Guanhães',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Dores do Indaiá',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Dores do Turvo',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Doresópolis',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Douradoquara',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Durandé',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Elói Mendes',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Engenheiro Caldas',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Engenheiro Navarro',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Entre Folhas',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Entre Rios de Minas',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ervália',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Esmeraldas',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Espera Feliz',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Espinosa',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Espírito Santo do Dourado',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Estiva',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Estrela Dalva',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Estrela do Indaiá',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Estrela do Sul',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Eugenópolis',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ewbank da Câmara',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Extrema',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Fama',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Faria Lemos',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Felício dos Santos',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Gonçalo do Rio Preto',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Felisburgo',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Felixlândia',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Fernandes Tourinho',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ferros',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Fervedouro',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Florestal',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Formiga',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Formoso',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Fortaleza de Minas',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Fortuna de Minas',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Francisco Badaró',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Francisco Dumont',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Francisco Sá',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Franciscópolis',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Frei Gaspar',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Frei Inocêncio',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Frei Lagonegro',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Fronteira',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Fronteira dos Vales',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Fruta de Leite',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Frutal',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Funilândia',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Galiléia',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Gameleiras',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Glaucilândia',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Goiabeira',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Goianá',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Gonçalves',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Gonzaga',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Gouveia',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Governador Valadares',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Grão Mogol',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Grupiara',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Guanhães',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Guapé',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Guaraciaba',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Guaraciama',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Guaranésia',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Guarani',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Guarará',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Guarda-Mor',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Guaxupé',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Guidoval',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Guimarânia',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Guiricema',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Gurinhatã',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Heliodora',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Iapu',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ibertioga',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ibiá',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ibiaí',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ibiracatu',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ibiraci',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ibirité',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ibitiúra de Minas',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ibituruna',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Icaraí de Minas',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Igarapé',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Igaratinga',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Iguatama',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ijaci',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ilicínea',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Imbé de Minas',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Inconfidentes',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Indaiabira',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Indianópolis',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ingaí',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Inhapim',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Inhaúma',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Inimutaba',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ipaba',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ipanema',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ipatinga',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ipiaçu',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ipuiúna',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Iraí de Minas',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itabira',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itabirinha',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itabirito',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itacambira',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itacarambi',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itaguara',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itaipé',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itajubá',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itamarandiba',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itamarati de Minas',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itambacuri',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itambé do Mato Dentro',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itamogi',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itamonte',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itanhandu',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itanhomi',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itaobim',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itapagipe',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itapecerica',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itapeva',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itatiaiuçu',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itaú de Minas',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itaúna',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itaverava',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itinga',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itueta',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ituiutaba',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itumirim',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Iturama',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itutinga',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Jaboticatubas',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Jacinto',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Jacuí',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Jacutinga',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Jaguaraçu',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Jaíba',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Jampruca',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Janaúba',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Januária',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Japaraíba',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Japonvar',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Jeceaba',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Jenipapo de Minas',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Jequeri',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Jequitaí',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Jequitibá',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Jequitinhonha',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Jesuânia',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Joaíma',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Joanésia',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'João Monlevade',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'João Pinheiro',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Joaquim Felício',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Jordânia',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'José Gonçalves de Minas',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'José Raydan',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Josenópolis',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nova União',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Juatuba',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Juiz de Fora',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Juramento',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Juruaia',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Juvenília',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ladainha',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Lagamar',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Lagoa da Prata',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Lagoa dos Patos',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Lagoa Dourada',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Lagoa Formosa',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Lagoa Grande',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Lagoa Santa',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Lajinha',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Lambari',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Lamim',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Laranjal',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Lassance',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Lavras',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Leandro Ferreira',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Leme do Prado',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Leopoldina',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Liberdade',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Lima Duarte',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Limeira do Oeste',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Lontra',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Luisburgo',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Luislândia',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Luminárias',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Luz',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Machacalis',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Machado',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Madre de Deus de Minas',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Malacacheta',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Mamonas',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Manga',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Manhuaçu',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Manhumirim',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Mantena',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Maravilhas',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Mar de Espanha',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Maria da Fé',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Mariana',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Marilac',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Mário Campos',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Maripá de Minas',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Marliéria',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Marmelópolis',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Martinho Campos',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Martins Soares',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Mata Verde',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Materlândia',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Mateus Leme',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Matias Barbosa',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Matias Cardoso',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Matipó',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Mato Verde',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Matozinhos',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Matutina',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Medeiros',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Medina',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Mendes Pimentel',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Mercês',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Mesquita',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Minas Novas',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Minduri',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Mirabela',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Miradouro',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Miraí',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Miravânia',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Moeda',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Moema',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Monjolos',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Monsenhor Paulo',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Montalvânia',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Monte Alegre de Minas',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Monte Azul',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Monte Belo',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Monte Carmelo',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Monte Formoso',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Monte Santo de Minas',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Montes Claros',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Monte Sião',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Montezuma',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Morada Nova de Minas',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Morro da Garça',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Morro do Pilar',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Munhoz',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Muriaé',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Mutum',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Muzambinho',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nacip Raydan',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nanuque',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Naque',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Natalândia',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Natércia',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nazareno',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nepomuceno',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ninheira',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nova Belém',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nova Era',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nova Lima',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nova Módica',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nova Ponte',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nova Porteirinha',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nova Resende',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nova Serrana',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Novo Cruzeiro',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Novo Oriente de Minas',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Novorizonte',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Olaria',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Olhos-D Água',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Olímpio Noronha',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Oliveira',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Oliveira Fortes',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Onça de Pitangui',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Oratórios',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Orizânia',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ouro Branco',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ouro Fino',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ouro Preto',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ouro Verde de Minas',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Padre Carvalho',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Padre Paraíso',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Paineiras',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pains',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pai Pedro',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Paiva',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Palma',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Palmópolis',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Papagaios',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Paracatu',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pará de Minas',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Paraguaçu',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Paraisópolis',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Paraopeba',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Passabém',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Passa Quatro',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Passa Tempo',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Passa-Vinte',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Passos',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Patis',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Patos de Minas',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Patrocínio',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Patrocínio do Muriaé',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Paula Cândido',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Paulistas',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pavão',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Peçanha',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pedra Azul',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pedra Bonita',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pedra do Anta',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pedra do Indaiá',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pedra Dourada',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pedralva',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pedras de Maria da Cruz',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pedrinópolis',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pedro Leopoldo',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pedro Teixeira',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pequeri',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pequi',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Perdigão',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Perdizes',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Perdões',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Periquito',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pescador',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Piau',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Piedade de Caratinga',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Piedade de Ponte Nova',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Piedade do Rio Grande',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Piedade dos Gerais',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pimenta',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pingo-D Água',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pintópolis',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Piracema',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pirajuba',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Piranga',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Piranguçu',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Piranguinho',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pirapetinga',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pirapora',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Piraúba',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pitangui',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Piumhi',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Planura',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Poço Fundo',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Poços de Caldas',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pocrane',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pompéu',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ponte Nova',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ponto Chique',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ponto dos Volantes',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Porteirinha',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Porto Firme',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Poté',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pouso Alegre',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pouso Alto',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Prados',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Prata',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pratápolis',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pratinha',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Presidente Bernardes',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Presidente Juscelino',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Presidente Kubitschek',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Presidente Olegário',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Alto Jequitibá',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Prudente de Morais',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Quartel Geral',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Queluzito',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Raposos',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Raul Soares',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Recreio',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Reduto',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Resende Costa',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Resplendor',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ressaquinha',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Riachinho',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Riacho dos Machados',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ribeirão das Neves',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ribeirão Vermelho',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Rio Acima',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Rio Casca',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Rio Doce',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Rio do Prado',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Rio Espera',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Rio Manso',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Rio Novo',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Rio Paranaíba',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Rio Pardo de Minas',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Rio Piracicaba',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Rio Pomba',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Rio Preto',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Rio Vermelho',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ritápolis',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Rochedo de Minas',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Rodeiro',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Romaria',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Rosário da Limeira',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Rubelita',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Rubim',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Sabará',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Sabinópolis',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Sacramento',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Salinas',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Salto da Divisa',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Bárbara',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Bárbara do Leste',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Bárbara do Monte Verde',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Bárbara do Tugúrio',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Cruz de Minas',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Cruz de Salinas',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Cruz do Escalvado',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Efigênia de Minas',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Fé de Minas',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Helena de Minas',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Juliana',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Luzia',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Margarida',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Maria de Itabira',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Maria do Salto',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Maria do Suaçuí',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santana da Vargem',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santana de Cataguases',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santana de Pirapama',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santana do Deserto',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santana do Garambéu',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santana do Jacaré',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santana do Manhuaçu',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santana do Paraíso',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santana do Riacho',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santana dos Montes',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Rita de Caldas',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Rita de Jacutinga',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Rita de Minas',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Rita de Ibitipoca',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Rita do Itueto',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Rita do Sapucaí',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Rosa da Serra',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Vitória',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santo Antônio do Amparo',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santo Antônio do Aventureiro',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santo Antônio do Grama',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santo Antônio do Itambé',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santo Antônio do Jacinto',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santo Antônio do Monte',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santo Antônio do Retiro',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santo Antônio do Rio Abaixo',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santo Hipólito',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santos Dumont',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Bento Abade',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Brás do Suaçuí',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Domingos das Dores',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Domingos do Prata',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Félix de Minas',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Francisco',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Francisco de Paula',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Francisco de Sales',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Francisco do Glória',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Geraldo',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Geraldo da Piedade',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Geraldo do Baixio',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Gonçalo do Abaeté',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Gonçalo do Pará',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Gonçalo do Rio Abaixo',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Gonçalo do Sapucaí',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Gotardo',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São João Batista do Glória',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São João da Lagoa',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São João da Mata',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São João da Ponte',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São João das Missões',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São João del Rei',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São João do Manhuaçu',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São João do Manteninha',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São João do Oriente',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São João do Pacuí',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São João do Paraíso',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São João Evangelista',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São João Nepomuceno',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Joaquim de Bicas',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São José da Barra',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São José da Lapa',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São José da Safira',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São José da Varginha',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São José do Alegre',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São José do Divino',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São José do Goiabal',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São José do Jacuri',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São José do Mantimento',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Lourenço',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Miguel do Anta',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Pedro da União',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Pedro dos Ferros',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Pedro do Suaçuí',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Romão',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Roque de Minas',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Sebastião da Bela Vista',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Sebastião da Vargem Alegre',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Sebastião do Anta',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Sebastião do Maranhão',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Sebastião do Oeste',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Sebastião do Paraíso',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Sebastião do Rio Preto',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Sebastião do Rio Verde',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Tiago',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Tomás de Aquino',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Thomé das Letras',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Vicente de Minas',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Sapucaí-Mirim',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Sardoá',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Sarzedo',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Setubinha',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Sem-Peixe',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Senador Amaral',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Senador Cortes',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Senador Firmino',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Senador José Bento',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Senador Modestino Gonçalves',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Senhora de Oliveira',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Senhora do Porto',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Senhora dos Remédios',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Sericita',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Seritinga',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Serra Azul de Minas',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Serra da Saudade',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Serra dos Aimorés',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Serra do Salitre',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Serrania',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Serranópolis de Minas',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Serranos',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Serro',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Sete Lagoas',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Silveirânia',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Silvianópolis',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Simão Pereira',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Simonésia',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Sobrália',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Soledade de Minas',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Tabuleiro',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Taiobeiras',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Taparuba',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Tapira',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Tapiraí',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Taquaraçu de Minas',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Tarumirim',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Teixeiras',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Teófilo Otoni',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Timóteo',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Tiradentes',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Tiros',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Tocantins',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Tocos do Moji',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Toledo',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Tombos',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Três Corações',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Três Marias',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Três Pontas',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Tumiritinga',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Tupaciguara',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Turmalina',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Turvolândia',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ubá',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ubaí',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ubaporanga',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Uberaba',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Uberlândia',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Umburatiba',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Unaí',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'União de Minas',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Uruana de Minas',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Urucânia',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Urucuia',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Vargem Alegre',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Vargem Bonita',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Vargem Grande do Rio Pardo',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Varginha',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Varjão de Minas',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Várzea da Palma',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Varzelândia',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Vazante',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Verdelândia',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Veredinha',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Veríssimo',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Vermelho Novo',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Vespasiano',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Viçosa',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Vieiras',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Mathias Lobato',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Virgem da Lapa',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Virgínia',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Virginópolis',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Virgolândia',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Visconde do Rio Branco',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Volta Grande',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Wenceslau Braz',
            'federative_unit_id' =>  FederativeUnit::where('name','Minas Gerais')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Afonso Cláudio',
            'federative_unit_id' =>  FederativeUnit::where('name','Espírito Santo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Águia Branca',
            'federative_unit_id' =>  FederativeUnit::where('name','Espírito Santo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Água Doce do Norte',
            'federative_unit_id' =>  FederativeUnit::where('name','Espírito Santo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Alegre',
            'federative_unit_id' =>  FederativeUnit::where('name','Espírito Santo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Alfredo Chaves',
            'federative_unit_id' =>  FederativeUnit::where('name','Espírito Santo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Alto Rio Novo',
            'federative_unit_id' =>  FederativeUnit::where('name','Espírito Santo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Anchieta',
            'federative_unit_id' =>  FederativeUnit::where('name','Espírito Santo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Apiacá',
            'federative_unit_id' =>  FederativeUnit::where('name','Espírito Santo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Aracruz',
            'federative_unit_id' =>  FederativeUnit::where('name','Espírito Santo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Atilio Vivacqua',
            'federative_unit_id' =>  FederativeUnit::where('name','Espírito Santo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Baixo Guandu',
            'federative_unit_id' =>  FederativeUnit::where('name','Espírito Santo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Barra de São Francisco',
            'federative_unit_id' =>  FederativeUnit::where('name','Espírito Santo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Boa Esperança',
            'federative_unit_id' =>  FederativeUnit::where('name','Espírito Santo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Bom Jesus do Norte',
            'federative_unit_id' =>  FederativeUnit::where('name','Espírito Santo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Brejetuba',
            'federative_unit_id' =>  FederativeUnit::where('name','Espírito Santo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cachoeiro de Itapemirim',
            'federative_unit_id' =>  FederativeUnit::where('name','Espírito Santo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cariacica',
            'federative_unit_id' =>  FederativeUnit::where('name','Espírito Santo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Castelo',
            'federative_unit_id' =>  FederativeUnit::where('name','Espírito Santo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Colatina',
            'federative_unit_id' =>  FederativeUnit::where('name','Espírito Santo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Conceição da Barra',
            'federative_unit_id' =>  FederativeUnit::where('name','Espírito Santo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Conceição do Castelo',
            'federative_unit_id' =>  FederativeUnit::where('name','Espírito Santo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Divino de São Lourenço',
            'federative_unit_id' =>  FederativeUnit::where('name','Espírito Santo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Domingos Martins',
            'federative_unit_id' =>  FederativeUnit::where('name','Espírito Santo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Dores do Rio Preto',
            'federative_unit_id' =>  FederativeUnit::where('name','Espírito Santo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ecoporanga',
            'federative_unit_id' =>  FederativeUnit::where('name','Espírito Santo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Fundão',
            'federative_unit_id' =>  FederativeUnit::where('name','Espírito Santo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Governador Lindenberg',
            'federative_unit_id' =>  FederativeUnit::where('name','Espírito Santo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Guaçuí',
            'federative_unit_id' =>  FederativeUnit::where('name','Espírito Santo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Guarapari',
            'federative_unit_id' =>  FederativeUnit::where('name','Espírito Santo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ibatiba',
            'federative_unit_id' =>  FederativeUnit::where('name','Espírito Santo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ibiraçu',
            'federative_unit_id' =>  FederativeUnit::where('name','Espírito Santo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ibitirama',
            'federative_unit_id' =>  FederativeUnit::where('name','Espírito Santo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Iconha',
            'federative_unit_id' =>  FederativeUnit::where('name','Espírito Santo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Irupi',
            'federative_unit_id' =>  FederativeUnit::where('name','Espírito Santo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itaguaçu',
            'federative_unit_id' =>  FederativeUnit::where('name','Espírito Santo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itapemirim',
            'federative_unit_id' =>  FederativeUnit::where('name','Espírito Santo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itarana',
            'federative_unit_id' =>  FederativeUnit::where('name','Espírito Santo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Iúna',
            'federative_unit_id' =>  FederativeUnit::where('name','Espírito Santo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Jaguaré',
            'federative_unit_id' =>  FederativeUnit::where('name','Espírito Santo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Jerônimo Monteiro',
            'federative_unit_id' =>  FederativeUnit::where('name','Espírito Santo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'João Neiva',
            'federative_unit_id' =>  FederativeUnit::where('name','Espírito Santo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Laranja da Terra',
            'federative_unit_id' =>  FederativeUnit::where('name','Espírito Santo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Linhares',
            'federative_unit_id' =>  FederativeUnit::where('name','Espírito Santo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Mantenópolis',
            'federative_unit_id' =>  FederativeUnit::where('name','Espírito Santo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Marataízes',
            'federative_unit_id' =>  FederativeUnit::where('name','Espírito Santo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Marechal Floriano',
            'federative_unit_id' =>  FederativeUnit::where('name','Espírito Santo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Marilândia',
            'federative_unit_id' =>  FederativeUnit::where('name','Espírito Santo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Mimoso do Sul',
            'federative_unit_id' =>  FederativeUnit::where('name','Espírito Santo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Montanha',
            'federative_unit_id' =>  FederativeUnit::where('name','Espírito Santo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Mucurici',
            'federative_unit_id' =>  FederativeUnit::where('name','Espírito Santo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Muniz Freire',
            'federative_unit_id' =>  FederativeUnit::where('name','Espírito Santo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Muqui',
            'federative_unit_id' =>  FederativeUnit::where('name','Espírito Santo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nova Venécia',
            'federative_unit_id' =>  FederativeUnit::where('name','Espírito Santo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pancas',
            'federative_unit_id' =>  FederativeUnit::where('name','Espírito Santo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pedro Canário',
            'federative_unit_id' =>  FederativeUnit::where('name','Espírito Santo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pinheiros',
            'federative_unit_id' =>  FederativeUnit::where('name','Espírito Santo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Piúma',
            'federative_unit_id' =>  FederativeUnit::where('name','Espírito Santo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ponto Belo',
            'federative_unit_id' =>  FederativeUnit::where('name','Espírito Santo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Presidente Kennedy',
            'federative_unit_id' =>  FederativeUnit::where('name','Espírito Santo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Rio Bananal',
            'federative_unit_id' =>  FederativeUnit::where('name','Espírito Santo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Rio Novo do Sul',
            'federative_unit_id' =>  FederativeUnit::where('name','Espírito Santo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Leopoldina',
            'federative_unit_id' =>  FederativeUnit::where('name','Espírito Santo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Maria de Jetibá',
            'federative_unit_id' =>  FederativeUnit::where('name','Espírito Santo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Teresa',
            'federative_unit_id' =>  FederativeUnit::where('name','Espírito Santo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Domingos do Norte',
            'federative_unit_id' =>  FederativeUnit::where('name','Espírito Santo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Gabriel da Palha',
            'federative_unit_id' =>  FederativeUnit::where('name','Espírito Santo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São José do Calçado',
            'federative_unit_id' =>  FederativeUnit::where('name','Espírito Santo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Mateus',
            'federative_unit_id' =>  FederativeUnit::where('name','Espírito Santo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Roque do Canaã',
            'federative_unit_id' =>  FederativeUnit::where('name','Espírito Santo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Serra',
            'federative_unit_id' =>  FederativeUnit::where('name','Espírito Santo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Sooretama',
            'federative_unit_id' =>  FederativeUnit::where('name','Espírito Santo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Vargem Alta',
            'federative_unit_id' =>  FederativeUnit::where('name','Espírito Santo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Venda Nova do Imigrante',
            'federative_unit_id' =>  FederativeUnit::where('name','Espírito Santo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Viana',
            'federative_unit_id' =>  FederativeUnit::where('name','Espírito Santo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Vila Pavão',
            'federative_unit_id' =>  FederativeUnit::where('name','Espírito Santo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Vila Valério',
            'federative_unit_id' =>  FederativeUnit::where('name','Espírito Santo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Vila Velha',
            'federative_unit_id' =>  FederativeUnit::where('name','Espírito Santo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Vitória',
            'federative_unit_id' =>  FederativeUnit::where('name','Espírito Santo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Angra dos Reis',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio de Janeiro')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Aperibé',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio de Janeiro')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Araruama',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio de Janeiro')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Areal',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio de Janeiro')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Armação dos Búzios',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio de Janeiro')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Arraial do Cabo',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio de Janeiro')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Barra do Piraí',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio de Janeiro')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Barra Mansa',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio de Janeiro')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Belford Roxo',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio de Janeiro')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Bom Jardim',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio de Janeiro')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Bom Jesus do Itabapoana',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio de Janeiro')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cabo Frio',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio de Janeiro')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cachoeiras de Macacu',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio de Janeiro')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cambuci',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio de Janeiro')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Carapebus',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio de Janeiro')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Comendador Levy Gasparian',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio de Janeiro')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Campos dos Goytacazes',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio de Janeiro')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cantagalo',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio de Janeiro')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cardoso Moreira',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio de Janeiro')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Carmo',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio de Janeiro')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Casimiro de Abreu',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio de Janeiro')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Conceição de Macabu',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio de Janeiro')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cordeiro',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio de Janeiro')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Duas Barras',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio de Janeiro')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Duque de Caxias',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio de Janeiro')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Engenheiro Paulo de Frontin',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio de Janeiro')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Guapimirim',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio de Janeiro')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Iguaba Grande',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio de Janeiro')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itaboraí',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio de Janeiro')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itaguaí',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio de Janeiro')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Italva',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio de Janeiro')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itaocara',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio de Janeiro')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itaperuna',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio de Janeiro')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itatiaia',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio de Janeiro')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Japeri',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio de Janeiro')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Laje do Muriaé',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio de Janeiro')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Macaé',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio de Janeiro')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Macuco',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio de Janeiro')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Magé',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio de Janeiro')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Mangaratiba',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio de Janeiro')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Maricá',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio de Janeiro')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Mendes',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio de Janeiro')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Mesquita',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio de Janeiro')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Miguel Pereira',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio de Janeiro')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Miracema',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio de Janeiro')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Natividade',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio de Janeiro')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nilópolis',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio de Janeiro')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Niterói',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio de Janeiro')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nova Friburgo',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio de Janeiro')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nova Iguaçu',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio de Janeiro')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Paracambi',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio de Janeiro')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Paraíba do Sul',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio de Janeiro')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Paraty',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio de Janeiro')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Paty do Alferes',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio de Janeiro')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Petrópolis',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio de Janeiro')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pinheiral',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio de Janeiro')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Piraí',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio de Janeiro')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Porciúncula',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio de Janeiro')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Porto Real',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio de Janeiro')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Quatis',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio de Janeiro')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Queimados',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio de Janeiro')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Quissamã',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio de Janeiro')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Resende',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio de Janeiro')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Rio Bonito',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio de Janeiro')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Rio Claro',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio de Janeiro')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Rio das Flores',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio de Janeiro')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Rio das Ostras',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio de Janeiro')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Rio de Janeiro',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio de Janeiro')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Maria Madalena',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio de Janeiro')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santo Antônio de Pádua',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio de Janeiro')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Francisco de Itabapoana',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio de Janeiro')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Fidélis',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio de Janeiro')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Gonçalo',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio de Janeiro')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São João da Barra',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio de Janeiro')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São João de Meriti',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio de Janeiro')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São José de Ubá',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio de Janeiro')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São José do Vale do Rio Preto',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio de Janeiro')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Pedro da Aldeia',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio de Janeiro')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Sebastião do Alto',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio de Janeiro')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Sapucaia',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio de Janeiro')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Saquarema',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio de Janeiro')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Seropédica',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio de Janeiro')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Silva Jardim',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio de Janeiro')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Sumidouro',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio de Janeiro')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Tanguá',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio de Janeiro')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Teresópolis',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio de Janeiro')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Trajano de Moraes',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio de Janeiro')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Três Rios',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio de Janeiro')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Valença',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio de Janeiro')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Varre-Sai',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio de Janeiro')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Vassouras',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio de Janeiro')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Volta Redonda',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio de Janeiro')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Adamantina',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Adolfo',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Aguaí',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Águas da Prata',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Águas de Lindóia',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Águas de Santa Bárbara',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Águas de São Pedro',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Agudos',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Alambari',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Alfredo Marcondes',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Altair',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Altinópolis',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Alto Alegre',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Alumínio',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Álvares Florence',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Álvares Machado',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Álvaro de Carvalho',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Alvinlândia',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Americana',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Américo Brasiliense',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Américo de Campos',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Amparo',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Analândia',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Andradina',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Angatuba',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Anhembi',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Anhumas',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Aparecida',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Aparecida Do Oeste',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Apiaí',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Araçariguama',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Araçatuba',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Araçoiaba da Serra',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Aramina',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Arandu',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Arapeí',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Araraquara',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Araras',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Arco-Íris',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Arealva',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Areias',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Areiópolis',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ariranha',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Artur Nogueira',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Arujá',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Aspásia',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Assis',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Atibaia',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Auriflama',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Avaí',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Avanhandava',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Avaré',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Bady Bassitt',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Balbinos',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Bálsamo',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Bananal',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Barão de Antonina',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Barbosa',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Bariri',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Barra Bonita',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Barra do Chapéu',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Barra do Turvo',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Barretos',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Barrinha',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Barueri',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Bastos',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Batatais',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Bauru',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Bebedouro',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Bento de Abreu',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Bernardino de Campos',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Bertioga',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Bilac',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Birigui',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Biritiba-Mirim',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Boa Esperança do Sul',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Bocaina',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Bofete',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Boituva',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Bom Jesus dos Perdões',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Bom Sucesso de Itararé',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Borá',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Boracéia',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Borborema',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Borebi',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Botucatu',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Bragança Paulista',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Braúna',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Brejo Alegre',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Brodowski',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Brotas',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Buri',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Buritama',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Buritizal',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cabrália Paulista',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cabreúva',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Caçapava',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cachoeira Paulista',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Caconde',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cafelândia',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Caiabu',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Caieiras',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Caiuá',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cajamar',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cajati',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cajobi',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cajuru',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Campina do Monte Alegre',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Campinas',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Campo Limpo Paulista',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Campos do Jordão',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Campos Novos Paulista',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cananéia',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Canas',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cândido Mota',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cândido Rodrigues',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Canitar',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Capão Bonito',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Capela do Alto',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Capivari',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Caraguatatuba',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Carapicuíba',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cardoso',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Casa Branca',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cássia dos Coqueiros',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Castilho',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Catanduva',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Catiguá',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cedral',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cerqueira César',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cerquilho',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cesário Lange',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Charqueada',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Clementina',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Colina',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Colômbia',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Conchal',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Conchas',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cordeirópolis',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Coroados',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Coronel Macedo',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Corumbataí',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cosmópolis',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cosmorama',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cotia',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cravinhos',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cristais Paulista',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cruzália',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cruzeiro',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cubatão',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cunha',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Descalvado',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Diadema',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Dirce Reis',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Divinolândia',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Dobrada',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Dois Córregos',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Dolcinópolis',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Dourado',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Dracena',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Duartina',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Dumont',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Echaporã',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Eldorado',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Elias Fausto',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Elisiário',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Embaúba',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Embu das Artes',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Embu-Guaçu',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Emilianópolis',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Engenheiro Coelho',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Espírito Santo do Pinhal',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Espírito Santo do Turvo',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Estrela Do Oeste',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Estrela do Norte',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Euclides da Cunha Paulista',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Fartura',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Fernandópolis',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Fernando Prestes',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Fernão',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ferraz de Vasconcelos',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Flora Rica',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Floreal',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Flórida Paulista',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Florínia',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Franca',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Francisco Morato',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Franco da Rocha',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Gabriel Monteiro',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Gália',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Garça',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Gastão Vidigal',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Gavião Peixoto',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'General Salgado',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Getulina',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Glicério',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Guaiçara',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Guaimbê',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Guaíra',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Guapiaçu',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Guapiara',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Guará',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Guaraçaí',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Guaraci',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Guarani Do Oeste',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Guarantã',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Guararapes',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Guararema',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Guaratinguetá',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Guareí',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Guariba',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Guarujá',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Guarulhos',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Guatapará',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Guzolândia',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Herculândia',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Holambra',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Hortolândia',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Iacanga',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Iacri',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Iaras',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ibaté',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ibirá',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ibirarema',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ibitinga',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ibiúna',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Icém',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Iepê',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Igaraçu do Tietê',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );

        City::firstOrCreate( [

            'name' => 'Igarapava',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Igaratá',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Iguape',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ilhabela',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ilha Comprida',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ilha Solteira',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Indaiatuba',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Indiana',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Indiaporã',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Inúbia Paulista',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ipaussu',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Iperó',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ipeúna',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ipiguá',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Iporanga',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ipuã',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Iracemápolis',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Irapuã',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Irapuru',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itaberá',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itaí',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itajobi',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itaju',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itanhaém',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itaóca',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itapecerica da Serra',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itapetininga',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itapeva',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itapevi',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itapira',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itapirapuã Paulista',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itápolis',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itaporanga',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itapuí',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itapura',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itaquaquecetuba',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itararé',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itariri',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itatiba',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itatinga',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itirapina',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itirapuã',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itobi',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itu',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itupeva',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ituverava',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Jaborandi',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Jaboticabal',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Jacareí',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Jaci',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Jacupiranga',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Jaguariúna',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Jales',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Jambeiro',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Jandira',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Jardinópolis',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Jarinu',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Jaú',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Jeriquara',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Joanópolis',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'João Ramalho',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'José Bonifácio',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Júlio Mesquita',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Jumirim',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Jundiaí',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Junqueirópolis',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Juquiá',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Juquitiba',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Lagoinha',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Laranjal Paulista',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Lavínia',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Lavrinhas',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Leme',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Lençóis Paulista',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Limeira',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Lindóia',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Lins',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Lorena',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Lourdes',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Louveira',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Lucélia',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Lucianópolis',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Luís Antônio',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Luiziânia',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Lupércio',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Lutécia',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Macatuba',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Macaubal',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Macedônia',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Magda',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Mairinque',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Mairiporã',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Manduri',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Marabá Paulista',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Maracaí',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Marapoama',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Mariápolis',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Marília',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Marinópolis',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Martinópolis',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Matão',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Mauá',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Mendonça',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Meridiano',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Mesópolis',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Miguelópolis',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Mineiros do Tietê',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Miracatu',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Mira Estrela',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Mirandópolis',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Mirante do Paranapanema',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Mirassol',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Mirassolândia',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Mococa',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Mogi das Cruzes',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Mogi Guaçu',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Moji Mirim',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Mombuca',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Monções',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Mongaguá',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Monte Alegre do Sul',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Monte Alto',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Monte Aprazível',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Monte Azul Paulista',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Monte Castelo',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Monteiro Lobato',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Monte Mor',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Morro Agudo',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Morungaba',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Motuca',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Murutinga do Sul',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nantes',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Narandiba',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Natividade da Serra',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nazaré Paulista',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Neves Paulista',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nhandeara',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nipoã',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nova Aliança',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nova Campina',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nova Canaã Paulista',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nova Castilho',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nova Europa',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nova Granada',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nova Guataporanga',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nova Independência',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Novais',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nova Luzitânia',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nova Odessa',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Novo Horizonte',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nuporanga',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ocauçu',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Óleo',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Olímpia',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Onda Verde',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Oriente',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Orindiúva',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Orlândia',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Osasco',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Oscar Bressane',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Osvaldo Cruz',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ourinhos',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ouroeste',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ouro Verde',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pacaembu',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Palestina',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Palmares Paulista',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Palmeira Do Oeste',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Palmital',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Panorama',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Paraguaçu Paulista',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Paraibuna',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Paraíso',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Paranapanema',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Paranapuã',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Parapuã',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pardinho',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pariquera-Açu',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Parisi',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Patrocínio Paulista',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Paulicéia',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Paulínia',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Paulistânia',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Paulo de Faria',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pederneiras',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pedra Bela',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pedranópolis',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pedregulho',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pedreira',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pedrinhas Paulista',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pedro de Toledo',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Penápolis',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pereira Barreto',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pereiras',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Peruíbe',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Piacatu',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Piedade',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pilar do Sul',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pindamonhangaba',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pindorama',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pinhalzinho',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Piquerobi',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Piquete',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Piracaia',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Piracicaba',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Piraju',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pirajuí',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pirangi',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pirapora do Bom Jesus',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pirapozinho',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pirassununga',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Piratininga',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pitangueiras',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Planalto',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Platina',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Poá',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Poloni',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pompéia',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pongaí',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pontal',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pontalinda',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pontes Gestal',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Populina',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Porangaba',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Porto Feliz',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Porto Ferreira',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Potim',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Potirendaba',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pracinha',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pradópolis',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Praia Grande',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pratânia',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Presidente Alves',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Presidente Bernardes',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Presidente Epitácio',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Presidente Prudente',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Presidente Venceslau',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Promissão',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Quadra',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Quatá',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Queiroz',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Queluz',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Quintana',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Rafard',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Rancharia',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Redenção da Serra',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Regente Feijó',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Reginópolis',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Registro',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Restinga',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ribeira',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ribeirão Bonito',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ribeirão Branco',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ribeirão Corrente',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ribeirão do Sul',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ribeirão dos Índios',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ribeirão Grande',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ribeirão Pires',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ribeirão Preto',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Riversul',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Rifaina',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Rincão',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Rinópolis',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Rio Claro',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Rio das Pedras',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Rio Grande da Serra',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Riolândia',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Rosana',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Roseira',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Rubiácea',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Rubinéia',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Sabino',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Sagres',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Sales',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Sales Oliveira',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Salesópolis',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Salmourão',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Saltinho',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Salto',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Salto de Pirapora',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Salto Grande',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Sandovalina',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Adélia',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Albertina',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Bárbara Do Oeste',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Branca',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Clara Do Oeste',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Cruz da Conceição',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Cruz da Esperança',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Cruz das Palmeiras',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Cruz do Rio Pardo',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Ernestina',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Fé do Sul',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Gertrudes',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Isabel',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Lúcia',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Maria da Serra',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Mercedes',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santana da Ponte Pensa',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santana de Parnaíba',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Rita Do Oeste',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Rita do Passa Quatro',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Rosa de Viterbo',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Salete',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santo Anastácio',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santo André',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santo Antônio da Alegria',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santo Antônio de Posse',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santo Antônio do Aracanguá',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santo Antônio do Jardim',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santo Antônio do Pinhal',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santo Expedito',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santópolis do Aguapeí',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santos',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Bento do Sapucaí',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Bernardo do Campo',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Caetano do Sul',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Carlos',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Francisco',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São João da Boa Vista',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São João das Duas Pontes',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São João de Iracema',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São João do Pau D Alho',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Joaquim da Barra',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São José da Bela Vista',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São José do Barreiro',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São José do Rio Pardo',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São José do Rio Preto',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São José dos Campos',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Lourenço da Serra',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Luís do Paraitinga',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Manuel',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Miguel Arcanjo',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Paulo',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Pedro',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Pedro do Turvo',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Roque',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Sebastião',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Sebastião da Grama',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Simão',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Vicente',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Sarapuí',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Sarutaiá',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Sebastianópolis do Sul',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Serra Azul',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Serrana',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Serra Negra',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Sertãozinho',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Sete Barras',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Severínia',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Silveiras',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Socorro',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Sorocaba',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Sud Mennucci',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Sumaré',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Suzano',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Suzanápolis',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Tabapuã',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Tabatinga',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Taboão da Serra',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Taciba',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Taguaí',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Taiaçu',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Taiúva',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Tambaú',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Tanabi',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Tapiraí',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Tapiratiba',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Taquaral',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Taquaritinga',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Taquarituba',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Taquarivaí',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Tarabai',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Tarumã',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Tatuí',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Taubaté',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Tejupá',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Teodoro Sampaio',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Terra Roxa',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Tietê',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Timburi',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Torre de Pedra',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Torrinha',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Trabiju',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Tremembé',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Três Fronteiras',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Tuiuti',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Tupã',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Tupi Paulista',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Turiúba',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Turmalina',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ubarana',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ubatuba',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ubirajara',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Uchoa',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'União Paulista',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Urânia',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Uru',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Urupês',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Valentim Gentil',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Valinhos',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Valparaíso',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Vargem',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Vargem Grande do Sul',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Vargem Grande Paulista',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Várzea Paulista',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Vera Cruz',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Vinhedo',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Viradouro',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Vista Alegre do Alto',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Vitória Brasil',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Votorantim',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Votuporanga',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Zacarias',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Chavantes',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Estiva Gerbi',
            'federative_unit_id' =>  FederativeUnit::where('name','São Paulo')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Abatiá',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Adrianópolis',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Agudos do Sul',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Almirante Tamandaré',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Altamira do Paraná',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Altônia',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Alto Paraná',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Alto Piquiri',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Alvorada do Sul',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Amaporã',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ampére',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Anahy',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Andirá',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ângulo',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Antonina',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Antônio Olinto',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Apucarana',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Arapongas',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Arapoti',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Arapuã',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Araruna',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Araucária',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ariranha do Ivaí',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Assaí',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Assis Chateaubriand',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Astorga',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Atalaia',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Balsa Nova',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Bandeirantes',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Barbosa Ferraz',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Barracão',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Barra do Jacaré',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Bela Vista da Caroba',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Bela Vista do Paraíso',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Bituruna',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Boa Esperança',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Boa Esperança do Iguaçu',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Boa Ventura de São Roque',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Boa Vista da Aparecida',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Bocaiúva do Sul',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Bom Jesus do Sul',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Bom Sucesso',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Bom Sucesso do Sul',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Borrazópolis',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Braganey',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Brasilândia do Sul',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cafeara',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cafelândia',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cafezal do Sul',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Califórnia',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cambará',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cambé',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cambira',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Campina da Lagoa',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Campina do Simão',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Campina Grande do Sul',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Campo Bonito',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Campo do Tenente',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Campo Largo',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Campo Magro',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Campo Mourão',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cândido de Abreu',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Candói',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cantagalo',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Capanema',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Capitão Leônidas Marques',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Carambeí',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Carlópolis',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cascavel',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Castro',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Catanduvas',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Centenário do Sul',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cerro Azul',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Céu Azul',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Chopinzinho',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cianorte',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cidade Gaúcha',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Clevelândia',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Colombo',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Colorado',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Congonhinhas',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Conselheiro Mairinck',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Contenda',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Corbélia',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cornélio Procópio',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Coronel Domingos Soares',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Coronel Vivida',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Corumbataí do Sul',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cruzeiro do Iguaçu',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cruzeiro do Oeste',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cruzeiro do Sul',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cruz Machado',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cruzmaltina',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Curitiba',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Curiúva',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Diamante do Norte',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Diamante do Sul',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Diamante Do Oeste',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Dois Vizinhos',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Douradina',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Doutor Camargo',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Enéas Marques',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Engenheiro Beltrão',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Esperança Nova',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Entre Rios do Oeste',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Espigão Alto do Iguaçu',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Farol',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Faxinal',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Fazenda Rio Grande',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Fênix',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Fernandes Pinheiro',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Figueira',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Floraí',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Flor da Serra do Sul',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Floresta',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Florestópolis',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Flórida',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Formosa do Oeste',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Foz do Iguaçu',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Francisco Alves',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Francisco Beltrão',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Foz do Jordão',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'General Carneiro',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Godoy Moreira',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Goioerê',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Goioxim',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Grandes Rios',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Guaíra',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Guairaçá',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Guamiranga',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Guapirama',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Guaporema',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Guaraci',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Guaraniaçu',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Guarapuava',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Guaraqueçaba',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Guaratuba',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Honório Serpa',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ibaiti',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ibema',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ibiporã',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Icaraíma',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Iguaraçu',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Iguatu',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Imbaú',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Imbituva',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Inácio Martins',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Inajá',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Indianópolis',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ipiranga',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Iporã',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Iracema do Oeste',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Irati',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Iretama',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itaguajé',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itaipulândia',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itambaracá',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itambé',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itapejara Do Oeste',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itaperuçu',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itaúna do Sul',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ivaí',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ivaiporã',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ivaté',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ivatuba',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Jaboti',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Jacarezinho',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Jaguapitã',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Jaguariaíva',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Jandaia do Sul',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Janiópolis',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Japira',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Japurá',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Jardim Alegre',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Jardim Olinda',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Jataizinho',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Jesuítas',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Joaquim Távora',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Jundiaí do Sul',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Juranda',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Jussara',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Kaloré',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Lapa',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Laranjal',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Laranjeiras do Sul',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Leópolis',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Lidianópolis',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Lindoeste',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Loanda',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Lobato',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Londrina',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Luiziana',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Lunardelli',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Lupionópolis',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Mallet',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Mamborê',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Mandaguaçu',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Mandaguari',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Mandirituba',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Manfrinópolis',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Mangueirinha',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Manoel Ribas',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Marechal Cândido Rondon',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Maria Helena',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Marialva',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Marilândia do Sul',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Marilena',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Mariluz',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Maringá',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Mariópolis',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Maripá',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Marmeleiro',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Marquinho',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Marumbi',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Matelândia',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Matinhos',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Mato Rico',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Mauá da Serra',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Medianeira',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Mercedes',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Mirador',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Miraselva',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Missal',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Moreira Sales',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Morretes',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Munhoz de Melo',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nossa Senhora das Graças',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nova Aliança do Ivaí',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nova América da Colina',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nova Aurora',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nova Cantu',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nova Esperança',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nova Esperança do Sudoeste',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nova Fátima',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nova Laranjeiras',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nova Londrina',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nova Olímpia',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nova Santa Bárbara',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nova Santa Rosa',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nova Prata do Iguaçu',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nova Tebas',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Novo Itacolomi',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ortigueira',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ourizona',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ouro Verde do Oeste',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Paiçandu',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Palmas',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Palmeira',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Palmital',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Palotina',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Paraíso do Norte',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Paranacity',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Paranaguá',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Paranapoema',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Paranavaí',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pato Bragado',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pato Branco',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Paula Freitas',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Paulo Frontin',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Peabiru',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Perobal',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pérola',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pérola Do Oeste',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Piên',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pinhais',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pinhalão',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pinhal de São Bento',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pinhão',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Piraí do Sul',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Piraquara',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pitanga',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pitangueiras',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Planaltina do Paraná',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Planalto',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ponta Grossa',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pontal do Paraná',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Porecatu',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Porto Amazonas',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Porto Barreiro',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Porto Rico',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Porto Vitória',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Prado Ferreira',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pranchita',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Presidente Castelo Branco',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Primeiro de Maio',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Prudentópolis',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Quarto Centenário',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Quatiguá',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Quatro Barras',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Quatro Pontes',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Quedas do Iguaçu',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Querência do Norte',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Quinta do Sol',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Quitandinha',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ramilândia',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Rancho Alegre',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Rancho Alegre Do Oeste',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Realeza',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Rebouças',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Renascença',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Reserva',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Reserva do Iguaçu',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ribeirão Claro',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ribeirão do Pinhal',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Rio Azul',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Rio Bom',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Rio Bonito do Iguaçu',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Rio Branco do Ivaí',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Rio Branco do Sul',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Rio Negro',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Rolândia',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Roncador',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Rondon',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Rosário do Ivaí',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Sabáudia',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Salgado Filho',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Salto do Itararé',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Salto do Lontra',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Amélia',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Cecília do Pavão',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Cruz de Monte Castelo',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Fé',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Helena',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Inês',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Isabel do Ivaí',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Izabel do Oeste',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Lúcia',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Maria do Oeste',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Mariana',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Mônica',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santana do Itararé',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Tereza do Oeste',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Terezinha de Itaipu',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santo Antônio da Platina',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santo Antônio do Caiuá',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santo Antônio do Paraíso',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santo Antônio do Sudoeste',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santo Inácio',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Carlos do Ivaí',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Jerônimo da Serra',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São João',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São João do Caiuá',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São João do Ivaí',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São João do Triunfo',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Jorge Do Oeste',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Jorge do Ivaí',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Jorge do Patrocínio',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São José da Boa Vista',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São José das Palmeiras',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São José dos Pinhais',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Manoel do Paraná',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Mateus do Sul',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Miguel do Iguaçu',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Pedro do Iguaçu',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Pedro do Ivaí',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Pedro do Paraná',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Sebastião da Amoreira',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Tomé',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Sapopema',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Sarandi',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Saudade do Iguaçu',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Sengés',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Serranópolis do Iguaçu',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Sertaneja',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Sertanópolis',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Siqueira Campos',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Sulina',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Tamarana',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Tamboara',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Tapejara',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Tapira',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Teixeira Soares',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Telêmaco Borba',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Terra Boa',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Terra Rica',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Terra Roxa',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Tibagi',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Tijucas do Sul',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Toledo',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Tomazina',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Três Barras do Paraná',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Tunas do Paraná',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Tuneiras do Oeste',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Tupãssi',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Turvo',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ubiratã',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Umuarama',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'União da Vitória',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Uniflor',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Uraí',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Wenceslau Braz',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ventania',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Vera Cruz do Oeste',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Verê',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Alto Paraíso',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Doutor Ulysses',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Virmond',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Vitorino',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Xambrê',
            'federative_unit_id' =>  FederativeUnit::where('name','Paraná')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Abdon Batista',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Abelardo Luz',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Agrolândia',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Agronômica',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Água Doce',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Águas de Chapecó',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Águas Frias',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Águas Mornas',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Alfredo Wagner',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Alto Bela Vista',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Anchieta',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Angelina',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Anita Garibaldi',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Anitápolis',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Antônio Carlos',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Apiúna',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Arabutã',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Araquari',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Araranguá',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Armazém',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Arroio Trinta',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Arvoredo',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ascurra',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Atalanta',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Aurora',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Balneário Arroio do Silva',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Balneário Camboriú',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Balneário Barra do Sul',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Balneário Gaivota',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Bandeirante',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Barra Bonita',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Barra Velha',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Bela Vista do Toldo',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Belmonte',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Benedito Novo',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Biguaçu',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Blumenau',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Bocaina do Sul',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Bombinhas',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Bom Jardim da Serra',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Bom Jesus',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Bom Jesus do Oeste',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Bom Retiro',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Botuverá',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Braço do Norte',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Braço do Trombudo',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Brunópolis',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Brusque',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Caçador',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Caibi',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Calmon',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Camboriú',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Capão Alto',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Campo Alegre',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Campo Belo do Sul',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Campo Erê',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Campos Novos',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Canelinha',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Canoinhas',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Capinzal',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Capivari de Baixo',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Catanduvas',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Caxambu do Sul',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Celso Ramos',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cerro Negro',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Chapadão do Lageado',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Chapecó',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cocal do Sul',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Concórdia',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cordilheira Alta',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Coronel Freitas',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Coronel Martins',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Corupá',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Correia Pinto',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Criciúma',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cunha Porã',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cunhataí',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Curitibanos',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Descanso',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Dionísio Cerqueira',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Dona Emma',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Doutor Pedrinho',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Entre Rios',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ermo',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Erval Velho',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Faxinal dos Guedes',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Flor do Sertão',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Florianópolis',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Formosa do Sul',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Forquilhinha',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Fraiburgo',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Frei Rogério',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Galvão',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Garopaba',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Garuva',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Gaspar',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Governador Celso Ramos',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Grão Pará',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Gravatal',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Guabiruba',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Guaraciaba',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Guaramirim',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Guarujá do Sul',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Guatambú',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Herval Do Oeste',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ibiam',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ibicaré',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ibirama',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Içara',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ilhota',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Imaruí',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Imbituba',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Imbuia',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Indaial',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Iomerê',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ipira',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Iporã do Oeste',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ipuaçu',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ipumirim',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Iraceminha',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Irani',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Irati',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Irineópolis',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itá',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itaiópolis',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itajaí',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itapema',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itapiranga',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itapoá',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ituporanga',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Jaborá',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Jacinto Machado',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Jaguaruna',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Jaraguá do Sul',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Jardinópolis',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Joaçaba',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Joinville',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'José Boiteux',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Jupiá',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Lacerdópolis',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Lages',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Laguna',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Lajeado Grande',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Laurentino',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Lauro Muller',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Lebon Régis',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Leoberto Leal',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Lindóia do Sul',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Lontras',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Luiz Alves',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Luzerna',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Macieira',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Mafra',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Major Gercino',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Major Vieira',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Maracajá',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Maravilha',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Marema',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Massaranduba',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Matos Costa',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Meleiro',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Mirim Doce',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Modelo',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Mondaí',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Monte Carlo',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Monte Castelo',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Morro da Fumaça',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Morro Grande',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Navegantes',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nova Erechim',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nova Itaberaba',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nova Trento',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nova Veneza',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Novo Horizonte',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Orleans',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Otacílio Costa',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ouro',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ouro Verde',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Paial',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Painel',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Palhoça',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Palma Sola',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Palmeira',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Palmitos',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );

        City::firstOrCreate( [

            'name' => 'Papanduva',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Paraíso',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Passo de Torres',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Passos Maia',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Paulo Lopes',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pedras Grandes',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Penha',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Peritiba',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pescaria Brava',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Petrolândia',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Balneário Piçarras',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pinhalzinho',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pinheiro Preto',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Piratuba',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Planalto Alegre',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pomerode',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ponte Alta',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ponte Alta do Norte',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ponte Serrada',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Porto Belo',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Porto União',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pouso Redondo',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Praia Grande',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Presidente Castello Branco',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Presidente Getúlio',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Presidente Nereu',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Princesa',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Quilombo',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Rancho Queimado',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Rio das Antas',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Rio do Campo',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Rio do Oeste',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Rio dos Cedros',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Rio do Sul',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Rio Fortuna',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Rio Negrinho',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Rio Rufino',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Riqueza',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Rodeio',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Romelândia',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Salete',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Saltinho',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Salto Veloso',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Sangão',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Cecília',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Helena',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Rosa de Lima',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Rosa do Sul',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Terezinha',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Terezinha do Progresso',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santiago do Sul',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santo Amaro da Imperatriz',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Bernardino',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Bento do Sul',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Bonifácio',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Carlos',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Cristovão do Sul',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Domingos',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Francisco do Sul',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São João do Oeste',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São João Batista',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São João do Itaperiú',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São João do Sul',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Joaquim',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São José',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São José do Cedro',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São José do Cerrito',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Lourenço do Oeste',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Ludgero',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Martinho',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Miguel da Boa Vista',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Miguel do Oeste',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Pedro de Alcântara',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Saudades',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Schroeder',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Seara',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Serra Alta',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Siderópolis',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Sombrio',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Sul Brasil',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Taió',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Tangará',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Tigrinhos',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Tijucas',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Timbé do Sul',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Timbó',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Timbó Grande',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Três Barras',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Treviso',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Treze de Maio',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Treze Tílias',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Trombudo Central',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Tubarão',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Tunápolis',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Turvo',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'União do Oeste',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Urubici',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Urupema',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Urussanga',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Vargeão',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Vargem',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Vargem Bonita',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Vidal Ramos',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Videira',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Vitor Meireles',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Witmarsum',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Xanxerê',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Xavantina',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Xaxim',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Zortéa',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Balneário Rincão',
            'federative_unit_id' =>  FederativeUnit::where('name','Santa Catarina')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Aceguá',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Água Santa',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Agudo',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ajuricaba',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Alecrim',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Alegrete',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Alegria',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Almirante Tamandaré do Sul',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Alpestre',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Alto Alegre',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Alto Feliz',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Alvorada',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Amaral Ferrador',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ametista do Sul',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'André da Rocha',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Anta Gorda',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Antônio Prado',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Arambaré',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Araricá',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Aratiba',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Arroio do Meio',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Arroio do Sal',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Arroio do Padre',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Arroio dos Ratos',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Arroio do Tigre',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Arroio Grande',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Arvorezinha',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Augusto Pestana',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Áurea',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Bagé',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Balneário Pinhal',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Barão',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Barão de Cotegipe',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Barão do Triunfo',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Barracão',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Barra do Guarita',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Barra do Quaraí',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Barra do Ribeiro',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Barra do Rio Azul',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Barra Funda',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Barros Cassal',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Benjamin Constant do Sul',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Bento Gonçalves',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Boa Vista das Missões',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Boa Vista do Buricá',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Boa Vista do Cadeado',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Boa Vista do Incra',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Boa Vista do Sul',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Bom Jesus',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Bom Princípio',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Bom Progresso',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Bom Retiro do Sul',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Boqueirão do Leão',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Bossoroca',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Bozano',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Braga',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Brochier',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Butiá',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Caçapava do Sul',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cacequi',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cachoeira do Sul',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cachoeirinha',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cacique Doble',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Caibaté',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Caiçara',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Camaquã',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Camargo',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cambará do Sul',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Campestre da Serra',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Campina das Missões',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Campinas do Sul',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Campo Bom',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Campo Novo',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Campos Borges',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Candelária',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cândido Godói',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Candiota',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Canela',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Canguçu',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Canoas',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Canudos do Vale',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Capão Bonito do Sul',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Capão da Canoa',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Capão do Cipó',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Capão do Leão',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Capivari do Sul',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Capela de Santana',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Capitão',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Carazinho',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Caraá',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Carlos Barbosa',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Carlos Gomes',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Casca',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Caseiros',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Catuípe',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Caxias do Sul',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Centenário',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cerrito',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cerro Branco',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cerro Grande',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cerro Grande do Sul',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cerro Largo',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Chapada',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Charqueadas',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Charrua',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Chiapetta',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Chuí',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Chuvisca',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cidreira',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ciríaco',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Colinas',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Colorado',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Condor',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Constantina',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Coqueiro Baixo',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Coqueiros do Sul',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Coronel Barros',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Coronel Bicaco',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Coronel Pilar',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cotiporã',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Coxilha',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Crissiumal',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cristal',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cristal do Sul',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cruz Alta',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cruzaltense',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cruzeiro do Sul',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'David Canabarro',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Derrubadas',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Dezesseis de Novembro',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Dilermando de Aguiar',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Dois Irmãos',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Dois Irmãos das Missões',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Dois Lajeados',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Dom Feliciano',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Dom Pedro de Alcântara',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Dom Pedrito',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Dona Francisca',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Doutor Maurício Cardoso',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Doutor Ricardo',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Eldorado do Sul',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Encantado',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Encruzilhada do Sul',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Engenho Velho',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Entre-Ijuís',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Entre Rios do Sul',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Erebango',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Erechim',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ernestina',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Herval',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Erval Grande',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Erval Seco',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Esmeralda',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Esperança do Sul',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Espumoso',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Estação',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Estância Velha',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Esteio',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Estrela',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Estrela Velha',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Eugênio de Castro',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Fagundes Varela',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Farroupilha',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Faxinal do Soturno',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Faxinalzinho',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Fazenda Vilanova',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Feliz',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Flores da Cunha',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Floriano Peixoto',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Fontoura Xavier',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Formigueiro',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Forquetinha',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Fortaleza dos Valos',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Frederico Westphalen',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Garibaldi',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Garruchos',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Gaurama',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'General Câmara',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Gentil',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Getúlio Vargas',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Giruá',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Glorinha',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Gramado',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Gramado dos Loureiros',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Gramado Xavier',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Gravataí',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Guabiju',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Guaíba',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Guaporé',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Guarani das Missões',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Harmonia',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Herveiras',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Horizontina',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Hulha Negra',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Humaitá',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ibarama',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ibiaçá',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ibiraiaras',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ibirapuitã',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ibirubá',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Igrejinha',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ijuí',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ilópolis',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Imbé',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Imigrante',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Independência',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Inhacorá',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ipê',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ipiranga do Sul',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Iraí',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itaara',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itacurubi',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itapuca',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itaqui',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itati',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itatiba do Sul',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ivorá',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ivoti',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Jaboticaba',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Jacuizinho',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Jacutinga',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Jaguarão',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Jaguari',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Jaquirana',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Jari',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Jóia',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Júlio de Castilhos',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Lagoa Bonita do Sul',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Lagoão',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Lagoa dos Três Cantos',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Lagoa Vermelha',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Lajeado',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Lajeado do Bugre',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Lavras do Sul',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Liberato Salzano',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Lindolfo Collor',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Linha Nova',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Machadinho',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Maçambará',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Mampituba',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Manoel Viana',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Maquiné',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Maratá',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Marau',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Marcelino Ramos',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Mariana Pimentel',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Mariano Moro',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Marques de Souza',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Mata',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Mato Castelhano',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Mato Leitão',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Mato Queimado',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Maximiliano de Almeida',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Minas do Leão',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Miraguaí',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Montauri',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Monte Alegre dos Campos',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Monte Belo do Sul',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Montenegro',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Mormaço',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Morrinhos do Sul',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Morro Redondo',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Morro Reuter',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Mostardas',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Muçum',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Muitos Capões',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Muliterno',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Não-Me-Toque',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nicolau Vergueiro',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nonoai',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nova Alvorada',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nova Araçá',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nova Bassano',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nova Boa Vista',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nova Bréscia',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nova Candelária',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nova Esperança do Sul',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nova Hartz',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nova Pádua',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nova Palma',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nova Petrópolis',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nova Prata',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nova Ramada',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nova Roma do Sul',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nova Santa Rita',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Novo Cabrais',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Novo Hamburgo',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Novo Machado',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Novo Tiradentes',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Novo Xingu',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Novo Barreiro',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Osório',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Paim Filho',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Palmares do Sul',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Palmeira das Missões',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Palmitinho',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Panambi',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pantano Grande',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Paraí',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Paraíso do Sul',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pareci Novo',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Parobé',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Passa Sete',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Passo do Sobrado',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Passo Fundo',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Paulo Bento',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Paverama',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pedras Altas',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pedro Osório',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pejuçara',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pelotas',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Picada Café',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pinhal',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pinhal da Serra',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pinhal Grande',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pinheirinho do Vale',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pinheiro Machado',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pinto Bandeira',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pirapó',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Piratini',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Planalto',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Poço das Antas',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pontão',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ponte Preta',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Portão',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Porto Alegre',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Porto Lucena',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Porto Mauá',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Porto Vera Cruz',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Porto Xavier',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pouso Novo',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Presidente Lucena',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Progresso',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Protásio Alves',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Putinga',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Quaraí',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Quatro Irmãos',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Quevedos',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Quinze de Novembro',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Redentora',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Relvado',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Restinga Seca',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Rio dos Índios',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Rio Grande',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Rio Pardo',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Riozinho',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Roca Sales',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Rodeio Bonito',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Rolador',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Rolante',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ronda Alta',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Rondinha',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Roque Gonzales',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Rosário do Sul',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Sagrada Família',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Saldanha Marinho',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Salto do Jacuí',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Salvador das Missões',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Salvador do Sul',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Sananduva',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Bárbara do Sul',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Cecília do Sul',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Clara do Sul',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Cruz do Sul',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Maria',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Maria do Herval',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Margarida do Sul',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santana da Boa Vista',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Sant Ana do Livramento',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Rosa',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Tereza',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Vitória do Palmar',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santiago',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santo Ângelo',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santo Antônio do Palma',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santo Antônio da Patrulha',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santo Antônio das Missões',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santo Antônio do Planalto',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santo Augusto',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santo Cristo',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santo Expedito do Sul',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Borja',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Domingos do Sul',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Francisco de Assis',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Francisco de Paula',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Gabriel',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Jerônimo',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São João da Urtiga',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São João do Polêsine',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Jorge',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São José das Missões',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São José do Herval',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São José do Hortêncio',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São José do Inhacorá',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São José do Norte',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São José do Ouro',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São José do Sul',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São José dos Ausentes',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Leopoldo',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Lourenço do Sul',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Luiz Gonzaga',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Marcos',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Martinho',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Martinho da Serra',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Miguel das Missões',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Nicolau',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Paulo das Missões',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Pedro da Serra',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Pedro das Missões',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Pedro do Butiá',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Pedro do Sul',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Sebastião do Caí',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Sepé',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Valentim',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Valentim do Sul',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Valério do Sul',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Vendelino',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Vicente do Sul',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Sapiranga',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Sapucaia do Sul',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Sarandi',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Seberi',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Sede Nova',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Segredo',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Selbach',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Senador Salgado Filho',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Sentinela do Sul',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Serafina Corrêa',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Sério',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Sertão',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Sertão Santana',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Sete de Setembro',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Severiano de Almeida',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Silveira Martins',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Sinimbu',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Sobradinho',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Soledade',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Tabaí',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Tapejara',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Tapera',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Tapes',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Taquara',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Taquari',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Taquaruçu do Sul',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Tavares',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Tenente Portela',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Terra de Areia',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Teutônia',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Tio Hugo',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Tiradentes do Sul',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Toropi',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Torres',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Tramandaí',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Travesseiro',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Três Arroios',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Três Cachoeiras',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Três Coroas',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Três de Maio',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Três Forquilhas',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Três Palmeiras',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Três Passos',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Trindade do Sul',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Triunfo',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Tucunduva',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Tunas',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Tupanci do Sul',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Tupanciretã',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Tupandi',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Tuparendi',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Turuçu',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ubiretama',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'União da Serra',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Unistalda',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Uruguaiana',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Vacaria',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Vale Verde',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Vale do Sol',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Vale Real',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Vanini',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Venâncio Aires',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Vera Cruz',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Veranópolis',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Vespasiano Correa',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Viadutos',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Viamão',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Vicente Dutra',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Victor Graeff',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Vila Flores',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Vila Lângaro',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Vila Maria',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Vila Nova do Sul',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Vista Alegre',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Vista Alegre do Prata',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Vista Gaúcha',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Vitória das Missões',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Westfalia',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Xangri-lá',
            'federative_unit_id' =>  FederativeUnit::where('name','Rio Grande do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Água Clara',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Alcinópolis',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Amambai',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Anastácio',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Anaurilândia',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Angélica',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Antônio João',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Aparecida do Taboado',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Aquidauana',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Aral Moreira',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Bandeirantes',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Bataguassu',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Batayporã',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Bela Vista',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Bodoquena',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Bonito',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Brasilândia',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Caarapó',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Camapuã',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Campo Grande',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Caracol',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cassilândia',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Chapadão do Sul',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Corguinho',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Coronel Sapucaia',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Corumbá',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Costa Rica',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Coxim',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Deodápolis',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Dois Irmãos do Buriti',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Douradina',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Dourados',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Eldorado',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Fátima do Sul',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Figueirão',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Glória de Dourados',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Guia Lopes da Laguna',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Iguatemi',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Inocência',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itaporã',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itaquiraí',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ivinhema',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Japorã',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Jaraguari',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Jardim',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Jateí',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Juti',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ladário',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Laguna Carapã',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Maracaju',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Miranda',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Mundo Novo',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Naviraí',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nioaque',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nova Alvorada do Sul',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nova Andradina',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Novo Horizonte do Sul',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Paraíso das Águas',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Paranaíba',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Paranhos',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pedro Gomes',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ponta Porã',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Porto Murtinho',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ribas do Rio Pardo',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Rio Brilhante',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Rio Negro',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Rio Verde de Mato Grosso',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Rochedo',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Rita do Pardo',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Gabriel do Oeste',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Sete Quedas',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Selvíria',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Sidrolândia',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Sonora',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Tacuru',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Taquarussu',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Terenos',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Três Lagoas',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Vicentina',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso do Sul')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Acorizal',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Água Boa',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Alta Floresta',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Alto Araguaia',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Alto Boa Vista',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Alto Garças',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Alto Paraguai',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Alto Taquari',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Apiacás',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Araguaiana',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Araguainha',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Araputanga',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Arenápolis',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Aripuanã',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Barão de Melgaço',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Barra do Bugres',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Barra do Garças',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Bom Jesus do Araguaia',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Brasnorte',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cáceres',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Campinápolis',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Campo Novo do Parecis',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Campo Verde',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Campos de Júlio',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Canabrava do Norte',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Canarana',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Carlinda',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Castanheira',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Chapada dos Guimarães',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cláudia',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cocalinho',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Colíder',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Colniza',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Comodoro',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Confresa',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Conquista Do Oeste',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cotriguaçu',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cuiabá',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Curvelândia',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Denise',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Diamantino',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Dom Aquino',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Feliz Natal',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Figueirópolis Do Oeste',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Gaúcha do Norte',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'General Carneiro',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Glória Do Oeste',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Guarantã do Norte',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Guiratinga',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Indiavaí',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ipiranga do Norte',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itanhangá',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itaúba',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itiquira',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Jaciara',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Jangada',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Jauru',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Juara',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Juína',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Juruena',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Juscimeira',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Lambari Do Oeste',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Lucas do Rio Verde',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Luciara',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Vila Bela da Santíssima Trindade',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Marcelândia',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Matupá',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Mirassol Do Oeste',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nobres',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nortelândia',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nossa Senhora do Livramento',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nova Bandeirantes',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nova Nazaré',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nova Lacerda',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nova Santa Helena',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nova Brasilândia',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nova Canaã do Norte',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nova Mutum',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nova Olímpia',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nova Ubiratã',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nova Xavantina',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Novo Mundo',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Novo Horizonte do Norte',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Novo São Joaquim',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Paranaíta',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Paranatinga',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Novo Santo Antônio',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pedra Preta',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Peixoto de Azevedo',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Planalto da Serra',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Poconé',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pontal do Araguaia',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ponte Branca',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pontes e Lacerda',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Porto Alegre do Norte',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Porto dos Gaúchos',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Porto Esperidião',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Porto Estrela',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Poxoréo',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Primavera do Leste',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Querência',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São José dos Quatro Marcos',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Reserva do Cabaçal',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ribeirão Cascalheira',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ribeirãozinho',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Rio Branco',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Carmem',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santo Afonso',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São José do Povo',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São José do Rio Claro',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São José do Xingu',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Pedro da Cipa',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Rondolândia',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Rondonópolis',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Rosário Oeste',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Cruz do Xingu',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Salto do Céu',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Rita do Trivelato',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Terezinha',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santo Antônio do Leste',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santo Antônio do Leverger',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Félix do Araguaia',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Sapezal',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Serra Nova Dourada',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Sinop',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Sorriso',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Tabaporã',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Tangará da Serra',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Tapurah',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Terra Nova do Norte',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Tesouro',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Torixoréu',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'União do Sul',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Vale de São Domingos',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Várzea Grande',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Vera',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Vila Rica',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nova Guarita',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nova Marilândia',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nova Maringá',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nova Monte Verde',
            'federative_unit_id' =>  FederativeUnit::where('name','Mato Grosso')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Abadia de Goiás',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Abadiânia',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Acreúna',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Adelândia',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Água Fria de Goiás',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Água Limpa',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Águas Lindas de Goiás',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Alexânia',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Aloândia',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Alto Horizonte',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Alto Paraíso de Goiás',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Alvorada do Norte',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Amaralina',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Americano do Brasil',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Amorinópolis',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Anápolis',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Anhanguera',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Anicuns',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Aparecida de Goiânia',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Aparecida do Rio Doce',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Aporé',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Araçu',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Aragarças',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Aragoiânia',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Araguapaz',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Arenópolis',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Aruanã',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Aurilândia',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Avelinópolis',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Baliza',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Barro Alto',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Bela Vista de Goiás',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Bom Jardim de Goiás',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Bom Jesus de Goiás',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Bonfinópolis',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Bonópolis',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Brazabrantes',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Britânia',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Buriti Alegre',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Buriti de Goiás',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Buritinópolis',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cabeceiras',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cachoeira Alta',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cachoeira de Goiás',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cachoeira Dourada',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Caçu',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Caiapônia',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Caldas Novas',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Caldazinha',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Campestre de Goiás',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Campinaçu',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Campinorte',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Campo Alegre de Goiás',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Campo Limpo de Goiás',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Campos Belos',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Campos Verdes',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Carmo do Rio Verde',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Castelândia',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Catalão',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Caturaí',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cavalcante',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ceres',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cezarina',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Chapadão do Céu',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cidade Ocidental',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cocalzinho de Goiás',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Colinas do Sul',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Córrego do Ouro',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Corumbá de Goiás',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Corumbaíba',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cristalina',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cristianópolis',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Crixás',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cromínia',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Cumari',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Damianópolis',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Damolândia',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Davinópolis',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Diorama',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Doverlândia',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Edealina',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Edéia',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Estrela do Norte',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Faina',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Fazenda Nova',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Firminópolis',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Flores de Goiás',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Formosa',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Formoso',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Gameleira de Goiás',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Divinópolis de Goiás',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Goianápolis',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Goiandira',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Goianésia',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Goiânia',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Goianira',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Goiás',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Goiatuba',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Gouvelândia',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Guapó',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Guaraíta',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Guarani de Goiás',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Guarinos',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Heitoraí',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Hidrolândia',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Hidrolina',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Iaciara',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Inaciolândia',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Indiara',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Inhumas',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ipameri',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ipiranga de Goiás',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Iporá',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Israelândia',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itaberaí',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itaguari',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itaguaru',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itajá',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itapaci',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itapirapuã',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itapuranga',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itarumã',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itauçu',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Itumbiara',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ivolândia',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Jandaia',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Jaraguá',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Jataí',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Jaupaci',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Jesúpolis',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Joviânia',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Jussara',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Lagoa Santa',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Leopoldo de Bulhões',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Luziânia',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Mairipotaba',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Mambaí',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Mara Rosa',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Marzagão',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Matrinchã',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Maurilândia',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Mimoso de Goiás',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Minaçu',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Mineiros',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Moiporá',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Monte Alegre de Goiás',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Montes Claros de Goiás',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Montividiu',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Montividiu do Norte',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Morrinhos',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Morro Agudo de Goiás',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Mossâmedes',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Mozarlândia',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Mundo Novo',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Mutunópolis',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nazário',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nerópolis',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Niquelândia',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nova América',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nova Aurora',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nova Crixás',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nova Glória',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nova Iguaçu de Goiás',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nova Roma',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Nova Veneza',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Novo Brasil',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Novo Gama',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Novo Planalto',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Orizona',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ouro Verde de Goiás',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Ouvidor',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Padre Bernardo',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Palestina de Goiás',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Palmeiras de Goiás',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Palmelo',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Palminópolis',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Panamá',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Paranaiguara',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Paraúna',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Perolândia',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Petrolina de Goiás',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pilar de Goiás',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Piracanjuba',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Piranhas',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pirenópolis',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pires do Rio',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Planaltina',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Pontalina',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Porangatu',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Porteirão',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Portelândia',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Posse',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Professor Jamil',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Quirinópolis',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Rialma',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Rianápolis',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Rio Quente',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Rio Verde',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Rubiataba',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Sanclerlândia',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Bárbara de Goiás',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Cruz de Goiás',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Fé de Goiás',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Helena de Goiás',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Isabel',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Rita do Araguaia',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Rita do Novo Destino',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Rosa de Goiás',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Tereza de Goiás',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santa Terezinha de Goiás',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santo Antônio da Barra',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santo Antônio de Goiás',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Santo Antônio do Descoberto',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Domingos',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Francisco de Goiás',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São João D Aliança',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São João da Paraúna',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Luís de Montes Belos',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Luíz do Norte',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Miguel do Araguaia',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Miguel do Passa Quatro',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Patrício',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'São Simão',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Senador Canedo',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Serranópolis',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Silvânia',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Simolândia',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Sítio D Abadia',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Taquaral de Goiás',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Teresina de Goiás',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Terezópolis de Goiás',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Três Ranchos',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Trindade',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Trombas',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Turvânia',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Turvelândia',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Uirapuru',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Uruaçu',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Uruana',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Urutaí',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Valparaíso de Goiás',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Varjão',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Vianópolis',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Vicentinópolis',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Vila Boa',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Vila Propício',
            'federative_unit_id' =>  FederativeUnit::where('name','Goiás')->first()->id
        ] );



        City::firstOrCreate( [

            'name' => 'Brasília',
            'federative_unit_id' =>  FederativeUnit::where('name','Distrito Federal')->first()->id
        ] );
    }
}
