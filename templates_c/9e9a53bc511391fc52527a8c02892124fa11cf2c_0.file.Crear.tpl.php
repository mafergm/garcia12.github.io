<?php
/* Smarty version 3.1.34-dev-7, created on 2020-07-12 14:07:17
  from '/home/vol5_5/tonohost.com/ottos_25991077/htdocs/templates/Crear.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f0b5155f3b353_69513625',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9e9a53bc511391fc52527a8c02892124fa11cf2c' => 
    array (
      0 => '/home/vol5_5/tonohost.com/ottos_25991077/htdocs/templates/Crear.tpl',
      1 => 1594576749,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabecera/header.tpl' => 1,
    'file:Cabecera/footer.tpl' => 1,
  ),
),false)) {
function content_5f0b5155f3b353_69513625 (Smarty_Internal_Template $_smarty_tpl) {
?>  <?php $_smarty_tpl->_subTemplateRender("file:Cabecera/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <div id="container1">
    <h4><strong>Crear Usuario</strong></h4>
<form>
  <div class="form-row">
    <div class="form-group col-md-6">
       <label for="user">Usuario</label>
      <input type="text" class="form-control" id="tt">
    </div>
    <div class="form-group col-md-6">
     <label for="pass">Contrase&ntilde;a</label>
      <input type="password" class="form-control" id="inputPassword4">
    </div>
  </div>
   <div class="form-group">
     <label for="puesto">Puesto</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>Administrador</option>
      <option>Trabajador</option>
      </select>
      </div>
      <button id = "b" type="submit" class="btn btn-secondary btn-lg btn-block">Crear</button>
  </form></div>
 
 
   <?php $_smarty_tpl->_subTemplateRender("file:Cabecera/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
