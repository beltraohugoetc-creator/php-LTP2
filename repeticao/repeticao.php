<?php 

$passos = 0;

while ($passos < 3) {

    echo " A tartaruga deu um passo <br><br>";

    $passos++;

}

$tentativas = 0;

do {

    echo "O macaco tentou pegar a banana($tentativas)<br><br>";

    $tentativas++;

} while ($tentativas < 3);

for ($i = 1; $i <= 3 ; $i++) { 
    
    echo "A formiguinha carregou a folha passo $i<br><br>";
}



$animais = ["Tartaruga", "Formiga", "Macaco", "Leão"];

foreach ($animais as $animal) {

    echo "animal: $animal <br><br>";

}


?>