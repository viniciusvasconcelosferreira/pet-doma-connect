# Pet Doma Connect

O Pet Doma Connect é uma aplicação desenvolvida para a clínica veterinária Pet D.O.M.A, com o objetivo de compartilhar
conhecimento sobre cuidados e saúde de animais de estimação. Por meio dessa plataforma, os médicos veterinários da
clínica podem fornecer informações valiosas para a comunidade, promovendo a conscientização e o bem-estar dos pets. Além
disso, o Pet Doma Connect também serve como uma ferramenta de divulgação da clínica e dos serviços oferecidos,
contribuindo para o fortalecimento da relação entre a instituição e os proprietários de animais.

## Projeto de Extensão

O Pet Doma Connect foi desenvolvido como parte do programa de contexto à comunidade do curso de Análise e
Desenvolvimento de Sistemas. Essa disciplina visa estabelecer uma conexão entre o conhecimento acadêmico e as demandas
sociais, permitindo que os alunos apliquem suas habilidades técnicas para resolver problemas reais da comunidade. Por
meio dessa iniciativa, os alunos têm a oportunidade de desenvolver competências e soft skills essenciais enquanto
contribuem para o bem-estar da sociedade.

## Índice

- [Visão Geral](#visão-geral)
- [Pré-requisitos](#pré-requisitos)
- [Instalação](#instalação)
- [Contribuição](#contribuição)
- [Licença](#licença)

## Visão Geral

O Pet Doma Connect é uma plataforma completa para a clínica veterinária Pet D.O.M.A, oferecendo uma interface pública
para clientes e uma interface administrativa para a equipe da clínica.

### Frontend

- **Páginas Públicas**: Os clientes podem acessar diversas páginas para conhecer melhor a clínica, seus serviços e
  informações úteis.
- **Equipe**: Apresentação dos médicos veterinários e profissionais que compõem a equipe da clínica, com informações
  sobre suas especializações e experiências.
- **Contato**: Informações de contato da clínica, incluindo telefone, e-mail e localização no mapa.
- **Missão**: Descrição da missão e dos valores da clínica, demonstrando seu compromisso com o bem-estar dos animais.
- **Conquistas**: Destaque das principais conquistas e marcos alcançados pela clínica ao longo de sua história.
- **Blog**: Seção dedicada a postagens e artigos sobre cuidados com animais de estimação, dicas de saúde e novidades da
  clínica.

### Backend

- **Interface Administrativa**: A equipe da clínica tem acesso a uma interface administrativa para gerenciar o conteúdo
  da plataforma.
- **Atualização de Informações**: Capacidade de atualizar informações sobre a clínica, seus serviços, equipe e outras
  informações relevantes.
- **Gestão de Blog**: Possibilidade de criar, editar e excluir postagens no blog, permitindo que a clínica compartilhe
  conteúdo relevante com os clientes.
- **Disparo de Newsletter**: Recurso para enviar newsletters personalizadas aos clientes cadastrados, mantendo-os
  informados sobre as últimas novidades e promoções da clínica.

## Pré-requisitos

Antes de começar, verifique se você atende aos seguintes requisitos:

- [PHP](https://www.php.net/) (versão 8.2 ou superior)
- [Composer](https://getcomposer.org/) (para gerenciamento de dependências PHP)
- [MySQL](https://www.mysql.com/) (ou outro sistema de gerenciamento de banco de dados compatível com Laravel)
- [Node.js](https://nodejs.org/) (para compilar os recursos do frontend)
- [NPM](https://www.npmjs.com/) ou [Yarn](https://yarnpkg.com/) (para instalação de pacotes JavaScript)

## Instalação

1. Clone este repositório para o seu ambiente local:

```bash
git clone https://github.com/viniciusvasconcelosferreira/pet-doma-connect
```

2. Navegue até o diretório do projeto:

```bash
cd pet-doma-connect
```

3. Instale as dependências do Composer:

```bash
composer install
```

4. Copie o arquivo `.env.example` para `.env` e configure as variáveis de ambiente, incluindo as configurações do banco
   de dados:

```bash
cp .env.example .env
```

5. Gere a chave de aplicação Laravel:

```bash
php artisan key:generate
```

6. Execute as migrações do banco de dados para criar as tabelas necessárias:

```bash
php artisan migrate
```

7. Instale as dependências do npm/yarn e compile os recursos do frontend:

```bash
npm install && npm run dev
```

ou

```bash
yarn && yarn dev
```

8. Inicie o servidor de desenvolvimento:

```bash
php artisan serve
```

9. Abra seu navegador e acesse [http://localhost:8000](http://localhost:8000) para ver a aplicação em execução.

Certifique-se de que o servidor do MySQL esteja em execução e as configurações do banco de dados no arquivo `.env`
estejam corretamente configuradas antes de executar as migrações.

## Contribuição

Contribuições são bem-vindas! Se você deseja melhorar este projeto de alguma forma, por favor, abra uma issue ou envie
um pull request.

## Licença

Este projeto é licenciado sob a Licença MIT - veja o arquivo [LICENSE](LICENSE) para detalhes.
