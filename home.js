function hideLink(){
    var x= document.getElementById('mylink');
    var b= document.getElementById("link")

    if(x.style.display == 'block'){
        x.style.display = 'none';

    }
    else{
        x.style.display= 'block';
    }
}
$(document).ready(function()){
    var s=0;
    $(".miss").scroll(function()){
        s = $(this).scrollTop();
        if(s>650){
            $('.miss').css('background-color', rgba(250, 250, 250, 0.5));
        }
        else{
            $('.miss').css('background-color', rgba(230, 176, 235, 0.5)); 
        }
    }
}