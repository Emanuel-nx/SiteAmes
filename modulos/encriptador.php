<?php
/**
 * MyCripty - classe para criptografar e reverter a criptografia de forma fácil, simples e segura utilizando PHP.
 *
 * @author Hudolf Jorge Hess
 * @version 1.0b
 * @link www.hudolfhess.com
 */

class MyCripty {

    /**
     * @var int
     */
    public $chave = 3;

    /**
     * @var string
     */
    public $add_text = "texto adicional aqui";

    /**
     * @param string Palavra
     * @return string
     */
    function enc($word) {
        $word   .= $this->add_text;
        $s      = strlen($word)+1;
        $nw     = "";
        $n      = $this->chave;

        for ($x = 1; $x < $s; $x++) {
            $m = $x*$n;
            if ($m > $s){
                $nindex = $m % $s;
            } else if ($m < $s) {
                $nindex = $m;
            }

            if ($m % $s == 0) { $nindex = $x; }

            $nw = $nw.$word[$nindex-1];
        }
        return $nw;
    }

    /**
     * @param string Palavra
     * @return string
     */
    function dec($word){
        $s  = strlen($word)+1;
        $nw = "";
        $n  = $this->chave;
        for ($y = 1; $y < $s; $y++) {
            $m = $y*$n;
            if ($m % $s == 1) {
                $n = $y;
                break;
            }
        }
        for ($x = 1; $x < $s; $x++) {
            $m = $x*$n;
            
            if ($m > $s) {
                $nindex = $m % $s;
            } else if ($m < $s) {
                $nindex = $m;
            }

            if ($m % $s == 0) { $nindex = $x; }

            $nw = $nw.$word[$nindex-1];
        }
        $t = strlen($nw) - strlen($this->add_text);
        return substr($nw, 0, $t);
    }
}

$chave_crypto = 'GrcZlOUnd0Y6tKOAlc8I69IFX6k_p1S3PAqoJCom3AKnThz_t3r0Cc5VxxjcXc-s9kB9JfCyCw3EPZ0XkcylXwCL9jfJOfeQ1';
?>