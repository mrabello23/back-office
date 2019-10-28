## Announcements App

Application that implements a back office area of a website where users will be able to perform all the CRUD operations regarding messaging

## Requisitos

- Docker instalado

## Executar

- clonar projeto;
- navegar até pasta raiz do projeto via bash;
- executar comando "docker-compose build";
- executar comando "docker-compose up -d";
- aguardar cerca de 5 minutos para os scripts de configuração e atualização de dependências finalizarem a execução;
- Acessar na url "http://localhost:8080/";

## Testes de unidade

- Acessar pasta da aplicação via bash;
- Na raiz do projeto, executar o comando "vendor/bin/phpunit" para rodar a suite de teste;

## Observações

- Projeto estará acessível via browser somente após finalização da execução dos scripts de instalação e atualização das dependências do framework;
- Script usa a porta 8080 para executar o projeto;
- Para acessar qualquer container iniciado no modo interativo devemos usar comando "docker exec -it NOME_OU_ID_CONTAINER bash";
- Para execução do modo interativo via bash existe uma limitação em ambiente Windows ("cannot enable tty mode on non tty input"), que força o camando ser iniciado com "winpty" ficando desta forma: "winpty docker exec -it NOME_OU_ID_CONTAINER bash";

## Arquitetura e Design

- Projeto foi implementado com arquitetura Restful e padrão MVC;
- Foi escolhido para este projeto a linguagem PHP versão 7.2 e o Framework Laravel versão 6 por possuir recursos e patterns para simplificar e padronizar a implementação de aplicativos web;
- Para a interface foi escolhido a biblioteca Bootstrap versão 4.0 e o pacote de templates Blade que vem junto com o framework Laravel;
- Para o banco de dados foi escolhido MySQL versão 5.7 por boa compatibilidade com a linguagem do backend e por possuir uma versão Community OpenSource;
- Os testes de unidade são simples, mas garantem que as partes importantes para o funcionamento do projeto estejam em cobertas contra falha e conformidade com as epecificações;

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[British Software Development](https://www.britishsoftware.co)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- [UserInsights](https://userinsights.com)
- [Fragrantica](https://www.fragrantica.com)
- [SOFTonSOFA](https://softonsofa.com/)
- [User10](https://user10.com)
- [Soumettre.fr](https://soumettre.fr/)
- [CodeBrisk](https://codebrisk.com)
- [1Forge](https://1forge.com)
- [TECPRESSO](https://tecpresso.co.jp/)
- [Runtime Converter](http://runtimeconverter.com/)
- [WebL'Agence](https://weblagence.com/)
- [Invoice Ninja](https://www.invoiceninja.com)
- [iMi digital](https://www.imi-digital.de/)
- [Earthlink](https://www.earthlink.ro/)
- [Steadfast Collective](https://steadfastcollective.com/)
- [We Are The Robots Inc.](https://watr.mx/)
- [Understand.io](https://www.understand.io/)
- [Abdel Elrafa](https://abdelelrafa.com)
- [Hyper Host](https://hyper.host)

## License

The Laravel framework is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).
