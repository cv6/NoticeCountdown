# [DD] Notice Countdown

![Version](https://img.shields.io/badge/version-1.0.3-blue.svg) ![XenForo](https://img.shields.io/badge/XenForo-2.3%2B-orange.svg)

*Diese Dokumentation in einer anderen Sprache lesen: [English](README.md)*

**[DD] Notice Countdown** erweitert das XenForo-Hinweissystem um eine dynamische Countdown-Funktion. Damit lassen sich zeitlich begrenzte Ereignisse, Deadlines oder geplante Wartungsarbeiten visuell ansprechend direkt in den globalen Hinweisen hervorheben.

---

## 🚀 Kern-Features im Detail

### ⏳ Dynamische Countdowns
* **Enddatum-Integration**: Fügt jedem XenForo-Hinweis (Notice) ein optionales Feld für ein Enddatum hinzu.
* **Verschiedene Anzeigeformate**: Wähle zwischen verschiedenen Layout-Typen für den Countdown:
    * **Badge**: Kompakte Anzeige im Badge-Stil.
    * **Plate**: Eine flache, moderne Anzeige.
    * **Big Plate**: Große, auffällige Darstellung für maximale Aufmerksamkeit.
    * **Custom**: Volle Freiheit für eigene Stylings.
* **Icon-Support**: Optionale Anzeige eines Icons neben dem Countdown für eine bessere visuelle Führung.

### 🎨 Design & Anpassung
* **Style-Property Integration**: Die globale Optik des Countdowns kann zentral über die Style-Properties gesteuert werden (`cv6CountdownCustom`).
* **Individuelle Styles**: Jedes Countdown-Format lässt sich per CSS feinjustieren, um perfekt mit dem restlichen Foren-Design zu harmonieren.
* **Automatisches Ausblenden**: Da der Countdown an das Enddatum des Hinweises gekoppelt ist, verschwindet er (je nach XF-Einstellung) automatisch, sobald die Zeit abgelaufen ist.

### 🛠 Technische Umsetzung
* **Entity-Erweiterung**: Das Add-on erweitert die `XF:Notice` Entität sicher über das `entity_structure` Event.
* **Admin-Komfort**: Nahtlose Integration in das Bearbeitungs-Formular der Hinweise im Administrationsbereich.

---

## ⚙️ Konfiguration

### Countdown erstellen
1. Navigiere zu **Kommunikation -> Hinweise**.
2. Erstelle einen neuen Hinweis oder bearbeite einen bestehenden.
3. Im Tab **Countdown** findest du alle neuen Optionen:
   * Enddatum festlegen.
   * Anzeige-Typ wählen.
   * Icon aktivieren/deaktivieren.

### Globales Styling
Unter **Styles -> Style-Einstellungen -> [DD] Notice Countdown** kannst du das Standard-Erscheinungsbild global anpassen.

---

## 📋 Voraussetzungen

* **XenForo**: 2.3.0 oder höher
* **Abhängigkeit**: [[DD] Core AddOn](https://forum.dice-dragons.de/) (v1.2.0+)

---

## 🛠 Installation

1. Lade den Inhalt des `upload`-Ordners hoch.
2. Installiere das Add-on via CLI:
   ```bash
   php cmd.php xf:addon-install cv6/NoticeCountdown
   ```

---

## 🔗 Links & Support

* **Entwickler**: [Hoffi](https://forum.dice-dragons.de/mitglieder/hoffi.1/)
* **Support**: [Dice Dragons Forum](https://forum.dice-dragons.de/forum/notice-countdown/)
* **Spenden**: [Amazon Wunschliste](https://www.amazon.de/hz/wishlist/ls/2XPAE7B75LB9T?ref_=wl_share)