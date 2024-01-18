document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault();
    //gathering both fields
    let username = document.getElementById('username').value;
    let password = document.getElementById('password').value;

//the below stub immitates a functional login system that we would have in place where
//the script would verify with the database that the credentials match the ones inputted
//all login information would be heavily encrypted.


//if the username matches the stub one below then the user is granted access to
//the test login page
    if (username === 'churchUser' && password === 'password') {
        
        window.location.href = 'testloggedinpage.html'; 
    } else {
        alert('The password you have provided is incorrect, try again.');
    }
});
