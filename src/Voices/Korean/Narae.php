<?php


namespace SergiX44\OddcastTTS\Voices\Korean;


use SergiX44\OddcastTTS\Voices\Voice;

class Narae implements Voice
{

    public function getID(): int
    {
        return 1;
    }

    public function getLanguageID(): int
    {
        return 13;
    }

    public function getLanguageName(): string
    {
        return 'Korean';
    }

    public function getName(): string
    {
        return 'Narae';
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