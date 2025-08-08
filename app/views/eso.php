<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>

    </title>
    <style>
        @charset "utf-8";

        /*@media screen and (max-width: 1020px) {*/
        #container,
        #header,
        #content,
        #footer {
            float: none;
            width: auto;
        }

        p {
            font-size: 2em;
        }

        #header {
            background-color: #7daf18;
            padding: 5%;
            border-bottom: 1em solid #2d2d2d;
        }

        #title {
            padding: 5%;
        }

        .title-orange {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 3em;
            color: #de9900;
            display: block;
            font-weight: bold;
        }

        .title-green {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 4em;
            color: #4b8101;
            display: block;
        }

        #content {
            padding: 0 5% 5% 5%;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 3em;
        }

        .data_table {
            /*	border-collapse:collapse;
	border-spacing:3%;	*/
        }

        .data_table td {
            padding: 0.8em;
            border-bottom: 1px solid #cfcfcf;
        }

        .data_table td.left-col {
            background-color: #f1f1f1;
            color: #000;
            width: 38%;
        }

        .data_table td.right-col {
            background-color: #fff;
            color: #676767;
            width: 58%;
        }

        #footer {
            padding: 5%;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 2.5em;
            background-color: #cfcfcf;
            color: #3a3a3a;
        }

        /*}*/
    </style>

</head>

<body cz-shortcut-listen="true">
    <form method="post" action="#" id="form1">
        <div class="aspNetHidden">
            <input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE"
                value="/wEPDwUJMzM0MzE5Nzk3D2QWAgIDD2QWAgIBD2QWAmYPZBYcAgMPDxYCHgRUZXh0BQc0emZkcTZ5ZGQCBw8PFgIfAAUIUFAwNDA5NjJkZAILDw8WAh8ABQRKRUVQZGQCDw8PFgIfAAUFSE9OREFkZAITDw8WAh8ABQNDUlZkZAIXDw8WAh8ABQZCTEFOQ09kZAIbDw8WAh8ABQQyMDIzZGQCHw8PFgIfAAURNUo2UlM0SDQyUEwwMDg5MjdkZAIhD2QWAgIBD2QWAgIBDw8WAh8ABQowMi8wNS8yMDI1ZGQCJQ8PFgIfAAUKMzEvMDcvMjAyNWRkAicPZBYCAgEPZBYCAgEPDxYCHwAFEkFNRiBDQVIgSU1QT1JUIFNSTGRkAikPZBYCAgEPZBYCAgEPDxYCHwAFCTEzMjk3NTkwMWRkAisPZBYCAgEPZBYCAgEPDxYCHwAFE1lPTkFUQU4gTUFURU8gUkVZRVNkZAItD2QWAgIBD2QWAgIBDw8WAh8ABQswMDExMjk4NDAzNGRkGAEFFG12Q29uc3VsdGFEYXRhTWF0cml4Dw9kZmRa1dYyHVKLErjSBD5ydZuV4XWQ+1w9gmixMduTypeHSw==">
        </div>

        <div class="aspNetHidden">

        </div>
        <div>


            <div id="mainContainer">
                <div id="header">
                    <img src="image.png" height="49" alt="Placa Provisional">
                </div>
                <div id="title">
                    <span class="title-orange">Sistema Datamatrix</span> <span class="title-green">Validación
                        de Documentos</span>
                </div>
                <div id="content">
                    <table width="100%" border="0" cellpadding="5" cellspacing="0" class="data_table">
                        <tbody>
                            <tr>
                                <td class="left-col">
                                    <span id="lblECodigo">Código</span>
                                </td>
                                <td class="right-col">
                                    <span id="lblCodigo">7zjdq3y</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="left-col">
                                    <span id="lblEPlaca">Placa</span>
                                </td>
                                <td class="right-col">
                                    <span id="lblPlaca">PP049752</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="left-col">
                                    <span id="lblETipoVehiculo">Tipo de Vehículo</span>
                                </td>
                                <td class="right-col">
                                    <span id="lblTipoVehiculo">JEEP</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="left-col">
                                    <span id="lblEMarca">Marca</span>
                                </td>
                                <td class="right-col">
                                    <span id="lblMarca">HONDA</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="left-col">
                                    <span id="lblEModelo">Modelo</span>
                                </td>
                                <td class="right-col">
                                    <span id="lblModelo">CRV</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="left-col">
                                    <span id="lblEColor">Color</span>
                                </td>
                                <td class="right-col">
                                    <span id="lblColor">BLANCO</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="left-col">
                                    <span id="lblEYear">Año</span>
                                </td>
                                <td class="right-col">
                                    <span id="lblYear">2022</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="left-col">
                                    <span id="lblEChasis">Chasis</span>
                                </td>
                                <td class="right-col">
                                    <span id="lblChasis">5J6RW2H84NA000834</span>
                                </td>
                            </tr>
                            <tr id="trfechaemision">
                                <td class="left-col">
                                    <span id="LblEfechaemision">Fecha Emisión</span>
                                </td>
                                <td class="right-col">
                                    <span id="Lblfechaemision">06/08/2025</span>
                                </td>
                            </tr>

                            <tr>
                                <td class="left-col">
                                    <span id="LblEFechaexpiracion">Fecha Expiración</span>
                                </td>
                                <td class="right-col">
                                    <span id="LblFechaexpiracion">07/11/2025</span>
                                </td>
                            </tr>
                            <tr id="trNombreImportador">
                                <td class="left-col">
                                    <span id="LblENombreImportador">Razón Social / Nombre Importador</span>
                                </td>
                                <td class="right-col">
                                    <span id="LblNombreImportador">AMF CAR IMPORT SRL</span>
                                </td>
                            </tr>

                            <tr id="trRnCedulaImportador">
                                <td class="left-col">
                                    <span id="LblERnCedulaImportador">Rnc/Cédula Importador</span>
                                </td>
                                <td class="right-col">
                                    <span id="LblRnCedulaImportador">132975901</span>
                                </td>
                            </tr>

                            <tr id="trNombreComprador">
                                <td class="left-col">
                                    <span id="LblENombreComprador">Razón Social / Nombre Comprador</span>
                                </td>
                                <td class="right-col">
                                    <span id="LblNombreComprador">ANDRICKSON MICHELI RODRIGUEZ PEREZ</span>
                                </td>
                            </tr>

                            <tr id="trRnCedulaComprador">
                                <td class="left-col">
                                    <span id="LblERnCedulaComprador">Rnc/Cédula Comprador</span>
                                </td>
                                <td class="right-col">
                                    <span id="LblRnCedulaComprador">40223129731</span>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
                <div id="footer">
                    Direccion General de Impuestos Internos.
                </div>
            </div>

        </div>
    </form>


</body>

</html>