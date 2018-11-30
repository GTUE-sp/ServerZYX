#coding utf-8
import urllib.request
import urllib.parse
import random
import getpass

#DBpass = getpass.getpass(prompt="DB password:")

num = 5

url = "http://localhost:8000/insert.php"
st_id = ["14523", "14543", "14525", "14513"]
days = ["04/11/2018", "06/07/2018", "11/07/2018", "10/30/2018"]
remarks = ["", "病欠", "事故欠", "出席停止", "不明", "死亡"]#一例です．

classes = []

for _ in range(num):
    for _ in range(10):
        classes.append(str(random.randint(0, 1)))

    data = {"student_id":st_id[random.randint(0,3)], "absent_day":days[random.randint(0,3)], "class0":classes[0], "class1":classes[1], "class2":classes[2], "class3":classes[3], "class4":classes[4], "class5":classes[5], "class6":classes[6], "class7":classes[7], "class8":classes[8], "class9":classes[9], "remarks":remarks[random.randint(0,5)]}

    #encode
    encd_prm = urllib.parse.urlencode(data).encode("utf-8")
    #debug
    print("debug:")
    print(data)
    print(str(encd_prm))

    #send
    urllib.request.urlopen(url, data=encd_prm)
