<?php

namespace SergiX44\OddcastTTS;

use SergiX44\OddcastTTS\Voices\English\Julie_US;
use SergiX44\OddcastTTS\Voices\Voice;

class Oddcast
{
    const URL = 'https://cache-a.oddcast.com/c_fs/';

    /**
     * @var Voice|null
     */
    private $voice;

    /**
     * @var string
     */
    private $text = 'Hello!';

    /**
     * Oddcast constructor.
     * @param  Voice|string|null  $voice
     */
    public function __construct($voice = null)
    {
        if ($voice !== null) {
            $this->setVoice($voice);
        } else {
            $this->setVoice(Julie_US::class); // default
        }
    }

    /**
     * @param  string|Voice  $voice
     * @return $this
     */
    public function setVoice($voice)
    {
        if (is_string($voice)) {
            $voice = new $voice;
        }

        if (!($voice instanceof Voice)) {
            throw new \InvalidArgumentException('The object provided is not an instance of the voice class."');
        }

        $this->voice = $voice;
        return $this;
    }

    /**
     * @return Voice|null
     */
    public function getVoice(): ?Voice
    {
        return $this->voice;
    }

    /**
     * @param  string  $text
     * @return $this
     */
    public function setText(string $text)
    {
        $this->text = $text;
        return $this;
    }

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * @return string
     * @throws OddcastException
     */
    public function getUrl()
    {
        if ($this->getVoice() === null) {
            throw new OddcastException('The voice cannot be null');
        }

        if ($this->getText() === null) {
            throw new OddcastException('The text cannot be null');
        }

        $fingerprint = "<engineID>{$this->getVoice()->getEngine()}</engineID><voiceID>{$this->getVoice()->getID()}</voiceID><langID>{$this->getVoice()->getLanguageID()}</langID><ext>mp3</ext>".$this->getText();
        $hash = md5($fingerprint);

        $query = [
            'engine' => $this->getVoice()->getEngine(),
            'language' => $this->getVoice()->getLanguageID(),
            'voice' => $this->getVoice()->getID(),
            'text' => $this->getText(),
            'useUTF8' => 1
        ];

        return self::URL.$hash.'.mp3?'.http_build_query($query, null, ini_get('arg_separator.output'), PHP_QUERY_RFC3986);
    }

    /**
     * @return false|string
     * @throws OddcastException
     */
    public function getAudio()
    {
        $url = $this->getUrl();
        return file_get_contents($url);
    }

    /**
     * @param  string  $filename
     * @throws OddcastException
     */
    public function save(string $filename)
    {
        $audio = $this->getAudio();

        if (file_put_contents($filename, $audio) === false) {
            throw new \RuntimeException("Cannot write the audio file to '{$filename}'");
        }
    }
}