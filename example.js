import axios from "axios";

//Cek Balance
function cekBalance(){
    const form = new FormData();
    form.append("get", "list");

    const options = {
    method: 'POST',
    url: 'https://imanrep.com/api/cekRekening/',
    headers: {'Content-Type': 'multipart/form-data;'},
    data: form
    };

    axios.request(options).then(function (response) {
    console.log(response.data);
    })
}


// Cek Rekening
function cekRekening(){
    const form = new FormData();
    form.append("get", "rekening");
    form.append("bank_code", "bca");
    form.append("account", "3210789366");

    const options = {
    method: 'POST',
    url: 'https://imanrep.com/api/cekRekening/',
    headers: {'Content-Type': 'multipart/form-data;'},
    data: form
    };

    axios.request(options).then(function (response) {
    console.log(response.data);
    })
}

