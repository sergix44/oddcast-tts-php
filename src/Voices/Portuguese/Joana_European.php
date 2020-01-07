<?php


namespace SergiX44\OddcastTTS\Voices\Portuguese;


use SergiX44\OddcastTTS\Voices\Voice;

class Joana_European implements Voice
{

    public function getID(): int
    {
        return 3;
    }

    public function getLanguageID(): int
    {
        return 6;
    }

    public function getLanguageName(): string
    {
        return 'Portuguese';
    }

    public function getName(): string
    {
        return 'Joana_European';
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