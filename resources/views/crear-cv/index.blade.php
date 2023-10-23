<!DOCTYPE html>
<html>

<head>

    <title>Currículum Vitae</title>
    <style>
        @font-face {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 300;
            src: local('Open Sans Light'), local('OpenSans-Light'), url(https://fonts.gstatic.com/s/opensans/v18/mem5YaGs126MiZpBA-UN7rgOXOhv.woff2) format('woff2');
            /* Agrega más formatos de fuente si es necesario, como woff, ttf, etc. */
        }
        .text-center{text-align: center}

        * {
            font-family: 'Open Sans';
        }

        hr.solid {
            color: rgba(248, 248, 248, 0);
            border-top: 1px solid #000000;
        }


        .justify-between {
            display: flex;
            justify-content: space-between;
        }

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .cv-container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        .cv-header {
            text-align: center;
        }

        .cv-name {
            font-size: 24px;
            font-weight: bold;
        }

        .cv-contact {
            font-size: 18px;
        }

        .cv-section {
            margin-top: 20px;


        }

        .column-wrapper {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .column-wrapper ul {
            flex: 1;
            width: calc(33.33% - 10px);
            margin-right: 10px;
        }


        .cv-section-title {
            font-size: 16px;
            font-weight: bold;
            text-align: center;
        }

        .cv-item-title {
            font-weight: bold;
            font-size: 15px;
        }

        .size-content {
            font-size: 12px;

        }

        .cv-item {
            margin-bottom: 10px;
        }
        .cv-item-details{
            margin-bottom: 5px;
        }

        .espacio {
            margin-left: 50px;
            padding-left: 100px;
        }

        .space-table-tr {
            border-spacing
        }
    </style>
</head>

<body>
    <div class="cv-container">
        <div class="cv-header divide-y divide-gray-200">
            <div class="cv-name">{{ $usuario->name }}</div>
            <div class="cv-contact">Tepic,Nay | 3318781434 | {{ $usuario->email }}</div>
        </div>
        {{-- links --}}
        <div class="cv-section">
            <div class="cv-section-title column-wrapper column-wrapper ul">Links</div>
            <hr class="solid">
            <div class="cv-item">

                <div class="size-content text-center">
                    <p> <a href="#">in</a>, <a href="#">Github</a>,  <a href="#">ig</a></p>

                </div>
            </div>

        </div>
        {{-- Perfil Profesional --}}
        <div class="cv-section">
            <div class="cv-section-title column-wrapper column-wrapper ul">Perfil Profesional</div>
            <hr class="solid">
            <div class="cv-item">

                <div class="size-content">
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloribus dolore sit, libero impedit cupiditate, ducimus obcaecati dolorum, deserunt iure quidem enim quae minus sunt nobis adipisci. Veniam expedita mollitia esse.</p>

                </div>
            </div>

        </div>


        {{-- Formacion --}}
        <div class="cv-section">
            <div class="cv-section-title column-wrapper column-wrapper ul">Formación</div>
            <hr class="solid">
            <div class="cv-item">

                <div class="size-content">
                    <table style="width: 994px;" class="cv-item-details">
                        <tbody>
                            <tr>
                                <td style="width: 233px; ">Enero 2020 - Mayo 2024</td>
                                <td style="width: 336px;" class="cv-item-title">Licenciatura en Sistemas
                                    computacionales, Universidad Autonoma De Nayarit</td>
                                <td style="width: 424px;">Tepic</td>
                            </tr>
                        </tbody>
                    </table>
                    <table style="width: 994px;"class="cv-item-details">
                        <tbody>
                            <tr>
                                <td style="width: 233px; ">Agosto 2015 - Agosto 2018</td>
                                <td style="width: 336px;" class="cv-item-title">P.T.B en informática, Conalep 169</td>
                                <td style="width: 424px;">Tepic</td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>

        </div>
        {{-- Competencias --}}
        <div class="cv-section">
            <div class="cv-section-title ">Competencias</div>
            <hr class="solid">
            <table style="width: 900px;">
                <tbody>
                    <tr>
                        <td style="width: 100px;"></td>
                        <td style="width: 300px;">JS</td>
                        <td style="width: 386px;">Cualificado/a</td>
                    </tr>
                </tbody>
            </table>
            <table style="width: 900px;">
                <tbody>
                    <tr>
                        <td style="width: 100px;"></td>
                        <td style="width: 300px;">PHP</td>
                        <td style="width: 386px;">Cualificado/a</td>
                    </tr>
                </tbody>
            </table>
            <table style="width: 900px;">
                <tbody>
                    <tr>
                        <td style="width: 100px;"></td>
                        <td style="width: 300px;">CSS</td>
                        <td style="width: 386px;">Cualificado/a</td>
                    </tr>
                </tbody>
            </table>
            <!-- DivTable.com -->
            <p>&nbsp;</p>

        </div>
            {{-- Experiencia Laboral --}}
        <div class="cv-section">
            <div class="cv-section-title">Experiencia Laboral</div>
            <hr class="solid">
            <div class="cv-item">
                <div class="size-content">
                    <table style="width: 994px;" class="cv-item-details">
                        <tbody>
                            <tr>
                                <td style="width: 233px; ">Enero 2023 - Junio 2023</td>
                                <td style="width: 336px;" class="cv-item-title">Developer PHP LARAVEL MVC BOLSA, en Universidad Autonoma De Nayarit,  </td>
                                <td style="width: 424px;">Tepic</td>
                            </tr>
                        </tbody>
                    </table>
                    <table style="width: 994px;"class="cv-item-details">
                        <tbody>
                            <tr>
                                <td style="width: 233px; ">Junio 2023 - Diciembre 2023</td>
                                <td style="width: 336px;" class="cv-item-title">Developer PHP LARAVEL Proyecto MCV Meteorologia Universidad Autonoma De Nayarit </td>
                                <td style="width: 424px;">Tepic</td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
            <!-- Agrega más experiencias laborales si es necesario -->
        </div>


    </div>
</body>

</html>
