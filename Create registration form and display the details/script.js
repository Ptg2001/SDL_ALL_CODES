function displayDetails() {
    var firstName = document.getElementById("firstName").value;
    var lastName = document.getElementById("lastName").value;
    var organization = document.getElementById("organization").value;
    var hobbies = document.getElementById("hobbies").value;
    
    document.getElementById("displayFirstName").innerText = firstName;
    document.getElementById("displayLastName").innerText = lastName;
    document.getElementById("displayOrganization").innerText = organization || "N/A";
    document.getElementById("displayHobbies").innerText = hobbies || "N/A";
    
    document.getElementById("registrationForm").style.display = "none";
    document.getElementById("detailsContainer").style.display = "block";
    
    return false; // Prevent form submission
  }
  