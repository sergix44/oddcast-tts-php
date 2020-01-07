<?php


namespace SergiX44\OddcastTTS\Voices\Finnish;


use SergiX44\OddcastTTS\Voices\Voice;

class Milla implements Voice
{

    public function getID(): int
    {
        return 1;
    }

    public function getLanguageID(): int
    {
        return 23;
    }

    public function getLanguageName(): string
    {
        return 'Finnish';
    }

    public function getName(): string
    {
        return 'Milla';
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