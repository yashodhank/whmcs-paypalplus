﻿<?php 
/** 
 * Módulo PayPal Plus por Mauricio Gofas (gofas.net)
 * @copyright Copyright (c) gofas.net 2016
 * @see https://gofas.net
*/
// Configuações
function gofaspaypalplus_config($params) {
	return array(
		// Nome de exibição amigável para o gateway
		'FriendlyName' => array(
			'Type' => 'System',
			'Value' => 'Gofas PayPal Plus',
		),	
		// Client ID Live
		'clientid' => array(
			'FriendlyName' => 'Live Client ID',
			'Type' => 'text',
			'Size' => '60',
			'Default' => '',
			'Description' => 'Insira o Client ID de acesso à REST API do <a style="text-decoration:underline;" target="_blank" href="https://developer.paypal.com/developer/applications/">seu aplicativo</a>.',
		),
		// Client Secret Live
		'clientsecret' => array(
			'FriendlyName' => 'Live Client Secret',
			'Type' => 'text',
			'Size' => '60',
			'Default' => '',
			'Description' => 'Insira o Client Secret do seu aplicativo.',
		),
		// Client ID Sandbox
		'clientidsandbox' => array(
			'FriendlyName' => 'Sandbox Client ID',
			'Type' => 'text',
			'Size' => '60',
			'Default' => '',
			'Description' => 'Insira o Client ID Sandbox (ambiente de testes) do seu aplicativo.',
		),
		// Client Secret Sandbox
		'clientsecretsandbox' => array(
			'FriendlyName' => 'Sandbox Client Secret',
			'Type' => 'text',
			'Size' => '60',
			'Default' => '',
			'Description' => 'Insira o Client Secret Sandbox (ambiente de testes) do seu aplicativo.',
		),
		// Testar?
		'sandboxmode' => array(
			'FriendlyName' => 'Sandbox',
			'Type' => 'yesno',
			'Description' => 'Marque essa opção se você estiver utilizando o par de chaves "Client_Id" e "Client_Secret" do modo Sandbox (Desenvolvimento).',
		),
		// Debug?
		'debugmode' => array(
			'FriendlyName' => 'Debug',
			'Type' => 'yesno',
			'Description' => 'Marque essa opção para exibir resultados e erros retornados pela API PayPal e API interna do WHMCS.<b><br/>Por segurança, NÃO use isso em produção, apenas para testes ou se precisar diagnosticar erros.',
		),
		// Notificar admin sobre erros
		'emailonerror' => array(
			'FriendlyName' => 'Enviar email em caso de erro',
			'Type' => 'text',
			'Size' => '10',
			'Default' => '',
			'Description' => 'Adicione o ID do departamento de suporte que será notificado em caso de erro nas transações. Deixe em branco para desativar.',
		),
		// whmcs admin
		'admin' => array(
			'FriendlyName' => 'Administrador atribuído',
			'Type' => 'text',
			'Size' => '10',
			'Default' => '',
			'Description' => 'Insira o nome de usuário ou ID do administrador que será atribuído as transações. Necessário para usar a API interna do WHMCS.',
		),
		// customfield CPF
		'customfieldcpf' => array(
			'FriendlyName' => 'Ordem do campo CPF ou CNPJ',
			'Type' => 'text',
			'Size' => '10',
			'Default' => '0',
			'Description' => 'Insira a ordem de exibição do <a style="text-decoration: underline;" href="/admin/configcustomfields.php" target="_blank">campo personalizado</a> criado para coletar o CPF do cliente.',
		),
		// customfield CNPJ
		'customfieldcnpj' => array(
			'FriendlyName' => 'Ordem do campo CNPJ',
			'Type' => 'text',
			'Size' => '10',
			'Default' => '1',
			'Description' => 'Insira a ordem de exibição do <a style="text-decoration: underline;" href="/admin/configcustomfields.php" target="_blank">campo personalizado</a> criado para coletar o CNPJ do cliente. Deixe em branco se você usa apenas um campo para CPF e CNPJ.',
		),
		// Botão "Finalizar Pagamento" do PayPal ou WHMCS?
		'whmcspaybutton' => array(
			'FriendlyName' => 'Utilizar botão Finalizar Pagamento do Módulo',
			'Type' => 'yesno',
			'Description' => 'Marque essa opção para utilizar o botão de pagamento do módulo ao invés do botão do PayPal.',
		),
		// Botão "Finalizar Pagamento"
		'paybuttonimage' => array(
			'FriendlyName' => 'Imagem do botão "Finalizar Pagamento"',
			'Type' => 'text',
			'Size' => '90',
			'Default' => '',
			'Description' => '<br/>Insira o URL da imagem que será usada como botão "Finalizar Pagamento" (tamanho recomendado: entre 160x40px e 339x40px).',
		),
		// Crédito
		'credits' => array(
			'Description' => '<div style="background: #dde9f9;padding: 5px 15px;">
			&copy; '.date('Y').' <a target="_blank" href="https://gofas.net">Gofas.net</a> | <a target="_blank" href="http://whmcs-paypalplus.gofas.net">Documentação</a> | <a target="_blank" href="http://whmcs-paypalplus.gofas.net/#suporte">Suporte</a><br/>
			</div>',
		),
	);
}
?>