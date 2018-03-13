<?php get_header(); ?>
      
        <header class="navbar fixed-top navbar-expand flex-column flex-md-row bd-navbar">

            <div class="navbar-nav-scroll">
                <ul class="navbar-nav bd-navbar-nav flex-row">
                    <span class="navbar-toggler-icon"></span>
                </ul>
            </div>

            <ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex">
                <li class="navbar-item">
                    <a class="nav-link navbar__link" href="#">Цель проекта</a>
                </li>
                <li class="navbar-item">
                    <a class="nav-link navbar__link" href="#">Платформа</a>
                </li>
                <li class="navbar-item">
                    <a class="nav-link navbar__link" href="#">Токенизация</a>
                </li>
                <li class="navbar-item">
                    <a class="nav-link navbar__link" href="#">Пилотные проекты</a>
                </li>
                <li class="navbar-item">
                    <a class="nav-link navbar__link" href="#">Инвесторам</a>
                </li>
                <li class="navbar-item">
                    <a class="nav-link navbar__link" href="#">Контакты</a>
                </li>
            </ul>
            
        </header>

        <section class="welcome container-fluid">
            <div class="container">
                <div class="welcome__info align-middle">
                    <div class="welcome__header">TRANSNET</div>
                    <div class="welcome__subheader">TECHNOLOGY UNITES</div>
                    <div class="welcome__text regular">Глобальная децентрализованная<br/>платформа для комплексной<br/>реализации транспортно-информационных<br/> и инфраструктурных проектов</div>
                </div>
            </div>
        </section>

        <section class="skyway container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-5 col-lg-5">
                        <div class="header1 skyway__header">Skyway</div>
                        <div class="skyway__info regular">
                         Одна из целей TRANSNET — создание всемирной транспортной сети нового поколения, основанной на разработках инженерной школы
                        А. Э. Юницкого. Технология Sky Way обеспечивает возможность строительства транспортных артерий в любых климато-географических
                        условиях, даже на местности со сложным рельефом. Благодаря инновационным технологиям осваиваются и развиваются новые территории,
                        рождаются новые рынки — будущие драйверы мировой экономики
                        </div>
                        <a class="skyway__link" href="#">Узнать больше о Skyway</a>
                    </div>
                    <div class="hidden-sm col-md-1 col-lg-1">&nbsp;</div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="embed-responsive embed-responsive-4by3">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/jYAh-HdBFqg"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="innovation-platform container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12 header2 text-center innovation-platform__header">Инновационная Платформа</div>
                    <div class="col-sm-12 col-md-8 offset-md-2 col-lg-8 offset-md-2 regular  text-center innovation-platform__info">Автономная программируемая экономика платформы TRANSNET базируется на распределенном публичном реестре, реализованном в блокчейне</div>
                </div>
                <div class="row">
                    <div class="cols-sm-12 col-md-4 col-lg-4">
                        <div class="header3 text-center">Уникальный Инструментарий</div>
                        <div class="info text-center">Система объединяет финансы, производство, инфраструктуру, транспорт, логистику и сферу услуг на принципах децентрализации
                        управления</div>
                    </div>
                    <div class="cols-sm-12 col-md-4 col-lg-4">
                        <div class="header3 text-center">Адаптируемость и Оптимизация</div>
                        <div class="info text-center">Алгоритм платформы выбирает оптимальные варианты решения для каждой задачи, адаптируя всю систему под изменяющиеся условия
                        внешней среды
                        </div>
                    </div>
                    <div class="cols-sm-12 col-md-4 col-lg-4">
                        <div class="header3 text-center">Прозрачность и Безопасность</div>
                        <div class="info text-center">Гарантирует чистоту сделок, получение достоверной информации, точный учет данных о ресурсах и финансовых потоках для всех
                        участников
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <section class="unique container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12 header2 text-center unique__header">Уникальные Особенности Платфромы</div>
                    <div class="col-sm-12 col-md-8 offset-md-2 col-lg-8 offset-md-2 regular  text-center unique__info">Инструментарий платформы TRANSNET позволяет запускать и обслуживать разномасштабные проекты в единой детерминированной системе,
                    гарантирующей точность, надежность и прозрачность всех бизнес-процессов
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4 col-md-2 col-lg-2">
                        <div class="base">
                            <img class="icon" src="<?=get_template_directory_uri() . '/assets/images/temp/icon.jpg"'?> />
                        </div>
                    </div>
                    <div class="col-sm-8 col-md-4 col-lg-4">
                        <div class="header4 unique_header2">МОДУЛЬНАЯ АРХИТЕКТУРА</div>
                        <div class="info unique__text">Модульная архитектура платформы позволяет ускорить и упростить запуск новых инструментов и адресных проектов</div>
                    </div>
                    <div class="col-sm-4 col-md-2 col-lg-2">
                        <div class="base">
                            <img class="icon" src="<?=get_template_directory_uri() . '/assets/images/temp/icon.jpg"'?> />
                        </div>
                    </div>
                    <div class="col-sm-8 col-md-4 col-lg-4">
                        <div class="header4 unique_header2">ПРИКЛАДНАЯ ТОКЕНИЗАЦИЯ</div>
                        <div class="info unique__text">Токенизация позволяет запускать на платформе легко масштабируемые, прозрачные и эффективные бизнес-приложения</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4 col-md-2 col-lg-2">
                        <div class="base">
                            <img class="icon" src="<?=get_template_directory_uri() . '/assets/images/temp/icon.jpg"'?> />
                        </div>
                    </div>
                    <div class="col-sm-8 col-md-4 col-lg-4">
                        <div class="header4 unique_header2">МАСШТАБИРУЕМОСТЬ</div>
                        <div class="info unique__text">Система поддерживает бизнес-процессы любой сложности - от самых простых приложений до инфраструктурных проектов</div>
                    </div>
                    <div class="col-sm-4 col-md-2 col-lg-2">
                        <div class="base">
                            <img class="icon" src="<?=get_template_directory_uri() . '/assets/images/temp/icon.jpg"'?> />
                        </div>
                    </div>
                    <div class="col-sm-8 col-md-4 col-lg-4">
                        <div class="header4 unique_header2">КОМПЛЕКСНОЕ БЛОКЧЕЙН-РЕШЕНИЕ</div>
                        <div class="info unique__text">Выбор и применение передовых технологий Graphene, Bitshares и EOS открывает новые горизонты эффективного управления бизнесом</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4 col-md-2 col-lg-2">
                        <div class="base">
                            <img class="icon" src="<?=get_template_directory_uri() . '/assets/images/temp/icon.jpg"'?> />
                        </div>
                    </div>
                    <div class="col-sm-8 col-md-4 col-lg-4">
                        <div class="header4 unique_header2">МОМЕНТАЛЬНЫЕ ТРАНЗАКЦИИ</div>
                        <div class="info unique__text">Алгоритм консенсуса DPoS позволяет строить бизнес-приложения, эффективно функционирующие в реальном времени</div>
                    </div>
                    <div class="col-sm-4 col-md-2 col-lg-2">
                        <div class="base">
                            <img class="icon" src="<?=get_template_directory_uri() . '/assets/images/temp/icon.jpg"'?> />
                        </div>
                    </div>
                    <div class="col-sm-8 col-md-4 col-lg-4">
                        <div class="header4 unique_header2">ДЕЦЕНТРАЛИЗАЦИЯ</div>
                        <div class="info unique__text">Запуск новых направлений и проектов определяется их актуальностью и осуществляется при достижении консенсуса между участниками
                        платформы</div>
                    </div>
                </div>
            </div>
        </section>

        <section class="tokenization">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12 header2 text-center tokenization__header">Прикладная токенизация</div>
                    <div class="col-sm-12 col-md-8 offset-md-2 col-lg-8 offset-md-2 regular  text-center tokenization__info">Токены - внутренние криптографические активы, создание и эмиссия которых в блокчейне регламентируется конституцией и правилами
                    платформы.Токенизация является инновационным подходом к организации бизнеса и позволяет находить и запускать принципиально
                    новые бизнес-модели
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-4 col-lg-4 text-center">
                        <div class="tokenization__pic">
                            <img src="<?=get_template_directory_uri() . '/assets/images/temp/pic.jpg"'?> />
                        </div>
                        <div class="header3">Токен базового актива</div>
                        <div class="info tokenization__text">
                             Базовый актив является utility токеном, открывающим доступ к инструментарию платформы, включая возможности управления развитием
                            экосистемы - от отдельных инструментов до многоуровневых проектов
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4 text-center">
                        <div class="tokenization__pic">
                            <img src="<?=get_template_directory_uri() . '/assets/images/temp/pic.jpg"'?> />
                        </div>
                        <div class="header3">Токенизация бизнес моделей</div>
                        <div class="info tokenization__text">
                             Токенизированные бизнес-модели, запускаемые поверх платформы, составляют основу экономики Transnet, имеют собственные токены,
                            легко масштабируются, позволяя присоединяться к платформе новым участникам
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4 text-center">
                        <div class="tokenization__pic">
                            <img src="<?=get_template_directory_uri() . '/assets/images/temp/pic.jpg"'?> />
                        </div>
                        <div class="header3">Автоматизация процессов</div>
                        <div class="info tokenization__text">
                             После тестирования и разработки спецификаций бизнес-модели, ее процессы автоматизируются в рамках проектов и приложений,
                            формируя автономную и гибкую экосистему платформы
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="cols-sm-12 col-md-12 col-lg-12 text-center">
                        <button class="blue-button tokenization__button">Подробнее</button>
                    </div>
                </div>
            </div>
        </section>

        <section class="apps">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12 header2 text-center apps__header">Пилотные Приложения</div>
                    <div class="col-sm-12 col-md-8 offset-md-2 col-lg-8 offset-md-2 regular  text-center apps__info">Синтез данных, полученных в результате практических экспериментов и математического моделирования, положен в основу запуска
                    реальных приложений и адресных проектов. Область их применения не имеет временных, территориальных, либо иных ограничений.
                    Решения постоянно обновляются и модернизируются для максимальной эффективности функционирования
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-10 offset-sm-1 col-md-4 offset-md-1 text-center">
                        <div class="apps__pic">&nbsp;</div>
                        <div class="header4 apps__header2">ТРАССА SKYWAY<br/>(UT-KIT)</div>
                        <div class="info apps__info">Разработка системы линейного контроля для транспортной сети Sky Way, проектирование программного симулятора для моделирования
                        экономики токена и поиска ее уязвимостей, применение на действующей кольцевой трассе</div>
                    </div>
                    <div class="col-sm-10 offset-sm-1 col-md-4 offset-md-2 text-center">
                        <div class="apps__pic">&nbsp;</div>
                        <div class="header4 apps__header2">БИРЖА ЗАДАЧ И РЕСУРСОВ<br/>(UT-WORKS)</div>
                        <div class="info apps__info">Тендер предложений на выполнение работ по заранее объявленным условиям, токенизированный ресурс стимулирования и подтверждения
                        качества работ</div>
                    </div>
                    <div class="col-sm-10 offset-sm-1 col-md-4 offset-md-1 text-center">
                        <div class="apps__pic">&nbsp;</div>
                        <div class="header4 apps__header2">ОБРАЗОВАТЕЛЬНЫЙ МОДУЛЬ<br/>(UT-SCHOOL)</div>
                        <div class="info apps__info">Токенизируемое приложение для комплексного решения образовательных задач и внедрения бизнес-моделей в обучающих и консалтинговых
                        направлениях любого уровня сложности</div>
                    </div>
                    <div class="col-sm-10 offset-sm-1 col-md-4 offset-md-2 text-center">
                        <div class="apps__pic">&nbsp;</div>
                        <div class="header4 apps__header2">ИГРА-СИМУЛЯТОР<br/>(UT-GAME)</div>
                        <div class="info apps__info">Игровой продукт с увлекательным сюжетом, развивающимся в различных реальностях, позволяет моделировать экономические процессы,
                        визуализировать, проигрывать и выбирать оптимальные решения, и презентовать конкретные бизнес-проекты в виртуальном формате
