function login(){
    let email=$('#email').val();
    let password=$('#password').val();

    $.ajax({
        type:"POST",
        url:"validatelogin.php",
        data:{email:email,password:password, det:"login"},
        success:function(data){
            if(data==='success'){
                //redirect to homepage
                window.location.href='profile.php';
            }else{
                //send alert message
                alert("Invalid email or password");
            }
            console.log(data);
        }
    })
    
}

function register(){
    let email=$('#email').val();
    let password=$('#password').val();
    let username=$('#username').val();
    let age=$('#age').val();

    $.ajax({
        type:"POST",
        url:"validatelogin.php",
        data:{email:email,password:password, username:username, age:age, det:"register"},
        success:function(data){
            if(data==='success'){
                //redirect to homepage
                window.location.href='login.php';
            }else{
                //send alert message
                alert("Invalid email or password");
            }
            console.log(data);
        }
    })
}
 
// how to center a div?

