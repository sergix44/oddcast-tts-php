<?php


namespace SergiX44\OddcastTTS\Voices\Turkish;


use SergiX44\OddcastTTS\Voices\Voice;

class Zeynep implements Voice
{

    public function getID(): int
    {
        return 2;
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
        return 'Zeynep';
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