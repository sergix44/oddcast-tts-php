<?php


namespace SergiX44\OddcastTTS\Voices\French;


use SergiX44\OddcastTTS\Voices\Voice;

class Virginie implements Voice
{

    public function getID(): int
    {
        return 4;
    }

    public function getLanguageID(): int
    {
        return 4;
    }

    public function getLanguageName(): string
    {
        return 'French';
    }

    public function getName(): string
    {
        return 'Virginie';
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