<?php
/* $Id$ */

/* By: uros kositer, agenda d.o.o. <urosh@agenda.si> */

$charset = 'iso-8859-2';
$text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)
$left_font_family = 'verdana, arial, helvetica, geneva, sans-serif';
$right_font_family = 'arial, helvetica, geneva, sans-serif';
$number_thousands_separator = '.';
$number_decimal_separator = ',';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('Bytes', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');

$day_of_week = array('Ned', 'Pon', 'Tor', 'Sre', '�et', 'Pet', 'Sob');
$month = array('Jan', 'Feb', 'Mar', 'Apr', 'Maj', 'Jun', 'Jul', 'Avg', 'Sep', 'Okt', 'Nov', 'Dec');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%d %B %Y ob %I:%M %p';
$timespanfmt = '%s dni, %s ur, %s minut in %s sekund';

$strAPrimaryKey = 'Na %s je dodan primarni klju�';
$strAbortedClients = 'Prekinjeno';
$strAbsolutePathToDocSqlDir = 'Vnesite absolutno pot do docSQL mape na stre�niku';
$strAccessDenied = 'Dostop zavrnjen';
$strAction = 'Akcija';
$strAddDeleteColumn = 'Dodaj/Odstrani stolpec \'Polje\'';
$strAddDeleteRow = 'Dodaj/Odstrani vrstico \'Kriterij\'';
$strAddNewField = 'Dodaj novo polje';
$strAddPriv = 'Dodaj nov privilegij';
$strAddPrivMessage = 'Dodali ste nov privilegij.';
$strAddPrivilegesOnDb = 'Dodaj privilegije na naslednji podatkovni bazi';
$strAddPrivilegesOnTbl = 'Dodaj privilegije na naslednji tabeli';
$strAddSearchConditions = 'Dodaj iskalne pogoje (telo "where" stavka):';
$strAddToIndex = 'Dodaj indeksu &nbsp;%s&nbsp;stolpec(ce)';
$strAddUser = 'Dodaj novega uporabnika';
$strAddUserMessage = 'Dodali ste novega uporabnika.';
$strAddedColumnComment = 'Dodan komentar za stolpec';
$strAddedColumnRelation = 'Dodana relacija za stolpec';
$strAdministration = 'Administracija';
$strAffectedRows = 'Spremenjene vrstice:';
$strAfter = 'Po %s';
$strAfterInsertBack = 'Nazaj na prej�njo stran';
$strAfterInsertNewInsert = 'Vstavi �e eno novo vrstico';
$strAll = 'Vse/Vsi';
$strAllTableSameWidth = 'prika�em vse tabele enake �irine?';
$strAlterOrderBy = 'Spremeni vrstni red prikaza tabele za';
$strAnIndex = 'Na %s je dodan indeks';
$strAnalyzeTable = 'Analiziraj tabelo';
$strAnd = 'In';
$strAny = 'Katerikoli';
$strAnyColumn = 'Katerikoli stolpec';
$strAnyDatabase = 'Katerakoli podatkovna baza';
$strAnyHost = 'Katerikoli gostitelj';
$strAnyTable = 'Katerakoli tabela';
$strAnyUser = 'Katerikoli uporabnik';
$strAscending = 'Nara��ajo�e';
$strAtBeginningOfTable = 'Na za�etku tabele';
$strAtEndOfTable = 'Na koncu tabele';
$strAttr = 'Atributi';

$strBack = 'Nazaj';
$strBeginCut = 'ZA�ETEK IZREZA';
$strBeginRaw = 'BEGIN RAW';
$strBinary = 'Binarno';
$strBinaryDoNotEdit = 'Binarno - ne urejaj';
$strBookmarkDeleted = 'Zaznamek je odstranjen.';
$strBookmarkLabel = 'Nalepka';
$strBookmarkQuery = 'Ozna�ena SQL-poizvedba';
$strBookmarkThis = 'Ozna�i to SQL-poizvedbo';
$strBookmarkView = 'Samo pogled';
$strBrowse = 'Prebrskaj';
$strBzError = 'phpMyAdmin ni uspel stisniti odlo�enih podatkov zaradi neuporabne kon�nice Bz2 v tej razli�ici php. Zelo dobro bi bilo, da v konfiguracijski datoteki za phpMyAdmin spremenite ukaz <code>$cfg[\'BZipDump\']</code> v <code>FALSE</code>. �e �elite izvajati stiskanje s pomo�jo Bz2, boste morali posodobiti php v novej�o razli�ico. Za podrobnosti si oglejte php poro�ilo o napaki %s.';
$strBzip = '"bzipano"';

$strCannotLogin = 'Ne morem se prijaviti v MySQL stre�nik';
$strCantLoad = 'ne morem nalo�iti podalj�ka %s,<br />prosim preverite PHP konfiguracijo';
$strCantLoadMySQL = 'ni mogo�e nalo�iti MySQL ekstenzij,<br /> prosimo, preverite PHP konfiguracijo.';
$strCantLoadRecodeIconv = 'Ni mogo�e nalo�iti iconv ali recode ekstenzij, ki so potrebne za pretvorbe kodnih tabel, konfigurirajte php tako, da bo omogo�al uporabo teh ekstenzij ali onemogo�ite pretvarjanje kodnih tabel v phpMyAdmin.';
$strCantRenameIdxToPrimary = 'Indeksa ni mogo�e preimenovati v PRIMARY!';
$strCantUseRecodeIconv = 'Ni mogo�e uporabljati iconv, libiconv ali recode_string funkcij, �eprav so ekstenzije normalno nalo�ene. Preverite konfiguracijo php.';
$strCardinality = 'Kardinalnost';
$strCarriage = 'Znak za pomik na za�etek vrste (Carriage return): \\r';
$strChange = 'Spremeni';
$strChangeDisplay = 'Izberite polje za prikaz';
$strChangePassword = 'Spremeni geslo';
$strCharsetOfFile = 'Nabor znakov datoteke:';
$strCheckAll = 'Ozna�i vse';
$strCheckDbPriv = 'Preveri privilegije podatkovne baze';
$strCheckPrivs = 'Preveri privilegije';
$strCheckPrivsLong = 'Preveri privilegije za podatkovno bazo &quot;%s&quot;.';
$strCheckTable = 'Preveri tabelo';
$strChoosePage = 'Izberite stran za urejanje';
$strColComFeat = 'Prikazovanje komentarjev stolpcev';
$strColumn = 'Stolpec';
$strColumnNames = 'Imena stolpcev';
$strColumnPrivileges = 'Privilegiji tipi�ni za stolpec';
$strCommand = 'Ukaz';
$strComments = 'Komentarji';
$strCompleteInserts = 'Popolne \'insert\' poizvedbe';
$strCompression = 'Stiskanje';
$strConfigFileError = 'phpMyAdmin ni mogel prebrati konfiguracijske datoteke!<br />To se lahko zgodi, �e php pri prevajanju konfiguracijske datoteke najde napako ali pa ne najde datoteke.<br />Prosimo, odprite konfiguracijsko datoteko s povezavo, ki je navedena spodaj in preberite dobljeno sporo�ilo o napaki. V ve�ini primerov gre za manjkajo�i narekovaj ali podpi�je.<br />�e dobite prazno stran, je vse v redu.';
$strConfigureTableCoord = 'Prosimo, konfigurirajte koordinate za tabelo %s';
$strConfirm = 'Ali res �elite to storiti?';
$strConnections = 'Povezave';
$strCookiesRequired = '�e �elite �e dalje uporabljati program, morate omogo�iti pi�kotke.';
$strCopyTable = 'Kopiraj tabelo v (podatkovna_baza<b>.</b>tabela):';
$strCopyTableOK = 'Tabela %s je skopirana v %s.';
$strCouldNotKill = 'phpMyAdmin ni uspel prekiniti teme %s. Verjetno je �e prekinjena.';
$strCreate = 'Ustvari';
$strCreateIndex = 'Ustvari indeks na&nbsp;%s&nbsp;stolpcih';
$strCreateIndexTopic = 'Ustvari nov indeks';
$strCreateNewDatabase = 'Ustvari novo podatkovno bazo';
$strCreateNewTable = 'Ustvari novo tabelo v podatkovni bazi %s';
$strCreatePage = 'Ustvari novo stran';
$strCreatePdfFeat = 'Ustvarjanje PDF datotek';
$strCriteria = 'Kriteriji';

$strDBGContext = 'Kontekst';
$strDBGContextID = 'Kontekst ID';
$strDBGHits = 'Zadetki';
$strDBGLine = 'Vrstica';
$strDBGMaxTimeMs = 'Najve�ji �as, ms';
$strDBGMinTimeMs = 'Najmanj�i �as, ms';
$strDBGModule = 'Modul';
$strDBGTimePerHitMs = '�as/Zadetek, ms';
$strDBGTotalTimeMs = 'Skupni �as, ms';
$strData = 'Podatki';
$strDataDict = 'Podatkovni slovar';
$strDataOnly = 'Samo podatki';
$strDatabase = 'Podatkovna baza ';
$strDatabaseHasBeenDropped = 'Podatkovna baza %s je zavr�ena.';
$strDatabaseWildcard = 'Podatkovna baza (nadomestni znaki dovoljeni):';
$strDatabases = 'podatkovne baze';
$strDatabasesDropped = '%s podatkovne baze so uspe�no zavr�ene.';
$strDatabasesStats = 'Statistika podatkovnih baz';
$strDatabasesStatsDisable = 'Onemogo�i statistiko';
$strDatabasesStatsEnable = 'Omogo�i statistiko';
$strDatabasesStatsHeavyTraffic = 'Obvestilo: Omogo�itev statistike podatkovne baze lahko povzro�i mo�no pove�an promet med spletnim in podatkovnim stre�nikom.';
$strDbPrivileges = 'Privilegiji tipi�ni za podatkovno bazo';
$strDefault = 'Privzeto';
$strDelete = 'Izbri�i';
$strDeleteAndFlush = 'Izbri�i uporabnike in potem osve�i privilegije.';
$strDeleteAndFlushDescr = 'To je najbolj�i na�in, vendar lahko osve�evanje privilegijev traja nekaj �asa.';
$strDeleteFailed = 'Brisanje ni uspelo!';
$strDeleteUserMessage = 'Izbrisali ste uporabnika %s.';
$strDeleted = 'Vrstica je izbrisana';
$strDeletedRows = 'Izbrisane vrstice:';
$strDeleting = 'Bri�em %s';
$strDescending = 'Padajo�e';
$strDisabled = 'Onemogo�eno';
$strDisplay = 'Prika�i';
$strDisplayFeat = 'Prika�i lastnosti';
$strDisplayOrder = 'Vrstni red prikaza:';
$strDisplayPDF = 'Prika�i PDF shemo';
$strDoAQuery = 'Izvedi "query by example" (nadomestni znak: "%")';
$strDoYouReally = 'Ali res �elite ';
$strDocu = 'Dokumentacija';
$strDrop = 'Zavr�i';
$strDropDB = 'Zavr�i podatkovno bazo %s';
$strDropSelectedDatabases = 'Zavr�i izbrane podatkovne baze';
$strDropTable = 'Zavr�i tabelo';
$strDropUsersDb = 'Izbri�i podatkovne baze, ki imajo enako ime kot uporabniki.';
$strDumpXRows = 'Odlo�i %s vrstic, za�ni z zapisom # %s.';
$strDumpingData = 'Odlo�i podatke za tabelo';
$strDynamic = 'dinami�no';

$strEdit = 'Uredi';
$strEditPDFPages = 'Uredi PDF strani';
$strEditPrivileges = 'Uredi privilegije';
$strEffective = 'U�inkovito';
$strEmpty = 'Izprazni';
$strEmptyResultSet = 'MySQL je vrnil kot rezultat prazno mno�ico (npr. ni� vrstic).';
$strEnabled = 'Omogo�eno';
$strEnd = 'Konec';
$strEndCut = 'KONEC IZREZA';
$strEndRaw = 'END RAW';
$strEnglishPrivileges = ' Opomba: Imena MySQL privilegijev so zapisana v angle��ini ';
$strError = 'Napaka';
$strExplain = 'Razlo�i SQL stavek';
$strExport = 'Izvozi';
$strExportToXML = 'Izvozi v XML obliko';
$strExtendedInserts = 'Raz�irjene \'insert\' poizvedbe';
$strExtra = 'Dodatno';

$strFailedAttempts = 'Neuspeli poizkusi';
$strField = 'Polje';
$strFieldHasBeenDropped = 'Polje %s je zavr�eno';
$strFields = 'Polja';
$strFieldsEmpty = ' �tevec polj je prazen! ';
$strFieldsEnclosedBy = 'Polja obdana z';
$strFieldsEscapedBy = 'Polja izognjena z';
$strFieldsTerminatedBy = 'Polja zaklju�ena z';
$strFileCouldNotBeRead = 'Ne morem prebrati datoteke';
$strFixed = 'fiksno';
$strFlushPrivilegesNote = 'Obvestilo: phpMyAdmin dobi podatke o uporabnikovih privilegijih iz MySQL tabel privilegijev. Vsebina teh tabel se lahko razlikuje od privilegijev, ki jih uporablja stre�nik, �e so bile tabele ro�no spremenjene. V tem primeru morate, preden nadaljujete, osve�iti privilegije.';
$strFlushTable = 'Po�isti tabelo ("FLUSH")';
$strFormEmpty = 'V obliki manjka vrednost !';
$strFormat = 'Oblika';
$strFullText = 'Polna besedila';
$strFunction = 'Funkcija';

$strGenBy = 'Ustvaril';
$strGenTime = '�as nastanka';
$strGeneralRelationFeat = 'Splo�ne lastnosti relacij';
$strGlobalPrivileges = 'Globalni privilegiji';
$strGlobalValue = 'Skupna vrednost';
$strGo = 'Izvedi';
$strGrantOption = 'Dovoli';
$strGrants = 'Dovoljenja';
$strGzip = '"gzipano"';

$strHasBeenAltered = 'je bil spremenjen(a).';
$strHasBeenCreated = 'je bil ustvarjen(a).';
$strHaveToShow = 'Za prikaz morate izbrati morate vsaj en stolpec';
$strHome = 'Domov';
$strHomepageOfficial = 'Uradna doma�a stran phpMyAdmin';
$strHomepageSourceforge = 'Sourceforge phpMyAdmin Download Page';
$strHost = 'Gostitelj';
$strHostEmpty = 'Ime gostitelja je prazno!';

$strId = 'ID';
$strIdxFulltext = 'Polno besedilo';
$strIfYouWish = '�e bi radi nalo�ili samo nekatere stolpce tabele, jih navedite v seznamu, kjer jih lo�ite z vejico.';
$strIgnore = 'Prezri';
$strIgnoringFile = 'Prezrl sem datoteko %s';
$strImportDocSQL = 'Uvozi docSQL datoteke';
$strImportFiles = 'Uvozi datoteke';
$strImportFinished = 'Uvoz kon�an';
$strInUse = 'v uporabi';
$strIndex = 'Indeks';
$strIndexHasBeenDropped = 'Indeks %s je zavr�en';
$strIndexName = 'Ime indeksa&nbsp;:';
$strIndexType = 'Vrsta indeksa&nbsp;:';
$strIndexes = 'Indeksi';
$strInsecureMySQL = 'Konfiguracijska datoteka vsebuje nastavitve (uporabnik root brez gesla), ki odgovarjajo privzetemu privlegiranemu ra�unu MySQLa. MySQL stre�nik te�e s privzetimi nastavitvami, zato je izpostavljen vdorom. �imprej odpravite ti dve varnostni luknji.';
$strInsert = 'Vstavi';
$strInsertAsNewRow = 'Vstavi kot novo vrstico';
$strInsertNewRow = 'Vstavi novo vrstico';
$strInsertTextfiles = 'V tabelo vstavi podatke iz datoteke z besedilom';
$strInsertedRows = 'Vstavljene vrstice:';
$strInstructions = 'Navodila';
$strInvalidName = 'beseda "%s" je rezervirana, zato je ne morete uporabiti kot ime podatkovne baze/tabele/polja.';

$strJumpToDB = 'Presko�i na podatkovno bazo &quot;%s&quot;.';
$strJustDelete = 'Samo izbri�i uporabnike iz tabel privilegijev.';
$strJustDeleteDescr = '&quot;Izbrisani&quot; uporabniki lahko �e vedno normalno dostopajo do stre�nika, dokler ne osve�ite privilegijev';

$strKeepPass = 'Ne spreminjaj gesla';
$strKeyname = 'Ime klju�a';
$strKill = 'Prekini proces';

$strLaTeX = 'LaTeX';
$strLandscape = 'Le�e�e';
$strLength = 'Dol�ina';
$strLengthSet = 'Dol�ina/Vrednosti*';
$strLimitNumRows = '�tevilo vrstic na stran';
$strLineFeed = 'Pomik v novo vrsto (Linefeed): \\n';
$strLines = 'Vrstice';
$strLinesTerminatedBy = 'Vrstice zaklju�ene z';
$strLinkNotFound = 'Povezave ni mogo�e najti';
$strLinksTo = 'Povezave z';
$strLocalhost = 'Lokalno';
$strLocationTextfile = 'Lokacija datoteke z besedilom';
$strLogPassword = 'Geslo:';
$strLogUsername = 'Uporabni�ko ime:';
$strLogin = 'Prijava';
$strLoginInformation = 'Podatki o prijavi';
$strLogout = 'Odjava';

$strMissingBracket = 'Manjkajo� oklepaj';
$strModifications = 'Spremembe so shranjene';
$strModify = 'Spremeni';
$strModifyIndexTopic = 'Spremeni indeks';
$strMoreStatusVars = 'Dodatne statusne spremenljivke';
$strMoveTable = 'Premakni tabelo v (podatkovna_baza<b>.</b>tabela):';
$strMoveTableOK = 'Tabela %s je bila premaknjena v %s.';
$strMySQLCharset = 'MySQL kodna tabela';
$strMySQLReloaded = 'MySQL ponovno nalo�en.';
$strMySQLSaid = 'MySQL je vrnil: ';
$strMySQLServerProcess = 'MySQL %pma_s1% te�e na %pma_s2% kot %pma_s3%';
$strMySQLShowProcess = 'Poka�i procese';
$strMySQLShowStatus = 'Poka�i teko�e informacije o MySQL';
$strMySQLShowVars = 'Poka�i sistemske spremenljivke MySQL';

$strName = 'Ime';
$strNext = 'Naslednji';
$strNo = 'Ne';
$strNoDatabases = 'Brez podatkovnih baz';
$strNoDatabasesSelected = 'Ni izbranih podatkovnih baz.';
$strNoDescription = 'brez opisa';
$strNoDropDatabases = '"DROP DATABASE" poizvedbe so izklju�ene.';
$strNoExplain = 'Presko�i razlago SQL stavka';
$strNoFrames = 'phpMyAdmin je prijaznej�i z brskalnikom, ki podpira okvirje.';
$strNoIndex = 'Ni definiranega indeksa!';
$strNoIndexPartsDefined = 'Ni definiranega dela indeksa!';
$strNoModification = 'Brez sprememb';
$strNoPassword = 'Brez gesla';
$strNoPhp = 'Brez kode PHP';
$strNoPrivileges = 'Brez privilegijev';
$strNoQuery = 'Brez SQL poizvedbe!';
$strNoRights = 'Nimate dovolj pravic, da bi bili sedaj tukaj!';
$strNoTablesFound = 'V podatkovni bazi ni mogo�e najti tabel.';
$strNoUsersFound = 'Ni mogo�e najti uporabnika(ov).';
$strNoUsersSelected = 'Ni izbranih uporabnikov.';
$strNoValidateSQL = 'Presko�i preverjanje pravilnosti SQL stavka';
$strNone = 'Brez';
$strNotNumber = 'To ni �tevilo!';
$strNotOK = 'Ni v redu';
$strNotSet = 'Tabele <b>%s</b> ni mogo�e najti ali pa ni v %s';
$strNotValidNumber = ' ni veljavna �tevilka vrstice!';
$strNull = 'Null';
$strNumSearchResultsInTable = '%s zadetek(ov) v tabeli <i>%s</i>';
$strNumSearchResultsTotal = '<b>Skupaj:</b> <i>%s</i> zadetek(ov)';
$strNumTables = 'Ttabel';

$strOK = 'V redu';
$strOftenQuotation = 'Pogosti narekovaji. OPCIJSKO pomeni, da so samo polja tipa \'char\' in \'varchar\' obdana s temi znaki.';
$strOperations = 'Operacije';
$strOptimizeTable = 'Optimiraj tabelo';
$strOptionalControls = 'Opcijsko. Narekuje na�in pisanja in branja posebnih znakov.';
$strOptionally = 'OPCIJSKO';
$strOptions = 'Mo�nosti';
$strOr = 'Ali';
$strOverhead = 'Prese�ek';

$strPHP40203 = 'Uporabljate PHP 4.2.3, ki ima resne te�ave z ve�bitnimi stavki (mbstring). Glej PHP poro�ilo o hro��u 19404. Ta verzija PHP ni priporo�ljiva za uporabo s phpMyAdmin.';
$strPHPVersion = 'Razli�ica PHP';
$strPageNumber = '�tevilka strani:';
$strPartialText = 'Delna besedila';
$strPassword = 'Geslo';
$strPasswordChanged = 'Geslo za %s je uspe�no spremenjeno.';
$strPasswordEmpty = 'Geslo je prazno!';
$strPasswordNotSame = 'Gesli se ne ujemata!';
$strPdfDbSchema = 'Shema podatkovne baze "%s" - Stran %s';
$strPdfInvalidPageNum = 'Nedefinirna �tevilka PDF strani!';
$strPdfInvalidTblName = 'Tabela "%s" ne obstaja!';
$strPdfNoTables = 'Ni tabel';
$strPerHour = 'na uro';
$strPhp = 'Ustvari PHP kodo';
$strPmaDocumentation = 'phpMyAdmin dokumentacija';
$strPmaUriError = 'Ukaz <tt>$cfg[\'PmaAbsoluteUri\']</tt> mora biti definiran v konfiguracijski datoteki!';
$strPortrait = 'Pokon�no';
$strPos1 = 'Za�etek';
$strPrevious = 'Prej�nji';
$strPrimary = 'Primarni';
$strPrimaryKey = 'Primarni klju�';
$strPrimaryKeyHasBeenDropped = 'Primarni klju� je zavr�en';
$strPrimaryKeyName = 'Ime primarnega klju�a mora biti... PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" <b>mora</b> biti ime <b>samo</b> primarnega klju�a!)';
$strPrint = 'Natisni';
$strPrintView = 'Pogled postavitve tiskanja';
$strPrivDescAllPrivileges = 'Vsebuje vse privilegije razen GRANT.';
$strPrivDescAlter = 'Omogo�a spreminjanje strukture obstoje�ih tabel.';
$strPrivDescCreateDb = 'Omogo�a ustvarjanje novih podatkovnih baz in tabel.';
$strPrivDescCreateTbl = 'Omogo�a ustvarjanje novih tabel.';
$strPrivDescCreateTmpTable = 'Omogo�a ustvarjanje za�asnih tabel.';
$strPrivDescDelete = 'Omogo�a brisanje podatkov.';
$strPrivDescDropDb = 'Omogo�a brisanje podatkovnih baz in tabel.';
$strPrivDescDropTbl = 'Omogo�a brisanje tabel.';
$strPrivDescExecute = 'Omogo�a poganjanje shranjenih postopkov; V tej verziji MySQL nima pomena.';
$strPrivDescFile = 'Omogo�a uva�anje in izva�anje podatkov v datoteke.';
$strPrivDescGrant = 'Omogo�a dodajanje uporabnikov in privilegijev brez osve�evanja privilegijev.';
$strPrivDescIndex = 'Omogo�a ustvarjanje in brisanje indeksov.';
$strPrivDescInsert = 'Omogo�a vstavljanje in zamenjavo podatkov.';
$strPrivDescLockTables = 'Omogo�a zaklepanje tabel za trenutno temo.';
$strPrivDescMaxConnections = 'Omeji �tevilo povezav, ki jih uporabnik lahko odpre v eni uri.';
$strPrivDescMaxQuestions = 'Omeji �tevilo poizved, ki jih uporabnik lahko po�lje stre�niku v eni uri.';
$strPrivDescMaxUpdates = 'Omeji �tevilo ukazov za spremembo tabel ali podatkovne baze, ki jih uporabnik lahko izvr�i v eni uri.';
$strPrivDescProcess3 = 'Omogo�a ukinjanje procesov drugih uporabnikov.';
$strPrivDescProcess4 = 'Omogo�a pregled popolnih poizvedb v spisku procesov.';
$strPrivDescReferences = 'V tej verziji MySQL nima pomena.';
$strPrivDescReload = 'Omogo�a osve�evanje stre�nikovih nastavitev in praznjenje stre�nikovih predpomnilnikov.';
$strPrivDescReplClient = 'Da uporabniku pravico poizvedovati kje so njegovi nadrejeni / podrjeni stre�niki.';
$strPrivDescReplSlave = 'Potrebno za podrejene stre�nike pri replikaciji.';
$strPrivDescSelect = 'Omogo�a branje podatkov.';
$strPrivDescShowDb = 'Omogo�a dostop do popolnega spiska podatkovnih baz';
$strPrivDescShutdown = 'Omogo�a uga�anje stre�nika.';
$strPrivDescSuper = 'Omogo�a priklaplanje tudi �e je �e dose�eno najve�je dovoljeno �tevilo priklopov; Potrebno za ve�ino administrativnih nalog kot sta postavljanje globalnih spremenljivk in ukinjanje procesov drugih uporabnikov.';
$strPrivDescUpdate = 'Omogo�a spreminjanje podatkov.';
$strPrivDescUsage = 'Brez privilegijev.';
$strPrivileges = 'Privilegiji';
$strPrivilegesReloaded = 'Uspe�no sem osve�il privilegije.';
$strProcesslist = 'Seznam procesov';
$strProperties = 'Lastnosti';
$strPutColNames = 'Postavi imena polj v prvo vrstico';

$strQBE = 'Poizvedba';
$strQBEDel = 'Bri�i';
$strQBEIns = 'Vstavi';
$strQueryOnDb = 'SQL-poizvedba na podatkovni bazi <b>%s</b>:';
$strQueryStatistics = '<b>Statistika poizvedbe</b>: Od zagona je bilo stre�niku poslanih %s poizvedb.';
$strQueryType = 'Vrsta poizvedbe';

$strReType = 'Ponovno vnesi';
$strReceived = 'Prejeto';
$strRecords = 'Zapisi';
$strReferentialIntegrity = 'Preveri referen�no integriteto:';
$strRelationNotWorking = 'Dodatne funkcije za delo s povezanimi tabelami so bile izkju�ene. �e �elite izvedeti zakaj, kliknite %stukaj%s.';
$strRelationView = 'Pogled relacij';
$strRelationalSchema = 'Relacijska shema';
$strReloadFailed = 'Ponovno nalaganje MySQL ni uspelo.';
$strReloadMySQL = 'Ponovno nalo�i MySQL';
$strReloadingThePrivileges = 'Osve�ujem privilegije';
$strRememberReload = 'Ne pozabite ponovno nalo�iti stre�nika.';
$strRemoveSelectedUsers = 'Izbri�i izbrane uporabnike';
$strRenameTable = 'Preimenuj tabelo v';
$strRenameTableOK = 'Tabela %s je preimenovana v %s';
$strRepairTable = 'Popravi tabelo';
$strReplace = 'Zamenjaj';
$strReplaceTable = 'Podatke v tabeli zamenjaj z datoteko';
$strReset = 'Ponastavi';
$strResourceLimits = 'Omejitve virov';
$strRevoke = 'Odvzemi';
$strRevokeAndDelete = 'Odvzemi uporabnikom aktivne privilegije in jih potem izbri�i.';
$strRevokeAndDeleteDescr = 'Uporabniki bodo �e vedno imeli USAGE privilegije, dokler ne osve�ite privilegijev.';
$strRevokeGrant = 'Odvzemi dovoljenje';
$strRevokeGrantMessage = 'Odvzeli ste dovoljenje (Grant) za %s';
$strRevokeMessage = 'Odvzeli ste privilegije za %s';
$strRevokePriv = 'Odvzemi privilegije';
$strRowLength = 'Dol�ina vrstice';
$strRowSize = ' Velikost vrstice ';
$strRows = 'Vrstice';
$strRowsFrom = 'vrstice naprej od zapisa #';
$strRowsModeHorizontal = 'vodoravnem';
$strRowsModeOptions = 'v %s na�inu in ponovi glavo po %s celicah';
$strRowsModeVertical = 'navpi�nem';
$strRowsStatistic = 'Statistika vrstic';
$strRunQuery = 'Izvedi poizvedbo';
$strRunSQLQuery = 'Izvedi SQL poizvedbo/poizvedbe na podatkovni bazi %s';
$strRunning = 'te�e na %s';

$strSQL = 'SQL';
$strSQLParserBugMessage = 'Obstaja mo�nost, da ste v SQL raz�lenjevalniku naleteli na hro��a. Temeljito preglejte poizvedbo in preverite, �e so citati pravilni in �e se ujemajo. Mo�no je tudi, da prena�ate binarno datoteko, ki je izven podro�ja besedila citata. Poizvedbo lahko preizkusite tudi na vmesniku ukazne vrstice MySQL. �e je stre�nik MySQL izpisal napako, vam le-ta lahko pomaga pri ugotavljanju te�av. �e se bodo te�ave nadaljevale, ali �e raz�lenjevalniku ne uspe tam, kjer vmesniku ukazne vrstice uspe, potem zmanj�ajte vne�eno SQL poizvedbo na tisto poizvedbo, ki povzro�a te�ave in po�ljite poro�ilo o napaki skupaj s podatki iz spodnjega odseka IZREZA.';
$strSQLParserUserError = 'Izgleda, da je v SQL poizvedbi pri�lo do napake. �e je stre�nik MySQL izpisal napako, vam le-ta lahko pomaga pri ugotavljanju te�av.';
$strSQLQuery = 'SQL-poizvedba';
$strSQLResult = 'Rezultat SQL';
$strSQPBugInvalidIdentifer = 'Neveljavni identifikator';
$strSQPBugUnclosedQuote = 'Odprt citat';
$strSQPBugUnknownPunctuation = 'Neznan niz lo�il';
$strSave = 'Shrani';
$strScaleFactorSmall = 'Faktor pove�ava je premajhen, da bi spravili shemo na eno stran';
$strSearch = 'Iskanje';
$strSearchFormTitle = 'I��i v podatkovni bazi';
$strSearchInTables = 'V tabelah:';
$strSearchNeedle = 'Iskane besede ali vrednosti (nadomestni znak: "%"):';
$strSearchOption1 = 'katerokoli besedo';
$strSearchOption2 = 'vse besede';
$strSearchOption3 = 'to�no dolo�eno frazo';
$strSearchOption4 = 'kot \'regular expression\'';
$strSearchResultsFor = 'Rezultati iskanja "<i>%s</i>" %s:';
$strSearchType = 'Najdi:';
$strSelect = 'Izberi';
$strSelectADb = 'Prosimo, izberite podatkovno bazo';
$strSelectAll = 'Izberi vse';
$strSelectFields = 'Izberite polja (vsaj eno):';
$strSelectNumRows = 'in poizvedba';
$strSelectTables = 'Izberi tabele';
$strSend = 'Shrani kot datoteko';
$strSent = 'Poslano';
$strServer = 'Stre�nik %s';
$strServerChoice = 'Izbira stre�nika';
$strServerStatus = 'Podatki o izvajanju';
$strServerStatusUptime = 'MySQL stre�nik deluje �e %s. Zagnal se je %s.';
$strServerTabProcesslist = 'Procesi';
$strServerTabVariables = 'Spremenljivke';
$strServerTrafficNotes = '<b>Promet na stre�niku</b>: V teh tabelah je prikazana statistika obremenitve omre�ja za ta MySQL stre�nik, odkar je bil zagnan.';
$strServerVars = 'Spremenljivke in nastavitve stre�nika';
$strServerVersion = 'Razli�ica stre�nika';
$strSessionValue = 'Vrednost seje';
$strSetEnumVal = '�e je polje vrste "enum" ali "set", navedite vrednosti v obliki: \'a\',\'b\',\'c\'...<br /> �e �elite med vrednostmi uporabiti po�evnico ("\") ali enojni narekovaj ("\'"), pred tem znakom vnesite po�evnico (n.pr. \'\\\\xyz\' ali \'a\\\'b\').';
$strShow = 'Poka�i';
$strShowAll = 'Poka�i vse';
$strShowColor = 'Poka�i barvo';
$strShowCols = 'Poka�i stolpce';
$strShowDatadictAs = 'Oblika podatkovnega slovarja';
$strShowGrid = 'Poka�i mre�o';
$strShowPHPInfo = 'Poka�i podatke o PHP';
$strShowTableDimension = 'Poka�i dimenzije tabel';
$strShowTables = 'Poka�i tabele';
$strShowThisQuery = ' Ponovno poka�i poizvedbo v tem oknu ';
$strShowingRecords = 'Prikazujem vrstice';
$strSingly = '(posamezno)';
$strSize = 'Velikost';
$strSort = 'Sortiraj';
$strSpaceUsage = 'Poraba prostora';
$strSplitWordsWithSpace = 'Besede so lo�ene s presledkom (" ").';
$strStatement = 'Izjave';
$strStatus = 'Stanje';
$strStrucCSV = 'CSV podatki';
$strStrucData = 'Struktura in podatki';
$strStrucDrop = 'Dodaj \'drop table\' poizvedbo';
$strStrucExcelCSV = 'CSV podatki za Ms Excel';
$strStrucOnly = 'Samo struktura';
$strStructPropose = 'Predlagaj strukturo tabele';
$strStructure = 'Struktura';
$strSubmit = 'Po�lji';
$strSuccess = 'SQL-poizvedba je bila uspe�no izvedena';
$strSum = 'Vsota';

$strTable = 'Tabela';
$strTableComments = 'Komentar tabele';
$strTableEmpty = 'Ime tabele je prazno!';
$strTableHasBeenDropped = 'Tabela %s je zavr�ena';
$strTableHasBeenEmptied = 'Tabela %s je izpraznjena';
$strTableHasBeenFlushed = 'Tabela %s je osve�ena';
$strTableMaintenance = 'Vzdr�evanje tabele';
$strTableOfContents = 'Vsebina';
$strTableStructure = 'Struktura tabele';
$strTableType = 'Vrsta tabele';
$strTables = '%s tabel';
$strTblPrivileges = 'Privilegiji tipi�ni za tabelo';
$strTextAreaLength = ' Zaradi njegove dol�ine<br /> polja ne bo mogo�e urejati ';
$strTheContent = 'Vsebina datoteke je vne�ena.';
$strTheContents = 'Vsebina datoteke zamenja vsebino izbrane tabele v vrsticah z identi�nim primarnim ali unikatnim klju�em.';
$strTheTerminator = 'Zaklju�ni znak polj.';
$strThisHost = 'Ta stre�nik';
$strThisNotDirectory = 'To ni bila mapa';
$strThreadSuccessfullyKilled = 'Tema %s je bila prekinjena.';
$strTime = '�as';
$strTotal = 'skupaj';
$strTotalUC = 'Skupaj';
$strTraffic = 'Promet';
$strType = 'Vrsta';

$strUncheckAll = 'Odzna�i vse';
$strUnique = 'Unikaten';
$strUnselectAll = 'Prekli�i izbor vsega';
$strUpdatePrivMessage = 'Posodobili ste privilegije za %s.';
$strUpdateProfile = 'Posodobi profil:';
$strUpdateProfileMessage = 'Profil je posodobljen.';
$strUpdateQuery = 'Osve�i poizvedbo';
$strUsage = 'Uporaba';
$strUseBackquotes = 'Obdaj imena tabel in polj z enojnimi po�evnimi narekovaji';
$strUseTables = 'Uporabi tabele';
$strUseTextField = 'Uporabi tekstovno polje';
$strUser = 'Uporabnik';
$strUserAlreadyExists = 'Uporabnik %s �e obstaja!';
$strUserEmpty = 'Uporabni�ko ime je prazno!';
$strUserName = 'Uporabni�ko ime';
$strUserNotFound = 'Izbranega uporabnika v tabelah privilegijev nisem na�el.';
$strUserOverview = 'Pregled uporabnikov';
$strUsers = 'Uporabniki';
$strUsersDeleted = 'Uspe�no sem izbrisal izbrane uporabnike.';

$strValidateSQL = 'Preveri pravilnost SQL stavka';
$strValidatorError = 'Ne morem inicializirati SQL validatorja. Prosim preverite, �e so name��eni vsi php raz�iritve, kot je navedeno v %dokumenaciji%.';
$strValue = 'Vrednost';
$strVar = 'Spremenljivka';
$strViewDump = 'Preglej dump (shemo) tabele';
$strViewDumpDB = 'Preglej dump (shemo) podatkovne baze';

$strWebServerUploadDirectory = 'imenik za nalaganje datotek';
$strWebServerUploadDirectoryError = 'Imenik, ki ste ga dolo�ili za nalaganje, je nedosegljiv';
$strWelcome = 'Dobrodo�li v %s';
$strWithChecked = 'Z ozna�enim:';
$strWritingCommentNotPossible = 'Zapisovanje komentarjev ni mogo�e';
$strWritingRelationNotPossible = 'Zapisovanje relacij ni mogo�e';
$strWrongUser = 'Napa�no uporabni�ko ime/geslo. Dostop zavrnjen.';

$strYes = 'Da';

$strZeroRemovesTheLimit = 'Obvestilo: �e postavite vrednost na 0 (ni�), boste odstranili omejitev.';
$strZip = '"zipano"';
// To translate

$strDefaultValueHelp = 'For default values, please enter just a single value, without backslash escaping or quotes, using this format: a'; //to translate

$strGlobal = 'global';  //to translate
$strDbSpecific = 'database-specific';  //to translate
$strUsersHavingAccessToDb = 'Users having access to &quot;%s&quot;';  //to translate
$strChangeCopyUser = 'Change Login Information / Copy User';  //to translate
$strChangeCopyMode = 'Create a new user with the same privileges and ...';  //to translate
$strChangeCopyModeCopy = '... keep the old one.';  //to translate
$strChangeCopyModeJustDelete = ' ... delete the old one from the user tables.';  //to translate
$strChangeCopyModeRevoke = ' ... revoke all active privileges from the old one and delete it afterwards.';  //to translate
$strChangeCopyModeDeleteAndReload = ' ... delete the old one from the user tables and reload the privileges afterwards.';  //to translate
$strWildcard = 'wildcard';  //to translate
$strRowsModeFlippedHorizontal = 'horizontal (rotated headers)';//to translate
$strQueryTime = 'Query took %01.4f sec';//to translate
$strDumpComments = 'Include column comments as inline SQL-comments';//to translate
$strDBComment = 'Database comment: ';//to translate
$strQueryFrame = 'Query window';//to translate
$strQueryFrameDebug = 'Debugging information';//to translate
$strQueryFrameDebugBox = 'Active variables for the query form:\nDB: %s\nTable: %s\nServer: %s\n\nCurrent variables for the query form:\nDB: %s\nTable: %s\nServer: %s\n\nOpener location: %s\nFrameset location: %s.';//to translate
$strQuerySQLHistory = 'SQL-history';//to translate
$strMIME_MIMEtype = 'MIME-type';//to translate
$strMIME_transformation = 'Browser transformation';//to translate
$strMIME_transformation_options = 'Transformation options';//to translate
$strMIME_transformation_options_note = 'Please enter the values for transformation options using this format: \'a\',\'b\',\'c\'...<br />If you ever need to put a backslash ("\") or a single quote ("\'") amongst those values, backslashes it (for example \'\\\\xyz\' or \'a\\\'b\').';//to translate
$strMIME_transformation_note = 'For a list of available transformation options and their MIME-type transformations, click on %stransformation descriptions%s';//to translate
$strMIME_available_mime = 'Available MIME-types';//to translate
$strMIME_available_transform = 'Available transformations';//to translate
$strMIME_without = 'MIME-types printed in italics do not have a seperate transformation function';//to translate
$strMIME_description = 'Description';//to translate
$strMIME_nodescription = 'No Description is available for this transformation.<br />Please ask the author, what %s does.';//to translate
$strMIME_file = 'Filename';//to translate
$strTransformation_image_jpeg__plain = 'Takes an imagefile and outputs a link for it. First options argument is a possible prepended string like http://...';//to translate
$strTransformation_text_plain__formatted = 'Preserves original formatting of the field. No Escaping is done.';//to translate
$strTransformation_text_plain__unformatted = 'Displays HTML code as HTML entities. No HTML formatting is shown.';//to translate
$strTransformation_image_jpeg__link = 'Displays a link to this image (direct blob download, i.e.).';//to translate
$strTransformation_image_jpeg__inline = 'Displays an image directly in the table (uses wrapper, direct blob download, i.e.).';//to translate
?>
