<!DOCTYPE html>
<html lang="en">
<body>
    <h1>Página</h1>

    <?php
        $minhavar = " Mundão perdido";
        echo "Hello $minhavar";
        echo "Hello \$minhavar";
        echo "Hello $minhavar";
        echo 'Hello $minhavar'."<br>";
        echo " $minhavar".gettype($minhavar).
        "<br>";
        $minhavar = 2;
        echo " $minhavar".gettype($minhavar).
        "<br>";
        $minhavar = 2.0;
        echo " $minhavar".gettype($minhavar).
        "<br>";

        class Pessoa{
            public $nome;
            public function alterarNome($n){
                $this -> nome=$n;
            }

            public function get_nome(){
                return $this -> nome;
            }

            public function tamanho(){
                return strlen($this->nome);
            }
        }

        $p1 = new Pessoa("Ash");
        $p2 = new Pessoa("Letícia");
        $p3 = new Pessoa("Zé");

        echo "p1.nome".$p1->get_nome()." <br>".
             "p2.nome".$p1->get_nome()." <br>".
             "p3.nome".$p1->get_nome()." <br>".

        //Array em PHP
        $pessoas=array($p1,$p2,$p3);
        foreach($pessoas as $pessoa){
            echo "Nome:" .$pessoa->get_nome;
        }

    ?>
</body>
</html>