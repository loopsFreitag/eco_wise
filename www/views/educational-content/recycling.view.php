<!DO CTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
        <link rel="stylesheet" href="/css/style_reciclagem.css">
        <title>Reciclagem</title>
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


        /* =========================== Main ===========================*/
        .main {
            height: 80vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }



        .imagem-main img {
            width: 75em;
            height: 45em;
            box-shadow: rgba(0, 0, 0, 0.25) 0px 14px 28px, rgba(0, 0, 0, 0.22) 0px 10px 10px;
            border-radius: 10px;
            border: 8px solid white;
            margin-top: 8em;
            animation:lateral 1s;
        }

        /* =========================== conteudo ===========================*/

        aside {
            background-color: #f4f4f4;
        }

        .conteudo1 {
            margin-top: 2em;
            margin: 8em 8em;
            padding: 1em 7em;
            padding-bottom: 2em;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            animation:fade-up 1s;
        }

        .conteudo1 h3 {
            font-size: 30px;
            font-weight: 900;
            padding-top: 2em;
        }

        .conteudo1 p {
            padding-top: 1rem;
            line-height: 1.2;
            font-size: 20px;
            text-align: justify;
        }

        .conteudo1-img {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .conteudo1-img img {
            width: 38%;
            box-shadow: rgba(0, 0, 0, 0.25) 0px 14px 28px, rgba(0, 0, 0, 0.22) 0px 10px 10px;
            animation:fade-up 1s;
        }

        .conteudo1-img table {
            margin-top: 5em;
            width: 70%;
            height: 30em;
            border-collapse: collapse;
            font-size: 1em;
            border-radius: 5px 5px 0 0;
            overflow: hidden;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            animation:fade-up 1s;
        }

        .conteudo1-img table tr th {
            background-color: var(--cor-5);
            color: white;
            text-align: left;
            font-weight: bold;
        }

        .conteudo1-img table th,
        .conteudo1-img table td {
            padding: 12px 15px;
        }

        .conteudo1-img table tr {
            border-bottom: 1px solid silver;
        }

        .conteudo1-img table tr:nth-of-type(even) {
            background-color: white;
        }

        .conteudo1-img table tr:last-of-type {
            border-bottom: 2px solid var(--cor-5);
        }

        .conteudo1-img p {
            padding-top: 1rem;
            line-height: 1.2;
            font-size: 20px;
            text-align: justify;
        }

        .conteudo2 {
            margin-top: 2em;
            padding: 1em 7em;
            padding-bottom: 2em;
            display: flex;
            justify-content: center;
            flex-direction: column;
            background-color: #f4f4f4;
            animation:fade-up 1s;
        }

        .conteudo2 h3 {
            font-size: 30px;
            font-weight: 900;
            padding-top: 2em;
            text-align: left;
        }

        .conteudo2 p {
            padding-top: 1rem;
            line-height: 1.2;
            font-size: 20px;
            text-align: justify;
        }

        .conteudo3 {
            padding: 1em 7em;
            padding-bottom: 10em;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            animation:fade-up 1s;
        }

        .conteudo3 h3 {
            font-size: 30px;
            font-weight: 900;
            padding-top: 2em;
        }

        .conteudo3 p {
            padding-top: 1rem;
            line-height: 1.2;
            font-size: 20px;
            text-align: justify;
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

    @media (max-width:1250px){
        .imagem-main{
            display:flex;
            align-items:center;
            justify-content:center;
        }

        .imagem-main img{
            width:90%;
            height:40em;
        }
        .conteudo1 {
            margin: 4em;
            padding:1em;
        }
    }

    @media (max-width:700px){
        .conteudo2 {
            padding: 1em;
        }

        .conteudo1-img img{
            width:80%;
        }
        
        .conteudo3{
            padding:1em;
        }
    }


    @media (max-width:650px){
        .imagem-main img{
            width:90%;
            height:30em;
        }
    }

    @media (max-width:500px){
        .imagem-main img{
            width:90%;
            height:25em;
        }

        .conteudo1{
            padding:0;
            margin:1em;
        }
    }
   
    </style>

    <body>
        
        <?php include_once(__DIR__ . "/../header/header.php") ?>


        <div class="main">
            <div class="imagem-main">
                <img src="https://images.unsplash.com/photo-1591193686104-fddba4d0e4d8?auto=format&fit=crop&q=80&w=2070&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
            </div>
        </div>

        <aside>
            <div class="conteudo1">
                <h3>O que é reciclagem</h3>
                <p>Entender o que é reciclagem é simples: trata-se de pegar algo que não tem mais utilidade e transformá-lo novamente em matéria-prima para que se forme um item igual ou sem relação com o anterior. Isso é feito de várias maneiras e vemos o resultado desse processo no nosso cotidiano.</p>
                <p>Esse é o caso de alguns bens de consumo, como latas de alumínio, papel de escritório, garrafas PET e recipientes de plástico. Esses materiais são reciclados em grandes quantidades. Aliás, a reciclagem de materiais como papel, metal e plástico era comum no início do século XX, quando muitos produtos eram reutilizados devido às crises econômicas (como a de 1929) e às guerras mundiais.</p>
                <p>Na década de 1940, produtos como o náilon, a borracha, papel e muitos metais eram racionados e reciclados, para ajudar a suportar o esforço da Segunda Guerra Mundial (1939-1944).</p>
                <p>Após esse período de recessão, países como os EUA viveram momentos de grande prosperidade econômica que impulsionaram uma cultura de consumo e desperdício. No caso da Europa – que ficou praticamente destruída após a guerra –, a implantação do Plano Marshall (que estabelecia ajuda de 17 bilhões de dólares dada pelos EUA a países devastados pela guerra) ajudou a reconstrução econômica de nações como Inglaterra, França, Alemanha e Itália.</p>
                <p>Dessa forma, tanto Estados Unidos como os países da Europa viveriam anos de colaboração comercial que trariam novamente êxito econômico, contribuindo muito para uma sequência de décadas de abundância na fabricação de bens de consumo. Sendo assim, foi só nos anos 1970 que a reciclagem voltou a fazer parte das discussões sociais. Nessa época, destaca-se a criação do Dia da Terra, para a criação de uma agenda ambiental.</p>

                <h3>Como reciclar?</h3>

                <p>Existem várias formas de destinar seu lixo para reciclagem. Em princípio, é preciso saber se o produto é reciclável, informação que vai estar contida na embalagem por meio do símbolo internacional da reciclagem (três setas que formam um triângulo). Assim, basta descartá-lo de forma correta nos cestos apropriados.</p>
                <p>Porém, nem todos os bairros, condomínios e casas possuem serviço de coleta seletiva e muitas vezes o descarte pode ser feito por meio de centros ou empresas de reciclagem independentes (veja como localizar postos de reciclagem próximos à sua residência). Em outras ocasiões, a prefeitura municipal se encarrega desse serviço. Além disso, vale ressaltar que o avanço tecnológico pode fazer com que um item que atualmente não é reciclável, torne-se reciclável no futuro.</p>
                <p>Também é importante dizer que cada resíduo possui uma cor específica que estão nas lixeiras de reciclagem. Isso serve para facilitar o processo de separação do lixo. Confira mais sobre as cores da reciclagem:</p>
        </aside>

        <div class="conteudo1-img">
            <img src="https://static.mundoeducacao.uol.com.br/mundoeducacao/2022/11/cores-reciclagem.jpg" alt="">
            <table>
                <tr>
                    <th>Cor</th>
                    <th>Tipo de Resíduo</th>
                </tr>
                <tr class="texto">
                    <td>AMARELO</td>
                    <td>Metais</td>
                </tr>
                <tr>
                    <td>AZUL</td>
                    <td>Papéis e papelões</td>
                </tr>
                <tr>
                    <td>VERMELHO</td>
                    <td>Plásticos</td>
                </tr>
                <tr>
                    <td>VERDE</td>
                    <td>Vidros</td>
                </tr>
                <tr>
                    <td>PRETO</td>
                    <td>Madeiras</td>
                </tr>
                <tr>
                    <td>LARANJA</td>
                    <td>Pilhas e baterias</td>
                </tr>
                <tr>
                    <td>MARROM</td>
                    <td>Lixo orgânico</td>
                </tr>
                <tr>
                    <td>ROXO</td>
                    <td>Lixo radioativo</td>
                </tr>
                <tr>
                    <td>BRANCO</td>
                    <td>Lixo hospitalar</td>
                </tr>
                <tr>
                    <td>CINZA</td>
                    <td>Resíduos sólidos que não são recicláveis</td>
                </tr>

            </table>
            <p class="final-conteudo-1">Para os que já são recicláveis, é preciso ter alguns cuidados especiais antes de enviá-los para coleta seletiva. Veja alguns exemplos:</p>
        </div>


        <div class="conteudo2">
            <h3>Plástico</h3>
            <p>Consiste em transformar os plásticos (tanto os oriundos de sobra industrial – sobras virgens do processo produtivo – quanto os descartados pós-consumo – materiais recuperados no lixo por meio da coleta seletiva) em pequenos grânulos, que podem ser utilizados na produção de novos materiais, como sacos de lixo, pisos, mangueiras, embalagens não-alimentícias, peças de automóveis etc.</p>
            <h3>Papel</h3>
            <p>A grande quantidade de papel que é consumida no mundo causa graves problemas ambientais, como o desmatamento de florestas. Para conter esse problema, uma das soluções é a reciclagem, que reaproveita o papel usado para produzir outro novo em folha; a reciclagem é simples e barata.</p>
            <h3>Caixas de leite</h3>
            <p>A maioria das embalagens longa vida é feita a partir de uma mistura de materiais com propriedades diversas. Mesmo assim, é possível reciclá-las. É importante descartar os materiais recicláveis limpos, para não ocorrer a proliferação de doenças, odores, bem como para evitar a contaminação de itens recicláveis que estejam no mesmo local, pois caso ocorra a contaminação, a reciclagem dos materiais contaminados fica mais difícil.</p>
            <h3>Caixas de pizza</h3>
            <p>Óleo e gordura da pizza dificultam processo de reciclagem do papelão das caixas. Mas há alternativas, como criar outras embalagens ou separar as partes da caixa que não foram manchadas pela gordura, como a superfície, e enviar para coleta seletiva.</p>
            <h3>Pneus</h3>
            <p>Não são tóxicos, mas causam problemas. Apesar de não serem compostos de materiais tão nocivos a ponto de prejudicarem o meio ambiente, os pneus descartados de forma errada contribuem para a proliferação de doenças, como a dengue. Além disso, somente no Brasil, 45 milhões de pneus são produzidos por ano e muitos pneus acabam jogados em rios, o que aumenta a calha dos mesmos, podendo causar transbordamentos. Uma boa alternativa é recauchutar em uma oficina ou doar para empresas que o reutilizam de outras formas.
            </p>
            <h3>Vidro</h3>
            <p>Para descartar vidro de forma apropriada, é fundamental separá-lo dos outros resíduos e colocá-lo em um recipiente destinado à reciclagem de vidro. Certifique-se de que os recipientes de vidro estejam limpos e sem impurezas, como tampas de metal ou plástico. Muitas comunidades têm sistemas de coleta seletiva que recolhem vidro para posterior reciclagem. Se não houver um serviço de coleta de vidro na sua área, procure locais de descarte de recicláveis ou pontos de coleta específicos para vidro, onde você pode fazer a entrega de maneira adequada. O descarte correto do vidro contribui para a preservação do meio ambiente e a redução da poluição, promovendo a reciclagem desse material valioso.</p>
            <h3>Lâmpadas fluorescentes</h3>
            <p>Mercúrio e chumbo são metais que estão dentro da lâmpada e podem prejudicar nossa saúde e qualidade de vida, portanto é importante tomar cuidado ao descartá-las. Outra medida é assegurar que as lâmpadas não sejam enviadas para aterros comuns. Por isso, consultar os postos de reciclagem adequados é essencial.</p>
            <h3>Lixo eletrônico</h3>
            <p>Conserte, doe, reutilize ou recicle, mas não jogue seus eletrônicos no lixo comum, pois eles possuem vários componentes e substâncias que podem causar doenças, como cádmio, chumbo e mercúrio. Sendo assim, o melhor que você pode fazer é procurar postos de reciclagem para eletrônicos (acesse a sessão específica para busca de postos do eCycle) ou tentar devolver os produtos para os fabricantes, que ficarão responsáveis a dar uma destinação correta a partir da lei de resíduos sólidos.</p>
            <h3>Amianto</h3>
            <p>A recomendação é de que o amianto seja descartado juntamente com resíduos tóxicos, em aterros especializados. O amianto é um material perigoso e que não tem como ser reutilizado ou reciclado.</p>
        </div>

        <div class="conteudo3">
            <h3>Qual a importância da reciclagem e da coleta seletiva?</h3>
            <p>Hoje em dia, com o aumento crescente na produção de resíduos, no lixo oceânico, e nos impactos dos aterros sanitários, a reciclagem é de extrema importância. Muitos países já têm essa preocupação, apoiam programas ambientais e, consequentemente, de reciclagem.</p>
            <p>No Brasil, de acordo com a associação sem fins lucrativos Cempre (Compromisso Empresarial para Reciclagem), o faturamento das cooperativas de catadores tem sido crescente nos últimos anos e houve ganhos de produtividade, mas ainda há muito por fazer.</p>
            <p>Um dos próximos passos para manter esse progresso é a formalização da atividade desempenhada pelos catadores. Além disso, muitos municípios brasileiros ainda não contam com um serviço de coleta seletiva.</p>
            <p>Apesar de conhecermos a importância da reciclagem, ainda são poucos os resíduos coletados e reciclados no Brasil. Há uma defasagem de infraestrutura para coleta e processamento e faltam políticas públicas que incentivem a logística reversa e a redução de embalagens desnecessárias por parte de empresas, por exemplo.</p>
            <p>Mesmo que você saiba que um item pode ser reciclável (por conta das informações da embalagem), isso não significa que ele será efetivamente reciclado. Portanto, é muito importante reduzir sua quantidade de resíduos. A compostagem doméstica é essencial para isso, em termos de resíduos orgânicos.</p>
            <p>Quanto aos recicláveis, a mudança de hábitos é fundamental. Sempre que puder, evite embalagens ou use produtos com a embalagem reutilizada. Se não for possível, procure pelo menos por embalagens recicladas e/ou recicláveis.</p>
        </div>
        </aside>

        <?php include_once(__DIR__ . "/../footer/footer.php") ?>

    </body>



    </html>