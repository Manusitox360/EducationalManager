function isEmpty(value) {
  return value.trim() === "";
}

function isValidAge(age) {
  return age >= 1 && age <= 120;
}

function setError(input, message) {
  input.classList.remove("success");
  input.classList.add("error");

  let error = input.nextElementSibling;
  if (!error || !error.classList.contains("error-message")) {
    error = document.createElement("div");
    error.className = "error-message";
    input.after(error);
  }
  error.textContent = message;
}

function setSuccess(input) {
  input.classList.remove("error");
  input.classList.add("success");

  const error = input.nextElementSibling;
  if (error && error.classList.contains("error-message")) {
    error.remove();
  }
}
