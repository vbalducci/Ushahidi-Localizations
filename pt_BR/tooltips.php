<?php defined('SYSPATH') OR die('No direct access allowed.');
// DO NOT EDIT
// This file is automatically generated from the matching PO file
// Updates should be made through Transifex
// I18n generated at: 2012-08-24 00:04+0000
// PO revision date:  2012-08-22 14:25+0000
$lang = array(
	'actions' => array(
		'add_to_category' => 'Isso acrescenta o relatório para categorias adicionais. Se você selecionar uma categoria aqui e já tem o relatório Categoria 2 ligado a ele, o relatório terá, então, ambas categorias 1 e 2.',
		'approve' => 'Aprova um relatório ou não. Se aprovado, ele vai aparecer publicamente.',
		'assign_badge' => 'Você vai ser capaz de atribuir uma emblema para o usuário iniciador. Escolha o emblema que é atribuído aqui.',
		'between_times' => 'Trata-se de uma série de horas e/ou minutos entre duas vezes no formato de 24 horas. Se introduzir uma hora mais cedo no segundo campo, será invertida com o primeiro. Estes tempos devem estar dentro de um único dia. Além disso, este tempo é verificado com o que você configurou nas configurações do site e <strong>não</ strong> necessariamente o fuso horário do usuário interagindo com a sua projeto. Deixe em 0:00 para 00:00 para ignorar esse qualificador.',
		'category' => 'Se você gostaria de ativar iniciadores somente quando uma determinada categoria está sendo usada, você pode definir isso aqui. Isso permitirá que o iniciador seja ativado se apenas uma das categorias é utilizada. Para o caso de você selecionar Categorias 1 e 2, um relatório será enviado através das Categoria 2 e Categoria 3, que vão passar no teste.',
		'days_of_the_week' => 'Se essas ações acontecem em determinados dias da semana, defina isso aqui. Tenha em mente o dia é determinada pelo fuso horário configurado em sua instalação. Segure shift, comando ou control para seleção de dias múltiplos.',
		'email_body' => 'Corpo do e-mail que será enviado.',
		'email_subject' => 'Assunto do e-mail que será enviado',
		'keywords' => 'Você pode optar por deixar em branco se você não quiser verificar as palavras-chave. Se você adicionar palavras aqui, você vai precisar separá-los com uma vírgula (,). Por exemplo, se você deseja ativar um iniciador quando alguém menciona "amor" ou "paz" em sua mensagem, você vai ter que adicionar "paz, amor" na caixa de palavras-chave.',
		'location' => 'Você pode escolher qualquer lugar ou um local específico. Se você selecionar um local específico, você será convidado para desenhar uma caixa ao redor da área que qualifica uma ação. Por exemplo, se você quer o iniciador para ser ativado quando alguém apresenta um relatório no Brasil, você irá selecionar "área específica" e, em seguida, desenhar a caixa de todo o Brasil. Você pode fazer essas caixas tão pequeno ou tão grande quanto você gostaria. Você também pode desenhar caixas múltiplas.',
		'on_specific_count' => 'Este qualificador irá ativar o gatilho na contagem N-th tanto para a base de usuários toda a coletividade ou para cada usuário individual. Deixe em branco a ignorá-lo.',
		'report_title' => 'Este é o título padrão para adicionar ao relato.',
		'response' => 'Se todos os qualificadores acima são passados, o iniciador vai gerar uma resposta. Isto pode variar de aprovar um relatório até um e-mail a um usuário. Selecione a resposta aqui para ativar opções adicionais para as respostas específicas.',
		'send_to' => 'Se você selecionar "Usar Iniciador", o e-mail será enviado para o usuário que executou a ação. Se você selecionar o botão de opção ao lado da caixa de entrada, você poderá digitar um endereço de e-mail personalizado. Isso é útil se você está a criação de iniciadores para notificar as pessoas quando certas partes estão vendo relatórios, check-ins ou alguma outra atividade.',
		'specific_days' => 'Você pode selecionar vários dias aqui. Datas são determinadas pela definição de fuso horário implantação. A fim de padrão para todas as datas, não selecione qualquer data.',
		'trigger' => 'O iniciador é o principal componente da criação de Iniciadores de Ação . Aqui é onde você determina se gostaria que algo acontecesse quando alguém envia um relatório, realiza um check-in, etc. Você vai ser capaz de filtrar as respostas a essas ações depois de o selecionar.',
		'user' => 'O usuário pode ser qualquer um, ou um usuário específico. Se você gostaria apenas usuários específicos para ativar um iniciador, você deve selecioná-los aqui. Caso contrário, você vai querer deixar este como "qualquer um", já que a maioria dos iniciadores são criados para todos os usuários interajam com o sistema',
		'verify' => 'Marca um relatório como verificado ou não.',
	) ,
	'change_picture' => 'Páginas de perfil neste site usam Gravatar. Ao clicar na imagem, você será levado para o site Gravatar onde você pode mudar a sua foto do perfil.',
	'default_value' => 'Separe cada valor com uma vírgula, por exemplo, valor1, valor2.',
	'radio_choices' => 'Separe cada valor com uma vírgula, por exemplo, valor1, valor2. No caso de você querer definir um valor padrão, terminar a sua lista de opções com :: por exemplo: Se você quiser fazer o padrão valor3, ele deve ser valor1, valor2, valor3 :: value3',
	'dropdown_choices' => 'Separar cada item escolha com uma vírgula, por exemplo, Item 1, Item 2 etc',
	'private_to' => 'Comece a digitar a lista de membros.',
	'private_subject' => 'Assunto da mensagem privada',
	'private_message' => 'Mensagem privada',
	'profile_color' => 'Você pode selecionar uma cor que vai aparecer em sua foto de perfil em seu perfil público. Esta cor também será o ponto de cor que aparece no mapa para seus checkins',
	'profile_email' => 'Seu e-mail',
	'profile_name' => 'Seu nome completo',
	'profile_new_password' => 'Se definida, esta será a sua nova senha. Deixar este campo em branco se você deseja manter a sua senha atual.',
	'profile_new_users_password' => 'Esta é uma exigência ao criar um novo usuário e será a senha de usuários. Você deve informar o seu novo usuário para alterar sua senha após entrar pela primeira vez.',
	'profile_notify' => 'Ao clicar em SIM, você receberá alertas via email sempre que um novo relato ou comentário for enviado ao seu site.',
	'profile_password' => 'Sua senha. Deixe esse campo vazio se quiser manter a sua senha atual.',
	'profile_public' => 'Seu perfil pode ser visto por qualquer pessoa na Internet, se você marcar essa opção. Esta é também a maneira mais fácil de mostrar os relatórios que você apresentados, seus checkins, emblemas, etc tudo em uma página',
	'profile_public_url' => 'Este é o endereço onde o seu perfil público pode ser encontrado.',
	'profile_username' => 'Não é possível mudar o nome de usuário.',
	'settings_access_level' => 'Níveis de acesso são usados ​​para restringir o acesso a dados de campo de formulário personalizado. Maiores níveis de acesso podem acessar campos de níveis mais baixos. Superadmin tem o nível mais alto de acesso (100). Dados públicos são exibido no menor nível de acesso (0). Os membros têm nível de acesso 10. Admin é o nível de acesso 90 por padrão.',
	'settings_alert_email' => 'É o endereço de email que será usado para o envio de alertas.',
	'settings_allow_alerts' => 'Permitir que usuários subscrevam alertas via web.',
	'settings_allow_clustering' => 'Permite que relatos parecidos sejam agrupados em um único ponto no site.',
	'settings_allow_comments' => 'Permite que usuários deixem comentários em relatos no site principal.',
	'settings_allow_feed' => 'Permite que feeds de RSS sejam exibidos no site principal.',
	'settings_allow_reports' => 'Permite que usuários enviem informações por meio de um formulário online.',
	'settings_api_default_record_limit' => 'Quantidade padrão de dados a serem buscados por solicitação API.',
	'settings_api_max_record_limit' => 'Quantidade máxima de dados a serem buscados por solicitação API.',
	'settings_api_max_requests_per_ip' => 'Quantidade máxima de dados a serem solicitados da API por endereço de IP.',
	'settings_banner' => 'O banner site aparece no topo da parte frontal do seu site, se o tema que você está usando oferece suporte a ele. O tamanho recomendado para esta faixa vai depender do tema que você está usando. Tenha em atenção que este vai substituir o título do site e tagline no topo da página.',
	'settings_blocks_per_row' => 'Número de colunas do bloco que serão exibidos em cada linha.',
	'settings_cache_pages' => 'Habilitar ou desabilitar page caching. Isto faz com que as páginas sejam carregadas rapidamente pois reduz o tempo de resposta. Recomendamos usar caching em sites de grande tráfico. **Lembre-se que os relatos serão preenchidos na plataforma baseado no calendário que você definiu (tempo de vida do Cache).',
	'settings_cache_pages_lifetime' => 'Marcar o tempo de vida do cache.',
	'settings_checkins' => 'Esta configuração permite o uso de checkins em seu ushahidi. Trata-se de um tipo de relato simplificado, que não passa por moderação antes da publicação e requer que o seu site seja configurado de uma determinada maneira. Ao habilitar esse recurso, certifique-se de sua configuração de fuso horário está em UTC e seu tema suporta checkins. Apenas temas com checkin estarão habilitados na página de configurações de addons/temas.',
	'settings_configure_map' => 'Marcar mapa para cobrir uma região específica ',
	'settings_default_category_colors' => 'Marcar um código de cor para todas as categorias do site',
	'settings_default_category_icons' => 'Definir um ícone para todas as categorias no site.',
	'settings_default_location' => 'Esse é o país onde o site está sendo usado',
	'settings_display_contact' => 'Liga ou desliga a seção de contato no site principal.',
	'settings_display_howtohelp' => 'Liga ou desliga a seção como ajudar no site principal.',
	'settings_display_items_per_page' => 'Quantidade de relatos exibidos por página no site principal.',
	'settings_display_items_per_page_admin' => 'Quantidade de relatos exibidos por página no painel de controle.',
	'settings_flsms_download' => 'Esse é o hub das mensagens de entrada',
	'settings_flsms_synchronize' => 'Isto sincroniza as mensagens no hub com a plataforma Ushahidi',
	'settings_flsms_text_1' => 'Números de telefones por meio dos quais as mensagens são recebidas.',
	'settings_google_analytics' => 'Rastreia visitantes do site. Veja estatísticas detalhadas sobre os visitantes',
	'settings_locale' => 'Define o idioma que será usado no site.',
	'settings_manually_approve_users' => 'Se você definir esta opção para sim, você deve aprovar cada usuário individual que cria uma conta em seu site, atribuindo-lhes funções (Membro ou seja, Administrador, Superadministrador).',
	'settings_map_provider' => 'Define qual mapa será usado no site.',
	'settings_map_timeline' => 'Isto mostra a linha do tempo com base na data e hora relatórios foram apresentados',
	'settings_private_deployment' => 'Ao definir esse valor como verdadeiro ou sim, a o seu ushahidi será privado e apenas os usuários que você especificar poderão acessar o sistema.',
	'settings_require_email_confirmation' => 'Usuários receberão um link de confirmação para clicar antes de serem autorizados a entrar se aqui é definido como sim. Se você ativar esta após a instalação aceitar usuários, ele será solicitado a confirmar a sua conta antes de serem autorizados a continuar a usá-lo.',
	'settings_server_host' => 'Esse é onde os emails são arquivados',
	'settings_server_password' => 'Esse é a senha para o endereço de email que recebe os relatórios',
	'settings_server_port' => 'Isto é obrigatório para aceitar conexões de entrada deste endereço de email',
	'settings_server_ssl_support' => 'É necessário para aumentar a segurança da conexão.',
	'settings_server_type' => 'É necessário para receber emails do servidor.',
	'settings_server_username' => 'É o email que recebe relatos.',
	'settings_share_site_stats' => 'Os dados de acesso são gravados no servidor controlado pelo Ushahidi. Ao habilitar esta opção, você obtém acesso aos dados de acesso através do painel de administração. Desabilitando, você não coletará dados de acesso e ficará sem acesso aos dados coletados enquanto essa função estiver desabilitada.',
	'settings_site_copyright_statement' => 'É uma boa ideia definir o copyright do seu trabalho. Para obter ajudar para determinar a melhor licença para o seuc caso, acesse http://creativecommons.org/choose/.',
	'settings_site_email' => 'É o email que receberá relatos e mensagens enviadas por meio do formulário de contato.',
	'settings_site_message' => 'Esse texto aparecerá acima do mapa, na homepage. É útil para prover informações importantes a visitantes do site.',
	'settings_site_name' => 'Trata-se do nome do site, e aparecerá no topo do site principal.',
	'settings_site_submit_report_message' => 'Esta é uma mensagem que vai aparecer na página do relatório de envio. Isso é bom para renúncias ou instruções adicionais para os visitantes que estão reportando.',
	'settings_site_tagline' => 'Em poucas palavras, explique o que o site é.',
	'settings_site_timezone' => 'Este é o fuso horário que seu site irá operar. Isso tem um impacto sobre as ações que você configurou que utilizar o tempo e data, bem como o tempo padrão atual de relatórios sobre a frente e para trás final do site',
	'settings_twitter_configuration' => 'Defina a hashtag que será usada no twitter',
);
