<!-- use require once to kill script if file not found -->
<!-- this probably only makes sense to use if you're pulling in something security related
otherwise why would you want to kill everything off? -->
<!-- require_once is more resource efficient than require on it's own -->
<?php require_once('inc/header.php') ?>
<h2>About</h2>

<p class="text-center">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore impedit totam porro
  iure reiciendis autem possimus sapiente, optio, exercitationem ipsum assumenda mollitia, recusandae expedita
  culpa ratione voluptatem esse quos quam?</p>
<?php require_once('inc/footer.php') ?>