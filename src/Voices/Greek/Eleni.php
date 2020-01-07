<?php


namespace SergiX44\OddcastTTS\Voices\Greek;


use SergiX44\OddcastTTS\Voices\Voice;

class Eleni implements Voice
{

    public function getID(): int
    {
        return 1;
    }

    public function getLanguageID(): int
    {
        return 8;
    }

    public function getLanguageName(): string
    {
        return 'Greek';
    }

    public function getName(): string
    {
        return 'Eleni';
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