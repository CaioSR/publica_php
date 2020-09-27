## Esse projeto está disponível em csrshimada.com/publica_php

### Alternativamente você pode baixar esse projeto e no terminal:

- Instalar dependências :
    - npm install
    - composer install.

- Buildar CSS :
    - npm run build:css.

### E então:
- Importar o banco (arquivo publica_php.sql).
- Visualizar o arquivo config/db_config.php para redefinir nome da base, host, usuário e senha.

- Então abrir o index.php na pasta Public para rodar.

### Para rodar testes:
- ./vendor/bin/phpunit --bootstrap vendor/autoload.php tests/

#### Para roda um arquivo específico
- ./vendor/bin/phpunit --bootstrap vendor/autoload.php tests/<NOME-DO-ARQUIVO>.php