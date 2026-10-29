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

        /* Detalhes de flores de Sakura */
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
            gap: 20px;
            border-top-right-radius: 30px;
            border-bottom-right-radius: 30px;
            margin: 10px 0 10px 10px;
        }

        /* Foto de Perfil com Filtro Sakura */
        .profile-pic-container {
            text-align: center;
            margin-bottom: 5px;
        }

        .profile-pic {
            width: 130px;
            height: 130px;
            object-fit: cover;
            border-radius: 50%;
            border: 4px solid #ffffff;
            box-shadow: 0 4px 12px rgba(136, 14, 79, 0.15);
            filter: sepia(20%) hue-rotate(310deg) saturate(120%) brightness(105%);
        }

        .sidebar h2 {
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            color: #880e4f;
            margin-bottom: 10px;
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
            font-size: 12.5px;
            margin-bottom: 8px;
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
            font-size: 12.5px;
            margin-bottom: 6px;
            color: #5c2c3b;
            line-height: 1.4;
        }

        /* Coluna Direita (Conteúdo Principal) */
        .main-content {
            padding: 35px 30px;
            display: flex;
            flex-direction: column;
            gap: 22px;
        }

        .header {
            border-bottom: 2px solid #f8bbd0;
            padding-bottom: 15px;
        }

        .header h1 {
            font-size: 30px;
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
            font-size: 15px;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            color: #880e4f;
            margin-bottom: 8px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .main-section h2::before {
            content: "🌸";
            font-size: 13px;
        }

        .main-section p, .main-section ul {
            font-size: 13px;
            line-height: 1.6;
            color: #4a3b40;
        }

        .main-section ul {
            padding-left: 18px;
        }

        .main-section ul li {
            margin-bottom: 5px;
        }

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
    <div class="sidebar">
        <div class="profile-pic-container">
            <img src="data:image/jpeg;base64,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" alt="Mariana Gonçalves" class="profile-pic">
        </div>

        <div class="section-box">
            <h2>Contactos</h2>
            <div class="contact-item">📍 Ponte de Vagos, Vagos</div>
            <div class="contact-item">📞 915994389</div>
            <div class="contact-item">✉️ marianagoncalves.164046@etpc.pt</div>
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
