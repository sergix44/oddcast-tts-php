<?php


namespace SergiX44\OddcastTTS\Voices\Portuguese;


use SergiX44\OddcastTTS\Voices\Voice;

class Helena_Brazilian implements Voice
{

    public function getID(): int
    {
        return 1;
    }

    public function getLanguageID(): int
    {
        return 6;
    }

    public function getLanguageName(): string
    {
        return 'Portuguese';
    }

    public function getName(): string
    {
        return 'Helena_Brazilian';
    }

    public function getGender(): string
    {
        return 'F';
    }

    public function getEngine(): int
    {
        return 3;
    }
}