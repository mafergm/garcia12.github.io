<?php
/* Smarty version 3.1.34-dev-7, created on 2020-07-12 14:07:45
  from '/home/vol5_5/tonohost.com/ottos_25991077/htdocs/templates/Productos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f0b5171c69f93_19423224',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0bcd0274496e3dd1a6bc05d1c22f09b2e1ca90a6' => 
    array (
      0 => '/home/vol5_5/tonohost.com/ottos_25991077/htdocs/templates/Productos.tpl',
      1 => 1594576751,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabecera/header.tpl' => 1,
    'file:Cabecera/footer.tpl' => 1,
  ),
),false)) {
function content_5f0b5171c69f93_19423224 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Cabecera/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

 <div class = "container">
   <h1><strong>Inventario</strong></h1>
 <div id="icono">
 <svg id="icono2" class="bi bi-briefcase-fill"viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M0 12.5A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5V6.85L8.129 8.947a.5.5 0 0 1-.258 0L0 6.85v5.65z"/>
  <path fill-rule="evenodd" d="M0 4.5A1.5 1.5 0 0 1 1.5 3h13A1.5 1.5 0 0 1 16 4.5v1.384l-7.614 2.03a1.5 1.5 0 0 1-.772 0L0 5.884V4.5zm5-2A1.5 1.5 0 0 1 6.5 1h3A1.5 1.5 0 0 1 11 2.5V3h-1v-.5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5V3H5v-.5z"/>
</svg></div> <div id="c">
   <h3><?php echo $_smarty_tpl->tpl_vars['puesto']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['usuario']->value;?>
</h3></div> </br></br>
   <h4 id="g">Llene el siguiente formulario:</h4></div>
   <div id="container5">
  <form>

<div class="form-group ">
    <label for="producto">Producto</label>
    <input type="text" class="form-control" id="producto">
  </div>
  <div class="form-group ">
    <label for="descripcion">Descripci&oacute;n</label>
    <input type="text" class="form-control" id="descripcion">
  </div>
   <div class="form-row">
  <div class="form-group col-md-6">
    <label for="cant">Cantidad</label>
    <input type="text" class="form-control" id="tt">
  </div>
  <div class="form-group col-md-6">
    <label for="precio">Precio</label>
    <input type="text" class="form-control" id="tt">
  </div>
  </div>
  <button id = "b" type="submit" class="btn btn-secondary btn-lg btn-block">Agregar producto</button>
  </form>
 
  
  <div id = "l">
  <a href="index.php">Regresar a Inicio</a>
  </div>
  <?php $_smarty_tpl->_subTemplateRender("file:Cabecera/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
