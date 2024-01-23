document.getElementById("seta1").addEventListener("click", function(){
});
function validarEmail() {
  var emailInput = document.getElementById('email');
  var email = emailInput.value;

  if (isValidEmail(email)) {
  document.getElementById("seta1").style.display = "none";
  document.getElementById("cadeVc").style.visibility = "visible";
  document.getElementById("seta2").style.display = "initial";
  } else {
    alert('E-mail inválido!');
  }
}
function isValidEmail(email) {
  var regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  return regex.test(email);
}
function enviarFormulario() {
  document.getElementById("final").submit();
}
