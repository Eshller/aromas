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

// "http://192.168.0.108/get_items"