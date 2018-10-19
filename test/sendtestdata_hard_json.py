#coding utf-8
import urllib.request
import urllib.parse
import json

url = "http://localhost:8000/serverjson.php"
method = "POST"
headers = {"Content-Type" : "application/json"}

#datatojson
datas = [
    {"student_id":"14543", "absent_day":"04/10/2018", "state":"3", "num_class":"0", "remarks":"json"},
    {"student_id":"14513", "absent_day":"04/10/2018", "state":"1", "num_class":"1", "remarks":""},
    {"student_id":"14525", "absent_day":"04/10/2018", "state":"1", "num_class":"2", "remarks":"日本語"},
    {"student_id":"14523", "absent_day":"04/20/2018", "state":"3", "num_class":"0", "remarks":""},
    {"student_id":"14513", "absent_day":"05/10/2018", "state":"4", "num_class":"5", "remarks":""},
    {"student_id":"14543", "absent_day":"05/20/2018", "state":"2", "num_class":"3", "remarks":"ddd"},
    {"student_id":"14543", "absent_day":"05/20/2018", "state":"2", "num_class":"4", "remarks":"ddd"}
    ]
json_datas = []
for i in datas:
    json_datas.append(json.dumps(i).encode("utf-8"))



#send
#responses = []
for i in json_datas:
    request = urllib.request.Request(url, data=i, method=method, headers=headers)
    with urllib.request.urlopen(request) as response:
        status = response.getcode()
        print("Status code: " + str(status))
        print(response.info())
