var XMLHttpRequest = require('xhr2');



// request.open('POST', 'http://192.168.0.108:3000/take_order');
// xmlhttp.setRequestHeader("Content-Type", "application/json");
// request.send(JSON.stringify({name: "Aniket"}));
// request.onload = ()=>{
//     items = JSON.parse(request.response).items
//     console.log(items)
// }


function get_items(){
    var request = new XMLHttpRequest();
    request.open('GET', 'http://192.168.0.105:3000/get_items');
    request.send();
    request.onload = ()=>{
        items = JSON.parse(request.response).items
        console.log(items)
        return items
    }
}

get_items()


function add(){
    if(document.querySelector('#count').value < 0 ){
        return 0;
    }
    document.querySelector('#count').value++;
}
function minus(){
    if(document.querySelector('#count').value == 0){
        return 0;
    }
    else{
        document.querySelector('#count').value--;
    }
}

server_ip = "http://192.168.0.108:3000/get_items"