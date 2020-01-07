<?php


namespace SergiX44\OddcastTTS\Voices\Korean;


use SergiX44\OddcastTTS\Voices\Voice;

class Dayoung implements Voice
{

    public function getID(): int
    {
        return 7;
    }

    public function getLanguageID(): int
    {
        return 13;
    }

    public function getLanguageName(): string
    {
        return 'Korean';
    }

    public function getName(): string
    {
        return 'Dayoung';
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