<?php
/**
 * Turkish Language file for PhpGedView.
 *
 * phpGedView: Genealogy Viewer
 * Copyright (C) 2002 to 2018  PGV Development Team.  All rights reserved.
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
 * @author Kurt Norgaz
 * @author Adem GENÇ uzayuydu@gmail.com http://www.muttafi.com
 * @version $Id$
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

$pgv_lang["google_analytics_help"]			= "~#pgv_lang[google_analytics]#~<br /><br />#pgv_lang[google_analytics]# hitmeti <a href='http://en.wikipedia.org/wiki/Google_Analytics' target='_blank' title='Google Analız�'>Wikipedia makale</a> sinde açıklanmıştır.<br /><br />Lütfen not, eğer bu hizmeti kullanıyorsanız Google sitenize ziyaretçi aktivite hakkında tüm bilgileri toplamaya hak kazanır unutmayın.";
$pgv_lang["USE_GOOGLE_ANALYTICS_help"]		= "~#pgv_lang[USE_GOOGLE_ANALYTICS]#~<br /><br />#pgv_lang[google_analytics]# hizmeti ile sitenizin etkinliği izlemeyi etkinleştirmek için #pgv_lang[yes]# seçin.  Bu seçeneği etkinleştirmek için önce bu servise abone olmanız gerekir.";
$pgv_lang["PGV_GOOGLE_ANALYTICS_help"]		= "~#pgv_lang[PGV_GOOGLE_ANALYTICS]#~<br /><br />Sitenize atanan #pgv_lang[google_analytics]# hizmet abone hesap numarasıgirin. Bu hesap numarası <b>UA-xxxxxx-x</b> biçimindedir.";
$pgv_lang["piwik_analytics_help"]			= "~#pgv_lang[piwik_analytics]#~<br /><br />#pgv_lang[piwik_analytics]# açık-kaynak projesi <a href='http://piwik.org/' target='_blank' title='Piwik official web site'>burada</a> tanımlanmıştır.<br /><br />Piwik bir alternatif olarak #pgv_lang[google_analytics]# gizlilik endişelerini ortadan kaldırır.  Böylece toplanmış olan faaliyet verileri üzerinde tam kontrole sahip sağlanması, kendi web sunucunuzu veya kendi etki alanında Piwik uygulamayı yükleyebilir.";
$pgv_lang["USE_PIWIK_ANALYTICS_help"]		= "~#pgv_lang[USE_PIWIK_ANALYTICS]#~<br /><br />Etkinlik sitenizde #pgv_lang[piwik_analytics]# sunucusu tarafından izlenmesini sağlamak için #pgv_lang[yes]# seçin. PhpGedView sitenizi Piwik sunucusunda kaydettirilmesi gerekir.";
$pgv_lang["PGV_PIWIK_URL_help"]				= "~#pgv_lang[PGV_PIWIK_URL]#~<br /><br />PhpGedView sitede kayıtlı bir Piwik sunucusu URL'sini girin.";
$pgv_lang["PGV_PIWIK_SITE_help"]			= "~#pgv_lang[PGV_PIWIK_SITE]#~<br /><br />Piwik sunucusunca PhpGedView sitenize atanmış sayısal site ID girin.";
$pgv_lang["clustrmaps_analytics_help"]		= "~#pgv_lang[clustrmaps_analytics]#~<br /><br />ClustrMaps birleştirilmiş bir hit sayaç, ziyaretçi izleyici ve coğrafi görselleştirme aracı.<br /><br />Her sayfa ClustrMaps tarafından oluşturulan küçük bir harita görüntüsü içerir. Bu görüntü yükleri, ClustrMaps sitesindeki bir sayaç artırılır.  Tüm ziyaretçiler için görünür olan harita, (günlük, haftalık veya aylık trafik bağlı) güncelleştirildiğinde belirli bir zaman aralığıyla başından beri tüm ziyaretçi konumları gösterir.<br /><br />Bu küçük harita görüntüsü üzerinde tıklayarak, #pgv_lang[clustrmaps_analytics]# hizmeti için ödenen varsa daha büyük bir dünya haritası ekran ortaya koymaktadır.<br /><br />Daha fazla kullanılabilir detaylar <a href='http://www.clustrmaps.com/' target='_blank' title='ClustrMaps site'>ClustrMaps site</a> de mevcut.";
$pgv_lang["USE_CLUSTRMAPS_ANALYTICS_help"]	= "~#pgv_lang[USE_CLUSTRMAPS_ANALYTICS]#~<br /><br />#pgv_lang[clustrmaps_analytics]# sunucu tarafından sitenizde faaliyet izlemeyi etkinleştirmek için <b>#pgv_lang[yes]#</b> seçin.";
$pgv_lang["PGV_CLUSTRMAPS_SITE_help"]		= "~#pgv_lang[PGV_CLUSTRMAPS_SITE]#~<br /><br />PhpGedView sitenin URL'sini girin.  Bu değer, sizin için doldurulmuş ve normalde onu değiştirmek gerek olmazdı.";
$pgv_lang["PGV_CLUSTRMAPS_SERVER_help"]		= "~#pgv_lang[PGV_CLUSTRMAPS_SERVER]#~<br /><br />Hesabınız aktive edildiğinde #pgv_lang[clustrmaps_analytics]# servisi tarafından atanan sunucu numarasını girin.";

$pgv_lang["SHOW_SOURCES"]		= "Kaynakları göster";

//-- CONFIGURE FILE MESSAGES
$pgv_lang["gedcom_conf"]		= "GEDCOM Temelleri";
$pgv_lang["media_conf"]			= "Multimedya";
$pgv_lang["media_general_conf"]	= "Genel";
$pgv_lang["media_firewall_conf"]	= "Medya Güvenlik Duvarı";
$pgv_lang["accpriv_conf"]		= "Mahremiyet ve Erişim";
$pgv_lang["displ_conf"]			= "Gösterme ve Yerleşim Düzeni";
$pgv_lang["displ_names_conf"]		= "Adlar";
$pgv_lang["displ_comsurn_conf"]		= "Ortak Soyadılar";
$pgv_lang["displ_layout_conf"]		= "Yerleşim Düzeni";
$pgv_lang["displ_hide_conf"]		= "Göster ve Gizle";
$pgv_lang["editopt_conf"]		= "Düzenleme Seçenekleri";
$pgv_lang["useropt_conf"]		= "Kullanıcı Seçenekleri";
$pgv_lang["contact_conf"]		= "İletişim Bilgileri";
$pgv_lang["meta_conf"]			= "Web Sitesi ve META Etiket Ayarları";
$pgv_lang["gedconf_head"]		= "GEDCOM Yapılandırma";
$pgv_lang["other_theme"]		= "Diğer, lütfen yazın";
$pgv_lang["performing_update"]		= "Güncelleme yapılıyor.";
$pgv_lang["config_file_read"]		= "Config dosya oku.";
$pgv_lang["does_not_exist"]		= "mevcut değil";
$pgv_lang["media_drive_letter"]		= "Medya yolu bir sürücü harfi içermemeli; medya görüntülenmeyebilir.";
$pgv_lang["db_setup_bad"]		= "Geçerli veritabanı yapılandırmanız kötü. Lütfen veritabanı bağlantı parametreleri kontrol edin ve tekrar yapılandırın.";
$pgv_lang["db"]				= "Veritabanı";

$pgv_lang["current_gedcoms"]		= "Geçerli GEDCOMlar";
$pgv_lang["ged_gedcom"]			= "GEDCOM dosyası";
$pgv_lang["ged_title"]			= "GEDCOM başlığı";
$pgv_lang["ged_config"]			= "Yapılandırma dosyası";
$pgv_lang["ged_search"]			= "Arama Günlük dosyaları";
$pgv_lang["ged_privacy"]		= "Mahremiyet dosyası";
$pgv_lang["disabled"]			= "Devredişi";
$pgv_lang["mouseover"]			= "Fare Üzerinde İken";
$pgv_lang["mousedown"]			= "Fare Tıklanırken";
$pgv_lang["click"]			= "Fare Tıklandığında";
$pgv_lang["enter_db_pass"]		= "Güvenlik için herhangi bir yapılandırma değerlerini değiştirirken her zaman #pgv_lang[DBUSER]# ve #pgv_lang[DBPASS]# girmelisiniz.";
$pgv_lang["server_url_note"]		= "Bu URL PhpGedView bulunduğu dizinin URL adresinizdir. Eğer ne yaptığınızı bilmiyorsanız bu ayarı değiştirmemeniz gerekir. PhpGedView bu değeri böyle belirledi <b>#GUESS_URL#</b>";
$pgv_lang["DBTYPE"]			= "Varitabanı Tipi";
$pgv_lang["DBHOST"]			= "Veritabanı Sunucu";
$pgv_lang["DBUSER"]			= "Veritabanı Kullanıcı adı";
$pgv_lang["ged_change"]			= "Değişiklik Günlük Dosyalar";

$pgv_lang["DBPASS"]			= "Veritabanı Şifre";
$pgv_lang["DBNAME"]			= "Veritabanın Adı";
$pgv_lang["upload_path"]			= "Yükleme yolu";
$pgv_lang["gedcom_path"]			= "GEDCOM sunucu yolu ve Adı";
$pgv_lang["CHARACTER_SET"]		= "Karakter Seti kodlaması";
$pgv_lang["LANGUAGE"]			= "Lisan";
$pgv_lang["ENABLE_MULTI_LANGUAGE"]	= "Kullanıcı lisan değiştirme izni";
$pgv_lang["CALENDAR_FORMAT"]		= "Takvim biçimi";
$pgv_lang["DISPLAY_JEWISH_THOUSANDS"]	= "İbrani Binleri Göster";
$pgv_lang["DISPLAY_JEWISH_GERESHAYIM"]		= "İbrani Gershayim Göster";
$pgv_lang["JEWISH_ASHKENAZ_PRONUNCIATION"]	= "Yahudi Ashkenaz Telaffuzu";
$pgv_lang["DEFAULT_PEDIGREE_GENERATIONS"]	= "Soyağacı nesilleri";
$pgv_lang["DEFAULT_PEDIGREE_GENERATIONS_help"]	= "~#pgv_lang[DEFAULT_PEDIGREE_GENERATIONS]#~<br /><br />Seçere Çizelgesinde göstermek için nesillerin varsayılan sayıyı girin.<br />";
$pgv_lang["MAX_PEDIGREE_GENERATIONS"]		= "En fazla Soyağacı nesilleri";
$pgv_lang["MAX_PEDIGREE_GENERATIONS_help"]	= "~#pgv_lang[MAX_PEDIGREE_GENERATIONS]#~<br /><br />Seçere Çizelgesinde göstermek için nesillerin en fazla sayıyı girin.<br />";
$pgv_lang["MAX_DESCENDANCY_GENERATIONS"]	= "En fazla Şahsi izleyen nesiller";
$pgv_lang["MAX_DESCENDANCY_GENERATIONS_help"]	= "~#pgv_lang[MAX_DESCENDANCY_GENERATIONS]#~<br /><br />Şahsı izleyen nesiller Çizelgesinde göstermek için nesillerin en fazla sayıyı girin.<br />";
$pgv_lang["USE_RIN"]			= "GEDCOM ID yerine RIN numara kullan";
$pgv_lang["GENERATE_GUID"]		= "Genel benzersiz IDleri otomatikman oluştur";
$pgv_lang["PEDIGREE_ROOT_ID"]		= "Soyağacı ve Şahsi izleyen çizelgeler için varsayılan kişi";
$pgv_lang["PEDIGREE_ROOT_ID_help"]	= "~#pgv_lang[PEDIGREE_ROOT_ID]#~<br /><br />Soyağacı ve şahsı izleyen nesiller Çizgelerinde göstermek için vaysayılan kişinin ID bilgisini girin.<br />";
$pgv_lang["GEDCOM_ID_PREFIX"]		= "Birey ID öneki";
$pgv_lang["SOURCE_ID_PREFIX"]		= "Kaynak ID öneki";
$pgv_lang["REPO_ID_PREFIX"]		= "Havuz ID öneki";
$pgv_lang["PEDIGREE_FULL_DETAILS"]	= "Doğum ve Ölüm detayları çizelgelerde göster";
$pgv_lang["PEDIGREE_LAYOUT"]		= "Varsayılan Soyağacı çizelge yerleşimi";
$pgv_lang["SHOW_EMPTY_BOXES"]		= "Soyağacı çizelgesinde boş kutuları göster";
$pgv_lang["ZOOM_BOXES"]			= "Çizelgelerin kutuları genişletme";
$pgv_lang["LINK_ICONS"]			= "Çizelgeler linkleri popUp";
$pgv_lang["ABBREVIATE_CHART_LABELS"]			= "Çizelge etiketleri kısalt";
$pgv_lang["SHOW_AGE_DIFF"]			= "Yaş Farklarını Göster";
$pgv_lang["SHOW_PARENTS_AGE"]			= "Ebeveynlerin yaşını çocukların doğum tarihi yanında göster";
$pgv_lang["SHOW_RELATIVES_EVENTS"]      = "Birey sayfada yakın akrabaların hadiseleri göster";
$pgv_lang["EXPAND_RELATIVES_EVENTS"]      = "Otomatikman yakın akrabaların listesini genişlet";
$pgv_lang["EXPAND_SOURCES"]      = "Otomatikman kaynakları genişlet";
$pgv_lang["EXPAND_NOTES"]      = "Otomatikman notları genişlet";
$pgv_lang["HIDE_LIVE_PEOPLE"]		= "Mahremiyeti Etkinleştir";
$pgv_lang["REQUIRE_AUTHENTICATION"]	= "Ziyaretçi denetimi kullan";
$pgv_lang["WELCOME_TEXT_AUTH_MODE"]	= "Giriş sayfasında hoş geldin mesajı";
$pgv_lang["WELCOME_TEXT_AUTH_MODE_OPT0"]	= "Önceden tanımlanmış metin yok";
$pgv_lang["WELCOME_TEXT_AUTH_MODE_OPT1"]	= "Önceden tanımlanmış tüm kullanıcılara üye olabileceğini söyleyen metin";
$pgv_lang["WELCOME_TEXT_AUTH_MODE_OPT2"]	= "Önceden tanımlanmış ziyaretçiye üye olduğunda admin onayı gerektirdiğini söyleyen metin";
$pgv_lang["WELCOME_TEXT_AUTH_MODE_OPT3"]	= "Önceden tanımlanmış sadece aile üyelerinin üyeliklerine izin verildiğin söyleyen metin";
$pgv_lang["WELCOME_TEXT_AUTH_MODE_OPT4"]	= "Aşağıda kulanıcı tanımlı hoş geldiniz yazılmış metin seçin";
$pgv_lang["WELCOME_TEXT_AUTH_MODE_CUST"]	= "Özel Hoş Geldiniz metni";
$pgv_lang["WELCOME_TEXT_AUTH_MODE_CUST_HEAD"]	= "Özel Hoş Geldiniz metin için standart başlık";
$pgv_lang["SHOW_REGISTER_CAUTION"]			= "Kaydolma sayfasında kural şartlarını göster";
$pgv_lang["CHECK_CHILD_DATES"]		= "Çocuk tarihlerini kontrol et";
$pgv_lang["MAX_ALIVE_AGE"]		= "Bir kişinin öldü sayılacağı yaş";
$pgv_lang["SHOW_GEDCOM_RECORD"]		= "Ham GEDCOM kayıtları kullanıcıların görme izni";
$pgv_lang["ALLOW_EDIT_GEDCOM"]		= "Çevrimiçi düzenlemeyi etkinleştir";
$pgv_lang["EDIT_AUTOCLOSE"]		= "Düzenleme penceresi otomatikman kapat";
$pgv_lang["POSTAL_CODE"]  = "Posta Kodu konumu";
$pgv_lang["SUBLIST_TRIGGER_I"]		= "En fazla soyadı sayısı";
$pgv_lang["SUBLIST_TRIGGER_F"]		= "En fazla aile adı";
$pgv_lang["SURNAME_LIST_STYLE"]		= "Soyadı listeme biçimi";

$pgv_lang["SHOW_LAST_CHANGE"]		= "Listede GEDCOM kaydın son değişiklik tarihi göster";
$pgv_lang["SHOW_PEDIGREE_PLACES"]	= "Kişi kutularından gösterilecek yer düzeyleri";
$pgv_lang["MULTI_MEDIA"]		= "Multimedya özellikleri etkinleştir";
$pgv_lang["MEDIA_EXTERNAL"]		= "Linkleri koru";
$pgv_lang["MEDIA_DIRECTORY"]		= "Multimedya dizini";
$pgv_lang["MEDIA_DIRECTORY_LEVELS"]	= "Multi-Medya dizin koruma seviyeleri";
$pgv_lang["USE_THUMBS_MAIN"]		= "Tırnak önizleme kullan";
$pgv_lang["SHOW_MEDIA_FILENAME"]		= "Medya Görüntüleyicide dosya adı göster";
$pgv_lang["SHOW_MEDIA_DOWNLOAD"]		= "Medya Görüntüleyicide indirme linki göster";
$pgv_lang["ENABLE_CLIPPINGS_CART"]	= "Kupürler Sepeti Etkinleştir";
$pgv_lang["HIDE_GEDCOM_ERRORS"]		= "GEDCOM hataları gizle";
$pgv_lang["WORD_WRAPPED_NOTES"]		= "Notlar sarılı olduğu yerde boşluk ekle";
$pgv_lang["SHOW_CONTEXT_HELP"]		= "İçeriksel <b>?</b> Yardım linkleri göster";
$pgv_lang["DAYS_TO_SHOW_LIMIT"]		= "Gelecek Hadiseler blokta gün kotası";
$pgv_lang["COMMON_NAMES_THRESHOLD"]	= "En çok kullanılan &quot;Ortak Soyadı&quot; için en az sayı";
$pgv_lang["COMMON_NAMES_ADD"]		= "Ortak Soyadılara eklemek için adlar (virgülle ayrılmış)";
$pgv_lang["COMMON_NAMES_REMOVE"]	= "Ortak Soyadılardan kaldırmak için adlar (virgülle ayrılmış)";
$pgv_lang["HOME_SITE_URL"]		= "Ana WebSite URL";
$pgv_lang["HOME_SITE_TEXT"]		= "Ana WebSite metin";
$pgv_lang["CONTACT_EMAIL"]		= "Soyağacı iletişim";
$pgv_lang["CONTACT_METHOD"]		= "İletişim metodu";
$pgv_lang["PHPGEDVIEW_EMAIL"]		= "PhpGedView cevaplama adresi";
$pgv_lang["WEBMASTER_EMAIL"]		= "Destek iletişim";
$pgv_lang["SUPPORT_METHOD"]		= "Destek metodu";
$pgv_lang["SHOW_FACT_ICONS"] 		= "Olgu ikonları göster";
$pgv_lang["FAVICON"]			= "Favoriler ikonu";
$pgv_lang["THEME_DIR"]			= "Tema dizini";
$pgv_lang["TIME_LIMIT"]			= "PHP zaman kotası";
$pgv_lang["LOGIN_URL"]			= "Giriş URL";
$pgv_lang["SHOW_STATS"]			= "Yürütme istatistiklerini göster";
$pgv_lang["SHOW_COUNTER"]		= "Sayaçları göster";
$pgv_lang["LOGFILE_CREATE"]		= "Arşiv günlük dosyaları";
$pgv_lang["ALLOW_THEME_DROPDOWN"]	= "Tema değiştirmek için açılır menü seçicide göster";
$pgv_lang["MAX_VIEW_RATE"]		= "En fazla sayfa görüntüleme oranı";
$pgv_lang["META_AUTHOR"]		= "Yazar META etiketi";
$pgv_lang["META_PUBLISHER"]		= "Yayıncı META tag";
$pgv_lang["META_COPYRIGHT"]		= "Telif hakkı META tag";
$pgv_lang["META_DESCRIPTION"]		= "Açıklama META etiketi";
$pgv_lang["META_DESCRIPTION_descr"]	= "Geçerli aktif veritabanının başlığını kullanmak için burayı boş geçin.";
$pgv_lang["META_PAGE_TOPIC"]		= "Sayfa-konu META etiketi";
$pgv_lang["META_PAGE_TOPIC_descr"]	= "Geçerli aktif veritabanının başlığını kullanmak için burayı boş geçin.";
$pgv_lang["META_AUDIENCE"]		= "İzleyici META etiketi";
$pgv_lang["META_PAGE_TYPE"]		= "Sayfa-tipi META etiketi";
$pgv_lang["META_ROBOTS"]		= "Robotlar META etiketi";
$pgv_lang["META_KEYWORDS"]		= "Anahtar kelimeler META etiketi";
$pgv_lang["META_PAGE_TOPIC_descr"]	= "Şu anki aktif veritabanının başlığını kullanmak için burayı boş geçin.";
$pgv_lang["META_TITLE"]		= "TITLE header etiketine site başlığı ekle";
$pgv_lang["ENABLE_RSS"]				= "RSS Etkinleştir";
$pgv_lang["RSS_FORMAT"]				= "RSS Biçimi";
$pgv_lang["SECURITY_CHECK_GEDCOM_DOWNLOADABLE"] = "GEDCOM dosyaları indirilebilir olup olmadığını kontrol edin";
$pgv_lang["gedcom_download_secure"]	= "#GEDCOM# indirilemez.";
$pgv_lang["return_editconfig"]		= "Bu yapılandırma sayfasına her zaman tarayıcınızda <b>editconfig.php</b> dosyasını açarak ya da <b>Yönetim</b> sayfasındaki <b>Genel ayarlar</b> bağlantısını tıklayarak geri dönebilirsiniz.<br />";
$pgv_lang["return_editconfig_gedcom"]	= "Bu yapılandırma sayfasına her zaman tarayıcınızda <b>editconfig_gedcom.php</b> dosyasını açarak ya da <b>Yönetim</b> sayfasındaki <b>GEDCOM - Veritabanı ayarları</b> bağlantısını tıklayarak açılan <b>Aktüel GEDCOM veritabanları</b> sayfasında ayarlamak istediğiniz GEDCOM Veritabanı yanındaki <b>Düzenle</b> bağlantısına tıklayarak geri dönebilirsiniz.<br />";
$pgv_lang["save_config"]		= "Yapılandırmayı kaydet";
$pgv_lang["download_gedconf"]		= "GEDCOM yapılandırmayı indir.";
$pgv_lang["not_writable"]		= "Konfigürasyon (confing.php) dosyanız PHP ile yazılabilir değildir. Konfigürasyon dosyanızı <b>#pgv_lang[download_file]#</b> duğmesini tıklayarak dosyayı indirin FTP ile serverinize yükleyiniz. Yada confing.php dosyanın CHMOD izni 777 yapın.";
$pgv_lang["upload_to_index"]		= "İndex dizinize dosyayı yükle: ";

//-- edit privacy messages
$pgv_lang["edit_privacy"]		= "Mahremiyet Düzenle";
$pgv_lang["edit_privacy_title"]		= "GEDCOM mahremiyet ayarları düzenle";
$pgv_lang["save_changed_settings"]	= "Değişiklikleri kaydet";
$pgv_lang["add_new_pp_setting"]		= "ID yoluyla Mahremiyet için yeni ayar ekle";
$pgv_lang["add_new_up_setting"]		= "Kullanıcı Mahremiyeti için yeni ayar ekle";
$pgv_lang["add_new_gf_setting"]		= "Genel Olgu Mahremiyeti için yeni ayar ekle";
$pgv_lang["add_new_pf_setting"]		= "ID yoluyla Mahremiyet Olguları için yeni ayar ekle";
$pgv_lang["file_read_error"]		= "H A T A !!! Mahremiyet dosya okunamadı!";
$pgv_lang["edit_exist_person_privacy_settings"]	= "ID yoluyla Mahremiyet için mevcut ayarları düzenle";
$pgv_lang["edit_exist_user_privacy_settings"]	= "Kullanıcı Mahremiyeti için mevcut ayarları düzenle";
$pgv_lang["edit_exist_global_facts_settings"]	= "Genel Olgu Mahremiyeti için mevcut ayarları düzenle";
$pgv_lang["edit_exist_person_facts_settings"]	= "ID yoluyla Mahremiyet Olguları için mevcut ayarları düzenle";
$pgv_lang["general_privacy"]			= "Genel Mahremiyet Ayarları";
$pgv_lang["person_privacy"]				= "ID yoluyla Mahremiyet ayarları";
$pgv_lang["user_privacy"]				= "Kullanıcı Mahremiyet Ayarları";
$pgv_lang["global_facts"]				= "Genel Olgu Mahremyet ayarları";
$pgv_lang["person_facts"]				= "ID yoluyla Olgular Mahremiyet ayarları";
$pgv_lang["accessible_by"]		= "Kime gösterilsin?";
$pgv_lang["hide"]			= "Gizli";
$pgv_lang["show_question"]		= "Göster?";
$pgv_lang["user_name"]			= "Kullanıcı adı";
$pgv_lang["name_of_fact"]		= "Olgunun adı";
$pgv_lang["choice"]			= "Seç";
$pgv_lang["fact_show"]			= "Olguyu göster";
$pgv_lang["fact_details"]		= "Olgu detayları göster";
$pgv_lang["privacy_header"]		= "Mahremiyet ayarları düzenle";
$pgv_lang["unable_to_find_privacy_indi"]	= "ID ile birey bulunamıyor";
$pgv_lang["SHOW_LIVING_NAMES"]		= "Yaşayan adları göster";
$pgv_lang["SHOW_RESEARCH_ASSISTANT"]			= "Araştırma Asistanı Göster";
$pgv_lang["USE_RELATIONSHIP_PRIVACY"]	= "Akrabalık mahremiyetini kullan";
$pgv_lang["MAX_RELATION_PATH_LENGTH"]	= "En fazla akrabalık uzaklığı";
$pgv_lang["CHECK_MARRIAGE_RELATIONS"]	= "Akraba evliliği kontrol et";
$pgv_lang["SHOW_DEAD_PEOPLE"]		= "Ölü kişiyi göster";
$pgv_lang["SHOW_DEAD_PEOPLE_help"]		= "~#pgv_lang[SHOW_DEAD_PEOPLE]#~<br /><br />Tüm ölü kişiler için gizlilik erişim düzeyi kur.<br />";
$pgv_lang["help_info"]			= "Her nesne üzerine kırmızı &quot;?&quot; (soru işaretlerine) tıklayıp yardım elde edebilirsiniz.<br />";
$pgv_lang["select_privacyfile_button"]	= "Mahremiyet dosyayı seç";
$pgv_lang["PRIVACY_BY_YEAR"]		= "Hadiseyi yaş yoluyla Mahremiyeti kısıtla";

//-- language edit utility
$pgv_lang["edit_langdiff"]		= "Lisan dosyaları yapılandır ve düzenle";
$pgv_lang["bom_check"]			= "Lisan dosyalarında (BOM) denetle";
$pgv_lang["lang_debug"]			= "Yardım Metinde Hata Ayıklama Seçeneği";
$pgv_lang["lang_debug_use"]		= "Yardım metni hata giderme seçeneği kullan";
$pgv_lang["bom_not_found"]		= "Hiçbir BOM bulunamadı.";
$pgv_lang["bom_found"]			= "İçinde BOM bulundu ";
$pgv_lang["edit_lang_utility"]		= "Lisan Dosyası Düzenleme Programı";
$pgv_lang["language_to_edit"]		= "Düzenlenecek lisan";
$pgv_lang["file_to_edit"]		= "Düzenlenecek lisan dosya tipi";
$pgv_lang["check"]			= "Kontrol Et";
$pgv_lang["lang_save"]			= "Kaydet";
$pgv_lang["contents"]			= "İçerikler";
$pgv_lang["listing"]			= "Listelenen";
$pgv_lang["no_content"]			= "İçerik Yok";
$pgv_lang["editlang"]			= "Düzenle";
$pgv_lang["editlang_help"]		= "~#pgv_lang[editlang]#~<br /><br />Lisan dosyasından mesajı düzenle.<br />";
$pgv_lang["savelang"]			= "Kaydet";
$pgv_lang["savelang_help"]		= "~#pgv_lang[savelang]#~<br /><br />Lisan dosyanın düzenlenen mesajı kaydet.<br />";
$pgv_lang["original_message"]		= "Orjinal mesaj";
$pgv_lang["message_to_edit"]		= "Düzenlenecek mesaj";
$pgv_lang["changed_message"]		= "Değiştirmiş içerik";
$pgv_lang["message_empty_warning"]	= "-> Uyarı!!! Bu mesaj #LANGUAGE_FILE# içinde boş &lt;-";
$pgv_lang["language_to_export"]		= "Dışarı aktarılacak lisan";
$pgv_lang["export_lang_utility"]	= "Lisan Dosyası Dışarı Aktarma Programı";
$pgv_lang["export"]			= "Dışarı Aktar";
$pgv_lang["export_ok"]			= "Yardım mesajları dışarı aktarıldı";
$pgv_lang["compare_lang_utility"]	= "Lisan Dosyası Karılaştırma Programı";
$pgv_lang["new_language"]		= "Kaynak lisanı";
$pgv_lang["old_language"]		= "İkinci lisan";
$pgv_lang["compare"]			= "Karşılaştır";
$pgv_lang["comparing"]			= "Karşılaştırılan lisan dosyaları";
$pgv_lang["additions"]			= "Son Eklenenler";
$pgv_lang["no_additions"]		= "Son Eklenenler Yok";
$pgv_lang["subtractions"]		= "Çıkarılanlar";
$pgv_lang["no_subtractions"]		= "Çıkarılanlar Yok";
$pgv_lang["config_lang_utility"]	= "Desteklenen lisanları yapılandırma";
$pgv_lang["active"]			= "Aktif";
$pgv_lang["edit_settings"]		= "Ayarları düzenle";
$pgv_lang["lang_edit"]			= "Düzenle";
$pgv_lang["lang_language"]		= "Lisan";
$pgv_lang["export_filename"]		= "Çıktı dosyası adı:";
$pgv_lang["lang_back"]			= "Düzenleme ve lisan dosyalarını yapılandırmak için ana menüye dön";
$pgv_lang["lang_back_admin"]		= "Yönetici menüye dön";
$pgv_lang["lang_back_manage_gedcoms"]	= "GEDCOM yönetim menüye dön";
$pgv_lang["lang_name_czech"]		= "Çekçe";
$pgv_lang["lang_name_chinese"]		= "Çince";
$pgv_lang["lang_name_danish"]		= "Danca";
$pgv_lang["lang_name_dutch"]		= "Hollandaca";
$pgv_lang["lang_name_english"]		= "İngilizce";
$pgv_lang["lang_name_finnish"]		= "Fince";
$pgv_lang["lang_name_french"]		= "Fransızca";
$pgv_lang["lang_name_german"]		= "Almanca";
$pgv_lang["lang_name_hebrew"]		= "İbranice";
$pgv_lang["lang_name_hungarian"]	= "Macarca";
$pgv_lang["lang_name_italian"]		= "İtalyanca";
$pgv_lang["lang_name_norwegian"]	= "Norveççe";
$pgv_lang["lang_name_polish"]		= "Lehçe";
$pgv_lang["lang_name_portuguese"]	= "Portekizce";

$pgv_lang["lang_name_russian"]		= "Rusça";
$pgv_lang["lang_name_spanish"]		= "İspanyolca";
$pgv_lang["lang_name_spanish-ar"]	= "İspanyolca (Latin Amerika)";
$pgv_lang["add_new_lang_button"]	= "Yeni lisan ekle";
$pgv_lang["hide_translated"]		= "Tercümelileri gizle";
$pgv_lang["lang_file_write_error"]	= "H A T A !!! <br /><br />	Değişiklikler seçili lisan dosyasına yazılamadı. Lütfen <b>#lang_filename#</b> dosyanın yazma izinlerini kontrol edin.";
$pgv_lang["no_open"]			= "H A T A !!!<br /><br />Dosya <b>#lang_filename#</b> açılamadı";
$pgv_lang["users_langs"]			= "Kullanıcıların lisanı";
$pgv_lang["configured_languages"]	= "Lisanları kullan";
$pgv_lang["lang_name_swedish"]		= "İsveççe";
$pgv_lang["lang_name_turkish"]		= "Türkçe";
$pgv_lang["lang_name_greek"]		= "Yunanca";
$pgv_lang["lang_name_arabic"]		= "Arapça";
$pgv_lang["lang_name_vietnamese"]	= "Vietnam dili";
$pgv_lang["lang_name_slovak"]		= "Slovak";
$pgv_lang["lang_name_estonian"]		= "Estonya";
$pgv_lang["lang_new_language"]		= "Yeni Lisan";
$pgv_lang["original_lang_name"]		= "#D_LANGNAME# lisanın orijinal adı";
$pgv_lang["lang_shortcut"]		= "Lisan dosyası için kısıtlama";
$pgv_lang["lang_langcode"]		= "Lisan algılama kodları";
$pgv_lang["lang_filenames"]		= "Lisan dosyaları";
$pgv_lang["flagsfile"]			= "Bayrak dosya";
$pgv_lang["flagsfile_help"]		= "";
$pgv_lang["text_direction"]		= "Metin yönü";
$pgv_lang["date_format"]		= "Tarih biçimi";
$pgv_lang["time_format"]		= "Saat biçimi";
$pgv_lang["week_start"]			= "Haftanın ilk günü";
$pgv_lang["name_reverse"]		= "Önce soyadı";
$pgv_lang["ltr"]			= "Soldan sağa";
$pgv_lang["rtl"]			= "Sağdan sola";
$pgv_lang["file_does_not_exist"]	= "HATA! Bu dosya mevcut değil...";
$pgv_lang["optional_file_not_exist"]	= "Bu isteğe bağlı dosya mevcut değil.";
$pgv_lang["alphabet_upper"]		= "Büyük harf alfabe";
$pgv_lang["alphabet_lower"]		= "Küçük harf alfabe";
$pgv_lang["multi_letter_alphabet"]		= "Çoklu-harf alfabe";
$pgv_lang["dictionary_sort"]		= "Sıralama yaparken sözlük kuralları kullan";
$pgv_lang["lang_config_write_error"]	= "Lisan ayarları dosyası <b>lang_settings.php</b> yazılırken bir hata oluştu. Lütfen izinleri kontrol edin ve yeniden deneyin.";
$pgv_lang["translation_forum"]		= "SourceForge forumunda PhpGedView tercümeleri";
$pgv_lang["lang_set_file_read_error"]	= "H A T A !!! <b>lang_settings.php</b> okunamadı !";

//-- User Migration Tool messages
$pgv_lang["um_header"]			= "Kullanıcı bilgileri Kaydırma aracı";
$pgv_lang["um_proceed"] = "Bir seçeneği seçin veya Yönetim menüye dönmek için aşağıdaki linke tıklayınız<br />";
$pgv_lang["um_creating"] = "Oluşturuluyor";
$pgv_lang["um_sql_index"] = "Bu araç <i>authenticate.php</i> oluşturacak ve çeşitli <i>.dat</i> dosyalarla beraber sunucunuzdaki index klasörüne dosyalayacaktır.<br /><br /><br /><br />Tüm geçerli kullanıcılar, mesajlar, favoriler, haberler ve Benim Soyağacı Görüntüleme yerleşimi başarılı biçimde oluşturulduktan sonra buradan çalışacaktır.<br /><br /><br /><br />Not: İndex moduna geçtikten sonra tekrar veritabanına geçmek için GEDCOM dosyları içeri aktarmalısınız.<br /><br />";
$pgv_lang["um_file_create_fail1"] = "Yeni dosya oluşturma başarısız oldu, bu isimde bir dosya zaten var:";
$pgv_lang["um_file_create_fail2"] = "Oluşturulamıyor";
$pgv_lang["um_file_create_fail3"] = "Bu dizine erişim haklarını kontrol edin.";
$pgv_lang["um_file_create_succ1"] = "Yeni dosya başarıyla oluşturuldu:";
$pgv_lang["um_file_not_created"]	= "Dosya oluşturulmaz.";
$pgv_lang["um_nomsg"] = "Sistemde mevcut görüntülenecek Mesaj yok.";
$pgv_lang["um_nofav"] = "Sistemde mevcut görüntülenecek Favoriler yok.";
$pgv_lang["um_nonews"] = "Sistemde mevcut görüntülenecek Haber yok.";
$pgv_lang["um_noblocks"] = "Sistemde mevcut görüntülenecek Blok yok.";
$pgv_lang["um_index_sql"] = "Bu araç index klasörünüzdeki <i>authenticate.php</i> ve diğer <i>.dat</i> dosyaları veritabanınıza aktaracaktır.<br />";
$pgv_lang["um_import"] = "İçeri Aktar";
$pgv_lang["um_export"] = "Dışarı Aktar";
$pgv_lang["um_explain"] = "Bu araç dışarı aktarım için SQL den index klasörüne kaydıracak veya içeri aktarım için index klasöründen SQL tablolarına kaydıracaktır.<br /><br /> Kullanıcı bilgileri, Favoriler, Blok belirlemeleri, Mesajlar ve haberleri kaydırıldıktan sonra tekrar mevcut olacaklar.<br /><br /><b>UYARI</b><br />Bu araç farklı PhpGedView versiyonları arasında kullanıcı bilgilerini kaydırmak için kullanamazsınız.  Verinin orijinal olduğundan emin olun yada PhpGedViewnin aynı versiyonu olduğundan emin olun.<br /><br /><b>İÇERİ ALMAK</b><br />Kullanıcı bilgileri içeri aktarma seçerseniz index içindeki kullanıcı bilgileri içeren dosyadan tümü veritabanındaki mevcut <u>kullanıcı bilgilerinin üzerine yazılacaktır</u>. Bu araç <u>bilgileri birleştirmez</u>.  İçeri aktarımı yaptıktan sonra PhpGedViewde olan eski bilgileri geri almak için hiç bir yol yok ve <u>geri almak mümkün değildir</u>.<br /><br /><b>DIŞARI VERMEK</b><br />Kullanıcı bilgilerini Dışarı Aktar seçeneğini seçerseniz SQL veritabanınızdaki tüm kullanıcı bilgileri index klasörüne <i>authenticate.php</i> ve <i>.dat</i> dosyalar oluşturularak aktarılacaktır. Eğer index klasöründe aynı dosyalar mevcut ise bir yada birkaç dosya mevcutur onların üstüne yazmak istiyormusunuz diye sizi uyaracaktır. Dışarı Aktar butonuna bastıktan sonra tüm dosyalar index klasöründe mevcut olacaklardır.<br /><br /><b>Not:</b> İndex modu kapattıktan sonra GEDCOM dosyanızı tekrar içeri aktarma ihtiyaç duyacaksınız.( After switching to Index mode, you will need to import your GEDCOM files again.)<br />";
$pgv_lang["um_imp_users"] = "Kullanıcılar içeri aktarılıyor";
$pgv_lang["um_imp_blocks"] = "Bloklar içeri aktarılıyor";
$pgv_lang["um_imp_favorites"] = "Favoriler içeri aktarılıyor";
$pgv_lang["um_imp_messages"] = "Mesajlar içeri aktarılıyor";
$pgv_lang["um_imp_news"] = "Haberler içeri aktarılıyor";
$pgv_lang["um_nousers"] = "<i>authenticate.php</i> dosya index klasörünüzde bulunamadı. Kaydırma iptal edildi.";
$pgv_lang["um_imp_succ"] = "İçeri aktarma başarılı";
$pgv_lang["um_imp_fail"] = "İçeri atarma başarısız";
$pgv_lang["um_backup"]			= "Yedekle";
$pgv_lang["um_zip_succ"] = "ZIP dosyası başarıyla oluşturuldu.";
$pgv_lang["um_zip_dl"] = "ZIPlenen yedek dosyası indir ";
$pgv_lang["um_bu_explain"] = "Bu araç PhpGedViewdeki bir çok veri çeşitlerini yedekleyebilir bu yedek indirmenize izin verir.<br /><br />Bu verileri yedekleyip ZIP dosya olarak indirmek için yedeklemek istediğiniz bilgileri aşağıdaki seçim kutularında seçmelisiniz seçimlerinizi yaptıktan sonra aşağıdaki Yedeklemeyi yap düğmesine basınız.<br /><br />Bu oluşturulacak ZIP dosyası index dızınde siz elle silene kadar kalacaktır.<br />";
$pgv_lang["um_bu_config"]		= "PhpGedView Yapılandırma Dosyası";
$pgv_lang["um_bu_gedcoms"]		= "GEDCOM Dosyaları";
$pgv_lang["um_bu_gedsets"]		= "GEDCOM Ayarları, Yapılandırma ve Mahremiyet dosyaları";
$pgv_lang["um_bu_logs"]			= "GEDCOM Arama Günlükleri ve PhpGedView Günlük dosyaları";
$pgv_lang["um_bu_usinfo"] = "Kullanıcı tanımları, Blok ayarları, Favoriler, Mesajlar, Haberler";
$pgv_lang["um_bu_media"]	= "Medya dosyaları";
$pgv_lang["um_mk_bu"]			= "Yedekle";
$pgv_lang["um_nofiles"]			= "Yedeklemek için dosyalar bulunamadı.";
$pgv_lang["um_files_exist"]		= "Bir veya daha fazla dosya zaten mevcut. Bunların üzerine yazmak istiyor musunuz?";
$pgv_lang["um_results"]		= "Sonuçlar";
$pgv_lang["preview_faq_item"] = "Tüm SSS öğeleri önizleme";
$pgv_lang["restore_faq_edits"] = "SSS düzenleme işlevselliği geri yükle";
$pgv_lang["add_faq_item"] = "SSS öğe ekle";
$pgv_lang["edit_faq_item"] = "SSS öğe düzenle";
$pgv_lang["delete_faq_item"] = "SSS öğeyi sil";
$pgv_lang["moveup_faq_item"] = "SSS öğeyi yukları taşı";
$pgv_lang["movedown_faq_item"] = "SSS öğeyi aşağı taşı";
$pgv_lang["ged_filter_results"] = "Bulunan sonuçlar";
$pgv_lang["ged_filter_reset"] = "Açık Ara";
$pgv_lang["ged_filter_description"] = "Arama metin seçeneği";
$pgv_lang["SHOW_SOURCES"]		= "Kaynakları göster";
$pgv_lang["SPLIT_PLACES"]		= "Düzenleme modunda bölünmüş yerler";
$pgv_lang["UNDERLINE_NAME_QUOTES"]	= "Tırnak içinde lakabı adının altını çiz";
$pgv_lang["PRIVACY_BY_RESN"]		= "GEDCOM (RESN) Mahremiyet kısıtlama kullan";
$pgv_lang["SHOW_LDS_AT_GLANCE"]		= "Çizelge kutularından SZA buyruğu kodu göster";
$pgv_lang["GEDCOM_DEFAULT_TAB"]		= "Birey sayfasında göstermek için varsayılan sekme";
$pgv_lang["SHOW_MARRIED_NAMES"]		= "Birey listede evli adları göster";
$pgv_lang["SHOW_QUICK_RESN"]		= "#pgv_lang[quick_update_title]# formda mahremiyet alanları göster";
$pgv_lang["USE_QUICK_UPDATE"]		= "#pgv_lang[quick_update_title]# form kullan";
$pgv_lang["SEARCHLOG_CREATE"]		= "Arama Günlük Dosyayı Arşivle";
$pgv_lang["CHANGELOG_CREATE"]		= "Değişiklik Günlük Dosyayı Arşivle";
$pgv_lang["CHART_BOX_TAGS"]		= "Çizelgede gösterilecek diğer olgular";

$pgv_lang["FAM_ID_PREFIX"]		= "Aile ID öneki";
$pgv_lang["QUICK_REQUIRED_FAMFACTS"]			= "Aileler için olgular her zaman Hızlı Güncellemede göster";
$pgv_lang["QUICK_ADD_FAMFACTS"]			= "Hızlı Güncellemede göstermek için aile olguları";
$pgv_lang["QUICK_REQUIRED_FACTS"]			= "Hızlı Güncellemede her zaman olguları göster";
$pgv_lang["QUICK_ADD_FACTS"]			= "Hızlı Güncellemede olguları göster";
$pgv_lang["AUTO_GENERATE_THUMBS"]			= "Otomatikman üretilen tırnak önizlemeleri";
$pgv_lang["THUMBNAIL_WIDTH"]			= "Üretilen tırnak önizlemelerin genişliği";
$pgv_lang["MEDIA_ID_PREFIX"]		= "Medya ID öneki";
$pgv_lang["INDI_FACTS_ADD"] 			= "Birey Olgular Ekle";
$pgv_lang["INDI_FACTS_UNIQUE"] 			= "Benzersiz Birey Olgular";
$pgv_lang["INDI_FACTS_QUICK"] 			= "Hızlı Birey Olgular";
$pgv_lang["FAM_FACTS_ADD"] 			= "Aile Olguları Ekle";
$pgv_lang["FAM_FACTS_UNIQUE"] 			= "Benzersiz Aile Olguları";
$pgv_lang["FAM_FACTS_QUICK"] 			= "Hızlı Aile Olguları";
$pgv_lang["SOUR_FACTS_ADD"] 			= "Kaynak Olguları Ekle";
$pgv_lang["SOUR_FACTS_UNIQUE"] 			= "Benzersiz Kaynak Olguları";
$pgv_lang["SOUR_FACTS_QUICK"] 			= "Hızlı Kaynak Olguları";
$pgv_lang["REPO_FACTS_ADD"] 			= "Havuz Olguları Ekle";
$pgv_lang["REPO_FACTS_UNIQUE"] 			= "Benzersiz Havuz Olguları";
$pgv_lang["REPO_FACTS_QUICK"] 			= "Hızlı Havuz Olguları";
$pgv_lang["COMMIT_COMMAND"] 			= "Versiyon Kontrol Tamamlama Komutu";
$pgv_lang["SHOW_MULTISITE_SEARCH"]		= "Çoklu Site Aramayı Göster";
$pgv_lang["SHOW_NO_WATERMARK"]			= "Filigranlı olmayan resimleri kimler görüntüleyebilir?";
$pgv_lang["WATERMARK_THUMB"]			= "Tırnak önizlemelere filigranlar ekle?";
$pgv_lang["SAVE_WATERMARK_THUMB"]		= "Filigranlı tırnak önizlemeleri sunucuya depola?";
$pgv_lang["SAVE_WATERMARK_IMAGE"]		= "Filigranlı tam boyutlu resimleri sunucuya depola?";
$pgv_lang["DB_UTF8_COLLATION"]			= "UTF-8 karşılaştırma sağlamak için veritabanını kullan";
$pgv_lang["USE_MEDIA_VIEWER"]			= "Medya Görüntüleyici Kullan";
$pgv_lang["USE_MEDIA_FIREWALL"]			= "Medya Güvenlik Duvarı Kullan";
$pgv_lang["MEDIA_FIREWALL_ROOTDIR"]			= "Medya Güvenlik Duvarı Kök Dizini";
$pgv_lang["MEDIA_FIREWALL_ROOTDIR_note"]	= "Bu alan boş olduğunda <b>#GLOBALS[INDEX_DIRECTORY]#</b> dizin kullanılacak.";
$pgv_lang["MEDIA_FIREWALL_THUMBS"]			= "Korumalı resimlerin tırnak önizlemeleri koru";
$pgv_lang["SHOW_SPIDER_TAGLINE"]		= "Örümceği etiket satırında göster";
$pgv_lang["SHOW_PRIVATE_RELATIONSHIPS"]	= "Özel akrabalık bağı göster";
$pgv_lang["SYNC_GEDCOM_FILE"]			= "Düzenlemeleri GEDCOM dosya içine senkronize et";
$pgv_lang["new_gedcom_title"]		= "[#GEDCOMFILE#] dosyadan alınan soyağacı";
$pgv_lang["SHOW_LIST_PLACES"]	= "Listelerde göstermek için yer düzeyleri";
$pgv_lang["DBPORT"]			= "Veritabanı Portu";
$pgv_lang["PEDIGREE_SHOW_GENDER"]	= "Çizelgelerde cinsiyet ikonu göster";
$pgv_lang["USE_MEDIA_FIREWALL_help"]	= "~#pgv_lang[USE_MEDIA_FIREWALL]#~<br /><br />Media Firewall kullanmak hakkında açıklama için Wiki web sitesini görün. <a href=\"#PGV_PHPGEDVIEW_WIKI#/en/index.php?title=Media_Firewall\" target=\"_blank\">#PGV_PHPGEDVIEW_WIKI#</a><br />";

$pgv_lang["FULL_SOURCES"]		= "Tam kaynak alıntıları kullan";
$pgv_lang["PREFER_LEVEL2_SOURCES"]		= "Kaynak tipi";
$pgv_lang["MEDIA_FIREWALL_ROOTDIR_help"]	= "~#pgv_lang[MEDIA_FIREWALL_ROOTDIR]#~<br /><br />Korunmuş Medya dizinin içinde oluşturabileceğiniz dizin. #pgv_lang[MEDIA_FIREWALL_ROOTDIR_note]#<br />";
$pgv_lang["MEDIA_FIREWALL_THUMBS_help"]	= "~#pgv_lang[MEDIA_FIREWALL_THUMBS]#~<br /><br />Bir resim korumalı medya dizinde olduğunda bunun tırnak önizlemeside korunmalı mı?<br />";
$pgv_lang["SHOW_NO_WATERMARK_help"]		= "~#pgv_lang[SHOW_NO_WATERMARK]#~<br /><br />Eğer Medya Güvenlik Duvarı etkinleştirilirse kullanıcılar ve buradan izinler belirtilmezse filifranları görecekler.<br />";
$pgv_lang["SHOW_LEVEL2_NOTES"]      = "Notlar ve Kaynaklar sekmelerinde tüm Notların ve Kaynakların referanslarını göster";
$pgv_lang["SHOW_EST_LIST_DATES"]		= "Tahmini doğum ve ölüm tarihleri ​​göster";
$pgv_lang["USE_GEONAMES"]				= "YunanAdları veritabanı kullan";
$pgv_lang["add_faq_item_help"] = "~#pgv_lang[add_faq_item]#~<br />Bu seçenek SSS sayfasına size bölümleri eklettirecek.<br />";
$pgv_lang["delete_faq_item_help"] = "~#pgv_lang[delete_faq_item]#~<br />Bu seçenek SSS sayfasında size bölümleri sildirecek<br />";
$pgv_lang["lang_filenames_help"]		= "~#pgv_lang[lang_filenames]#~<br /><br />#pgv_lang[lang_file_descriptions]#";
$pgv_lang["edit_faq_item_help"] = "~#pgv_lang[edit_faq_item]#~<br />Bu seçenek SSS sayfasında size bölümleri düzenletecek.<br />";
$pgv_lang["um_bu_help"] = "";
$pgv_lang["more_help_advice"]			= "<br /><b>Daha çok yardım</b><br />Daha çok yardım sayfada bölümleri tıklatarak mevcutlar<b>?</b> .<br />";
$pgv_lang["bad_host_user_pass"]		= "PhpGedView veritabanı sunucuyla bağlantı kuramadı. Sunucu, kullanıcı adı, ve şifre doğru olduğundan emin olmak için kontrol ediniz.";
$pgv_lang["gedcom_title"]			= "#pgv_lang[ged_title]#";
$pgv_lang["bom_check_help"]		= "~#pgv_lang[bom_check]#~<br /><br />#pgv_lang[bom_check_desc]#<br />";
$pgv_lang["lang_debug_help"]	= "~#pgv_lang[lang_debug]#~<br /><br />#pgv_lang[lang_debug_desc]#<br />";
$pgv_lang["edit_lang_utility_help"]	= "~#pgv_lang[edit_lang_utility]#~<br /><br />#pgv_lang[edit_lang_utility_desc]#<br />";
$pgv_lang["file_to_edit_help"]			= "~#pgv_lang[file_to_edit]#~<br /><br />#pgv_lang[lang_file_descriptions]#";
$pgv_lang["export_lang_utility_help"]	= "~#pgv_lang[export_lang_utility]#~<br /><br />#pgv_lang[export_lang_utility_desc]#<br />";
$pgv_lang["compare_lang_utility_help"]	= "~#pgv_lang[compare_lang_utility]#~<br /><br />#pgv_lang[compare_lang_utility_desc]#<br />";
$pgv_lang["lang_name_indonesian"]	= "Endonezya";
$pgv_lang["lang_name_lithuanian"]	= "Litvanya";
$pgv_lang["lang_name_romanian"]		= "Romanya";
$pgv_lang["lang_name_slovenian"] = "Slovenya";
$pgv_lang["lang_name_catalan"]		= "Katalonya (Valencian)";
$pgv_lang["multi_letter_equiv"]		= "Çoklu-harf karşılıklar";
$pgv_lang["collation"]		= "Veritabanı karşılaştırma sıralama";
$pgv_lang["translation_forum_help"]	= "~#pgv_lang[translation_forum]#~<br /><br />#pgv_lang[translation_forum_desc]#<br />";
$pgv_lang["add_new_language_help"]	= "";
$pgv_lang["um_tool_help"] = "";
$pgv_lang["um_sql_index_help"] = "~Kullanıcıları SQL den Index moduna kaydır~<br /><br />#pgv_lang[um_sql_index]#";
$pgv_lang["um_index_sql_help"] = "~Kullanıcıları Index den SQL moduna kaydır~<br /><br />#pgv_lang[um_index_sql]#";
$pgv_lang["PAGE_AFTER_LOGIN"]		= "Girişten sonra gösterilecek sayfa";
$pgv_lang["SHOW_COUNTER_help"]		= "~#pgv_lang[SHOW_COUNTER]#~<br /><br />Portal ve Bireysel sayfaların hit sayaçları göster.<br />";
$pgv_lang["edit_lang_utility_warning"]	= "UYARI!<br /><br />Eğer <b>#pgv_lang[close_window_without_refresh]#</b> butonu tıklarsanız sayfayı yenilemeden yağtığınız değişikliği göremeyeceksiniz.It's possible that your language file may be destroyed if you add a message which has not yet appeared inside the language file or if you just edit a message you have edited directly before.<br /><br />Eğer ne yaptığınızı gerçekten bilmiyorsanız lütfen <b>#pgv_lang[close_window_without_refresh]#</b> butonu kullanın.";
$pgv_lang["SECURITY_CHECK_GEDCOM_DOWNLOADABLE_help"] = "~#pgv_lang[SECURITY_CHECK_GEDCOM_DOWNLOADABLE]#~<br /><br />Güvenli nedeniyle, GEDCOM dosyaları mahremiyet kontrolünü aşarak indirilebilir bir konumda olmamalıdır. Bu linki tıklatarak eğer GEDCOM dosyanız doğrudan URL adres üzerinden indirilebilir olup olmadığını kontrol edecektir.<br /><br />Bazı sistemlerde bu onay çok uzun zaman alabilir yada hata alındığı bilinmektedir. Bu durumda GEDCOM dosyanızın tam URL adresini kendiniz tarayıcınıza yazıp GEDCOM dosyanızın indirilebilir olup olmadığını görebilirsiniz.<br />";
$pgv_lang["USE_SILHOUETTE"]				= "Siluetler kullan";
$pgv_lang["WATERMARK_THUMB_help"]		= "~#pgv_lang[WATERMARK_THUMB]#~<br /><br />Eğer Medya Güvenlik Duvarı etkinleştirilirse tırnak önizleme filigranlı olmalımıdır? Medya listeniz eğer tırnak önizlemeler filigranlanmaz ise daha hızlı yükleneektir.<br />";
$pgv_lang["ENABLE_AUTOCOMPLETE"]	= "Otomatik tamamlama etkinleştir";
$pgv_lang["META_AUTHOR_descr"]	= "Buraya #pgv_lang[CONTACT_EMAIL]# kişinin tam adını kullanmak için burayı boş geçin.";
$pgv_lang["META_PUBLISHER_descr"]	= "Buraya #pgv_lang[CONTACT_EMAIL]# kişinin tam adını kullanmak için burayı boş geçin.";
$pgv_lang["META_COPYRIGHT_descr"]	= "Buraya #pgv_lang[CONTACT_EMAIL]# kişinin tam adını kullanmak için burayı boş geçin.";
$pgv_lang["META_REVISIT"]		= "Ne sıklıkla örümcekler tekrar zitaret etme META etiketi ";
$pgv_lang["welcome_new2"]			= "<br /><br />Bu sayfayı görüyorsanız PhpGedView sunucunuza başarıyla yüklediniz ve gereksinimleriniz için yapılandırmaya başlamak hazırsınız.<br />";
$pgv_lang["lang_name_croatian"]		= "Hırvatça";
$pgv_lang["lang_name_english (uk)"]	= "İngilizce (UK)";
$pgv_lang["lang_name_english (us)"]	= "İngilizce (US)";
$pgv_lang["lang_name_serbian-la"]	= "Sırpça (Latin alfabesi)";
?>
