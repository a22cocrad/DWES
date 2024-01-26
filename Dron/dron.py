from djitellopy import Tello
from threading import Thread
import time
import cv2

tello = Tello()
tello.connect()
keepRecording = True
tello.streamon()
frame_read = tello.get_frame_read()
# tello.start_video_recording('video.mp4')

def videoRecorder():
    height, width, _ = frame_read.frame.shape
    video = cv2.VideoWriter('video.avi', cv2.VideoWriter_fourcc(*'XVID'),30, (width, height))

    while keepRecording:
        video.write(frame_read.frame)
        time.sleep(1/30)

    video.release()

recorder = Thread(target=videoRecorder)
recorder.start()

print(tello.get_battery())
tello.takeoff()

tello.move_up(60)

tello.land()

keepRecording = False
recorder.join()
# tello.stop_video_recording()

tello.end()