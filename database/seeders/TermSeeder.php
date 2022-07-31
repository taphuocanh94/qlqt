<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Taxonomy;
use App\Models\Term;

class TermSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $don_vi = Taxonomy::where('slug', 'division')->first();

        $don_vi->terms()->create([
            'name' => 'Tổ chức, Hành chính và Cơ sở vật chất',
            'slug' => 'tchc'
        ]);
        $don_vi->terms()->create([
            'name' => 'Khảo thí, BĐCLGD, Thanh tra và pháp chế',
            'slug' => 'ktdbclgd'
        ]);
        $don_vi->terms()->create([
            'name' => 'Đào tạo và Công tác sinh viên',
            'slug' => 'dtctsv'
        ]);
        $don_vi->terms()->create([
            'name' => 'Khoa học, HTQT và Thông tin thư viện',
            'slug' => 'khhtqttttv'
        ]);
        $don_vi->terms()->create([
            'name' => 'Kế hoạch – Tài chính',
            'slug' => 'khtc'
        ]);
        $don_vi->terms()->create([
            'name' => 'Viện Nghiên cứu phát triển',
            'slug' => 'vncpt'
        ]);
    }
}
