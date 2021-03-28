<?php
/**
 * Portugese Language file for PhpGedView.
 *
 * phpGedView: Genealogy Viewer
 * Copyright (C) 2002 to 2021  PGV Development Team.  All rights reserved.
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 *
 * @package PhpGedView
 * @author José Monteiro
 * @website http://existologoescrevo.blogspot.com/
 * @e-mail jalberto@bluewin.ch
 * @version $Id$
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

$pgv_lang["add_marriage"]					= "Adicionar detalhes casamento";
$pgv_lang["edit_concurrency_change"] 		= "Este registro foi recentemente alterada pela <i>#CHANGEUSER#</i> em #CHANGEDATE#";
$pgv_lang["edit_concurrency_msg2"]			= "O registro com identificação #PID# foi alterado por outro membro desde que você acessou.";
$pgv_lang["edit_concurrency_msg1"]			= "Ocorreu um erro ao criar a forma Editar. Outro membro pode ter alterado esse registro desde que você já visualizou.";
$pgv_lang["edit_concurrency_reload"]		= "Por favor, recarregue a página anterior para se certificar que você está trabalhando com o registro mais recente.";
$pgv_lang["admin_override"]					= "Opção do administrador";
$pgv_lang["no_update_CHAN"]					= "Não atualize o registro CHAN (última alteração)";
$pgv_lang["select_events"]					= "Selecionar eventos";
$pgv_lang["source_events"]					= "Ligar eventos com esta fonte";
$pgv_lang["advanced_name_fields"]			= "Nomes adicionais (cognome, nome de casada, etc.)";
$pgv_lang["accept_changes"]					= "Aceitar / Rejeitar Alterações";
$pgv_lang["replace"]						= "Substituir Registro";
$pgv_lang["append"]							= "Adicionar Registro";
$pgv_lang["review_changes"]					= "Rever Alterações";
$pgv_lang["remove_object"]					= "Excluir Objeto";
$pgv_lang["remove_links"]					= "Excluir Ligações";
$pgv_lang["show_thumbnail"]					= "Exibir Miniaturas";
$pgv_lang["link_media"]						= "Ligar Mídia";
$pgv_lang["to_person"]						= "Com a Pessoa";
$pgv_lang["to_family"]						= "Com a Família";
$pgv_lang["to_source"]						= "Com a Fonte";
$pgv_lang["to_note"]						= "Com a Nota Compartilhados";
$pgv_lang["to_repository"]					= "Com a Repositório";
$pgv_lang["edit_fam"]						= "Editar Família";
$pgv_lang["edit_repo"]						= "Editar Repositório";
$pgv_lang["copy"]							= "Copiar";
$pgv_lang["cut"]							= "Recortar";
$pgv_lang["sort_by_birth"]					= "Ordenado por nascimento";
$pgv_lang["reorder_children"]				= "Reordenar os Filhos";
$pgv_lang["reorder_media"]					= "Reordenar mídia";
$pgv_lang["reorder_media_title"]			= "Arraste-e-soltar Miniaturas para re-ordenar os itens de mídia";
$pgv_lang["reorder_media_window"]			= "Reordenar mídia (janela)";
$pgv_lang["reorder_media_window_title"]		= "Clique em uma linha, arraste-e-soltar para re-ordenar mídia";
$pgv_lang["reorder_media_save"]				= "Guardar a mídia ordenados para o banco de dados";
$pgv_lang["reorder_media_reset"]			= "Reiniciar a ordem original";
$pgv_lang["reorder_media_cancel"]			= "Sair e retornar";
$pgv_lang["add_from_clipboard"]				= "Adicionar da prancheta";
$pgv_lang["record_copied"]					= "Registro copiado para a Área de Transferência";
$pgv_lang["add_unlinked_person"]			= "Adicionar uma pessoa sem parentes a árvore";
$pgv_lang["add_unlinked_source"]			= "Adicionar uma fonte desassociou";
$pgv_lang["add_unlinked_note"]				= "Adicionar uma nota desassociou";
$pgv_lang["add_unlinked"]					= "Registos desassociados";
$pgv_lang["server_file"]					= "Nome do arquivo no servidor";
$pgv_lang["server_file_advice"]				= "Não altere para manter o nome original do arquivo.";
$pgv_lang["server_file_advice2"]			= "Informe uma URL iniciada por «http://».";
$pgv_lang["server_folder_advice"]			= "O máximo de níveis permitidos abaixo da pasta padrão de mídia «#GLOBALS[MEDIA_DIRECTORY]#» é de  #GLOBALS[MEDIA_DIRECTORY_LEVELS]#. Suprima «#GLOBALS[MEDIA_DIRECTORY]#» do nome da pasta de destino.";
$pgv_lang["server_folder_advice2"]			= "O campo \"Nome do Arquivo\" não deve conter uma URL.";
$pgv_lang["add_linkid_advice"]				= "Informe ou pesquise a ID da pessoa, família, ou fonte a qual esta mídia deverá estar ligada.";
$pgv_lang["use_browse_advice"]				= "Use o botão de «Procurar» e selecione em seu computador o arquivo desejado.";
$pgv_lang["add_media_other_folder"]			= "Outra pasta...por favor informe";
$pgv_lang["add_media_file"]					= "Arquivo de mídia existe no servidor";
$pgv_lang["main_media_ok1"]					= "Arquivo principal de mídia <b>#GLOBALS[oldMediaName]#</b> foi renomeado para <b>#GLOBALS[newMediaName]#</b>.";
$pgv_lang["main_media_ok2"]					= "Arquivo principal de mídia <b>#GLOBALS[oldMediaName]#</b> foi movido de <b>#GLOBALS[oldMediaFolder]#</b> para <b>#GLOBALS[newMediaFolder]#</b>.";
$pgv_lang["main_media_ok3"]					= "Pasta principal de mídia foi movida e renomeada de <b>#GLOBALS[oldMediaFolder]##GLOBALS[oldMediaName]#</b> para <b>#GLOBALS[newMediaFolder]##GLOBALS[newMediaName]#</b>.";
$pgv_lang["main_media_fail0"]				= "Pasta principal de mídia <b>#GLOBALS[oldMediaFolder]##GLOBALS[oldMediaName]#</b> não existe.";
$pgv_lang["main_media_fail1"]				= "Não foi possível renomear o arquivo principal de mídia <b>#GLOBALS[oldMediaName]#</b> para <b>#GLOBALS[newMediaName]#</b>.";
$pgv_lang["main_media_fail2"]				= "Não foi possível mover o arquivo principal de mídia <b>#GLOBALS[oldMediaName]#</b> de <b>#GLOBALS[oldMediaFolder]#</b> para <b>#GLOBALS[newMediaFolder]#</b>.";
$pgv_lang["main_media_fail3"]				= "Não foi possível mover e renomear o arquivo principal de mídia de <b>#GLOBALS[oldMediaFolder]##GLOBALS[oldMediaName]#</b> para <b>#GLOBALS[newMediaFolder]##GLOBALS[newMediaName]#</b>.";
$pgv_lang["resn_disabled"]					= "Nota: Você deve ativar o recurso «#pgv_lang[PRIVACY_BY_RESN]#» para esta configuração tenha efeito.";
$pgv_lang["thumb_media_ok1"]				= "Pasta de miniaturas <b>#GLOBALS[oldMediaName]#</b> foi renomeada para <b>#GLOBALS[newMediaName]#</b>.";
$pgv_lang["thumb_media_ok2"]				= "Pasta de miniaturas <b>#GLOBALS[oldMediaName]#</b> movida de <b>#GLOBALS[oldThumbFolder]#</b> para <b>#GLOBALS[newThumbFolder]#</b>.";
$pgv_lang["thumb_media_ok3"]				= "<b>#GLOBALS[oldThumbFolder]##GLOBALS[oldMediaName]#</b> movido e renomeado para <b>#GLOBALS[newThumbFolder]##GLOBALS[newMediaName]#</b>.";
$pgv_lang["thumb_media_fail0"]				= "Pasta de miniaturas <b>#GLOBALS[oldThumbFolder]##GLOBALS[oldMediaName]#</b> não existe.";
$pgv_lang["thumb_media_fail1"]				= "Não foi possível renomear <b>#GLOBALS[oldMediaName]#</b> para  <b>#GLOBALS[newMediaName]#</b>.";
$pgv_lang["thumb_media_fail2"]				= "Não foi possível mover <b>#GLOBALS[oldMediaName]#</b> de <b>#GLOBALS[oldThumbFolder]#</b> para <b>#GLOBALS[newThumbFolder]#</b>.";
$pgv_lang["thumb_media_fail3"]				= "Não foi possível mover e renomear <b>#GLOBALS[oldThumbFolder]##GLOBALS[oldMediaName]#</b> para <b>#GLOBALS[newThumbFolder]##GLOBALS[newMediaName]#</b>.";
$pgv_lang["thumb_create_ok0a"]				= "Miniatura <b>#GLOBALS[imageThumbnail]#</b> criada automaticamente.";
$pgv_lang["thumb_create_ok0b"]				= "Miniatura #GLOBALS[imageThumbnail]# criada automaticamente.";
$pgv_lang["thumb_create_fail0a"]			= "Miniatura <span style=\"font-size:larger\">#GLOBALS[imageThumbnail]#</span> não pôde ser criada automaticamente : ";
$pgv_lang["thumb_create_fail0b"]			= "Miniatura #GLOBALS[imageThumbnail]# não pôde ser criada automaticamente. Código do erro : ";
$pgv_lang["thumb_create_fail1"]				= "Este recurso está desabilitado na configuração GEDCOM.";
$pgv_lang["thumb_create_fail2"]				= "O diretório de destino não é gravável.";
$pgv_lang["thumb_create_fail3"]				= "Este recurso não oferece suporte ao tipo de imagem <span style=\"font-size:larger\">#GLOBALS[imageType]#</span>.";
$pgv_lang["thumb_create_fail4"]				= "O diretório de destino não pode ser criado.";
$pgv_lang["thumb_create_fail5"]				= "A imagem de entrada <span style=\"font-size:larger\">#GLOBALS[imageFilename]#</span> não existe ou não pode ser lida.";
$pgv_lang["thumb_create_fail6"]				= "O tamanho da imagem de entrada <span style=\"font-size:larger\">#GLOBALS[imageFilename]#</span> não pode ser determinado.";
$pgv_lang["thumb_create_fail7"]				= "Não há memória livre suficiente.<br />Reduza o tamanho da imagem de entrada ou ajuste a alocação de memória em Configuração do site, Etapa 4, Configurações avançadas.";
$pgv_lang["thumb_create_fail8"]				= "A imagem de entrada <span style=\"font-size:larger\">#GLOBALS[imageFilename]#</span> está com defeito.";
$pgv_lang["add_asso"]						= "Nova Testemunha";
$pgv_lang["edit_sex"]						= "Alterar Sexo";
$pgv_lang["add_obje"]						= "Adicionar Mídia";
$pgv_lang["add_name"]						= "Adicionar Nome";
$pgv_lang["edit_raw"]						= "Editar registro GEDCOM";
$pgv_lang["label_add_remote_link"]			= "Adicionar Ligação";
$pgv_lang["label_gedcom_id"]				= "ID do Banco de Dados";
$pgv_lang["label_local_id"]					= "ID da Pessoa";
$pgv_lang["accept"]							= "Aceitar";
$pgv_lang["accept_all"]						= "Aceitar todas as alterações";
$pgv_lang["accept_gedcom"]					= "Para cada alteração informe se aceita ou descarta a mesma.<br /><br />Para aceitar todas de uma vez, clique em <b>#pgv_lang[accept_all]#</b> na caixa abaixo. Para saber mais sobre a alteração, clique <b>#pgv_lang[view_change_diff]#</b> e veja as diferenças entre a nova situação e a antiga, ou clique em <b>#pgv_lang[view_gedcom]#</b> para exibir a situação atual no formato GEDCOM.";
$pgv_lang["accept_successful"]				= "Alterações aceitas no banco de dados";
$pgv_lang["add_child"]						= "Adicionar filho";
$pgv_lang["add_child_to_family"]			= "Adicionar filho a esta família";
$pgv_lang["add_fact"]						= "Adicionar fato";
$pgv_lang["add_father"]						= "Adicionar pai";
$pgv_lang["add_husb"]						= "Adicionar marido";
$pgv_lang["add_opf_child"]					= "Adicionar um filho para criar uma família monoparental";
$pgv_lang["add_husb_to_family"]				= "Adicionar marido a esta família";
$pgv_lang["add_media"]						= "Adicionar mídia";
$pgv_lang["add_media_lbl"]					= "Adicionar mídia";
$pgv_lang["add_mother"]						= "Adicionar mãe";
$pgv_lang["add_new_chil"]					= "Adicionar criança";
$pgv_lang["add_new_husb"]					= "Adicionar marido";
$pgv_lang["add_new_wife"]					= "Adicionar esposa";
$pgv_lang["add_note"]						= "Adicionar nota";
$pgv_lang["add_note_lbl"]					= "Adicionar nota";
$pgv_lang["add_shared_note"]				= "Adicionar uma nova nota partilhada";
$pgv_lang["add_shared_note_lbl"]			= "Adicionar uma nota partilhada";
$pgv_lang["add_sibling"]					= "Adicionar irmão ou irmã";
$pgv_lang["add_son_daughter"]				= "Adicionar filho ou filha";
$pgv_lang["add_source"]						= "Adicionar citação à fonte";
$pgv_lang["add_source_lbl"]					= "Adicionar citação à fonte";
$pgv_lang["add_wife"]						= "Adicionar esposa";
$pgv_lang["add_wife_to_family"]				= "Adicionar esposa a esta família";
$pgv_lang["advanced_search_discription"]	= "Pesquisa avançada de site";
$pgv_lang["auto_thumbnail"]					= "Miniatura automática";
$pgv_lang["basic_search"]					= "pesquisa";
$pgv_lang["basic_search_discription"]		= "Pesquisa básica de site";
$pgv_lang["birthdate_search"]				= "Data de nascimento:";
$pgv_lang["birthplace_search"]				= "Local de nascimento:";
$pgv_lang["change"]							= "Alterar";
$pgv_lang["change_family_instr"]			= "Use esta página para alterar ou remover membros da família.<br /><br />Para cada membro da família, você pode usar o link <b>Alterar</b> para escolher uma pessoa diferente para preencher esse papel na família. Você também pode usar o link <b>Remover</b> para remover essa pessoa da família.<br /><br />Quando terminar de trocar os membros da família, clique no botão <b>Salvar</b> para salvar as alterações.";
$pgv_lang["change_family_members"]			= "Alterar membros da família";
$pgv_lang["changes_occurred"]				= "As seguintes mudanças ocorreram para essa pessoa:";
$pgv_lang["confirm_remove"]					= "Confirma a exclusão desta pessoa da família?";
$pgv_lang["confirm_remove_object"]			= "Confirma a exclusão do objeto?";
$pgv_lang["create_repository"]				= "Nova reposição";
$pgv_lang["shared_note_assisted"]			= "Nota partilhada usando assistente";
$pgv_lang["create_shared_note"]				= "Criar uma nova nota partilhada";
$pgv_lang["create_shared_note_assisted"]	= "Criar uma nova nota partilhada usando assistente";
$pgv_lang["add_new_event_assisted"]			= "Criar um novo evento usando assistente";
$pgv_lang["create_source"]					= "Nova fonte";
$pgv_lang["current_person"]					= "O mesmo que agora";
$pgv_lang["date"]							= "Data";
$pgv_lang["deathdate_search"]				= "Data de falecimento:";
$pgv_lang["deathplace_search"]				= "Local onde faleceu:";
$pgv_lang["delete_dir_success"]				= "Pastas de mídia e miniatura <b>#GLOBALS[whichDir]#</b> foram excluídas.";
$pgv_lang["delete_file"]					= "Excluir arquivo";
$pgv_lang["delete_repo"]					= "Excluir reposição";
$pgv_lang["directory_not_empty"]			= "Pasta <span style=\"font-size:larger\">#GLOBALS[whichDir]#</span> não está vazia.";
$pgv_lang["directory_not_mt"]				= "Pasta #GLOBALS[whichDir]# não está vazia.";
$pgv_lang["directory_not_exist"]			= "Pasta inexistente.";
$pgv_lang["error_remote"]					= "Site remoto selecionado.";
$pgv_lang["error_same"]						= "Você selecionou o mesmo site.";
$pgv_lang["external_file"]					= "Está mídia não pode ser excluída movida ou renomeada, pois não está armazenada no servidor.";
$pgv_lang["file_missing"]					= "Nenhum arquivo foi recebido. Por favor tente novamente.";
$pgv_lang["file_partial"]					= "Arquivo foi enviado parcialmente, por favor tente novamente";
$pgv_lang["file_success"]					= "Arquivo enviado";
$pgv_lang["file_too_big"]					= "O arquivo a ser enviado excede o tamanho permitido";
$pgv_lang["file_no_temp_dir"]				= "Faltando diretório temporário PHP";
$pgv_lang["file_cant_write"]				= "PHP falhou a escrita para o disco";
$pgv_lang["file_bad_extension"]				= "PHP bloqueado por extensão de arquivo";
$pgv_lang["file_unkown_err"]				= "Desconhecido envio de arquivos de código de erro #pgv_lang[global_num1]#. Por favor, reporte isso como um defeito.";
$pgv_lang["folder"]							= "Pasta no servidor";
$pgv_lang["gedrec_deleted"]					= "Registro GEDCOM excluído.";
$pgv_lang["gen_thumb"]						= "Criar miniatura";
$pgv_lang["gen_missing_thumbs"]				= "Criar miniaturas faltando";
$pgv_lang["gen_missing_thumbs_lbl"]			= "Miniaturas faltando";
$pgv_lang["gender_search"]					= "Sexo:";
$pgv_lang["generate_thumbnail"]				= "Gerar miniatura automaticamente de ";
$pgv_lang["hebrew_givn"]					= "Nomes hebraicos";
$pgv_lang["hebrew_surn"]					= "Sobrenome hebraico";
$pgv_lang["hide_changes"]					= "Clique aqui para não exibir as alterações.";
$pgv_lang["highlighted"]					= "Imagem de destaque";
$pgv_lang["illegal_chars"]					= "Caracteres ilegais no nome";
$pgv_lang["invalid_search_multisite_input"]	= "Informe um destes: nome, data/local de nascimento, data/local de falecimento, ou sexo";
$pgv_lang["invalid_search_multisite_input_gender"]	= "Por favor repita a pesquisa e informe algo mais além do sexo";
$pgv_lang["label_diff_server"]				= "Site diferente";
$pgv_lang["label_location"]					= "Local";
$pgv_lang["label_password_id2"]				= "Senha:";
$pgv_lang["label_rel_to_current"]			= "Relação com a pessoa atual";
$pgv_lang["label_same_server"]				= "Mesmo site";
$pgv_lang["label_site"]						= "Site";
$pgv_lang["label_site_url"]					= "Endereço do site:";
$pgv_lang["label_username_id2"]				= "Membro:";
$pgv_lang["lbl_server_list"]				= "Usar um site que já exista.";
$pgv_lang["lbl_type_server"]				= "Informe novo site.";
$pgv_lang["link_as_child"]					= "Ligar esta pessoa como filho de uma família da árvore";
$pgv_lang["link_as_husband"]				= "Ligar esta pessoa como marido de uma família da árvore";
$pgv_lang["link_success"]					= "Ligação incluída";
$pgv_lang["link_to_existing_media"]			= "Ligar a uma mídia existente";
$pgv_lang["max_media_depth"]				= "O máximo de níveis da pasta Mídia é de #MEDIA_DIRECTORY_LEVELS#";
$pgv_lang["max_upload_size"]				= "Tamanho máximo para envio:";
$pgv_lang["media_deleted"]					= "Pasta <b>#GLOBALS[whichDir]#</b> excluída.";
$pgv_lang["media_not_deleted"]				= "Pasta <span style=\"font-size:larger\">#GLOBALS[whichDir]#</span> não foi removido.";
$pgv_lang["media_cant_delete"]				= "Pasta #GLOBALS[whichDir]# não foi removido.";
$pgv_lang["media_exists"]					= "Arquivo de mídia <span style=\"font-size:larger\">#GLOBALS[whichFile]#</span> já existe.";
$pgv_lang["media_file"]						= "Arquivo de mídia para fazer upload";
$pgv_lang["media_file_deleted"]				= "Arquivo de mídia <b>#GLOBALS[whichFile]#</b> excluído.";
$pgv_lang["media_file_not_deleted"]			= "Não foi possível excluir o arquivo de mídia <span style=\"font-size:larger\">#GLOBALS[whichFile]#</span>.";
$pgv_lang["media_file_cant_delete"]			= "Não foi possível excluir o arquivo de mídia #GLOBALS[whichFile]#.";
$pgv_lang["media_file_moved"]				= "Arquivo de Mídia movido.";
$pgv_lang["media_file_not_moved"]			= "Não foi possível mover o arquivo de Mídia.";
$pgv_lang["media_file_not_renamed"]			= "Não foi possível mover nem renomear a Mídia.";
$pgv_lang["media_thumb_exists"]				= "Miniatura <span style=\"font-size:larger\">#GLOBALS[whichFile]#</span> já existe.";
$pgv_lang["media_thumb_deleted"]			= "Miniatura <b>#GLOBALS[whichFile]#</b> excluída.";
$pgv_lang["media_thumb_not_deleted"]		= "Não foi possível excluir a miniatura <span style=\"font-size:larger\">#GLOBALS[whichFile]#</span>.";
$pgv_lang["media_thumb_cant_delete"]		= "Não foi possível excluir a miniatura #GLOBALS[whichFile]#.";
$pgv_lang["multiple_gedcoms"]				= "Esta árvore contém ligações para outra árvore genealógica neste mesmo servidor. Antes de excluir, mover ou renomear a árvore, é necessário excluir estas ligações.";
$pgv_lang["must_provide"]					= "Informe um ";
$pgv_lang["name_search"]					= "Nome:";
$pgv_lang["new_repo_created"]				= "Reposição criada";
$pgv_lang["new_shared_note_created"] 		= "Nova nota partilhada criada";
$pgv_lang["shared_note_updated"] 			= "Nota partilhada atualizada";
$pgv_lang["new_source_created"]				= "Nova fonte criada";
$pgv_lang["no_changes"]						= "Não há mudança necessária a ser revisada.";
$pgv_lang["no_known_servers"]				= "Nenhum servidor conhecido. Nenhum resultado será encontrado";
$pgv_lang["no_temple"]						= "Sem templo - ordenança viva";
$pgv_lang["no_upload"]						= "O envio de Mídia não é permitido porque esta opção está desabilitada ou porque a pasta de Mídia não possui permissão de escrita.";
$pgv_lang["paste_id_into_field"]			= "Cole o seguinte ID de fonte em seus campos de edição para fazer referência a esta fonte";
$pgv_lang["paste_rid_into_field"]			= "Para referenciar esta reposição, cole a ID da reposição nos campos de edição ";
$pgv_lang["record_marked_deleted"]			= "Este registro foi marcado para ser excluido após a aprovação do Administrador.";
$pgv_lang["replace_with"]					= "Substituir por";
$pgv_lang["show_changes"]					= "Este registro foi atualizado. Clique aqui para exibir as alterações.";
$pgv_lang["thumbnail"]						= "Miniatura para fazer upload";
$pgv_lang["title_remote_link"]				= "Adicionar ligação remota";
$pgv_lang["undo"]							= "Desfazer";
$pgv_lang["undo_all"]						= "Desfazer todas as alterações";
$pgv_lang["undo_all_confirm"]				= "Desfazer todas as alterações efetuadas neste GEDCOM?";
$pgv_lang["undo_successful"]				= "Alterações desfeitas.";
$pgv_lang["update_successful"]				= "Atualização bem sucedida";
$pgv_lang["upload"]							= "Enviar/Upload";
$pgv_lang["upload_error"]					= "Um erro ocorreu durante o envio do arquivo GEDCOM.";
$pgv_lang["copy_error"]						= "O arquivo não #GLOBALS[whichFile2]# pôde ser copiado do #GLOBALS[whichFile1]#";
$pgv_lang["upload_media"]					= "Enviar arquivos de mídia";
$pgv_lang["upload_successful"]				= "Enviado";
$pgv_lang["view_change_diff"]				= "Exibir diferenças";

?>
