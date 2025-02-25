<?php
    require_once('Tipo.php');

    class Pokemon {
        private string $nombre;
        private Tipo $tipo;
        private int $HP;
        private array $ataques;
    
    public function __construct (string $nombre, Tipo $tipo, int $HP, array $ataques=[]) {
        $this->nombre = $nombre;
        $this->tipo = $tipo;
        $this->HP = $HP;
        $this->ataques = $ataques;
    }

    public function getNombre(): string {
        return $this->nombre;
    }

    public function getTipo(): Tipo {
        return $this->tipo;
    }

    public function getHP(): int {
        return $this->HP;
    }
    
    public function getAtaque(string $ataque): string {
        foreach($this->ataques as $attack) {
            if ($attack == $ataque) {
                return $attack;
            } 
        }
        return "";
    } 

    public function __toString(){
        return "Nombre Pokemon: $this->nombre";
    }
}