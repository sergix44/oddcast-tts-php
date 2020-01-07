<?php


namespace SergiX44\OddcastTTS\Voices\Indonesian;


use SergiX44\OddcastTTS\Voices\Voice;

class Putri implements Voice
{

    public function getID(): int
    {
        return 1;
    }

    public function getLanguageID(): int
    {
        return 28;
    }

    public function getLanguageName(): string
    {
        return 'Indonesian';
    }

    public function getName(): string
    {
        return 'Putri';
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