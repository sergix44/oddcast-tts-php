<?php


namespace SergiX44\OddcastTTS\Voices\Indonesian;


use SergiX44\OddcastTTS\Voices\Voice;

class Bintang implements Voice
{

    public function getID(): int
    {
        return 2;
    }

    public function getLanguageID(): int
    {
        return 28;
    }

    public function getLanguageName(): string
    {
        return 'Indonesian';
    }

    public function getName(): string
    {
        return 'Bintang';
    }

    public function getGender(): string
    {
        return 'M';
    }

    public function getEngine(): int
    {
        return 7;
    }
}