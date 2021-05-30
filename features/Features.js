let arr=document.querySelectorAll("div#title h2");
function dis(){
    for(let i=0;i<arr.length;i++){
      document.getElementById("menu"+(i+1)).style.display = "none";
      arr[i].style.borderBottom ="";
  }
}
dis();
document.getElementById("menu1").style.display = "";
arr[0].style.borderBottom ="3px solid rgb(250,101,1)";

for(let i=0;i<arr.length;i++){
  document.getElementById("choose"+(i+1)).addEventListener("click", function(){
    dis();
    document.getElementById("menu"+(i+1)).style.display = "";
    arr[i].style.borderBottom ="3px solid rgb(250,101,1)";
  });
}