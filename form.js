function validateForm() {
  let firstName = document.getElementById("firstname").value;
  let lastName = document.getElementById("lastname").value;
  let studentID = document.getElementById("studentid").value;
  let age = document.getElementById("Age").value;
  let email = document.getElementById("email").value;

  if (firstName === "" || lastName === "" || studentID === "" || age === "" || email === "") {
    alert("Please fill in all fields.");
    return false;
  }

  if (!/^[a-zA-Z]+$/.test(firstName)) {
    alert("First name should only contain alphabetic characters.");
    return false;
  }

  if (!/^[a-zA-Z]+$/.test(lastName)) {
    alert("Last name should only contain alphabetic characters.");
    return false;
  }

  if (!/^\d+$/.test(studentID)) {
    alert("Student ID should only contain numbers.");
    return false;
  }

  if (parseInt(age) < 18) {
    alert("You must be at least 18 years old to register.");
    return false;
  }

  let accountType = document.querySelector("select").value;

  let message = `You, ${firstName} ${lastName}, have successfully registered as ${accountType}.`;
  alert(message);

  return true;
}
