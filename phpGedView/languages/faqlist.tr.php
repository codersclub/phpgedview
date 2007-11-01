<?php
/**
 * Turkish FAQ file for PhpGedView.
 *
 * PhpGedView: Genealogy Viewer
 * Copyright (C) 2002 to 2007  PGV Development Team
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
 * @author Adem GENÇ uzayuydu@gmail.com http://www.muttafi.com
 * @created 2007-10-05
 * @version $Id$
 */

if (stristr($_SERVER["SCRIPT_NAME"], basename(__FILE__))!==false) {
	print "Doğrudan lisan dosyasına erişemezsiniz.";
	exit;
}

$faqlist["FAQ_000_head"] = "Sıkça Sorulan Sorularda hangi yardımlar bulabilirim?";
$faqlist["FAQ_000_body"] = "<b>Çok önemli lütfen okuyun</b> Bilmeniz gereken soyağacında kayıtlı her kişinin <b>GEDCOM</b> numarası vardır kişilerin <b>GEDCOM</b> şahıs numarasının ön eki <b>#GLOBALS[GEDCOM_ID_PREFIX]#</b> ile başlar. Evli kişilerin Aile numaraları vardır bu numaraların ön eki <b>#GLOBALS[FAM_ID_PREFIX]#</b> ile başlar. Kaynak bilgilerin numaraları vardır bu numaraların ön eki <b>#GLOBALS[SOURCE_ID_PREFIX]#</b> ile başlar. Medya dosyaların numaraları vardır bu numaraların ön eki <b>#GLOBALS[MEDIA_ID_PREFIX]#</b> ile başlar. Havuzdaki dosyaların numaraları vardır bu numaraların ön eki <b>#GLOBALS[REPO_ID_PREFIX]#</b> ile başlar. Bu numaralar kişileri görüntülediğiniz çoğu yerlerde gösterilmektedir yada direk şahısı görüntülediğinizde görebilirsiniz bu numaralar soyağacında dolaşırken istendiği yerde gerekli olacaktır ve ön ekleri ile beraber girmelisiniz.<br /><br />Aşağıda Sıkça Sorulan Sorular listesi oluşturulmuştur, Bu liste içinde başlıklara göre soyağacı PhpGedView sayfasında neler yapabilirsiniz soyağacı PhpGedView web sitesini nasıl görüntülersiniz hakkında detaylı bilgi bulacaksınız.<br /><br />Sıkça Sorulan Sorular listesindeki bilgilere göz atmanız soyağacında PhpGedView daha kolay bilgili olarak gezinmenizi sağlayacaktır lütfen göz atmayı unutmayın.";
$faqlist["FAQ_001_head"] = "Önce Menüleri tanıyalım?";
$faqlist["FAQ_001_body"] = "Menülerin üzerine tıklamadan fareyi(mause) götürdüğümüzde menü de birden fazla linkler içeriyorsa otomatik olarak menü listesi açılacaktır.<br /><br /> Sırayla menülerin başlıklarını tanıyalım sol baştan.<br /><b>1. #pgv_lang[welcome_page]#<br />2. #pgv_lang[mygedview]#<br />3. #pgv_lang[charts]#<br />4. #pgv_lang[lists]#<br />5. #pgv_lang[anniversary_calendar]#<br />6. #pgv_lang[reports]#<br />7. #pgv_lang[clippings_cart]#<br />8. #pgv_lang[hs_search]#<br />9. #pgv_lang[page_help]#</b><br /><br />Bunların dışında menüler içeriyorsa modüle eklenen ek scriptlerdir(programlardır) örnek: <b>10. #pgv_lang[mod_punbb]#</b> bu soyağacına PhpGedView  eklenmiş forum dır.<br /><br /><b>Not:</b> Menü içeriklerinde burada anlatılmış olmasına rağmen siz göremiyorsanız yönetici bu alanları üyelerin kullanımına kapatmış anlamına gelir.";
$faqlist["FAQ_002_head"] = "<b>***1. #pgv_lang[welcome_page]#***</b> nedir?";
$faqlist["FAQ_002_body"] = "<b>1. #pgv_lang[welcome_page]#</b> adından da anlaşılacağı gibi karşılama sayfası giriş yaptığınızda ekrana gelen sayfadır.<br />Burada birçok seçenekler mevcuttur ilk başta soyağacı PhpGedView yöneticisi soyağacı hakkında üyelerine duyurular yayınlar, birçok istatistikler bulunur GEDCOM a kayıtlı kişilerin rasgele resimleri yayınları, tarih ve zamanı görebilirsiniz, şimdi kimler Çevrimiçi olduğunu görebilirsiniz bunun gibi değişik bir sürü seçenekler bulmak mümkündür.";
$faqlist["FAQ_003_head"] = "<b>***2. #pgv_lang[mygedview]#***</b> nedir?";
$faqlist["FAQ_003_body"] = "<b>2. #pgv_lang[mygedview]#</b> adından da anlaşılacağı gibi her üyeye özel sayfa dır.<br />Bu linki tıkladığınızda karşınıza gelecek sayfada size özel modüller ekleyebilir, Diğer kayıtlı üyelere mesaj gönderebilir veya mesaj alabilirsiniz.<br /><br />Hoş geldiniz bloğu ve diğer istatistik blokların yanı sıra rasgele resim gösterme bloğu bulunmaktadır. Ayrıca Hoş Geldiniz blokta <b>#pgv_lang[customize_page]#</b> linkini tıkladığınızda gelecek sayfada orta alandaki bölümden modülleri <b>#pgv_lang[mygedview]#</b> nızda göstermek istediğiniz modülleri seçerek sağda göster veya solda göster ok işaretleriyle <b>#pgv_lang[mygedview]#</b> nızda kendinize özel modülleri yükleme izni verir ve istemediğiniz modülleri orta alana taşıyarak çıkarabilirsiniz.<br /><br />Ayrıca <b>#pgv_lang[my_favorites]#</b> alanına GEDCOM kayıtlarında kolayca kısa yoldan ulaşmak istediğiniz kişileri ekleyebilirsiniz veya özel yıl dönümleri unutmak istemediğiniz kişileri ekleyerek bu özel günleri unutmamanızı sağlamış olur.<br /><br /><b>2. #pgv_lang[mygedview]#</b> menü listesinde bulanan linkler.<br /><br /><b>#pgv_lang[mgv]#</b> linkini tıkladığınızda <b>#pgv_lang[mygedview]#</b> sayfanız açılacaktır.<br /><br /><b>#pgv_lang[editowndata]#</b> tıkladığınızda üyelik bilgilerinizi düzenleyeceğiniz bir sayfa açılacaktır. Bu sayfada şifrenizi değiştirebilir ve diğer üyelikle ilgili ayarlarınızı yapabileceğiniz sayfadır.<br /><br /><b>#pgv_lang[quick_update_title]#</b> Bu link görünmüyorsa yönetici üyelerin kendi veya ailesi hakkında bilgi güncelleme izni vermemiştir anlamına gelir. Eğer bu linki görüyorsanız tıkladığınızda yeni bir sayfa açılacaktır bu sayfada kendi aileniz eşiniz, çocuğunuz ve anne baba kardeşler hakkında GEDCOM da kayıtlı olan bilgilerden yanlış olan varsa doğru bilgilerini girebilir veya eklenmesi gereken bir hadiseyi ekleyebilir yada eski fotoğrafı değiştirmek veya hiç yoksa yeni yükleyebilirsiniz fotoğraf yüklemeden önce dikkat etmeniz gereken fotoğraf adının Dede_Baba_Kisi adları girilmeli ve 500 pikselin geçmemesine özen gösterin burada girilecek bilgiler yönetici tarafından onaylandıktan sonra gösterilecektir bilginize.<br /><br /><b>#pgv_lang[my_pedigree]#</b> bu linki tıkladığınızda <b>#pgv_lang[root_person]#</b> alanına ister sizin ister bakmak istediğiniz kişinin GEDCOM da kayıtlı <b>#pgv_lang[root_person]#</b> girerek <b>#pgv_lang[show]#</b> butona basarak GEDCOM <b>#pgv_lang[root_person]#</b> girilen kişinin ataya doğru soyağacı görüntüler.<br /><br /><b>#pgv_lang[my_indi]#</b> linki tıkladığınızda üyelik hesabınızda GEDCOM Şahıs numaranız girilmiş ise otomatik olarak soyağacına kayıtlı sayfanız açılacak bu sayfada aileniz ve bilgileriniz bulunmaktadır.<br /><br /><b>#pgv_lang[administration]#</b> bu link göremiyorsanız yönetici değilsiniz demektir bu link yöneticileri PhpGedView ayarların yapılacağı alana gider.<br /><br /><b>#pgv_lang[manage_gedcoms]#</b> bu link göremiyorsanız yönetici değilsiniz demektir bu link yöneticilerin GEDCOM dosyanın ayarları yapılacağı sayfaya gider.<br /><br /><b>#pgv_lang[user_admin]#</b>  bu link göremiyorsanız yönetici değilsiniz demektir bu link üyelerin onaylanması ve üyelik bilgilerinde değişiklik veya silme ayarları yapacağı sayfaya gider.<br /><br /><b>#pgv_lang[manage_media]#</b> bu link göremiyorsanız yönetici değilsiniz demektir bu link yöneticilerin media dosyaların toplu görüntüleyin düzenleyeceği sayfaya gider.";
$faqlist["FAQ_004_head"] = "<b>***3. #pgv_lang[charts]#***</b> nedir?";
$faqlist["FAQ_004_body"] = "<b>3. #pgv_lang[charts]#</b> menü listesinde bulanan linkler.<br /><br /><b>#pgv_lang[relationship_chart]#</b> bu link tıkladığında açılacak sayfada GEDCOM kayıtları içinde mevcut iki kişi arasındaki yakınlık yada akrabalık durumun gösterir.<br /><br />Akrabalık durumu görmek için açılan sayfada <b>#pgv_lang[person1]#</b> alanına birinci kişinin GEDCOM Şahıs numarası girin <b>#pgv_lang[person2]#</b> alanına diğer ikinci kişinin GEDCOM Şahıs numarası girin (kutunun sağındaki ikonu tıklayıp açılan sayfada kişinin adını yazarak GEDCOM Şahıs numarası bulabilirsiniz) ve <b>#pgv_lang[show]#</b> butona basın. Eğer iki kişi arasında evlilikle gelişen bir akrabalık durumu olup olmadığını kontrol etmek için <b>#pgv_lang[follow_spouse]#</b> sağındaki kuyu işaretleyin <b>#pgv_lang[show]#</b> butona basın işaretli ise işareti kaldırıp <b>#pgv_lang[show]#</b> butona basın bu şekilde bu iki kişi arasında normal ve akrabalık ilegelişen yakınlık yada akrabalık durumu görme imkanı olacaktır.<br /><br /><b>#pgv_lang[ancestry_chart]#</b> bu linki tıkladığınızda açılacak sayfada <b>#pgv_lang[root_person]#</b> alanına GEDCOM numarası girilen kişinin atasına doğru çizim gösterilir.<br />Sağ tarafta listeleme seçeneğinde <b>#pgv_lang[chart_list]#</b> seçilirse liste çizimi gösterilir. <b>#pgv_lang[chart_booklet]#</b> seçilirse broşür çizimi gösterilir ve <b>#pgv_lang[show_cousins]#</b> alanı aktif olur ve kuzenleri beraberinde gösterilir. <b>#pgv_lang[individual_list]#</b> seçilirse metin halinde gösterilir. <b>#pgv_lang[family_list]#</b> seçilirse ailelerle beraber metin olarak gösterilir.<br /><br /><b>#pgv_lang[familybook_chart]#</b> linki tıkladığında Aile Aile parça parça çizim yaparak gösterir.";

?>
