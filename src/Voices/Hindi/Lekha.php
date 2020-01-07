<?php


namespace SergiX44\OddcastTTS\Voices\Hindi;


use SergiX44\OddcastTTS\Voices\Voice;

class Lekha implements Voice
{

    public function getID(): int
    {
        return 1;
    }

    public function getLanguageID(): int
    {
        return 24;
    }

    public function getLanguageName(): string
    {
        return 'Hindi';
    }

    public function getName(): string
    {
        return 'Lekha';
    }

    public function getGender(): string
    {
        return 'F';
    }

    public function getEngine(): int
    {
        return 4;
    }
}