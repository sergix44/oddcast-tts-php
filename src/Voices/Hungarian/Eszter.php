<?php


namespace SergiX44\OddcastTTS\Voices\Hungarian;


use SergiX44\OddcastTTS\Voices\Voice;

class Eszter implements Voice
{

    public function getID(): int
    {
        return 1;
    }

    public function getLanguageID(): int
    {
        return 29;
    }

    public function getLanguageName(): string
    {
        return 'Hungarian';
    }

    public function getName(): string
    {
        return 'Eszter';
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