<?php
/**
 * Czech Language file for PhpGedView.
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
 * @author Jan Hapala
 * @version $Id$
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

$pgv_lang["new_gedcom_title"]		= "Genealogie z [#GEDCOMFILE#]";
$pgv_lang["meta_conf"]			= "Konfigurační možnosti META tagů";
$pgv_lang["gedconf_head"]		= "Nastavení GEDCOMu";
$pgv_lang["other_theme"]		= "Další, prosím vepište";
$pgv_lang["performing_update"]		= "Provádění aktualizace.";
$pgv_lang["config_file_read"]		= "Konfigurační soubor načten.";
$pgv_lang["does_not_exist"]		= "neexistuje";
$pgv_lang["media_drive_letter"]		= "Cesta k mediálním souborům by neměla obsahovat písmeno disku; nemusely by se pak zobrazit.";
$pgv_lang["db_setup_bad"]		= "Stávající nastavení vaší databáze je špatné.  Prosím zkontrolujte parametry databázového připojení a nastavte jej znovu.";
$pgv_lang["bad_host_user_pass"]	= "PhpGedView nebylo schopné navázat spojení s vaší MySQL databází. Zkontrolujte položky host, uživatelské_jméno a heslo, abyste se ujistili, že jste vše nastavili správně.";
$pgv_lang["bad_database_name"]	= "PhpGedView vytvořilo spojení s vaší MySQL databází, ale nebylo schopné používat databázi s názvem, který sjte zadali. Zkontrolujte, zda tato databáze existuje a jestli uživatel, jehož uživalské_jméno jste zadali, má odpovídající práva pro práci s touto databází.";
$pgv_lang["db"]				= "Databáze";
$pgv_lang["current_gedcoms"]		= "Současné GEDCOM soubory";
$pgv_lang["ged_gedcom"]			= "Soubory GEDCOM";
$pgv_lang["ged_title"]			= "Nadpis GEDCOMu";
$pgv_lang["ged_config"]			= "Konfigurační soubor";
$pgv_lang["ged_privacy"]		= "Soubor privátnosti";
$pgv_lang["disabled"]			= "Vypnuto";
$pgv_lang["mouseover"]			= "Po přejetí myší";
$pgv_lang["mousedown"]			= "Po sjetí myší";
$pgv_lang["click"]			= "Po kliknutí myší";
$pgv_lang["enter_db_pass"]		= "Z bezpečnostních důvodů musíte před upravováním nastavení zadat uživatelské jméno a heslo k databázi.";
$pgv_lang["server_url_note"]	= "Toto by měl být odkaz na vaši složku s PhpGedView. Toto nastavení byste měli měnit jedině v případě, pokud jste si jistí tím, co děláte. PhpGedView nastavilo SERVER_URL na #GUESS_URL#";

$pgv_lang["DBTYPE"]			= "Typ databáze";
$pgv_lang["DBTYPE_help"]		= "~#pgv_lang[DBTYPE]#~<br /><br />Typ podporované PEAR databáze, k níž se má připojit. Možnosti jsou: MySQL, PostgreSQL, Oracle a SQLite.";
$pgv_lang["DBHOST"]			= "Host databáze";
$pgv_lang["DBHOST_help"]		= "~#pgv_lang[DBHOST]#~<br /><br />DNS nebo IP adresa počítače, na němž je nainstalován váš databázový server.";
$pgv_lang["DBUSER"]			= "Uživatelské jméno k databázi";
$pgv_lang["DBUSER_help"]		= "~#pgv_lang[DBUSERT]#~<br /><br />Ke vstupu do vaší databáze je vyžadováno uživatelské jméno databáze.";
$pgv_lang["DBPASS"]			= "Heslo k databázi";
$pgv_lang["DBPASS_help"]		= "~#pgv_lang[DBPASS]#~<br /><br />Heslo k databázi pro uživatele, jehož uživatelské jméno jste zadali do políčka Uživatelské jméno.";
$pgv_lang["DBNAME"]			= "Jméno databáze";
$pgv_lang["DBNAME_help"]		= "~#pgv_lang[DBNAME]#~<br /><br />Databáze na vašem serveru, kterou má PhpGedView použít. Uživatel, jehož uživatelské jméno jste zadali do políčka, musí mít práva vytvořit, vložit, obnovit, smazat a vybrat z databáze.";
$pgv_lang["TBLPREFIX_help"]		= "~#pgv_lang[TBLPREFIX]#~<br /><br />Prefix připisovaný do názvů tabulek vytvořených aplikací PhpGedView.  Změnou této hodnoty můžete zajistit užívání jedné databáze více aplikacemi PhpGedView, ale každá bude používat vlastní tabulky.";
$pgv_lang["ALLOW_CHANGE_GEDCOM_help"]	= "~#pgv_lang[ALLOW_CHANGE_GEDCOM]#~<br /><br />Nastavíte-li tuto hodnotu na <b>Ano</b>, povolíte tím návštěvníkům vašich stránek možnost přepnout mezi GEDCOM soubory, máte-li jich více.<br /><br />Je-li nastaveno <b>Ne</b>, ani návštěvníci, <b>ani</b> přihlášení uživatelé nebudou moci přepínat mezi GEDCOM soubory.";
$pgv_lang["gedcom_path_help"]		= "Nejprve nahrajte GEDCOM soubor do umístění přístupného php na vašem serveru.  Pak zadejte cestu a název tohoto souboru jako: <b>./index/jmeno.ged</b>.<br /><br />Podívejte se do souboru <a href=\"readme.txt\">Readme.txt</a> pro další nápovědu.";
$pgv_lang["CHARACTER_SET"]		= "Znaková sada (kódování)";
$pgv_lang["CHARACTER_SET_help"]		= "~#pgv_lang[CHARACTER_SET]#~<br /><br />Toto je znaková sada vašeho GEDCOM souboru.  UTF-8 je implicitní hodnota a měla by fungovat většině uživatelům.  Jestliže exportujete váš GEDCOM soubor s kódováním windows, pak byste sem měli napsat WINDOWS.<br /><br />POZOR: PHP NEPODPORUJE kódování UNICODE (UTF-16), takže to ani nezkoušejte. Stěžovat si můžete autorům PHP :-)";
$pgv_lang["LANGUAGE"]			= "Jazyk";
$pgv_lang["LANGUAGE_help"]		= "~#pgv_lang[LANGUAGE]#~<br /><br />Určete implicitní jazyk pro své stránky.  Uživatelé mají možnost si toto nastavení změnit buď pomocí nastavení prohlížeče nebo formulářem dole na stránce (pokud ENABLE_MULTI_LANGUAGE = true).";
$pgv_lang["ENABLE_MULTI_LANGUAGE"]	= "Povolit uživatelům změnu jazyka";
$pgv_lang["ENABLE_MULTI_LANGUAGE_help"]	= "~#pgv_lang[ENABLE_MULTI_LANGUAGE]#~<br /><br />Nastavte na 'ano', chcete-li povolit uživatelům vybrat si jiný jazyk ze seznamu na patičce stránky a pro možnost nastavení implicitního jazyka podle jazykového nastavení prohlížeče.";
$pgv_lang["CALENDAR_FORMAT"]		= "Formát kalendáře";
$pgv_lang["CALENDAR_FORMAT_help"]	= "~#pgv_lang[CALENDAR_FORMAT]#~<br /><br />Toto vám umožňuje určit typ kalendáře, který chcete použít u tohoto GEDCOM souboru.  Hebrejský je stejný jako židovský s hebrejskými znaky.  Pozor: Hodnoty použité pro data v židovském / hebrejském kalendáři jsou vypočítána z dat gregoriánského / juliánského kalendáře. Poněvadž v židovském kalendáři začínají dny soumrakem, jakákoliv událost mezi soumrakem a půlnocí se zobrazí s datem posunutým o jeden dopředu vzhledem ke správnému židovskému datu. Zobrazení hebrejštiny nemusí fungovat ve starých prohlížečích. Některé staré prohlížeče zobrazí hebrejštinu pozpátku nebo vůbec.";
$pgv_lang["DISPLAY_JEWISH_THOUSANDS"]	= "Zobrazit hebrejské tisíce";
$pgv_lang["DISPLAY_JEWISH_THOUSANDS_help"]	= "~#pgv_lang[DISPLAY_JEWISH_THOUSANDS]#~<br /><br />Ukázat \"Alafim\" v hebrejském kalendáři. Nastavení na \"ano\" způsobí zobrazení roku 1969 jako <span lang=\"he-IL\" dir='rtl'>&#1492;'&#160;&#1514;&#1513;&#1499;&quot;&#1496;</span>&lrm;, zatímco, je-li nastavena hodnota \"ne\", bude zobrazeno <span lang=\"he-IL\" dir='rtl'>&#1514;&#1513;&#1499;&quot;&#1496;</span>&lrm;. Toto nemá vliv na nastavení židovského roku. Rok bude zobrazen jako 5729 bez ohledu na toto nastavení.<br />Pozor: Toto nastavení je podobné konstantě CAL_JEWISH_ADD_ALAFIM v php 5.0 Calendar.";
$pgv_lang["DISPLAY_JEWISH_GERESHAYIM"]		= "Zobrazit hebrejský Gershayim";
$pgv_lang["DISPLAY_JEWISH_GERESHAYIM_help"]	= "~#pgv_lang[DISPLAY_JEWISH_GERESHAYIM]#~<br /><br /Při zobrazování hebrejských dat používat jednoduché a dvojité uvozovky. Jestliže tuto hodnotu nastavíte na \"ano\", zobrazí se datum 8. února 1969 jako  <span lang='he-IL' dir='rtl'>&#1499;'&#160;&#1513;&#1489;&#1496;&#160;&#1514;&#1513;&#1499;&quot;&#1496;</span>&lrm;, zatímco hodnota \"ne\" znamená zobrazení <span lang='he-IL' dir='rtl'>&#1499;&#160;&#1513;&#1489;&#1496;&#160;&#1514;&#1513;&#1499;&#1496;</span>&lrm;. Toto nemá žádný vliv na nastavení židovského roku, poněvadž uvozovky se v židovských datech zapsaných latinkou nepoužívají.<br />Pozor: Toto nastavení se podobá konstantám CAL_JEWISH_ADD_ALAFIM_GERESH a CAL_JEWISH_ADD_GERESHAYIM v php 5.0 Calendar. Toto jediné nastavení postihuje obojí.";
$pgv_lang["JEWISH_ASHKENAZ_PRONUNCIATION"]	= "Židovská výslovnost Ashkenazi";
$pgv_lang["JEWISH_ASHKENAZ_PRONUNCIATION_help"]	= "~#pgv_lang[JEWISH_ASHKENAZ_PRONUNCIATION]#~<br /><br />Použít židovskou výslovnost \"Ashkenazi\".<br />Jestliže je tato hodnota nastavena na \"ano\", pro měsíce Cheshvan a Teves bude použita výslovnost \"Ashkenazi\". Nastavíte-li hodnotu na \"ne\", budou měsíce změněny na Hesvan and Tevet. <br />Toto má vliv jen na židovské nastavení. Zvolíte-li hebrejské nastavení, bude použita hebrejská abeceda.";
$pgv_lang["DEFAULT_PEDIGREE_GENERATIONS"]	= "Počet generací ve vývodu";
$pgv_lang["DEFAULT_PEDIGREE_GENERATIONS_help"]	= "~#pgv_lang[DEFAULT_PEDIGREE_GENERATIONS]#~<br /><br />Nastavte implicitní počet generací, jež se mají zobrazit ve vývodech.";
$pgv_lang["MAX_PEDIGREE_GENERATIONS"]		= "Maximální počet generací ve vývodu";
$pgv_lang["MAX_PEDIGREE_GENERATIONS_help"]	= "~#pgv_lang[MAX_PEDIGREE_GENERATIONS]#~<br /><br />Nastavte maximální počet generací, který se může zobrazit ve vývodech.";
$pgv_lang["MAX_DESCENDANCY_GENERATIONS"]	= "Maximální počet generací v rozrodu";
$pgv_lang["MAX_DESCENDANCY_GENERATIONS_help"]	= "~#pgv_lang[MAX_DESCENDANCY_GENERATIONS]#~<br /><br />Nastavte maximální počet generací, který se může zobrazit v rozrodech.";
$pgv_lang["USE_RIN"]			= "Použít RIN# místo GEDCOM ID";
$pgv_lang["USE_RIN_help"]		= "~#pgv_lang[USE_RIN]#~<br /><br />Zvolte ANO, pokud chcete při dotazu na ID osob v konfiguračních souborech, uživatelských nastavení a schématech použít číslo RIN místo GEDCOM ID.  To je užitečné v případě, že váš genealogický program neexportuje GEDCOM soubory s konkurenčními ID a místo toho používá stejný RIN.";
$pgv_lang["PEDIGREE_ROOT_ID"]		= "Implicitní osoba pro vývod a rozrod";
$pgv_lang["PEDIGREE_ROOT_ID_help"]	= "~#pgv_lang[PEDIGREE_ROOT_ID]#~<br /><br />Zvolte ID osoby, která se má implicitně zobrazovat ve vývodech a rozrodech.";
$pgv_lang["GEDCOM_ID_PREFIX"]		= "GEDCOM ID Prefix";
$pgv_lang["GEDCOM_ID_PREFIX_help"]	= "~#pgv_lang[GEDCOM_ID_PREFIX]#~<br /><br />Tento prefix bude přidán ve vývodu, rozrodu a jiných schématech v případě, že uživatelé sami prefix u ID nedoplní.";
$pgv_lang["PEDIGREE_FULL_DETAILS"]	= "Zobrazit podrobnosti o narození a úmrtí ve vývodu a rozrodu";
$pgv_lang["PEDIGREE_FULL_DETAILS_help"]	= "~#pgv_lang[PEDIGREE_FULL_DETAILS]#~<br /><br />Říká, jestli implicitně zobrazovat, či nezobrazovat informace o narození a úmrtí osob.";
$pgv_lang["PEDIGREE_LAYOUT"]		= "Implicitní rozvržení vývodu";
$pgv_lang["PEDIGREE_LAYOUT_help"]	= "~#pgv_lang[PEDIGREE_LAYOUT]#~<br /><br />Toto nastavení určuje, jestli budou vývody orientovány na šířku nebo na výšku.";
$pgv_lang["SHOW_EMPTY_BOXES"]		= "Zobrazovat ve vývodu i prázdná políčka";
$pgv_lang["SHOW_EMPTY_BOXES_help"]	= "~#pgv_lang[SHOW_EMPTY_BOXES]#~<br /><br />Říká, jestli se mají nebo nemají zobrazovat ve vývodu i prázdná políčka.";
$pgv_lang["ZOOM_BOXES"]			= "Zvětšování políček ve schématech";
$pgv_lang["ZOOM_BOXES_help"]		= "~#pgv_lang[ZOOM_BOXES]#~<br /><br />Umožňuje uživateli zvětšit jednotlivá políčka (rámečky) v rodokmenu a získat více informací.  Chcete-li tuto vlastnost vypnout, nastavte \"Vypnuto\".  Nastavíte-li na \"Přejetí myší\", zvětší se rámeček, když uživatel přejede přes ikonku v rámečku.  Nastavíte-li na \"Kliknutí\", zvětší se rámeček, když uživatel klikne na ikonku v rámečku.";
$pgv_lang["LINK_ICONS"]			= "PopUp odkazy ve schématech";
$pgv_lang["LINK_ICONS_help"]		= "~#pgv_lang[LINK_ICONS]#~<br /><br />Umožní uživateli vybrat odkaz na jiná schémata a blízké příbuzné osoby.  Nastavíte-li \"Vypnout\", tato vlastnost bude vypnuta.  Nastavíte-li \"Přejetí myší\", odkazy se objeví, když uživatel přejede myší přes ikonku v rámečku.  Nastavíte-li \"Kliknutí\", objeví se odkazy v případě, že uživatel na ikonku klikne.";
$pgv_lang["ABBREVIATE_CHART_LABELS"]			= "Zkrácené popisky pro schémata";
$pgv_lang["ABBREVIATE_CHART_LABELS_help"]		= "~#pgv_lang[ABBREVIATE_CHART_LABELS]#~<br /><br />Zkracovat, či nezkracovat ve schématech popisky - např. 'Narození' nahradit jen prvním písmenem 'N'.";
$pgv_lang["HIDE_LIVE_PEOPLE"]		= "Zapnout privátnost";
$pgv_lang["HIDE_LIVE_PEOPLE_help"]	= "~#pgv_lang[HIDE_LIVE_PEOPLE]#~<br /><br />Tato volba zapne všechna nastavení privátnosti dat a schová podrobnosti o žijících lidech. Za žijící osoby jsou považovány ty, u nichž není jakákoliv událost starší, než kolik let je nastaveno v proměnné \$MAX_ALIVE_AGE, a ty, které nemají děti narozené dříve než před \$MAX_ALIVE_AGE lety.";
$pgv_lang["REQUIRE_AUTHENTICATION"]	= "Vyžadování autentifikace návštěvníků";
$pgv_lang["REQUIRE_AUTHENTICATION_help"]	= "~#pgv_lang[REQUIRE_AUTHENTICATION]#~<br /><br />Zapnutí této volby donutí všechny uživatele se přihlásit do systému, aby si mohli prohlížet data na této stránce.";
$pgv_lang["WELCOME_TEXT_AUTH_MODE"]	= "Úvodní text přihlašovací stránky v autentifikačním módu";
$pgv_lang["WELCOME_TEXT_AUTH_MODE_help"]	= "~#pgv_lang[WELCOME_TEXT_AUTH_MODE]#~<br /><br />Zde můžete zvolit text, který se objeví na přihlašovací stránce, je-li autentifikační mód nastaven na ano. Prosím, vyberte nejvhodnější přednastavený text.<br />Můžete zadat i svůj vlastní text, ale ten nebude mít překlad do jiných jazyků.<br /><br />Přednastavené texty jsou:<br /><br /><b>#pgv_lang[WELCOME_TEXT_AUTH_MODE_OPT1]# :</b><br /><br />#pgv_lang[welcome_text_auth_mode_1]#<br /><br /><b>#pgv_lang[WELCOME_TEXT_AUTH_MODE_OPT2]# :</b><br /><br />#pgv_lang[welcome_text_auth_mode_2]#<br /><br /><b>#pgv_lang[WELCOME_TEXT_AUTH_MODE_OPT3]# :</b><br /><br />#pgv_lang[welcome_text_auth_mode_3]#";
$pgv_lang["WELCOME_TEXT_AUTH_MODE_OPT1"]	= "Přednastavený text, jenž říká, že všichni uživatelé mohou zažádat o zřízení uživatelského účtu";
$pgv_lang["WELCOME_TEXT_AUTH_MODE_OPT2"]	= "Přednastavený text, jenž říká, že admin rozhodne v případě žádosti o účet";
$pgv_lang["WELCOME_TEXT_AUTH_MODE_OPT3"]	= "Přednastavený text, jenž říká, že o zřízení uživatelského účtu mohou žádat pouze členové rodiny";
$pgv_lang["WELCOME_TEXT_AUTH_MODE_OPT4"]	= "Vybrat uživatelem definovaný text vepsaný pod tímto políčkem";
$pgv_lang["WELCOME_TEXT_AUTH_MODE_CUST"]	= "Vlastní úvodní text pro autentifikační mód";
$pgv_lang["WELCOME_TEXT_AUTH_MODE_CUST_help"]	= "~#pgv_lang[WELCOME_TEXT_AUTH_MODE_CUST]#~<br /><br />Jestliže jste v předchozí volbě vybrali možnost vlastního úvodního textu, pak tento text můžete vepsat sem.<br />Tento text NEBUDE přeložen do dalších jazyků; zobrazí se vždy přesně tak, jak jej nyní zapíšete.<br />Můžete používat i HTML tagy.";
$pgv_lang["WELCOME_TEXT_AUTH_MODE_CUST_HEAD"] = "Standardní hlavička pto uživatelský úvodní text";
$pgv_lang["WELCOME_TEXT_AUTH_MODE_CUST_HEAD_help"] = "~#pgv_lang[WELCOME_TEXT_AUTH_MODE_CUST_HEAD]#~<br /><br />Zvolte tuto možnost, chcete-li mít před svým vlastním úvodním textem vícejazyčnou hlavičku.<br /><br />Je-li nastaveno na ano, hlavička bude vypadat takto:<br /><br />#pgv_lang[welcome_text_cust_head]#";
$pgv_lang["CHECK_CHILD_DATES"]		= "Zkontrolovat data dětí";
$pgv_lang["CHECK_CHILD_DATES_help"]	= "~#pgv_lang[CHECK_CHILD_DATES]#~<br /><br />Zkontrolovat data dětí, aby bylo možné rozhodnout, jestli je daná osoba je mrtvá. Tato volba může na starších systémech a velkých GEDCOMech zpomalit časové odezvy vašich stránek.";
$pgv_lang["MAX_ALIVE_AGE"]		= "Věk, od kterého je možné osobu považovat za mrtvou";
$pgv_lang["MAX_ALIVE_AGE_help"]		= "~#pgv_lang[MAX_ALIVE_AGE]#~<br /><br />Maximální věk, v němž může u osoby zaznamenána \"událost\" nebo maximální věk jejích dětí, aby bylo možné rozhodnout, jestli je mrtvá nebo ne.";
$pgv_lang["SHOW_GEDCOM_RECORD"]		= "Umožnit uživatelům prohlížet čisté GEDCOM záznamy";
$pgv_lang["SHOW_GEDCOM_RECORD_help"]	= "~#pgv_lang[SHOW_GEDCOM_RECORD]#~<br /><br />Nastavíte-li \"ano\", budou přidány odkazy na jednotlivce, prameny a rodiny, což uživatelům umožní otevírat další okna s neupravenými záznamy získaných přímo ze souborů GEDCOM.";
$pgv_lang["ALLOW_EDIT_GEDCOM"]		= "Zapnout online editaci";
$pgv_lang["ALLOW_EDIT_GEDCOM_help"]	= "~#pgv_lang[ALLOW_EDIT_GEDCOM]#~<br /><br />Zapíná vlastnost pro úpravy tohoto GEDCOM souboru online, aby uživatelé s právy k úpravám mohli tento GEDCOM aktualizovat online.";
$pgv_lang["INDEX_DIRECTORY_help"]	= "~#pgv_lang[INDEX_DIRECTORY]#~<br /><br />Cesta k čitelné a zapisovatelné složce, do níž by mělo PhpGedView ukládat \"Index soubory\" (včetně lomítka \"/\")";
$pgv_lang["SHOW_ID_NUMBERS_help"]	= "~#pgv_lang[SHOW_ID_NUMBERS]#~<br /><br />Ukázat ve schématech za jmény osob jejich ID čísla v závorkách.";
$pgv_lang["SHOW_PEDIGREE_PLACES"]	= "Úrovně míst k zobrazení v políčkách osob";
$pgv_lang["SHOW_PEDIGREE_PLACES_help"]	= "~#pgv_lang[SHOW_PEDIGREE_PLACES]#~<br /><br />Toto nastavení určuje, kolik informací o místě bude zobrazeno v políčku osoby v rodokmenu.  Nastavíte-li hodnotu 9, zajistíte zobrazení všech úrovní míst.  Nastavíte-li hodnotu 0, všechna místa budou schována.  Nastavíte-li hodnotu 1, bude zobrazena první úroveň, nastavíte-li 2, budou zobrazeny první dvě úrovně atd.";
$pgv_lang["MULTI_MEDIA"]		= "Zapnout užití multimédií";
$pgv_lang["MULTI_MEDIA_help"]		= "~#pgv_lang[MULTI_MEDIA]#~<br /><br />GEDCOM 5.5 vám umožňuje k vašemu GEDCOMu připojit odkazy na obrázky, videa a další multimediální soubory. Pokud ve svém GEDCOMu nemáte multimediální soubory, můžete tuto vlastnost vypnout nastavením hodnoty na 'ne'. <br />Pro další informace o přidávání multimediálních souborů do svých stránek se podívejte do souboru <a href=\"readme.txt\">readme.txt</a>.";
$pgv_lang["MEDIA_EXTERNAL"]			= "Uchovávat odkazy";
$pgv_lang["MEDIA_EXTERNAL_help"]	= "~#pgv_lang[MEDIA_EXTERNAL]#~<br /><br />Bude-li nalezen multimediální odkaz začnající např. http://, ftp://, mms://, pak bude v této podobě zachován, zvolíte-li ano. Například: http://www.myfamily.com/photo/tata.jpg zůstane http://www.myfamily.com/photo/tata.jpg. Pokud bude nastaveno ne, s odkazem se bude zacházet jako se standardním a bude použita složka médií. Například http://www.myfamily.com/photo/tata.jpg se změní na ./media/tata.jpg";
$pgv_lang["MEDIA_DIRECTORY"]		= "Složka Multimédií";
$pgv_lang["MEDIA_DIRECTORY_help"]	= "~#pgv_lang[MEDIA_DIRECTORY]#~<br /><br />Cesta k multimediálním souborům musí být relativní cesta v rámci PhpGedView, jako např. ./media/ (včetně lomítka \"/\").";
$pgv_lang["MEDIA_DIRECTORY_LEVELS"]	= "Úroveň prohledávání multimediálních složek";
$pgv_lang["MEDIA_DIRECTORY_LEVELS_help"]	= "~#pgv_lang[MEDIA_DIRECTORY_LEVELS]#~<br /><br />Při nastavení 0 budou ignorovány všechny složky nacházející se v cestě k mediálnímu souboru.  Bude-li hodnota rovna 1, bude použita také první rodičovská složka obsahující tento soubor.  Zvyšování čísel povede ke zvyšování počtu rodičovských adresářů obsažených v dané cestě.  <br />Například: Když připojíte ke svému GEDCOMu obrázek s cestou jako C:\\Documents and Settings\\User\\My Documents\\My Pictures\\Genealogy\\Surname Line\\děda.jpg, pak s hodnotou 0 bude tato cesta převedena do podoby ./media/děda.jpg.  V případě hodnoty rovné 1 bude cesta ./media/Surname Line/děda.jpg, atd.  Většině lidí bude stačit používat nastavení s 0.  Ale je možné, že některé mediální soubory budou mít stejné názvy, a pak by došlo k jejich přepsaní.  Toto nastavení vám umožňuje uchovat si ve svých souborech systém a zabránit tak kolizi názvů.";
$pgv_lang["SHOW_HIGHLIGHT_IMAGES_help"]	= "~#pgv_lang[SHOW_HIGHLIGHT_IMAGES]#~<br /><br />Jestliže máte na svých stránkách povoleny multimediální soubory, pak můžete mít v rodokmenu zobrazené náhledy obrázků vedle jména osoby v rámečku.  V současné době používá PhpGedView první multimediální soubor ze seznamu k danému záznamu.  U lidí s více obrázky byste měli zařídit, aby ten, který chcete zobrazit byl na prvním místě.<br />Pro další informace o vkládání obrázků na své stránky se podívejte do části Multimédia v souboru <a href=\"readme.txt\">readme.txt</a>.";
$pgv_lang["USE_THUMBS_MAIN"]	= "Pro hlavní obrázek na stránce o jednotlivci použít náhled";
$pgv_lang["USE_THUMBS_MAIN_help"]	= "~#pgv_lang[USE_THUMBS_MAIN]#~<br /><br />To záleží na tom, jak chcete skladovat své obrázky. Může být pro vás výhodnější zvolit u jména na stránce jednotlivce zobrazení náhledu. Pokud jsou vaše obrázky velké, může trvat dlouhou dobu, než se stáhnou. A pokud jsou vaše náhledy uloženy ve vysoké kvalitě, mohou se použít namísto originálních obrázků. Zvolte \"ano\", chcete-li použít náhledy, nebo ponechte \"ne\", mají-li být použity originální obrázky.";
$pgv_lang["ENABLE_CLIPPINGS_CART"]	= "Zapnout schránku výstřižků";
$pgv_lang["ENABLE_CLIPPINGS_CART_help"]	= "#pgv_lang[ENABLE_CLIPPINGS_CART]#~<br /><br />Schránka výstřižků umožní návštěvníkům vašich stránek přidávat si lidi z vaší databáze do souboru GEDCOM výstřižků, který si pak mohou stáhnout a tato data přidat do svého rodokmenu.";
$pgv_lang["HIDE_GEDCOM_ERRORS"]		= "Skrýt chyby GEDCOM";
$pgv_lang["HIDE_GEDCOM_ERRORS_help"]	= "#pgv_lang[HIDE_GEDCOM_ERRORS]#~<br /><br />Nastavíte-li hodnotu na 'ano', budou skryty výpisy chyb způsobených aplikací PhpGedView, když nepochopí zápis ve vašem GEDCOM souboru. PhpGedView vynakládá veškeré úsilí k tomu, aby byla kompatibilní se standardem GEDCOM 5.5, ale mnoho genealogických programů vkládá do souborů vlastní tagy. Pro další informace nahlédněte do souboru <a href=\"readme.txt\">readme.txt</a>.";
$pgv_lang["WORD_WRAPPED_NOTES"]		= "Na místa, kde byly poznámky, vložit mezery";
$pgv_lang["WORD_WRAPPED_NOTES_help"]	= "#pgv_lang[WORD_WRAPPED_NOTES]#~<br /><br />Některé genealogické programy vkládají poznámky na rozhraní slov, zatímco jiné je zapisují kamkoliv. To může mít za následek, že PhpGedView spojí slova dohromady. Zvolíte-li 'ano', bude vložena mezera mezi všechna slova, kde jsou v GEDCOM souboru ukončena.";
$pgv_lang["SHOW_CONTEXT_HELP"]		= "Zobrazit ? odkazující na nápovědu";
$pgv_lang["SHOW_CONTEXT_HELP_help"]	= "#pgv_lang[SHOW_CONTEXT_HELP]#~<br /><br />Tato volba zapne na stránkách zobrazení otazníků odkazujících na nápovědu hned vedle voleb, takže návštěvníci budou moci získat kontextovou nápovědu k volbám (výběru možností) na stránkách.";
$pgv_lang["COMMON_NAMES_THRESHOLD"]	= "Minimální četnost výskytu příjmení potřebná k tomu, aby se objevilo mezi nejčastějšími příjmeními";
$pgv_lang["COMMON_NAMES_THRESHOLD_help"]	= "~#pgv_lang[COMMON_NAMES_THRESHOLD]#~<br /><br />Toto číslo udává, kolikrát se musí nějaké příjmení v GEDCOMu vyskytovat, aby bylo zobrazeno na úvodní stránce mezi nejčastějšími příjmeními.";
$pgv_lang["COMMON_NAMES_ADD"]	= "Příjmení, jež se mají přidat k nejčastěji se vyskytujícím (oddělujte čárkou)";
$pgv_lang["COMMON_NAMES_ADD_help"]	= "~#pgv_lang[COMMON_NAMES_ADD]#~<br /><br />Je-li četnost výskytu příjmení nižší než nastavený limit, neobjeví se mezi příjmeními s nejčastějším výskytem. Pak tady můžete takové příjmení přidat ručně. Zadáte-li více než jedno, musí být oddělena čárkou. V příjmeních se rozlišují malá a velká písmena.";
$pgv_lang["COMMON_NAMES_REMOVE"]	= "Příjmení, jež se mají odstranit z nejčastěji se vyskytujících (oddělujte čárkou)";
$pgv_lang["COMMON_NAMES_REMOVE_help"]	= "~#pgv_lang[COMMON_NAMES_REMOVE]#~<br /><br />Chcete-li nějaké příjmení odstranit ze seznamu nejčastějších příjmení, aniž byste měnili limit, můžete tak učinit tady. Zadáte-li více než jedno, musí být oddělena čárkou. V příjmeních se rozlišují malá a velká písmena.";
$pgv_lang["HOME_SITE_URL"]		= "URL hlavní stránky";
$pgv_lang["HOME_SITE_URL_help"]		= "~#pgv_lang[HOME_SITE_URL]#~<br /><br />URL vkládané do zasílaných hlaviček k tomu, aby vygenerovalo odkaz na vaši hlavní stránku.";
$pgv_lang["HOME_SITE_TEXT"]		= "Text k hlavní stránce";
$pgv_lang["HOME_SITE_TEXT_help"]	= "~#pgv_lang[HOME_SITE_TEXT]#~<br /><br />Text použitý při vygenerování odkazu na vaši hlavní stránku.";
$pgv_lang["CONTACT_EMAIL"]		= "Kontaktní uživatel pro tento rodokmen";
$pgv_lang["CONTACT_EMAIL_help"]		= "~#pgv_lang[CONTACT_EMAIL]#~<br /><br />Uživatel, kterého mohou návštěvníci kontaktovat v souvislosti s rodokmenem.";
$pgv_lang["CONTACT_METHOD"]		= "Způsob kontaktu";
$pgv_lang["CONTACT_METHOD_help"]	= "~#pgv_lang[CONTACT_METHOD]#~<br /><br />Způsob, jakým se budou návštěvníci obracet na \"Kontaktního uživatele\" se svými otázkami k rodokmenu. Možnost 'e-mail' znamená použití e-mailového odkazu, na který mohou návštěvníci kliknout a poslat e-mail přes svého e-mailového klienta. Volba 'vzkaz' zajistí užití systému zasílání zpráv vestavěného v PhpGedView bez užití e-mailu. Volba 'zpráva s e-mailem' je implicitní; je-li nastavena, použije se vnitřní systém PhpGedView, avšak kopie zpráv se odešlou také e-mailem. Volba 'E-maily bez ukládání' umožní PhpGedView zpracovávat zprávy a odesílat je e-mailem, ale neumožní ukládání zpráv do databáze. Zvolíte-li možnost beze zpráv, nebudou vás moci návštěvníci vašich stránek kontaktovat.";
$pgv_lang["WEBMASTER_EMAIL"]		= "Kontaktní uživatel pro technickou podporu";
$pgv_lang["WEBMASTER_EMAIL_help"]	= "~#pgv_lang[WEBMASTER_EMAIL]#~<br /><br />Uživatel, kterého by návštěvníci měli kontaktovat v případě, že narazí na vašich stránkách na problémy technického rázu.";
$pgv_lang["SUPPORT_METHOD"]		= "Způsob technické podpory";
$pgv_lang["SUPPORT_METHOD_help"]	= "~#pgv_lang[SUPPORT_METHOD]#~<br /><br />Způsob, jakým budou návštěvníci kontaktovat \"Uživatele pro technickou podporu\". Možnost 'e-mail' znamená použití e-mailového odkazu, na který mohou návštěvníci kliknout a poslat e-mail přes svého e-mailového klienta. Volba 'vzkaz' zajistí užití systému zasílání zpráv vestavěného v PhpGedView bez užití e-mailu. Volba 'zpráva s e-mailem' je implicitní; je-li nastavena, použije se vnitřní systém PhpGedView, avšak kopie zpráv se odešlou také e-mailem. Volba 'E-maily bez ukládání' umožní PhpGedView zpracovávat zprávy a odesílat je e-mailem, ale neumožní ukládání zpráv do databáze. Zvolíte-li možnost beze zpráv, nebudou vás moci návštěvníci vašich stránek kontaktovat.";
$pgv_lang["FAVICON"]			= "Ikona Oblíbených";
$pgv_lang["FAVICON_help"]		= "~#pgv_lang[FAVICON]#~<br /><br />Změňte toto nastavení, chcete-li vybrat jinou ikonu, která se má návštěvníkům vašich stránek zobrazit v menu oblíbených odkazů, když si vaše stránky zařadí mezi Oblíbené.";
$pgv_lang["THEME_DIR"]			= "Složka motivů:";
$pgv_lang["THEME_DIR_help"]		= "~#pgv_lang[THEME_DIR]#~<br /><br />Složka, ve které se mají uchovávat soubory motivů pro PhpGedView. Kterýkoliv ze standardních motivů PhpGedView si můžete upravit tak, abyste svým stránkám dodali originální vzhled. Pro další informace se podívejte do části \"theme customization\" v souboru <a href=\"readme.txt\">readme.txt</a>.";
$pgv_lang["TIME_LIMIT"]			= "Časový limit PHP";
$pgv_lang["TIME_LIMIT_help"]		= "~#pgv_lang[TIME_LIMIT]#~<br /><br />Maximální čas, udaný v sekundách, po který může PhpGedView běžet.  Implicitní je 1 minuta.  V závislosti na velikosti vašeho GEDCOM souboru možná budete potřebovat zvýšit tento limit kvůli vytvoření rejstříků.  Nastavíte-li tuto hodnotu na 0, bude moci PHP běžet neomezeně.<br />VAROVÁNÍ: Nastavení na 0 nebo na velmi vysoké číslo může na některých operačních systémech způsobit zatuhnutí vašich stránek do doby, než skončí vykonávání skriptu.  Nastavení na 0 znamená, že nemusí skončit nikdy, takže bude nutné na serveru zabít proces nebo server restartovat.  Velmi rozsáhlá schémata rodokmenu se mohou načítat velmi dlouho; necháte-li tuto hodnotu co nejnižší, jak je to jen možné, vyhnete se nebezpečí, že server, na němž jsou umístěny vaše stránky, někdo přetíží např. požadavkem na 1000 – generační schéma.";
$pgv_lang["PGV_SESSION_SAVE_PATH_help"]	= "~#pgv_lang[PGV_SESSION_SAVE_PATH]#~<br /><br />Cesta, kam se mají ukládat soubory session aplikace PhpGedView.  Někteří hostitelé nemají správně nakonfigurované PHP, takže se sessions nepředávají mezi stránkami.  Toto nastavení umožní administrátorům stránek tento nedostatek napravit tím, že se tyto soubory uloží do některé lokální složky.  Pokud potřebujete tento způsob použít, pak je vhodné soubory ukládat např. do složky ./index/.  Implicitně je toto políčko ponecháno prázdné, tzn. že se projeví nastavení uložené v souboru php.ini.";
$pgv_lang["SERVER_URL_help"]		= "~#pgv_lang[SERVER_URL]#~<br /><br />Jestliže používáte https nebo jiný port než implicitní, budete sem muset vložit URL pro přístup sem na váš server.";
$pgv_lang["LOGIN_URL"]			= "Přihlašovací URL";
$pgv_lang["LOGIN_URL_help"]		= "~#pgv_lang[LOGIN_URL]#~<br /><br />Přihlašovací URL nemusíte zadávat, nechcete-li, aby byli uživatelé při přihlašování přesměrováni na jinou adresu. Tato možnost je ovšem velmi užitečná v např., pokud chcete během přihlašování přepnout z http na https. Obsahuje celou adresu souboru login.php (např. https://www.vasserver.cz/phpgedview/login.php).";
$pgv_lang["PGV_SESSION_TIME_help"]	= "~#pgv_lang[PGV_SESSION_TIME]#~<br /><br />Čas, udaný v sekundách, po který zůstávají sessions PhpGedView aktivní před vyžádáním přihlášení.  Implicitní je 30 minut.";
$pgv_lang["SHOW_STATS"]			= "Ukázat statistiku provedení";
$pgv_lang["SHOW_STATS_help"]		= "~#pgv_lang[SHOW_STATS]#~<br /><br />Zobrazit na patičce každé stránky statistiku provedení a dotazy na databázi.";
$pgv_lang["SHOW_COUNTER"]		= "Zobrazit počítadlo přístupů";
$pgv_lang["SHOW_COUNTER_help"]		= "~#pgv_lang[SHOW_COUNTER]#~<br /><br />Zobrazuje počítadlo přístupů (návštěvníků) na vstupní bráně na jednotlivých stránkách.";
$pgv_lang["USE_REGISTRATION_MODULE_help"]	= "~#pgv_lang[USE_REGISTRATION_MODULE]#~<br /><br />Umožní uživatelům vytvořit si na vašich stránkách svůj účet.<br /><br />Návštěvník obdrží e-mailem zprávu s kódem pro potvrzení operace.<br />Po ověření bude muset administrátor registraci potvrdit, aby byl účet aktivován.";
$pgv_lang["ALLOW_USER_THEMES_help"]	= "~#pgv_lang[ALLOW_USER_THEMES]#~<br /><br />Umožnit uživatelům vybrat si vlastní motiv.";
$pgv_lang["PGV_SIMPLE_MAIL_help"] = "~#pgv_lang[PGV_SIMPLE_MAIL]#~<br /><br />V normálních e-mailových hlavičkách v externích e-mailech je použita jak e-mailová adresa, tak jméno. Některé e-mailové systémy tuto formu nepřijímají. Zvolíte-li ano, použije se pouze e-mailová adresa.";
$pgv_lang["gedcom_title"]			= "#pgv_lang[ged_title]#";
$pgv_lang["gedcom_title_help"]		= "~#pgv_lang[gedcom_title]#~<br /><br />Vložte nadpis popisující obsah tohoto GEDCOMu, který se zobrazí návštěvníkům při výběru GEDCOMu k prohlížení.";
$pgv_lang["LOGFILE_CREATE"]		= "Archivovat Log soubory";
$pgv_lang["LOGFILE_CREATE_help"]	= "~#pgv_lang[LOGFILE_CREATE]#~<br /><br />Jak dlouho by měl program archivovat log soubory.";
$pgv_lang["PGV_MEMORY_LIMIT_help"]	= "~#pgv_lang[PGV_MEMORY_LIMIT]#~<br /><br />Maximální velikost paměti, kterou mohou zaplnit skripty PhpGedView.  Implicitní hodnota je 64 M.  Mnoho hostingů tuto volbu vypíná ve svém nastavení PHP, takže změna této hodnoty nemusí ve skutečnosti ovlivnit nastavení velikosti paměti.";
$pgv_lang["PGV_STORE_MESSAGES_help"]	= "~#pgv_lang[PGV_STORE_MESSAGES]#~<br /><br />Určuje, jestli mohou být zprávy poslané přes PhpGedView ukládány do databáze.  Jestliže je nastaveno 'Ano', pak budou moci uživatelé dostávat zprávy, když se přihlásí do PhpGedView.  Jestliže je nastaveno 'Ne', pak se budou zprávy odesílat pouze e-mailem.";
$pgv_lang["ALLOW_THEME_DROPDOWN"]		= "Zobrazit rolovací menu pro změnu motivu";
$pgv_lang["ALLOW_THEME_DROPDOWN_help"]	= "~#pgv_lang[ALLOW_THEME_DROPDOWN]#~<br /><br />Umožňuje uživateli zvolit si vlastní motiv.<br />z rolovacího menu (je-li zabudováno v aktuálním motivu)<br />ALLOW_USER_THEMES musí být taktéž nastaveno na ano.";
$pgv_lang["META_AUTHOR"]		= "META tag o autorovi";
$pgv_lang["META_AUTHOR_help"]	= "~#pgv_lang[META_AUTHOR]#~<br /><br />Hodnota, která má být v hlavičce HTML stránky zapsána do meta tagu o autorovi. Ponechte prázdné, chcete-li zde použít celé jméno kontaktního uživatele.";
$pgv_lang["META_AUTHOR_descr"]	= "Ponechte toto políčko prázdné, chcete-li, aby bylo použito celé jméno kontaktního uživatele.";
$pgv_lang["META_PUBLISHER"]		= "META tag o vydavateli";
$pgv_lang["META_PUBLISHER_help"]	= "~#pgv_lang[META_PUBLISHER]#~<br /><br />Hodnota, jež se má zapsat do meta tagu o vydavateli v hlavičce HTML stránky. Ponechte toto políčko prázdné, chcete-li, aby bylo použito celé jméno kontaktního uživatele.";
$pgv_lang["META_PUBLISHER_descr"]	= "Ponechte toto políčko prázdné, chcete-li, aby bylo použito celé jméno kontaktního uživatele.";
$pgv_lang["META_COPYRIGHT"]		= "META tag o copyrightu";
$pgv_lang["META_COPYRIGHT_help"]	= "~#pgv_lang[META_COPYRIGHT]#~<br /><br />Hodnota, která se zapsat do meta tagu o copyrightu v hlavičce HTML stránky. Ponechte toto políčko prázdné, chcete-li, aby bylo použito celé jméno kontaktního uživatele.";
$pgv_lang["META_COPYRIGHT_descr"]	= "Ponechte toto políčko prázdné, chcete-li, aby bylo použito celé jméno kontaktního uživatele.";
$pgv_lang["META_DESCRIPTION"]		= "META tag s popisem";
$pgv_lang["META_DESCRIPTION_help"]	= "~#pgv_lang[META_DESCRIPTION]#~<br /><br />Hodnota, která se má v hlavičce HTML stránky zapsat do meta tagu s popisem. Ponechte políčko prázdné, chcete-li, aby byl použit nynější nadpis tohoto GEDCOMu.";
$pgv_lang["META_DESCRIPTION_descr"]	= "Ponechte toto políčko prázdné, chcete-li, aby byl použit nadpis tohoto GEDCOMu.";
$pgv_lang["META_PAGE_TOPIC"]		= "META tag o tématu stránky";
$pgv_lang["META_PAGE_TOPIC_help"]	= "~#pgv_lang[META_PAGE_TOPIC]#~<br /><br />Hodnota, která se má v hlavičce HTML stránky zapsat do meta tagu popisující tematické zaměření stránky. Ponechte políčko prázdné, chcete-li, aby byl použit nynější nadpis tohoto GEDCOMu.";
$pgv_lang["META_PAGE_TOPIC_descr"]	= "Ponechte toto políčko prázdné, chcete-li, aby byl použit nynější nadpis tohoto GEDCOMu.";
$pgv_lang["META_AUDIENCE"]		= "META tag Audience";
$pgv_lang["META_AUDIENCE_help"]	= "~#pgv_lang[META_AUDIENCE]#~<br /><br />Hodnota, která se má v hlavičce HTML stránky zapsat do meta tagu popisující skupinu lidi, pro niž jsou stránky určeny.";
$pgv_lang["META_PAGE_TYPE"]		= "META tag typu stránky";
$pgv_lang["META_PAGE_TYPE_help"]	= "~#pgv_lang[META_PAGE_TYPE]#~<br /><br />Hodnota, která se má v hlavičce HTML stránky zapsat do meta tagu popisující typ stránky.";
$pgv_lang["META_ROBOTS"]		= "META tag robotů";
$pgv_lang["META_ROBOTS_help"]	= "~#pgv_lang[META_ROBOTS]#~<br /><br />Hodnota, která se má v hlavičce HTML stránky zapsat do meta tagu pro roboty. Mnoho roborů toto nastavení ignoruje.";
$pgv_lang["META_REVISIT"]		= "Jak často by měl webový pavouk kontrolovat META tag";
$pgv_lang["META_REVISIT_help"]	= "~#pgv_lang[META_REVISIT]#~<br /><br />Hodnota, jež se má zapsat do hlavičky HTML stránky do meta tagu revize. Mnoho webových pavouků tuto hodnotu ignorují.";
$pgv_lang["META_KEYWORDS"]		= "META tag klíčových slov";
$pgv_lang["META_KEYWORDS_help"]	= "~#pgv_lang[META_KEYWORDS]#~<br /><br />Hodnota, která má být zapsána v hlavičce HTML stránky do meta tagu klíčových slov. Mnoho vyhledávačů používá klíčová slova pro přesnější zařazení vaší stránky. Seznam nejčastějších příjmení, který se objevuje v bloku statistiky GEDCOMu na úvodní stránce, bude automaticky přidán ke slovům, která sem vepíšete.";
$pgv_lang["META_TITLE"]		= "Přidat do hlavičkového tagu TITLE (nadpis)";
$pgv_lang["META_TITLE_help"]	=	"~#pgv_lang[META_TITLE]#~<br /><br />Cokoliv vepíšete do tohoto řádku, bude přidáno do nadpisu HTML stránky mezi řádný nadpis a slovo PhpGedView.";

$pgv_lang["welcome_new_help"]		= "~#pgv_lang[welcome_new]#~<br /><br />Toto okno s nápovědou vás provede nastavením systému. Budete měnit nastavení různých políček a toto okno vám poradí, co můžete zvolit právě u dané položky. Toto okno můžete zavřít a, budete-li jej pak chtít znovu otevřít, stačí kliknout na otazník \"?\" vedle popisku upravovaného políčka.";
$pgv_lang["return_editconfig"]		= "Ke konfigurování se můžete kdykoliv vrátit, když otevřete v prohlížeči soubor editconfig.php nebo kliknete na odkaz <b>Konfigurace</b> na stránce <b>Adminstrace</b>.";
$pgv_lang["return_editconfig_gedcom"]	= "Ke konfigurování se můžete kdykoliv vrátit kliknutím na odkaz: <b>Upravit</b> v tabulce <b>Současné GEDCOMy</b> nebo na stránce <b>Adminstrace GEDCOMů</b> nebo otevřením souboru editconfig_GEDCOM.php ve svém prohlížeči.";
$pgv_lang["save_config"] 	= "Uložit konfiguraci";
$pgv_lang["download_gedconf"]	= "Stáhnout konfiguraci GEDCOM.";
$pgv_lang["not_writable"]	= "Zjistili jsme, že PHP do vašeho konfiguračního souboru nemůže zapisovat.  Můžete použít tlačítko ke stažení pro uložení svého nastavení do souboru, který budete moci ručně nahrát (uploudovat).";
$pgv_lang["upload_to_index"]	= "Nahrát soubor do složky index: ";

//-- edit privacy messages
$pgv_lang["edit_privacy"]			= "Upravit privátnost";
$pgv_lang["edit_privacy_title"]			= "Upravit nastavení privátnosti v GEDCOMu";
$pgv_lang["save_changed_settings"]		= "Uložit změny";
$pgv_lang["add_new_pp_setting"]			= "Přidat nové nastavení osobní privátnosti";
$pgv_lang["add_new_up_setting"]			= "Přidat nové nastavení uživatelské privátnosti";
$pgv_lang["add_new_gf_setting"]			= "Přidat nové nastavení privátnosti globálních údajů";
$pgv_lang["add_new_pf_setting"]			= "Přidat nové nastavení privátnosti osobních údajů";
$pgv_lang["file_read_error"]			= "C H Y B A !!! Nejde číst soubor s nastavením privátnosti!";
$pgv_lang["edit_exist_person_privacy_settings"]	= "Upravit existující nastavení osobní privátnosti";
$pgv_lang["edit_exist_user_privacy_settings"]	= "Upravit existující nastavení uživatelské privátnosti";
$pgv_lang["edit_exist_global_facts_settings"]	= "Upravit existující nastavení privátnosti globálních údajů";
$pgv_lang["edit_exist_person_facts_settings"]	= "Upravit existující nastavení privátnosti osobních údajů";
$pgv_lang["general_privacy"]			= "Obecné nastavení privátnosti";
$pgv_lang["general_privacy_help"]		= "~#pgv_lang[general_privacy]#~<br /><br />Toto nastavení bude vašim implicitním nastavením pro konkrétní GEDCOM.<br /><br />Podívejte se pod titulek stránky, abyste si ověřili, že upravujete správný GEDCOM.<br /><br />To zároveň znamená, že pro každý GEDCOM (máte-li více než jeden) ve vašem PhpGedView můžete mít zvláštní nastavení.<br /><br />Toto obecné nastavení můžete \"přebít\" použitím dalších formulářů privátnosti na stránce #pgv_lang[edit_privacy_title]#.<br />#pgv_lang[more_config_help]#";
$pgv_lang["person_privacy"]				= "Položka privátního nastavení";
$pgv_lang["person_privacy_help"]		= "~#pgv_lang[person_privacy]#~<br /><br />Toto nastavení umožňuje administrátorům přepsat implicitní nastavení konkrétní osoby v GEDCOMu. Předpokládejme například, že jste měli dítě, které zemřelo v útlém věku. Normálně, poněvadž je to dítě mrtvé, by byly údaje o něm přístupné všem uživatelům. Ale informace o vás a všech ostatních z vaší rodiny jsou ještě soukromé. Nechcete odstranit záznam o úmrtí dítěte; chcete tyto údaje zařadit mezi soukromé. Jestliže mělo ID tohoto dítěte bylo I100, měli byste zadat následující privátní nastavení: <br /><br />ID: I100<br />Komu ukázat: \"Ukázat jen autentifikovaným uživatelům\"<br /><br />Obdobný postup můžeme použít v jiném případě. Kdybychom chtěli zveřejnit údaje o někom (ID 101), o kom bychom věděli, že již nežije, ale neměli bychom datum jeho úmrtí, mohli bychom to udělat následovně:<br /><br />ID: I101<br />Komu ukázat: \"Ukázat veřejně\"";
$pgv_lang["user_privacy"]				= "Nastavení uživatelské privátnosti";
$pgv_lang["user_privacy_help"]			= "~#pgv_lang[user_privacy]#~<br /><br />Toto nastavení umožní administrátorům přepisovat implicitní privátní nastavení jednotlivců podle přihlašovacího jména návštěvníka.<br /><br />Takže, kdybych nechtěl, aby si mohl uživatel s uživatelským jménem \"John\" prohlížet mé osobní údaje, a moje ID v GEDCOMu by bylo 100, mohl bych to nakonfigurovat tímto způsobem:<br /><br />Uživatelské jméno: John<br />ID: I100<br />Ukázat?: \"Skrýt\"<br /><br />a mé osobní údaje by byly skryty pouze uživateli s uživ. jménem \"John\".<br /><br />Pro zobrazování podrobností o osobě I101 (ty jsou obvykle skryty, předpokládáme-li, že I101 je ještě na živu) uživateli \"John\" nastavte:<br /><br />Uživatelské jméno: John<br />ID: I101<br />Ukázat?: \"Ukázat\"";
$pgv_lang["global_facts"]				= "Nastavení privátnosti globálních údajů";
$pgv_lang["global_facts_help"]			= "~#pgv_lang[global_facts]#~<br /><br />Nastavení \"global_facts\" definuje globálně údaje, které by měly být skryty pro všechny osoby v GEDCOMu.<br /><br />Prvek [\"Název údaje\"] určuje, který údaj by měl být skryt. Prvek [\"Volba\"] vybere údaj samotný  nebo související informace. Prvek [\"Komu ukázat\"] určuje, na jaké úrovni přístupu se má údaj zobrazit.<br /><br />Pole \$global_facts má zajistit skrytí jistých údajů podle GEDCOM tagu u osob živých i zemřelých. Implicitně je veřejnosti skryt tag SSN. Je to z toho důvodu, aby nedocházelo ke krádežím \"social security numbers\" a totožnosti vašich zemřelých příbuzných, což je se týká asi především USA. <br />Kdybychom chtěli skrýt všechna manželství ve svém GEDCOMu, mohli bychom nastavit:<br /><br />Název údaje: (MARR) - Manželství<br />Volba: \"Skrýt údaj\"<br />Komu ukázat?: \"Zobrazit jen autentifikovaným uživatelům\"<br /><br />Název údaje: (MARR) - Manželství<br />Volba: \"Zobrazit podrobnosti\"<br />Komu ukázat?: \"Zobrazit jen autentifikovaným uživatelům\"<br /><br />Toto nastavení zajistí skrytí údajů o sňatcích a související informace všem kromě adminů.<br /><br />Narozdíl od všech ostatních nastavení, můžete v \"global_facts\" skrýt údaje i adminům. To kvůli naprostému utajení dat, která chceme uchovat v tajnosti.";
$pgv_lang["person_facts"]				= "Nastavení privátnosti osobních údajů";
$pgv_lang["person_facts_help"]			= "~#pgv_lang[person_facts]#~<br /><br />Toto nastavení definuje údaje, které se mají pro určitou osobu v GEDCOMu skrýt a úroveň, na níž mají být skyty.<br /><br />Prvním prvkem je ID osoby, druhým pak údaj.<br />Prvek [\"Volba\"] vybere údaj samotný nebo související informace. Prvek [\"Komu ukázat\"] určuje, na jaké úrovni bude údaj zobrazen.<br /><br />Pole \$person_facts funguje stejně jako pole \$global_facts s tím rozdílem, že navíc zadáváte ID osoby, pro niž chcete údaje skrýt. Tak bychom mohli například skrýt záznam o sňatku pro určitou osobu.";
$pgv_lang["accessible_by"]			= "Komu ukázat?";
$pgv_lang["hide"]				= "Skrýt";
$pgv_lang["show_question"]			= "Ukázat?";
$pgv_lang["user_name"]				= "Uživatelské jméno";
$pgv_lang["name_of_fact"]			= "Název údaje";
$pgv_lang["choice"]				= "Volba";
$pgv_lang["fact_show"]				= "Zobrazit údaj";
$pgv_lang["fact_details"]			= "Zobrazit podrobnosti o údaji";
$pgv_lang["privacy_header"]			= "Upravit nastavení privátnosti uvnitř";
$pgv_lang["unable_to_find_privacy_indi"]	= "Není možné nalézt osobu s id";
$pgv_lang["save_and_import"]			= "Po uložení konfigurace tohoto GEDCOMu, bude potřeba importovat GEDCOM soubor kliknutím na tlačítko <b>Importovat GEDCOM</b> nebo výběrem z menu <b>Admin->Správa GEDCOM souborů->Importovat</b>";
$pgv_lang["help_info"]				= "Kliknutím na červený &quot;?&quot; u popisku každé buňky získáte nápovědu.";
$pgv_lang["SHOW_LIVING_NAMES"]			= "Ukázat jména žijících osob";
$pgv_lang["SHOW_LIVING_NAMES_help"]		= "~#pgv_lang[SHOW_LIVING_NAMES]#~<br /><br />Zobrazit jména žijících osob<br /><br />Jména žijících osob by měla být zobrazována veřejně.";


$pgv_lang["USE_RELATIONSHIP_PRIVACY"]		= "Použít příbuzenskou privátnost";
$pgv_lang["USE_RELATIONSHIP_PRIVACY_help"]	= "~#pgv_lang[USE_RELATIONSHIP_PRIVACY]#~<br /><br />Hodnota 'Ne' znamená, že autentifikovaní uživatelé uvidí data všech žijících osob.<br />Hodnota 'Ano' znamená, že uživatelé si budou moci prohlížet soukromá data pouze svých příbuzných.";
$pgv_lang["MAX_RELATION_PATH_LENGTH"]		= "Max. příbuzenská vzdálenost";
$pgv_lang["MAX_RELATION_PATH_LENGTH_help"]	= "~#pgv_lang[MAX_RELATION_PATH_LENGTH]#~<br /><br />Je-li volba #pgv_lang[USE_RELATIONSHIP_PRIVACY] zapnuta, přihlášení uživatelé si budou moci prohlížet a upravovat údaje u osob maximálně do této příbuzenské vzdálenosti.";
$pgv_lang["CHECK_MARRIAGE_RELATIONS"]		= "Kontrolovat příbuznost sňatkem";
$pgv_lang["CHECK_MARRIAGE_RELATIONS_help"]	= "~#pgv_lang[CHECK_MARRIAGE_RELATIONS]#~<br /><br />Zkontrolovat příbuznost sňatkem.";
$pgv_lang["SHOW_DEAD_PEOPLE"]			= "Zobrazit jména zemřelých osob";
$pgv_lang["SHOW_DEAD_PEOPLE_help"]		= "~#pgv_lang[SHOW_DEAD_PEOPLES]#~<br /><br />Nastavit soukromý přístup ke všem mrtvým lidem";
$pgv_lang["select_privacyfile_button"]		= "Vybrat soubor privátnosti";
$pgv_lang["PRIVACY_BY_YEAR"]		= "Nastavit privátnost podle stáří události";
$pgv_lang["PRIVACY_BY_YEAR_help"]	= "~#pgv_lang[PRIVACY_BY_YEAR]#~<br /><br />Nastavení privátnost podle věku způsobí, že budou skryty údaje o osobách podle toho, před jakou dobou k nim došlo, nezávisle na tom, jestli je daná osoba dosud naživu, nebo ne. Tato vlastnost souvisí s nastavením \"Věk, od kterého je možné osobu považovat za mrtvou\". Například, když nastavíte zmíněnou položku věku na 100 a tuto volbu nastavíte na \"Ano\", pak informace o všech osobách narozených před méně než 100 lety (živých i mrtvých) budou označeny za soukromé. Vemte prosím na vědomí, že tato volba poněkud zpomalí načítání stránek.";

//-- language edit utility
$pgv_lang["lang_edit_help"]			= "~#pgv_lang[translator_tools]#~<br /><br />Tato stránka slouží k administraci vašich jazykových souborů.<br />Jazykové soubory můžete překládat, porovnávat a exportovat.<br />Dále můžete konfigurovat jazyky programem podporované.<br /><br />Můžete používat následující volby a pomůcky:";
$pgv_lang["edit_langdiff"]		= "Upravit a nastavit jazyk";
$pgv_lang["bom_check"]		= "Kontrola jazykového souboru na BOM";
$pgv_lang["bom_check_help"]		= "~#pgv_lang[bom_check]#~<br /><br />Tento nástroj zkontroluje všechny jazykové soubory, zda neobsahují BOM (signaturu UTF-8 - tj. Byte Order Mark). Pokud ano, bude z dotčených souborů odstraněno.";
$pgv_lang["bom_not_found"]		= "Žádné BOM nebylo nalezeno.";
$pgv_lang["bom_found"]			= "BOM bylo nalezeno v ";
$pgv_lang["edit_lang_utility"]		= "Nástroj pro úpravu jazykových souborů";
$pgv_lang["edit_lang_utility_help"]	= "Tuto pomůcku můžete použít k úpravě obsahu jazykových souborů užitím obsahu souboru anglického.<br />Vypíše se vám obsah původního anglického souboru a souboru vámi vybraného jazyka.<br />Po kliknutí na zprávu vámi zvoleného jazyka se otevře nové okno, v němž můžete zprávu změnit a uložit.";
$pgv_lang["edit_lang_utility_warning"]	= "POZOR!<br /><br />Kdybyste se rozhodli použít tlačítko >#close_window_without_refresh#<, měli byste vědět, že neuvidíte na obrazovce jazykového editoru přímo své změny, dokud neprovedete ruční znovu-načtení stránky a to může způsobit poškození vašeho jazykového souboru, jestliže přidáte zprávu, která dosud není v jazykovém souboru nebo pokud jen upravíte zprávu, kterou jste upravovali hned předtím.<br /><br />Takže, pokud si nejste 100% jistí, co děláte, nepoužívejte prosím tlačítko <b>#pgv_lang[close_window_without_refresh]#</b>";
$pgv_lang["language_to_edit"]		= "Jazyk, který se má upravit";
$pgv_lang["language_to_edit_help"]		= "~#pgv_lang[language_to_edit]#~<br /><br />Z tohoto seznamu můžete vybrat jazyk, jehož zprávy (texty) chcete <b>upravovat</b>.";
$pgv_lang["file_to_edit"]		= "Typ jazykového souboru, který se má upravit";
$pgv_lang["file_to_edit_help"]			= "~#pgv_lang[file_to_edit]#~<br /><br />Tady můžete zvolit typ jazykového souboru, který chcete upravovat.<br /><br />Možnosti jsou:<br/>lang.xx.php<br />facts.xx.php<br />configure_help.xx.php<br />help_text.xx.php<br /><br />Kde xx zastupuje kód vámi zvoleného jazyka a je nastaven automaticky.";
$pgv_lang["check"]			= "Zkontrolovat";
$pgv_lang["lang_save"]			= "Uložit";
$pgv_lang["contents"]			= "Obsah";
$pgv_lang["listing"]			= "Výčet";
$pgv_lang["no_content"]			= "Bez obsahu";
$pgv_lang["editlang"]			= "Upravit";
$pgv_lang["editlang_help"]		= "~#pgv_lang[editlang]#~<br /><br />Upravit zprávu z jazykového souboru";
$pgv_lang["savelang"]			= "Uložit";
$pgv_lang["savelang_help"]		= "~#pgv_lang[savelang]#~<br /><br />Uložit upravenou zprávu";
$pgv_lang["original_message"]		= "Původní zpráva";
$pgv_lang["message_to_edit"]		= "Zpráva k úpravě";
$pgv_lang["changed_message"]		= "Změněný obsah";
$pgv_lang["message_empty_warning"]	= "-> Upozornění!!! Tato zpráva je v souboru [#LANGUAGE_FILE#] prázdná&lt;-";
$pgv_lang["language_to_export"]		= "Jazyk na exportování";
$pgv_lang["language_to_export_help"]		= "~#pgv_lang[language_to_export]#~<br /><br />Zde můžete vybrat jazyk, z něhož chcete <b>exportovat</b> zprávy.";
$pgv_lang["export_lang_utility"]	= "Pomůcka pro exportování jazykového souboru";
$pgv_lang["export"]			= "Export";
$pgv_lang["export_lang_utility_help"]	= "~#pgv_lang[export_lang_utility]#~<br /><br />V tomto modulu si můžete vybrat jazyk a kliknutím na tlačítko EXPORT exportovat zprávy s nápovědou ze souboru configuration_help pro zvolený jazyk pro vytvoření dokumentace.";
$pgv_lang["export_ok"]			= "Zprávy s nápovědou byly exportovány";
$pgv_lang["compare_lang_utility"]	= "Pomůcka pro porovnávání jazykových souborů";
$pgv_lang["compare_lang_utility_help"]	= "~#pgv_lang[compare_lang_utility]#~<br /><br />Tento modul porovná dva jazykové soubory a vytvoří seznam rozdílů mezi nimi.<br />Pro všechny změny si přečtěte také soubor [<a href=\"languages/LANG_CHANGELOG.txt\" target=\"_blank\">LANG_CHANGELOG.txt</a>].";
$pgv_lang["new_language"]		= "Zdrojový jazyk";
$pgv_lang["new_language_help"]			= "~#pgv_lang[new_language]#~<br /><br />Zde můžete zvolit jazyk, jehož zprávy chcete porovnat se zprávami jiného jazyka.<br/><br/>Všechny změny a doplňky se provádí nejprve v <b>anglických</b> jazykových souborech.";
$pgv_lang["old_language"]		= "Druhý jazyk";
$pgv_lang["old_language_help"]			= "~#pgv_lang[old_language]#~<br /><br />Zde můžete vybrat jazyk, který chcete použít pro srovnání s jazykem vybraným v políčku <b>Zdroj</b>.<br/><br/> Po tom, co si vyberete, klikněte an tlačítko <b>Porovnat</b> a zobrazí se vám seznam všech rozdílů mezi zvolenými jazykovými soubory.<br /><br />Upozorňujeme, že:<br /><b>Přebývající</b> znamená: Tato položka je <b>v</b> zdrojovém souboru, ale <b>není</b> v souboru druhého jazyka.<br /><br /><b>Chybějící</b> znamená: Ve zdrojovém souboru tato položku už <b>není</b>, ale v souboru druhého jazyka (ještě) <b>je</b>.";
$pgv_lang["compare"]			= "Porovnat";
$pgv_lang["comparing"]			= "Porovnávané jazykové soubory";
$pgv_lang["additions"]			= "Přebývající části";
$pgv_lang["no_additions"]		= "Žádné přebývající části";
$pgv_lang["subtractions"]		= "Chybějící části";
$pgv_lang["no_subtractions"]		= "Žádné chybějící části";
$pgv_lang["config_lang_utility"]	= "Konfigurace podporovaných jazyků";
$pgv_lang["config_lang_utility_help"]	= "~#pgv_lang[config_lang_utility]#~<br /><br />Tento modul vám pomůže upravovat nastavení specifické pro daný jazyk pro použití v PhpGedView.<br />Povšimněte si prosím, že, pokud jste změnili původní jazykové nastavení PhpGedView, byl ve vaší složce #INDEX_DIRECTORY# vytvořen nový soubor (#INDEX_DIRECTORY#lang_settings.php).<br />Všechny vaše další změny se budou zapisovat do tohoto souboru a PhpGedView bude používat pouze TENTO soubor.<br />Takže, pokud jste měli potíže se svým národním nastavením, prosím všimněte si, že tento nový soubor máte ve složce #INDEX_DIRECTORY#!";
$pgv_lang["active"]			= "Aktivní";
$pgv_lang["active_help"]		= "Umožnit uživatelům vybrat si tento jazyk, je-li povolena změna jazyka.";
$pgv_lang["edit_settings"]		= "Upravit nastavení";
$pgv_lang["lang_edit"]			= "Upravit";
$pgv_lang["lang_language"]		= "Jazyk";
$pgv_lang["export_filename"]		= "Název souboru obsahujícího exportovaná data:";
$pgv_lang["lang_back"]			= "Pro úpravu a nastavení jazyka se vraťte  zpět do hlavního menu.";
$pgv_lang["lang_back_admin"]		= "Zpět do menu Admina";
$pgv_lang["lang_back_manage_gedcoms"]	= "Zpět do menu správy GEDCOMů";
$pgv_lang["lang_name_arabic"]		= "Arabština";
$pgv_lang["lang_name_czech"]		= "Čeština";
$pgv_lang["lang_name_danish"]		= "Dánština";
$pgv_lang["lang_name_dutch"]		= "Holandština";
$pgv_lang["lang_name_english"]		= "Angličtina";
$pgv_lang["lang_name_finnish"]		= "Finština";
$pgv_lang["lang_name_french"]		= "Francouzština";
$pgv_lang["lang_name_german"]		= "Němčina";
$pgv_lang["lang_name_greek"]		= "Řečtina";
$pgv_lang["lang_name_hebrew"]		= "Hebrejština";
$pgv_lang["lang_name_hungarian"]	= "Maďarština";
$pgv_lang["lang_name_italian"]		= "Italština";
$pgv_lang["lang_name_norwegian"]	= "Norština";
$pgv_lang["lang_name_polish"]		= "Polština";
$pgv_lang["lang_name_portuguese"]	= "Portugalština";
$pgv_lang["lang_name_russian"]		= "Ruština";
$pgv_lang["lang_name_spanish"]		= "Španělština";
$pgv_lang["lang_name_spanish-ar"]	= "Latinsko-americká španělština";
$pgv_lang["lang_name_swedish"]		= "Švédština";
$pgv_lang["lang_name_turkish"]		= "Turečtina";
$pgv_lang["lang_new_language"]		= "Nový jazyk";
$pgv_lang["original_lang_name"]		= "Jak tento jazyk označuje jazyk #D_LANGNAME#";
$pgv_lang["original_lang_name_help"]	= "Jak se tento jazyk nazývá v tomto jazyce?<br /><br />Angličtina je v anglickém jazyce: English<br />Němčina je v německém jazyce: Deutsch<br />Holandština je v holandském jazyce: Nederlands<br />atd.";
$pgv_lang["lang_shortcut"]		= "Zkratka pro jazyk";
$pgv_lang["lang_shortcut_help"]		= "Tento kód definuje zkratku, kterou používá PhpGedView pro zvolený jazyk.<br />Běžně to bývá první zkratka uvedená v 'Language detection codes', což je možno definovat v následujícím políčku v okně národního (jazykového) nastavení.";
$pgv_lang["lang_langcode"]		= "Kód pro rozpoznání jazyka";
$pgv_lang["lang_langcode_help"]		= "~#pgv_lang[lang_langcode]#~<br /><br />Tento kód umožňuje PhpGedView rozpoznat jazykové nastavení prohlížeče, který aktuální uživatel používá k prohlížení vašich stránek PhpGedView. Jednotlivé kódy musí být odděleny středníkem ';'";
$pgv_lang["lang_filenames"]		= "Jazykový soubor";
$pgv_lang["lang_filenames_help"]		= "~#pgv_lang[lang_filenames]#~<br /><br />Název a cesta k standardním jazykovým překladům.";


$pgv_lang["flagsfile"]			= "Soubor s vlajkou";
$pgv_lang["flagsfile_help"]		= "Název a cesta k obrázku s národní vlajku pro označený jazyk.";
$pgv_lang["text_direction"]		= "Směr textu";
$pgv_lang["text_direction_help"]	= "~#pgv_lang[date_format]#~<br /><br />Definuje směr, v němž se píše ve zvoleném jazyce.<br /><br />Všechny západní jazyky normálně používají pro čtení a psaní textů směr zleva doprava.<br />Ale u jazyků jako arabštiny nebo hebrejštiny je směr opačný.";
$pgv_lang["date_format"]			= "Formát data";
$pgv_lang["date_format_help"]		= "~#pgv_lang[date_format]#~<br /><br />Toto políčko definuje formát data, který se bude používat obecně v genealogických pracech ve zvoleném jazyce.<br /><br />Proměnné, které můžete používat, jsou:<br />D pro den<br />M pro měsíc<br />Y pro rok.<br /><br />Můžete změnit pořadí těchto proměnných a také do nich přidat vymezující znaky.<br /><br />Standardní nastavení této proměnné je 'D M Y', což znamená, že data v GEDCOM záznamech budou vypadat takto 'DATE 20 Lis 1965' je v PhpGedView zobrazeno jako '20 Listopad 1965'.<br /><br />Například v Česku je obsah tohoto políčka: 'D. M Y', což znamená, že datum z našeho příkladu bude v češtině: '20. Listopad 1965'.<br /><br />Jiný příklad je maďarština, která definuje datum 'Y M D' a 'naše' datum by se v PhpGedView zobrazilo jako '1965 Listopad 20' (kdyby byl v maďarštině 11. měsíc Listopad).<br />Jiným příkladem je finština, která definuje datum 'D. M#ta# Y'. Tato definice znamená, že ve finštině se všechny měsíce, u nichž je v GEDCOM záznamu uveden i den, zobrazí jako 20. Novemberta 1965 (kdyby November byl finský název pro 11. měsíc).";
$pgv_lang["time_format"]		= "Formát času";
$pgv_lang["time_format_help"]		= "~#pgv_lang[time_format]#~<br /><br />Toto políčko definuje formát času, který se bude používat pro daný jazyk.<br /><br />Proměnné, které můžete použít, jsou:<br />a – malé písmeno: dopoledne a odpoledne - 'am' nebo 'pm'<br />A – velké písmeno: dopoledne a odpoledne - 'AM' nebo 'PM'<br />B – Vzorový internetový čas 000 až 999<br />c – datum ISO 8601 (přidáno v PHP 5) 2004-02-12T15:19:21+00:00<br />d – Den měsíce, 2 číslice (nula na začátku) 01 až 31<br />D – Textová zkratka dne, tři písmena Mon až Sun<br />F – Měsíc celým slovem, jako např. January nebo March January až December<br />g – 12-hodinový formát bez nuly na začátku 1 až 12<br />G – 24-hodinový formát bez nuly na začátku 0 až 23<br />h - 12-hodinový formát s nulou na začátku 01 až 12<br />H - 24-hodinový formát s nulou na začátku 00 až 23<br />i – Minuty s nulou na začátku 00 až 59<br />I - (velké i) Jestli je, nebo není datum uloženo v letním čase 1, pokud je v letním čase, jinak 0.<br />j – Den v měsíci bez nuly na začátku 1 až 31<br />l - (malé 'L') Den v týdnu celým slovem Sunday až Saturday<br />L – Jestli je to přestupný rok 1, pokud je to přestupný rok, jinak 0.<br />m – Číselné vyjádření měsíce s nulou na začátku 01 až 12<br />M – Textová zkratka měsíce, tři měsíce Jan až Dec<br />n – Číselné vyjádření měsíce bez nuly na začátku 1 až 12<br />O – Rozdíl oproti času v Greenwich (GMT) v hodinách Například: +0200<br />r – formátování času RFC 2822 Například: Thu, 21 Dec 2000 16:01:07 +0200<br />s – Sekundy s nulou na začátku 00 až 59<br />S – Anglická zkratková přípona dne v měsíci, 2 znaky st, nd, rd or th. Funguje dobře s j<br />t – Počet dní v daném měsíci 28 až 31<br />T – Nastavená časová zóna na tomto zařízení Například: CEST, EST, MDT ...<br />U – Sekundy od Unixového období (January 1 1970 00:00:00 GMT)<br />w – Číselné vyjádření dne v týdnu 0 (pro neděli) až 6 (pro sobotu)<br />W – číslo týdne v roce ISO-8601, týdny začínající v pondělí (přidáno v PHP 4.1.0) Například: 42 (42. týden v roce)<br />Y – Vyjádření roku čtyřmi číslicemi Například: 1999 nebo 2003<br />y – Dvouciferné vyjádření roku Například: 99 nebo 03<br />z – Den v roce (počínaje 0) 0 až 365<br />Z – Vyvážení časové zóny v sekundách. Vyvážení časových pásem západně od UTC je vždy záporné, a pro ty východně od UTC je vždy kladné. -43200 až 43200<br /><br />Můžete změnit pořadí těchto proměnných a také do nich přidat vymezující znaky.<br />Například v němčině je obsah tohoto políčka: 'H:i:s', což vytvoří výstup jako: '09:01:25'.<br />V angličtině je standardní definice tohoto pole: 'g:i:sa', což vytvoří výstup jako: '9:01:25am'.";
$pgv_lang["week_start"]			= "Počáteční den týdne";
$pgv_lang["week_start_help"]		= "~#pgv_lang[week_start]#~<br />Den, kterým začíná týden pro  tento jazyk.  Pro většinu jazyků začíná týden nedělí, ale pro některé začíná v pondělí nebo v jiné dny.";
$pgv_lang["name_reverse"]		= "Příjmení na prvním místě";
$pgv_lang["name_reverse_help"]		= "~#pgv_lang[name_reverse]#~<br />V některých jazycích by mělo být příjmení zobrazeno jako první namísto implicitního zobrazení na posledním místě.  Zapnete-li tuto volbu, budou se příjmení zobrazovat na prvním místě.";
$pgv_lang["ltr"]			= "Zleva doprava";
$pgv_lang["rtl"]			= "Zprava doleva";
$pgv_lang["file_does_not_exist"]	= "CHYBA! Soubor neexistuje...";
$pgv_lang["alphabet_upper"]		= "Velká písmena abecedy";
$pgv_lang["alphabet_upper_help"]	= "~#pgv_lang[alphabet_upper]#~<br /><br />Tato abeceda se používá k řazení seznamu jmen zapsaných velkými písmeny v aplikaci PhpGedView ve zvoleném jazyce.";
$pgv_lang["alphabet_lower"]		= "Malá písmena abecedy";
$pgv_lang["alphabet_lower_help"]	= "~#pgv_lang[alphabet_lower]#~<br /><br />Tato abeceda se používá k řazení seznamu jmen zapsaných malými písmeny v aplikaci PhpGedView ve zvoleném jazyce.";
$pgv_lang["lang_config_write_error"]	= "Chyba během zápisu jazykového nastavení do souboru [language_settings.php]. Zkontrolujte práva a zkuste to znovu.";
$pgv_lang["translation_forum"]		= "Odkaz do fóra překladů PhpGedView na SourceForge";
$pgv_lang["translation_forum_help"]	= "~#pgv_lang[translation_forum]#~<br /><br />Tento odkaz otevře nové okno prohlížeče, v němž budete přesměrováni do fóra překladů PhpGedView (http://sourceforge.net/forum/forum.php?forum_id=294245), kde můžete prodiskutovat specifické problémy překladu :-)";
$pgv_lang["lang_set_file_read_error"]	= "C H Y B A !!! Nelze číst soubor [language_settings.php]!";


$pgv_lang["add_new_language_help"]	= "Tento nástroj můžete použít pro přidání nového dosud nepodporovaného jazyka do PhpGedView.<br />Vyplňte prosím všechna potřebná políčka v následujícím okně.<br />Po vytvoření nových souborů budete moci upravovat zprávy pro daný jazyk.";
$pgv_lang["add_new_lang_button"]	= "Přidat nový jazyk";
$pgv_lang["hide_translated"]		= "Skrýt přeložené";
$pgv_lang["hide_translated_help"]		= "~#pgv_lang[hide_translated]#~<br /><br />Nastavíte-li 'ano', uvidíte pouze ty zprávy zvoleného jazyka, které dosud nebyly přeloženy. To znamená – ty, které v souboru zvoleného jazyka ještě nejsou.<br />Po přidání přeložené zprávy se tato zpráva již v seznamu nezobrazí.";
$pgv_lang["lang_file_write_error"]	= "C H Y B A !!!<br /><br />Změny nebylo možné do zvoleného jazykové souboru zapsat!<br />Zkontrolujte práva zápisu pro soubor (#lang_filename#)";
$pgv_lang["no_open"]	= "C H Y B A !!!<br /><br />Není možné otevřít soubor #lang_filename#";

//-- User Migration Tool messages
$pgv_lang["um_header"] = "Nástroj pro přesun informací o uživatelích";
$pgv_lang["um_proceed"] = "Pokračovat v exportu uživatelských datových souborů?";
$pgv_lang["um_creating"] = "Kopírování";
$pgv_lang["um_file_create_fail1"] = "Nebylo možné vytvořit nový soubor; soubor s tímto názvem již existuje:";
$pgv_lang["um_file_create_fail2"] = "Není možné zkopírovat";
$pgv_lang["um_file_create_fail3"] = "Zkontrolujte přístupová práva k této složce.";
$pgv_lang["um_file_create_succ1"] = "Vytvoření nového souboru proběhlo úspěšně:";
$pgv_lang["um_file_not_created"] = "Soubor nebyl vytvořen.";
$pgv_lang["um_nomsg"] = "Zdá se, že v tuto chvíli v systému nejsou žádné zprávy.";
$pgv_lang["um_nofav"] = "Zdá se, že v tuto chvíli nejsou v systému žádné oblíbené,";
$pgv_lang["um_nonews"] = "Zdá se, že v tuto chvíli nejsou v systému žádné novinky.";
$pgv_lang["um_noblocks"] = "Zdá se, že v tuto chvíli nejsou v systému žádné bloky.";
$pgv_lang["index_gedcom_news_adm_help"]		= "V bloku Novinek můžete používat <b>HTML tagy</b>.<br />Dbejte na to, abyste vždy tag ukončili.<br />Je třeba, abyste věděli něco o HTML, ale my věříme, že většina z vás toto kritérium splňuje.<br /><br />Tento program používá i <b>Káskádové styly (CSS)</b>. Pro každý motiv je zvláštní styl.<br />Můžete použít i třídy z těchto kaskádových stylů.<br /><br />Potřebujete-li k tomu další nápovědu: Na našich stránkách (PhpGedView) budeme mít několik příkladů, jak používat tyto tagy ve vašem vlastním bloku.";

?>
