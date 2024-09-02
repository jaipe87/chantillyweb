<?php
/* Smarty version 3.1.34-dev-7, created on 2024-07-18 17:22:33
  from 'C:\xampp\htdocs\chantilly_smarty\chantilly\view\templates\checkout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_669995a95d40f7_21762719',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f22677da63ec6419f447a5f5cb85c1aaf8368be2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\chantilly_smarty\\chantilly\\view\\templates\\checkout.tpl',
      1 => 1721341351,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_669995a95d40f7_21762719 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_386935932669995a95caf99_80786342', "styles");
?>

</head>
<body>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1882429756669995a95d21a3_85033253', "content");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1966884762669995a95d38f9_21335545', "scripts");
}
/* {block "styles"} */
class Block_386935932669995a95caf99_80786342 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'styles' => 
  array (
    0 => 'Block_386935932669995a95caf99_80786342',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/css/style.css">
    <link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/images/icons/icono.png">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/css/media-queries.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/css/checkout.css">
    
    <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.5.1.min.js"><?php echo '</script'; ?>
>
    <?php
}
}
/* {/block "styles"} */
/* {block "content"} */
class Block_1882429756669995a95d21a3_85033253 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1882429756669995a95d21a3_85033253',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div id="checkout-container" class="container">
        <div class="form1" action="">
            <h2><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h2>
            <div class="seleccion">
                <div id="btndatos" onclick="mostrarSeccion('datos')">
                    <h4>Datos</h4>
                </div>
                <div id="btnentrega" onclick="mostrarSeccion('entrega')">
                    <h4>Entrega</h4>
                </div>
                <div id="btnpago" onclick="mostrarSeccion('pago')">
                    <h4>Pago</h4>
                </div>
            </div>
            <br>
            <!-- Seccion de ingreso de datos personales -->
            <div class="datos">
                <h3>DATOS PERSONALES</h3>
                <hr>
                <br>
                <form action="" onclick="validarFormulario()">
                    <input type="text" id="nombre" name="nombre" value="" placeholder="Nombre" width="100%" required />
                    <input type="text" id="apellidos" name="apellidos" value="" placeholder="Apellidos" width="100%"
                        required />
                    <input type="email" id="correo" name="correo" value="" placeholder="Correo" required />
                    <input type="tel" id="telefono" name="telefono" value="" placeholder="Teléfono" maxlength="9"
                        required />
                    <br>
                    <br>
                    <h3>DOCUMENTO</h3>
                    <hr>
                    <br>
                    <select name="" id="sltctipodocumento">
                        <option value="">DNI</option>
                        <option value="">Pasaporte</option>
                        <option value="">Carnet de Exranjeria</option>
                    </select>
                    <input type="input" id="txtdocumento" placeholder="Documento" maxlength="12">
                    <br>
                    <br>
                    <div class="botones-checkout"><button type="button" id="btnSiguiente"
                            onclick="mostrarSeccion('entrega')">Siguiente</button>
                        <!-- <button type="submit" id="btnSiguiente" onclick="mostrarSeccion('entrega')">Siguiente</button>
                        <p id="mensajeError" style="color: red;"></p>-->
                    </div>
                </form>
            </div>
            <div class="entrega">
                <h3>TIPO DE ENVIO</h3>
                <hr>
                <br>
                <label class="content-input" for="">
                    <input type="radio" id="recojoRadio" name="entrega">Recoger en tienda
                </label>
                <br>
                <label class="content-input" for="">
                    <input type="radio" id="deliveryRadio" name="entrega">Delivery
                </label>
                <br>
                <br>
                <div id="recojo-tienda">
                    <h4 id="eligeTienda">Elige el local más cercano a ti: </h4>
                    <div class="tiendas">
                        <div class="tienda" id="tienda1">
                            <h5>La Casa del Chantilly - Comas</h5>
                        </div>
                        <div class="tienda" id="tienda2">
                            <h5>La Casa del Chantilly - Av. Argentina - Callao</h5>
                        </div>
                        <div class="tienda" id="tienda3">
                            <h5>La Casa del Chantilly - Av. Bocanegra - Callao</h5>
                        </div>
                        <div class="tienda" id="tienda4">
                            <h5>La Casa del Chantilly - Av. Naranjal - Los Olivos</h5>
                        </div>
                        <div class="tienda" id="tienda5">
                            <h5>La Casa del Chantilly - Av. Marañon - Los Olivos</h5>
                        </div>
                        <div class="tienda" id="tienda6">
                            <h5>La Casa del Chantilly - Av. Próceres - Los Olivos</h5>
                        </div>
                        <div class="tienda" id="tienda7">
                            <h5>La Casa del Chantilly - Av. Habich - San Martin de Porres</h5>
                        </div>
                        <div class="tienda" id="tienda8">
                            <h5>La Casa del Chantilly San Felipe - Comas</h5>
                        </div>
                        <div class="tienda" id="tienda9">
                            <h5>La Casa del Chantilly - San Martin de Porres</h5>
                        </div>
                    </div>
                    <div class="direccionTienda">
                        <div class="direccion" id="direcTienda1">
                            <div class="direccionGroup">
                                <h3>La Casa del Chantilly Comas</h3>
                                <button id="btnTienda"><u>Cambiar tienda</u></button>
                            </div>
                            <h5>Av. Micaela Bastidas 135, Comas </h5>
                            <small>Abierto hasta las 8:00 p.m.</small>
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31230.623773898715!2d-77.0640982652344!3d-11.917057490758937!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105d0371c8b4c2b%3A0x1691945f262cdaf8!2sLa%20Casa%20del%20Chantilly!5e0!3m2!1ses-419!2spe!4v1704227298687!5m2!1ses-419!2spe"
                                width="540" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        <div class="direccion" id="direcTienda2">
                            <div class="direccionGroup">
                                <h3>La Casa del Chantilly Callao</h3>
                                <button id="btnTienda"><u>Cambiar tienda</u></button>
                            </div>
                            <h5>Centro comercial Minka, Av. Argentina 3093, Callao </h5>
                            <small>Abierto hasta las 9:00 p.m.</small>
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3901.9304251868853!2d-77.11381502579391!3d-12.048308041927715!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105cbf8fd08a5d3%3A0x598b4f808b8b2bc3!2sLa%20Casa%20del%20Chantilly!5e0!3m2!1ses-419!2spe!4v1704381152250!5m2!1ses-419!2spe"
                                width="540" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        <div class="direccion" id="direcTienda3">
                            <div class="direccionGroup">
                                <h3>La Casa del Chantilly Callao</h3>
                                <button id="btnTienda"><u>Cambiar tienda</u></button>
                            </div>
                            <h5> Manzana A, Lote 2, Av. Bocanegra, Callao </h5>
                            <small>Abierto hasta las 8:00 p.m.</small>
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62430.90825134803!2d-77.15244014939876!3d-12.048215817242689!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105ce83b1fe8aab%3A0xf88738a0cd15a0e4!2sLa%20Casa%20Del%20Chantilly!5e0!3m2!1ses-419!2spe!4v1704381768668!5m2!1ses-419!2spe"
                                width="540" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        <div class="direccion" id="direcTienda4">
                            <div class="direccionGroup">
                                <h3>La Casa del Chantilly Los Olivos</h3>
                                <button id="btnTienda"><u>Cambiar tienda</u></button>
                            </div>
                            <h5>Av. Naranjal 1492, Los Olivos </h5>
                            <small>Abierto hasta las 8:00 p.m.</small>
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31223.772011013858!2d-77.11877938916014!3d-11.976473799999987!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105ce6b2e94e3a7%3A0x4ef7c58d5e23dd8!2sLa%20Casa%20del%20Chantilly!5e0!3m2!1ses-419!2spe!4v1704382290315!5m2!1ses-419!2spe"
                                width="540" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>

                        </div>
                        <div class="direccion" id="direcTienda5">
                            <div class="direccionGroup">
                                <h3>La Casa del Chantilly Los Olivos</h3>
                                <button id="btnTienda"><u>Cambiar tienda</u></button>
                            </div>
                            <h5>Av. Marañon 650, Los Olivos </h5>
                            <small>Abierto hasta las 8:00 p.m.</small>
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31223.772011013858!2d-77.11877938916014!3d-11.976473799999987!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105cf947d7cb367%3A0x6d8a88427326332d!2sLa%20Casa%20del%20Chantilly!5e0!3m2!1ses-419!2spe!4v1704382353996!5m2!1ses-419!2spe"
                                width="540" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>

                        </div>
                        <div class="direccion" id="direcTienda6">
                            <div class="direccionGroup">
                                <h3>La Casa del Chantilly Los Olivos</h3>
                                <button id="btnTienda"><u>Cambiar tienda</u></button>
                            </div>
                            <h5>Av. Próceres 7823, Los Olivos </h5>
                            <small>Abierto hasta las 8:00 p.m.</small>
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31228.25691343522!2d-77.10976758916016!3d-11.93761509999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105d13c68439927%3A0x513abc2e208e5408!2sLa%20Casa%20del%20Chantilly%20Pro!5e0!3m2!1ses-419!2spe!4v1704382722784!5m2!1ses-419!2spe"
                                width="540" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>

                        </div>
                        <div class="direccion" id="direcTienda7">
                            <div class="direccionGroup">
                                <h3>La Casa del Chantilly San Martin de Porres</h3>
                                <button id="btnTienda"><u>Cambiar tienda</u></button>
                            </div>
                            <h5>Av. Eduardo de Habich 502-569, San Martín de Porres </h5>
                            <small>Abierto hasta las 8:00 p.m.</small>
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d124913.13029527546!2d-77.1715706656839!3d-11.937392411185494!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105cfc8f5b6eb79%3A0x3f10ae8a81d75cba!2sla%20casa%20del%20chantilly!5e0!3m2!1ses-419!2spe!4v1704382984877!5m2!1ses-419!2spe"
                                width="540" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        <div class="direccion" id="direcTienda8">
                            <div class="direccionGroup">
                                <h3>La Casa del Chantilly San Martin de Porres</h3>
                                <button id="btnTienda"><u>Cambiar tienda</u></button>
                            </div>
                            <h5>FRENTE AL, Sta. Maria De Los Angeles 664, San Martín de Porres </h5>
                            <small>Abierto hasta las 10:00 p.m.</small>
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d124913.13029527546!2d-77.1715706656839!3d-11.937392411185494!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105d12bcaf4086b%3A0x2e323a61e73ee07f!2sLA%20CASA%20DEL%20CHANTILLY!5e0!3m2!1ses-419!2spe!4v1704383182436!5m2!1ses-419!2spe"
                                width="540" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        <div class="direccion" id="direcTienda9">
                            <div class="direccionGroup">
                                <h3>La Casa del Chantilly Comas</h3>
                                <button id="btnTienda"><u>Cambiar tienda</u></button>
                            </div>
                            <h5>Av. Universitaria 10677, Comas</h5>
                            <small>Abierto hasta las 11:00 p.m.</small>
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31230.623773898715!2d-77.0640982652344!3d-11.917057490758937!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105d0f14fff9ff3%3A0xd199b90d1fcf783e!2sLa%20Casa%20Del%20Chantilly%20San%20Felipe!5e0!3m2!1ses-419!2spe!4v1704236445714!5m2!1ses-419!2spe"
                                width="540" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>

                        </div>
                    </div>
                    <br>
                </div>
                <div id="delivery">
                    <h5>Nombres y contacnos</h5>
                    <input type="text" id="nombred" name="nombred" value="" placeholder="Nombre" width="100%" />
                    <input type="text" id="apellidosd" name="apellidosd" value="" placeholder="Apellidos"
                        width="100%" />
                    <input type="email" id="correod" name="correod" value="" placeholder="Correo" />
                    <input type="tel" id="telefonod" name="telefonod" value="" placeholder="Teléfono" maxlength="9" />
                    <select name="departamento" id="sltcDepartamento" placeholder="Departamento"
                        onchange="actualizarDistritos()">
                        <option value="" disabled selected>Departamento</option>
                        <option value="Lima">Lima</option>
                        <option value="Callao">Callao</option>
                    </select>
                    <select name="distrito" id="sltcDistrito" placeholder="Distrito">
                        <option value="" disabled selected>Distrito</option>
                        <option value="Ancon" class="lima">Ancón</option>
                        <option value="Ate" class="lima">Ate Vitarte</option>
                        <option value="Barranco" class="lima">Barranco</option>
                        <option value="Bellavista" class="callao">Bellavista</option>
                        <option value="Breña" class="lima">Breña</option>
                        <option value="Callao" class="callao">Callao</option>
                        <option value="Carabayllo" class="lima">Carabayllo</option>
                        <option value="Carmen" class="callao">Carmen de la Legua</option>
                        <option value="Chaclacayo" class="lima">Chaclacayo</option>
                        <option value="Chorrillos" class="lima">Chorrillos</option>
                        <option value="Cieneguilla" class="lima">Cieneguilla</option>
                        <option value="Comas" class="lima">Comas</option>
                        <option value="Agustino" class="lima">El Agustino</option>
                        <option value="Independencia" class="lima">Independencia</option>
                        <option value="JMaria" class="lima">Jesús Maria</option>
                        <option value="Molina" class="lima">La Molina</option>
                        <option value="Victoria" class="lima">La Victoria</option>
                        <option value="Lince" class="lima">Lince</option>
                        <option value="Olivos" class="lima">Los Olivos</option>
                        <option value="Lurigancho" class="lima">Lurigancho</option>
                        <option value="Magdalena" class="lima">Magdalena</option>
                        <option value="Miraflores" class="lima">Miraflores</option>
                        <option value="MiPeru" class="lima">Mi Perú</option>
                        <option value="Pachacamac" class="lima">Pachacamac</option>
                        <option value="PuebloLibre" class="lima">Pueblo Libre</option>
                        <option value="PuntaHermosa" class="lima">Punta Hermosa</option>
                        <option value="PuntaNegra" class="lima">Punta Negra</option>
                        <option value="Pucusana" class="lima">Pucusana</option>
                        <option value="PuentePiedra" class="lima">Puente Piedra</option>
                        <option value="Rimac" class="lima">Rimac</option>
                        <option value="Bartolo" class="lima">San Bartolo</option>
                        <option value="SanBorja" class="lima">San Borja</option>
                        <option value="Isidro" class="lima">San Isidro</option>
                        <option value="SanLuis" class="lima">San Luis</option>
                        <option value="SanMiguel" class="lima">San Miguel</option>
                        <option value="SJuanLurigancho" class="lima">San Juan de Lurigancho</option>
                        <option value="SJaunMiraflores" class="lima">San Juan de Miraflores</option>
                        <option value="SMP" class="lima">San Martin de Porres</option>
                        <option value="SantaAnita" class="lima">Santa Anita</option>
                        <option value="SantaMaria" class="lima">Santa María</option>
                        <option value="SantaRosa" class="lima">Santa Rosa</option>
                        <option value="Surco" class="lima">Santiago de Surco</option>
                        <option value="Surquillo" class="lima">Surquillo</option>
                        <option value="Ventanilla" class="callao">Ventanilla</option>
                        <option value="VMT" class="lima">Villa Maria del Triunfo</option>
                        <option value="VillaSalvador" class="lima">Villa el Salvador</option>
                        <option value="VillaMaria" class="lima">Villa Maria</option>
                        <option value="Perla" class="callao">La Perla</option>
                        <option value="Punta" class="callao">La Punta</option>
                        <option value="Lurin" class="lima">Lurín</option>
                    </select>
                    <input type="text" id="calle" name="calle" value="" placeholder="Nro/Piso/Mz/Lt" />
                    <input type="text" id="referencia" name="referencia" value="" placeholder="Referencia" />
                    <br>
                    <br>
                    <h4>SERVICIO DE ENVIO</h4>
                    <div class="pago-delivery">
                        <h4>S/5.00 &nbsp; &nbsp; (LIMA - CALLAO)</h4>
                    </div>
                    <br>
                </div>
                <div class="botones-checkout">
                    <button type="button" id="btnVolver" onclick="mostrarSeccion('datos')">Regresar</button>
                    <button type="submit" id="btnSiguiente" onclick="mostrarSeccion('pago')">Siguiente</button>
                </div>
            </div>
            <div class="pago">
                <h3>PAGOS</h3>
                <hr>
                <br>
                <!--  
                <div class="botonesPago">
                    <input type="radio" id="notaRadio" name="tarjeta" />
                    <label for="notaRadio">Pago con Nota de crédito</label>
                </div>-->
                <div class="botonesPago">
                    <input type="radio" id="tarjetaCDRadio" name="tarjeta" />
                    <label for="tarjetaRadio">Pago con tarjeta de crédito o débito</label><br />
                </div>
                <div class="botonesPago">
                    <input type="radio" id="agenciaRadio" name="tarjeta" />
                    <label for="agenciaRadio">Pago en agencia o banca electrónica</label><br />
                </div>
                <div class="botonesPago">
                    <input type="radio" id="billeteraRadio" name="tarjeta" />
                    <label for="billeteraRadio">Billetera Electrónica</label>
                </div>
                <!-- 
                <div id="nota">
                    <h4>Pago con nota de crédito</h4>
                    <input type="text" name="" id="serieInput" maxlength="4" placeholder="Serie">
                    <input type="text" name="" id="nronotaInput" maxlength="10" placeholder="Número">
                    <select name="" id="notaLocalesOption">
                        <option value="">La Casa de Chantilly - Comas</option>
                        <option value=""> La Casa del Chantilly - SMP</option>
                        <option value="">La Casa del Chantilly -Rimac</option>
                        <option value="">La Casa del Chantilly - Los Olivos</option>
                        <option value="">La Casa del Chantilly - Callao</option>
                    </select>
                    <input type="date" name="" id="fechaInput" placeholder="Fecha">
                    <input type="input" name="" id="nroDocInput" maxlength="12" placeholder="Nro Documento del cliente">
                    <input type="input" name="" id="refserieInput" maxlength="4" placeholder="Ref Series">
                    <input type="input" name="" id="refnumeroInput" maxlength="10" placeholder="Ref Número">
                    <br>
                    <br>
                </div> -->
                <div id="tarjetaCD">
                    <h4>Tarjeta crédito o débito</h4>
                    <input type="text" name="" id="nombrePInput" placeholder="Nombre del Titular">
                    <input type="text" name="" id="nrotarjetaInput" max="16" placeholder="Número de Tarjeta">
                    <div class="datosTarjeta">
                        <div class="mesTarjeta">
                            <h6>Mes Expiración</h6>
                            <select name="" id="sltcMes" aria-placeholder="Mes d">
                                <option value="">Enero</option>
                                <option value="">Febrero</option>
                                <option value="">Marzo</option>
                                <option value="">Abril</option>
                                <option value="">Mayo</option>
                                <option value="">Junio</option>
                                <option value="">Julio</option>
                                <option value="">Agosto</option>
                                <option value="">Septiembre</option>
                                <option value="">Obtubre</option>
                                <option value="">Noviembre</option>
                                <option value="">Diciembre</option>
                            </select>
                        </div>
                        <div class="añoTarjeta">
                            <h6>Año de Expiración</h6>
                            <select name="" id="sltcAño">
                                <option value="">2024</option>
                                <option value="">2025</option>
                                <option value="">2026</option>
                                <option value="">2027</option>
                                <option value="">2028</option>
                                <option value="">2029</option>
                                <option value="">2030</option>
                            </select>
                        </div>
                        <div class="cvvTarjeta">
                            <h6>CVV</h6>
                            <input type="tel" placeholder="CVV" maxlength="3">
                        </div>
                    </div>
                    <br>
                </div>
                <div id="agencia">
                    <h4>Agrega tu número de tarjeta crédito o débito</h4>
                    <input type="text" name="" id="agenciaInput" maxlength="16">
                    <br>
                    <br>
                </div>
                <div id="billeteras">
                    <h4>Agrega tu número de tarjeta crédito o débito</h4>
                    <input type="text" name="" id="billeterasInput" maxlength="16">
                    <br>
                    <br>
                </div>
                <div class="botones-checkout">
                    <button type="button" id="btnVolver" onclick="mostrarSeccion('entrega')">Regresar</button>
                    <button type="submit" id="btnFinalizar">Finalizar</button>
                </div>
            </div>
        </div>
        <form class="form2" action="">
            <h2>Detalle Compra</h2>
            <br>
            <table id="tableProducts">
                <thead>
                    <th>Imagen</th>
                    <th>Producto</th>
                    <th>Cantidad</th>
                    <th>Precio</th>
                </thead>
                <tbody id="tbodyProducts">
                    <!-- Aqui se agregan los objetos obtenidos del carrito -->
                </tbody>
            </table>
            <hr>
            <br>
            <div class="envioCheckout">
                <h4>Envio:</h4>
                <h4>S/<span id="envio">0</span>.00</h4>
            </div>
            <div class="subtotalCheckout">
                <h4>Subtotal:</h4>
                <h4 id="montoSubT"></h4>
            </div>
            <br>
            <hr>
            <div class="totalCheckout">
                <h4>TOTAL:</h4>
                <h4 id="total"></h4>
            </div>
            <!-- <button type="button" onclick="getValueInput()">
                click me!!
            </button> -->
            <div class="botones-checkout">
                <button type="button">Imprimir</button>
                <br>
                <a href="<?php echo $_smarty_tpl->tpl_vars['RUTA_HTTP']->value;?>
/Carrito"> &#8592; Seguir comprando</a>
            </div>
            <div id="obtener-datos">
                <!-- Se obtendran todos los datos -->
            </div>
        </form>
    </div>
<?php
}
}
/* {/block "content"} */
/* {block "scripts"} */
class Block_1966884762669995a95d38f9_21335545 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_1966884762669995a95d38f9_21335545',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/js/chantillyjs/checkout.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block "scripts"} */
}
