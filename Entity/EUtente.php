<?php

/**
 * @access public
 * @package Entity
 */
class EUtente {
    public $nome;
    public $cognome;
    public $username;
    public $password;
    public $email;

    /**
     * @AssociationType Entity.EPrenotazione
     * @AssociationMultiplicity 0..*
     * @AssociationKind Aggregation
     */
    public $arrayPrenotazioni=array();
    /**
     * @access public
     * @return Prenotazione
     */
   
    //public function generaCodiceAttivazione() {
    //    $this->codice_attivazione=mt_rand();
    //}

    
    public function addPrenotazione(EPrenotazione $Prenotazione) {
        $this->arrayPrenotazioni[]=$Prenotazione;
    }

    /**
     * @access public
     * @return array()
     * @ReturnType array()
     */
    public function getPrenotazioni() {
        return $this->arrayPrenotazioni;
    }
    /**
     * @access public
     * @return array()
     * @ReturnType array()
     */
    /*public function getAccountAttivo() {
        if ($this->stato=='attivo')
            return true;
        else                                        DA METTERE IN FUTURO
            return false;
    }

    public function getCodiceAttivazione() {
        return $this->codice_attivazione;
    }
    */
    
    public function setNome(String $n){
        $this->nome=$n;
    }

    public function setCognome(String $c){
        $this->cognome=$c;
    }

    public function setUsername(String $u){
        $this->username=$u;
    }

    public function setPass(String $pwd){
        $this->password=$pwd;
    }

    public function setEmail(String $e){
        $this->email=$e;
    }

    public function getNome(){
        return $this->nome;
    }

    public function getCognome(){
        return $this->cognome;
    }

    public function getUsername(){
        return $this->username;
    }

    public function getPass(){
        return $this->password;
    }

    public function getEmail(){
        return $this->email;
    }
}
?>