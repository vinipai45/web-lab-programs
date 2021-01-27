var string = prompt("You're input here...")

if(isNaN(string)){
    string=string.toUpperCase();
    for(var i=0; i<string.length ;i++){
        char = string.charAt(i);
        if(char == 'A'||char=='E'||char=='I'||char=='O'||char=='U'){
            break;
        }
    }
    if(i<=string.length){
        alert(`Leftmost vowel is at pos ${i+1}` )
    }else{
        alert(`No vowel found`)
    }
}else{
    var num =parseInt(string);
    var rev=0;
    var remainder=0;

    while(num!=0){
        remainder=num%10;
        num=parseInt(num/10);
        rev=rev*10 + remainder
    }

    alert(`Reverse of ${string} is ${rev}`)
    
    
}