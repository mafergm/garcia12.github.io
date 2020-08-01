<?php
/* Smarty version 3.1.34-dev-7, created on 2020-07-11 18:54:44
  from 'C:\xampp\htdocs\mafergm\inventarionum1\templates\Crear.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f09eed4d26cc9_88345561',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9990424e4141da222ca1325ee08552ffea697322' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mafergm\\inventarionum1\\templates\\Crear.tpl',
      1 => 1594486483,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabecera/header.tpl' => 1,
    'file:Cabecera/footer.tpl' => 1,
  ),
),false)) {
function content_5f09eed4d26cc9_88345561 (Smarty_Internal_Template $_smarty_tpl) {
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
