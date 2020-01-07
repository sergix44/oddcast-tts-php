<?php


namespace SergiX44\OddcastTTS\Voices\German;


use SergiX44\OddcastTTS\Voices\Voice;

class Anna implements Voice
{

    public function getID(): int
    {
        return 3;
    }

    public function getLanguageID(): int
    {
        return 3;
    }

    public function getLanguageName(): string
    {
        return 'German';
    }

    public function getName(): string
    {
        return 'Anna';
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