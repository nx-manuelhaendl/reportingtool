<?php
class DataController {
    public function registerNewUser($email, $password) {
        //Entsprechende Überprüfungen und SQL Queries zum Registrieren des Nutzers
        //Gibt z.B. true zurück, falls die Registrierung funktioniert hat
    }
    
    public function changeUserPassword( $user, $new_password) {
        //Ändert das Benutzerpasswort für den Nutzer $user
    }
    
    public function sendNewPassword( $user) {
        //Sendet dem Benutzer ein neues Passwort zu
    }
}
?>