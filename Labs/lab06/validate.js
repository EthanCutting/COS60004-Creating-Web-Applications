"use strict";

function init() 

{
  var regForm = document.getElementById("regform");
  regForm.onsubmit = validateForm;
}

function validateForm() {
  var errMsg = "";
  var result = true;
  var myPattern = /^[a-zA-Z]+$/;
  var firstname = document.getElementById("firstname").value;

  if (!firstname.match(myPattern)) {
    errMsg = errMsg + "Your first name must only contain alpha characters\n";
    result = false;
  }

  var lastname = document.getElementById("lastname").value;

  if (!lastname.match(myPattern)) {
    errMsg = errMsg + "Your last name must only contain alpha characters\n";
    result = false;
  }

  if (document.getElementById("food").value == "none") {
    errMsg = errMsg + "You must select a food preference\n";
    result = false;
  }

  var is1day = document.getElementById("1day").checked;
  var is4day = document.getElementById("4day").checked;
  var is10day = document.getElementById("10day").checked;

  if (!(is1day || is4day || is10day)) {
    errMsg = errMsg + "You must select at least one tour option\n";
    result = false;
  }

  var partySize = document.getElementById("partySize").value;

  if (partySize <= 0) {
    errMsg = errMsg + "Number of travellers must be greater than 0\n";
    result = false;
  }

  if (errMsg != "") {
    alert(errMsg);
  }

  return result;
}

window.onload = init;
