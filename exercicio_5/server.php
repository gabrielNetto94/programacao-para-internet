<?php

$name = $_GET['name'];

if (isset($_COOKIE[$name])) {
    
    

} else {
    header('Location: ./form.html');
}
/*
1) Crie uma página para solicitar o nome do usuário. Caso esse usuário não esteja armazenado em um cookie, solicite a ele as seguintes informações:
nome, email, estado civil e cor preferida. A partir das informações obtidas, grave o cookie.

Na próxima vez que o usuário retornar à página, solicite novamente o nome dele. Verifique novamente se há dados desse usuário gravados no cookie e,
caso exista, exiba todas as informações desse usuário na tela, através de um Javascript com a mensagem do tipo alerta.

Para isso, adicione um elemento <script>
    no html com uma chamada a função alert.


Além disso, faça com que a página configure, automaticamente, a sua cor de fundo com a cor que esse usuário gosta.*/ ?>
<script>
    //    alert("Hello! I am an alert box!");
</script>