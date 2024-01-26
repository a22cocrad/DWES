from djitellopy import Tello
from threading import Thread
import time
import cv2

tello = Tello()
tello.connect()
# tello.set_speed(100)
print(tello.get_battery())

tello.end()