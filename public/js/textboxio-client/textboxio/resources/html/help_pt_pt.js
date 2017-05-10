/** @license
 * Copyright (c) 2013-2017 Ephox Corp. All rights reserved.
 * This software is provided "AS IS," without a warranty of any kind.
 */
!function(){var a=function(a){return function(){return a}},b=function(a,b){var c=a.src.indexOf("?");return a.src.indexOf(b)+b.length===c},c=function(a){for(var b=a.split("."),c=window,d=0;d<b.length&&void 0!==c&&null!==c;++d)c=c[b[d]];return c},d=function(a,b){if(a){var d="data-main",e=a.getAttribute(d);if(e){a.removeAttribute(d);var f=c(e);if("function"==typeof f)return f;console.warn("attribute on "+b+" does not reference a global method")}else console.warn("no data-main attribute found on "+b+" script tag")}},e=function(a,c){var e=d(document.currentScript,c);if(e)return e;for(var f=document.getElementsByTagName("script"),g=0;g<f.length;g++)if(b(f[g],a)){var h=d(f[g],c);if(h)return h}throw"cannot locate "+c+" script tag"},f="2.2.0",g=e("help_pt_pt.js","help for language pt_pt");g({version:f,about:a('\ufeff<div role=presentation class="ephox-polish-help-article ephox-polish-help-about">\n  <div class="ephox-polish-help-h1" role="heading" aria-level="1">Acerca do</div>\n  <p>O Textbox.io \xe9 uma ferramenta WYSIWYG para criar conte\xfados atraentes em aplica\xe7\xf5es online. Seja em redes sociais, blogs, e-mails ou meios semelhantes, o Textbox.io permite que as pessoas se expressem na Web.</p>\n  <p>&nbsp;</p>\n  <p>Textbox.io @@FULL_VERSION@@</p>\n  <p>Vers\xe3o do cliente @@CLIENT_VERSION@@</p>\n  <p class="ephox-polish-help-integration">Integra\xe7\xe3o para @@INTEGRATION_TYPE@@, vers\xe3o @@INTEGRATION_VERSION@@</p>\n  <p>&nbsp;</p>\n  <p>Copyright 2017 Ephox Corporation. Todos os direitos reservados.</p>\n  <p><a href="javascript:void(0)" class="ephox-license-link">Licen\xe7as de terceiros</a></p>\n</div>'),accessibility:a('\ufeff<div role=presentation class="ephox-polish-help-article">\n  <div role="heading" aria-level="1" class="ephox-polish-help-h1">Navega\xe7\xe3o com teclado</div>\n  <div role="heading" aria-level="2" class="ephox-polish-help-h2">Ativar a navega\xe7\xe3o pelo teclado</div>\n  <p>Para ativar a navega\xe7\xe3o pelo teclado na barra de ferramentas, prima F10 para Windows ou ALT + F10 no Mac OSX. O primeiro item na barra de ferramentas ser\xe1 real\xe7ado com um contorno azul, indicando que est\xe1 selecionado. </p>\n\n  <div role="heading" aria-level="2" class="ephox-polish-help-h2">Movimentar-se entre grupos</div>\n  <p>Os bot\xf5es na barra de ferramentas com fun\xe7\xf5es assemelhadas s\xe3o separados em grupos. Quando a navega\xe7\xe3o pelo teclado estiver ativa, prima a tecla de tabula\xe7\xe3o para mover a sele\xe7\xe3o para o pr\xf3ximo grupo e Shift+Tab para mover a sele\xe7\xe3o para o grupo anterior. Ao premir a tecla de tabula\xe7\xe3o no \xfaltimo grupo, retorna ao primeiro grupo de bot\xf5es.</p>\n\n  <div role="heading" aria-level="2" class="ephox-polish-help-h2">Movimentar-se entre itens ou bot\xf5es</div>\n  <p>Para voltar e avan\xe7ar entre os itens, use as teclas de seta. Os itens ser\xe3o selecionados em sequ\xeancia dentro do pr\xf3prio grupo. Para ir para o grupo seguinte, prima a tecla de tabula\xe7\xe3o e use as teclas de seta.</p>\n\n  <div role="heading" aria-level="2" class="ephox-polish-help-h2">Executar comandos</div>\n  <p>Para executar um comando, leve a sele\xe7\xe3o at\xe9 ao bot\xe3o desejado e prima a barra de espa\xe7os ou Enter.</p>\n\n  <div role="heading" aria-level="2" class="ephox-polish-help-h2">Abrir, navegar e fechar menus</div>\n  <p>Quando um bot\xe3o da barra de ferramentas contiver um menu, prima a barra de espa\xe7os ou Enter para abrir o menu. Quando o menu abrir, o primeiro item estar\xe1 selecionado. Use as teclas de seta para navegar pelo menu. Para subir ou descer pelo menu, prima as teclas de seta para cima e para baixo, respetivamente. Isto tamb\xe9m se aplica aos submenus.</p>\n\n  <p>Os itens de menu que possuem submenus s\xe3o identificados por um s\xedmbolo de divisa. Use a tecla de seta que corresponde \xe0 dire\xe7\xe3o da divisa para expandir o submenu, e a tecla de seta oposta para fech\xe1-lo.</p>\n\n  <p>Para fechar qualquer menu ativo, prima a tecla Esc. Quando um menu \xe9 fechado, a sele\xe7\xe3o volta \xe0 posi\xe7\xe3o anterior.</p>\n\n  <div role="heading" aria-level="2" class="ephox-polish-help-h2">Editar ou remover hiperliga\xe7\xf5es</div>\n\n  <p>Para editar ou remover uma hiperliga\xe7\xe3o, navegue at\xe9 ao menu Inserir e selecione Inserir liga\xe7\xe3o. O editor exibe a caixa de di\xe1logo de edi\xe7\xe3o de liga\xe7\xe3o. </p>\n\n  <p>Edite a liga\xe7\xe3o inserindo o novo url na caixa de entrada de atualiza\xe7\xe3o de hiperliga\xe7\xe3o e premindo Enter. Remova a liga\xe7\xe3o do documento selecionando o bot\xe3o de remover. Para sair da caixa de di\xe1logo sem fazer altera\xe7\xf5es, prima Esc.</p>\n\n  <div role="heading" aria-level="2" class="ephox-polish-help-h2">Alterar o tamanho do tipo de letra e do limite da tabela</div>\n\n  <p>Altere o tamanho do tipo de letra navegando at\xe9 ao menu de tipo de letra e selecionando o tamanho. O editor exibe a caixa de di\xe1logo de tamanho no menu e define o foco nela.</p>\n\n  <p>Altere o tamanho do limite da tabela navegando at\xe9 ao item relacionado da barra de ferramentas e selecionando o tamanho do limite. O editor exibe a caixa de di\xe1logo de tamanho no menu e define o foco nela. Nota: o item da barra de ferramentas para dimensionar o limite da tabela s\xf3 estar\xe1 dispon\xedvel quando o cursor estiver dentro de uma tabela.</p>\n\n  <p>Na caixa de di\xe1logo de tamanho, prima a tecla de tabula\xe7\xe3o para mover a sele\xe7\xe3o para o controlo seguinte. Prima Shift+Tab para mover a sele\xe7\xe3o para o controlo anterior.</p>\n\n  <p>Modifique o tamanho inserindo o novo valor na caixa de entrada de tamanho. Por exemplo, 14px ou 1em. Para submeter as altera\xe7\xf5es, prima Enter. Observe que, ao premir Enter, fecha a caixa de di\xe1logo e volta o foco ao documento.</p>\n\n  <p>Altere o tamanho sem sair da caixa de di\xe1logo ativando os bot\xf5es de aumentar tamanho ou diminuir tamanho. A altera\xe7\xe3o de tamanho com os bot\xf5es de aumentar ou diminuir modificar\xe1 imediatamente o tamanho do elemento selecionado, enquanto o valor de unidade em uso \xe9 mantido. Saia da caixa de di\xe1logo premindo Esc.</p>\n\n  <div role="heading" aria-level="2" class="ephox-polish-help-h2">Recortar uma imagem</div>\n\n  <p>Para aceder \xe0 funcionalidade de recorte, selecione uma imagem para apresentar as opera\xe7\xf5es para a imagem na barra de ferramentas. Estas opera\xe7\xf5es tamb\xe9m est\xe3o dispon\xedveis no menu de contexto. Quando o recorte est\xe1 ativado, \xe9 posicionada uma \xe1rea de recorte sobre a imagem e o canto superior esquerdo ser\xe1 selecionado.</p>\n\n  <p>Navegar usando a tecla de tabula\xe7\xe3o. Pode selecionar cada um dos 4 cantos ou toda a caixa da \xe1rea de recorte. Pode mover cada canto individualmente ou todos simultaneamente movendo a caixa da \xe1rea de recorte.</p>\n\n  <p>Para mover a sele\xe7\xe3o pela imagem utilize as teclas de seta. Cada vez que prime uma seta o movimento ser\xe1 de 10 pix\xe9is, para movimenta\xe7\xf5es menores mantenha premida a tecla Shift enquanto prime uma seta para movimentar um pixel.</p>\n\n  <p>Prima Enter para aplicar o recorte \xe0 imagem.</p>\n\n  <p>Para cancelar a a\xe7\xe3o de recorte sem qualquer impacto na imagem, prima a tecla ESC.</p>\n\n  <table aria-readonly="true" cellpadding="0" cellspacing="0" class="ephox-polish-tabular ephox-polish-help-table ephox-polish-help-table-shortcuts">\n      <caption>Navega\xe7\xe3o com teclado</caption>\n      <thead>\n        <tr>\n          <th scope="col">A\xe7\xe3o</th>\n          <th scope="col">Windows</th>\n          <th scope="col">Mac OS</th>\n        </tr>\n      </thead>\n      <tbody>\n      <tr>\n        <td>Ativar a barra de ferramentas</td>\n        <td>F10</td>\n        <td>ALT + F10</td>\n      </tr>\n      <tr>\n        <td>Bot\xe3o Selecionar grupo seguinte/grupo anterior</td>\n        <td>\u2190 ou \u2192</td>\n        <td>\u2190 ou \u2192</td>\n      </tr>\n      <tr>\n        <td>Mover para o grupo seguinte</td>\n        <td>TAB</td>\n        <td>TAB</td>\n      </tr>\n      <tr>\n        <td>Mover para o grupo anterior</td>\n        <td>SHIFT + TAB</td>\n        <td>SHIFT + TAB</td>\n      </tr>\n      <tr>\n        <td>Executar comando</td>\n        <td>BARRA DE ESPA\xc7OS ou ENTER</td>\n        <td>BARRA DE ESPA\xc7OS ou ENTER</td>\n      </tr>\n      <tr>\n        <td>Abrir o menu principal</td>\n        <td>BARRA DE ESPA\xc7OS ou ENTER</td>\n        <td>BARRA DE ESPA\xc7OS ou ENTER</td>\n      </tr>\n      <tr>\n        <td>Abrir/expandir submenu</td>\n        <td>BARRA DE ESPA\xc7OS ou ENTER ou \u2192</td>\n        <td>BARRA DE ESPA\xc7OS ou ENTER ou \u2192</td>\n      </tr>\n      <tr>\n        <td>Selecionar item de menu seguinte/item de menu anterior</td>\n        <td>\u2193 ou \u2191</td>\n        <td>\u2193 ou \u2191</td>\n      </tr>\n      <tr>\n        <td>Fechar menu</td>\n        <td>ESC</td>\n        <td>ESC</td>\n      </tr>\n      <tr>\n        <td>Fechar/recolher submenu</td>\n        <td>ESC ou \u2190</td>\n        <td>ESC ou \u2190</td>\n      </tr>\n      <tr>\n        <td>Mover a sele\xe7\xe3o de recorte de imagem</td>\n        <td>\u2190 ou \u2192 ou \u2193 ou \u2191</td>\n        <td>\u2190 ou \u2192 ou \u2193 ou \u2191</td>\n      </tr>\n      <tr>\n        <td>Mover a sele\xe7\xe3o de recorte de imagem com precis\xe3o</td>\n        <td>Manter premida a tecla SHIFT durante a movimenta\xe7\xe3o</td>\n        <td>Manter premida a tecla SHIFT durante a movimenta\xe7\xe3o</td>\n      </tr>\n      <tr>\n        <td>Aplicar recorte</td>\n        <td>ENTER</td>\n        <td>ENTER</td>\n      </tr>\n      <tr>\n        <td>Cancelar recorte</td>\n        <td>ESC</td>\n        <td>ESC</td>\n      </tr>\n    </tbody>\n  </table>\n</div>\n'),a11ycheck:a('\ufeff<div role=presentation class="ephox-polish-help-article">\n  <div role="heading" aria-level="1" class="ephox-polish-help-h1">Verifica\xe7\xe3o de Acessibilidade</div>\n  <p>A ferramenta de Verifica\xe7\xe3o de Acessibilidade (estando ativada) consegue identificar os problemas de acessibilidade que se seguem em documentos HTML.</p>\n  <table aria-readonly="true" cellpadding="0" cellspacing="0" class="ephox-polish-tabular ephox-polish-a11ycheck-table">\n      <caption>Defini\xe7\xf5es do problema</caption>\n      <thead>\n        <tr>\n          <th scope="col">Problema</th>\n          <th scope="col">WCAG</th>\n          <th scope="col">Descri\xe7\xe3o</th>\n        </tr>\n      </thead>\n      <tbody>\n      <tr>\n        <td>As imagens devem ter uma descri\xe7\xe3o de texto alternativa</td>\n        <td>1.1.1</td>\n        <td>As imagens devem ter um valor de texto alternativo definido, para descrever o tema da imagem aos utilizadores com defici\xeancias visuais. </td>\n      </tr>\n      <tr>\n        <td>O texto alternativo n\xe3o pode ser igual ao do nome de ficheiro da imagem</td>\n        <td>1.1.1</td>\n        <td>Evite usar o nome de ficheiro da imagem como valor de texto alternativo. Escolha um valor de texto alternativo que descreva o tema da imagem.</td>\n      </tr>\n      <tr>\n        <td>As tabelas devem ter legendas</td>\n        <td>1.3.1</td>\n        <td>As tabelas devem ter um breve texto descritivo que indica o conte\xfado da tabela.</td>\n      </tr>\n      <tr>\n        <td>As tabelas complexas devem ter sum\xe1rios</td>\n        <td>1.3.1</td>\n        <td>Tabelas com estruturas complexas (c\xe9lulas com v\xe1rias linhas ou colunas) devem incluir um sum\xe1rio que descreva a estrutura da tabela. </td>\n      </tr>\n      <tr>\n        <td>A legenda e o sum\xe1rio da tabela n\xe3o podem ter o mesmo valor</td>\n        <td>1.3.1</td>\n        <td>A legenda da tabela deve descrever o conte\xfado da tabela, enquanto que o sum\xe1rio da tabela deve descrever a estrutura de tabelas complexas. </td>\n      </tr>\n      <tr>\n        <td>As tabelas devem ter pelo menos uma c\xe9lula de cabe\xe7alho</td>\n        <td>1.3.1</td>\n        <td>As tabelas devem incluir cabe\xe7alhos de linha ou coluna apropriados que descrevam o conte\xfado da linha ou da coluna.<br/><a href="http://webaim.org/techniques/tables/data#th" target="_blank">Obtenha mais informa\xe7\xf5es sobre este t\xf3pico (webaim.org).</a> </td>\n      </tr>\n      <tr>\n        <td>Os cabe\xe7alhos da tabela t\xeam de ser aplicados numa linha ou numa coluna</td>\n        <td>1.3.1</td>\n        <td>Os cabe\xe7alhos das tabelas t\xeam de ser associados \xe0 linha ou \xe0 coluna que descrevem.<br/><a href="http://webaim.org/techniques/tables/data#th" target="_blank">Obtenha mais informa\xe7\xf5es sobre este t\xf3pico (webaim.org).</a> </td>\n      </tr>\n      <tr>\n        <td>Este par\xe1grafo parece um cabe\xe7alho. Se for um cabe\xe7alho, selecione um n\xedvel de cabe\xe7alho.</td>\n        <td>1.3.1</td>\n        <td>Use cabe\xe7alhos para separar documentos por sec\xe7\xf5es. Evite o uso de par\xe1grafos formatados em substitui\xe7\xe3o de cabe\xe7alhos.<br/><a href="http://webaim.org/techniques/semanticstructure/#correctly" target="_blank">Obtenha mais informa\xe7\xf5es sobre este t\xf3pico (webaim.org).</a> </td>\n      </tr>\n      <tr>\n        <td>Os cabe\xe7alhos devem ser aplicados por ordem sequencial. Por exemplo: Cabe\xe7alho 1 deve ser seguido de Cabe\xe7alho 2, n\xe3o de Cabe\xe7alho 3.</td>\n        <td>1.3.1</td>\n        <td>Os cabe\xe7alhos seguintes do documento devem aparecer hierarquicamente, por ordem ascendente ou equivalente.<br/><a href="http://webaim.org/techniques/semanticstructure/#contentstructure" target="_blank">Obtenha mais informa\xe7\xf5es sobre este t\xf3pico (webaim.org).</a> </td>\n      </tr>\n      <tr>\n        <td>Use marcadores de listas para listas</td>\n        <td>1.3.1</td>\n        <td>Verifique se as listas de itens usam a estrutura de listas HTML para representa\xe7\xe3o de listas (<code>&lt;ul&gt;</code> ou <code>&lt;ol&gt;</code> e <code>&lt;li&gt;</code>).</td>\n      </tr>\n      <tr>\n        <td>O texto deve ter uma rela\xe7\xe3o de contraste de 4.5:1</td>\n        <td>1.4.3</td>\n        <td>O texto e o fundo devem ter uma rela\xe7\xe3o de contraste suficiente para que as pessoas com vis\xe3o reduzida consigam ler.</td>\n      </tr>\n      <tr>\n        <td>As liga\xe7\xf5es adjacentes devem ser unidas.</td>\n        <td>2.4.4</td>\n        <td>As hiperliga\xe7\xf5es adjacentes que direcionem para o mesmo recurso devem ser unidas numa \xfanica hiperliga\xe7\xe3o.</td>\n      </tr>\n    </tbody>\n  </table>\n  <div role="heading" aria-level="2" class="ephox-polish-help-h2">Mais informa\xe7\xf5es</div>\n  <p>\n    <a href="http://webaim.org/intro/" target="_blank">Introdu\xe7\xe3o \xe0 acessibilidade web (webaim.org)</a> <br/>\n    <a href="http://www.w3.org/WAI/intro/wcag" target="_blank">Introdu\xe7\xe3o ao WCAG 2.0 (w3.org)</a> <br/>\n    <a href="http://www.section508.gov/" target="_blank">Sec\xe7\xe3o 508 da lei de reabilita\xe7\xe3o dos EUA - <i>US Rehabilitation Act</i> (section508.gov)</a>\n  </p>\n</div>'),markdown:a('\ufeff<div role=presentation class="ephox-polish-help-article">\n  <div class="ephox-polish-help-h1" role="heading" aria-level="1">Formata\xe7\xe3o com Markdown</div>\n  <p>Markdown \xe9 uma sintaxe para cria\xe7\xe3o de estruturas HTML e formata\xe7\xe3o sem a necessidade de usar atalhos de teclado ou menus de acesso. Para usar a formata\xe7\xe3o Markdown, introduza a sintaxe pretendida, seguida pela tecla Enter ou barra de espa\xe7os.</p>\n  <table cellpadding="0" cellspacing="0" class="ephox-polish-tabular ephox-polish-help-table ephox-polish-help-table-markdown" aria-readonly="true">\n      <caption>Sintaxe de formata\xe7\xe3o de teclado</caption>\n      <thead>\n        <tr>\n          <th scope="col">Sintaxe</th>\n          <th scope="col">Resultado em HTML</th>\n        </tr>\n      </thead>\n      <tbody>\n      <tr>\n        <td><pre># Maior t\xedtulo</pre></td>\n        <td><pre>&lt;h1&gt; Maior t\xedtulo&lt;/h1&gt;</pre></td>\n      </tr>\n      <tr>\n        <td><pre>## T\xedtulo maior</pre></td>\n        <td><pre>&lt;h2&gt;T\xedtulo maior&lt;/h2&gt;</pre></td>\n      </tr>\n      <tr>\n        <td><pre>### T\xedtulo grande</pre></td>\n        <td><pre>&lt;h3&gt;T\xedtulo grande&lt;/h3&gt;</pre></td>\n      </tr>\n      <tr>\n        <td><pre>####  T\xedtulo</pre></td>\n        <td><pre>&lt;h4&gt;T\xedtulo&lt;/h4&gt;</pre></td>\n      </tr>\n      <tr>\n        <td><pre>##### T\xedtulo pequeno</pre></td>\n        <td><pre>&lt;h5&gt;T\xedtulo pequeno&lt;/h5&gt;</pre></td>\n      </tr>\n      <tr>\n        <td><pre>###### T\xedtulo mais pequeno</pre></td>\n        <td><pre>&lt;h6&gt;T\xedtulo mais pequeno&lt;/h6&gt;</pre></td>\n      </tr>\n      <tr>\n        <td><pre>* Lista desordenada</pre></td>\n        <td><pre>&lt;ul&gt;&lt;li&gt;Lista desordenada&lt;/li&gt;&lt;/ul&gt;</pre></td>\n      </tr>\n      <tr>\n        <td><pre>1. Lista ordenada</pre></td>\n        <td><pre>&lt;ol&gt;&lt;li&gt;Lista ordenada&lt;/li&gt;&lt;/ol&gt;</pre></td>\n      </tr>\n      <tr>\n        <td><pre>*It\xe1lico*</pre></td>\n        <td><pre>&lt;em&gt;It\xe1lico&lt;/em&gt;</pre></td>\n      </tr>\n      <tr>\n        <td><pre>**Negrito**</pre></td>\n        <td><pre>&lt;strong&gt;Negrito&lt;/strong&gt;</pre></td>\n      </tr>\n      <tr>\n        <td><pre>---</pre></td>\n        <td><pre>&lt;hr/&gt;</pre></td>\n      </tr>\n    </tbody>\n  </table>\n</div>'),shortcuts:a('\ufeff<div role=presentation class="ephox-polish-help-article">\n  <div role="heading" aria-level="1" class="ephox-polish-help-h1">Atalhos de teclado</div>\n  <table aria-readonly="true" cellpadding="0" cellspacing="0" class="ephox-polish-tabular ephox-polish-help-table ephox-polish-help-table-shortcuts">\n    <caption>Comandos do editor</caption>\n    <thead>\n      <tr>\n        <th scope="col">A\xe7\xe3o</th>\n        <th scope="col">Windows</th>\n        <th scope="col">Mac OS</th>\n      </tr>\n    </thead>\n    <tbody>\n      <tr>\n        <td>Anular</td>\n        <td>CTRL + Z</td>\n        <td>\u2318Z</td>\n      </tr>\n      <tr>\n        <td>Refazer</td>\n        <td>CTRL + Y</td>\n        <td>\u2318\u21e7Z</td>\n      </tr>\n      <tr>\n        <td>Negrito</td>\n        <td>CTRL + B</td>\n        <td>\u2318B</td>\n      </tr>\n      <tr>\n        <td>It\xe1lico</td>\n        <td>CTRL + I</td>\n        <td>\u2318I</td>\n      </tr>\n      <tr>\n        <td>Sublinhado</td>\n        <td>CTRL + U</td>\n        <td>\u2318U</td>\n      </tr>\n      <tr>\n        <td>Aumentar avan\xe7o</td>\n        <td>CTRL + ]</td>\n        <td>\u2318]</td>\n      </tr>\n      <tr>\n        <td>Diminuir avan\xe7o</td>\n        <td>CTRL + [</td>\n        <td>\u2318[</td>\n      </tr>\n      <tr>\n        <td>Adicionar hiperliga\xe7\xe3o</td>\n        <td>CTRL + K</td>\n        <td>\u2318K</td>\n      </tr>\n      <tr>\n        <td>Localizar</td>\n        <td>CTRL + F</td>\n        <td>\u2318F</td>\n      </tr>\n      <tr>\n        <td>Modo de ecr\xe3 inteiro (alternar)</td>\n        <td>CTRL + SHIFT + F</td>\n        <td>\u2318\u21e7F</td>\n      </tr>\n      <tr>\n        <td>Caixa de di\xe1logo de ajuda (abrir)</td>\n        <td>CTRL + SHIFT + H</td>\n        <td>\u2303\u2325H</td>\n      </tr>\n      <tr>\n        <td>Menu de contexto (abrir)</td>\n        <td>SHIFT + F10</td>\n        <td>\u21e7F10\u200e\u200f</td>\n      </tr>\n      <tr>\n        <td>Preenchimento autom\xe1tico de c\xf3digo</td>\n        <td>CTRL + Barra de espa\xe7os</td>\n        <td>\u2303Barra de espa\xe7os</td>\n      </tr>\n      <tr>\n        <td>Vista de C\xf3digo Acess\xedvel</td>\n        <td>CTRL + SHIFT + U</td>\n        <td>\u2318\u2325U</td>\n      </tr>\n    </tbody>\n  </table>\n  <div class="ephox-polish-help-note" role="note">*Nota: algumas funcionalidades podem estar desativadas pelo administrador.</div>\n</div>\n')})}();