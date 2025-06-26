function validateForm() {
  const name = document.getElementById("name").value.trim();
  const email = document.getElementById("email").value.trim();
  const message = document.getElementById("message").value.trim();
  const formMessage = document.getElementById("formMessage");

  formMessage.textContent = "";

  if (!name || !email || !message) {
    formMessage.textContent = "All fields are required.";
    return false;
  }

  const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  if (!emailPattern.test(email)) {
    formMessage.textContent = "Please enter a valid email address.";
    return false;
  }

  if (message.length < 10) {
    formMessage.textContent = "Message must be at least 10 characters.";
    return false;
  }

  alert("Form submitted successfully!");
  return true;
}
