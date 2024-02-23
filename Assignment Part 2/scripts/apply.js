/*
   Master Of Cyber Security
    cos6004-Creating Web Applications
    Ethan PP Cutting
    100942775


    refence for A2:
    https://developer.mozilla.org/en-US/docs/Web/API/Window/sessionStorage
    https://digitalfox-tutorials.com/tutorial.php?title=How-to-display-error-message-in-html-form-with-javascript
    https://swinburne.instructure.com/courses/49148/pages/week-5-javascript-part-1?module_item_id=3155320
    https://swinburne.instructure.com/courses/49148/pages/week-6-javascript-part-2?module_item_id=3155321
    https://swinburne.instructure.com/courses/49148/pages/week-7-javascript-part-3?module_item_id=3155322
*/


// adding function for job.html
function setPositionFieldValue() 
{
  var refNumber = localStorage.getItem("positionRef");
  var positionField = document.getElementById('position');
  positionField.value = refNumber;

}


// adding function for form will have errors inside this function
function applyvaliddateform() 
{
  prefill_form();
  var dob = document.getElementById("dob").value;
  var state = document.getElementById("state").value;
  var postcode = document.getElementById("postcode").value;
  // adding if for state
  if ((state === "Victoria" && (postcode[0] !== "3" && postcode[0] !== "8")) ||
      (state === "New South Wales" && (postcode[0] !== "1" && postcode[0] !== "2")) || 
      (state === "Queensland" && (postcode[0] !== "4" && postcode[0] !== "9")) ||
      (state === "Northern Territory" && postcode[0] !== "0") ||
      (state === "Western Australia" && postcode[0] !== "6") ||
      (state === "Tasmania" && postcode[0] !== "7") ||
      (state === "South Australia" && postcode[0] !== "5") ||
      (state === "Australian Capital Territory" && postcode[0] !== "0")) {
    document.getElementById("postcodeError").innerHTML = "Invalid Postcode Please Enter Right Postcode for state.";
    return false;
  }

  // here we are validate the date of birth
  // adding regex it will match dd/mm/yyyy
  var dobRegex = /^\d{2}\/\d{2}\/\d{4}$/;
  // adding a if statement to test if the format is in the right order
  if (!dobRegex.test(dob)) 
  {
    // calling span if the date of birth is not fill out in the right format
    document.getElementById("dobError").innerHTML = "Please enter a valid date of birth in dd/mm/yyyy format.";
    return false;
  }

  // here we will calculate age for the date of birth
  var today = new Date();
  var dobParts = dob.split("/");
  var dobDate = new Date(dobParts[2], dobParts[1] - 1, dobParts[0]);
  var age = today.getFullYear() - dobDate.getFullYear();
  var monthDiff = today.getMonth() - dobDate.getMonth();
  if (monthDiff < 0 || (monthDiff === 0 && today.getDate() < dobDate.getDate())) 
  {
    age--;
  }

  // here we are making sure the age valided and is not under 15 or over 80
  if (age < 15 || age > 80) 
  {
    // making an elements that will have inside postcode age error message
    document.getElementById("ageError").innerHTML = "User need to be between 15 and 80 years old to apply for the job.";
    return false;
  }
 return true;
}


// erro other skill function it will hold other skill error
function errorOtherSkill() 
{
  // Here adding other skills checkbox elements
  const otherSkillsCheckbox = document.getElementById('otherSkillsCheckbox');
  // Here adding comment box elements
  const otherSkillsTextArea = document.getElementById('commentboxs');
  // Here adding error message span
  const otherSkillsErrorSpan = document.getElementById('otherskillsError');

  // adding a listener for the checkbox
  otherSkillsCheckbox.addEventListener('change', () => 
  {
    // If the checkbox is checked, make sure the text area is not blank
    if (otherSkillsCheckbox.checked) 
    {
      if (otherSkillsTextArea.value.trim() === '') 
      {
        otherSkillsTextArea.setCustomValidity('Please enter your other skills in the Text area');
        // calling and making error message 
        otherSkillsErrorSpan.innerHTML = 'Please fill out Other skills';
      } else {
        otherSkillsTextArea.setCustomValidity('');
        otherSkillsErrorSpan.innerHTML = '';
      }
    } else {
      // If the checkbox is not checked, clear any error message
      otherSkillsTextArea.setCustomValidity('');
      otherSkillsErrorSpan.innerHTML = '';
    }
  });

  // Add an event listener to the text area to clear any error message when it is edited
  otherSkillsTextArea.addEventListener('input', () => 
  {
    // setCustomValidity() is a method that belongs to the ValidityState interface of an input element
    otherSkillsTextArea.setCustomValidity('');
    otherSkillsErrorSpan.innerHTML = '';
  });
}


