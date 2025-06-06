import serial

# Arduino bilan bog'lanish
ser = serial.Serial('COM3', 9600)  # COM portingizni to'g'rilang
ser.flush()

while True:
    if ser.in_waiting > 0:
        line = ser.readline().decode('utf-8').strip()
        print(f"Arduino: {line}")
