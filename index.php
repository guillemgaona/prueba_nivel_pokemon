<?php
require_once('Equipo.php');

$pokemons = [
    new Pokemon("Pikachu", Tipo::electrico, 200, ["Impactrueno", "Rayo", "Trueno", "Placaje"]), 
    new Pokemon("Charizard", Tipo::fuego, 300, ["Lanzallamas", "Llamarada", "Trueno", "fuegoataque"]), 
    new Pokemon("Raichu", Tipo::electrico, 250, ["Impactrueno", "Rayo", "Trueno", "Rapidez"]), 
    new Pokemon("Blastoise", Tipo::agua, 350, ["Hidrobomba", "Pistola Agua", "Trueno", "Rayo Burbuja"])
];
$equipoPokemon = new Equipo($pokemons);

/*$equipoPokemon = new Equipo();
$equipoPokemon->setPokemon($pokemons);*/

/*$equipoPokemon = new Equipo();
$equipoPokemon->addPokemond($pokemon1);
$equipoPokemon->addPokemond($pokemon2);*/

echo implode(", ", $equipoPokemon->buscarTipo(Tipo:: electrico)) . PHP_EOL;
echo implode(", ", $equipoPokemon->buscarAtaque("Rayo"));

