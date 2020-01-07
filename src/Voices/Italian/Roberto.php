<?php


namespace SergiX44\OddcastTTS\Voices\Italian;


use SergiX44\OddcastTTS\Voices\Voice;

class Roberto implements Voice
{

    public function getID(): int
    {
        return 2;
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
        return 'Roberto';
    }

    public function getGender(): string
    {
        return 'M';
    }

    public function getEngine(): int
    {
        return 3;
    }
}