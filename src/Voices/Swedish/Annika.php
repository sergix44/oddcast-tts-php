<?php


namespace SergiX44\OddcastTTS\Voices\Swedish;


use SergiX44\OddcastTTS\Voices\Voice;

class Annika implements Voice
{

    public function getID(): int
    {
        return 1;
    }

    public function getLanguageID(): int
    {
        return 9;
    }

    public function getLanguageName(): string
    {
        return 'Swedish';
    }

    public function getName(): string
    {
        return 'Annika';
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