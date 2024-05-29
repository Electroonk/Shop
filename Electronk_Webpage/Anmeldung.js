function handleLogin() {
    // Hier können Sie die Anmeldeüberprüfung durchführen
    // Wenn die Anmeldung erfolgreich ist:
    const username = document.getElementById('username').value;
    localStorage.setItem('loggedInUser', username);
    return true; // Formular wird gesendet
}



function handleLogin() {
    const username = document.getElementById('username').value;
    localStorage.setItem('loggedInUser', username);
    console.log('Benutzername gespeichert:', username);
    return true; // Formular wird gesendet
}
