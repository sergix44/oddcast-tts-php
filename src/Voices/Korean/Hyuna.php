<?php


namespace SergiX44\OddcastTTS\Voices\Korean;


use SergiX44\OddcastTTS\Voices\Voice;

class Hyuna implements Voice
{

    public function getID(): int
    {
        return 8;
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
        return 'Hyuna';
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