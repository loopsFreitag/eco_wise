<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="/css/style_poluicao.css">
    <title>Poluição</title>
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



    /* ========================== MAIN   =======================================*/

    main {
        height: 70vh;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 70px;
        text-transform: uppercase;
        color: rgb(81, 89, 172);
        background-image: url(https://images.unsplash.com/photo-1621451651659-ac1c3100a9b7?q=80&w=1935&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D);
        background-size: cover;
        background-position-y: 1500px;
    }

    main h1{
        animation:fade-up 1s;
    }

    /* ========================== Definicao  =======================================*/
    .definicao h1 {
        text-align: center;
        padding-top: 4rem;
        font-size: 50px;
        color: #000000;
        border-bottom: 1px solid silver;
        animation:fade-up 1s;
    }

    .texto-definicao {
        display: flex;
        justify-content: center;
        margin: 0 15em;
        animation:fade-up 1s;
    }

    .texto-definicao p {
        padding: 1rem;
        font-size: 20px;
        text-align: left;
        width: 100%;
        border-bottom: 1px solid silver;
        text-align: justify;
    }

    /* ========================== Listas =======================================*/
    .conteudo{
        animation:fade-up 1s;
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

    /* ========================== Conteudo =======================================*/
    strong {
        font-weight: 700;
    }

    .conteudo {
        margin: 0 7.2em;
        padding-bottom: 5em;
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

    /* ========================== Imagem =======================================*/
    .imagem {
        display: flex;
        justify-content: center;
        flex-direction: column;
        align-items: center;
        padding-bottom: 3em;
    }

    .imagem img {
        border-radius: 10px;
        width: 40%;
        box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;
    }

    .imagem-2 {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;

    }

    .imagem-2 img {
        width: 40%;
        border-radius: 10px;
        box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;
    }

    .imagem-2 p {
        font-size: 18px;
        padding-top: 1em;
    }

    /* ========================== Video =======================================*/

    .video {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
    }

    .video h4 {
        padding-top: 3rem;
        font-size: 40px;
        font-weight: 900;
        padding-bottom: 2rem;
    }

    .video iframe {
        width: 70%;
        border-radius: 10px;
        height: 45em;
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
    
</style>

<body>
    <?php include_once(__DIR__ . "/../header/header.php") ?>
    <main>
        <h1>Poluição</h1>
    </main>

    <aside>
        <div class="definicao">
            <h1>Poluição: Um Chamado Urgente à Ação</h1>
            <div class="texto-definicao">
                <p>A poluição é um desafio global que tem afetado o nosso planeta de maneira crescente nas últimas décadas. Com a expansão industrial, o aumento no consumo de combustíveis fósseis e a rápida urbanização, temos testemunhado uma escalada nos níveis de poluição do ar, da água e do solo. Essa problemática ambiental não apenas prejudica a qualidade de vida das populações, mas também representa uma ameaça significativa para a biodiversidade e o equilíbrio dos ecossistemas. A necessidade de abordar a poluição de forma eficaz e urgente tornou-se imperativa, visando garantir um futuro sustentável para as gerações presentes e futuras.</p>
            </div>
        </div>

        <div class="conteudo">
            <h4>O que é poluição?</h4>
            <p>A poluição se refere a uma modificação ambiental que afeta de maneira desfavorável os seres humanos e também outras formas de vida encontradas naquele local. A poluição é, geralmente, provocada pelo humano e suas atividades. O ser humano provoca poluição ambiental quando suas indústrias, por exemplo, lançam poluentes no ar, quando combustíveis fósseis são queimados, quando realizam queimadas, quando utilizam agrotóxicos na agricultura, entre várias outras situações.</p>
            <p>Vale salientar, no entanto, que a poluição nem sempre é desencadeada pela humanidade. Os vulcões, por exemplo, são uma fonte natural de poluição, e, ao entrarem em erupção, são responsáveis pela liberação de uma grande quantidade de gases.</p>

            <h4>Tipos de poluição</h4>
            <p>Existem diferentes tipos de poluição, sendo alguns:</p>
            <ul>
                <li>Poluição atmosférica: consiste no lançamento de substâncias que afetam a composição do ar. A queima de combustíveis fósseis, por exemplo, pode levar ao lançamento de várias substâncias no ar. Materiais particulados, gás carbônico e dióxido de enxofre são alguns dos poluentes do ar conhecidos.</li>
                <li>A poluição do ar pode desencadear problemas graves ao nosso organismo, aumentando a incidência de problemas como asma, câncer de pulmão e doença pulmonar obstrutiva crônica. De acordo com a OMS, a poluição do ar mata cerca de sete milhões de pessoas em todo o mundo a cada ano</li>
                <li>Poluição hídrica: é provocada por substâncias que entram em contato com o ambiente aquático, causando modificações. Lançamento de esgoto sem devido tratamento, derramamento de petróleo e liberação de mercúrio na água são algumas das situações que provocam poluição hídrica.</li>
                <p>A poluição da água pode causar a morte dos organismos que ali vivem, causar doenças em seres humanos que se alimentam desses seres vivos, e provocar até mesmo impactos econômicos, prejudicando a pesca e o turismo, por exemplo.</p>
                <li>Poluição do solo: afeta a camada superficial da crosta terrestre. Agrotóxicos utilizados na agriculta são um exemplo de substâncias que podem provocar esse tipo de poluição. O descarte inadequado do lixo, como o lixo depositado em lixões, também pode provocar a poluição do solo.</li>
            </ul>
        </div>
        <div class="imagem">
            <img src="https://s4.static.brasilescola.uol.com.br/be/2021/06/poluicao-solo.jpg" alt="">
        </div>

        <div class="conteudo">
            <ul>
                <li>Poluição sonora: caracteriza-se pelo excesso de ruídos. Esses ruídos podem ser causados pelo trânsito, máquinas, shows musicais e festas, por exemplo. Esse excesso pode desencadear estresse, dificuldade de concentração, dores de cabeça, dificuldades para dormir e problemas auditivos.</li>
                <li>Poluição visual: caracteriza-se pelo excesso de comunicação visual em um local. O excesso de placas, de outdoors, banners e propagandas pode provocar poluição visual. Esse tipo de poluição afeta o aspecto visual das cidades, ofuscando, por exemplo, as belezas históricas do local.</li>
                <p>Além disso, pode promover impactos negativos aos seres humanos. Além do desconforto visual causado pelo excesso de informações, a grande quantidade de placas e outdoors, por exemplo, pode ser responsável por acidentes de trânsito devido ao fato de distraírem condutores.</p>
            </ul>
        </div>

        <div class="video">
            <h4>Videoaula sobre poluição do solo</h4>
            <iframe width="884" height="497" src="https://www.youtube.com/embed/vmxU7dQpRds" title="Poluição do Solo - Brasil Escola" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>

        <div class="conteudo">
            <h4>Consequências da poluição</h4>
            <p>A poluição é responsável por provocar diversos danos aos ecossistemas, provocando alterações que afetam diretamente todos os seres vivos que ali se desenvolvem. Dentre algumas das consequências da poluição, podemos citar:</p>
            <ul>
                <li>Redução da biodiversidade;</li>
                <li>Aquecimento global e mudanças climática;</li>
                <li>Eutrofização dos corpos d’água;</li>
                <li>Desenvolvimento de uma série de doenças nos seres humanos e outros animais;</li>
                <li>Chuvas ácidas;</li>
                <li>Impacto negativo na economia de uma região.</li>
            </ul>
        </div>

        <div class="imagem-2">
            <img src="https://s4.static.brasilescola.uol.com.br/be/2021/06/poluicao-agua.jpg" alt="">
            <p>A poluição não causa impacto negativo apenas aos seres humanos, sendo responsável por afetar todos os seres vivos de uma região.</p>
        </div>

        <div class="conteudo">
            <h4>Como reduzir a poluição ambiental?</h4>
            <p>É muito importante a conscientização a respeito dos problemas causados pela poluição. Quando enxergamos como a poluição nos afeta, fica mais fácil compreendermos a necessidade de medidas urgentes para frear esse problema. Atitudes simples do dia a dia podem ser responsáveis por frear a poluição, a qual é responsável pela morte de seres humanos e outros animais todos os anos.</p>
            <p><strong>Dentre as medidas que podemos tomar para reduzir a poluição, destacam-se:</strong></p>
            <ul>
                <li>Reduzir o uso de automóveis;</li>
                <li>Reciclar, reaproveitar e reutilizar sempre que possível;</li>
                <li>Repensar nosso hábitos de consumo;</li>
                <li>Separar o lixo e não descartá-lo em locais impróprios;</li>
                <li>Não realizar queimadas;</li>
                <li>Ensinar outras pessoas a respeito de se combater a poluição do meio ambiente.</li>
            </ul>
        </div>
    </aside>
    <?php include_once(__DIR__ . "/../footer/footer.php") ?>
</body>

</html>