ProumoBox ![image] (http://proumo.com.br/assets/img/logo.png?v=322 "Logo ProumoBox")
![image] (https://fbcdn-sphotos-e-a.akamaihd.net/hphotos-ak-prn1/150429_1396756187207261_1711022912_n.jpg "Ícone da moeda virtual Pr$")
==========

## Produto

#### Definição:
------------------

##### Pitch
Serviço de publicidade interativa baseado na segmentação dos melhores amigos das redes sociais.

##### Em detalhes


[__Proumo$__](http://proumos.com) é um Gateway de pagamentos por meios digitais de baixo custo e de fácil implantação com uma Moeda Virtual ([__Pr$__](http://proumos.com)) que possibilita a " _viralização_ " dos produtos/serviços com promoções no modelo de: _compra coletiva_. 
<br>__*__ Essas compras/vendas podem ser efetuadas por __aplicações__ e por __pessoas comuns (lojas físicas ou de e-commerce)__.

###### Lista de tipos de Applicações:
* [WebApp (Sistema Web)](http://pt.wikipedia.org/wiki/Aplica%C3%A7%C3%A3o_Web);
* [Web Sites](https://pt.wikipedia.org/wiki/Site);
* [Mobile Apps](http://en.wikipedia.org/wiki/Mobile_app);
* [E qualquer outra plataforma capaz de interoperabilizar com outro sistema por meio do protocolo HTTP](http://pt.wikipedia.org/wiki/HTTPS).  
<br><br>

#### Objetivo:
------------------

O Proumo$ tem como objetivo facilitar a compra e venda produtos e serviços por quaisquer pessoas/estabelecimentos(físicos ou virtuais) por meio de conexão com a internet e com o uso da moeda Pr$ permite a promoção/disseminação dos produtos/serviços a nível de [__viralização__](http://pt.wikipedia.org/wiki/Marketing_viral) _quando houver a possibilidade de descontos em compras coletivas_.
<br>Tudo isso com __comodidade__ e __segurança__.
<br><br>

#### Fucionamento:
------------------

##### Imagem Descritiva:

<br>

##### Texto Descritivo:
###### Rotina Ator Apper:
1. O Apper _(dono da aplicação de venda de produtos/serviços)_ se cadastro no [Pr$](http://proumos.com);
2. O Apper recebe um API Key e um Secret Key;
 * Secret Key: Chave única e de uso exclusivo do cliente;
 * API Key: Chave que define quais as permissões que os cliente querem nos anúncios.
3. O Apper opta a forma de interação com o [Pr$](http://proumos.com) _( [Vide API](#api) )_;
4. O Apper informa os dados do produto:
 * O preço do produto;
 * O preço com desconto;
 * O link/referência do produto;
 * Quantidade de pessoas estimadas para a compra com o desconto;
 * Data para fim da promoção.
5. O Proumo$ ([Pr$](http://proumos.com)) se encarrega de criar e _disseminar_  a propaganda.    
 * O Apper, quando aceita o direito de ter promoção gratuita, aceita também que outros produtos, correlacionados,sejam anunciados em seu sistema.
 * O Apper deve permitir uma fácil comunição do Proumo$ ([Pr$](http://proumos.com)) com sua aplicação para a captura das propagandas _( [Vide API](#api) )_;
 
###### Rotina Ator Anunciante:
1. O Anunciante deve interagir pela aplicação que usa o Proumo$ ([Pr$](http://proumos.com));
2. O Anunciante é capturado pela interação da Aplicação do Apper com a [API](#pr-api) do Proumo$ ([Pr$](http://proumos.com)).

###### Rotina Ator Cliente:
1. O Cliente é autenticado pela interação da aplicação do Apper com a _( [Pr$-API](#pr-api) )_ do [Pr$](http://proumos.com);
2. O Cliente interage com as [funcionalidades](#fucionalidades) pela GUI do [Pr$](http://proumos.com).

###### Rotina do Sistema:
1. O Sistema [Pr$](http://proumos.com) contabiliza a compra do Cliente;
2. O sistema valida a operação;
 * A compra só será liberada mediante o cumprimento das [_configurações de venda_](#configuracao_de_venda) configuradas pelo Anunciante.
 * No caso de [_troca de Pr$_](#troca_prs) será validado mediante a [_regra de negócio de troca_](#rn_troca_prs).

<br><br>

#### Fucionalidades:
------------------

###### 1. _Comprar_ [Pr$](http://proumos.com):
É possível efetuar a compra de [Pr$](http://proumos.com) utilizando qualquer moeda.
 * Regra de negócio - 001: Este câmbio respeita a cotação, corrente, da moeda no mercado mundial;
 * Regra de negócio - 002: A moeda deve ser comprada por meio de _cartão de crédito_ ou _boleto bancário_.
 
###### 2. _Trocar_ [Pr$](http://proumos.com):
É possível trocar de volta da moeda virtual ([Pr$](http://proumos.com)) para a moeda física.
 * Regra de negócio - 001: Este câmbio respeita a cotação, corrente, da moeda no mercado mundial de moedas;
 * Regra de negócio - 002: O _débito_ só ocorrerá se a  quantidade de ([Pr$](http://proumos.com)) for 3x o valor, corrente, da transação.
  * O __valor__, corrente, da __transação__ e do __ganho__ do sistema sobre o _débito_ devem ser totalmente __transparente__.
 * Regra de negócio - 003: A moeda real deve ser passado em um _cartão de crédito_ ou em _conta corrente_.

###### 3. _Enviar_ [Pr$](http://proumos.com) de __presente__:
É possível __presentear__ qualquer integrante da família Proumo$.
 * Regra de negócio - 001: Somente é possível __presentear__ e ser __presenteado__ por perssoas e/ou aplicações relacionados ao usuário corrente.
  * _Pessoa_ < - > _Pessoa_ = __Amigos__ 
  * _Pessoa_ < - > _Aplicação_ = __Assinante__
 * Regra de negócio - 002: Somente é liberado o envio do presente mediante a confirmação, via E-mail, de que o dono da conta o requeriu.

###### 4. _Receber_ [Pr$](http://proumos.com) de __presente__:
É possível ser presentado com [Pr$](http://proumos.com) por um amigo, uma aplicação ou até mesmo pelo próprio sistema [Proumo$](http://proumos.com)
 * Regra de negócio - 001: Somente é possível receber um _presente_ se o __remetente__ tiver algum vínculo com o __destinatário__;
 * Regra de negócio - 002: Somente será efetuada a transmissão do presente quando o __remetente__ confirmar o e-mail de notificação do envio de [Pr$](http://proumos.com).

###### 5. _Disseminar dados_ (produtos, serviços e dados __em geral__):
O _sistema_ [__Proumo$__](http://proumos.com) oferece as seguintes ações para disseminação:
 * O embutir dos anúncios nas aplicações clientes (que usam a [Pr$-API](#pr-api)) que expõem os anúncios em qualquer lugar de sua aplicação ([_Vide a lista completa_](#lista-de-tipos-de-applica%C3%A7%C3%B5es));
 * Os anúncios também aparecem na Interface de Usuário do [Proumo$](http://proumos.com) (dentro das aplicações de terceiros), mediante a correlação de nicho de atuação.

###### 6. _Relatório de uso_:
É possível receber um relatório __detalhado__ do _histórico de uso_. Este relatório deve conter:
 * Parte __comum a todos__:
  * Gráfico de desempenho do usuário no uso de [Pr$](http://proumos.com);
  * Gráfico do desempenho do [Pr$](http://proumos.com) em relação a outras moedas;
  * Saldo (Apresentação direta da Troca de [Pr$](http://proumos.com) para a moeda real);
 * Parte do __Anunciante__ e do __Apper_:
  * Gráfico do desempenho de impacto social (impacto dos anúncios nas aplicações);
  * Gráfico do número de visitas em função do tempo;
  * Relatório de desempenho por estado/região;
 * Parte do __Cliente__:
  * <del>Gráfico <del>

###### 7. _Histórico de lançamentos_:
É possível verificar o status das transações de [Pr$](http://proumos.com) e de moeda real. Informações:
 * Quantidade em [Pr$](http://proumos.com);
 * Quantidade da moeda real;
 * Beneficiado;
 * Debitado.


<br><br>
## Projeto

#### Pr$-API:
------------------

* Parte Web:
      1. No caso de WebApp-Front (Javascript): ;
      2. WebApp-Back Java (JEE): ; 
      3. WebApp-Back Node.js: ;
      4. WebApp-Back PHP: ;
      5. WebApp-Back Python (Django): ;
      6. WebApp-Back Ruby (Rails): ;

* Parte Mobile:
      1. No Android: ;
      2. No iOS: ;
      3. No WindowsPhone: ;
<br>

#### Arquitetura do Sistema:
------------------

##### Imagem Descritiva:


##### Texto Descritivo:

#### Branches:
------------------

##### Nome:

##### TODOs:

##### Itens Feitos:

### SAVON GENERATE A PARTIR DE UM WSDL:  wsdl2ruby.rb --wsdl ~/Documents/Consultas.wsdl --type client --force;
