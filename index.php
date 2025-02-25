<?php
require_once('Pokemon.php');

$pokemon1 = new Pokemon("Pikachu", Tipo::electrico, 200, ["Impactrueno", "Rayo", "Trueno", "Placaje"]);
$pokemon2 = new Pokemon("Charizard", Tipo::fuego, 300, ["Lanzallamas", "Llamarada", "Trueno", "fuegoataque"]);
$pokemon3 = new Pokemon("Raichu", Tipo::electrico, 250, ["Impactrueno", "Rayo", "Trueno", "Rapidez"]);
$pokemon4 = new Pokemon("Blastoise", Tipo::agua, 350, ["Hidrobomba", "Pistola Agua", "Trueno", "Rayo Burbuja"]);

$pokemons = [$pokemon1, $pokemon2, $pokemon3, $pokemon4];

function buscarTipo(Tipo $tipo, array $pokemons): array {
    $addPokemon = [];
    foreach($pokemons as $pokemon){
        if($pokemon->getTipo() == $tipo){
            array_push($addPokemon, $pokemon);
        }
    }
    return $addPokemon;
}

function buscarAtaque(string $ataque, array $pokemons): array {
    $addPokemon = [];
    foreach($pokemons as $pokemon) {
        if($pokemon->getAtaque($ataque) == $ataque){
            array_push($addPokemon, $pokemon);
        }
    }
    return $addPokemon;
}

echo implode(", ", buscarTipo(Tipo:: electrico, $pokemons)) . "<br>";
echo implode(", ", buscarAtaque("Rayo", $pokemons));

