<?php


namespace SergiX44\OddcastTTS\Voices\Turkish;


use SergiX44\OddcastTTS\Voices\Voice;

class Zehra implements Voice
{

    public function getID(): int
    {
        return 1;
    }

    public function getLanguageID(): int
    {
        return 16;
    }

    public function getLanguageName(): string
    {
        return 'Turkish';
    }

    public function getName(): string
    {
        return 'Zehra';
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