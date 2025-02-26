# 📚 Sistema de Gestão de Notas

## 📌 Sobre o Projeto

Este sistema permite a gestão de notas de alunos vinculados a professores, proporcionando uma interface amigável para visualização, upload e análise de dados acadêmicos.

## 🚀 Funcionalidades

### 🔐 Autenticação

- Cadastro e login de usuários.
- Perfis de acesso:
  - **Aluno**: Pode visualizar apenas suas notas, média e situação.
  - **Professor**: Pode visualizar todas as notas dos alunos vinculados a ele.

### 📂 Gerenciamento de Usuários

- Cadastro de novos usuários:
  - **Aluno**: Deve ser vinculado a um professor no momento do cadastro ou posteriormente.
  - **Professor**: Deve ser vinculado a uma diretoria no momento do cadastro ou posteriormente.
- Lista de alunos sem professor associado:
  - Contador de alunos sem cadastro.
  - Possibilidade de atribuição de professor.
  - Edição do cadastro de alunos e associação com um professor.

### 📤 Upload e Download de Planilhas

- **Download de modelo** de planilha para preenchimento.
- **Upload de planilha** com notas dos alunos:
  - Cálculo automático da nota total e média.
  - "Nota Prova Final" com peso 2.
  - Verificação de alunos já existentes:
    - Importação de novos alunos normalmente.
    - Exibição de lista com alunos repetidos para atualização seletiva.
    - Exibição de mensagem informando quantos alunos tiveram notas atualizadas.

### 📊 Dashboard e Relatórios

- **Gráfico de Pizza**: Percentual de alunos aprovados e reprovados (média ≥ 7).
- **Gráfico de Barras**: Média geral dos alunos por professor.
- **Gráfico de Barras Avançado**: Número de alunos por professor com linha indicando % de aprovados.

## 📝 Regras de Negócio

- Médias arredondadas para cima com apenas 1 casa decimal.
- Aceita upload apenas de arquivos Excel nos formatos: `.xls`, `.xlsx`, `.xlsm`.

## 🔧 Tecnologias Utilizadas

- **Back-end**: Laravel
- **Front-end**: Laravel, React, Livewire, Vue, CSS, BOOTSTRAP (A VONTADE )
- **Banco de Dados**: PODE SER SQLite no Laravel ou MySQL ( em caso de MySQL gerar um Container no Docker )

## 🚀 Como Rodar o Projeto

```sh
# Clone este repositório
git clone [https://github.com/seuusuario/seuprojeto.git](https://github.com/eduardojc/testeJob.git)

# Entre no diretório do projeto
cd testeJob

# Execute a aplicação
[ No terminal para gerar o SQLITE: 

touch database/database.sqlite

Edite o arquivo .env e altere as configurações do banco de dados para:

DB_CONNECTION=sqlite
DB_DATABASE=${DB_DATABASE_PATH}/database.sqlite
DB_FOREIGN_KEYS=true

]

```

## 🤝 Contribuição

Contribuições são bem-vindas! Siga os passos:

1. Faça um **fork** do repositório
2. Crie uma **branch** para sua feature (`git checkout -b minha-feature`)
3. Faça o **commit** (`git commit -m 'Adicionando uma nova feature'`)
4. Envie para o repositório (`git push origin minha-feature`)
5. Abra um **Pull Request**

---

Feito com ❤️ por [Seu Nome](https://github.com/eduardojc) 🚀

