

const login_admin = document.querySelector(".login_admin").addEventListener("click", (e) =>{
    e.preventDefault();
    var login_admin_message = document.querySelector(".login_admin_message");
    if ( login_admin_message.style.display == "block" ) {
        login_admin_message.style.display = "none";
    }else{
        login_admin_message.style.display = "block";
    }

    
})
