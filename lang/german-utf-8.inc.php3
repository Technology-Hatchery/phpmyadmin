<?php
/* $Id$ */

/**
 * For suggestions concerning this file please contact
 *     Alexander M. Turek <rabus at users.sourceforge.net>.
 *
 * Bei Verbesserungsvorschlägen diese Datei betreffend wenden Sie sich bitte an
 *     Alexander M. Turek <rabus at users.sourceforge.net>.
 */

$charset = 'utf-8';
$allow_recoding = TRUE;
$text_dir = 'ltr';
$left_font_family = 'verdana, arial, helvetica, geneva, sans-serif';
$right_font_family = 'arial, helvetica, geneva, sans-serif';
$number_thousands_separator = '.';
$number_decimal_separator = ',';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('Bytes', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');

$day_of_week = array('So', 'Mo', 'Di', 'Mi', 'Do', 'Fr', 'Sa');
$month = array('Januar', 'Februar', 'März', 'April', 'Mai', 'Juni', 'Juli', 'August', 'September', 'Oktober', 'November', 'Dezember');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%d. %B %Y um %H:%M';
$timespanfmt = '%s Tage, %s Stunden, %s Minuten und %s Sekunden';

$strAbortedClients = 'Abgebrochen';
$strAccessDenied = 'Zugriff verweigert.';
$strAction = 'Aktion';
$strAddDeleteColumn = 'Spalten hinzufügen/entfernen';
$strAddDeleteRow = 'Zeilen hinzufügen/entfernen';
$strAddNewField = 'Neue Felder hinzufügen';
$strAddPriv = 'Rechte hinzufügen';
$strAddPrivMessage = 'Rechte wurden hinzugefügt';
$strAddSearchConditions = 'Suchkondition (Argumente für den WHERE-Ausdruck):';
$strAddToIndex = '%s&nbsp;Spalten zum Index hinzufügen';
$strAddUser = 'Neuen Benutzer hinzufügen';
$strAddUserMessage = 'Der Benutzer wurde hinzugefügt.';
$strAffectedRows = ' Betroffene Datensätze: ';
$strAfter = 'Nach %s';
$strAfterInsertBack = 'zurück';
$strAfterInsertNewInsert = 'anschließend einen weiteren Datensatz einfügen';
$strAll = 'Alle';
$strAllTableSameWidth = 'Sollen alle Tabellen mit der gleichen Breite angezeigt werden?';
$strAlterOrderBy = 'Tabelle sortieren nach';
$strAnalyzeTable = 'Analysiere Tabelle';
$strAnd = 'und';
$strAnIndex = 'Ein Index wurde in %s erzeugt';
$strAny = 'Jeder';
$strAnyColumn = 'Jede Spalte';
$strAnyDatabase = 'Jede Datenbank';
$strAnyHost = 'Jeder Host';
$strAnyTable = 'Jede Tabelle';
$strAnyUser = 'Jeder Benutzer';
$strAPrimaryKey = 'Ein Primärschlüssel wurde in %s erzeugt';
$strAscending = 'aufsteigend';
$strAtBeginningOfTable = 'An den Anfang der Tabelle';
$strAtEndOfTable = 'An das Ende der Tabelle';
$strAttr = 'Attribute';

$strBack = 'Zurück';
$strBeginCut = 'AUSSCHNITTSANFANG';
$strBeginRaw = 'BEGINN DER AUSGABE';
$strBinary = ' Binär ';
$strBinaryDoNotEdit = ' Binär - nicht editierbar !';
$strBookmarkDeleted = 'SQL-Abfrage wurde gelöscht.';
$strBookmarkLabel = 'Titel';
$strBookmarkQuery = 'Gespeicherte SQL-Abfrage';
$strBookmarkThis = 'SQL-Abfrage speichern';
$strBookmarkView = 'Nur zeigen';
$strBrowse = 'Anzeigen';
$strBzError = 'phpMyAdmin konnte die Datei wegen eines Fehler in der Bz2-Erweiterung in dieser php-Version nicht komprimieren. Es wird deshalb empfohlen die Einstellung <code>$cfg[\'BZipDump\']</code> in Ihrer phpMyAdmin-Konfiguration auf <code>FALSE</code> zu setzen. Falls Sie die Bz2-Kompressionsfunktionen dennoch nutzen wollen, so sollten Sie eine neuere php-Version installieren. Bitte lesen Sie auch den php-Bugreport %s für weitere Informationen.';
$strBzip = 'BZip-komprimiert';

$strCannotLogin = 'Die Anmeldung am MySQL-Server ist fehlgeschlagen.';
$strCantLoadMySQL = 'Die MySQL-Erweiterung konnte nicht geladen werden.<br />Bitte überprüfen Sie Ihre PHP-Konfiguration!';
$strCantLoadRecodeIconv = 'Die PHP-Erweiterungen iconv und recode, welche für die Zeichensatzkonvertierung benötigt werden, konnten nicht geladen werden. Bitte ändern Sie Ihre PHP-Konfiguration und aktivieren Sie diese Erweiterungen oder deaktivieren Sie die Zeichensatzkonvertierung in phpMyAdmin.';
$strCantRenameIdxToPrimary = 'Kann Index nicht in PRIMARY umbenennen!';
$strCantUseRecodeIconv = 'Weder die iconv- noch libiconv- oder recode_string-Funktion konnte verwandt werden, obwohl die benötigten php-Erweiterungen angeblich geladen wurden. Bitte überprüfen Sie Ihre PHP-Konfiguration.';
$strCardinality = 'Kardinalität';
$strCarriage = 'Wagenrücklauf \\r';
$strChange = 'Ändern';
$strChangeDisplay = 'Anzuzeigende Spalte bestimmen';
$strChangePassword = 'Kennwort ändern';
$strCharsetOfFile = 'Zeichencodierung der Datei:';
$strCheckAll = 'Alle auswählen';
$strCheckDbPriv = 'Rechte einer Datenbank prüfen';
$strCheckTable = 'Überprüfe Tabelle';
$strChoosePage = 'Bitte wählen Sie die zu bearbeitende Seite.';
$strColComFeat = 'Darstellung von Spaltenkommentaren';
$strColumn = 'Spalte';
$strColumnNames = 'Spaltennamen';
$strCommand = 'Befehl';
$strComments = 'Kommentare';
$strCompleteInserts = 'Vollständige \'INSERT\'s';
$strCompression = 'Kompression';
$strConnections = 'Verbindungen';
$strConfigFileError = 'phpMyAdmin konnte Ihre Konfigurationsdatei nicht verarbeiten!<br />Dies kann passieren, wenn der PHP-Parser Syntaxfehler in ihr findet oder sie nicht existiert.<br />Bitte rufen Sie die Konfigurationsdatei üben den unteren Link direkt auf und lesen Sie die PHP-Fehlermeldungen, die Sie erhalten. Meistens fehlt bloß irgendwo ein Anführungszeichen oder Semikolon.<br />Wenn Sie eine leere Seite erhalten, ist Ihre Konfigurationsdatei in Ordnung.';
$strConfigureTableCoord = 'Bitte konfigurieren Sie die Koordinaten für die Tabelle %s';
$strConfirm = 'Sind Sie wirklich sicher?';
$strCookiesRequired = 'Ab diesem Punkt müssen Cookies aktiviert sein.';
$strCopyTable = 'Kopiere Tabelle nach (Datenbank<b>.</b>Tabellenname):';
$strCopyTableOK = 'Tabelle %s wurde nach %s kopiert.';
$strCouldNotKill = 'phpMyAdmin konnte den Prozess %s nicht abbrechen. Er wurde wahrscheinlich bereits geschlossen.';
$strCreate = 'Anlegen';
$strCreateIndex = 'Index über&nbsp;%s&nbsp;Spalten anlegen';
$strCreateIndexTopic = 'Neuen Index anlegen';
$strCreateNewDatabase = 'Neue Datenbank anlegen';
$strCreateNewTable = 'Neue Tabelle in Datenbank %s erstellen';
$strCreatePage = 'Neue Seite erstellen';
$strCreatePdfFeat = 'Erzeugen von PDFs';
$strCriteria = 'Kriterium';

$strData = 'Daten';
$strDatabase = 'Datenbank';
$strDatabaseHasBeenDropped = 'Datenbank %s wurde gelöscht.';
$strDatabases = 'Datenbanken';
$strDatabasesStats = 'Statistiken über alle Datenbanken';
$strDatabaseWildcard = 'Datenbank (Platzhalter sind erlaubt):';
$strDataDict = 'Strukturverzeichnis';
$strDataOnly = 'Nur Daten';
$strDefault = 'Standard';
$strDelete = 'Löschen';
$strDeleted = 'Die Zeile wurde gelöscht.';
$strDeletedRows = 'Gelöschte Zeilen:';
$strDeleteFailed = 'Löschen fehlgeschlagen!';
$strDeleteUserMessage = 'Der Benutzer %s wurde gelöscht.';
$strDescending = 'absteigend';
$strDisabled = 'Deaktiviert';
$strDisplay = 'Zeige';
$strDisplayFeat = 'Anzeige verknüpfter Daten';
$strDisplayOrder = 'Sortierung nach:';
$strDisplayPDF = 'PDF-Schema anzeigen';
$strDoAQuery = 'Suche über Beispielwerte ("query by example") (Platzhalter: "%")';
$strDocu = 'Dokumentation';
$strDoYouReally = 'Möchten Sie wirklich diese Abfrage ausführen: ';
$strDrop = 'Löschen';
$strDropDB = 'Datenbank %s löschen';
$strDropTable = 'Tabelle löschen:';
$strDumpingData = 'Daten für Tabelle';
$strDumpXRows = 'Exportiere %s Datensätze ab Zeile %s.';
$strDynamic = 'dynamisch';

$strEdit = 'Ändern';
$strEditPDFPages = 'PDF-Seiten bearbeiten';
$strEditPrivileges = 'Rechte ändern';
$strEffective = 'Effektiv';
$strEmpty = 'Leeren';
$strEmptyResultSet = 'MySQL lieferte ein leeres Resultat zurück (d.h. null Zeilen).';
$strEnabled = 'Aktiviert';
$strEnd = 'Ende';
$strEndCut = 'AUSSCHNITTSENDE';
$strEndRaw = 'ENDE DER AUSGABE';
$strEnglishPrivileges = ' Anmerkung: MySQL-Rechte werden auf Englisch angegeben. ';
$strError = 'Fehler';
$strExplain = 'SQL erklären';
$strExport = 'Exportieren';
$strExportToXML = 'Ins XML-Format exportieren';
$strExtendedInserts = 'Erweiterte \'INSERT\'s';
$strExtra = 'Extra';

$strFailedAttempts = 'Fehlgeschlagen';
$strField = 'Feld';
$strFieldHasBeenDropped = 'Spalte %s wurde entfernt.';
$strFields = 'Felder';
$strFieldsEmpty = ' Sie müssen angeben wie viele Felder die Tabelle haben soll! ';
$strFieldsEnclosedBy = 'Felder eingeschlossen von';
$strFieldsEscapedBy = 'Felder escaped von';
$strFieldsTerminatedBy = 'Felder getrennt mit';
$strFixed = 'starr';
$strFlushTable = 'Leeren des Tabellenchaches ("FLUSH")';
$strFormat = 'Format';
$strFormEmpty = 'Das Formular ist leer !';
$strFullText = 'vollständige Textfelder';
$strFunction = 'Funktion';

$strGenBy = 'Erstellt von';
$strGeneralRelationFeat = 'Allgemeine Verknüpfungsfunktionen';
$strGenTime = 'Erstellungszeit';
$strGlobalValue = 'Globaler Wert';
$strGo = 'OK';
$strGrants = 'Rechte';
$strGzip = 'GZip-komprimiert';

$strHasBeenAltered = 'wurde geändert.';
$strHasBeenCreated = 'wurde erzeugt.';
$strHaveToShow = 'Bitte wählen Sie mindestens eine anzuzeigende Spalte';
$strHome = 'Home';
$strHomepageOfficial = ' Offizielle phpMyAdmin-Homepage ';
$strHomepageSourceforge = ' phpMyAdmin-Downloadseite bei Sourceforge ';
$strHost = 'Host';
$strHostEmpty = 'Es wurde kein Host angegeben!';

$strId = 'ID';
$strIdxFulltext = 'Volltext';
$strIfYouWish = 'Wenn Sie nur bestimmte Spalten importieren möchten, geben Sie diese bitte hier an.';
$strIgnore = 'Ignorieren';
$strImportDocSQL = 'docSQL-Dateien importieren';
$strIndex = 'Index';
$strIndexes = 'Indizes';
$strIndexHasBeenDropped = 'Index %s wurde entfernt.';
$strIndexName = 'Index Name&nbsp;:';
$strIndexType = 'Index Typ&nbsp;:';
$strInsecureMySQL = 'Ihre Konfigurationsdatei enthält Einstellungen (Benutzer &quot;root&quot; ohne Passwort), welche denen des MySQL-Stardardbenutzers entsprechen. Wird Ihr MySQL-Server mit diesen Einstellungen betrieben, so können Unbefugte leicht von außen auf ihn zugreifen. Sie sollten diese Sicherheitslücke unbedingt schließen!';
$strInsert = 'Einfügen';
$strInsertAsNewRow = ' Als neuen Datensatz speichern ';
$strInsertedRows = 'Eingefügte Zeilen:';
$strInsertNewRow = 'Neue Zeile einfügen';
$strInsertTextfiles = 'Textdatei in Tabelle einfügen';
$strInstructions = 'Befehle';
$strInUse = 'in Benutzung';
$strInvalidName = '"%s" ist ein reserviertes Wort, welches nicht als Datenbank-, Feld- oder Tabellenname verwendet werden darf.';

$strKeepPass = 'Kennwort nicht verändert';
$strKeyname = 'Name';
$strKill = 'Beenden';

$strLandscape = 'Querformat';
$strLaTeX = 'LaTeX';
$strLength = ' Länge ';
$strLengthSet = 'Länge/Set*';
$strLimitNumRows = 'Einträge pro Seite';
$strLineFeed = 'Zeilenvorschub: \\n';
$strLines = 'Zeilen';
$strLinesTerminatedBy = 'Zeilen getrennt mit';
$strLinkNotFound = 'Der Verweis wurde nicht gefunden.';
$strLinksTo = 'Verweise';
$strLocationTextfile = 'Datei';
$strLogin = 'Login';
$strLogout = 'Neu einloggen';
$strLogPassword = 'Kennwort:';
$strLogUsername = 'Benutzername:';

$strMissingBracket = 'Fehlende Klammer';
$strModifications = 'Änderungen gespeichert.';
$strModify = 'Verändern';
$strModifyIndexTopic = 'Index modifizieren';
$strMoreStatusVars = 'Weitere Statusvariablen';
$strMoveTable = 'Verschiebe Tabelle nach (Datenbank<b>.</b>Tabellenname):';
$strMoveTableOK = 'Tabelle %s wurde nach %s verschoben.';
$strMySQLCharset = 'MySQL-Zeichensatz';
$strMySQLReloaded = 'MySQL wurde neu gestartet.';
$strMySQLSaid = 'MySQL meldet: ';
$strMySQLServerProcess = 'Verbunden mit MySQL %pma_s1% auf %pma_s2% als %pma_s3%';
$strMySQLShowProcess = 'Prozesse anzeigen';
$strMySQLShowStatus = 'MySQL-Laufzeit-Informationen anzeigen';
$strMySQLShowVars = 'MySQL-System-Variablen anzeigen';

$strName = 'Name';
$strNext = 'Nächste';
$strNo = 'Nein';
$strNoDatabases = 'Keine Datenbanken';
$strNoDescription = 'keine Beschreibung';
$strNoDropDatabases = 'Die Anweisung "DROP DATABASE" wurde deaktiviert.';
$strNoExplain = 'SQL-Erklärung umgehen';
$strNoFrames = 'phpMyAdmin arbeitet besser mit einem <b>Frame</b>-fähigen Browser.';
$strNoIndex = 'Kein Index definiert!';
$strNoIndexPartsDefined = 'Keine Indizies definiert.';
$strNoModification = 'Keine Änderung';
$strNone = 'keine';
$strNoPassword = 'Kein Kennwort';
$strNoPhp   = 'ohne PHP-Code';
$strNoPrivileges = 'Keine Rechte';
$strNoQuery = 'Kein SQL-Befehl!';
$strNoRights = 'Sie haben nicht genug Rechte um fortzufahren!';
$strNoTablesFound = 'Es wurden keine Tabellen in der Datenbank gefunden.';
$strNotNumber = 'Das ist keine Zahl!';
$strNotOK = 'fehlerhaft';
$strNotSet = 'Die Tabelle <b>%s</b> wurde entweder nicht gefunden oder in der Kofigurationsdatei %s nicht gesetzt.';
$strNotValidNumber = ' ist keine gültige Zeilennummer!';
$strNoUsersFound = 'Es wurden keine Benutzer gefunden.';
$strNoValidateSQL = 'SQL-Validierung umgehen';
$strNull = 'Null';
$strNumSearchResultsInTable = '%s Treffer in der Tabelle <i>%s</i>';
$strNumSearchResultsTotal = '<b>Insgesamt</b> <i>%s</i> Treffer';
$strNumTables = 'Tabellen';

$strOftenQuotation = 'Häufig Anführungszeichen. Optional bedeutet, dass nur Textfelder von den angegeben Zeichen eingeschlossen sind.';
$strOK = 'OK';
$strOperations = 'Operationen';
$strOptimizeTable = 'Optimiere Tabelle';
$strOptionalControls = 'Optional. Bestimmt, wie Sonderzeichen kenntlich gemacht werden.';
$strOptionally = 'optional';
$strOptions = 'Optionen';
$strOr = 'oder';
$strOverhead = 'Überhang';

$strPageNumber = 'Seite:';
$strPartialText = 'gekürzte Textfelder';
$strPassword = 'Kennwort';
$strPasswordEmpty = 'Es wurde kein Kennwort angegeben!';
$strPasswordNotSame = 'Die eingegebenen Kennwörter sind nicht identisch!';
$strPdfDbSchema = 'Schema der Datenbank "%s" - Seite %s';
$strPdfInvalidPageNum = 'Undefinierte PDF-Seitennummer!';
$strPdfInvalidTblName = 'Die Tabelle "%s" existiert nicht!';
$strPdfNoTables = 'keine Tabellen';
$strPerHour = 'pro Stunde';
$strPhp = 'PHP-Code erzeugen';
$strPHP40203 = 'Sie verwenden die PHP-Version 4.2.3, welche leider fehlerhaft im Umgang mit Multibyte-Zeichenketten (mbstring) ist. Dieser Fehler ist in der PHP-Datenbank als Bug-Report #19404 dokumentiert. Aus diesem Grund wird diese PHP-Version nicht für den Betrieb von phpMyAdmin empfohlen.';
$strPHPVersion = 'PHP-Version';
$strPmaDocumentation = 'phpMyAdmin-Dokumentation';
$strPmaUriError = 'Das <tt>$cfg[\'PmaAbsoluteUri\']</tt>-Verzeichnis MUSS in Ihrer Konfigurationsdatei angegeben werden!';
$strPortrait = 'Hochformat';
$strPos1 = 'Anfang';
$strPrevious = 'Vorherige';
$strPrimary = 'Primärschlüssel';
$strPrimaryKey = 'Primärschlüssel';
$strPrimaryKeyHasBeenDropped = 'Der Primärschlüssel wurde gelöscht.';
$strPrimaryKeyName = 'Der Name des Primärschlüssels muss PRIMARY lauten!';
$strPrimaryKeyWarning = 'Der Name des Primärschlüssels darf <b>nur</b> "PRIMARY" lauten.';
$strPrint = 'Drucken';
$strPrintView = 'Druckansicht';
$strPrivileges = 'Rechte';
$strProcesslist = 'Prozesse';
$strProperties = 'Eigenschaften';
$strPutColNames = 'Feldnamen in die erste Zeile setzen';

$strQBE = 'Abfrageeditor';
$strQBEDel = 'Entf.';
$strQBEIns = 'Einf.';
$strQueryOnDb = ' SQL-Befehl in der Datenbank <b>%s</b>:';
$strQueryStatistics = '<b>Abfragestatisktik</b>: Seit seinem Start wurden %s Abfragen an diesen MySQL-Server gesandt.';
$strQueryType = 'Abfrageart';

$strReceived = 'Empfangen';
$strRecords = 'Einträge';
$strReferentialIntegrity = 'Prüfe referentielle Integrität:';
$strRelationalSchema = 'Beziehungsschema';
$strRelationNotWorking = 'Die zusätzlichen Funktionen für verknüpfte Tabellen wurden automatisch deaktiviert. Klicken Sie %shier%s um herauszufinden warum.';
$strRelationView = 'Beziehungsübersicht';
$strReloadFailed = 'MySQL Neuladen fehlgeschlagen.';
$strReloadMySQL = 'MySQL neu starten';
$strRememberReload = 'Der Server muss neu gestartet werden.';
$strRenameTable = 'Tabelle umbenennen in';
$strRenameTableOK = 'Tabelle %s wurde umbenannt in %s.';
$strRepairTable = 'Repariere Tabelle';
$strReplace = 'Ersetzen';
$strReplaceTable = 'Tabelleninhalt ersetzen';
$strReset = 'Zurücksetzen';
$strReType = 'Wiederholen';
$strRevoke = 'Entfernen';
$strRevokeGrant = '\'Grant\' entfernen';
$strRevokeGrantMessage = 'Sie haben das Recht \'Grant\' für %s entfernt.';
$strRevokeMessage = 'Sie haben die Rechte für %s entfernt.';
$strRevokePriv = 'Rechte entfernen';
$strRowLength = 'Zeilenlänge';
$strRows = 'Zeilen';
$strRowsFrom = 'Datensätze, beginnend ab';
$strRowSize = 'Zeilengröße';
$strRowsModeHorizontal = 'untereinander';
$strRowsModeOptions = '%s angeordnet und wiederhole die Kopfzeilen nach %s Datensätzen.';
$strRowsModeVertical = 'nebeneinander';
$strRowsStatistic = 'Zeilenstatistik';
$strRunning = 'auf %s';
$strRunQuery = 'SQL-Befehl ausführen';
$strRunSQLQuery = 'SQL-Befehl(e) in Datenbank %s ausführen';

$strSave = 'Speichern';
$strScaleFactorSmall = 'Der Skalierungsfaktor ist zu klein, sodass das Schma nicht auf eine Seite passt!';
$strSearch = 'Suche';
$strSearchFormTitle = 'Durchsuche die Datenbank';
$strSearchInTables = 'In der / den Tabelle(n):';
$strSearchNeedle = 'Zu suchende Wörter oder Werte (Platzhalter: "%"):';
$strSearchOption1 = 'mindestens eines der Wörter';
$strSearchOption2 = 'alle Wörter';
$strSearchOption3 = 'genau diese Zeichenkette';
$strSearchOption4 = 'als regulären Ausdruck';
$strSearchResultsFor = 'Suchergebnisse für "<i>%s</i>" %s:';
$strSearchType = 'Finde:';
$strSelect = 'Teilw. anzeigen';
$strSelectADb = 'Bitte Datenbank auswählen';
$strSelectAll = 'Alle auswählen';
$strSelectFields = 'Felder auswählen (mind. eines):';
$strSelectNumRows = 'in der Abfrage';
$strSelectTables = 'Tabellenauswahl';
$strSend = 'Senden';
$strSent = 'Gesendet';
$strServer = 'Server %s';
$strServerChoice = 'Server Auswählen';
$strServerStatus = 'Laufzeit-Informationen';
$strServerStatusUptime = 'Dieser MySQL-Server läuft bereits %s. Er wurde am %s gestartet.';
$strServerTabVariables = 'Variablen';
$strServerTabProcesslist = 'Prozesse';
$strServerTrafficNotes = '<b>Servertraffic</b>: In diesen Tabellen wird der Netzwerktraffic dieses MySQL-Servers seit dessen Start aufgeführt.';
$strServerVars = 'Servervariablen und -einstellungen';
$strServerVersion = 'Server Version';
$strSessionValue = 'Wert für diese Sitzung';
$strSetEnumVal = 'Wenn das Feld vom Typ \'ENUM\' oder \'SET\' ist, benutzen Sie bitte das Format: \'a\',\'b\',\'c\',....<br />Wann immer Sie ein Backslash ("\") oder ein einfaches Anführungszeichen ("\'") verwenden,<br \>setzen Sie bitte ein Backslash vor das Zeichen.  (z.B.: \'\\\\xyz\' or \'a\\\'b\').';
$strShow = 'Zeige';
$strShowAll = 'Alles anzeigen';
$strShowColor = 'mehrfarbig';
$strShowCols = 'Reihen anzeigen';
$strShowDatadictAs = 'Format des Strukturverzeichnisses';
$strShowGrid = 'Gitterlinien anzeigen';
$strShowingRecords = 'Zeige Datensätze ';
$strShowPHPInfo = 'PHP-Informationen anzeigen';
$strShowTableDimension = 'Tabellendimensionen anzeigen.';
$strShowTables = 'Tabellen anzeigen';
$strShowThisQuery = 'SQL-Befehl hier wieder anzeigen';
$strSingly = '(einmalig)';
$strSize = 'Größe';
$strSort = 'Sortierung';
$strSpaceUsage = 'Speicherplatzverbrauch';
$strSplitWordsWithSpace = 'Die Wörter werden durch Leerzeichen (" ") getrennt.';
$strSQL = 'SQL';
$strSQLParserBugMessage = 'Möglicherweise haben Sie einen Bug im SQL-Parser entdeckt. Bitte überprüfen Sie Ihre Abfrage genaustens, insbesondere auf falsch gesetzte oder nicht geschlossene Anführungszeichen. Eine weitere Ursache könnte darin liegen, dass Sie versuchen eine Datei mit binären Daten, welche nicht von Anführungszeichen eingeschlossen sind, hochzuladen. Sie können alternativ versuchen Ihre Abfrage über das MySQL-Kommandozeileninterface zu senden. Die MySQL-Fehlerausgabe, falls vorhanden, kann Ihnen auch bei der Fehleranalyse helfen. Falls Sie weiterhin Probleme haben sollten oder der Parser dort versagt, wo die Kommandozeile erfolgreich ist, so reduzieren Sie bitte Ihre Abfrage auf den Befehl, welcher die Probleme verursacht, und senden Sie uns einen Bugreport mit den Datenausschnitt, den Sie weiter unten auf dieser Seite finden.:';
$strSQLParserUserError = 'Es scheint einen Fehler in Ihrer MySQL-Abfrage zu geben. Die MySQL-Fehlerausgabe, falls vorhanden, kann Ihnen auch bei der Fehleranalyse helfen.';
$strSQLQuery = 'SQL-Befehl';
$strSQLResult = 'SQL-Abfrageergebnis';
$strSQPBugInvalidIdentifer = 'Ungültiger Bezeichner';
$strSQPBugUnclosedQuote = 'Nicht geschlossene Anführungszeichen';
$strSQPBugUnknownPunctuation = 'Unbekannte Interpunktion';
$strStatement = 'Angaben';
$strStatus = 'Status';
$strStrucCSV = 'CSV-Daten';
$strStrucData = 'Struktur und Daten';
$strStrucDrop = 'Mit \'DROP TABLE\'';
$strStrucExcelCSV = 'CSV-Daten für MS Excel';
$strStrucOnly = 'Nur Struktur';
$strStructPropose = 'Tabellenstruktur analysieren';
$strStructure = 'Struktur';
$strSubmit = 'Abschicken';
$strSuccess = 'Ihr SQL-Befehl wurde erfolgreich ausgeführt.';
$strSum = 'Gesamt';

$strTable = 'Tabelle';
$strTableComments = 'Tabellen-Kommentar';
$strTableEmpty = 'Der Tabellenname ist leer!';
$strTableHasBeenDropped = 'Die Tabelle %s wurde gelöscht.';
$strTableHasBeenEmptied = 'Die Tabelle %s wurde geleert.';
$strTableHasBeenFlushed = 'Die Tabelle %s wurde geschlossen und zwischengespeicherte Daten gespeichert.';
$strTableMaintenance = 'Hilfsmittel';
$strTableOfContents = 'Inhalt';
$strTables = '%s Tabellen';
$strTableStructure = 'Tabellenstruktur für Tabelle';
$strTableType = 'Tabellentyp';
$strTextAreaLength = 'Wegen seiner Länge ist dieses<br />Feld vielleicht nicht editierbar.';
$strTheContent = 'Der Inhalt Ihrer Datei wurde eingefügt.';
$strTheContents = 'Der Inhalt der CSV-Datei ersetzt die Einträge mit den gleichen Primär- oder Unique-Schlüsseln.';
$strTheTerminator = 'Der Trenner zwischen den Feldern.';
$strThreadSuccessfullyKilled = 'Der Prozess %s wurde erfolgreich abgebrochen.';
$strTime = 'Dauer';
$strTotal = 'insgesamt';
$strTotalUC = 'Insgesamt';
$strTraffic = 'Traffic';
$strType = 'Typ';

$strUncheckAll = 'Auswahl entfernen';
$strUnique = 'Unique';
$strUnselectAll = 'Auswahl entfernen';
$strUpdatePrivMessage = 'Die Rechte für %s wurden geändert.';
$strUpdateProfile = 'Benutzer ändern:';
$strUpdateProfileMessage = 'Benutzer wurde geändert.';
$strUpdateQuery = 'Aktualisieren';
$strUsage = 'Verbrauch';
$strUseBackquotes = ' Tabellen- und Feldnamen in einfachen Anführungszeichen ';
$strUser = 'Benutzer';
$strUserEmpty = 'Kein Benutzername eingegeben!';
$strUserName = 'Benutzername';
$strUsers = 'Benutzer';
$strUseTables = 'Verwendete Tabellen';

$strValidateSQL = 'SQL validieren';
$strValidatorError = 'Bei der Initialisierung des SQL-Validators ist ein Fehler aufgetreten. Bitte überprüfen Sie, ob Sie die in der %sDokumentation%s beschriebenen php-Erweiterungen installiert haben.';
$strValue = 'Wert';
$strVar = 'Variable';
$strViewDump = 'Dump (Schema) der Tabelle anzeigen';
$strViewDumpDB = 'Dump (Schema) der Datenbank anzeigen';

$strWebServerUploadDirectory = 'Upload-Verzeichnis auf dem Webserver';
$strWebServerUploadDirectoryError = 'Auf das festgelegte Upload-Verzeichnis kann nicht zugegriffen werden.';
$strWelcome = 'Willkommen bei %s';
$strWithChecked = 'markierte:';
$strWrongUser = 'Falscher Benutzername/Kennwort. Zugriff verweigert.';

$strYes = 'Ja';

$strZip = 'Zip-komprimiert';

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
