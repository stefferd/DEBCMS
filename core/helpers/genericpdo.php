<?php
/**
 * Gemaakt door DEB Media
 * Gebruiker: s.van.den.berg
 * Datum: 13-2-14 16:25
 * Omschrijving: 
 */

class GenericPdo {

    protected $handler = null;

    public function __construct(Settings $settings)
    {
        try {
            $this->handler = new PDO('mysql:host=10.246.16.73;dbname=' . $settings->database, $settings->user, $settings->password);
            if ($settings->environment != 'P') {
                $this->handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
        } catch(PDOException $exception) {
            echo $exception->getMessage();
        }
    }

    public function release() {
        $this->handler = null;
    }
} 