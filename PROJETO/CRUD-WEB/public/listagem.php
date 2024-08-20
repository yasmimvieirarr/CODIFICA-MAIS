<?php
session_start();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de produtos</title>
</head>
<body>
  <div class="quadrado">
    <section>
      <div class="header">
        <button name="novoproduto">Novo Item</button>
        <div class="buscar">
          Buscar: <textarea id="story" name="story" rows="1" cols="10"></textarea>
        </div>
      </div>

      <div class="conteudo">
        <div class="listagem">
          <div class="esquerda">
            <li>#0000001
              <button class="departamentos" name="departamento">Departamento</button>
            </li>
            <li>Camisa Codifica +</li>
            <li><button class="editar">Editar</button></li>
          </div>
          <div class="direita">
            <li>SKU</li>
            <li>Quantidade</li>
            <li><button>Deletar</button></li>
          </div>
        </div>
      </div>
      
    </section>
  </div>
</body>
</html>