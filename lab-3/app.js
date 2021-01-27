var text = document.getElementById('main');
var interval1 = setInterval(growText,1000);
var fontsize = 5;

function growText(){
    console.log(text);
    text.innerHTML='TEXT GROWING';
    text.setAttribute('style',`font-size:${fontsize}; color:red;`);
    fontsize+=5;
    if(fontsize==50){
        clearInterval(interval1);
        var interval2=setInterval(shrinkText,1000);
    }
}

function shrinkText(){
    fontsize-=5;
    text.innerHTML='TEXT SHRINKING';
    text.setAttribute('style',`font-size:${fontsize}; color:blue;`);
    if(fontsize==5){
        clearInterval(interval2);
    }
}
