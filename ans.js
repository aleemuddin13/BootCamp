/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var myvar; 
     var pp;
     
function dis() {
     document.getElementById('obs').style.display = 'block';
}
function showDiv() {
   document.getElementById('ans').style.display = "block";
    document.getElementById('obs').style.display = "none";
    document.getElementById('check').style.display = "none";
    document.getElementById('check1').style.display = "none";
}
function refresh() {
    location.reload();
}
function comp() {
    myvar = myvari;
    pp = document.getElementById('pro').value;
    

     if (myvar === pp)
     
 {
    document.getElementById('check').style.display = "block";
    document.getElementById('check1').style.display = "none";
    document.getElementById('ans').style.display = "block";
    document.getElementById('obs').style.display = "none";
    document.getElementById('anb').style.display = "none";
 }
     else{
         document.getElementById('check1').style.display = "block";
     }
 };
