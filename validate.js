 function validateNew(){ //function to validate new user
        var pass = document.getElementById('password').value;
        var passCon = document.getElementById('passwordCon').value;
        var fname = document.getElementById('firstName').value;
        var lname = document.getElementById('lastName').value;
        var uname = document.getElementById('userName').value;
        
        
        if(!fname.match(/^[A-Za-z]*/)){
            document.getElementById('firstName').style.color = "red";
            alert("Invalid First Name");
                return false;
        }
        else if(!lname.match(/^[A-Za-z]*/)){
            document.getElementById('lastName').style.color = "red";
              alert("Invalid Last Name");
              return false;
        }
        else if(!uname.match(/\w*[a-zA-Z]\w*/)){
            document.getElementById('userName').style.color = "red";
            alert("Invalid User Name");
            return false;
        }
        else if(!pass.match(/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])[A-Za-z\d$@$!%*?&]{8,}/)){
            document.getElementById('password').style.color = "red";
            alert("Invalid Password");
            return false;
        }else if (pass !== passCon){
            alert("Passwords dont match");
            return false;
        }
        //document.getElementById("newuserInfo").style.color = "green";
        return true;
        }
       
   function validateLogin(){
        var uname = document.getElementById('userName').value;
        var pass = document.getElementById('password').value;
        
        if(!uname.match(/\w*[a-zA-Z]\w*/)){
            document.getElementById('userName').style.color = "red";
            alert("Invalid User Name");
            return false;
        }
        else if(!pass.match(/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])[A-Za-z\d$@$!%*?&]{8,}/)){
            document.getElementById('password').style.color = "red";
            alert("Invalid Password");
            return false;
            
        }
        return true;
   }