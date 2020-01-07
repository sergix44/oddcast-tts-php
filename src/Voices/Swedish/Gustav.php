<?php


namespace SergiX44\OddcastTTS\Voices\Swedish;


use SergiX44\OddcastTTS\Voices\Voice;

class Gustav implements Voice
{

    public function getID(): int
    {
        return 2;
    }

    public function getLanguageID(): int
    {
        return 9;
    }

    public function getLanguageName(): string
    {
        return 'Swedish';
    }

    public function getName(): string
    {
        return 'Gustav';
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