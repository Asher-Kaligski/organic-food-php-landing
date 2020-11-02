const fullName = document.getElementById('fullName');
const email = document.getElementById('email');
const phone = document.getElementById('phone');
const country = document.getElementById('country');

const messageBox = document.getElementById('message');

const userParamArr = [fullName, email, phone];

for (let i = 0; i < userParamArr.length; i++) {
  let label = userParamArr[i].labels[0];

  if (label.offsetParent === null) {
    userParamArr[i].placeholder = label.innerHTML;
  }
}

function validateCountry() {
  if (checkIfEmpty(country)) {
    return true;
  } else {
    return false;
  }
}

function validateFullName() {
  if (checkIfEmpty(fullName) && checkIfFullNameValid(fullName)) {
    fullName.nextElementSibling.innerHTML = '';
    return true;
  } else {
    return false;
  }
}

function validateEmail() {
  if (
    checkIfEmpty(email) &&
    isEmailValid(email) &&
    validateLength(email, 5, 40)
  ) {
    email.nextElementSibling.innerHTML = '';
    return true;
  } else {
    return false;
  }
}

function validatePhone() {
  if (checkIfEmpty(phone) && checkIfValidPhone(phone)) {
    phone.nextElementSibling.innerHTML = '';
    return true;
  } else {
    return false;
  }
}

function isEmailValid(element) {
  if (element.value.indexOf('@') == -1 || element.value.indexOf('.') == -1) {
    element.nextElementSibling.innerHTML =
      ' ' + element.labels[0].innerHTML + ' is not valid.';
    return false;
  } else {
    return true;
  }
}

function validateLength(element, minLenght, maxLenght) {
  if (element.value.length >= minLenght && element.value.length <= maxLenght) {
    return true;
  } else {
    element.nextElementSibling.innerHTML = ` ${element.labels[0].innerHTML} doesn't meet length.</br> ${element.labels[0].innerHTML} must be from ${minLenght} to ${maxLenght} characters.`;
    return false;
  }
}

function checkIfEmpty(element) {
  if (element.value == '') {
    element.nextElementSibling.innerHTML =
      element.labels[0].innerHTML + ' must not be empty';

    return false;
  } else {
    return true;
  }
}
function checkIfValidPhone(element) {
  const phoneRegex = /^\d{9,10}$/;
  if (!element.value.match(phoneRegex) || isValidPrefix(element.value)) {
    element.nextElementSibling.innerHTML =
      element.labels[0].innerHTML + ' is not valid';

    return false;
  } else {
    return true;
  }
}

function isValidPrefix(value) {
  flag = false;

  const firstNumber = parseInt(value.charAt(0));
  const secondNumber = parseInt(value.charAt(1));

  if (firstNumber !== 0) flag = true;

  if (secondNumber === 0) flag = true;

  return flag;
}

function checkIfFullNameValid(element) {
  const fullNameRegex = /^([\w]{2,})+\s+([\w\s]{2,})+$/i;
  if (!element.value.match(fullNameRegex)) {
    element.nextElementSibling.innerHTML =
      element.labels[0].innerHTML + ' is not valid';

    return false;
  } else {
    return true;
  }
}

jQuery(document).ready(function ($) {
  $.get('//restcountries.eu/rest/v2/all', function (data) {
    data.forEach((country) => {
      $('#country').append(
        '<option value="' + country.name + '">' + country.name + '</option>'
      );
    });
  });

  $('#send-form').on('click', function (e) {
    e.preventDefault();

    if (
      validateCountry() &&
      validateFullName() &&
      validateEmail() &&
      validatePhone()
    ) {
      $(this).unbind('click').click();
    } else {
      document.getElementById('message-text').innerText =
        'Sorry there was an error sending your form.';
    }

    document.getElementById('message-box').style.display = 'block';
  });
});
