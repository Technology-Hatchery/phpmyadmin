<?php
/* $Id$ */

/**
 * Translated by: Pietro Danesi <danone at users.sourceforge.net>  2002-03-29
 * Revised by:    "DPhantom" <dphantom at users.sourceforge.net>  2002-04-16
 */

$charset = 'iso-8859-1';
$text_dir = 'ltr';
$left_font_family = 'verdana, arial, helvetica, geneva, sans-serif';
$right_font_family = 'arial, helvetica, geneva, sans-serif';
$number_thousands_separator = '.';
$number_decimal_separator = ',';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('Bytes', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');

$day_of_week = array('Dom', 'Lun', 'Mar', 'Mer', 'Gio', 'Ven', 'Sab'); //italian days
$month = array('Gen', 'Feb', 'Mar', 'Apr', 'Mag', 'Giu', 'Lug', 'Ago', 'Set', 'Ott', 'Nov', 'Dic'); //italian months
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%d %B, %Y at %I:%M %p'; //italian time
$timespanfmt = '%s giorni, %s ore, %s minuti e %s secondi';


$strAbortedClients = 'Fallito';
$strAccessDenied = 'Accesso negato';
$strAction = 'Azione';
$strAddDeleteColumn = 'Aggiungi/Cancella campo';
$strAddDeleteRow = 'Aggiungi/Cancella criterio';
$strAddNewField = 'Aggiungi un nuovo campo';
$strAddPriv = 'Aggiungi un nuovo privilegio';
$strAddPrivMessage = 'Hai aggiunto un nuovo privilegio.';
$strAddSearchConditions = 'Aggiungi condizioni di ricerca (corpo della clausola "where"):';
$strAddToIndex = 'Aggiungi all\'indice &nbsp;%s&nbsp;colonna/e';
$strAddUser = 'Aggiungi un nuovo utente';
$strAddUserMessage = 'Hai aggiunto un nuovo utente.';
$strAffectedRows = 'Righe affette:';
$strAfter = 'Dopo %s';
$strAfterInsertBack = 'Indietro';
$strAfterInsertNewInsert = 'Inserisci un nuovo record';
$strAll = 'Tutti';
$strAllTableSameWidth = 'mostra tutte le Tabelle con la stessa larghezza?';
$strAlterOrderBy = 'Altera tabella ordinata per';
$strAnIndex = 'Un indice � stato aggiunto in %s';
$strAnalyzeTable = 'Analizza tabella';
$strAnd = 'E';
$strAny = 'Qualsiasi';
$strAnyColumn = 'Qualsiasi colonna';
$strAnyDatabase = 'Qualsiasi database';
$strAnyHost = 'Qualsiasi host';
$strAnyTable = 'Qualsiasi tabella';
$strAnyUser = 'Qualsiasi utente';
$strAPrimaryKey = 'Una chiave primaria � stata aggiunta in %s';
$strAscending = 'Crescente';
$strAtBeginningOfTable = 'All\'inizio della tabella';
$strAtEndOfTable = 'Alla fine della tabella';
$strAttr = 'Attributi';

$strBack = 'Indietro';
$strBeginCut = 'INIZIO CUT';
$strBeginRaw = 'INIZIO RAW';
$strBinary = 'Binario';
$strBinaryDoNotEdit = 'Tipo di dato Binario - non modificare';
$strBookmarkDeleted = 'Il bookmark � stato cancellato.';
$strBookmarkLabel = 'Etichetta';
$strBookmarkQuery = 'Query SQL aggiunte ai preferiti';
$strBookmarkThis = 'Aggiungi ai preferiti questa query SQL';
$strBookmarkView = 'Visualizza solo';
$strBrowse = 'Mostra';
$strBzError = 'phpMyAdmin non � capace di comprimere il dump a causa dell\'estensione Bz2 errata in questa versione di PHP. Vi raccomandiamo vivamente di settare il parametro <code>$cfg[\'BZipDump\']</code> nel vostro file di configurazione di phpMyAdmin a <code>FALSE</code>. Se volete utilizzare le capacit� di compressione Bz2, dovreste aggiornare il PHP all\'ultima versione. Date un\'occhiata al bug report %s per uteriori dettagli.';
$strBzip = '"compresso con bzip2"';

$strCannotLogin = 'Impossibile eseguire il login nel server MySQL';
$strCantLoadMySQL = 'impossibile caricare l\'estensione MySQL,<br />controlla la configurazione di PHP.';
$strCantLoadRecodeIconv = 'Impossibile caricare l\'estensione iconv o recode necessaria per la conversione del set di caratteri, configurare il PHP per permettere di utilizzare queste estenzioni o disabilitare la conversione dei set di caratteri in phpMyAdmin.';
$strCantRenameIdxToPrimary = 'Impossibile rinominare l\'indice a PRIMARIO!';
$strCantUseRecodeIconv = 'Impossibile utilizzare le funzioni iconv o libiconv o recode_string in quanto l\'estensione deve essere caricata. Controllare la configurazione del PHP.';
$strCardinality = 'Cardinalit�';
$strCarriage = 'Ritorno carrello: \\r';
$strChange = 'Modifica';
$strChangeDisplay = 'Scegli il campo da mostrare';
$strChangePassword = 'Cambia password';
$strCharsetOfFile = 'Set di caratteri del file:';
$strCheckAll = 'Seleziona tutti';
$strCheckDbPriv = 'Controlla i privilegi del database';
$strCheckTable = 'Controlla tabella';
$strChoosePage = 'Prego scegliere una Page da modificare';
$strColComFeat = 'Visualizzazione commenti delle colonne';
$strColumn = 'Colonna';
$strColumnNames = 'Nomi delle colonne';
$strCommand = 'Comando';
$strComments = 'Commenti';
$strCompleteInserts = 'Inserimenti completi';
$strCompression = 'Compressione';
$strConfigFileError = 'phpMyAdmin non riesce a leggere il file di configurazione!<br />Questo pu� accadere se il php trova un parse error in esso oppure il php non trova il file.<br />Richiamate il file di configurazione direttamente utilizzando il link sotto e leggete il/i messaggio/i di errore del php che ricevete. Nella maggior parte dei casi ci sono un apostrofo o una virgoletta mancanti.<br />Se ricevete una pagina bianca, allora � tutto a posto.';
$strConfigureTableCoord = 'Prego, configurare le coordinate per la tabella %s';
$strConfirm = 'Sicuro di volerlo fare?';
$strConnections = 'Connessioni';
$strCookiesRequired = 'Da questo punto in poi, i cookies devono essere abilitati.';
$strCopyTable = 'Copia la tabella nel (database<b>.</b>tabella):';
$strCopyTableOK = 'La tabella %s � stata copiata su %s.';
$strCouldNotKill = 'phpMyAdmin non � capace di terminare il thread %s. Probabilmente � gi� stato terminato.';
$strCreate = 'Crea';
$strCreateIndex = 'Crea un indice su &nbsp;%s&nbsp;columns';
$strCreateIndexTopic = 'Crea un nuovo indice';
$strCreateNewDatabase = 'Crea un nuovo database';
$strCreateNewTable = 'Crea una nuova tabella nel database %s';
$strCreatePage = 'Crea una nuova Page';
$strCreatePdfFeat = 'Creazione di PDF';
$strCriteria = 'Criterio';

$strData = 'Dati';
$strDataDict = 'Data Dictionary';
$strDataOnly = 'Solo dati';
$strDatabase = 'Database ';
$strDatabaseHasBeenDropped = 'Il Database %s � stato eliminato.';
$strDatabaseWildcard = 'Database (wildcards permesse):';
$strDatabases = 'database';
$strDatabasesStats = 'Statistiche dei databases';
$strDefault = 'Predefinito';
$strDelPassMessage = 'Hai cancellato la password per';
$strDelete = 'Cancella';
$strDeleteFailed = 'Cancellazione fallita!';
$strDeleteUserMessage = 'Hai cancellato l\'utente %s.';
$strDeleted = 'La riga � stata cancellata';
$strDeletedRows = 'Righe cancellate:';
$strDescending = 'Decrescente';
$strDisabled = 'Disabilitata';
$strDisplay = 'Visualizza';
$strDisplayFeat = 'Mostra Caratteristiche';
$strDisplayOrder = 'Ordine di visualizzazione:';
$strDisplayPDF = 'Mostra lo schema del PDF';
$strDoAQuery = 'Esegui "query da esempio" (carattere jolly: "%")';
$strDoYouReally = 'Confermi: ';
$strDocu = 'Documentazione';
$strDrop = 'Elimina';
$strDropDB = 'Elimina database %s';
$strDropTable = 'Elimina la tabella';
$strDumpXRows = 'Dump di %s righe a partire dalla riga %s.';
$strDumpingData = 'Dump dei dati per la tabella';
$strDynamic = 'dinamico';

$strEdit = 'Modifica';
$strEditPDFPages = 'Modifica pagine PDF';
$strEditPrivileges = 'Modifica Privilegi';
$strEffective = 'Effettivo';
$strEmpty = 'Svuota';
$strEmptyResultSet = 'MySQL ha restituito un insieme vuoto (i.e. zero righe).';
$strEnabled = 'Abilitata';
$strEnd = 'Fine';
$strEndCut = 'FINE CUT';
$strEndRaw = 'FINE RAW';
$strEnglishPrivileges = 'Nota: i nomi dei privilegi di MySQL sono in Inglese';
$strError = 'Errore';
$strExplain = 'Spiega SQL';
$strExport = 'Esporta';
$strExportToXML = 'Esporta in formato XML';
$strExtendedInserts = 'Inserimenti estesi';
$strExtra = 'Extra';

$strFailedAttempts = 'Tentativi falliti';
$strField = 'Campo';
$strFieldHasBeenDropped = 'Il campo %s � stato eliminato';
$strFields = 'Campi';
$strFieldsEmpty = ' Il contatore dei campi � vuoto! ';
$strFieldsEnclosedBy = 'Campo composto da';
$strFieldsEscapedBy = 'Campo impedito da';
$strFieldsTerminatedBy = 'Campo terminato da';
$strFixed = 'fisso';
$strFlushTable = 'Inizializza ("FLUSH") la tabella';
$strFormEmpty = 'Valore mancante nel form!';
$strFormat = 'Formato';
$strFullText = 'Testo completo';
$strFunction = 'Funzione';

$strGenBy = 'Generato da';
$strGenTime = 'Generato il';
$strGeneralRelationFeat = 'Caratteristiche Generali di Relazione';
$strGlobalValue = 'Valore globale';
$strGo = 'Esegui';
$strGrants = 'Permetti';
$strGzip = '"compresso con gzip"';

$strHasBeenAltered = '� stato modificato.';
$strHasBeenCreated = '� stato creato.';
$strHaveToShow = 'Devi scegliere almeno una Colonna da mostrare';
$strHome = 'Home';
$strHomepageOfficial = 'Home page ufficiale di phpMyAdmin';
$strHomepageSourceforge = 'Home page di phpMyAdmin su sourceforge.net';
$strHost = 'Host';
$strHostEmpty = 'Il nome di host � vuoto!';

$strId = 'ID';
$strIdxFulltext = 'Testo completo';
$strIfYouWish = 'Per caricare i dati solo per alcune colonne della tabella, specificare la lista dei campi (separati da virgole).';
$strIgnore = 'Ignora';
$strImportDocSQL = 'Importa Files docSQL';
$strInUse = 'in uso';
$strIndex = 'Indice';
$strIndexHasBeenDropped = 'L\'indice %s � stato eliminato';
$strIndexName = 'Nome dell\'indice&nbsp;:';
$strIndexType = 'Tipo di indice&nbsp;:';
$strIndexes = 'Indici';
$strInsecureMySQL = 'Il file di configurazione in uso contiene impostazioni (root con nessuna password) che corrispondono ai privilegi dell\'account MySQL predefinito. Un server MySQL funzionante con queste impostazioni � aperto a intrusioni, e si dovrebbe realmente riparare a questa falla nella sicurezza.';
$strInsert = 'Inserisci';
$strInsertAsNewRow = 'Inserisci come nuova riga';
$strInsertNewRow = 'Inserisci una nuova riga';
$strInsertTextfiles = 'Inserisci un file di testo nella tabella';
$strInsertedRows = 'Righe inserite:';
$strInstructions = 'Istruzioni';
$strInvalidName = '"%s" � una parola riservata; non � possibile utilizzarla come nome di database/tabella/campo.';

$strKeepPass = 'Non cambiare la password';
$strKeyname = 'Nome chiave';
$strKill = 'Rimuovi';

$strLandscape = 'Orizzontale';
$strLaTeX = 'LaTeX';
$strLength = 'Lunghezza';
$strLengthSet = 'Lunghezza/Set*';
$strLimitNumRows = 'record per pagina';
$strLineFeed = 'Fine riga: \\n';
$strLines = 'Record';
$strLinesTerminatedBy = 'Linee terminate da';
$strLinkNotFound = 'Link non trovato';
$strLinksTo = 'Collegamenti a';
$strLocationTextfile = 'Percorso del file';
$strLogPassword = 'Password:';
$strLogUsername = 'Nome utente:';
$strLogin = 'Connetti';
$strLogout = 'Disconnetti';

$strMissingBracket = 'Parentesi mancante';
$strModifications = 'Le modifiche sono state salvate';
$strModify = 'Modifica';
$strModifyIndexTopic = 'Modifica un indice';
$strMoreStatusVars = 'Pi� variabili di stato';
$strMoveTable = 'Sposta la tabella nel (database<b>.</b>tabella):';
$strMoveTableOK = 'La tabella %s � stata spostata in %s.';
$strMySQLCharset = 'Set di caratteri MySQL';
$strMySQLReloaded = 'MySQL riavviato.';
$strMySQLSaid = 'Messaggio di MySQL: ';
$strMySQLServerProcess = 'MySQL %pma_s1% in esecuzione su %pma_s2% come %pma_s3%';
$strMySQLShowProcess = 'Visualizza processi in esecuzione';
$strMySQLShowStatus = 'Visualizza informazioni di runtime di MySQL';
$strMySQLShowVars = 'Visualizza variabili di sistema di MySQL';

$strName = 'Nome';
$strNext = 'Prossimo';
$strNo = ' No ';
$strNoDatabases = 'Nessun database';
$strNoDescription = 'nessuna Description';
$strNoDropDatabases = 'I comandi "DROP DATABASE" sono disabilitati.';
$strNoExplain = 'Non Spiegare SQL';
$strNoFrames = 'phpMyAdmin funziona meglio con browser che supportano frames';
$strNoIndex = 'Nessun indice definito!';
$strNoIndexPartsDefined = 'Nessuna parte di indice definita!';
$strNoModification = 'Nessun cambiamento';
$strNoPassword = 'Nessuna Password';
$strNoPhp = 'senza codice PHP';
$strNoPrivileges = 'Nessun Privilegio';
$strNoQuery = 'Nessuna query SQL!';
$strNoRights = 'Non hai i permessi per effettuare questa operazione!';
$strNoTablesFound = 'Non ci sono tabelle nel database.';
$strNoUsersFound = 'Nessun utente trovato.';
$strNoValidateSQL = 'Non Validare SQL';
$strNone = 'Nessuno';
$strNotNumber = 'Questo non � un numero!';
$strNotOK = 'non OK';
$strNotSet = '<b>%s</b> tabella non trovata o non settata in %s';
$strNotValidNumber = ' non � una riga valida!';
$strNull = 'Null';
$strNumSearchResultsInTable = '%s corrisponde/ono nella tabella <i>%s</i>';
$strNumSearchResultsTotal = '<b>Totale:</b> <i>%s</i> corrispondenza/e';
$strNumTables = 'Tabelle';

$strOK = 'OK';
$strOftenQuotation = 'In genere da doppi apici (virgolette). OPZIONALE indica che solo i campi <I>char</I> e <I>varchar</I> devono essere delimitati dal carattere indicato.';
$strOperations = 'Operazioni';
$strOptimizeTable = 'Ottimizza tabella';
$strOptionalControls = 'Opzionale. Questo carattere controlla come scrivere o leggere i caratteri speciali.';
$strOptionally = 'OPZIONALE';
$strOptions = 'Opzioni';
$strOr = 'Oppure';
$strOverhead = 'In eccesso';

$strPHP40203 = 'Si sta utilizzando PHP 4.2.3, che presenta un serio bug con le stringhe multi-byte (mbstring). Vedi report PHP 19404. Questa versione di PHP non � raccomandata per l\'utilizzo con phpMyAdmin.';
$strPHPVersion = 'Versione PHP';
$strPageNumber = 'Numero pagina:';
$strPartialText = 'Testo parziale';
$strPassword = 'Password';
$strPasswordEmpty = 'La password � vuota!';
$strPasswordNotSame = 'La password non coincide!';
$strPdfDbSchema = 'Schema del database "%s" - Pagina %s';
$strPdfInvalidPageNum = 'Pagina del PDF non definita!';
$strPdfInvalidTblName = 'La tabella "%s" non esiste!';
$strPdfNoTables = 'Nessuna Tabella';
$strPerHour = 'all\'ora';
$strPhp = 'Crea il codice PHP';
$strPmaDocumentation = 'Documentazione di phpMyAdmin';
$strPmaUriError = 'La direttiva <tt>$cfg[\'PmaAbsoluteUri\']</tt> DEVE essere impostata nel file di configurazione!';
$strPortrait = 'Verticale';
$strPos1 = 'Inizio';
$strPrevious = 'Precedente';
$strPrimary = 'Primaria';
$strPrimaryKey = 'Chiave primaria';
$strPrimaryKeyHasBeenDropped = 'La chiave primaria � stata eliminata';
$strPrimaryKeyName = 'Il nome della chiave primaria deve essere... PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" <b>deve</b> essere il nome di, e <b>solo di</b>, una chiave primaria!)';
$strPrint = 'Stampa';
$strPrintView = 'Visualizza per stampa';
$strPrivileges = 'Privilegi';
$strProcesslist = 'Lista Processi';
$strProperties = 'Propriet�';
$strPutColNames = 'Mette i nomi delle colonne alla prima riga';

$strQBE = 'Query da esempio';
$strQBEDel = 'Cancella';
$strQBEIns = 'Aggiungi';
$strQueryOnDb = 'SQL-query sul database <b>%s</b>:';
$strQueryStatistics = '<b>Statistiche delle Query</b>: Dal suo avvio, sono state inviate al server %s queries.';
$strQueryType = 'Tipo di Query';

$strReceived = 'Ricevuti';
$strRecords = 'Record';
$strReferentialIntegrity = 'Controlla l\'integrit� delle referenze:';
$strRelationalSchema = 'Schema relazionale';
$strRelationNotWorking = 'Le caratteristiche aggiuntive sono state disattivate per funzionare con le tabelle linkate. Per scoprire perch� clicca %squi%s.';
$strRelationalSchema = 'Schema relazionale';
$strRelationView = 'Vedi relazioni';
$strReloadFailed = 'Riavvio di MySQL fallito.';
$strReloadMySQL = 'Riavvia MySQL';
$strRememberReload = 'Ricorda di riavviare MySQL.';
$strRenameTable = 'Rinomina la tabella in';
$strRenameTableOK = 'La tabella %s � stata rinominata %s';
$strRepairTable = 'Ripara tabella';
$strReplace = 'Sostituisci';
$strReplaceTable = 'Sostituisci i dati della tabella col file';
$strReset = 'Riavvia';
$strReType = 'Reinserisci';
$strRevoke = 'Revoca';
$strRevokeGrant = 'Revoca permessi';
$strRevokeGrantMessage = 'Hai revocato i privilegi di permesso per %s';
$strRevokeMessage = 'Hai revocato i privilegi per %s';
$strRevokePriv = 'Revoca privilegi';
$strRowLength = 'Lunghezza riga';
$strRowSize = 'Dimensione riga';
$strRows = 'Righe';
$strRowsFrom = 'righe a partire da';
$strRowsModeHorizontal = ' orizzontale ';
$strRowsModeOptions = ' in modalit� %s e ripeti gli headers dopo %s celle ';
$strRowsModeVertical = ' verticale ';
$strRowsStatistic = 'Statistiche righe';
$strRunQuery = 'Invia Query';
$strRunSQLQuery = 'Esegui la/e query SQL sul database %s';
$strRunning = 'in esecuzione su %s';

$strSQL = 'SQL';
$strSQLParserBugMessage = 'C\'� la possibilit� che ci sia un bug nel parser SQL. Per favore, esaminate la query accuratamente, e controllate che le virgolette siano corrette e non sbagliate. Altre possibili cause d\'errori possono essere che si stia cercando di uploadare un file binario al di fuori di un\'area di testo virgolettata. Si pu� anche provare la query MySQL dalla riga di comando di MySQL. L\'errore qui sotto restituito dal server MySQL, se ce n\'� uno, pu� anche aiutare nella diagnostica del problema. Se ci sono ancora problemi, o se il parser SQL di phpMyAdmin sbaglia quando invece l\'interfaccia a riga di comando non mostra problemi, si pu� ridurre la query SQL in ingresso alla singola query che causa problemi, e inviare un bug report con i dati riportati nella sezione CUT qui sotto:';
$strSQLParserUserError = 'Pare che ci sia un errore nella query SQL immessa. L\'errore del server MySQL mostrato qui sotto, se c\'�, pu� anche aiutare nella risoluzione del problema';
$strSQLQuery = 'query SQL';
$strSQLResult = 'Risultato SQL';
$strSQPBugInvalidIdentifer = 'Identificatore Non Valido';
$strSQPBugUnclosedQuote = 'Virgolette Non Chiuse';
$strSQPBugUnknownPunctuation = 'Stringa di Punctuation Sconosciuta';
$strSave = 'Salva';
$strScaleFactorSmall = 'Il fattore di scala � troppo piccolo per riempire lo schema nella pagina';
$strSearch = 'Cerca';
$strSearchFormTitle = 'Cerca nel database';
$strSearchInTables = 'Nella/e tabella/e:';
$strSearchNeedle = 'parola/e o valore/i da cercare (carattere jolly: "%"):';
$strSearchOption1 = 'almeno una delle parole';
$strSearchOption2 = 'tutte le parole';
$strSearchOption3 = 'la frase esatta';
$strSearchOption4 = 'come espressione regolare';
$strSearchResultsFor = 'Cerca i risultati per "<i>%s</i>" %s:';
$strSearchType = 'Trova:';
$strSelect = 'Seleziona';
$strSelectADb = 'Prego, selezionare un database';
$strSelectAll = 'Seleziona Tutto';
$strSelectFields = 'Seleziona campi (almeno uno):';
$strSelectNumRows = 'nella query';
$strSelectTables = 'Seleziona Tables';
$strSend = 'Salva con nome...';
$strSent = 'Spediti';
$strServer = 'Server %s';
$strServerChoice = 'Scelta del server';
$strServerStatus = 'Informazioni di Runtime';
$strServerStatusUptime = 'Questo server MySQL sta girando da %s. E\' stato avviato il %s.';
$strServerTabVariables = 'Variabili';
$strServerTabProcesslist = 'Processi';
$strServerTrafficNotes = '<b>Traffico del server</b>: Queste tabelle mostrano le statistiche del traffico di retedi questo server MySQL dal momento del suo avvio.';
$strServerVars = 'Variabili e parametri del Server';
$strServerVersion = 'Versione MySQL';
$strSessionValue = 'Valore sessione';
$strSetEnumVal = 'Se il tipo di campo � "enum" o "set", immettere i valori usando il formato: \'a\',\'b\',\'c\'...<br />Se comunque dovete mettere dei backslashes ("\") o dei single quote ("\'") davanti a questi valori, backslashateli (per esempio \'\\\\xyz\' o \'a\\\'b\').';
$strShow = 'Mostra';
$strShowAll = 'Mostra tutti';
$strShowColor = 'Mostra il colore';
$strShowCols = 'Mostra le colonne';
$strShowDatadictAs = 'Formato del Data Dictionary';
$strShowGrid = 'Mostra la griglia';
$strShowPHPInfo = 'Mostra le info sul PHP';
$strShowTableDimension = 'Mostra la dimensione delle tabelle';
$strShowTables = 'Mostra le tabelle';
$strShowThisQuery = 'Mostra questa query di nuovo';
$strShowingRecords = 'Visualizzazione record ';
$strSingly = '(singolarmente)';
$strSize = 'Dimensione';
$strSort = 'Ordinamento';
$strSpaceUsage = 'Spazio utilizzato';
$strSplitWordsWithSpace = 'Le parole sono spezzate sulle spaziature (" ").';
$strStatement = 'Istruzioni';
$strStatus = 'Stato';
$strStrucCSV = 'dati CSV';
$strStrucData = 'Struttura e dati';
$strStrucDrop = 'Aggiungi \'drop table\'';
$strStrucExcelCSV = 'CSV per dati Ms Excel';
$strStrucOnly = 'Solo struttura';
$strStructPropose = 'Proponi la struttura della tabella';
$strStructure = 'Struttura';
$strSubmit = 'Invia';
$strSuccess = 'La query � stata eseguita con successo';
$strSum = 'Totali';

$strTable = 'Tabella';
$strTableComments = 'Commenti sulla tabella';
$strTableEmpty = 'Il nome della tabella � vuoto!';
$strTableHasBeenDropped = 'La tabella %s � stata eliminata';
$strTableHasBeenEmptied = 'La tabella %s � stata svuotata';
$strTableHasBeenFlushed = 'La tabella %s � stata inizializzata';
$strTableMaintenance = 'Amministrazione tabella';
$strTableOfContents = 'Tabella dei contenuti';
$strTableStructure = 'Struttura della tabella';
$strTableType = 'Tipo tabella';
$strTables = '%s tabella(e)';
$strTextAreaLength = ' A causa della sua lunghezza,<br /> questo campo non pu� essere modificato ';
$strTheContent = 'Il contenuto del file � stato inserito.';
$strTheContents = 'Il contenuto del file sostituisce le righe della tabella con la stessa chiave primaria o chiave unica.';
$strTheTerminator = 'Il carattere terminatore dei campi.';
$strThreadSuccessfullyKilled = 'Il thread %s � stato terminato con successo.';
$strTime = 'Tempo';
$strTotal = 'Totali';
$strTotalUC = 'Totale';
$strTraffic = 'Traffico';
$strType = 'Tipo';

$strUncheckAll = 'Deseleziona tutti';
$strUnique = 'Unica';
$strUnselectAll = 'Deseleziona Tutto';
$strUpdatePrivMessage = 'Hai aggiornato i permessi per %s.';
$strUpdateProfile = 'Aggiorna profilo:';
$strUpdateProfileMessage = 'Il profilo � stato aggiornato.';
$strUpdateQuery = 'Aggiorna Query';
$strUsage = 'Utilizzo';
$strUseBackquotes = 'Usa i backquotes con i nomi delle tabelle e dei campi';
$strUseTables = 'Utilizza tabelle';
$strUser = 'Utente';
$strUserEmpty = 'Il nome utente � vuoto!';
$strUserName = 'Nome utente';
$strUsers = 'Utenti';

$strValidateSQL = 'Valida SQL';
$strValidatorError = 'L\' SQL validator non pu� essere inizializzato. Prego controllare di avere installato le estensioni php necessarie come descritto nella %sdocumentazione%s.';
$strValue = 'Valore';
$strVar = 'Variabile';
$strViewDump = 'Visualizza dump (schema) della tabella';
$strViewDumpDB = 'Visualizza dump (schema) del database';

$strWebServerUploadDirectory = 'directory di upload del web-server';
$strWebServerUploadDirectoryError = 'La directory impostata per l\'upload non pu� essere trovata';
$strWelcome = 'Benvenuto in %s';
$strWithChecked = 'Se selezionati:';
$strWrongUser = 'Nome utente o password errati. Accesso negato.';

$strYes = ' Si ';

$strZip = '"compresso con zip"';
// To translate
$strAdministration = 'Administration'; //to translate
$strFlushPrivilegesNote = 'Note: phpMyAdmin gets the users\' privileges directly from MySQL\'s privilege tables. The content of this tables may differ from the privileges the server uses if manual changes have made to it. In this case, you should %sreload the privileges%s before you continue.'; //to translate
$strGlobalPrivileges = 'Global privileges'; //to translate
$strGrantOption = 'Grant'; //to translate
$strPrivDescAllPrivileges = 'Includes all privileges except GRANT.'; //to translate
$strPrivDescAlter = 'Allows altering the structure of existing tables.'; //to translate
$strPrivDescCreateDb = 'Allows creating new databases and tables.'; //to translate
$strPrivDescCreateTbl = 'Allows creating new tables.'; //to translate
$strPrivDescCreateTmpTable = 'Allows creating temporary tables.'; //to translate
$strPrivDescDelete = 'Allows deleting data.'; //to translate
$strPrivDescDropDb = 'Allows dropping databases and tables.'; //to translate
$strPrivDescDropTbl = 'Allows dropping tables.'; //to translate
$strPrivDescExecute = 'Allows running stored procedures; Has no effect in this MySQL version.'; //to translate
$strPrivDescFile = 'Allows importing data from and exporting data into files.'; //to translate
$strPrivDescGrant = 'Allows adding users and privileges without reloading the privilege tables.'; //to translate
$strPrivDescIndex = 'Allows creating and dropping indexes.'; //to translate
$strPrivDescInsert = 'Allows inserting and replacing data.'; //to translate
$strPrivDescLockTables = 'Allows locking tables for the current thread.'; //to translate
$strPrivDescMaxConnections = 'Limits the number of new connections the user may open per hour.';
$strPrivDescMaxQuestions = 'Limits the number of queries the user may send to the server per hour.';
$strPrivDescMaxUpdates = 'Limits the number of commands that that change any table or database the user may execute per hour.';
$strPrivDescProcess3 = 'Allows killing processes of other users.'; //to translate
$strPrivDescProcess4 = 'Allows viewing the complete queries in the process list.'; //to translate
$strPrivDescReferences = 'Has no effect in this MySQL version.'; //to translate
$strPrivDescReplClient = 'Gives the right tp the user to ask where the slaves / masters are.'; //to translate
$strPrivDescReplSlave = 'Needed for the replication slaves.'; //to translate
$strPrivDescReload = 'Allows reloading server settings and flushing the server\'s caches.'; //to translate
$strPrivDescSelect = 'Allows reading data.'; //to translate
$strPrivDescShowDb = 'Gives access to the complete list of databases.'; //to translate
$strPrivDescShutdown = 'Allows shutting down the server.'; //to translate
$strPrivDescSuper = 'Allows connectiong, even if maximum number of connections is reached; Required for most administrative operations like setting global variables or killing threads of other users.'; //to translate
$strPrivDescUpdate = 'Allows changing data.'; //to translate
$strPrivDescUsage = 'No privileges.'; //to translate
$strPrivilegesReloaded = 'The privileges were reloaded successfully.'; //to translate
$strResourceLimits = 'Resource limits'; //to translate
$strUserOverview = 'User overview'; //to translate
$strZeroRemovesTheLimit = 'Note: Setting these options to 0 (zero) removes the limit.'; //to translate
?>
