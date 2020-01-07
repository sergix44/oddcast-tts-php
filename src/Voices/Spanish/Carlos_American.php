<?php


namespace SergiX44\OddcastTTS\Voices\Spanish;


use SergiX44\OddcastTTS\Voices\Voice;

class Carlos_American implements Voice
{

    public function getID(): int
    {
        return 7;
    }

    public function getLanguageID(): int
    {
        return 2;
    }

    public function getLanguageName(): string
    {
        return 'Spanish';
    }

    public function getName(): string
    {
        return 'Carlos_American';
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