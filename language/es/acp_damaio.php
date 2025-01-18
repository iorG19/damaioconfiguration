<?php
/**
 *
 * Damaïo style configuration extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2023 - cabot
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = [];
}
// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ « » “ ” …
//
$lang = array_merge($lang, [
	'ACP_DAMAIO_ENABLE'					=> 'Habilitar extensión',
	'ACP_DAMAIO_ENABLE_EXPLAIN'			=> 'Si está deshabilitada, solo los miembros del grupo "Administradores" verán los cambios, lo que le permitirá configurar el estilo sin molestar a los usuarios.',
	'ACP_DAMAIO_HEADING'				=> 'Configuración estilo Damaïo',
	'ACP_DAMAIO_PREVIEW'				=> 'Vista previa de los cambios',
	'ACP_DAMAIO_PREVIEW_EXPLAIN'		=> 'Haga clic en el botón para mostrar la vista previa de los cambios <b>validados</b>.',
	'ACP_DAMAIO_LOGO'					=> 'Logotipo',
	'ACP_DAMAIO_LOGO_PATH'				=> 'Ubicación del logotipo',
	'ACP_DAMAIO_LOGO_PATH_EXPLAIN'		=> 'Introduzca la URL completa (e.g., <code>https://ioforos.com/images/icons/logo.svg</code>) o la ruta relativa a la raíz del sitio (e.g., <code>images/icons/logo.svg</code>).<br>Deje el campo vacío para utilizar el logotipo original, en cuyo caso las dimensiones ingresadas a continuación no tendrán efecto.',
	'ACP_DAMAIO_LOGO_WIDTH'				=> 'Anchura del logotipo',
	'ACP_DAMAIO_LOGO_HEIGHT'			=> 'Altura del logotipo',
	'ACP_DAMAIO_COLORS'					=> 'Colores',
	'ACP_DAMAIO_COLORS_EXPLAIN'			=> 'Puede establecer colores personalizados o dejar los campos vacíos para utilizar los colores originales del estilo.',
	'ACP_DAMAIO_COLOR_PICKER'			=> 'Habilitar selector de color',
	'ACP_DAMAIO_COLOR_PICKER_EXPLAIN'	=> 'Si esta opción está deshabilitada, los usuarios no podrán modificar los colores del estilo.',
	'ACP_DAMAIO_MAINCOLOR1'				=> 'Color 1',
	'ACP_DAMAIO_MAINCOLOR1_EXPLAIN'		=> 'Color de los bloques principales y botones.',
	'ACP_DAMAIO_MAINCOLOR2'				=> 'Color 2',
	'ACP_DAMAIO_MAINCOLOR2_EXPLAIN'		=> 'Color de los enlaces al pasar el mouse sobre ellos.',
	'ACP_DAMAIO_MAINCOLOR3'				=> 'Color 3',
	'ACP_DAMAIO_MAINCOLOR3_EXPLAIN'		=> 'Color de los botones al pasar el mouse sobre ellos.',
	'ACP_DAMAIO_LAYOUT'					=> 'Diseño',
	'ACP_DAMAIO_MODAL_LOGIN'			=> 'Ventana de inicio de sesión modal',
	'ACP_DAMAIO_MODAL_LOGIN_EXPLAIN'	=> 'Permite mostrar el formulario de inicio de sesión en una ventana modal.',
	'ACP_DAMAIO_STICKYNAV'				=> 'Barra de navegación fija',
	'ACP_DAMAIO_STICKYNAV_EXPLAIN'		=> 'Mantiene visible la barra del menú principal al desplazarse.',
	'ACP_DAMAIO_HEADER_WIDTH'			=> 'Mostrar encabezado en ancho completo',
	'ACP_DAMAIO_FOOTER_WIDTH'			=> 'Mostrar pie de página en ancho completo',
	'ACP_DAMAIO_PASSWORD_SHOW'			=> 'Visualización de contraseña',
	'ACP_DAMAIO_PASSWORD_SHOW_EXPLAIN'	=> 'Permite agregar un icono para mostrar/ocultar la contraseña.',
	'ACP_DAMAIO_MAIN_WIDTH'				=> 'Ancho máximo del estilo',
	'ACP_DAMAIO_MAIN_WIDTH_EXPLAIN'		=> 'Establezca aquí el ancho del contenido del sitio.<br>Ingrese el valor "<code>none</code>" para mostrar todo el estilo en ancho completo.<br>Deje el campo vacío para usar el valor original.',
	'ACP_DAMAIO_FOOTER_ICONS'			=> 'Iconos de pie de página',
	'ACP_DAMAIO_FOOTER_ICONS_EXPLAIN'	=> 'Introduzca una URL para mostrar el icono del campo correspondiente. Deje el campo vacío para no mostrar el icono.',
	'ACP_DAMAIO_DEVIANTART'				=> 'DeviantArt',
	'ACP_DAMAIO_FACEBOOK'				=> 'Facebook',
	'ACP_DAMAIO_FLICKR'					=> 'Flickr',
	'ACP_DAMAIO_GITHUB'					=> 'GitHub',
	'ACP_DAMAIO_INSTAGRAM'				=> 'Instagram',
	'ACP_DAMAIO_LINKEDIN'				=> 'LinkedIn',
	'ACP_DAMAIO_PINTEREST'				=> 'Pinterest',
	'ACP_DAMAIO_REDDIT'					=> 'Reddit',
	'ACP_DAMAIO_SKYPE'					=> 'Skype',
	'ACP_DAMAIO_SNAPCHAT'				=> 'Snapchat',
	'ACP_DAMAIO_SOUNDCLOUD'				=> 'SoundCloud',
	'ACP_DAMAIO_STEAM'					=> 'Steam',
	'ACP_DAMAIO_TUMBLR'					=> 'Tumblr',
	'ACP_DAMAIO_TWITTER'				=> 'Twitter',
	'ACP_DAMAIO_WHATSAPP'				=> 'WhatsApp',
	'ACP_DAMAIO_YOUTUBE'				=> 'YouTube',
	'ACP_DAMAIO_FEED'					=> 'Icono de feed',
	'ACP_DAMAIO_FEED_EXPLAIN'			=> 'Para mostrar este ícono es necesario que los feeds estén habilitados en la "<a href="%1$s">Configuración de feeds</a>".',
	'ACP_DAMAIO_ADVANCED_CUSTOM'		=> 'Personalización avanzada',
	'ACP_DAMAIO_CUSTOM_CSS'				=> 'Reglas CSS',
	'ACP_DAMAIO_CUSTOM_CSS_EXPLAIN'		=> 'Añade aquí tus reglas <a href="https://www.w3schools.com/css/css_syntax.asp" title="Abre en nueva pestaña" target="_blank">CSS personalizadas <i class="fa fa-external-link" aria-hidden="true"></i></a>.',
	'ACP_DAMAIO_STYLE_DEACTIVATED'		=> 'El estilo <b>damaïo</b> está instalado pero actualmente está desactivado. Sin embargo, puedes gestionar los ajustes de configuración y visualizar la vista previa.<br>Haz clic <a href="%1$s">aquí</a> para acceder a la página de Gestión de estilos y activar damaïo.',
	'ACP_DAMAIO_STYLE_NOT_FOUND'		=> 'El estilo <b>damaïo</b> no está instalado o su archivo de configuración no se ha encontrado en el directorio <code>styles/damaio/</code>.<br>Asegúrese de que el estilo esté instalado en el directorio esperado.<br><br>Descargue el estilo en la versión mayor o igual a <b>%1$s</b> desde la <a href="%2$s" target="_blank" title="Abre en una nueva pestaña">base de datos de estilos phpBB <i class="fa fa-external-link" aria-hidden="true"></i></a> o el <a href="%3$s" title="Abre en una nueva pestaña" target="_blank">repositorio de GitHub <i class="fa fa-external-link" aria-hidden="true"></i></a>.<br>Haga clic <a href="%4$s">aquí</a> para acceder a la página de instalación de estilos.',
	'ACP_DAMAIO_STYLE_INCOMPATIBLE'		=> 'La versión <b>%1$s</b> del estilo <b>damaïo</b> es incompatible con esta extensión.<br>Descargue la versión <b>%2$s</b> o superior desde la <a href="%3$s" target="_blank" title="Abre en una nueva pestaña">base de datos de estilos phpBB <i class="fa fa-external-link" aria-hidden="true"></i></a> o desde el <a href="%4$s" title="Abre en una nueva pestaña" target="_blank">repositorio de GitHub <i class="fa fa-external-link" aria-hidden="true"></i></a>.',
	'ACP_DAMAIO_SAVE'					=> 'Configuración de estilo Damaïo guardada.',
]);
