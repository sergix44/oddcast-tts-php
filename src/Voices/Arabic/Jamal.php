<?php


namespace SergiX44\OddcastTTS\Voices\Arabic;


use SergiX44\OddcastTTS\Voices\Voice;

class Jamal implements Voice
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
        return 'Jamal';
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