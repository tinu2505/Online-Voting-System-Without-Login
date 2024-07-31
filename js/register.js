const sign_up = document.getElementById("sign_up");   
const user_name = document.getElementById("user_name");
const f_name = document.getElementById("f_name");
const mobile = document.getElementById("mobile");
const acad_year = document.getElementById("acad_year");
const dob = document.getElementById("dob");
const rollno = document.getElementById("rollno");
const email = document.getElementById("email");
const password = document.getElementById("password");
const confirm_password = document.getElementById("confirm_password");

sign_up.addEventListener("submit", (e) => {
    e.preventDefault();
    checkInputs();
});

function checkInputs()
{
    //get values from inputs
    user_name.value
}

const setError = (element, message) => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = message;
    inputControl.classList.add('error');
    inputControl.classList.remove('success');
};

const setSuccess = element => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = '';
    inputControl.classList.add('success');
    inputControl.classList.remove('error');
};

const isValidEmail = email => {
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

const validateInputs = () =>{
    const user_nameValue = user_name.value.trim();
    const f_nameValue = f_name.value.trim();
    const mobileValue = mobile.value.trim();
    const acad_yearValue = acad_year.value.trim();
    const dobValue = dob.value.trim();
    const rollnoValue = rollno.value.trim();
    const emailValue = email.value.trim();
    const passwordValue = password.value.trim();
    const confirm_passwordValue = confirm_password.value.trim();

    if(user_nameValue === '')
    {
        setError(user_name, 'Username is required');
    }
    else
    {
        setSuccess(user_name);
    }
    if(emailValue === '')
    {
        setError(email, 'Email is required');
    }
    else if(!isValidEmail(emailValue))
    {
        setError(email, 'provide a valid Email Address');
    }
    else
    {
        setSuccess(email);
    }
    if(passwordValue === '')
    {
        setError(password, 'password is required');
    }
    else if(passwordValue.lenght < 8)
    {
        setError(password, 'Password must be 8 characters');
    }
    else
    {
        setSuccess(password);
    }
    if(confirm_passwordValue === '')
    {
        setError(confirm_password, 'please confirm your password');
    }
    else if(confirm_passwordValue !== passwordValue)
    {
        setError(confirm_password, 'Password does not match');
    }
    else
    {
        setSuccess(confirm_password);
    }

};