'''
File: terkey.py
Author: RandsX
Description: Termux Shortcut Key
'''
from threading import Thread
import os as termux
logo = """
  ______          __ __
 /_  __/__  _____/ //_/__  __  __
  / / / _ \/ ___/ ,< / _ \/ / / /
 / / /  __/ /  / /| /  __/ /_/ /
/_/  \___/_/  /_/ |_\___/\__, /
         22XploiterCrew /____/
"""

def banner():
  termux.system("clear")
  print(logo)

def init():
  # TODO: write code...
  try:
    termux.mkdir('/data/data/com.termux/files/home/.termux')
  except:
    pass
  keys = "extra-keys = [['ESC','/','-','clear','UP','exit','HOME'],['TAB','CTRL','ALT','LEFT','DOWN','RIGHT','END']]"
  open('/data/data/com.termux/files/home/.termux/termux.properties','w').write(keys)
  termux.system('termux-reload-settings')
  
if __name__ == '__main__':
  # TODO: write code..
  banner()
  thread = Thread(target=init)
  thread.start()
  print("Settings Up The Shortcut")
  termux.system("sleep 2")
  banner()
  print("Shortcut Sucess Installed")