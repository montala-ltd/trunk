<?php


$lang["csv_upload_nav_link"]='Carregamento de CSV.';
$lang["csv_upload_intro"]='Este plugin permite criar ou atualizar recursos através do upload de um arquivo CSV. O formato do CSV é importante.';
$lang["csv_upload_condition1"]='<li>Verifique se o arquivo CSV está codificado usando <b>UTF-8 sem BOM</b>.</li>';
$lang["csv_upload_condition2"]='<li>O CSV deve ter uma linha de cabeçalho</li>';
$lang["csv_upload_condition3"]='<li>Para poder carregar arquivos de recursos posteriormente usando a funcionalidade de substituição em lote, deve haver uma coluna chamada \'Nome do arquivo original\' e cada arquivo deve ter um nome exclusivo</li>';
$lang["csv_upload_condition4"]='<li>Todos os campos obrigatórios para quaisquer recursos recém-criados devem estar presentes no CSV</li>';
$lang["csv_upload_condition5"]='<li>Para colunas que possuem valores contendo <b>vírgulas (,)</b>, certifique-se de formatá-las como tipo <b>texto</b> para que não seja necessário adicionar aspas (""). Ao salvar como um arquivo csv, verifique a opção de citar células do tipo texto.</li>';
$lang["csv_upload_condition6"]='Você pode baixar um exemplo de arquivo CSV clicando em <a href="../downloads/csv_upload_example.csv">csv-upload-example.csv</a>.';
$lang["csv_upload_condition7"]='<li>Para atualizar os dados de recursos existentes, você pode baixar um CSV com os metadados existentes clicando na opção \'Exportar CSV - metadados\' no menu de ações de coleções ou resultados de pesquisa.</li>';
$lang["csv_upload_condition8"]='Você pode reutilizar um arquivo de mapeamento CSV previamente configurado clicando em \'Carregar arquivo de configuração CSV\'.';
$lang["csv_upload_error_no_permission"]='Você não tem as permissões corretas para fazer o upload de um arquivo CSV.';
$lang["check_line_count"]='Foram encontradas pelo menos duas linhas no arquivo CSV.';
$lang["csv_upload_file"]='Selecionar arquivo CSV.';
$lang["csv_upload_default"]='Padrão';
$lang["csv_upload_error_no_header"]='Não foi encontrada nenhuma linha de cabeçalho no arquivo.';
$lang["csv_upload_update_existing"]='Atualizar recursos existentes? Se isso não for marcado, novos recursos serão criados com base nos dados do CSV.';
$lang["csv_upload_update_existing_collection"]='Atualizar apenas recursos em uma coleção específica?';
$lang["csv_upload_process"]='Por favor, traduza: Processo.';
$lang["csv_upload_add_to_collection"]='Adicionar recursos recém-criados à coleção atual?';
$lang["csv_upload_step1"]='Passo 1 - Selecionar arquivo.';
$lang["csv_upload_step2"]='Passo 2 - Opções padrão de recursos.';
$lang["csv_upload_step3"]='Passo 3 - Mapear colunas para campos de metadados.';
$lang["csv_upload_step4"]='Passo 4 - Verificando dados CSV.';
$lang["csv_upload_step5"]='Passo 5 - Processamento de CSV.';
$lang["csv_upload_update_existing_title"]='Atualizar recursos existentes.';
$lang["csv_upload_update_existing_notes"]='Selecione as opções necessárias para atualizar os recursos existentes.';
$lang["csv_upload_create_new_title"]='Criar novos recursos.';
$lang["csv_upload_create_new_notes"]='Selecione as opções necessárias para criar novos recursos.';
$lang["csv_upload_map_fields_notes"]='Corresponder as colunas no CSV aos campos de metadados necessários. Clicar em \'Próximo\' irá verificar o CSV sem alterar os dados de fato.';
$lang["csv_upload_map_fields_auto_notes"]='Os campos de metadados foram pré-selecionados com base em nomes ou títulos, mas por favor verifique se estão corretos.';
$lang["csv_upload_workflow_column"]='Selecione a coluna que contém o ID do estado do fluxo de trabalho.';
$lang["csv_upload_workflow_default"]='Estado de fluxo de trabalho padrão se nenhuma coluna for selecionada ou se nenhum estado válido for encontrado na coluna.';
$lang["csv_upload_access_column"]='Selecione a coluna que contém o nível de acesso (0=Aberto, 1=Restrito, 2=Confidencial)';
$lang["csv_upload_access_default"]='Nível de acesso padrão se nenhuma coluna for selecionada ou se nenhum acesso válido for encontrado na coluna.';
$lang["csv_upload_resource_type_column"]='Selecione a coluna que contém o identificador do tipo de recurso.';
$lang["csv_upload_resource_type_default"]='Tipo de recurso padrão se nenhuma coluna for selecionada ou se nenhum tipo válido for encontrado na coluna.';
$lang["csv_upload_resource_match_column"]='Selecione a coluna que contém o identificador do recurso.';
$lang["csv_upload_match_type"]='Corresponder recurso com base no ID do recurso ou no valor do campo de metadados?';
$lang["csv_upload_multiple_match_action"]='Ação a ser tomada se forem encontrados vários recursos correspondentes.';
$lang["csv_upload_validation_notes"]='Verifique as mensagens de validação abaixo antes de prosseguir. Clique em Processar para confirmar as alterações.';
$lang["csv_upload_upload_another"]='Carregar outro CSV.';
$lang["csv_upload_mapping config"]='Configurações de mapeamento de colunas CSV.';
$lang["csv_upload_download_config"]='Baixar configurações de mapeamento CSV como arquivo.';
$lang["csv_upload_upload_config"]='Carregar arquivo de mapeamento CSV.';
$lang["csv_upload_upload_config_question"]='Carregar arquivo de mapeamento CSV? Use isso se você já carregou um CSV semelhante antes e salvou a configuração.';
$lang["csv_upload_upload_config_set"]='Conjunto de configurações CSV.';
$lang["csv_upload_upload_config_clear"]='Limpar configuração de mapeamento CSV.';
$lang["csv_upload_mapping_ignore"]='NÃO UTILIZAR.';
$lang["csv_upload_mapping_header"]='Cabeçalho da Coluna.';
$lang["csv_upload_mapping_csv_data"]='Dados de amostra de CSV.';
$lang["csv_upload_using_config"]='Usando a configuração CSV existente.';
$lang["csv_upload_process_offline"]='Processar arquivo CSV offline? Isso deve ser usado para arquivos CSV grandes. Você será notificado por meio de uma mensagem do ResourceSpace assim que o processamento estiver concluído.';
$lang["csv_upload_oj_created"]='Tarefa de upload CSV criada com ID de tarefa # %%JOBREF%%. <br/>Você receberá uma mensagem do sistema ResourceSpace assim que a tarefa for concluída.';
$lang["csv_upload_oj_complete"]='Carregamento de trabalho CSV concluído. Clique no link para visualizar o arquivo de log completo.';
$lang["csv_upload_oj_failed"]='Falha na carga de trabalho de upload CSV.';
$lang["csv_upload_processing_x_meta_columns"]='Processando %count colunas de metadados.';
$lang["csv_upload_error_in_progress"]='Processamento abortado - este arquivo CSV já está sendo processado.';
$lang["csv_upload_error_file_missing"]='Erro - arquivo CSV ausente: %%FILE%%.';
$lang["csv_upload_full_messages_link"]='Mostrando apenas as primeiras 1000 linhas, para baixar o arquivo de log completo, clique <a href=\'%%LOG_URL%%\' target=\'_blank\'>aqui</a>.';
$lang["csv_upload_ignore_errors"]='Ignorar erros e processar o arquivo de qualquer maneira.';
$lang["csv_upload_process_offline_quick"]='Ignorar validação e processar arquivo CSV offline? Isso deve ser usado apenas para arquivos CSV grandes quando os testes em arquivos menores foram concluídos. Você será notificado por meio de uma mensagem do ResourceSpace assim que o upload for concluído.';
$lang["csv_upload_force_offline"]='Este arquivo CSV grande pode levar muito tempo para ser processado, portanto, será executado offline. Você será notificado por meio de uma mensagem do ResourceSpace assim que o processamento estiver concluído.';
$lang["csv_upload_recommend_offline"]='Este arquivo CSV grande pode levar muito tempo para ser processado. É recomendável que os trabalhos offline sejam habilitados se você precisar processar arquivos CSV grandes.';
$lang["csv_upload_createdfromcsvupload"]='Criado a partir do plugin de upload de CSV.';
$lang["csv_upload_processing_complete"]='Processamento concluído em %%TIME%% (%%HOURS%% horas, %%MINUTES%% minutos, %%SECONDS%% segundos).';