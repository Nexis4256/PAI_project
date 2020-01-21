function registerValidate()
{
    const apiUrl = 'http://localhost:80/PAIPROJECT';
        // alert("XD");
        $.ajax({
            url:apiUrl + '/?page=nicknameValidation',
            method:'post',
            dataType:'json',
            data:
                {
                    nickname:document.getElementById("nickname").value
                },
            success:function(res)
            {
                var nickname=document.getElementById("nickname").value;
                if(res == "false")
                {
                    alert("nickname is already taken");
                }
                else if(String(nickname)==="")
                {
                    alert("Your nickname is empty");
                }
            }
        });


        $.ajax({
            url: apiUrl + '/?page=emailValidation',
            method: 'post',
            dataType: 'json',
            data: {
                email: document.getElementById("registerEmail").value
            },
            success: function (res)
            {
                var email=document.getElementById("registerEmail").value;
                var password=document.getElementById("firstRegisterPassword").value;
                var repeated_password=document.getElementById("secondRegisterPassword").value;


                if (res == "false")
                {
                    alert("This email is already taken");
                }
                else if(String(email)==="")
                {
                    alert("Your email is empty");
                }
                else if (String(password)!=String(repeated_password))
                {
                    alert("First password and repeated password are not the same");
                    // return false;
                }
                else if ((String(password)==="") || (String(repeated_password)===""))
                {
                    alert("One of your password is empty");
                }
                 else
                {
                    // alert("XD");
                    $.ajax({
                        url: apiUrl + '/?page=registration',
                        method: 'post',
                        dataType: 'json',
                        data: {
                            email: document.getElementById("registerEmail").value,
                            password: document.getElementById("firstRegisterPassword").value,
                            role: "user",
                            nickname: document.getElementById("nickname").value
                        }

                    });
                    window.location.href = "http://localhost:80/PAIPROJECT/?page=login";
                }
                // return true;
            }
        });
}