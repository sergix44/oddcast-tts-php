<?php


namespace SergiX44\OddcastTTS\Voices\Russian;


use SergiX44\OddcastTTS\Voices\Voice;

class Dmitri implements Voice
{

    public function getID(): int
    {
        return 2;
    }

    public function getLanguageID(): int
    {
        return 21;
    }

    public function getLanguageName(): string
    {
        return 'Russian';
    }

    public function getName(): string
    {
        return 'Dmitri';
    }

    public function getGender(): string
    {
        return 'M';
    }

    public function getEngine(): int
    {
        return 2;
    }
}