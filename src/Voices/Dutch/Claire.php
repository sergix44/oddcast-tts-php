<?php


namespace SergiX44\OddcastTTS\Voices\Dutch;


use SergiX44\OddcastTTS\Voices\Voice;

class Claire implements Voice
{

    public function getID(): int
    {
        return 2;
    }

    public function getLanguageID(): int
    {
        return 11;
    }

    public function getLanguageName(): string
    {
        return 'Dutch';
    }

    public function getName(): string
    {
        return 'Claire';
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