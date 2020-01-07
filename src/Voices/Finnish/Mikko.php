<?php


namespace SergiX44\OddcastTTS\Voices\Finnish;


use SergiX44\OddcastTTS\Voices\Voice;

class Mikko implements Voice
{

    public function getID(): int
    {
        return 1;
    }

    public function getLanguageID(): int
    {
        return 23;
    }

    public function getLanguageName(): string
    {
        return 'Finnish';
    }

    public function getName(): string
    {
        return 'Mikko';
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