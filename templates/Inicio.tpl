{include file = "Cabecera/header.tpl"}
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
{include file = "Cabecera/footer.tpl"}