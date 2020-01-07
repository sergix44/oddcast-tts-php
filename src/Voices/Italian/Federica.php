<?php


namespace SergiX44\OddcastTTS\Voices\Italian;


use SergiX44\OddcastTTS\Voices\Voice;

class Federica implements Voice
{

    public function getID(): int
    {
        return 10;
    }

    public function getLanguageID(): int
    {
        return 7;
    }

    public function getLanguageName(): string
    {
        return 'Italian';
    }

    public function getName(): string
    {
        return 'Federica';
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