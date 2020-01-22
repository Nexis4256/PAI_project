$(document).ready(function ()
{
    const apiUrl = 'http://localhost:80/PAIPROJECT';
    $("input").change(function ()
    {
        switch (this.id)
        {
            case "registerEmail":
                $.ajax(
                    {
                    url: apiUrl + '/?page=emailValidation',
                    method: 'post',
                    dataType: 'json',
                    data: {
                        email: this.value
                    },
                    success: function (res)
                    {
                        if (res == "false")
                        {
                            document.getElementById("check_email").innerHTML = "You cannot use this email";
                        }
                        else
                        {
                            document.getElementById("check_email").innerHTML = "";
                        }
                    }

                });
                break;
            case "nickname":
                $.ajax(
                    {
                        url: apiUrl + '/?page=nicknameValidation',
                        method: 'post',
                        dataType: 'json',
                        data: {
                            nickname: this.value
                        },
                        success: function (res)
                        {
                            if (res == "false")
                            {
                                document.getElementById("check_nickname").innerHTML = "You cannot use this nickname";
                            }
                            else
                            {
                                document.getElementById("check_nickname").innerHTML = "";
                            }
                        }

                    });
                break;
            case "secondRegisterPassword":
                if (this.value !== document.getElementById("firstRegisterPassword").value) //zmienilem tu na !==
                {
                    document.getElementById("check_password").innerHTML = "passwords arent similar";
                } else
                {
                    document.getElementById("check_password").innerHTML = "";
                }
                break;
        }
    });
});


