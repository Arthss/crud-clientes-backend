# ⚙️ CRUD de Clientes - Backend (Laravel)

Projeto backend desenvolvido em Laravel para estudo de APIs REST e modelagem de dados.

---

## 🧠 Sobre o projeto

Este backend foi criado com o objetivo de:

* Modelar estrutura de dados de clientes
* Implementar um CRUD completo com Laravel
* Servir como base para integração com frontend

Atualmente, o projeto frontend utiliza **Supabase como backend principal**, tornando este repositório um ambiente de apoio e aprendizado.

---

## 🛠️ Tecnologias

* Laravel
* PHP
* Eloquent ORM
* MySQL / SQLite

---

## ⚙️ Como rodar localmente

```bash id="laravelrun"
git clone https://github.com/Arthss/crud-clientes-backend
cd crud-clientes-backend

composer install
cp .env.example .env
php artisan key:generate

php artisan migrate
php artisan serve
```

---

## 📌 Endpoints (local)

* GET /api/clientes
* POST /api/clientes
* PUT /api/clientes/{id}
* DELETE /api/clientes/{id}

---

## 🎯 Objetivo

* Praticar construção de APIs REST
* Entender fluxo backend completo
* Servir como base para evolução futura (deploy ou microsserviço)

---

## 👨‍💻 Autor

Arthur Eduardo Silva
https://github.com/Arthss
