document.addEventListener("DOMContentLoaded", function(event) { 
    var scrollpos = localStorage.getItem('scrollpos');
    if (scrollpos) window.scrollTo(0, scrollpos);
});

window.onbeforeunload = function(e) {
    localStorage.setItem('scrollpos', window.scrollY);
};

document.addEventListener("DOMContentLoaded", function() {
    // Get all forms on the page
    var forms = document.getElementsByTagName("form");
    for (var i = 0; i < forms.length; i++) {
        // Attach event listener for form submit
        forms[i].addEventListener("submit", function(event) {
            // Prevent the form from submitting

            // Check if all inputs are filled
            var inputs = this.getElementsByTagName("input");
            var allInputsFilled = true;
            for (var j = 0; j < inputs.length; j++) {
                if (inputs[j].value === "") {
                    allInputsFilled = false;
                    break;
                }
            }

            if (allInputsFilled) {
                // Show the output element
                var output = this.querySelector(".output");
                if (output) {
                    output.style.display = "block";
                }

                // Perform form submission
                this.submit();
            } else {
                alert("Please fill in all inputs.");
            }
        });
    }
});

