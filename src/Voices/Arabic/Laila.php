<?php


namespace SergiX44\OddcastTTS\Voices\Arabic;


use SergiX44\OddcastTTS\Voices\Voice;

class Laila implements Voice
{

    public function getID(): int
    {
        return 2;
    }

    public function getLanguageID(): int
    {
        return 27;
    }

    public function getLanguageName(): string
    {
        return 'Arabic';
    }

    public function getName(): string
    {
        return 'Laila';
    }

    public function getGender(): string
    {
        return 'F';
    }

    public function getEngine(): int
    {
        return 2;
    }
}