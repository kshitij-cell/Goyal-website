let arr=document.querySelectorAll("div.rad");
let arrr=document.querySelectorAll("div.ran");
function dis(){
    for(let i=0;i<arr.length;i++){
      arr[i].style.display = "none";
  }
}
dis();
for(let i=0;i<arr.length;i++){
  document.getElementById("time"+(i+1)).addEventListener("change", function(){
    dis();
   arr[i].style.display = "";
  });
  let x=(arr[i].lastElementChild).children;
    x[1].style.display="none";
    x[0].addEventListener("click", function(){
        if(x[0].innerHTML==="view lite")
        {
            x[1].style.display="";
            x[0].innerHTML="hide lite";
        }
        else {
            x[1].style.display="none";
            x[0].innerHTML="view lite";
        }
    });
}
function ab(){
    for(let i=0;i<arrr.length;i++){
      arrr[i].style.display = "none";
  }
}
ab();
for(let i=0;i<arrr.length;i++){
  document.getElementById("a"+(i+1)).addEventListener("change", function(){
    ab();
   arrr[i].style.display = "";
  });
}
let ar=document.querySelectorAll("div#title h2");
console.log(arrr);
function abc(){
    for(let i=0;i<ar.length;i++){
      document.getElementById("menu"+(i+1)).style.display = "none";
      ar[i].style.borderBottom ="";
  }
}
abc();
document.getElementById("menu1").style.display = "";
ar[0].style.borderBottom ="3px solid rgb(250,101,1)";

for(let i=0;i<ar.length;i++){
  document.getElementById("choose"+(i+1)).addEventListener("click", function(){
    abc();
    document.getElementById("menu"+(i+1)).style.display = "";
    ar[i].style.borderBottom ="3px solid rgb(250,101,1)";
  });
}
