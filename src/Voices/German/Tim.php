<?php


namespace SergiX44\OddcastTTS\Voices\German;


use SergiX44\OddcastTTS\Voices\Voice;

class Tim implements Voice
{

    public function getID(): int
    {
        return 2;
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
        return 'Tim';
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