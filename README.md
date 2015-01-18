# codeigniter-template-helper
Simple template helper for codeigniter

## Funções do helper

* init_template : inicializa template;
* set_parameter : seta parâmetro para ser usado na view;
* add_js : adiciona arquivo js na pagina;
* add_css : adiciona arquivo css na pagina;
* load_page : carrega view;

##	Instalação:

Editar o arquivo /application/config/autoload.php e adicionar o template helper:
```php
	$autoload['helper'] = array('template');
```
Copiar os arquivos das pastas helpers e libraries;

## Configuração

Editar função init_template do arquivo template_helper.php e setar o arquivo usado como template e titulo padrão

```php
function init_template() {
	$CI = &get_instance();
    //Titulo padrão do site
	set_parameter('titulo_padrao', 'Template helper');    
    //View utilizada como template
	set_parameter('template', 'sample_template');
}
```
## Uso

--No arquivo de template usar as variáveis:
* $_css_add_ : Css adicional
* $_page_content_ : Conteudo
* $_js_add_ : js adicional

-Chamar metodo init_template no construtor dos controlers:
```php
public function __construct() {
        parent::__construct();
        init_template();
}
```

-- Nas action dos controllers, usar o método set_parameter para setar variáveis na pagina, e load_page para carrega view dentro do tempalte
```php
public function index() {
        set_parameter('name', 'CodeIgniter');
        set_parameter('title', 'Simple template helper CodeIgniter');
        load_page('home');
}
```
