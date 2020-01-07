<?php


namespace SergiX44\OddcastTTS\Voices\Turkish;


use SergiX44\OddcastTTS\Voices\Voice;

class Kerem implements Voice
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
        return 'Kerem';
    }

    public function getGender(): string
    {
        return 'M';
    }

    public function getEngine(): int
    {
        return 2;
    }
}