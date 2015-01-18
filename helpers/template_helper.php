<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
/*
 * Autor: Eduardo Barbieri
 */
 
 /**
  * Seta parâmetro para ser utilizadona pagina
  * 
  * @param  chave   variavel que sera grada na pagina
  * @param  valor   valor do parâmetro
  * @param replace  caso o parâmetro ja exista, fazer replace ou concatenar
  *
 */
function set_parameter($chave, $valor, $replace = TRUE) {
	$CI = &get_instance();
	$CI->load->library('template');
	if ($replace) {
		$CI->template->parameters[$chave] = $valor;
	} else {
		if (!isset($CI->template->parameters[$chave])) {
			$CI->template->parameters[$chave] = '';
		}
		$CI->template->parameters[$chave] .= $valor;
	}
}


/**
 * Inicializa o template
 */

function init_template() {
	$CI = &get_instance();
    //Carrega biliotecas
    $CI->load->library(array('session', 'form_validation'));
    //Carrega helpers
	$CI->load->helper(array('form', 'array', 'text'));
    //Titulo padrão do site
	set_parameter('titulo_padrao', 'Template helper');    
    //View utilizada como template
	set_parameter('template', 'sample_template');
}

/**
 *  Crreaga pagina dentro do template configurado
 * @param page  pagina a ser carregada
 */
function load_page($page) {
	$CI = &get_instance();
	$CI->load->library('template');
	$conteudo = $CI->load->view($page, $CI->template->parameters, TRUE);
	set_parameter('_page_content_', $conteudo);
	$CI->load->view($CI->template->parameters['template'], $CI->template->parameters);
}

/**
 * Carrega um ou varios arquivos.js de uma pasta ou servidor remoto
 * @param   arquivo   nome do .js
 * @param   pasta   pasta que contem o arquivo .js
 * @param   remote scripet é remoto? caso sim ignora parâmetro pasta
 */

function add_js($arquivo = NULL, $pasta = 'js', $remoto = FALSE) {
    $retorno = '';
    if ($arquivo != NULL) {
        $CI = & get_instance();
        $CI->load->helper('url');
        if (is_array($arquivo)) {
            foreach ($arquivo as $js) {
                if ($remoto) {
                    $retorno .= '<script type="text/javascript" src="' . $js . '"> </script>';
                } else {
                    $retorno .= '<script type="text/javascript" src="' . base_url("$pasta/$js") . '.js"> </script>';
                }
            }
        } else {
            if ($remoto) {
                $retorno .= '<script type="text/javascript" src="' . $arquivo . '"> </script>';
            } else {
                $retorno .= '<script type="text/javascript" src="' . base_url("$pasta/$arquivo") . '.js"> </script>';
            }
        }
    }
    set_parameter('_js_add_', $retorno, FALSE) ;
}

/**
 * Carrega um ou varios arquivos .css de uma pasta ou servidor remoto
 * @param   arquivo   nome do .css
 * @param   pasta   pasta que contem o arquivo .css
 * @param   media   tipo de media setado no link
 */
function add_css($arquivo = NULL, $pasta = 'css', $media = 'all') {
    $retorno = '';
    if ($arquivo != NULL) {
        $CI = &get_instance();
        $CI->load->helper('url');
        if (is_array($arquivo)) {
            foreach ($arquivo as $css) {
                $retorno .= '<link rel="stylesheet" type="text/css" href="' . base_url("$pasta/$css.css") . '" media="' . $media . '"/>';
            }
        } else {
            $retorno = '<link rel="stylesheet" type="text/css" href="' . base_url("$pasta/$arquivo.css") . '" media="' . $media . '"/>';
        }
    }
    set_parameter('_css_add_', $retorno, FALSE) ;
}

