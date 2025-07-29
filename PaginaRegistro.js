const contraseñaCorrecta = "Correcto";

const emailCorrecto = "alexarroyo@gmail.com";

const mensaje = document.getElementById("error-msg");

const form = document.querySelector("form");

const emailInput = document.getElementById("email");

const passwordInput = document.getElementById("password");

const recordar = document.getElementById("recordar");


// Expresión regular corregida
const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

form.addEventListener("submit", function(event) {
  event.preventDefault(); // Evita recargar la página

  const emailIntroducido = emailInput.value.trim();
  const contraseñaIntroducida = passwordInput.value;

  // Validaciones
  if (!emailRegex.test(emailIntroducido)) {
    mensaje.textContent = "El formato del email no es válido.";
  } else if (
    emailIntroducido !== emailCorrecto ||
    contraseñaIntroducida !== contraseñaCorrecta
  ) {
    mensaje.textContent = "Email o contraseña incorrectos.";
  } else {
    mensaje.textContent = "Login correcto.";
  }
});