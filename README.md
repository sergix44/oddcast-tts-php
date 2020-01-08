# Oddcast TTS Demo PHP library

A library to interface with the online demo of Oddcast TTS engine.

## Installation

```
composer require sergix44/oddcast-tts-php
```

## Example usage

All the voices are listed on the official Oddcast demo page: http://ttsdemo.com/

Every voice is ported in the corrisponding namespace e.g. the english voice `Julia`, is in the namespace `SergiX44/OddcastTTS/Voices/English/Julia_US.php`, and so on.

The default voice is Julia (English US)
```php
use SergiX44\OddcastTTS\Oddcast;

$tts = new Oddcast();
$tts->setText('Hello my friend!')

$url = $tts->getUrl(); // the url to the .mp3 file
$stream = $tts->getAudio(); // the audio file
$tts->save('path/to/file.mp3'); // save the mp3 on the filesystem
```
You can easily change voice, in the main constructor:
```php

use SergiX44\OddcastTTS\Oddcast;
use \SergiX44\OddcastTTS\Voices\Italian\Raffaele;

$tts = new Oddcast(Raffaele::class);
$url = $tts->setText('Hello my friend!')->getUrl();
```
or via setter:
```php

use SergiX44\OddcastTTS\Oddcast;
use \SergiX44\OddcastTTS\Voices\Italian\Raffaele;

$tts = new Oddcast();
$url = $tts->setText('Hello my friend!')
  ->setVoice(Raffaele::class)
  ->getUrl(); // you can chain all the calls together
```
