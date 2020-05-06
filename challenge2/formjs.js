
// getting all input type of my form
var username = document.forms["vform"]["username"];
var compagnie = document.forms["vform"]["compagnie"];
var villed = document.forms["vform"]["villed"];
var villedep = document.forms["vform"]["villedep"];
var dated = document.forms["vform"]["dated"];
var heuredep = document.forms["vform"]["heuredep"];


// getting all error display
var username_error = document.getElementById("username_error");
var compagnie_error = document.getElementById("compagnie_error");
var villed_error = document.getElementById("villed_error");
var villedep_error = document.getElementById("villedep_error");
var dated_error = document.getElementById("dated_error");
var heuredep_error = document.getElementById("heuredep_error");


// setting all eventlisteners
username.addEventListener("blur", usernameverify, true);
compagnie.addEventListener("blur", compagnieverify, true);
villed.addEventListener("blur", villedverify, true);
villedep.addEventListener("blur", villedepverify, true);
dated.addEventListener("blur", datedverify, true);
heuredep.addEventListener("blur", heuredepverify, true);
// validation function
function validate(){
  // name validation
  if (username.value =="") {
    username.style.border= "1px solid red";
    username_error.textContent=" veuillez entrer un nom valide  svp";
    username.focus();
    return false;
  }
  // sirname validation
  if (compagnie.value =="") {
    compagnie.style.border= "1px solid red";
    compagnie_error.textContent=" veuillez entrer un prenom valide svp";
    compagnie.focus();
    return false;
  }
  // villedep validation
  if (villedep.value =="") {
    villedep.style.border= "1px solid red";
    villedep_error.textContent=" veuillez entrer une ville valide svp";
    villedep.focus();
    return false;
  }
  //villed validation
  if (villed.value =="") {
    villed.style.border= "1px solid red";
    villed_error.textContent=" veuillez entrer une ville valide svp";
    villed.focus();
    return false;
  }
  //dated validation
  if (dated.value =="") {
    dated.style.border= "1px solid red";
    dated_error.textContent=" veuillez entrer un contact valide svp";
    dated.focus();
    return false;
  }
  //heuredep validation
  if (heuredep.value =="") {
  heuredep.style.border= "1px solid red";
  heuredep_error.textContent=" veuillez entrer un contact valide svp";
  heuredep.focus();
    return false;
  }


}
function usernameverify(){
  if (username.value !="") {
    username.style.border= "1px solid #5e6e66";
  username_error.innerHTML ="";
  return true;
  }
}

function compagnieverify(){
  if (compagnie.value !="") {
    compagnie.style.border= "1px solid #5e6e66";
  compagnie.innerHTML ="";
  return true;
  }
}

function villedepverify(){
  if (villedep.value !="") {
    villedep.style.border= "1px solid #5e6e66";
  villedep_error.innerHTML ="";
  return true;
  }
}

function villedverify(){
  if (villed.value !="") {
    villed.style.border= "1px solid #5e6e66";
  villed_error.innerHTML ="";
  return true;
  }
}


function datedverify(){
  if (dated.value !="") {
    dated.style.border= "1px solid #5e6e66";
  dated_error.innerHTML ="";
  return true;
  }
}

function heuredepverify(){
  if (heuredep.value !="") {
    heuredep.style.border= "1px solid #5e6e66";
  heuredep_error.innerHTML ="";
  return true;
  }
}

function affich(){
  document.getElementById("btnajout").innerHTML("")
  codeajout.style.display:block;
}