// prefill form function to hold the information inside the form
function prefill_form() 
{
  // session storage for first name
  if (sessionStorage.getItem('fname') !== null) 
  {
    document.getElementById('fname').value = sessionStorage.getItem('fname');
  }
  // session storage for last name
  if(sessionStorage.getItem('lastname') !== null)
  {
    document.getElementById('lastname').value = sessionStorage.getItem('lastname');
  }
  // session storage for email
  if(sessionStorage.getItem('email') !== null)
  {
    document.getElementById('email').value = sessionStorage.getItem('email');
  }
  // session storage for phone no
  if(sessionStorage.getItem('phoneno') !== null)
  {
    document.getElementById('phoneno').value = sessionStorage.getItem('phoneno');
  }
  // session storage for postcode
  if(sessionStorage.getItem('postcode') !== null)
  {
    document.getElementById('postcode').value = sessionStorage.getItem('postcode');
  }
  // session storage for dob
  if(sessionStorage.getItem('dob') !== null)
  {
    document.getElementById('dob').value = sessionStorage.getItem('dob');
  }

  // session storage for street address
  if(sessionStorage.getItem('streetaddress') !== null)
  {
    document.getElementById('streetaddress').value = sessionStorage.getItem('streetaddress');
  }
  // session storage for comment boxs
  if(sessionStorage.getItem('commentboxs') !== null)
  {
    document.getElementById('commentboxs').value = sessionStorage.getItem('commentboxs');
  }

  // session storage for state
  if (sessionStorage.getItem('state') !== null) 
  {
      var stateSelect = document.getElementById('state');
      var stateValue = sessionStorage.getItem('state');
      for (var i = 0; i < stateSelect.options.length; i++) 
      {
        if (stateSelect.options[i].value === stateValue) 
        {
          stateSelect.selectedIndex = i;
          break;
        }
      }
    }

  // session storage for gender
  if(sessionStorage.getItem('gender') !== null)
    {
      var gender = sessionStorage.getItem('gender');
      document.querySelector('input[name="gender"][value="'+gender+'"]').checked = true;
    }

  // session storage for java
  if (sessionStorage.getItem('java') !== null) 
    {
      var java = JSON.parse(sessionStorage.getItem('java'));
      var javaCheckboxes = document.getElementsByName('java');
      for (var i = 0; i < javaCheckboxes.length; i++) 
      {
        if (java.includes(javaCheckboxes[i].value)) 
        {
          javaCheckboxes[i].checked = true;
        }
      }
    }
  // session storage for html and css
  if (sessionStorage.getItem('htmlcss') !== null) 
      {
        var htmlcss = JSON.parse(sessionStorage.getItem('htmlcss'));
        var htmlcssCheckboxes = document.getElementsByName('htmlcss');
        for (var i = 0; i < htmlcssCheckboxes.length; i++) 
        {
          if (htmlcss.includes(htmlcssCheckboxes[i].value)) 
          {
            htmlcssCheckboxes[i].checked = true;
          }
        }
      }
  // session storage for javascript
  if (sessionStorage.getItem('javascript') !== null) 
      {
        var javascript = JSON.parse(sessionStorage.getItem('javascript'));
        var javascriptCheckboxes = document.getElementsByName('javascript');
        for (var i = 0; i < javascriptCheckboxes.length; i++) 
        {
          if (javascript.includes(javascriptCheckboxes[i].value)) 
          {
            javascriptCheckboxes[i].checked = true;
          }
        }
      }
  // session storage for python
  if (sessionStorage.getItem('python') !== null) 
      {
        var python = JSON.parse(sessionStorage.getItem('python'));
        var pythonCheckboxes = document.getElementsByName('python');
        for (var i = 0; i < pythonCheckboxes.length; i++) 
        {
          if (python.includes(pythonCheckboxes[i].value)) 
          {
            pythonCheckboxes[i].checked = true;
          }
        }
      }
  // session storage for C
  if (sessionStorage.getItem('c') !== null) 
      {
        var c = JSON.parse(sessionStorage.getItem('c'));
        var cCheckboxes = document.getElementsByName('c');
        for (var i = 0; i < cCheckboxes.length; i++) 
        {
          if (c.includes(cCheckboxes[i].value)) 
          {
            cCheckboxes[i].checked = true;
          }
        }
      }

  // session storage for Others
  if (sessionStorage.getItem('Others') !== null) 
      {
        var Others = JSON.parse(sessionStorage.getItem('Others'));
        var OthersCheckboxes = document.getElementsByName('Others');
        for (var i = 0; i < OthersCheckboxes.length; i++) 
        {
          if (Others.includes(OthersCheckboxes[i].value)) 
          {
            OthersCheckboxes[i].checked = true;
          }
        }
      }
  }




