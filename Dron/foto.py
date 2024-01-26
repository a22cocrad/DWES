from djitellopy import Tello
from threading import Thread
import time
import cv2

tello = Tello()
tello.connect()

tello.streamon()
frame_read = tello.get_frame_read()

tello.takeoff()
cv2.imwrite('picture1.png', frame_read.frame)

tello.land()

tello.end()