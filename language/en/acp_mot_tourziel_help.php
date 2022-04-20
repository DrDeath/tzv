<?php
/**
*
* @package phpBB Extension [Adressverwaltung - Tourziele]
* @copyright (c) 2014-2021 waldkatze - http://www.polarbiker-oberlausitz.de/mod_demo/
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
* @ acp language file [deutsch / Du]
*
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = [];
}

$lang = array_merge($lang, [
	// ACP TZV HILFE
	'ACP_MOT_TZV_INFO_TITLE'	=> 'Info Tourziele',
	'ACP_MOT_TZV_UPDATE'		=> '<strong>Vor Änderungen Einstellungen und Update grundsätzlich Datensicherung nicht vergessen !</strong>',
	'ACP_MOT_TZV_COPYRIGHT'		=> '&bull;&nbsp;copyright (c) 2014 - 2021 Author: <b>waldkatze</b> (Kein Support mehr) <br>
									<span style="color: transparent;">&bull;</span>&nbsp;copyright (c) 2022 Author: <b>Mike-on-Tour</b> (Kein Support per E-Mail oder PN) <br>',
	'ACP_MOT_TZV_SUPPORT'		=> '&bull;&nbsp;EXTENSION Demo / Download / Update <a href="https://www.mike-on-tour.com/" target="_blank">https://www.mike-on-tour.com/</a> <br><br>
									&bull;&nbsp;License <a href="http://opensource.org/licenses/gpl-license.php"> http://opensource.org/licenses/gpl-license.php</a> GNU Public License <br>',

	'ACP_MOT_TZV_HISTORY'		=> 'Tourziele History',
	'ACP_MOT_TZV_HUPDATE'		=> '&bull;&nbsp;2022 Version 0.2.0 <br>
									- Umfangreiche Anpassungen an Coding Guidelines<br>
									- Notwendige Anpassungen für PHP 8<br>
									- Umwandlung ACP Module in Controller<br>
									&bull;&nbsp;2021 Version 0.1.1 <br>
									- Es kann jetzt zwischen Kartenansicht Google-Maps oder Openstreetmap gewählt werden. Einstellung im ACP. <br>
									- Neue Funktion: GPS-Daten können mit einem Klick in Tourenplaner www.kuviger.de übertragen werden. <br>
									- Responsive Ansicht für Handy. <br>
									- Im ACP wird jetzt bei Eingabe automatisch geprüft ob Land / Region / Kategorie mit gleichen Namen vorhanden ist. <br>
									- Bug Flaggenanzeige im ACP beseitigt.<br>
									&bull;&nbsp;2021 Version 0.1.0 Extension für phpBB 3.3.x <br>
									&bull;&nbsp;2014 Erste Version als MOD für phpBB 3.0.x <br>',

	'ACP_MOT_TZV_HELP'			=> 'Tourziele Hinweise zu Einstellungen<br><br>',
	'ACP_MOT_TZV_HELPLINE'		=> '<b>Einstellung Berechtigung</b><br>
									Die Berechtigungen für die Benutzerrollen ´<strong>Volle Funktionalität</strong>´ und ´<strong>Standard-Funktionalität</strong>´
									werden bei Installation auf vollen Zugriff voreingestellt. Für alle anderen Rollen setze die Rechte nach Deinen Wünschen.<br>
									Die Moderator-Berechtigungen werden bei der Installation der Rolle ´<strong>Umfassender Moderator</strong>´ zugewiesen. Alle anderen
									Moderator-Rollen kannst du nach deinen Wünschen änpassen.<br><br>
									<b>Administrator-Modus</b><br>
									Wenn aktiviert, haben nur Admins Zugriff auf Tourziele. (für Testzwecke)<br><br>
									<b>Karte Einstellungen</b><br>
									Die Funktion ist auch komplett abschaltbar.<br>
									Auswahl zwischen Google-Maps oder Openstreetmap.<br>
									Größe und Zoom der Karten.<br><br>
									<b>Tourziele Supportlink anzeigen</b><br>
									Es wird Fragen von Deinen Usern zu Bedienung geben.<br>
									Richte am besten ein eigenes Support-Thema in Deinem Forum ein. Den Link dazu kannst du hier setzen (z.B. ´viewtopic.php?f=1&t=69´).<br><br>
									<b>Länder / Kategorie / Region / WLAN</b><br>
									Passe diese Einstellungen an Deine Wünsche an.<br>
									Die mitgelieferten Daten sind zum Testen gedacht, du kannst sie beliebig ändern und löschen (solange sie noch nicht für Tourziele verwendet wurden).<br>
									Beachte ausdrücklich den Hinweis im roten Feld der Einstellungen !  ',
]);