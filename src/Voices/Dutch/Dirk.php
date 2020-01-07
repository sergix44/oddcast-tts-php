<?php


namespace SergiX44\OddcastTTS\Voices\Dutch;


use SergiX44\OddcastTTS\Voices\Voice;

class Dirk implements Voice
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
        return 'Dirk';
    }

    public function getGender(): string
    {
        return 'M';
    }

    public function getEngine(): int
    {
        return 7;
    }
}