<?php


namespace SergiX44\OddcastTTS\Voices\Russian;


use SergiX44\OddcastTTS\Voices\Voice;

class Olga implements Voice
{

    public function getID(): int
    {
        return 1;
    }

    public function getLanguageID(): int
    {
        return 21;
    }

    public function getLanguageName(): string
    {
        return 'Russian';
    }

    public function getName(): string
    {
        return 'Olga';
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