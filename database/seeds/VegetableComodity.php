<?php

use Illuminate\Database\Seeder;

class VegetableComodity extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vegetable_comodity')->insert([
            'vegetable_name'    => 'Sawi',
            'unit'              => 'Ikat',
            'vegetable_price'   => 2500,
            'availability'      => 'available',
            'status_price'      => '2%'
        ]);

        DB::table('vegetable_comodity')->insert([
            'vegetable_name'    => 'Bayam',
            'unit'              => 'Ikat',
            'vegetable_price'   => 1500,
            'availability'      => 'available',
            'status_price'      => '0%'
        ]);

        DB::table('vegetable_comodity')->insert([
            'vegetable_name'    => 'Cabai Rawit',
            'unit'              => 'Kg',
            'vegetable_price'   => 35000,
            'availability'      => 'rare',
            'status_price'      => '10%'
        ]);

        DB::table('vegetable_comodity')->insert([
            'vegetable_name'    => 'Cabai Merah Besar',
            'unit'              => 'Kg',
            'vegetable_price'   => 40000,
            'availability'      => 'epic',
            'status_price'      => '15%'
        ]);

        DB::table('vegetable_comodity')->insert([
            'vegetable_name'    => 'Tomat',
            'unit'              => 'Kg',
            'vegetable_price'   => 15000,
            'availability'      => 'available',
            'status_price'      => '7%'
        ]);

        DB::table('vegetable_comodity')->insert([
            'vegetable_name'    => 'Terong',
            'unit'              => 'Kg',
            'vegetable_price'   => 7000,
            'availability'      => 'available',
            'status_price'      => '-5%'
        ]);

        DB::table('vegetable_comodity')->insert([
            'vegetable_name'    => 'Kacang Panjang',
            'unit'              => 'Ikat',
            'vegetable_price'   => 5000,
            'availability'      => 'available',
            'status_price'      => '-3%'
        ]);

        DB::table('vegetable_comodity')->insert([
            'vegetable_name'    => 'Wortel',
            'unit'              => 'Kg',
            'vegetable_price'   => 7500,
            'availability'      => 'rare',
            'status_price'      => '5%'
        ]);

        DB::table('vegetable_comodity')->insert([
            'vegetable_name'    => 'Kangkung',
            'unit'              => 'Ikat',
            'vegetable_price'   => 2500,
            'availability'      => 'available',
            'status_price'      => '2%'
        ]);

        DB::table('vegetable_comodity')->insert([
            'vegetable_name'    => 'Kubis',
            'unit'              => 'Buah',
            'vegetable_price'   => 5000,
            'availability'      => 'available',
            'status_price'      => '0%'
        ]);
    }
}
