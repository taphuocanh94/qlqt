<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Taxonomy;

class TaxonomySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Taxonomy::create([
            'name' => 'Đơn vị',
            'slug' => 'division',
            'is_singular' => true,
            'entity' => 'user'
        ]);
    }
}
