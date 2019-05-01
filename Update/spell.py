import requests
import json

api_key = "46e55acf8ef1481aa4d27bfb63fc51b8"
example_text = "Hollo, wrld" # the text to be spell-checked
endpoint = "https://api.cognitive.microsoft.com/bing/v7.0/SpellCheck"

data = {'text': example_text}

params = {
    'mkt':'en-us',
    'mode':'proof'
    }

headers = {
    'Content-Type': 'application/x-www-form-urlencoded',
    'Ocp-Apim-Subscription-Key': api_key,
    }

response = requests.post(endpoint, headers=headers, params=params, data=data)

json_response = response.json()
y = json.dumps(json_response)
print (y)
#print(json.dumps(json_response, indent=4))
