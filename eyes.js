//640px	@media (min-width: 640px) { ... }
//md	768px	@media (min-width: 768px) { ... }
//lg	1024px	@media (min-width: 1024px) { ... }
//xl	1280px	@media (min-width: 1280px) { ... }
//2xl	1536px




let first,sec, tem ,wid;
let oldwid=$(window).width();
if(oldwid<640){first=1;sec=35; tem=0.17}

else if (oldwid< 1024){first=1; sec=17; tem=0.10 }

else{ first=1; sec=12; tem=0.05 }

setInterval(function() {
wid=$(window).width();
console.log(wid);

if(wid!=oldwid){
oldwid=wid;
if(wid<640){first=1;sec=35; tem=0.17}

else if (wid < 1024){first=1; sec=17; tem=0.10 }

else{ first=1; sec=12; tem=0.05 }
}

    
}, 1000);


$('#email').on('input', function(e) {
    let count = $(this).val().length+1;
    let eye_pin1=document.getElementById("eye_pin1");

    let eye_pin2=document.getElementById("eye_pin2");
   if(count<25){
    if (e.originalEvent.inputType === "deleteContentBackward") {
        first=first+(-tem);
        sec=sec+(-tem);
    }
    else{
        first=first+tem;
        sec=sec+tem;
    }
}

    console.log(sec);
    
    console.log(first/100*wid);
    console.log(first);
    eye_pin1.style.left=first/100*wid;

    eye_pin2.style.left=sec/100*wid;
    

})   



