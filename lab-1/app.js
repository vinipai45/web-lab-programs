let value1 = document.getElementById('value1');
let value2 = document.getElementById('value2');
let result =document.getElementById('result');


function calculate (id){
    switch(id){
        case 'add':
            result.value=parseInt(value1.value) + parseInt(value2.value)
            break;
        case 'sub':
            result.value=parseInt(value1.value) - parseInt(value2.value)
            break;
        case 'mul':
            result.value=parseInt(value1.value) * parseInt(value2.value)
             break;
        case 'div':
            if(parseInt(value2.value)==0){
                result.value = "Divide By Zero Error";
            }else{
                result.value=parseInt(value1.value) / parseInt(value2.value)
            }
            break;
    }
}

function clearAll(){
    value1.value='';
    value2.value='';
    result.value="0";
}