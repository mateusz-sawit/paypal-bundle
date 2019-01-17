<?php
/**
 * Created by SAWIT Mateusz Miklewski
 * User: Mateusz
 * Date: 16.01.2019
 * Time: 11:24
 */
if (!\is_file($autoloadFile = __DIR__.'/../vendor/autoload.php')) {
  throw new \LogicException('Could not find autoload.php in vendor/. Did you run "composer install --dev"?');
}
require $autoloadFile;
