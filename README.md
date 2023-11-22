# Project Setup

## Setup Guide

1. Download the required files from [Release](https://github.com/UnityRealms-Gaming/realmstatus-wow/releases/tag/Release).
2. Modify the database connection and server name in the `config.php` file.
3. Upload the files to your web root directory.
4. Done.

## Requirements

1. PHP Version: 7.5 - 8.2
2. MySQL Database
3. PDO Extension

## PHP Code Explanation

1. **`config.php` File:**
   - This file contains configuration information for the database connection and server name. It's crucial to adjust these values according to your server settings.

2. **Database Connection (`$pdo`):**
   - The PHP code uses PDO (PHP Data Objects) for the database connection, providing a more secure and flexible way to access databases. The connection details (host, user, password, database) are set in the `config.php` file.

3. **Fetching Data from the Database:**
   - Using PDO, a prepared statement is used to retrieve data from the `realmlist` database table. The results are then looped through to display server information.

4. **Checking Port Status:**
   - The `checkPortStatus` function uses `fsockopen` to check if a server port is online. The results are used to display whether a server is online or offline.

The README explains the necessary steps for setting up the project and provides basic requirements for the environment. Note that specific adjustments should be made to fit individual server configurations and requirements.

---

# Projekt einrichten

## Einrichtungsanleitung

1. Lade die benötigten Dateien von [Release](https://github.com/UnityRealms-Gaming/realmstatus-wow/releases/tag/Release) herunter.
2. Passe die Datenbankverbindung und den Servernamen in der `config.php`-Datei an.
3. Lade die Dateien in dein Web-Root-Verzeichnis hoch.
4. Fertig.

## Voraussetzungen

1. PHP-Version: 7.5 - 8.2
2. MySQL-Datenbank
3. PDO-Erweiterung

## Erklärung des PHP-Codes

1. **`config.php`-Datei:**
   - Diese Datei enthält Konfigurationsinformationen für die Datenbankverbindung und den Servernamen. Es ist wichtig, diese Werte entsprechend den eigenen Servereinstellungen anzupassen.

2. **Datenbankverbindung (`$pdo`):**
   - Der PHP-Code verwendet PDO (PHP Data Objects) für die Datenbankverbindung, was eine sicherere und flexiblere Möglichkeit bietet, auf Datenbanken zuzugreifen. Die Verbindungsinformationen (Host, Benutzer, Passwort, Datenbank) werden in der `config.php`-Datei festgelegt.

3. **Daten aus der Datenbank abrufen:**
   - Mit PDO wird eine vorbereitete Anweisung verwendet, um Daten aus der Datenbanktabelle `realmlist` abzurufen. Die Ergebnisse werden dann in einer Schleife durchgegangen, um Serverinformationen anzuzeigen.

4. **Portstatus überprüfen:**
   - Die Funktion `checkPortStatus` verwendet `fsockopen`, um zu überprüfen, ob ein Serverport online ist. Die Ergebnisse werden verwendet, um anzuzeigen, ob ein Server online oder offline ist.

Die README erklärt die notwendigen Schritte für die Einrichtung des Projekts und gibt grundlegende Anforderungen an die Umgebung. Beachte, dass spezifische Anpassungen an die individuelle Serverkonfiguration und Anforderungen vorgenommen werden sollten.
