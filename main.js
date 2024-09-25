document.getElementById("loginForm").addEventListener("submit", async function(event) {
    event.preventDefault();
    
    const username = document.getElementById("username").value;
    const password = document.getElementById("password").value;

    const response = await fetch('login.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({ username, password })
    });

    const result = await response.json();
    
    const messageDiv = document.getElementById("message");
    if (result.success) {
        messageDiv.innerHTML = "<div class='alert alert-success'>Login successful!</div>";
        // Redirect to a new page, e.g., window.location.href = "/dashboard";
    } else {
        messageDiv.innerHTML = "<div class='alert alert-danger'>Invalid credentials</div>";
    }
});
