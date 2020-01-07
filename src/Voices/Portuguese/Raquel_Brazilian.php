<?php


namespace SergiX44\OddcastTTS\Voices\Portuguese;


use SergiX44\OddcastTTS\Voices\Voice;

class Raquel_Brazilian implements Voice
{

    public function getID(): int
    {
        return 2;
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
        return 'Raquel_Brazilian';
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