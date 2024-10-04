document.getElementById("tripForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Prevent form submission

    const formData = new FormData(this); // Form data collection
    const xhr = new XMLHttpRequest();

    xhr.open("POST", "index.php", true); // Adjust if needed

    xhr.onload = function() {
        if (xhr.status === 200) {
            const response = JSON.parse(xhr.responseText);
            const successMsg = document.getElementById("successMsg");
            const returnButton = document.getElementById("returnButton");

            if (response.success) {
                successMsg.innerHTML = response.message;
                successMsg.style.display = "block"; // Show the success message

                // Hide the form after success
                document.querySelector('.container').style.display = 'none';

                // Show return button
                returnButton.style.display = "inline-block";
            } else {
                successMsg.innerHTML = response.message;
                successMsg.style.display = "block";
            }
        }
    };

    xhr.send(formData);
});