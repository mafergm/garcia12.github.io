<?php
/* Smarty version 3.1.34-dev-7, created on 2020-07-11 18:53:29
  from 'C:\xampp\htdocs\mafergm\inventarionum1\templates\Habilitar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f09ee898677b2_46366845',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b9acd3217f7f265faf9611ba83090d4bb422e63' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mafergm\\inventarionum1\\templates\\Habilitar.tpl',
      1 => 1594486353,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabecera/header.tpl' => 1,
    'file:Cabecera/footer.tpl' => 1,
  ),
),false)) {
function content_5f09ee898677b2_46366845 (Smarty_Internal_Template $_smarty_tpl) {
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
