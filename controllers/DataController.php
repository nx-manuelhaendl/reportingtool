<?php
class DataController {
    public function registerNewUser($email, $password) {
        //Entsprechende �berpr�fungen und SQL Queries zum Registrieren des Nutzers
        //Gibt z.B. true zur�ck, falls die Registrierung funktioniert hat
    }
    
    public function changeUserPassword( $user, $new_password) {
        //�ndert das Benutzerpasswort f�r den Nutzer $user
    }
    
    public function sendNewPassword( $user) {
        //Sendet dem Benutzer ein neues Passwort zu
    }
}
?>