</div>
                    </div>
                </div>
            </div>
        </section>

        <section class="developers">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12 header2 text-center developers__header">Открытая разработка</div>
                    <div class="col-sm-12 col-md-8 offset-md-2 col-lg-8 offset-md-2 regular  text-center developers__info">Open-source разработка и принципы децентрализации - неотъемлемая часть идеологии TRANSNET. Мы всегда открыты для сотрудничества
                    с профессионалами!
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-12 text-center">
                        <button class="white-button developers__button">Принять Участие</button>
                    </div>
                </div>
            </div>
        </section>

        <section class="roadmap">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12 header2 text-center roadmap__header">Дорожная Карта</div>
                </div>
                <div class="row">
                    <div class="col-sm-5 offset-sm-1 col-md-4 offset-md-1 col-lg-4 offset-lg-1 info text-right">
                        <span class="to-right-middle">Идея Юницкого</span>
                    </div>
                    <div class="col-sm-2 col-md-2 col-lg-2 roadmap__bg">
                        <div class="roadmap__oval roadmap__year-margin1">
                            <div class="roadmap__oval-year  align-middle">1989</div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-2 col-md-2 offset-md-5 col-lg-2 offset-lg-5 roadmap__bg">
                        <div class="roadmap__oval roadmap__year-margin2">
                            <div class="roadmap__oval-year align-middle">2014</div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 info">
                        <span class="to-left-middle">Поиск решений привязки единого "параметра, кода" ко всем составляющим сети (с появлением блокчейна)</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-5 offset-sm-1 col-md-4 offset-md-1 col-lg-4 offset-lg-1 info  text-right">
                        <span class="to-right-middle">Изучение возможностей привязки ценных активов/ресурсов к токенам. Анализ рынка, проработка концепции</span>
                    </div>
                    <div class="col-sm-2 col-md-2 col-lg-2 roadmap__bg">
                        <div class="roadmap__oval roadmap__year-margin3">
                            <div class="roadmap__oval-year align-middle">2016</div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-2 col-md-2 offset-md-5 col-lg-2 offset-lg-5 roadmap__bg">
                        <div class="roadmap__oval roadmap__year-margin3">
                            <div class="roadmap__oval-year align-middle">2017</div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 info">
                        <span class="to-left-middle">Kонцепция TransNet, согласование, утверждение, начало проработки экономики токена, драфт первой версии экономики токена,
                        запуск тестовой сети блокчейна</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-5 offset-sm-1 col-md-4 offset-md-1 col-lg-4 offset-lg-1 info  text-right">
                        <span class="to-right-middle">Изучение возможностей привязки ценных активов/ресурсов к токенам. Анализ рынка, проработка концепции</span>
                    </div>
                    <div class="col-sm-2 col-md-2 col-lg-2 roadmap__bg">
                        <div class="roadmap__oval roadmap__year-margin2">
                            <div class="roadmap__oval-year align-middle">2018</div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-2 col-md-2 offset-md-5 col-lg-2 offset-lg-5 roadmap__bg">
                        <div class="roadmap__oval2 roadmap__year-margin1">
                            <div class="roadmap__oval-year2 align-middle">Q1</div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 info">
                        <span class="to-left-middle">Цели, задачи, ожидания</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-5 offset-sm-1 col-md-4 offset-md-1 col-lg-4 offset-lg-1 info  text-right">
                        <span class="to-right-middle">Цели, задачи, ожидания</span>
                    </div>
                    <div class="col-sm-2 col-md-2 col-lg-2 roadmap__bg">
                        <div class="roadmap__oval2 roadmap__year-margin1">
                            <div class="roadmap__oval-year2 align-middle">Q2</div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-2 col-md-2 offset-md-5 col-lg-2 offset-lg-5 roadmap__bg">
                        <div class="roadmap__oval2 roadmap__year-margin1">
                            <div class="roadmap__oval-year2 align-middle">Q3</div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 info">
                        <span class="to-left-middle">Цели, задачи, ожидания</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-5 offset-sm-1 col-md-4 offset-md-1 col-lg-4 offset-lg-1 info  text-right">
                        <span class="to-right-middle">Цели, задачи, ожидания</span>
                    </div>
                    <div class="col-sm-2 col-md-2 col-lg-2 roadmap__bg">
                        <div class="roadmap__oval2 roadmap__year-margin3">
                            <div class="roadmap__oval-year2 align-middle">Q4</div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-2 col-md-2 offset-md-5 col-lg-2 offset-lg-5 roadmap__bg roadmap__bg">
                        <div class="roadmap__oval roadmap__year-margin3">
                            <div class="roadmap__oval-year align-middle">2019</div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 info">
                        <span class="to-left-middle">Kонцепция TransNet, согласование, утверждение, начало проработки экономики токена, драфт первой версии экономики токена,
                        запуск тестовой сети блокчейна</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-2 offset-sm-5 col-md-2 offset-sm-5 col-lg-2 offset-lg-5">
                        <div class="roadmap__oval roadmap__oval-red roadmap__year-margin2">
                            <div class="roadmap__oval-year roadmap__oval-white align-middle">2020</div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12 info text-center">
                        Запуск Бета Версии Платформы
                    </div>
                </div>
            </div>
        </section>

        <section class="investors">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12 header2 text-center investors__header">Будущим Инвесторам</div>
                    <div class="col-sm-12 col-md-10 offset-md-1 col-lg-10 offset-md-1 regular  text-center investors__info">Разработка платформы в настоящее время финансируется посредством частных инвестиций команды Transnet. <span class="font-weight-bold">No TGE/ICO/IPO, Νο
                    premine, Νο airdrops</span><br/><br/>
                     Проведение TGE (Token Generation Events) первых проектов на базе платформы Transnet планируется Q2 2018 года, записывайтесь
                    в лист ожидания <span class="font-weight-bold">Whitelisting</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-4 col-lg-4 text-center">
                        <div class="investors__ico"></div>
                        <div class="header4">ИНВЕСТИЦИИ В НОВЫЕ ТЕХНОЛОГИИ</div>
                        <div class="info">Участие в проекте предполагает инвестиции в новые зарождающиеся рынки и инновационные технологии, с максимальным фокусом
                        на направлениях высокой потенциальной капитализации</div>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4 text-center">
                        <div class="investors__ico"></div>
                        <div class="header4">ОПТИМАЛЬНЫЙ ПОРОГ ВХОДА</div>
                        <div class="info">Возможность комфортного входа для любого типа инвесторов - от небольших разовых сумм до крупных инвестиций в адресные проекты
