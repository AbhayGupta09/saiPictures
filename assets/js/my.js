$(document).ready(function () {
    // Check if the user has submitted the form within the last 7 days
    if (localStorage.getItem("contactFormSubmitted")) {
      const submittedTime = new Date(localStorage.getItem("contactFormSubmitted"));
      const now = new Date();
      const timeDiff = now - submittedTime;
      const daysDiff = timeDiff / (1000 * 3600 * 24); // Convert milliseconds to days
  
      if (daysDiff < 7) {
        $("#contactForm").hide(); // Hide form if already submitted
        $("#successMessage").show().text("You can fill this form again in 7 days.").css("color", "green");
        return;
      }
    }
  
    $("#contactForm").on("submit", function (event) {
      event.preventDefault(); // Prevent default form submission
  
      // Show loader and hide the form
      $("#loader").show();
      $(this).hide();
  
      // Gather form data
      var formData = $(this).serialize();
  
      // AJAX request
      $.ajax({
        type: "POST",
        url: "contact_form.php", // Replace with your PHP script path
        data: formData,
        success: function (response) {
          // Handle success (show success message)
          $("#successMessage").show().text("Thank you! Your message has been sent.").css("color", "green");
          localStorage.setItem("contactFormSubmitted", new Date().toISOString()); // Store submission time
        },
        error: function () {
          // Handle error
          $("#successMessage").show().text("There was an error sending your message. Please try again.").css("color", "red");
        },
        complete: function () {
          // Hide loader after request is complete
          $("#loader").hide();
        },
      });
    });
  });
  