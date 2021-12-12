<?php include $_SERVER['DOCUMENT_ROOT'] . '/header.php'?>
<?php
    $items = [
        [
            'title' => 'Главная',
            'url' => '#',
        ],
        [
            'title' => 'PHP',
            'url' => '#',
        ],
        [
            'title' => 'Функции',
        ]

    ];
?>
    <body class="mod-bg-1 mod-nav-link ">
        <main id="js-page-content" role="main" class="page-content">
            <div class="col-md-6">
                <div id="panel-1" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Задание
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <ol class="breadcrumb page-breadcrumb">
                                <?php foreach ($items as $item): ?>
                                    <?php if (!empty($item['url'])):?>
                                        <li class="breadcrumb-item"><a href="<?php echo $item['url']?>>"><?php echo $item['title']?></a></li>
                                    <?php else:?>
                                        <li class="breadcrumb-item active"><?php echo $item['title']?></li>
                                    <?php endif?>
                                <?php endforeach;?>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        

        <script src="js/vendors.bundle.js"></script>
        <script src="js/app.bundle.js"></script>
        <script>
            // default list filter
            initApp.listFilter($('#js_default_list'), $('#js_default_list_filter'));
            // custom response message
            initApp.listFilter($('#js-list-msg'), $('#js-list-msg-filter'));
        </script>
    </body>
</html>
