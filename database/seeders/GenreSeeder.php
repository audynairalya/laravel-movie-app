<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Genre::create([
            'name' => 'Adventure and Action',
            'description' => 'Action adventure fantasy blends thrilling action with fantastical elements, featuring daring heroes in epic quests against dark forces in imaginative worlds.'
        ]);

        Genre::create([
            'name' => 'Dark Fantasy',
            'description' => 'Dark fantasy genre combines fantastical elements with grim, often macabre themes, exploring the darker aspects of human nature and society within supernatural settings.'
        ]);

        Genre::create([
            'name' => 'Supernatural',
            'description' => 'The supernatural genre typically refers to a category of fiction that involves elements beyond the natural world, often featuring paranormal or magical phenomena.'
        ]);

        Genre::create([
            'name' => 'Comedy',
            'description' => 'This movie often incorporates humor through character interactions, Luffys playful and carefree personality, and the absurd situations the crew finds themselves in, providing a balance to the more serious themes.'
        ]);

        Genre::create([
            'name' => 'Historical',
            'description' => 'This genre involves settings from past eras, often incorporating elements of real history. Demon Slayer is set during the Taisho period in Japan (1912-1926), and it incorporates cultural and historical aspects of that era. The period setting enriches the story, providing a backdrop of early 20th-century Japan with traditional clothing, architecture, and societal norms.'
        ]);
    }
}
