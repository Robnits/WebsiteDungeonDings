window.addEventListener('DOMContentLoaded', function () {
  
    document.getElementById('loginform').addEventListener('submit', function (x) {
        x.preventDefault();


        fetch('login.php', {
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
                zeigeErfolgsPopup(Nachrichtinhalt);
            } else {
                zeigeFehlerPopup(Nachrichtinhalt);
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