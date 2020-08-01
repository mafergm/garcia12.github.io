<?php
/* Smarty version 3.1.34-dev-7, created on 2020-07-29 20:21:34
  from 'C:\xampp\htdocs\mafergm\inventarionum1\templates\Tabla.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f21be2ec963d6_38403558',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a54ff23830d6e7dd5e11e8c25f6b8ca84519f3bf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mafergm\\inventarionum1\\templates\\Tabla.tpl',
      1 => 1596046893,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabecera/header.tpl' => 1,
    'file:Cabecera/footer.tpl' => 1,
  ),
),false)) {
function content_5f21be2ec963d6_38403558 (Smarty_Internal_Template $_smarty_tpl) {
?>   <?php $_smarty_tpl->_subTemplateRender("file:Cabecera/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
   </br>  </br>  </br>  <h1 align = "center">Canciones</h1></br>
    <div id="container2"></br>
   <div id = "espacio">
<ul class="list-group">
  <li class="list-group-item">Wolfgang Amadeus Mozart - Une petite musique de nuit</li>
  <li class="list-group-item">Ludwig Van Beethoven -  Symphonie no. 5  1er mouvement</li>
  <li class="list-group-item">Johann Straus - Marche de Radetzky</li>
  <li class="list-group-item">Johann Brahms - Danse hongroise no. 5</li>
  <li class="list-group-item">Ludwig Van Beethoven - Symphonie no. 9</li>
</ul></div><a href = "index.php">Salir</a>
   </div>
  
      <?php $_smarty_tpl->_subTemplateRender("file:Cabecera/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
