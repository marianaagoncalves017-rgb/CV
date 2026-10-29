<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV - Mariana Gonçalves</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #fcf4f6;
            color: #4a3b40;
            display: flex;
            justify-content: center;
            padding: 30px 15px;
        }

        .cv-container {
            width: 100%;
            max-width: 850px;
            background: #ffffff;
            display: grid;
            grid-template-columns: 280px 1fr;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(216, 112, 147, 0.15);
            position: relative;
        }

        /* Detalhes de flores de Sakura (cantos decorativos) */
        .cv-container::before {
            content: "🌸";
            position: absolute;
            top: 15px;
            right: 20px;
            font-size: 24px;
            opacity: 0.6;
        }

        .cv-container::after {
            content: "🌸";
            position: absolute;
            bottom: 15px;
            left: 15px;
            font-size: 20px;
            opacity: 0.4;
        }

        /* Coluna Esquerda (Sidebar) */
        .sidebar {
            background: linear-gradient(180deg, #fce4ec 0%, #f8bbd0 100%);
            padding: 30px 20px;
            display: flex;
            flex-direction: column;
            gap: 25px;
            border-top-right-radius: 30px;
            border-bottom-right-radius: 30px;
            margin: 10px 0 10px 10px;
        }

        .sidebar h2 {
            font-size: 15px;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            color: #880e4f;
            margin-bottom: 12px;
            text-align: center;
            border-bottom: 2px dashed #f48fb1;
            padding-bottom: 5px;
        }

        .section-box {
            background: rgba(255, 255, 255, 0.4);
            padding: 15px;
            border-radius: 12px;
        }

        .contact-item {
            font-size: 13px;
            margin-bottom: 10px;
            word-break: break-word;
            display: flex;
            align-items: center;
            gap: 8px;
            color: #5c2c3b;
        }

        .sidebar ul {
            list-style: none;
        }

        .sidebar ul li {
            font-size: 13px;
            margin-bottom: 8px;
            color: #5c2c3b;
            line-height: 1.4;
        }

        /* Coluna Direita (Conteúdo Principal) */
        .main-content {
            padding: 35px 30px;
            display: flex;
            flex-direction: column;
            gap: 25px;
        }

        .header {
            border-bottom: 2px solid #f8bbd0;
            padding-bottom: 15px;
        }

        .header h1 {
            font-size: 32px;
            color: #880e4f;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-weight: 700;
        }

        .header .subtitle {
            font-size: 14px;
            color: #c2185b;
            font-weight: 600;
            letter-spacing: 1px;
            margin-top: 4px;
        }

        .main-section h2 {
            font-size: 16px;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            color: #880e4f;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .main-section h2::before {
            content: "🌸";
            font-size: 14px;
        }

        .main-section p, .main-section ul {
            font-size: 13.5px;
            line-height: 1.6;
            color: #4a3b40;
        }

        .main-section ul {
            padding-left: 18px;
        }

        .main-section ul li {
            margin-bottom: 6px;
        }

        /* Responsividade para telemóvel */
        @media (max-width: 650px) {
            .cv-container {
                grid-template-columns: 1fr;
            }
            .sidebar {
                margin: 0;
                border-radius: 0;
            }
        }
    </style>
</head>
<body>

<div class="cv-container">
    <!-- Coluna Esquerda -->
    <div class="sidebar">
        <div class="section-box">
            <h2>Contactos</h2>
            <div class="contact-item">📍 Ponte de Vagos, Vagos</div>
            <div class="contact-item">📞 915994389</div>
            <div class="contact-item">✉️ marianaagoncalves017@gmail.com</div>
        </div>

        <div class="section-box">
            <h2>Idiomas</h2>
            <ul>
                <li><strong>Português:</strong> Língua Materna</li>
                <li><strong>Inglês:</strong> Intermédio / Avançado</li>
                <li><strong>Coreano:</strong> Nível Básico</li>
            </ul>
        </div>

        <div class="section-box">
            <h2>Competências</h2>
            <ul>
                <li>Trabalho em equipa</li>
                <li>Aprendizagem rápida</li>
                <li>Resolução de problemas</li>
                <li>Criatividade</li>
            </ul>
        </div>

        <div class="section-box">
            <h2>Interesses</h2>
            <ul>
                <li>Tecnologia & Media Digital</li>
                <li>Videojogos (Estratégia/Coop)</li>
                <li>Música (Jogos de ritmo)</li>
            </ul>
        </div>
    </div>

    <!-- Coluna Direita -->
    <div class="main-content">
        <div class="header">
            <h1>Mariana Gonçalves</h1>
            <div class="subtitle">Curso Profissional TGPSI</div>
        </div>

        <div class="main-section">
            <h2>Sobre Mim / Objetivo</h2>
            <p>
                Aluna do Curso Profissional de Técnico de Gestão e Programação de Sistemas Informáticos (TGPSI), motivada e com forte interesse por tecnologia, desenvolvimento de software e media interativa. Procuro uma oportunidade de estágio no âmbito da Formação em Contexto de Trabalho (FCT) para aplicar e expandir competências técnicas e de resolução de problemas.
            </p>
        </div>

        <div class="main-section">
            <h2>Educação e Formação</h2>
            <ul>
                <li>
                    <strong>10.º ano ao 12.º ano (2024 – Presente)</strong><br>
                    Curso Profissional de Técnico de Gestão e Programação de Sistemas Informáticos (TGPSI)<br>
                    <em>Escola Técnico-Profissional de Cantanhede (ETPC)</em>
                </li>
            </ul>
        </div>

        <div class="main-section">
            <h2>Competências Técnicas</h2>
            <ul>
                <li><strong>Linguagens de Programação:</strong> C#, HTML/CSS, JavaScript, SQL</li>
                <li><strong>Sistemas e Ferramentas:</strong> Redes de Comunicação, Arquitetura de Computadores, Sistemas Operativos, Microsoft Office</li>
            </ul>
        </div>
    </div>
</div>

</body>
</html>
