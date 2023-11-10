<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <title>Desmatamento</title>
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

main{
    height: 70vh;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 70px;
    text-transform: uppercase;
    color: var(--cor-3);
    background-image: url(https://static.portaldaindustria.com.br/media/filer_public/8f/4c/8f4c4cf0-3640-4331-8ed7-56f39efd4a48/desmatamento.jpg);
    background-size: cover;
    
}

/* ========================== Definicao  =======================================*/
.definicao h1 {
    text-align: center;
    padding-top: 4rem;
    font-size: 50px;
    color: var(--cor-3);
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

/* ========================== Conteudo =======================================*/
strong{
    font-weight: 700 ;
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
.imagem{
    display:flex ;
    justify-content: center;
    flex-direction: column;
    align-items: center
}

.imagem p {
    font-size: 18px;
    padding-top: 1em;
    padding-bottom: 3em;
}

.imagem img {
    border-radius: 10px;
    width: 40%;
    box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;
}

.imagem-2{
    display: flex;
    justify-content: center;
    align-items: center;
}

.imagem-2 img{
    margin-bottom: 3em;
    width: 40%;
    border-radius: 10px;
    box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;
}
/* ========================== Listas =======================================*/
.conteudo ul {
    padding-top: 1rem;
    font-size: 20px;
    text-align: justify;
    padding-left: 2em;
}

.conteudo li {
    padding-top: 0.5em;
}


</style>
<body>
    <?php include_once(__DIR__ . "/../header/header.php")?>
    <main> 
        <h1>desmatamento</h1>
    </main>
    <aside>
        <div class="definicao">
            <h1>Devastação Ambiental: O Grito Silencioso do Desmatamento</h1>
            <div class="texto-definicao">
                <p>O desmatamento é a cicatriz profunda que a humanidade inflige na Terra, uma ferida que sangra biodiversidade, acelera as mudanças climáticas e ameaça nosso próprio futuro. À medida que as florestas desaparecem, os ecossistemas essenciais desmoronam, as espécies se extinguem e as comunidades enfrentam deslocamento. É um chamado urgente para reverter nosso curso, proteger as florestas e agir em prol de um futuro sustentável, antes que seja tarde demais.</p>
            </div>
        </div>
            <div class="conteudo">
            
                <h4>Causas do desmatamento</h4>  
                <p><strong>A exploração dos recursos naturais</strong> acontece desde os primórdios da humanidade. Contudo, na medida em que a sociedade desenvolveu-se, essa exploração intensificou-se, colocando em risco o equilíbrio do planeta e<strong>comprometendo o suprimento das gerações futuras.</strong></p>    
                <p>A questão do <strong>desmatamento tomou grandes proporções a partir da Revolução Industrial.</strong> A introdução de novas tecnologias (que proporcionaram o aumento da produção industrial) e o consumo (que aumentou consideravelmente) fizeram com que diversas florestas temperadas e tropicais fossem devastadas, a fim de atender a essa nova demanda.</p>
                <p>Os <strong>países industrializados</strong> apresentaram, durante esse período, <strong>maiores taxas de desmatamento.</strong> Com o passar dos anos, essas taxas começaram a cair nesses países e a aumentar nos países em desenvolvimento e subdesenvolvidos.</p>
                <p>O desmatamento pode ser atribuído a <strong>diversas atividades,</strong> sendo essas, em sua maioria,<strong>antrópicas</strong>. A retirada da cobertura vegetal está relacionada, por exemplo, com a <strong>expansão do agronegócio;</strong> com o <strong>extrativismo animal, vegetal ou mineral; </strong>com a necessidade de <strong>explorar matéria-prima</strong> para atividades de todos os setores da economia; com a <strong>urbanização</strong> referente ao aumento das cidades; e também com atividades ilegais que envolvem queimadas propositais e até mesmo exploração de áreas de conservação para fins pessoais, como <strong>especulação fundiária.</strong></p>
                <p><strong>A expansão do agronegócio</strong> é considerada uma das principais causas do aumento do desmatamento no mundo todo. Segundo a Organização das Nações Unidas para a Alimentação e a Agricultura (FAO), só na<strong> América Latina,</strong> a expansão da agricultura e da pecuária comercial é <strong>responsável por aproximadamente 70% do desmatamento.</strong></p>
                <p>Dados da FAO revelam que a prática agrícola, por meio das produções em escala industrial, e a pecuária, por meio do aumento dos pastos extensivos, fomentam o desmatamento em vários países do mundo.</p>
                <p>Essa questão tem gerado diversas polêmicas, pois o agronegócio é o carro-chefe da economia de diversos países. Portanto, muitos justificam o desmatamento como necessário ao suprimento das necessidades humanas, como a produção de alimentos. Contudo, segundo o relatório O estado das florestas do mundo, de 2016, lançado pela FAO, aponta que <strong>não é necessário desmatar florestas para produzir alimentos</strong>. É necessário, ao invés de expandir as áreas agrícolas retirando as florestas, intensificar a atividade agrícola e as medidas de proteção social.</p>     
                
                <h4>Consequências do desmatamento</h4>
              </div>


              <div class="imagem">
                <img src="https://s2.static.brasilescola.uol.com.br/img/2019/08/aquecimento-global.jpg" alt="">
                <p>Uma das principais consequências do desmatamento é o aquecimento global</p>
              </div>

              <div class="conteudo">
                <p>Assim como as causas do desmatamento são muitas, suas consequências são proporcionais. Apesar de muitos acreditarem que se trata de um <strong>“mal necessário”</strong> para a manutenção do bem-estar social, especialmente com a questão da agropecuária e do extrativismo, que são atividades essenciais ao desenvolvimento de um país, a questão do desmatamento tomou proporções jamais vistas, colocando em <strong>risco todo o equilíbrio biológico do planeta Terra.</strong></p>

                <p>As principais consequências estão relacionadas ao <strong>meio ambiente</strong> e a tudo que lhe diz respeito. Ao desmatar, <strong>compromete-se toda a biodiversidade</strong> da área. Espécies da fauna perdem seu habitat e espécies da flora podem entrar para a <strong>lista de ameaças à extinção</strong> e assim causar um enorme desequilíbrio ambiental, prejudicando até mesmo as atividades primárias, das quais dependem muitas famílias, e também a economia, como a caça, a agricultura e a pecuária.</p>

                <p>A retirada da cobertura vegetal também agrava a questão das <strong>mudanças climáticas</strong>. Além do aumento das emissões de gases poluentes à atmosfera que tem agravado o <strong>efeito estufa</strong> e o <strong>aquecimento global</strong>, o desmatamento também é considerado um dos fatores responsáveis pelas <strong>alterações no clima</strong>. Os anos estão cada vez mais quentes, e o aumento da temperatura da Terra tem causado <strong>inúmeros danos aos ecossistemas</strong> e também à saúde humana.</p>

                <p>Outra questão diretamente ligada ao desmatamento está relacionada às <strong>alterações provocadas no solo, bem como nos recursos hídricos</strong>. Retirar a vegetação de uma determinada área favorece o processo de erosão do solo, pois é a cobertura vegetal que auxilia na infiltração da água da chuva. Portanto, sem ela, a água escorre sobre o solo, provocando deslizamentos e a erosão. A retirada da vegetação próxima a áreas de cursos d'água também provoca deslizamentos de terra, que se deposita nos rios, provocando então o <strong>assoreamento</strong>.</p>

                <p>Todas essas questões convertem para o <strong>bem-estar e a qualidade de vida</strong> de todos os seres vivos no planeta. Todos nós dependemos das florestas, seja para a <strong>produção de oxigênio</strong>, seja para o fornecimento de matéria-prima para a <strong>produção de itens essenciais à vida</strong>. Se acabamos com esse recurso natural, obviamente <strong>somos nós que sofreremos diretamente as consequências</strong>. E isso já tem sido observado.</p>

                <p>Diversos recursos naturais estão acabando, comprometendo as <strong>gerações futuras</strong>. O clima tem sofrido mudanças sentidas em todas as partes do mundo. E exatamente por essas questões, o desmatamento tem sido apontado como um dos maiores desafios da atualidade.</p>


                <h4>Como conter o desmatamento</h4>
                <p>Conter o desmatamento parece óbvio: basta não desmatar. No entanto, essa não é uma questão tão simples. Sabemos que muitos países colocam, à frente dos seus patrimônios ambientais, questões econômicas. É importante ressaltar que, sim, o agronegócio é fundamental para o desenvolvimento de uma economia, bem como para o suprimento alimentar do mundo. Entretanto há de buscar-se <strong>uma maneira sustentável de desenvolvimento</strong>, e esse é atualmente um dos maiores desafios da humanidade.</p>

                <p>Estamos provocando um <strong>colapso ambiental</strong> por meio das atividades humanas, e o desmatamento é uma das questões que, como dito, possuem inúmeras consequências. Como afirmado pela FAO, <strong>não há necessidade de expandir as áreas voltadas à produção agrícola, mas sim a de intensificar a produção, de modo que as leis ambientais sejam asseguradas</strong>.</p>
                
                <p>Segundo o Estado das Florestas do Mundo 2016 (Sofo, sigla em inglês), o <strong>incentivo da administração pública</strong> a iniciativas privadas que aliam o recebimento de créditos quando as normas ambientais são cumpridas é um dos caminhos para o combate ao desmatamento. De acordo também com o Sofo, países melhoraram sua segurança alimentar mantendo sua cobertura vegetal, desde 1990. Isso significa que <strong>não há necessidade de desmatar</strong> para que se produza a quantidade de alimentos necessária.</p>

                <p>Com relação ao Brasil, Paulo Barreto, engenheiro florestal da Imazon, apontou algumas medidas necessárias para conter o desmatamento. Confira alguns exemplos:</p>

                <ul>
                    <li>Políticas de fiscalização e controle devem ser efetivas;</li>
                    <li>Cobrança do imposto rural, a fim de evitar a especulação fundiária;</li>
                    <li>Expansão da moratória da soja para o Cerrado. A moratória da soja é um acordo setorial entre produtores e compradores de soja que se comprometem a não comprar soja produzida em áreas desmatadas;</li>
                    <li>Fechamento do mercado para carne de procedência ilegal, ou seja, provinda de áreas devastadas;</li>
                    <li>Subsidiar crédito apenas para quem cumpre as leis ambientais, ou seja, quem desmatar não tem direito ao crédito para produzir;</li>
                    <li>Reflorestar.</li>
                </ul>
              </div>

              <div class="imagem-2">
                <img src="https://www.iped.com.br/_upload/galleries/2015/01/08/voc-parte-combate-desmatamento-54aec75f970e8.jpg" alt="">
              </div>
    </aside>

    <?php include_once(__DIR__ . "/../footer/footer.php")?>
</body>
</html>