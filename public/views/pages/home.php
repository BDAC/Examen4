<?php ob_start(); ?>

<h2>Bonjour !</h2>
<p>Choisissez <b>« Conducteurs »</b>, <b>« Associations »</b> ou <b>« Vehicules »</b> parmi les options du menu ci-dessus.</p>

<?php $content = ob_get_clean() ?> <?php view('template', compact('content')); ?>