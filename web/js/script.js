document.getElementById("contact-form").addEventListener("submit", formSubmit);

function formSubmit(event) {

  const name = document.getElementById("name").value;
  const email = document.getElementById("email").value;
  const message = document.getElementById("message").value;

  if (!name || !email || !message) {
    alert("Por favor, rellena todos los campos");
    event.preventDefault(); 
  }
}