</div>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4 text-center">
                        <div class="investors__ico"></div>
                        <div class="header4">P2P-ОБМЕН АКТИВАМИ</div>
                        <div class="info">Собственный удобный интерфейс децентрализованной площадки обмена ценными активами блокчейна (DEX) обеспечивает быстрый и
                        безопасный обмен токенами между всеми пользователями</div>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4 text-center">
                        <div class="investors__ico"></div>
                        <div class="header4">НИЗКИЙ ПОРОГ ВХОДА</div>
                        <div class="info">Низкий входной порог дает возможность инвестировать в проект даже при наличии небольшого капитала</div>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4 text-center">
                        <div class="investors__ico"></div>
                        <div class="header4">САМОСТОЯТЕЛЬНОЕ УПРАВЛЕНИЕ АКТИВАМИ</div>
                        <div class="info">Возможность быстрого обмена токенов разных адресных проектов на токен базового актива блокчейна и обратно, обеспечивая доступ
                        к наиболее прибыльным активам в режиме реального времени</div>
                    </div>
                </div>
                <div class="row">
                    <div class="cols-sm-12 col-md-12 col-lg-12 text-center">
                        <button class="blue-button investors__button">Участвовать</button>
                    </div>
                </div>
        </section>

        <section class="about">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12 header2 about__header">О нас</div>
                    <div class="col-sm-7 col-md-7  col-lg-7 regular about__info">At half-past eight the door opened, the policeman appeared, and, requesting them to follow him, led the way to an adjoining
                    hall.
                    </div>
                </div>
                <div class="row">
                    <div class="coll-sm-12 col-md-12 col-lg-12 about__map">&nbsp;</div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6 info about__text">At half-past eight the door opened, the policeman appeared, and, requesting them to follow him, led the way to an adjoining
                    hall. It was evidently a court-room, and a crowd of Europeans and natives already occupied the rear of the apartment.</div>
                    <div class="col-sm-12 col-md-6 col-lg-6 info about__text">At half-past eight the door opened, the policeman appeared, and, requesting them to follow him, led the way to an adjoining
                    hall.</div>
                </div>
                <div class="row">
                    <div class="cols-sm-12 col-md-12 col-lg-12 text-center">
                        <button class="blue-button about__button">Присоединяйся к нашей команде</button>
                    </div>
                </div>
            </div>
        </section>

        <section class="subscribe">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12 text-center header2 subscribe__header">Будьте в курсе</div>
                    <div class="col-sm-12 col-md-10 offset-md-1 col-lg-10 offset-md-1 regular text-center subscribe__info">Подпишитеь на наши новости. Мы обещаем не надоедать вам и сообщать вам только важные новости. Мы никогда не передавим ваши
                    координаты никаким другим лицам.
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3 offset-sm-3 cols-md-3 offset-md-3 col-lg-3 offset-lg-3 text-right">
                        <input class="subscribe__input subscribe__input_left" placeholder="Имя"/>
                    </div>
                    <div class="col-sm3 col-md-3 col-lg-3 text-left">
                        <input class="subscribe__input subscribe__input_right"  placeholder="E-мейл"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 offset-sm-3 cols-md-6 offset-md-3 col-lg-6 offset-lg-3 text-center">
                        <textarea class="subscribe__textarea" placeholder="Комментарий (по желанию)"></textarea>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-12 text-center">
                    <button class="white-button subscribe__button">Подписаться</button>
                </div>
        </section>

<?php get_footer(); ?>