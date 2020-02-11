<?php

use Illuminate\Database\Seeder;
use App\Models\Dma;

class DmasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Dma::create(['name' => 'Corbally']);
        Dma::create(['name' => 'Ballincurrig - Lisgould']);
        Dma::create(['name' => 'Walshtown Beg']);
        Dma::create(['name' => 'Clash Leamlara']);
        Dma::create(['name' => 'Dungourney']);
        Dma::create(['name' => 'Bilberry']);
        Dma::create(['name' => 'Church Meter']);
        Dma::create(['name' => 'Barryscourt Meter']);
        Dma::create(['name' => 'Castle Meter']);
        Dma::create(['name' => 'Ballintubrid Meter']);
        Dma::create(['name' => 'Weighbridge Meter']);
        Dma::create(['name' => 'Broomfield Res Outflow']);
        Dma::create(['name' => 'Broomfield Group Scheme']);
        Dma::create(['name' => 'Broomfield Village']);
        Dma::create(['name' => 'Midleton Main St Flow']);
        Dma::create(['name' => 'Cork Road Meter']);
        Dma::create(['name' => 'Market Green Flow']);
        Dma::create(['name' => 'Church Lane']);
        Dma::create(['name' => 'Irish Distillers']);
        Dma::create(['name' => 'Ballinacurra Bulk']);
        Dma::create(['name' => 'Rosehill Estate']);
        Dma::create(['name' => 'Ballinacurra Main Road']);
        Dma::create(['name' => 'Ballinacurra Village Meter']);
        Dma::create(['name' => 'East Ferry']);
    }
}
