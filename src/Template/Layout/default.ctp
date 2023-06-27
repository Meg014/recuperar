<?php

/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>

<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proteger Conta</title>
    <?= $this->Html->meta('icon') ?>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">

    <!-- CSS Libraries -->
    <?= $this->Html->css(['summernote/dist/summernote-bs4.css']) ?>
    <?= $this->Html->css(['selectric/public/selectric.css']) ?>
    <?= $this->Html->css(['bootstrap-tagsinput/dist/bootstrap-tagsinput.css']) ?>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

    <!-- Template CSS -->
    <?= $this->Html->css(['style.css']) ?>
    <?= $this->Html->css(['components.css']) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>

    <style>
        .selectric-items .selectric-scroll {
            height: 100%;
            overflow: auto;
            box-shadow: 1px 2px 8px #9e9e9e;
        }
    </style>

</head>

<body>
    <?= $this->Flash->render() ?>
    <?= $this->fetch('content') ?>
</body>


<!-- General JS Scripts -->

<!-- <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>


<!-- JS Libraies -->
<?= $this->Html->script(['summernote/dist/summernote-bs4.js']) ?>
<?= $this->Html->script(['selectric/public/jquery.selectric.min.js']) ?>
<?= $this->Html->script(['jquery_upload_preview/assets/js/jquery.uploadPreview.min.js']) ?>
<?= $this->Html->script(['bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js']) ?>


<!-- Template JS File -->
<?= $this->Html->script(['scripts.js']) ?>
<?= $this->Html->script(['custom.js']) ?>
<!-- Page Specific JS File -->
<?= $this->Html->script(['page/features-post-create.js']) ?>


<script>
    $('.modal').appendTo("body");
</script>

</html>