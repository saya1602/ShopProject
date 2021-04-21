<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'Jordan Air 1 Low Junior',
                'price' => '68990',
                'description' => "Keeping the OG design lines, these mid-profile
                sneakers have a premium leather upper in a White and Turf Orange colourway. 
                They feature breathable perforations and a secure lace up fastening. ",
                'gallery' => 'air-jordan-1-low-black-toe-removebg-preview.png'
            ],
            [
                'name' => 'Nike Air Force 1 Pixel SE Women’s Leopard Sneaker',
                'price' => '47990',
                'description' => "The animal print accents add a little wildness, while the soft, 
                textured overlays paired with a new underlayed Swoosh design add depth. The new 
                sole mixes foam with rubber pods in high-wear areas.",
                'gallery' => 'nike-air-force-1-pixel-leopard-1-1000.png'
            ],
            [
                'name' => 'SUPERSTAR SHOES',
                'price' => '32990',
                'description' => "These shoes show off the materials, proportions and style that 
                made the original such a legend. They've got a smooth leather upper with sporty 
                3-Stripes and a heel tab.",
                'gallery' => 'adidas-superstar.png'
            ],
            [
                'name' => 'QT RACER SPORT SHOES',
                'price' => '68990',
                'description' => "This product 
                is made with Primeblue, a high-performance recycled material made in part with Parley 
                Ocean Plastic. 50% of the upper is textile, 75% of the textile is Primeblue yarn. 
                No virgin polyester.",
                'gallery' => 'adidas-7092-10388-1-removebg-preview.png'
            ]
        ]);
    }
}
