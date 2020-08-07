#!/usr/bin/env bash
#File: terkey.php
#Author: RandsX
#Description: Termux Shortcut Key

clear
banner="
  ______          __ __
 /_  __/__  _____/ //_/__  __  __
  / / / _ \/ ___/ ,< / _ \/ / / /
 / / /  __/ /  / /| /  __/ /_/ /
/_/  \___/_/  /_/ |_\___/\__, /
         22XploiterCrew /____/";
         
echo "$banner";
echo "Setting Up The Shortcut";
         
keys="extra-keys = [['ESC','/','-','clear','UP','exit','HOME'],['TAB','CTRL','ALT','LEFT','DOWN','RIGHT','END']]";
file="/data/data/com.termux/files/home/.termux/termux.properties"

touch $file;
echo $keys > $file;
termux-reload-settings
clear
echo "$banner";
echo "Shortcut Success Installed";