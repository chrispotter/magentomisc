javascript: 
var Username = 'chris.potter+customer@blueacorn.com'; 
var Passwrd = 'pass4potter'; 
var usernameBox = document.getElementById('email'); 
usernameBox.value = Username; 
var passwrdBox = document.getElementById('pass'); 
passwrdBox.value = Passwrd; 
document.forms['login-form'].submit();
