var check = function () {
    if (document.getElementById('password').value ==
        document.getElementById('cpassword').value) {
        document.getElementById('message').style.color = '#5dd05d';
        document.getElementById('message').innerHTML = 'Matched';
    } else {
        document.getElementById('message').style.color = '#f55252';
        document.getElementById('message').innerHTML = 'Not Matching';
    }
}

function alphaOnly(event) {
    var key = event.keyCode;
    return ((key >= 65 && key <= 90) || key == 8 || key == 32);
};

function checklen() {
    var pass1 = document.getElementById("password");
    if (pass1.value.length < 6) {
        alert("Password must be at least 6 characters long. Try again!");
        return false;
    }
}
// document.getElementById("courier_info").addEventListener(
//     "click",check_ship
// );
function Enable() {
    document.getElementById("btn").disabled=false;
}
function Disable() {
    document.getElementById("btn").disabled=true;
}
function check_ship(id,status)
{
    alert('ready');
    if(status=="Shipped")
    {
        var code="Ship_";
        code+=id;
        document.getElementById(code).disabled=true;
    }
    else
    {
        check_complete(id,status);
        var code="Cancel_";
        code+=id;
        document.getElementById(code).disabled=false;
    }
}
function check_complete(id,status) {
    if (status == "Completed") {
        var code = "Complete_";
        code += id;
        document.getElementById(code).disabled = true;
    }
}

function success(mass)
{
    alert(mass);
}
