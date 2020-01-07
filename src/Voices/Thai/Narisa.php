<?php


namespace SergiX44\OddcastTTS\Voices\Thai;


use SergiX44\OddcastTTS\Voices\Voice;

class Narisa implements Voice
{

    public function getID(): int
    {
        return 1;
    }

    public function getLanguageID(): int
    {
        return 26;
    }

    public function getLanguageName(): string
    {
        return 'Thai';
    }

    public function getName(): string
    {
        return 'Narisa';
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