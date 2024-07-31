const validation = new JustValidate("#reset-password");
validation
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
        document.getElementById("reset-password").submit();
    });  