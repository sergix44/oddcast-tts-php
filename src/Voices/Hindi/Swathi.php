<?php


namespace SergiX44\OddcastTTS\Voices\Hindi;


use SergiX44\OddcastTTS\Voices\Voice;

class Swathi implements Voice
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
        return 'Swathi';
    }

    public function getGender(): string
    {
        return 'F';
    }

    public function getEngine(): int
    {
        return 7;
    }
}