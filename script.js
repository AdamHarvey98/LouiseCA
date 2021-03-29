function validateForm() {
  var x = document.forms["question"]["email"].value;
  if (x == "") {
    alert("Email must be filled out");
    return false;
  }
}
