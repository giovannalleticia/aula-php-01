# Solução para Problemas de Permissão em Docker e Ajustes no PHP Include

Olá TADS24,

Para resolver os problemas de permissão nas pastas `public` e `scripts`, siga os passos abaixo. Também foi corrigido o caminho do `include` no arquivo `index.php`.

---

## 🔧 Passos para Resolver Problemas de Permissão

1. **Remova os contêineres e volumes antigos**
   Execute o comando abaixo para remover contêineres, volumes e evitar conflitos de cache:
   ```bash
   docker-compose down --volumes --remove-orphans
   ```

2. **Crie as pastas manualmente**
   Crie as pastas `public` e `scripts` **antes de subir os contêineres**: podendo ser com o mouse em new folder normalmente ou no terminal com o comando:

   ```bash
   mkdir -p public scripts
   ```

3. **Suba os contêineres novamente**
   Inicie os serviços em segundo plano:
   ```bash
   docker-compose up -d
   ```

---

## 📂 Correção do Include no `index.php`

O caminho do arquivo `aula01.php` foi ajustado para um caminho absoluto dentro do contêiner.

**Antes (Caminho Relativo Incorreto):**

```php
<?php include 'caminho/relativo/aula01.php'; ?>
```

**Depois (Caminho Absoluto Correto):**

```php
<?php include '/var/www/scripts/aula01.php'; ?>
```

---

## ⚠️ Observações Importantes

- **Volume no Docker:**
  Verifique no `docker-compose.yml` se o caminho `/var/www/scripts` está mapeado corretamente para a pasta local `scripts`. Exemplo:

  ```yaml
  volumes:
    - ./scripts:/var/www/scripts
  ```

- **Estrutura de pastas recomendada:**

  ```
  .
  ├── docker-compose.yml
  ├── public/
  │   └── index.php
  └── scripts/
      └── aula01.php
  ```

- **Dica:**
  Se o erro persistir, reinicie o Docker Desktop e verifique se não há processos antigos usando `docker ps -a`.

```

```
