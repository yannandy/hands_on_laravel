<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\realmeditation;

class realmeditationseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        realmeditation::create([
            'versetBiblique'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit asperiores aliquid voluptate, error facilis rerum labore quas repellat voluptas vero voluptatibus est! Provident, nulla vel doloribus nihil asperiores eveniet deserunt!
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam error vel nisi voluptates quae fugiat culpa eveniet sint recusandae ad, libero nam dignissimos repellat reprehenderit. Id, rem deserunt. Quod, quasi?',
            'referenceBiblique'=>'Alicia KONE'
        ]);
    }
}
