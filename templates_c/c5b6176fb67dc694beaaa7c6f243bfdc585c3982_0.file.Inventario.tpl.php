<?php
/* Smarty version 3.1.34-dev-7, created on 2020-07-12 14:07:20
  from '/home/vol5_5/tonohost.com/ottos_25991077/htdocs/templates/Inventario.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f0b515844c8e8_98711444',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c5b6176fb67dc694beaaa7c6f243bfdc585c3982' => 
    array (
      0 => '/home/vol5_5/tonohost.com/ottos_25991077/htdocs/templates/Inventario.tpl',
      1 => 1594576750,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabecera/header.tpl' => 1,
    'file:Cabecera/footer.tpl' => 1,
  ),
),false)) {
function content_5f0b515844c8e8_98711444 (Smarty_Internal_Template $_smarty_tpl) {
?>   <?php $_smarty_tpl->_subTemplateRender("file:Cabecera/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <div id="container2">

    <h4><strong>Ver Inventario</strong></h4>
    </br>
    <table border="1px" height="265px">
    <tr>
    <td id= "uno"width="150px"><h5><strong>Producto</strong></h5></td><td  width = "170px"><h6></h6></td><td width = "170px"><h6></h6></td><td width = "170px"><h6></h6></td>
    </tr>
     <tr>
    <td id= "uno"><h5><strong>Descripci&oacute;n</h5></strong></td><td><h6></h6></td><td><h6></h6></td><td><h6></h6></td>
    </tr>
     <tr>
    <td id= "uno"><h5><strong>Precio</h5></strong></td><td><h6></h6></td><td><h6></h6></td><td><h6></h6></td>
    </tr>
     <tr>
    <td id= "uno"><h5><strong>Cantidad</h5></strong></td><td><h6></h6></td><td><h6></h6></td><td><h6></h6></td>
    </tr>
    </table>
   </div>

      <?php $_smarty_tpl->_subTemplateRender("file:Cabecera/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
