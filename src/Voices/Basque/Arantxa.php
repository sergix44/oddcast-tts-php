<?php


namespace SergiX44\OddcastTTS\Voices\Basque;


use SergiX44\OddcastTTS\Voices\Voice;

class Arantxa implements Voice
{

    public function getID(): int
    {
        return 1;
    }

    public function getLanguageID(): int
    {
        return 22;
    }

    public function getLanguageName(): string
    {
        return 'Basque';
    }

    public function getName(): string
    {
        return 'Arantxa';
    }

    public function getGender(): string
    {
        return 'F';
    }

    public function getEngine(): int
    {
        return 4;
    }
}