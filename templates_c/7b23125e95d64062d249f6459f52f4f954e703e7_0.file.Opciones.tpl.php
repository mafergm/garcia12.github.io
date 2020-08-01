<?php
/* Smarty version 3.1.34-dev-7, created on 2020-07-12 14:07:14
  from '/home/vol5_5/tonohost.com/ottos_25991077/htdocs/templates/Opciones.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f0b5152d6f465_32485976',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7b23125e95d64062d249f6459f52f4f954e703e7' => 
    array (
      0 => '/home/vol5_5/tonohost.com/ottos_25991077/htdocs/templates/Opciones.tpl',
      1 => 1594576751,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabecera/header.tpl' => 1,
    'file:Crear.tpl' => 1,
    'file:Habilitar.tpl' => 1,
    'file:Inventario.tpl' => 1,
    'file:Cabecera/footer.tpl' => 1,
  ),
),false)) {
function content_5f0b5152d6f465_32485976 (Smarty_Internal_Template $_smarty_tpl) {
?>  <?php $_smarty_tpl->_subTemplateRender("file:Cabecera/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  </br>
  <div class = "container">
    <h1><strong>Inventario</strong></h1>
<div id="icono">
 <svg id="icono2"class="bi bi-person-check-fill" viewBox="0 0 16 16" fill="white" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm9.854-2.854a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
</svg></div>
<div id="c">
 <h3>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $_smarty_tpl->tpl_vars['puesto']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['usuario']->value;?>
.</h3></div> </br></br>
 <h4 id="g">&nbsp&nbsp&nbspSeleccione una opci&oacute;n:</h4>
  <h5><strong></strong></h5>
    </div> 

    <div class = "container2">
  <form id = "f" method="post" action="?controller=User&action=op">

    </br>
      <a href= "?controller=Operacion&action=pantallacrear">Crear Usuario</a></br></br>
       <a href= "?controller=Operacion&action=pantallainventario">Ver Inventario</a></br></br>
      <a href= "?controller=Operacion&action=pantallahabilitar">Habilitar/Deshabilitar Usuarios</a></br></br>
       <a href="index.php">Regresar a Inicio</a>
     
  </form></div>
      <div class = "container3">
  <?php if (isset($_smarty_tpl->tpl_vars['pantalla']->value)) {?>
  <?php if ($_smarty_tpl->tpl_vars['pantalla']->value == "pc") {?>
  <?php $_smarty_tpl->_subTemplateRender('file:Crear.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php } elseif ($_smarty_tpl->tpl_vars['pantalla']->value == "ph") {?>
  <?php $_smarty_tpl->_subTemplateRender('file:Habilitar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php } elseif ($_smarty_tpl->tpl_vars['pantalla']->value == "pi") {?>
  <?php $_smarty_tpl->_subTemplateRender('file:Inventario.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  <?php } else { ?>

  <?php }?>

  <?php } else { ?>
  <?php }?>
  </div>

  <?php $_smarty_tpl->_subTemplateRender("file:Cabecera/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
