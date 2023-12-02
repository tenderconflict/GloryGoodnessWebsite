document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault();
    let username = document.getElementById('username').value;
    let password = document.getElementById('password').value;


//if the username matches the hardcoded one below then the user is granted access to
//the test login page
    if (username === 'admin' && password === 'password') {
        
        window.location.href = 'testloggedinpage.html'; 
    } else {
        alert('The password you have provided is incorrect, try again.');
    }
});
