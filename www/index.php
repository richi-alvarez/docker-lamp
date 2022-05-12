<html>
    <head>
        <title>Welcome to LAMP Infrastructure</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </head>
    <body>
    <form>
        <script
                src="https://checkout.epayco.co/checkout.js"
                class="epayco-button"
                data-epayco-key="c84ad754c728bfb10af2c1c3d1594106"
                data-epayco-test="false"
                data-epayco-name="Audífonos REDRAGON H510 ZEUS 2"
                data-epayco-description="Audífonos REDRAGON H510 ZEUS 2"
                data-epayco-currency="cop"
                data-epayco-amount="331840"
                data-epayco-tax="0"
                data-epayco-tax-base="331840"
                data-epayco-country="CO"
                data-epayco-external="false"
                data-epayco-response="https://54.166.97.49/"
                data-epayco-confirmation="https://54.166.97.49/"
                data-epayco-email-billing="1ricardo.saldarriaga@payco.co"
                data-epayco-name-billing="ricardo saldarriaga"
                data-epayco-address-billing="asdasdas"
                data-epayco-lang="es"
                data-epayco-mobilephone-billing="+573198754112"
                data-epayco-button="https://54.166.97.49/wp-content/plugins/Plugin_ePayco_WooCommerce/lib/Boton-color-espanol.png"
                data-epayco-autoclick="false">
        </script>
    </form>
            <?php
            echo sprintf('
                        <div class="loader-container">
                            <div class="loading"></div>
                        </div>
                        <p style="text-align: center;" class="epayco-title">
                          por favor de click en el boton de pago
                        </p>                                         
                        <center>
                        <a id="btn_epayco_agregador" href="#">
                            <img src="https://multimedia.epayco.co/epayco-landing/btns/Boton-epayco-color1.png">
                         </a>
                        <form id="appAgregador">
                            <script
                                src="https://checkout.epayco.co/checkout.js"
                                >
                            </script>
                            <script>
                            var handler = ePayco.checkout.configure({
                                key: "%s",
                                test: "%s"
                            })
                            var date = new Date().getTime();
                            var data = {
                                name: "%s",
                                description: "%s",
                                /*invoice: "",*/
                                extra1:"%s",
                                currency: "%s",
                                amount: "%s",
                                tax_base: "%s",
                                tax: "%s",
                                country: "%s",
                                lang: "%s",
                                external: "%s",
                                confirmation: "%s",
                                response: "%s",
                                //Atributos cliente
                                name_billing: "%s",
                                address_billing: "%s",
                                email_billing: "%s",
                                mobilephone_billing: "%s",
                            }
                            var openChekout = function () {
                               handler.open(data)
                            }
                            var bntPagar = document.getElementById("btn_epayco_agregador");
                            bntPagar.addEventListener("click", openChekout);
                            let responseUrl = "https://plugins.epayco.io/";
                            handler.onCloseModal = function () {};
                            handler.onCreated(function(response) {
                            alert("Al Cargar", JSON.stringify(response));
                          }).onResponse(function(response) {
                            alert("Al responder", JSON.stringify(response));
                          }).onClosed(function(response) {
                            alert("Al Cerrar", JSON.stringify(response));
                           // window.location.href = responseUrl
                          });
                           
                            var bntPagar = document.getElementById("btn_epayco_agregador");
                            bntPagar.addEventListener("click", openChekout);
                            //setTimeout(openChekout, 2000)  
                        </script>
                        </form>
                        </center>
                ',trim("c84ad754c728bfb10af2c1c3d1594106"),
                "true",
                "Audífonos REDRAGON H510 ZEUS 2",
                "Audífonos REDRAGON H510 ZEUS 2",
                1,
                "cop",
                "11900",
                "10000",
                "1900",
                "COP",
                "ES",
                "false",
                "https://plugins.epayco.io/",
                "https://plugins.epayco.io/",
                "ricardo",
                "calle 102 c 69",
                "ricardo.saldarriaga123@epayco.com",
                "3184210000"
            );
            //xdebug_info() ;
            $signature = hash('sha256',
                trim('491027').'^'
                .trim('1fff045cec8d5bff2f8740662199dc74f8e6e612').'^'
                .'83927536'.'^'
                .'839275361648776724'.'^'
                .'38205'.'^'
                .'COP'
            );
            var_dump($signature,'63daa99df2ad37e7c80aab12bee26910fa236eb16aa6f4412d29edbe75d7422c');
            function base64url_encode($plainText) {

                $base64 = base64_encode($plainText);
                $base64url = strtr($base64, '+/=', '-_,');
                return $base64url;
            }

            function base64url_decode($plainText) {

                $base64url = strtr($plainText, '-_,', '+/=');
                $base64 = base64_decode($base64url);
                return $base64;
            }
            $data= 'secret_sJxvutu5GXat9ZDCwXYziB8hYxPEBn5V';
            $encriptar = base64url_encode($data);;
            $desemcriptar=base64url_decode($encriptar);

            //xdebug_info();
                echo "<h1>¡Hola, Richi te da la bienvenida!</h1>";

                $conn = mysqli_connect('db', 'root', 'test', "dbname");

                $query = 'SELECT * From Person';
                $result = mysqli_query($conn, $query);

                echo '<table class="table table-striped">';
                echo '<thead><tr><th></th><th>id</th><th>name</th></tr></thead>';
                while($value = $result->fetch_array(MYSQLI_ASSOC)){
                    echo '<tr>';
                    echo '<td><a href="#"><span class="glyphicon glyphicon-search"></span></a></td>';
                    foreach($value as $element){
                        echo '<td>' . $element . '</td>';
                    }

                    echo '</tr>';
                }
                echo '</table>';

                $result->close();
                mysqli_close($conn);
            ?>
        </div>
    </body>
</html>




<?php
// Heading

