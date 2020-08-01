<?php
/* Smarty version 3.1.34-dev-7, created on 2020-07-12 13:59:42
  from '/home/vol5_5/tonohost.com/ottos_25991077/htdocs/templates/Default.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f0b4f8e6aa543_68769890',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '22b962f71ee119896e334e5010c0ea29a3e8a27b' => 
    array (
      0 => '/home/vol5_5/tonohost.com/ottos_25991077/htdocs/templates/Default.tpl',
      1 => 1594576749,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabecera/header.tpl' => 1,
    'file:Opciones.tpl' => 1,
    'file:Productos.tpl' => 1,
    'file:Inicio.tpl' => 1,
    'file:Cabecera/footer.tpl' => 1,
  ),
),false)) {
function content_5f0b4f8e6aa543_68769890 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Cabecera/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php if (isset($_smarty_tpl->tpl_vars['usuario']->value)) {
if ($_smarty_tpl->tpl_vars['puesto']->value == 'Administrador') {
$_smarty_tpl->_subTemplateRender('file:Opciones.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} else {
$_smarty_tpl->_subTemplateRender('file:Productos.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>

<?php } else {
$_smarty_tpl->_subTemplateRender('file:Inicio.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>

<?php $_smarty_tpl->_subTemplateRender("file:Cabecera/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
