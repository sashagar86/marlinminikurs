<?php include $_SERVER['DOCUMENT_ROOT'] . '/header.php'?>
<?php
    $items = [
        [
            'image' => 'img/demo/authors/sunny.png',
            'image_alt' => 'Sunny A.',
            'name' => 'Sunny A. (UI/UX Expert)',
            'position' => 'Lead Author',
            'twitter' => '@myplaneticket',
            'wrapbootstrap' => 'myorange',
            'wrapbootstrap_title' => 'Contact Sunny',
        ],
        [
            'image' => 'img/demo/authors/josh.png',
            'image_alt' => 'Jos K.',
            'name' => 'Jos K. (ASP.NET Developer)',
            'position' => 'Partner &amp; Contributor',
            'twitter' => '@atlantez',
            'wrapbootstrap' => 'Walapa',
            'wrapbootstrap_title' => 'Contact Jos',
        ],
        [
            'image' => 'img/demo/authors/jovanni.png',
            'image_alt' => 'Jovanni Lo',
            'name' => 'Jovanni L. (PHP Developer)',
            'position' => 'Partner &amp; Contributor',
            'twitter' => '@lodev09',
            'wrapbootstrap' => 'lodev09',
            'wrapbootstrap_title' => 'Contact Jovanni',
        ],
        [
            'image' => 'img/demo/authors/roberto.png',
            'image_alt' => 'Jovanni Lo',
            'name' => 'Roberto R. (Rails Developer)',
            'position' => 'Partner &amp; Contributor',
            'twitter' => '@sildur',
            'wrapbootstrap' => 'sildur',
            'wrapbootstrap_title' => 'Contact Roberto',
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
                           <div class="d-flex flex-wrap demo demo-h-spacing mt-3 mb-3">
                           <?php foreach ($items as $item): ?>
                               <div class="rounded-pill bg-white shadow-sm p-2 border-faded mr-3 d-flex flex-row align-items-center justify-content-center flex-shrink-0">
                                   <?php if(!empty($item['image'])):?>
                                    <img src="<?php echo $item['image']?>" alt="<?php echo $item['image_alt']?>" class="img-thumbnail img-responsive rounded-circle" style="width:5rem; height: 5rem;">
                                   <?php endif;?>
                                   <div class="ml-2 mr-3">
                                       <h5 class="m-0">
                                           <?php echo $item['name']?>
                                           <small class="m-0 fw-300">
                                               <?php echo $item['position']?>
                                           </small>
                                       </h5>
                                       <a href="https://twitter.com/<?php echo $item['twitter']?>" class="text-info fs-sm" target="_blank"><?php echo $item['twitter']?></a> -
                                       <a href="https://wrapbootstrap.com/user/<?php echo $item['wrapbootstrap']?>" class="text-info fs-sm" target="_blank" title="<?php echo $item['wrapbootstrap_title']?>"><i class="fal fa-envelope"></i></a>
                                   </div>
                               </div>
                           <?php endforeach;?>
                        </div>
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
