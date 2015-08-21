Instalação
--------

 * passo a passo do composer.json
 * baixar o skeleton  http://github/diego3/silex-skeleton
 * rodar o composer  composer install
 * executar a aplicação

Configuração do Apache
-------

Arquivo necessário para funcionamento da aplicação

abra o arquivo httpd-vhost.conf no seu sistema operacional e adicione o seguinte:

```html
<VirtualHost *:80>
     ServerName mydomain.local
     DocumentRoot "path/to/my/project/public"
     SetEnv APPLICATION_ENV "development"
     <Directory "path/to/my/project/public">
         DirectoryIndex index.php
         AllowOverride All
         Order allow,deny
         Allow from all
     </Directory>
 </VirtualHost>
```

