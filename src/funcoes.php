<?php

namespace SRC;

class Funcoes
{
    /*

    Desenvolva uma função que receba como parâmetro o ano e retorne o século ao qual este ano faz parte. O primeiro século começa no ano 1 e termina no ano 100, o segundo século começa no ano 101 e termina no 200.

	Exemplos para teste:

	Ano 1905 = século 20
	Ano 1700 = século 17

     * */
    public function SeculoAno(int $ano): int {
        $seculo = 0;
        $anos = 1;
        if($ano > 0){
            while($anos <= $ano){
                $anos += 100;
                $seculo++;
            }
        }
        return $seculo;
    }

	

	
	/*

    Desenvolva uma função que receba como parâmetro um número inteiro e retorne o numero primo imediatamente anterior ao número recebido

    Exemplo para teste:

    Numero = 10 resposta = 7
    Número = 29 resposta = 23

     * */
    public function PrimoAnterior(int $numero): int {
        $primo = 2;
        if($numero > 2){
            for($i=$numero-1; $i > 1 ; $i--){
                if(Self::Primo($i)){
                    $primo = $i;
                    break;
                } 
            }
        }
        return $primo;
    }


    

    /*

    Desenvolva uma função que receba como parâmetro um array multidimensional de números inteiros e retorne como resposta o segundo maior número.
    Exemplo para teste:

	Array multidimensional = array (
	array(25,22,18),
	array(10,15,13),
	array(24,5,2),
	array(80,17,15)
	);

	resposta = 25

     * */
    public function SegundoMaior(array $arr): int {
        $todos = array();
        foreach($arr as $numeros){
            foreach($numeros as $num){
                $todos[] = $num;
            }
        }
        rsort($todos, 1);
        return $todos[1];
    }
	



    /*
   Desenvolva uma função que receba como parâmetro um array de números inteiros e responda com TRUE or FALSE se é possível obter uma sequencia crescente removendo apenas um elemento do array.

	Exemplos para teste 

	Obs.:-  É Importante  realizar todos os testes abaixo para garantir o funcionamento correto.
         -  Sequencias com apenas um elemento são consideradas crescentes

    [1, 3, 2, 1]  false
    [1, 3, 2]  true
    [1, 2, 1, 2]  false
    [3, 6, 5, 8, 10, 20, 15] false
    [1, 1, 2, 3, 4, 4] false
    [1, 4, 10, 4, 2] false
    [10, 1, 2, 3, 4, 5] true
    [1, 1, 1, 2, 3] false
    [0, -2, 5, 6] true
    [1, 2, 3, 4, 5, 3, 5, 6] false
    [40, 50, 60, 10, 20, 30] false
    [1, 1] true
    [1, 2, 5, 3, 5] true
    [1, 2, 5, 5, 5] false
    [10, 1, 2, 3, 4, 5, 6, 1] false
    [1, 2, 3, 4, 3, 6] true
    [1, 2, 3, 4, 99, 5, 6] true
    [123, -17, -5, 1, 2, 3, 12, 43, 45] true
    [3, 5, 67, 98, 3] true

     * */
	public function SequenciaCrescente(array $arr): bool {
        $crescente = false;
        for($i=0; $i < count($arr) ; $i++){
            $teste = $arr;
            unset($teste[$i]);
            $teste = array_values($teste);
            if(count($teste) == 1){
                $crescente = true;
            }
            $numeros = $teste;
            $valores = array_unique($numeros);
            sort($numeros);
            $numeros = array_values($numeros);
            if($numeros === $teste){
                $crescente = true;
            }
        }
        return $crescente;
    }

    

    public static function Primo(int $numero): bool{
        if($numero == 1) return 0;
        for($i = 2; $i <= $numero / 2; $i++){
            if($numero % $i == 0){
                return false;
            }
        }
        return true;
    }
}
