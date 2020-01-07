<?php


namespace SergiX44\OddcastTTS\Voices\Dutch;


use SergiX44\OddcastTTS\Voices\Voice;

class Xander implements Voice
{

    public function getID(): int
    {
        return 4;
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
        return 'Xander';
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