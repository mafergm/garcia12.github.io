<?php
/* Smarty version 3.1.34-dev-7, created on 2020-07-29 19:53:26
  from 'C:\xampp\htdocs\mafergm\inventarionum1\templates\Inicio.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f21b7964d89e5_00404882',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'abfc6abd5f8ab5c9dff9fba59730d7d6429416b8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mafergm\\inventarionum1\\templates\\Inicio.tpl',
      1 => 1596042005,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabecera/header.tpl' => 1,
    'file:Cabecera/footer.tpl' => 1,
  ),
),false)) {
function content_5f21b7964d89e5_00404882 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Cabecera/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</br>  </br>  </br> </br></br> </br></br>
  <div id="container3">
<svg class="bi bi-house-door" width="130px" height="150px" viewBox="0 0 16 16" fill="white" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M7.646 1.146a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 .146.354v7a.5.5 0 0 1-.5.5H9.5a.5.5 0 0 1-.5-.5v-4H7v4a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .146-.354l6-6zM2.5 7.707V14H6v-4a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5v4h3.5V7.707L8 2.207l-5.5 5.5z"/>
  <path fill-rule="evenodd" d="M13 2.5V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
</svg> 

<form method = "post" action="?controller=User&action=validar">
  <div class="form-row">
    <div class="form-group col-md-6">
      
      <input id = "usuario" type="text" class="form-control" id="tt" name = "usuario" placeholder="Usuario">
    </div>
    <div class="form-group col-md-6">
      <input type="password" class="form-control" id="inputPassword4" name = "pass" placeholder="Contrase&ntilde;a">
    </div>
  </div>
  
      <button id = "a" type="submit" class="btn btn-secondary btn-lg btn-block">Entrar</button>
    
  </form></div></br></div>
<?php $_smarty_tpl->_subTemplateRender("file:Cabecera/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
