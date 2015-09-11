javascript: 
var Username = 'chris.potter@blueacorn.com'; 
var Passwrd = 'pass4potter'; 
var usernameBox = document.getElementById('username'); 
usernameBox.value = Username; 
var passwrdBox = document.getElementById('login'); 
passwrdBox.value = Passwrd; 
document.forms['loginForm'].submit();
