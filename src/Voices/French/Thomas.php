<?php


namespace SergiX44\OddcastTTS\Voices\French;


use SergiX44\OddcastTTS\Voices\Voice;

class Thomas implements Voice
{

    public function getID(): int
    {
        return 5;
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
        return 'Thomas';
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