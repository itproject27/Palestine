link1 = document.getElementById("link1");
link2 = document.getElementById("link2");
link3 = document.getElementById("link3");
link4 = document.getElementById("link4");
link5 = document.getElementById("link5");
details1 = document.getElementById("details1");
details2 = document.getElementById("details2");
details3 = document.getElementById("details3");
details4 = document.getElementById("details4");
details5 = document.getElementById("details5");
close1=document.getElementById("close1");
close2=document.getElementById("close2");
close3=document.getElementById("close3");
close4=document.getElementById("close4");



close1.addEventListener("click",function(){

        details1.style.display = "none";
    


})

close2.addEventListener("click",function(){

        details2.style.display = "none";
    


})
close3.addEventListener("click",function(){

        details3.style.display = "none";
    


})
close4.addEventListener("click",function(){

        details4.style.display = "none";
    


})
close5.addEventListener("click",function(){

        details5.style.display = "none";
    


})
close6.addEventListener("click",function(){

        details6.style.display = "none";
    


})
link1.addEventListener("click", function () {


    if (details1.style.display === "none") {
        details1.style.display = "flex";
    } else {
        details1.style.display = "none";
    }

})
link2.addEventListener("click", function () {


    if (details2.style.display === "none") {
        details2.style.display = "flex";
    } else {
        details2.style.display = "none";
    }

})
link3.addEventListener("click", function () {


    if (details3.style.display === "none") {
        details3.style.display = "flex";
    } else {
        details3.style.display = "none";
    }

})
link4.addEventListener("click", function () {


    if (details4.style.display === "none") {
        details4.style.display = "flex";
    } else {
        details4.style.display = "none";
    }

})
link5.addEventListener("click", function () {


    if (details5.style.display === "none") {
        details5.style.display = "flex";
    } else {
        details5.style.display = "none";
    }

})
link6.addEventListener("click", function () {


    if (details6.style.display === "none") {
        details6.style.display = "flex";
    } else {
        details6.style.display = "none";
    }

})