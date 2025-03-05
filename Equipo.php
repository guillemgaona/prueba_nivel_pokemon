<?php
require_once('Pokemon.php');

class Equipo {
    private array $pokemons;

    public function __construct(array $pokemons = []){
        $this->pokemons = $pokemons;
    }

    public function getPokemons(): array {
        return $this->pokemons;
    }

    public function setPokemons(array $pokemons): void {
        $this->pokemons = $pokemons;
    }

    public function addPokemon(Pokemon $pokemon): void {
        array_push($pokemons,$pokemon);
    }

    public function buscarTipo(Tipo $tipo): array {
        $addPokemon = [];

        $addPokemon = array_filter($this->pokemons, function($pokemon) use ($tipo) { 
            return $pokemon->getTipo() === $tipo;
        });

        return $addPokemon;
    }
    
    public function buscarAtaque(string $ataque): array {
        $addPokemon = [];

        $addPokemon = array_filter($this->pokemons, function($pokemon) use ($ataque) {
            return $pokemon->getAtaque($ataque);
        });

        return $addPokemon;
    }
    /*function buscarAtaque(string $ataque, array $pokemons): array {
        $addPokemon = [];
        foreach($pokemons as $pokemon) {
            if($pokemon->getAtaque($ataque)){
                array_push($addPokemon, $pokemon);
            }
        }
        return $addPokemon;
    }*/
}