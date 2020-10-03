## Esse projeto está disponível em [crshimada.com/publica_php](https://crshimada.com/publica_php).

### Alternativamente você pode baixar esse projeto.
### Para instalar as dependências você vai precisar do NPM e do Composer.
### Caso não tenha eles instalados, baixe por aqui: 
- NPM : https://nodejs.org/en/download/
- Composer : https://getcomposer.org/download/

### Com eles instalados, rodar os comandos no terminal no diretório do projeto:

- Instalar dependências :
    - npm install
    - composer install.
    
### E então:
- Importar o banco (arquivo publica_php.sql).
- Visualizar o arquivo config/db_config.php para redefinir nome da base, host, usuário e senha.

- Então abrir o index.php na pasta Public para rodar.

### Para rodar testes:
- ./vendor/bin/phpunit --bootstrap vendor/autoload.php tests/

#### Para roda um arquivo específico
- ./vendor/bin/phpunit --bootstrap vendor/autoload.php tests/<NOME-DO-ARQUIVO>.php