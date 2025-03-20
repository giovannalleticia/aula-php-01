# Solução para Problemas de Permissão em Docker e Ajustes no PHP Include

Olá TADS24,

Para resolver os problemas de de instalar o drive para comunciar com o banco
---

## 🔧 Passos para Resolver Problemas do Banco

1. **Remova os contêineres e volumes antigos**
   Execute o comando abaixo para remover contêineres, volumes e evitar conflitos de cache:
   ```bash
   docker-compose down --volumes --remove-orphans
   ```

2. **Ajuste o docker-compose**
    Consegui ajustar pode remover o dockerfile, materemos simples somente ajustando o command para:
   ```yml
    php-web:
      image: php:8.2-apache
      ports:
        - "8080:80"
      volumes:
        - ./php/public:/var/www/html # Pasta pública
        - ./php/scripts-php:/var/www/scripts # Scripts PHP
      networks:
        - php-network
      command: >
        bash -c "docker-php-ext-install pdo pdo_mysql && apache2-foreground"

   ```

3. **Suba os contêineres novamente**
   Inicie os serviços em segundo plano rebuildando :
   ```bash
   docker-compose up --build -d
   ```

---

## 🔧 Fiz pequnas alterações no resultado para poder realizar a inserção mas não mudou muito do que fizemos em sala e foi adicionado o css ao index.php para quem quiser estilizar

também foi alterado o apontamento de localhost para o nome "mysql" pq faz referencia ao conteiner que tem esse nome.

```php

class DB {
    private $HOST = 'mysql';
}
```