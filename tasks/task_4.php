<?php include $_SERVER['DOCUMENT_ROOT'] . '/header.php'?>
<?php
$items = [
    [
        'title' => 'My Tasks',
        'value' => '130 / 500',
        'width' => '65',
        'class' => 'bg-fusion-400',
    ],
    [
        'title' => 'Transfered',
        'value' => '440 TB',
        'width' => '34',
        'class' => 'bg-success-500',
    ],
    [
        'title' => 'Bugs Squashed',
        'value' => '77%',
        'width' => '77',
        'class' => 'bg-info-400',
    ],
    [
        'title' => 'User Testing',
        'value' => '7 days',
        'width' => '84',
        'class' => 'bg-primary-300',
    ],


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
                            <?php foreach ($items as $key => $item):?>
                                <div class="d-flex <?php if (!$key) echo 'mt-2'?>">
                                    <?php echo $item['title']?>
                                    <span class="d-inline-block ml-auto"><?php echo $item['value']?></span>
                                </div>
                                <div class="progress progress-sm mb-3">
                                    <div class="progress-bar <?php echo $item['class']?>" role="progressbar" style="width: <?php echo $item['width']?>%;" aria-valuenow="<?php echo $item['width']?>" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            <?php endforeach?>
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
