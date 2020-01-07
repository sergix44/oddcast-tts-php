<?php


namespace SergiX44\OddcastTTS\Voices\Catalan;


use SergiX44\OddcastTTS\Voices\Voice;

class Empar_Valencian implements Voice
{

    public function getID(): int
    {
        return 3;
    }

    public function getLanguageID(): int
    {
        return 5;
    }

    public function getLanguageName(): string
    {
        return 'Catalan';
    }

    public function getName(): string
    {
        return 'Empar_Valencian';
    }

    public function getGender(): string
    {
        return 'F';
    }

    public function getEngine(): int
    {
        return 2;
    }
}