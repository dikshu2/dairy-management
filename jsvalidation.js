// form.addEventListener('submit', e => {
//     e.preventDefault();
//     validate();
// });

// const setError = (element, message) => {
//     const inputControl = element.parentElement;
//     const errorDisplay = inputControl.querySelector('.error');

//     errorDisplay.innerText = message;
//     inputControl.classList.add('error');
//     inputControl.classList.remove('success')
// }

// const setSuccess = element => {
//     const inputControl = element.parentElement;
//     const errorDisplay = inputControl.querySelector('.error');

//     errorDisplay.innerText = '';
//     inputControl.classList.add('success');
//     inputControl.classList.remove('error');
// };

// const isValidEmail = email => {
//     const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
//     return re.test(String(email).toLowerCase());
// }

// const validate = () => {


// }

function submitForm() {
   // const form = document.getElementById('form').value;
     username = document.getElementById('username').value;
     email = document.getElementById('uemail').value;
     number = document.getElementById('unumber').value;
     address = document.getElementById('uaddress').value;
     password = document.getElementById('upassword').value;
     password2 = document.getElementById('upassword2').value;

    if (username === '') {
        //setError(username, 'username cannot be blank');
        alert("Username mustnot be blank");
        return false;
    } else if (username.length <= 2) {
        // setError(username, 'username should more than 3 word');
        return false;
    } else {
        //setSuccess(username);
    }

    if (email === '') {
        //setError(email, 'Email is required');
        return false;
    // } else if (!isValidEmail(email)) {
    //     // setError(email, 'Provide a valid email address');
    //     return false;
    } else {
        // setSuccess(email);
       
    }

    if (number === '') {
        // setError(number, 'Minimum 10 numbers');
        alert("Number is empty");
        return false;
    } else if (number.length != 10) {
        //  setError(number, 'Not a valid number');
        return false;
    } else if ((number.charAt(0) < 9)) {
        //setError(number, 'Number must start by 98.......');
        return false;
    } else {
        //setSuccess(number);
       
    }

    if (address === '') {
        //  setError(address, 'address cannot be blank');
        return false;
    } else if (address.length <= 2) {
        // setError(address, 'address should more than 3 word');
        return false;
    } else {
        //  setSuccess(address);
       
    }


    if (password === '') {
        //  setError(password, 'Password is required');
        return false;
    } else if (password.length < 8) {
        // setError(password, 'Password must be at least 8 character.')
        return false;
    } else {
        // setSuccess(password);
      
    }

    if (password2 === '') {
        // setError(password2, 'Please confirm your password');
        return false;
    } else if (password2 !== password) {
        // setError(password2, "Passwords doesn't match");
        return false;
    } else {
        //  setSuccess(password2);
       
    }
    return false;
}