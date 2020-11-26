<?php

$cakeDescription = 'Forms';
?>
<!DOCTYPE html>
<html>

<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <?= $this->Html->css([
        'material-kit.min.css?v=2.0.7',
        'custom',
    ]) ?>
    <?= $this->Html->script([
        'core/jquery.min.js',
    ]) ?>


    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>

    <?= $this->fetch('script') ?>
</head>

<body>

    <main class="main pb-2">
        <nav class="navbar navbar-expand-lg bg-dark">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                </button>
                <a class="navbar-brand" href="javascript:;">
                    <?= $this->Html->image('logo.png', ['width' => '30', 'alt' => 'Government Polytechnic', 'class' => 'mr-2']); ?>Government Polytechnic
                </a>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active d-none">
                            <a class="nav-link" href="javascript:;">Personal Details <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item ">
                            <?= $this->Html->link('Teaching and Learning', ['controller' => 'Forms', 'action' => 'teachingLearning'], ['class' => 'nav-link']) ?>
                        </li>
                        <li class="nav-item ">
                            <?= $this->Html->link('Student', ['controller' => 'Forms', 'action' => 'student'], ['class' => 'nav-link']) ?>

                        </li>
                        <li class="nav-item ">
                            <?= $this->Html->link('Laboratory', ['controller' => 'Forms', 'action' => 'laboratory'], ['class' => 'nav-link']) ?>

                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
        </div>
    </main>
    <footer class="bg-dark">
        <div class="container">
            <p class="my-4 h5 text-white">Footer</p>
        </div>
    </footer>
    <?= $this->Html->script([

        'core/popper.min.js',
        'core/bootstrap-material-design.min.js',
        'plugins/moment.min.js',
        'material-kit.js?v=2.0.7',
        'jquery.validate.min.js',
    ]) ?>
</body>

</html>
