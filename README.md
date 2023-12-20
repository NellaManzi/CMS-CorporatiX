<p align="center">
	<a href="#"  target="_blank" title="Visite CorporatiX">
		<img src="/public/image/readme/logo479x118.png" alt="Sistema CMS CorporatiX" width="340px">
	</a>
</p>

<br>

<p align="center">:sparkles: Sistema CMS CorporatiX :sparkles: - <a href="https://www.corporatix.online">https://www.corporatix.online</a></p>

<p align="center">
	<img src="https://img.shields.io/badge/version project-2.0-brightgreen" alt="version project">
    <img src="https://img.shields.io/badge/Php-8.2.12-informational" alt="stack project">
    <img src="https://img.shields.io/badge/Laravel-10.1-informational&color=brightgreen" alt="stack project">
    <img src="https://img.shields.io/badge/Livewire-3.0-informational&color=brightgreen" alt="stack project">
    <img src="https://img.shields.io/badge/Filament-3.0.1-informational" alt="stack project">
    <img src="https://img.shields.io/badge/TailwindCss-3.1-informational" alt="stack project">
    <img src="https://img.shields.io/static/v1?label=Composer&message=2.6.5&color=brightgreen?style=for-the-badge" alt="stack project">
	<a href="https://opensource.org/licenses/GPL-3.0">
		<img src="https://img.shields.io/badge/license-MIT-blue.svg" alt="GPLv3 License">
	</a>
</p>

<br>

## :rocket: planejamento do sistema [`CMS CorporatiX`](https://www.corporatix.online/)
Checklist das etapas de planejamento para a atualização e desenvolvimento do `sistema web corporatix`.

### :label: Ideação
##### - Sobre sistema
##### - Fatores Responsáveis pela Mudança
##### - Visões da Qualidade de Software
##### - Requisitos de software

### :label: Prototipagem
##### - Diagrama Entidade-Relacionamento (DER)

### :label: Detalhes técnicos
##### - Definir arquitetura do projeto
##### - Definir tecnologias (serviços externos, libs, frameworks, hospedagem etc.)
##### - Problemas e desafios encontrados
##### - Prototipagem finais
##### - Conclusão final

### :label: Contatos

<hr style="border: #0d0c22 2px solid; margin-top: 5px; margin-bottom: 5px; "/>

## :heavy_check_mark: Ideação

A ideia deste projeto é criar um `sistema web totalmente mordeno`, com um site que possa ter todas qualidades de desenvolvimento, 
atendendo a todos requisitos de um `poderoso CMS` para gerenciamento de todas entidades de uma empresa. Sistemas assim, fazem 
uma grande diferença nas relações de pessoas e negocios em uma empresa.

### :ok_hand: Sobre

