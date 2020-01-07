<?php


namespace SergiX44\OddcastTTS\Voices\Galician;


use SergiX44\OddcastTTS\Voices\Voice;

class Carmela implements Voice
{

    public function getID(): int
    {
        return 1;
    }

    public function getLanguageID(): int
    {
        return 15;
    }

    public function getLanguageName(): string
    {
        return 'Galician';
    }

    public function getName(): string
    {
        return 'Carmela';
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