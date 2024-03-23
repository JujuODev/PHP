<?php 
     $nomes = [
        ["nome" => "rui", "cel" => "1494238948"],
        ["nome" => "lu", "cel" => "1494777948"]
     ];

     

     echo "<table border=1>";
     echo "<tr>
     <td><b>Nome</b></td>
     <td><b>Celular</b></td>";
     /*foreach($nomes as $nome) {
        echo "<tr>

        echo <td>";
        echo $nome['nome'];
        echo "</td>";

        echo "<td>";
        echo $nome['cel'];
        echo "</td>";

        echo "</tr>";
     }*/

     foreach($nomes as $nome) {
        $varNome = $nome['nome'];
        $varCel = $nome['cel'];
        echo "<tr>
        <td>$varNome</td>
        <td>$varCel</td>
        </tr>";
     }
     
     echo "</table>";
?>