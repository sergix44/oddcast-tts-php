<?php


namespace SergiX44\OddcastTTS\Voices\Polish;


use SergiX44\OddcastTTS\Voices\Voice;

class Zosia implements Voice
{

    public function getID(): int
    {
        return 1;
    }

    public function getLanguageID(): int
    {
        return 14;
    }

    public function getLanguageName(): string
    {
        return 'Polish';
    }

    public function getName(): string
    {
        return 'Zosia';
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