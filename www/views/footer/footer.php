<style>
    footer {
        background-color: #3a5a40;
        position: relative;
        width: 100%;
        min-height: 80px;
        padding: 3rem 1rem;
    }

    .container {
        max-width: 100%;
        margin: 0 auto;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }

    .linha {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .coluna {
        min-width: 300px;
        color: white;
        font-family: poppins;
        padding: 0 2rem;
    }

    .coluna .logo {
        width: 100px;
        margin-bottom: 25px;
    }

    .coluna h3 {
        color: #0ac567;
        margin-bottom: 20px;
        position: relative;
        cursor: pointer;
    }

    .coluna h3::after {
        content: '';
        height: 3px;
        width: 0px;
        background-color: white;
        position: absolute;
        bottom: 0;
        left: 0;
        transition: 0.4s ease;

    }

    .coluna h3:hover::after {
        width: 30px
    }

    .coluna .social a i {
        color: white;
        margin-top: 2rem;
        margin-right: 5px;
        transition: 0.3s ease;
    }

    .coluna2 {
        padding-top: 40px;
    }

    .coluna .social a i:hover {
        transform: scale(1.5);
    }

    .coluna .links a {
        display: block;
        text-decoration: none;
        color: white;
        margin-bottom: 5px;
        position: relative;
        transition: 0.3s ease;
    }

    .coluna .links a::before {
        content: '';
        height: 16px;
        width: 3px;
        position: absolute;
        top: 5px;
        left: -10px;
        background-color: #0ac567;
        transition: 0.5s ease;
        opacity: 0;
    }

    .coluna .links a:hover::before {
        opacity: 1;
    }

    .coluna .links a:hover {
        transform: translateX(-8px);
        color: #0ac567;
    }

    /* ========================== Media footer =======================================*/
    @media(max-width:900px) {
        .linha {
            flex-direction: column;
        }

        .coluna {
            width: 100%;
            text-align: left;
            margin-bottom: 25px;
        }
    }

    @media screen and (max-width:768px) {
        .linha {
            flex-direction: column;
        }

        .coluna {
            width: 100%;
            text-align: left;
            margin-bottom: 20px;
        }
    }
</style>

<footer>
    <div class="container">
        <div class="linha">
            <div class="coluna" id="company">

                <p>
                    Na Ecowise, nossa dedicação se concentra em moldar um amanhã mais sustentável e consciente. Buscamos incutir a ecoconsciência em todas as nossas iniciativas. Convidamos você a se unir a nós nessa trajetória em direção a um mundo mais ecológico e saudável.
                </p>
                <div class="social">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </div>
            </div>


            <div class="coluna" id="services">
                <h3>Serviços</h3>
                <div class="links">
                    <a href="/recycling">Reciclagem</a>
                    <a href="/wastecollection">Coleta</a>
                </div>
            </div>


        </div>
    </div>
</footer>

