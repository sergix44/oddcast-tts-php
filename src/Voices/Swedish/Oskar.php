<?php


namespace SergiX44\OddcastTTS\Voices\Swedish;


use SergiX44\OddcastTTS\Voices\Voice;

class Oskar implements Voice
{

    public function getID(): int
    {
        return 3;
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
        return 'Oskar';
    }

    public function getGender(): string
    {
        return 'M';
    }

    public function getEngine(): int
    {
        return 4;
    }
}