[`CorporatiX`](https://corporatix.online/) será um sistema de Gestão de Conteúdos, de forma bem direta, o CMS permitirá que você crie, organize, publique, 
configure e apague conteúdos do site. O grande diferencial do CMS, como o próprio nome diz, é a possibilidade de gerenciar 
conteúdo dinâmico de uma forma simples, ou seja, manter um blog, loja virtual ou outro tipo de site que precisa ser atualizado 
de forma constante. Então o CMS é a solução ideal para todo mundo que precisa de um site que não seja 100% estático e momentâneo.


### :ok_hand: Fatores Responsáveis pela Mudança

:star: Foco no Cliente :star: Evolução da Tecnologia

#### Foco no Cliente
- Tendência em geral e percepção da qualidade (visão do cliente).

#### Evolução da Tecnologia
- Aparecimento de novos recursos e facilidades, elevação dos padrões mínimos de expectativa do cliente, inovação tecnológica deixou de ser diferencial competitivo e
passou a ser atributo da qualidade.

> hoje em dia, interface gráfica em uma aplicação é considerada condição básica, e não diferencial competitivo.

Para este update do sistema [`CorporatiX`](https://corporatix.online/), vamos `atualizar todas tecnologias`, deste a sua 
stack base `PHP` e `framework Laravel` até suas `bibliotecas e dependencias`. Além disso, a ídeia é adicionarmos uma ferramenta 
muito bem conceituada que será o `Filament`, que irá agilizar com segurança todo desenvolvimento admnistrativo do CMS, o 
Filament neste momento do desenvolvimento está em sua versão 3.0 e será de grande sucesso para o projeto. Outro detalhes 
nesta versão, é que vamos `modificar a estrutura de classes`, seu diagrama, para melhor atender as novas funcionalidades que 
vamos criar e listar.

#### Visões da Qualidade de Software
- :star: USUÁRIO - :star: DESENVOLVEDOR - :star: GERENTE

#### Visão do Usuário
 O usuário está interessado na utilização e no desempenho do
software
 Há interesse nas medidas externas de qualidade:
– as funções especificadas estão disponíveis?
– qual é a confiabilidade do software e sua eficiência?
– é fácil de usar?
– é fácil para transferir para outro ambiente operacional
 Características construtivas não interessam

#### Visão do Desenvolvedor
:heavy_plus_sign: Deve ser coerente com as expectativas do usuário - `requisitos + aceitação`.
:heavy_plus_sign: Interesse em medidas internas de qualidade.
– ex: controle de caminhos + tempo de espera = tempo de resposta.
:heavy_plus_sign: Consideração da qualidade de produtos intermediários.

#### Visão do Gerente de Desenvolvimento
:heavy_plus_sign: Medida global da qualidade - combinação ponderada de atributos e objetivos da empresa.
:heavy_plus_sign: Equilíbrio da melhoria de qualidade do produto com outros critérios:
– `prazo`
– `custo`
:heavy_plus_sign: Visão é indica a necessidade de uma abordagem mais abrangente - mais próximo do conceito de qualidade de processo.

### :ok_hand: Requisitos de software

Avaliação das especificações do software durante o desenvolvimento para verificar se os requisitos de qualidade estão
sendo atendidos.


##### Os requisitos `funcionais (RF)` referem-se sobre o que o sistema deve fazer, ou seja, suas funções e informações.
- [RF001]:white_check_mark: O Sistema deve autenticar o usuários e administradores.
- [RF001] O sistema deve ter cadastro de usuários, bem como cadastro de seu perfil de acesso e seus dados. Seu e-mail não poderá se repetir e o usuário poderá ser manipulador somente por administradores.
- [RF001] O registro de um novo usuário só será liberado quando um administrador do sistema receber uma solicitação. E essa solicitação será repassada para o usuário solicitante via e-mail, (aprovado ou não).
- [RF003] O sistema terá controle de acesso a funcionalidades a partir de suas (ACL) permissões de cada perfil de usuário e administradores do sistema.
- [RF004]:white_check_mark: O Sistema deve ter uma dashboard administrativa com menu das funcionalidades.
- [RF005] O Sistema deve ter estatiscas do trávego de navegação dos usuários.
- [RF006] O Sistema deve ter administração de perguntas frequentes (`analise`).
- [RF007] O Sistema deve ter administração de .... com CRUD.
- [RF008]:white_check_mark: O Sistema deve ter administração de categorias (`CRUD`) e relações.
- [RF009]:white_check_mark: O Sistema deve ter administração dos artigos (`CRUD`) e relações.
- [RF010]:white_check_mark: O Sistema deve permitir a pesquisa de usuários, categorias e artigos.
- [RF011] O Sistema deve ter paginação nas listagens.
- [RF012] O Sistema deve ter administração de configurações do site.
- [RF013] O Sistema deve ter somente um registro de configuração.
- [RF014] O Sistema não pode permitir deletar o registro de configuração.
- [RF015] O Sistema deve permitir .....
- [RF016] O Sistema deve permitir registro de e-mail de usuário.
- [RF017] O Sistema deve permitir a administração da listagem do e-mails registrado.
- [RF018] O Sistema deve permitir mudar o status de e-mail registrado.
- [RF019] O Sistema deve permitir contato dos usuário via WhatsApp.
- [RF020] O sistema deverá ter integração do login com o servidor de autenticação baseado em OAuth do Google e/ou Facebook somente se o usuário já tiver cadastro anteriormente, caso contrário, ele deverá realizar o cadastro.
- [RF021] O sistema terá um menu de opções que dê acesso a todas as funcionalidades que o sistema provê dependendo do seu perfil de acesso.
- [RF022] O sistema terá estruturado funcionalidades cadastrais listadas abaixo com telas completas e utilizando as operações de CRUD (Create/Retrieve/Update/Delete). Dependendo da regra de negócio, não será utilizado atualização e deletar.
- [RF023] O usuário deverá ter cadastro de endereço, onde poderá realizar no momento de criação ou em outro momento.
- [RF024] O usuário deverá ter cadastro de seu cargo e sua edição e exclusão só poderá ser realizado pelos administradores.
- [RF025] O usuário deverá ter cadastro de sua unidade atual e sua edição e exclusão só poderá ser realizado pelos administradores.
- [RF026] O sistema permitirá o cadastro das funcionalidades de uma publicação do sistema para administradores. As notícias deverão ter formatação de seu texto, uma imagem que poderá ser feito seu download pelos usuários, uma validade, e sua (s) categoria (s) pré cadastradas anteriormente por um usuário admin. Contando também com likes e deslikes (gostar e não gostar das publicações), visualizações e comentários feitos por qualquer usuário.
- [RF027] O usuário deverá ter cadastro de categorias se necessário para as publicações.
- [RF028] O usuário deverá ter cadastro de comentários se necessário para todos usuários, não sendo necessário ter edição e exclusão do comentário, somente se a publicação for excluída o comentário será deletado.
- [RF029] O usuário deverá ter cadastro de questionários e imagem se necessário. Os questionários poderão ter uma ou mais questões que terão 4 opções de resposta cadastradas e esses questionários só poderão ser respondidos pelos usuários após finalização.
- [RF030] O sistema deverá ter a funcionalidade de exportação de dados em formato Excel ou PDF nas entidades cargos, categorias, notícias, pedidos de solicitação, questionários, unidades e usuários. 
- [RF031] Nos campos do cadastro que estão associados a outras entidades do sistema, o usuário deverá ter o mecanismo de lookup dos dados (combobox ou janela de seleção), assim podendo selecionar mais rapidamente o item.
- [RF032] O sistema deve apresentar pelo menos uma tela em que seja feito cadastro de dados em estrutura mestre/detalhe (duas entidades associadas).
- [RF033] O sistema deve apresentar pelo menos 3 telas de processamento de transações com suas respectivas regras de negócio a partir das entidades do sistema.
- [RF034] O sistema terá uma tela de relatório (dashboard) com as estatísticas do sistema de forma gráfica (gráfico de barras, gráfico de linhas, etc.) em que sejam mostrados pelo menos 5 indicadores. Os gráficos que serão mostrados:
- [RF035] Gráfico de publicações criadas por mês.
- [RF035] Gráfico geral de likes (gostar) realizados.
- [RF036] Gráfico de publicações por usuário.
- [RF038] Gráfico com total de usuários por cargo.
- [RF039] Gráfico com total de usuários por unidade.
- [RF040] Além dos gráficos, o sistema deverá mostrar quantos usuários estão online no momento, total de publicações, usuários cadastrados ativos, questionários, visualizações, comentários, categorias, deslikes com porcentagem e listagem com total de questionário respondidos por usuário.
- [RF041] O sistema permitirá o cadastro das permissões de acesso.
- [RF042] O sistema deverá ter um canal com os ramais de todos colaboradores.
- [RF043] O sistema deverá apresentar na tela inicial a última publicação em destaque, os aniversariantes do mês e uma listagem com as últimas 8 notícias e questionários.

###### requisitos não funcionais (RNF) definem propriedades e restrições do sistema como tempo, espaço, linguagens de programação, versões do compilador, SGBD, Sistema Operacional, método de desenvolvimento, etc.
- [RNF001]:white_check_mark: O sistema deve ser implementado em Php.
- [RNF002]:white_check_mark: O sistema deve utilizar framework laravel.
- [RNF003]:white_check_mark: O sistema deve implementado em componentes livewire.
- [RNF004]:white_check_mark: O sistema deve implementar o Filament na área administrativa.
- [RNF005]:white_check_mark: O sistema deve utiilizar o banco de dados (`phpMyAdmin`) MySql.
- [RNF006]:white_check_mark: O sistema será implementado na arquitetura MVC.
- [RNF007]:white_check_mark: O sistema deve utilizar TailWindCss.
- [RNF008]:white_check_mark: O sistema deve ser implementado utilizando componentes para melhor agilidade de desenvolvimento.
- [RNF009]:white_check_mark: O site deve ser 100% responsivo.
- [RNF010]:white_check_mark: O site deve ter segurança contra ataques.


#### Requisitos seguidos
- :star: `Funcionalidade` – Funções do software, que determinam o que o sistema faz. Direcionada para o atendimento dos requisitos do usuário.
- :star: `Confiabilidade` – Atributos que têm impacto na capacidade do software de manter o seu nível de desempenho, dentro de condições estabelecidas, por um dado período de tempo.
- :star: `Usabilidade` - Atributos que respondem pela facilidade de uso do software por usuários com perfil específico.
- :star: `Eficiência` – Relação entre o nível de desempenho do software e a quantidade de recursos utilizada, sob condições de uso pré-definidas.
- :star: `Manutenibilidade` – Medida do esforço necessário para fazer alterações, extensões e complementações no produto de software.
- :star: `Portabilidade` – Facilidade do produto de software ser transferido para outro ambiente computacional e funcionar adequadamente.

## :heavy_check_mark: Prototipagem

A etapa de front end no projeto é uma etapa que estou me desenvolvendo e me atualizando cada vez mais, buscando as melhores praticas de estilização,
codifificação e sempre buscando desafios, com tecnologias novas. 
E neste projeto foi realizado uma pesquisa para se colocar o melhor layout, e personalização para uma experiencia de interface moderna, prática para usuários.

<p align="center">
	<a href="#"  target="_blank" title="logo">
		<img src="/public/image/readme/logo250x62.png" alt="logo" width="250">
	</a>
</p>

- Diagrama Entidade-Relacionamento (DER)

> O diagrama de classes é a representação estática utilizada para descrever a estrutura do sistema, apresentando as classes, atributos, operações e as relações entre os objetos.


<div align="center">
    <h4>Diagrama de classes</h4>
    <img src="/public/image/readme/diagram.JPG" width="100%">
</div>

O diagrama de classes do projeto, foi realizado no software  [`StarUML`](https://staruml.io/)

## :heavy_check_mark: Detalhes técnicos

### Definir arquitetura do projeto


### Definir tecnologias (serviços externos, libs, frameworks, hospedagem etc.)


### Problemas e desafios encontrados


### Prototipagem finais


### Conclusão final

## Lista de tecnologias implementadas
##### A listagem contem todas `bibliotecas/pacotes instalados` e configurados para desenvolver e auxiliar nas funcionalidades.
- [001] :label: Framework Laravel  
- [002] :label: Filament  
- [003] :label: Spatie Permissions


### :star: Contatos

Contatos 👇🏼 [rafaelblum_digital@hotmail.com]

[![Youtube Badge](https://img.shields.io/badge/-Youtube-FF0000?style=flat-square&labelColor=FF0000&logo=youtube&logoColor=white&link=https://www.youtube.com/channel/UCMvtn8HZ12Ud-sdkY5KzTog)](https://www.youtube.com/channel/UCMvtn8HZ12Ud-sdkY5KzTog)
[![Instagram Badge](https://img.shields.io/badge/-rafablum_-violet?style=flat-square&logo=Instagram&logoColor=white&link=https://www.instagram.com/rafablum_/)](https://www.instagram.com/rafablum_/)
[![Twitter: universoCode](https://img.shields.io/twitter/follow/universoCode?style=social)](https://twitter.com/universoCode)
[![Linkedin: RafaelBlum](https://img.shields.io/badge/-RafaelBlum-blue?style=flat-square&logo=Linkedin&logoColor=white&link=https://www.linkedin.com/in/rafael-blum-378656285/)](https://www.linkedin.com/in/rafael-blum-378656285/)
[![GitHub RafaelBlum](https://img.shields.io/github/followers/RafaelBlum?label=follow&style=social)](https://github.com/RafaelBlum)

<br/>

<img src="https://media.giphy.com/media/LnQjpWaON8nhr21vNW/giphy.gif" width="60"> <em><b>Adoro me conectar com pessoas diferentes,</b> então se você quiser dizer <b>oi, ficarei feliz em conhecê-lo mais!</b> :)</em>
