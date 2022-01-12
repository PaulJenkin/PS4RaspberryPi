#!/usr/bin/env python3
import urllib.request, json, os

from multiprocessing.pool import ThreadPool

savepath = "/usr/html/Resources/OffTrainer/"
gameurl = []

def download(url):
    file_name_start_pos = url.rfind("/") + 1
    file_name = url[file_name_start_pos:]
    try:
        if file_name.split('.')[-1] != 'jpg' or not os.path.isfile(savepath + file_name):
            urllib.request.urlretrieve(url, savepath + file_name)
    except:
        pass

    
with urllib.request.urlopen("http://ps4trainer.com/Trainer/list.json") as url:
    data_json = url.read().decode('utf-8-sig')
    data = json.loads(data_json)
    f = open(savepath + "list.json", "w")
    f.write(data_json.replace("/games", ""))
    f.close()

for game in data['games']:
    gameurl.append(game['url'].replace(".", "http://ps4trainer.com/Trainer", 1))
    gameurl.append("http://ps4trainer.com/Trainer/img/" + game['title'] + ".jpg")

results = ThreadPool(8).imap_unordered(download, gameurl)
for r in results:
   pass
