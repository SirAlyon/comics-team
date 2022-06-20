<?php
use App\Models\Character;
use Illuminate\Database\Seeder;

class CharacterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $characters = config('db.characters');

        foreach ($characters as $character) {
            # code...
            $new_character = new Character();
            $new_character->name = $character['name'];
            $new_character->description = $character['description'];
            $new_character->thumb = $character['thumb'];
            $new_character->powers = $character['powers'];
            $new_character->save();
        }

    }
}
