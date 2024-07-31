const validation = new JustValidate("#signup");   
validation
    .addField("#user_name", [
        {
            rule: "required"
        }
    ])
    .addField("#f_name", [
        {
            rule: "required"
        }
    ])
    .addField("#mobile", [
        {
            rule: "required"
        }
    ])
    .addField("#acad_year", [
        {
            rule: "required"
        }
    ])
    .addField("#post", [
        {
            rule: "required"
        }
    ])
    .addField("#dob", [
        {
            rule: "required"
        }
    ])
    .addField("#rollno", [
        {
            rule: "required"
        }
    ])
    .addField("#email", [
        {
            rule: "required"
        },
        {
            rule: "email"
        },
        {
            validator: (value) => () => 
            {
                return fetch("validate_email.php?email=" + encodeURIComponent(value))
                .then(function(response)
                {
                    return response.json();
                })
                .then(function(json)
                {
                    return json.available;
                });
            },
            errorMessage: "email already taken"
        }
    ])
    .addField("#password", [
        {
            rule: "required"
        },
        {
            rule: "password"
        }
    ])
    .addField("#confirm_password", [
        {
            validator: (value, fields) => 
            {
                return value === fields["#password"].elem.value;
            },
            errorMessage: "Password should match"
        }
    ])
    .onSuccess((event) =>   
    {
        document.getElementById("signup").submit();
    });
    