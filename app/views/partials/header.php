<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= $this->pageTitle ? $this->pageTitle . ' &ndash; ' . SITE_NAME : SITE_NAME . ' &mdash; MVC'; ?></title>

    <link href="<?= $this->getImage('favicon.png'); ?>" rel="icon">

    <link rel="stylesheet" href="<?= $this->getStylesheet('style'); ?>">

    <!--<script src="<?/*= $this->getScript('script'); */?>"></script>-->

    <link rel="stylesheet" href="https://unpkg.com/tailwindcss/dist/tailwind.min.css">

    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet">

    <style>
        .gradient {
            background: linear-gradient(90deg, #d53369 0%, #daae51 100%);"
        }
    </style>
</head>
