window.addEventListener('DOMContentLoaded', function () {
    // Registrierungsformular
    document.getElementById('registerform').addEventListener('submit', function (e) {
        e.preventDefault();


        fetch('register.php', {
            method: 'POST',
            body: new FormData(this),
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(data => {
            if (data.status === 'success') {
                zeigeErfolgsPopup('Registrierung erfolgreich!');
            } else {
                zeigeFehlerPopup('Fehler bei der Registrierung.');
            }
        })
        .catch(error => {
            zeigeFehlerPopup('Ein Fehler ist aufgetreten.');
        });
    }); 

   
    // Funktion für Erfolgsmeldung
    function zeigeErfolgsPopup(Nachrichtinhalt) {
        swal({
            title: "Erfolg!",
            text: Nachrichtinhalt,
            icon: "success",
            confirmButtonText: "OK"
        });
    }

    // Funktion für Fehlermeldung
    function zeigeFehlerPopup(Nachrichtinhalt) {
        swal({
            title: "Fehler!",
            text: Nachrichtinhalt,
            icon: "error",
            confirmButtonText: "OK"
        });
    }
});