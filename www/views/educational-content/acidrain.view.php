<!DOCTYPE html>
<html lang="en">
<head>
    
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <title>Chuva Ácida</title>
</head>
<style>
    * {
    font-family: 'Lato', sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    text-decoration: none;
}


:root {
    --cor-1: #508b5b;
    --cor-2: #4da2e3; 
    --cor-3: #40bf80;
    --cor-4: #218c75;
    --cor-5: #207e20;
    --cor-6: #3e9037;
    --cor-7: #2c52ed;
    --cor-8: #8ec2c7;

}

main{
    height: 70vh;
    position: relative;
    background-color: #05668d;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 70px;
    
}

main .wave {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 100px;
    background: url('http://front-end-noobs.com/jecko/img/wave-bot.png');
    background-size: 1000px 100px;
}

main .wave.wave1{
    animation: animate 10s linear infinite;
    z-index: 1000;
    opacity: 1;
    animation-delay: 0s;
    bottom: 0;
}

main .wave.wave2{
    animation: animate2 15s linear infinite;
    z-index: 999;
    opacity: 0.5;
    animation-delay: -5s;
    bottom: 10px;
}

main .wave.wave3{
    animation: animate 20s linear infinite;
    z-index: 998;
    opacity: 0.2;
    animation-delay: -2s;
    bottom: 15;
}

main .wave.wave2{
    animation: animate2 15s linear infinite;
    z-index: 997;
    opacity: 0.7;
    animation-delay: -5s;
    bottom: 20px;
}

@keyframes animate {
    0% {
        background-position-x:0 ;
    }

    100% {
        background-position-x: 1000px;
    }
}

@keyframes animate2 {
    0% {
        background-position-x:0 ;
    }

    100% {
        background-position-x: -1000px;
    }
}


.imagem-titulo{
    display: flex;
    text-transform: uppercase;
    animation:fade-up 1s;
}

.titulo-principal1{
    color: white;
}



.titulo-principal2{
    padding-left: 30px;
    color: #02c39a;
}

.definicao{
    animation:fade-up 1s;
}
.definicao h1 {
    text-align: center;
    padding-top: 4rem;
    font-size: 50px;
    color: var(--cor-7);
    border-bottom: 1px solid silver;
}

.texto-definicao{
    display: flex;
    justify-content: center;
    margin: 0 15em;
}

.texto-definicao p {
    padding: 1rem;
    font-size: 20px;
    text-align: left;
    width: 100%;
    border-bottom: 1px solid silver;
    text-align: justify;
}

strong{
    font-weight: 700 ;
}

.conteudo {
    margin: 0 7.2em;
    padding-bottom: 5em;
    animation:fade-up 1s;
}


.conteudo h4 {
    padding-top: 5rem;
    font-size: 30px;
    font-weight: 900;
}


.conteudo p {
    padding-top: 1rem;
    line-height: 1.2;
    font-size: 20px;
    text-align: justify;
}

.imagem{
    display:flex ;
    justify-content: center;
}

.conteudo ul {
    padding-top: 1rem;
    font-size: 20px;
    text-align: justify;
    padding-left: 2em;
}

.conteudo li {
    padding-top: 0.5em;
}

.imagem img{
    width: 40%;
    box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;
}

.imagem-2 {
    display: flex;
    justify-content: center;
    
}

.imagem-2 img{
    border-radius: 10px;
    box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;
}

.subtitulo-imagem {
    font-size: 18px;
    text-align: center;
    padding-top: 1em;
    padding-bottom: 3em;
}



@media (max-width:1600px){
    .texto-definicao{
        display: flex;
        justify-content: center;
        margin: 0 5em;
    }
}

@media (max-width:970px){
    .titulo-principal1, .titulo-principal2 {
        font-size: 100px;
    }

    .definicao h1 {
        font-size: 40px;
        
        
    }
}

@media (max-width:900px){
    .titulo-principal1, .titulo-principal2 {
        font-size: 20px;
    }

    .definicao h1 {
        font-size: 10px;
    }

    .imagem img{
        width: 100px;
    }

    .imagem-2 img {
        width: 100px;
    }
    
}




@media (max-width:500px){

    .row h1 {
        font-size: 40px;
    }

    .col img {
        padding-right: 20px;
    }

    .login-entrar{
        display: none;
    }
    
    .cadastrar-se{
        display: none;
    }

    .login-icone i {
        font-size: 15px;
        padding-left: 2em;
    }

    .texto button {
        font-size: 14px;
    }

    .card img {
        min-width: 100%;
      }

}

@keyframes fade-up {
        0% {
            opacity: 0;
            transform: translateY(100px) scale(0.9);
        }

        100% {
            opacity: 1;
            transform: translateY(0px) scale(1);
        }
    }

    @keyframes lateral {
        0% {
            opacity: 0;
            transform: translateX(400px) scale(0.9);
        }

        100% {
            opacity: 1;
            transform: translateX(0px) scale(1);
        }
    }
