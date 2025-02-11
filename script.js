document.getElementById('webRequestForm').addEventListener('submit', function(event) {
    event.preventDefault();

    let name = this.elements[0].value;
    let email = this.elements[1].value;

    fetch('email.php', {
        method: 'POST',
        body: JSON.stringify({ name: name, email: email }),
        headers: { 'Content-Type': 'application/json' }
    })
    .then(response => response.text())
    .then(data => alert("Request received! Check your email."));
})
