<?php
/* Smarty version 3.1.34-dev-7, created on 2020-07-12 14:07:21
  from '/home/vol5_5/tonohost.com/ottos_25991077/htdocs/templates/Habilitar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f0b515992dcf1_14878415',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4aa1ae0b1dfd8f946f64e537c665bd4769ac4394' => 
    array (
      0 => '/home/vol5_5/tonohost.com/ottos_25991077/htdocs/templates/Habilitar.tpl',
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
function content_5f0b515992dcf1_14878415 (Smarty_Internal_Template $_smarty_tpl) {
?> <?php $_smarty_tpl->_subTemplateRender("file:Cabecera/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class ="container4">
  
    <h5><strong>Habilitar/Desahibilitar Usuarios</strong></h5>  <div id="s">
<form>
  <div class="form-row">
  <div class="form-group col-md-6">
    <label for="user">Usuario</label>
    <input type="text" class="form-control" id="tt">
  </div>
  <div class="form-group col-md-6">
  <label for="puesto">Puesto</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>Administrador</option>
      <option>Trabajador</option>
      </select>
  </div>
  </div>
    <div class="form-group">
  <label for="puesto">Estado</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>Habilitado</option>
      <option>Desahibilitado</option>
      </select>
  </div>
   <button id = "b" type="submit" class="btn btn-secondary btn-lg btn-block">Actualizar</button>
    </form>
  </div></div>
  
<?php $_smarty_tpl->_subTemplateRender("file:Cabecera/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
