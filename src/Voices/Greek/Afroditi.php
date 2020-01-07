<?php


namespace SergiX44\OddcastTTS\Voices\Greek;


use SergiX44\OddcastTTS\Voices\Voice;

class Afroditi implements Voice
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
        return 'Afroditi';
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