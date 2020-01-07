<?php


namespace SergiX44\OddcastTTS\Voices\Esperanto;


use SergiX44\OddcastTTS\Voices\Voice;

class Ludoviko implements Voice
{

    public function getID(): int
    {
        return 1;
    }

    public function getLanguageID(): int
    {
        return 31;
    }

    public function getLanguageName(): string
    {
        return 'Esperanto';
    }

    public function getName(): string
    {
        return 'Ludoviko';
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