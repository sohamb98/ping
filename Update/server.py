import socket 
import time
import requests
import json 

api_key = "46e55acf8ef1481aa4d27bfb63fc51b8"
example_text = "Hollo, wrld" # the text to be spell-checked
endpoint = "https://api.cognitive.microsoft.com/bing/v7.0/SpellCheck"



params = {
    'mkt':'en-us',
    'mode':'proof'
    }

headers = {
    'Content-Type': 'application/x-www-form-urlencoded',
    'Ocp-Apim-Subscription-Key': api_key,
    }

s = socket.socket()          
print ("Socket successfully created")

port = 1220               
s.bind(('127.0.0.1', port))         
print ("socket binded to %s", port)
 
s.listen(5)      
print ("socket is listening")            
 
while True: 
  
   c, addr = s.accept()      
   print ('Got connection from', addr) 
   word = c.recv(4096) 

   data = {'text': word}

   response = requests.post(endpoint, headers=headers, params=params, data=data)
   json_response = response.json()
   y = json.dumps(json_response)
   c.send(y.encode()) 
   time.sleep(1)
   
   c.close() 
