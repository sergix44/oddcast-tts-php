<?php


namespace SergiX44\OddcastTTS\Voices\Hungarian;


use SergiX44\OddcastTTS\Voices\Voice;

class Flora implements Voice
{

    public function getID(): int
    {
        return 1;
    }

    public function getLanguageID(): int
    {
        return 29;
    }

    public function getLanguageName(): string
    {
        return 'Hungarian';
    }

    public function getName(): string
    {
        return 'Flora';
    }

    public function getGender(): string
    {
        return 'F';
    }

    public function getEngine(): int
    {
        return 7;
    }
}