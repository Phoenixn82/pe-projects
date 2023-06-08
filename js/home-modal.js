const openModalBtn = document.getElementById("openModalBtn");
const modal = document.getElementById("modal");
const closeBtn = document.getElementsByClassName("close")[0];

openModalBtn.addEventListener("click", function() {
    modal.style.display = "block"; // Display the modal when the button is clicked
});

closeBtn.addEventListener("click", function() {
    modal.style.display = "none"; // Hide the modal when the close button is clicked
});
