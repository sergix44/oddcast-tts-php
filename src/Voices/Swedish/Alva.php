<?php


namespace SergiX44\OddcastTTS\Voices\Swedish;


use SergiX44\OddcastTTS\Voices\Voice;

class Alva implements Voice
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
        return 'Alva';
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