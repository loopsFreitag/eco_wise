<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awe
some/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="/css/style_queimadas.css">
    <title>Queimadas</title>
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



    /* Configurações do artigo*/
    .imagem-titulo {
        background-image: url(https://images.unsplash.com/photo-1621525332263-6643c2ed0fa3?auto=format&fit=crop&q=80&w=2069&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D);
        height: 70vh;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 70px;
        background-position-y: 1100px;
    }

    .titulo-principal {
        background: linear-gradient(90deg, rgba(124, 25, 6, 1) 21%, rgba(117, 8, 23, 1) 31%, rgba(93, 67, 63, 1) 41%, rgba(62, 53, 52, 1) 49%, rgba(60, 59, 58, 1) 68%, rgba(13, 13, 13, 1) 88%, rgba(25, 25, 25, 1) 92%, rgba(0, 0, 0, 1) 100%);
        text-transform: uppercase;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .titulo-principal{
        animation:fade-up 1s;
    }

    .definicao h1 {
        text-align: center;
        padding-top: 4rem;
        font-size: 50px;
        color: var(--cor-1);
        border-bottom: 1px solid silver;
        animation:fade-up 1s;
    }

    .texto-definicao {
        display: flex;
        margin: 0 100px;
        animation:fade-up 1s;
    }

    .texto-definicao p {
        padding: 1rem;
        font-size: 20px;
        text-align: left;
        width: 50%;
        border-bottom: 1px solid silver;
        text-align: justify;

    }

    strong {
        font-weight: 700;
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

    .imagem {
        display: flex;
        justify-content: center;
    }

    .imagem img {
        border-radius: 10px;
        width: 40%;
        object-fit: contain;
        box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;
    }

    @keyframes fade-up {
    0% {
        opacity: 0;
        transform: translateY(100px) scale(0.9);
    }

    100%{
        opacity: 1;
        transform: translateY(0px) scale(1) ;
    }
}

@media (max-width:850px){
    .titulo-principal{
        font-size:70px;
    }

    .definicao h1 {
        font-size:55px;
    }
}

@media(max-width:700px){
    .texto-definicao{
        display:flex;
        flex-direction:column;
    }

    .definicao h1 {
        font-size:40px;
    }

    .texto-definicao p{
        width:100%;
    }

    .imagem img{
        width:80%;
    }

}

@media(max-width:500px){
    .titulo-principal{
        font-size:45px;
    }

    .conteudo p {
        font-size:14px;
    }

    .definicao h1 {
        font-size:30px;
    }


    .texto-definicao p{
        font-size:14px;
    }

    .texto-definicao {
        margin: 0 ;
    }

    .texto-definicao {
        margin: 0 ;
    }
    .conteudo {
        margin: 1em;
       
    }

}



</style>

<body>

<?php include_once(__DIR__ . "/../header/header.php") ?>
    <main>
        <div class="imagem-titulo">
            <h1 class="titulo-principal">Queimadas</h1>
        </div>
    </main>

    <aside>
        <div class="definicao">
            <h1>Um Alerta para o Nosso Planeta</h1>
            <div class="texto-definicao">
                <p>As queimadas são um problema global que afeta não apenas a saúde do nosso planeta, mas também a qualidade de vida de suas criaturas. Elas são caracterizadas pelo fogo descontrolado que se espalha pela vegetação, causando sérios danos ao meio ambiente, à biodiversidade e à saúde humana. Neste texto, abordaremos a explicação das queimadas, os casos mais comuns, a conscientização e métodos de ajuda para combater esse flagelo.</p>

                <p>As queimadas são incêndios florestais que podem ocorrer de forma natural, mas muitas vezes são resultado da ação humana, direta ou indiretamente. A maioria das queimadas são causadas por atividades como agricultura, desmatamento, queimadas ilegais e negligência. Quando a vegetação seca e inflamável entra em contato com o fogo, as chamas se alastram rapidamente, destruindo tudo em seu caminho.</p>
            </div>
        </div>

        <div class="conteudo">
            <h4>Casos Mais Comuns</h4>
            <p><strong>Agricultura e Pastagem: </strong>Queimadas intencionais são frequentemente usadas para limpar terras para a agricultura, tornando áreas aptas para pastagens de gado e cultivo. Isso é particularmente prevalente em regiões agrícolas.</p>
            <p><strong>Desmatamento:</strong> A expansão das áreas urbanas, o desenvolvimento de infraestrutura e a exploração insustentável de recursos naturais frequentemente envolvem a destruição de florestas através de queimadas.</p>
            <p><strong>Queimadas Acidentais:</strong> Às vezes, incêndios controlados saem de controle devido a condições climáticas adversas, falta de planejamento ou negligência.</p>
            <p><strong>Queimadas em Áreas de Preservação:</strong> Até mesmo áreas protegidas, como reservas naturais e parques nacionais, não estão imunes a incêndios provocados por atividades humanas ou descuido.</p>


            <h4>Queimadas no Brasil</h4>
            <p>Alguns fatores têm feito as queimadas no Brasil aumentarem, como o <strong>avanço do desmatamento e a ampliação das áreas de pastagem</strong> e atividades econômicas ligadas à agropecuária.</p>
            <p>Outro fator que acaba influenciando na propagação de incêndios pelo território brasileiro é o <strong>tempo seco e quente,</strong> vivenciado em grande parte do país entre agosto e setembro. Esse tempo mais seco, aliado à ação dos ventos, pode fazer as chamas aumentarem-se e proliferarem-se, e a ausência de chuvas comum nessa época do ano faz com que as queimadas em larga escala ampliem-se.</p>
            <p><strong>Em sua grande maioria, essas queimadas são provocadas pela ação humana </strong>de maneira criminosa. Os incêndios são muitas vezes ligados às atividades econômicas, iniciados por agricultores em áreas de pastagens, para renovação de pastos, e por grupos que causam desmatamento para eliminar vegetação rasteira e retirada de madeira para comercialização.</p>
            <p>Essas práticas acabam por atingir diversas florestas, como é o caso dos biomas Amazônia, Pantanal e Cerrado, onde áreas de proteção ambiental, como o Parque Nacional da Chapada dos Veadeiros (GO) ou Parque Nacional das Emas (MT e GO), a Chapada Diamantina (BA) e o Pantanal (MT e MS) estão sofrendo severos danos ambientais.</p>
            <p>Segundo o Instituto Nacional de Pesquisas Espaciais (Inpe), o Brasil registrou mais de 318 mil km² de área destruída pelo fogo em 2019, isso equivale aos tamanhos dos estados do Rio de Janeiro e São Paulo juntos.</p>
            <p><strong>Segundo o Inpe, todos os seis biomas brasileiros sofreram com essas ações,</strong> mas Amazônia, Pantanal e Cerrado são os que mais têm sofrido com os focos de incêndio. Em 2020, o bioma da Amazônia teve mais de 64 mil focos de incêndio, seguido do Pantanal, com mais de 14 mil focos, e do Cerrado, superando a casa do 10 mil focos de incêndio.</p>

        </div>

        <div class="imagem">
            <img src="https://images.unsplash.com/photo-1473260079709-83c808703435?q=80&w=1920&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
        </div>
        <div class="conteudo">
            <h4>Conscientização:</h4>
            <p>
                A conscientização sobre as queimadas é crucial para mudar o curso desse problema. As queimadas têm consequências graves, incluindo o aumento das emissões de gases de efeito estufa, a destruição de habitats naturais e a ameaça à saúde pública. A conscientização pode ser promovida por meio de:
            </p>

            <p class="conscientizacao-p">
                <strong>Educação Ambiental:</strong> Incorporação de programas de educação ambiental nas escolas e comunidades, para disseminar o conhecimento sobre os riscos associados às queimadas.</br>

                <strong>Mídia e Redes Sociais:</strong> Campanhas de conscientização através de mídias sociais, notícias e documentários que destacem as implicações das queimadas.</br>

                <strong>Advocacia:</strong> Envolver organizações não governamentais e defensores do meio ambiente na promoção de políticas de combate às queimadas e na criação de consciência pública.</br>

                <strong>Políticas Públicas Conscientes:</strong> Implementar regulamentações rígidas para penalizar aqueles que provocam queimadas intencionais e incentivar práticas sustentáveis.
            </p>

            <h4>Métodos de Ajuda para Combater as Queimadas:</h4>
            <p>
                <strong>Prevenção:</strong> Promover práticas agrícolas sustentáveis, que não dependam da queimada, e investir em técnicas de manejo de terras que reduzam o acúmulo de matéria orgânica seca.</br>

                <strong>Monitoramento: </strong>Utilizar tecnologia avançada, como satélites e sistemas de detecção de incêndios, para identificar incêndios em estágios iniciais e responder rapidamente.</br>

                <strong>Combate a Incêndios: </strong>Treinar equipes de combate a incêndios florestais, fornecer equipamentos de alta qualidade e recursos para lidar eficazmente com incêndios.</br>

                <strong>Restauração Ambiental:</strong> Investir em programas de reflorestamento e na restauração de áreas degradadas para ajudar na recuperação dos ecossistemas afetados pelas queimadas.</br>

                <strong>Políticas Públicas Sustentáveis:</strong> Estabelecer regulamentações rigorosas que visem a prevenção de queimadas e promovam o uso sustentável da terra.</br>

                <strong>Pesquisa e Desenvolvimento:</strong> Investir em pesquisas que levem a tecnologias mais avançadas de prevenção, monitoramento e combate a incêndios.
            </p>
        </div>
    </aside>
<?php include_once(__DIR__ . "/../footer/footer.php") ?>

</body>

</html>