// save form data function will call the pre fill function and save the information with session storage
function save_form_data() 
{
  // storing first name form prefill_form function
  var fname = document.getElementById('fname').value;
  sessionStorage.setItem('fname', fname);
  // storing last name form
  var lastname = document.getElementById('lastname').value;
  sessionStorage.setItem('lastname', lastname);
  // storing email from prefill_form function 
  var email = document.getElementById('email').value;
  sessionStorage.setItem('email', email);
  // storaging phone no from prefill_form function
  var phoneno = document.getElementById('phoneno').value;
  sessionStorage.setItem('phoneno', phoneno);
  // storaging postcode from prefill_form function
  var postcode = document.getElementById('postcode').value;
  sessionStorage.setItem('postcode', postcode);
  // storing dob from prefill_from function
  var dob = document.getElementById('dob').value;
  sessionStorage.setItem('dob', dob);
  // storing street address from prefill_form function
  var streetaddress = document.getElementById('streetaddress').value;
  sessionStorage.setItem('streetaddress', streetaddress);
  // storing comment box from prefill_form funcntion
  var commentboxs = document.getElementById('commentboxs').value;
  sessionStorage.setItem('commentboxs', commentboxs);
  // storing state from prefill_form function
  var stateSelect = document.getElementById('state');
  var stateValue = stateSelect.options[stateSelect.selectedIndex].value;
  sessionStorage.setItem('state', stateValue);
  // sotring gender prefill_form function
  var gender = document.querySelector('input[name="gender"]:checked');
  if (gender !== null)
  {
    sessionStorage.setItem('gender', gender.value);
  }
  // storing skill checkboxes
  var java = [];
  var javaCheckboxes = document.getElementsByName('java');
  for (var i = 0; i < javaCheckboxes.length; i++) 
  {
    if (javaCheckboxes[i].checked) {
      java.push(javaCheckboxes[i].value);
    }
  }
  // This line of code stores the value of the "java" checkbox (which has been checked by the user) in session storage as a JSON string.
  sessionStorage.setItem('java', JSON.stringify(java));

  // storing skill checkboxes
  var htmlcss = [];
  var htmlcssCheckboxes = document.getElementsByName('htmlcss');
  for (var i = 0; i < htmlcssCheckboxes.length; i++) 
  {
     if (htmlcssCheckboxes[i].checked) 
      {
         htmlcss.push(htmlcssCheckboxes[i].value);
      }
  }
  // This line of code stores the value of the "htmlcss" checkbox (which has been checked by the user) in session storage as a JSON string.
  sessionStorage.setItem('htmlcss', JSON.stringify(htmlcss));


  // storing skill checkboxes
  var javascript = [];
  var javascriptCheckboxes = document.getElementsByName('javascript');
  for (var i = 0; i < javascriptCheckboxes.length; i++) 
    {
      if (javascriptCheckboxes[i].checked) 
        {
          javascript.push(javascriptCheckboxes[i].value);
        }
    }
    // This line of code stores the value of the "javascripts" checkbox (which has been checked by the user) in session storage as a JSON string.
    sessionStorage.setItem('javascript', JSON.stringify(javascript));

    // storing skill checkboxes
    var python = [];
    var pythonCheckboxes = document.getElementsByName('python');
    for (var i = 0; i < pythonCheckboxes.length; i++) 
      {
        if (pythonCheckboxes[i].checked) 
           {
              python.push(pythonCheckboxes[i].value);
           }
      }
    // This line of code stores the value of the "python" checkbox (which has been checked by the user) in session storage as a JSON string.
    sessionStorage.setItem('python', JSON.stringify(python));

    
    // storing skill checkboxes
    var c = [];
    var cCheckboxes = document.getElementsByName('c');
    for (var i = 0; i < cCheckboxes.length; i++) 
      {
        if (cCheckboxes[i].checked) 
           {
              c.push(cCheckboxes[i].value);
           }
      }
    // This line of code stores the value of the "c" checkbox (which has been checked by the user) in session storage as a JSON string.
    sessionStorage.setItem('c', JSON.stringify(c));
    
    // storing skill checkboxes
    var Others = [];
    var OthersCheckboxes = document.getElementsByName('Others');
    for (var i = 0; i < OthersCheckboxes.length; i++) 
      {
        if (OthersCheckboxes[i].checked) 
          {
            Others.push(OthersCheckboxes[i].value);
          }
      }
    // This line of code stores the value of the "Others" checkbox (which has been checked by the user) in session storage as a JSON string.
    sessionStorage.setItem('Others', JSON.stringify(Others));
    }



// adding function init
function init ()
{
  //
  setPositionFieldValue();
  var applyForm = document.getElementById("apply_form");
  applyForm.onsubmit = applyvaliddateform;

  // Call the errorOtherSkill() function to ensure it is executed when the page loads
  errorOtherSkill();

  prefill_form();
  applyForm.addEventListener('change', save_form_data);
}
// onload event is triggered
window.onload = init;

