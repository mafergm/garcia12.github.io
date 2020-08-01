<?php
/* Smarty version 3.1.34-dev-7, created on 2020-07-11 18:55:20
  from 'C:\xampp\htdocs\mafergm\inventarionum1\templates\Inventario.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f09eef8f1edb3_88904473',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '57036db0cc95709d2b43846c55daab373aa08167' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mafergm\\inventarionum1\\templates\\Inventario.tpl',
      1 => 1594486519,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabecera/header.tpl' => 1,
    'file:Cabecera/footer.tpl' => 1,
  ),
),false)) {
function content_5f09eef8f1edb3_88904473 (Smarty_Internal_Template $_smarty_tpl) {
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
