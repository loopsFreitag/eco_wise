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
    <title>Informações</title>
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
    padding: 0 5em 3em;
    margin: 2em 7em;
    text-align: justify;
    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
}

main ul {
    padding-top: 1rem;
    font-size: 20px;
    text-align: justify;
    padding-left: 2em;
}

main li {
    padding-top: 0.5em;
    line-height: 1.2;
    font-size: 20px;
    text-align: justify;
}

main ol li{
    padding-top: 1em;
    margin-left: 1.5em;
    
}

strong{
    font-weight: 700 ;
}

main h1 {
    padding-top: 1.5em;
    font-size: 40px;
    font-weight: 900;
}


main p {
    padding-top: 1rem;
    line-height: 1.2;
    font-size: 20px;
    text-align: justify;
}

@media (max-width:1000px){
    
main{
    padding: 0;
}

.informacao,.como-coletar{
    padding:1em;
}
}

@media (max-width:850px){
    .informacao h1,.como-coletar h1 {
        font-size:24px;
    }

    .informacao p,.informacao ul li{
        font-size:16px;
    }

    .como-coletar p,.como-coletar ol li{
        font-size:16px;
    }
}

@media (max-width:750px){
    main{
        margin:2em;
    }
}

@media(max-width:400px){
    main{
        margin:0;
    }
}

</style>
<body>
<?php include_once(__DIR__ . "/../header/header.php") ?>

    <main>
        <div class="informacao">
            <h1>O que é a Coleta de Resíduos?</h1>
            <p>A função de um "iFood de lixo" é criar uma plataforma de serviços que conecta os catadores de lixo diretamente aos clientes que desejam se livrar de resíduos indesejados de maneira conveniente e eficiente. Esse conceito inovador busca abordar duas questões cruciais: a gestão de resíduos e a geração de emprego, além de promover a sustentabilidade.
            </p>
            <p>Aqui está uma explicação mais detalhada dessa função:</p>
            <ul>
                <li><strong>Conexão entre catadores e clientes:</strong> Assim como o iFood conecta restaurantes e consumidores, o "iFood de lixo" conecta pessoas que têm resíduos a serem descartados com catadores de lixo ou empresas de coleta de resíduos. Isso elimina a necessidade de os clientes lidarem diretamente com a logística do descarte de lixo, tornando o processo mais simples e conveniente.</li>
                <li><strong>Facilidade e comodidade:</strong> Os catadores de lixo podem ir diretamente até a casa dos clientes para coletar o lixo, economizando tempo e esforço dos clientes. Isso é especialmente útil para resíduos volumosos ou perigosos, como móveis antigos, eletrônicos, eletrodomésticos quebrados e outros itens que não podem ser descartados no lixo comum.
                </li>
                <li><strong>Sustentabilidade:</strong> O serviço promove a reciclagem e a reutilização, uma vez que os catadores de lixo podem separar e encaminhar os materiais recicláveis para as instalações apropriadas, enquanto outros itens ainda podem ser reutilizados ou reciclados de alguma forma. Isso contribui para a redução do desperdício e do impacto ambiental.</li>
                <li><strong>Geração de empregos:</strong> A plataforma também desempenha um papel importante na criação de empregos para catadores de lixo, muitos dos quais são trabalhadores informais que podem se beneficiar da oportunidade de trabalho regular e do acesso a um grupo maior de clientes.</li>
                <li><strong>Responsabilidade social:</strong> Além de lidar com questões práticas de descarte de resíduos, o "iFood de lixo" pode ajudar a sensibilizar a população sobre a importância da gestão responsável de resíduos, incentivando práticas sustentáveis e responsáveis.</li>
            </ul>     
        </div>
    
        <div class="como-coletar">
            <h1>Como Solicitar a Coleta de Lixo</h1>
            <p>Solicitar a coleta de lixo por meio do nosso serviço é simples e conveniente. Siga os passos abaixo para agendar a retirada dos seus resíduos:</p>
            <ol>
                <li><strong>Acesse a Aba de Coleta:</strong> Ao abrir o aplicativo ou site, você verá uma opção claramente identificada como "Coleta" ou "Agendar Coleta" na página inicial. Clique nessa opção para começar.</li>
                <li><strong>Especifique o Tipo de Lixo:</strong> Na seção de agendamento, você terá a oportunidade de descrever detalhadamente o tipo de resíduo que necessita ser coletado. Por favor, forneça uma descrição do material a ser descartado, por exemplo, "móveis antigos", "eletrônicos", "resíduos orgânicos" ou qualquer outra categoria que melhor represente o seu lixo. Isso nos ajudará a realizar a coleta de forma mais precisa e eficiente.</li>
                <li><strong>Informe a Quantidade Aproximada:</strong> Após escolher o tipo de lixo, indique a quantidade aproximada desse material que você deseja que seja coletada. Essa informação ajuda os catadores a planejar o espaço necessário em seus veículos.</li>
                <li><strong>Forneça o Endereço de Coleta:</strong> Insira o endereço completo, incluindo informações adicionais, se necessário, para garantir que o catador saiba exatamente onde realizar a coleta. Certifique-se de fornecer informações precisas para evitar quaisquer atrasos.</li>
                <li><strong>Selecione o Horário:</strong> Escolha o horário que melhor se ajusta à sua agenda para a coleta. Muitos serviços oferecem janelas de tempo para a coleta, permitindo flexibilidade aos clientes.</li>
                <li><strong>Confirme a Solicitação:</strong> Revise todas as informações fornecidas para garantir que estejam corretas. Uma vez confirmadas, clique no botão "Agendar" ou "Confirmar" para enviar a solicitação.</li>
                <li><strong>Aguarde a Coleta:</strong> No dia e horário agendados, aguarde a chegada do catador ao seu endereço para efetuar a coleta. Certifique-se de que os resíduos estejam prontos e acessíveis.</li>
            </ol>
        </div>
    </main>
    <?php include_once(__DIR__ . "/../footer/footer.php") ?>
</body>
</html>