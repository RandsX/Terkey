#!/usr/bin/env php
<?php
/*
File: terkey.php
Author: RandsX
Description: Termux Shortcut Key
*/

class Terkey {

  const dir = "/data/data/com.termux/files/home/.termux";

  public function __construct() {
    $this->banner();
    @mkdir(self::dir);
    $this->setup();
    print system("termux-reload-settings");
    print system("clear");
    $this->banner();
    print "Shortcut Success Installed\n";
  }

  protected function banner() {
    print system("clear");
    print "
  ______          __ __
 /_  __/__  _____/ //_/__  __  __
  / / / _ \/ ___/ ,< / _ \/ / / /
 / / /  __/ /  / /| /  __/ /_/ /
/_/  \___/_/  /_/ |_\___/\__, /
         22XploiterCrew /____/\n\n";
  }

  public function setup() {
    print "Settings Up The Shortcut\n";
    $keys = "extra-keys = [['ESC','/','-','clear','UP','exit','HOME'],['TAB','CTRL','ALT','LEFT','DOWN','RIGHT','END']]";
    $open = fopen(self::dir."/termux.properties", "w");
    fwrite($open, $keys);
    fclose($open);
  }
}

$run = new Terkey;