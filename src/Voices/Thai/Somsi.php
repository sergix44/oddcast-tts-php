<?php


namespace SergiX44\OddcastTTS\Voices\Thai;


use SergiX44\OddcastTTS\Voices\Voice;

class Somsi implements Voice
{

    public function getID(): int
    {
        return 2;
    }

    public function getLanguageID(): int
    {
        return 26;
    }

    public function getLanguageName(): string
    {
        return 'Thai';
    }

    public function getName(): string
    {
        return 'Somsi';
    }

    public function getGender(): string
    {
        return 'F';
    }

    public function getEngine(): int
    {
        return 3;
    }
}