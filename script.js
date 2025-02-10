// script.js

fetch('greeting.php', {
    method: 'GET',  // or 'POST' depending on your PHP script requirements
})
    .then(response => response.text())  // Assuming the PHP script returns plain text
    .then(data => {
        console.log(data);  // Log the response from greeter.php
        // You can use the data in your webpage if needed, for example:
        document.getElementById('output').innerText = data;  // Assuming you have an element with id "output"
    })
    .catch(error => {
        console.error('Error:', error);
    });


