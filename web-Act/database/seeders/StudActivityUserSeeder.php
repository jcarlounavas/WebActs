<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\StudentActs;


class StudActivityUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        StudentActs::create([
            'name' => 'John Navs',
            'email' => 'navs@gmail.com',
            'age' => 20]);


        StudentActs::create([
            'name' => 'John Navas',
            'email' => 'navas@gmail.com',
            'age' => 21]);
    }
}
