<?php


namespace SergiX44\OddcastTTS\Voices\Finnish;


use SergiX44\OddcastTTS\Voices\Voice;

class Marko implements Voice
{

    public function getID(): int
    {
        return 2;
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
        return 'Marko';
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