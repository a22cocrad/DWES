from djitellopy import Tello
import time

# Crear una instancia de la clase Tello
tello = Tello()

# Conectar al dron
tello.connect()

# Despegar
tello.takeoff()

# Avanzar 50 cm
def print(param):
    pass


print("Avanzando...")
tello.move_forward(50)

# Retroceder 50 cm
print("Retrocediendo...")
tello.move_backward(50)
time.sleep(2)

# Hacer una pirueta de 360 grados
print("Haciendo una pirueta...")
tello.flip_back()
tello.rotate_clockwise(360)
time.sleep(4)

# Aterrizar
print("Aterrizando...")
tello.land()

# Desconectar del dron
tello.end()