import requests
from requests.structures import CaseInsensitiveDict

url = "https://imanrep.com/api/cekRekening"

## Get Bank List
headers = CaseInsensitiveDict()
headers["Content-Type"] = "application/x-www-form-urlencoded"
data = "get=list"
resp = requests.post(url, headers=headers, data=data)
print(resp.status_code)

## Cek Rekening
headers = CaseInsensitiveDict()
headers["Content-Type"] = "application/x-www-form-urlencoded"
data = "get=rekening&account=104818833003&bank_code=jago"
resp = requests.post(url, headers=headers, data=data)
print(resp.status_code)
