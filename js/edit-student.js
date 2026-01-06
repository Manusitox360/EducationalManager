document
  .getElementById("editForm")
  .addEventListener("submit", function (event) {
    const idInput = document.getElementById("id");
    const nameInput = document.getElementById("name");
    const ageInput = document.getElementById("age");

    let valid = true;

    if (idInput.value <= 0) {
      setError(idInput, "Valid student ID is required");
      valid = false;
    } else {
      setSuccess(idInput);
    }

    if (isEmpty(nameInput.value)) {
      setError(nameInput, "Name is required");
      valid = false;
    } else {
      setSuccess(nameInput);
    }

    if (!isValidAge(ageInput.value)) {
      setError(ageInput, "Age must be between 1 and 120");
      valid = false;
    } else {
      setSuccess(ageInput);
    }

    if (!valid) {
      event.preventDefault();
    }
  });
