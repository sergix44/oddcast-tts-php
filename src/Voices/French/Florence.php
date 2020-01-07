<?php


namespace SergiX44\OddcastTTS\Voices\French;


use SergiX44\OddcastTTS\Voices\Voice;

class Florence implements Voice
{

    public function getID(): int
    {
        return 4;
    }

    public function getLanguageID(): int
    {
        return 4;
    }

    public function getLanguageName(): string
    {
        return 'French';
    }

    public function getName(): string
    {
        return 'Florence';
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