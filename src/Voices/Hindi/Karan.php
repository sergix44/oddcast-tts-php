<?php


namespace SergiX44\OddcastTTS\Voices\Hindi;


use SergiX44\OddcastTTS\Voices\Voice;

class Karan implements Voice
{

    public function getID(): int
    {
        return 2;
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
        return 'Karan';
    }

    public function getGender(): string
    {
        return 'M';
    }

    public function getEngine(): int
    {
        return 7;
    }
}