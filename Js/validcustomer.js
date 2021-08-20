function validation()
{
    var fname = document.getElementById("fName").value;
    var pnumber= document.getElementById("pNumber").value;
    var email = document.getElementById("email").value;
    var patt = /^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/;
    var res = patt.test(email);
    var password = document.getElementById("passWord").value;
    var address = document.getElementById("address").value;
    var birthdate = document.getElementById("bday").value;
    var gender = document.getElementById("gender").value;
    if(pnumber==""||pnumber.length!=11)
    {
        document.getElementById("errmsg1").innerHTML="Please enter phone Number";
        return false;
    }
    else
    {
        if(fname="")
        {
            document.getElementById("errmsg2").innerHTML="Please enter Full Name";
            return false;
        }
        else
        {
            if(!res)
            {
                document.getElementById("errmsg3").innerHTML="Please enter Valid email";
                return false;
            }
            else
            {
            if(password.length<5)
            {
                document.getElementById("errmsg4").innerHTML="Password length must be 5";
                return false;
            }
            else
            {
                if(address="")
                {
                    document.getElementById("errmsg5").innerHTML="Please enter your address";
                    return false;
                }
                else
                {
                    if(birthdate="")
                    {
                        document.getElementById("errmsg6").innerHTML="Please enter your birth date";
                        return false;
                    }
                    else
                    {
                        if (document.getElementById("male").checked == false && document.getElementById("female").checked == false && document.getElementById("other").checked == false)
                        {
                            document.getElementById("errortext").innerHTML="Please select your gender";
                            return false;
                        }
                        else{ return true;}
                    }
                 }

            }
        }
    }

}
}