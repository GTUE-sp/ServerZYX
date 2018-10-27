#coding utf-8
import urllib.request
import urllib.parse
import getpass

#DBpass = getpass.getpass(prompt="DB password:")

url = "http://localhost:8000/server.php"
data = [
    {"student_id":"14513", "absent_day":"04/10/2018", "state":"1", "num_class":"0", "remarks":""},
    {"student_id":"14513", "absent_day":"04/10/2018", "state":"1", "num_class":"1", "remarks":""},
    {"student_id":"14513", "absent_day":"04/10/2018", "state":"1", "num_class":"2", "remarks":""},
    {"student_id":"14523", "absent_day":"04/20/2018", "state":"3", "num_class":"0", "remarks":""},
    {"student_id":"14525", "absent_day":"05/10/2018", "state":"4", "num_class":"5", "remarks":""},
    {"student_id":"14543", "absent_day":"05/20/2018", "state":"2", "num_class":"3", "remarks":"ddd"}
    ]

#encode
encd_prm = []
for i in data:
    encd_prm.append(urllib.parse.urlencode(i).encode("utf-8"))
#debug
print("debug:")
for i in encd_prm:
    print(str(i))

#send
for i in encd_prm:
    urllib.request.urlopen(url, data=i)