</style>
<body>
<?php include_once(__DIR__ . "/../header/header.php") ?>
    
    <main>
        <div class="wave wave1"></div>
        <div class="wave wave2"></div>
        <div class="wave wave3"></div>
        <div class="wave wave4"></div>

        <div class="imagem-titulo">
            <h1 class="titulo-principal1">Chuva</h1>
            <h1 class="titulo-principal2">ácida</h1>
        </div>
    </main>

    <aside>
        <div class="definicao">
            <h1>Chuva Ácida: O Desafio Ambiental que Precisamos Enfrentar</h1>
            <div class="texto-definicao">
                <p>A chuva ácida é um fenômeno atmosférico que ocorre quando a precipitação, como chuva, neve ou granizo, apresenta um pH abaixo do nível considerado neutro, que é 7. Isso significa que a chuva ácida tem um pH menor do que 5.6, sendo considerada mais ácida do que a água de chuva pura. Esse fenômeno resulta da emissão de poluentes ácidos na atmosfera, que reagem com o vapor de água e formam ácidos sulfúrico e nítrico. A chuva ácida é um problema ambiental sério, com impactos negativos significativos no meio ambiente e na saúde humana.</p>
        
            </div>
        </div>

        <div class="conteudo">
            
          <h4>Qual a origem da chuva ácida?</h4>  
          <p>Chama-se de chuva ácida a precipitação na forma de água que possui baixo pH, geralmente abaixo do valor 5,6, que é o patamar considerado normal para as chuvas. A escala de pH mede o índice de acidez de uma determinada solução. Considera-se uma substância ácida quando o seu pH é menor do que 7. Dessa forma, podemos afirmar que, em condições normais, as chuvas apresentam certo grau de acidez, mas sem que haja quaisquer tipos de prejuízo para a natureza ou para a saúde humana.</p>    
          <p>O aumento da acidez da água das chuvas ocorre em função do acúmulo de poluentes na atmosfera, os quais são compostos geralmente por óxidos, que, quando reagem com as moléculas de água em suspensão, geram a chuva ácida.</p>
          <p>A emissão de gases poluentes com potencial para desencadear esse fenômeno atmosférico pode ter origem tanto natural como antrópica. No primeiro caso, os principais responsáveis são os vulcões, que ocasionam a liberação de uma série de gases, materiais particulados e compostos de enxofre no ar. A decomposição de matéria orgânica sobre as superfícies dos solos e demais processos biológicos que ocorrem também em superfície, assim como queimadas (naturais ou não) podem emitir gases e outras substâncias poluentes.</p>
          <p>A origem antrópica se dá sobretudo por meio das emissões industriais, das usinas e pela queima de combustíveis fósseis, processos esses que se concentram nos grandes centros urbanos.</p>

           <h4>Como se forma a chuva ácida?</h4>
           <p>A chuva ácida é formada a partir da <strong>reação dos óxidos presentes nos gases poluentes com as gotículas de água </strong>que se encontram em suspensão na atmosfera. Nesse processo, ocorre a formação de compostos ácidos, que, no momento da condensação e precipitação, são depositados sobre as cidades, vegetação e superfícies aquáticas. Em função disso, a chuva ácida é chamada também de deposição ácida.</p>
           <p>O esquema abaixo mostra, de forma simplificada, como se dá o processo de formação da chuva ácida e algumas de suas consequências.</p>
        </div>

        <div class="imagem">
            <img src="https://static.mundoeducacao.uol.com.br/mundoeducacao/2021/07/1-chuva-acida.png" alt="">
        </div>

        <div class="conteudo">
            <h4>Qual a composição da chuva ácida?</h4>
            <p>A chuva ácida é composta principalmente pelo ácido sulfúrico (H2SO4) e pelo ácido nítrico (HNO3). Ambos são formados a partir da reação da água com os seguintes elementos:</p>
            <ul>
                <li><strong>Óxidos de enxofre</strong> (SO2 e SO3): sua emissão pode se dar naturalmente pela decomposição de matérias orgânicas ou por meio de atividades vulcânicas, e também por meio da queima de combustíveis fósseis (carvão, petróleo) e processos industriais.</li>
                <li><strong>Óxidos de nitrogênio</strong> (Nox): derivados também da queima de combustíveis fósseis em motores à combustão e emitidos por outras fontes, como fumaça de cigarros e usinas. Alguns processos naturais podem causar a sua liberação, como as descargas elétricas.</li>
            </ul>

            <h4>Principais consequências da chuva ácida</h4>
            <p>O fenômeno da chuva ácida <strong>é extremamente prejudicial para os ecossistemas terrestres e aquáticos,</strong> bem como para a saúde humana. Sua ocorrência traz ainda efeitos destrutivos para os monumentos públicos e estruturas urbanas de um modo geral. Os ventos podem carregar as águas com elevada acidez para outras localidades, ampliando a sua escala de danos.</p>
            <p>Elencamos abaixo algumas das principais consequências das chuvas ácidas:</p>
            <ul>
                <li>Acidificação da água dos rios, lagos e mananciais, causando a morte de peixes e outras espécies aquáticas;</li>
                <li>Destruição de folhas e galhos de árvores, levando à degradação da cobertura vegetal;</li>
                <li>Aumento da acidez dos solos e mudanças na sua composição nutricional, afetando o ciclo de desenvolvimento da vegetação e, em alguns casos, causando o seu envenenamento;</li>
                <li>Contaminação das reservas subterrâneas de água;</li>
                <li>Dorrosão de monumentos instalados ao ar livre, sobretudo aqueles feitos em mármore e pedra-sabão;</li>
                <li>Dorrosão de estruturas metálicas de edificações públicas e residências;</li>
                <li>Danos à saúde humana pelo consumo de água poluída;</li>
                <li>Surgimento ou agravamento de problemas respiratórios e até mesmo danos aos olhos associados à maior presença de óxidos de enxofre na atmosfera e sua inalação.</li>
            </ul>
        </div>

        <div class="imagem-2">
            <img src="https://static.mundoeducacao.uol.com.br/mundoeducacao/2021/07/1-efeito-corrosivo-chuva-acida.jpg" alt="">
        </div>
        <p class="subtitulo-imagem">Efeito corrosivo das chuvas ácidas em monumento no Camboja, na Ásia.</p>
    </aside>

    <?php include_once(__DIR__ . "/../footer/footer.php") ?>
</body>
</html>