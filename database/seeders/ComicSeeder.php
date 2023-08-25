<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = config('comics');
        foreach ($data as $item) {

            $comic = new Comic();
            $comic->title = $item['title'];
            $comic->description = $item['description'];
            $comic->thumb = $item['thumb'];
            $comic->price = $item['price'];
            $comic->series = $item['series'];
            $comic->sale_date = $item['sale_date'];
            $comic->type = $item['type'];
            $comic->artists = implode(',', $item['artists']);
            $comic->writers = implode(',', $item['writers']);

            $comic->save();
        }
    }
}
