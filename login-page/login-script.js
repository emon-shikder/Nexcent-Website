function validateLoginForm() {
  const email = document.getElementById("email").value.trim();
  const password = document.getElementById("password").value.trim();
  const errorMessage = document.getElementById("errorMessage");

  errorMessage.textContent = "";

  const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

  if (email === "" || password === "") {
    errorMessage.textContent = "Please fill in all fields.";
    return false;
  }

  if (!emailPattern.test(email)) {
    errorMessage.textContent = "Please enter a valid email address.";
    return false;
  }

  if (password.length < 6) {
    errorMessage.textContent = "Password must be at least 6 characters.";
    return false;
  }

  alert("Login successful!");
  return true;
  
}

