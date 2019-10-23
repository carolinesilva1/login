# login
Sistema de Login em PHP e Javascript

---
# aula 9 - 22/10/2019
- Autenticação de usuario completa


# aula 8 - 21/10/2019
- Autenticação do usuário e permissão de acesso ao perfil.php
- Conceito de sessão

# aula 7 - 18/10/2019
- Inicio da autenticação e entrada no sistema

# aula 6 - 15/10/2019
- Persistência de dados no banco de dados

# aula 5 - 07/10/2019
- Envio de dados do front-end para o back-end, métodos GET e POST.


# aula 4 - 01/10/19
- Validação com HTML5
- Validação dos campos com jQuery validate

# aula 3 - 30/09/2019
- Formulário de Cadastro de novos usuário
- ~Validação dos campos com jQuery validate~
- Ocultar e mostrar os formulários com jQuery


# aula 2 - 24/09/2019
Layout Bootstrap para os formulários
- Formulário de login
- Formulário de recuperação de senha
- Formulário de Cadastro de novos usuários


# aula 1 - 23/09/2019 :godmode:
  - Começou a Primavera
  - Aula inicial, configuração do projeto no GitHub 
  - E criação passo a passo


# Passo a passo em todo inicio de aula

# Habilitar o Proxy
- Tecla Windows - Abrir a janela Prompt de Comando
- Copie e cole a linha abaixo - selecione e pressione as teclas Ctrl C

git config --global http.proxy http://10.1.21.254:3128

- Pressione Enter

##Clonar o repositorio **login** na pasta **C:\xampp\htdocs**
- Tecla Windows -Abrir o GitHub Desktop
- Clique em *Sign in to GitHub.com*
- Digite seu Login e Senha do GitHub
Caso necessário,após o login digite seu nome e e-maile clique em *Continue*
selecione o repositorio **login** e logo abaixo clique no botão azul **clone...*
Clique no botão *choose* e encontre no disco local C: a pasta xampp e dentro dela htdocs
selecione a pasta e confira se o *local path foi C:\xampp\htdocs\login*
Clique no botão azul *Clone*

## Habilitar o servidor web **Apache** e o servidor **MySQL**
Tecla Windows -Abrir o XAMPP Control panel
clique em start para o apache
clique em Start para o MySQL
verifique se apareceu a porta 80 apache e 3306 MySQL
verifique se ficou verde o apache e MySQL

##Testar se esta funcionando
abra o navegador firefox azul e digite http://localhost/login

## editar utilizando o VS Code
abrir o visual studio code
abra no vs code a pasta C:\xampp\htdocs\login*

## Importar banco de dados
- Acessar no navegador http://localhost/phpmyadmin
- Clicar em importar 
- Selecionar o arquivo, clicando em Browse ou escolha o arquivo
- Abra o arquivo 127.0.0.1.sql e clique em executar
- O banco deve ter sido importado corretamente