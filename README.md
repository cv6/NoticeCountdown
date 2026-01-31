# [DD] Notice Countdown

![Version](https://img.shields.io/badge/version-1.0.3-blue.svg) ![XenForo](https://img.shields.io/badge/XenForo-2.3%2B-orange.svg)

*Read this in other languages: [Deutsch](README.de.md)*

**[DD] Notice Countdown** enhances the XenForo notice system with dynamic countdown functionality. This allows you to highlight time-sensitive events, deadlines, or scheduled maintenance directly within global notices.

---

## 🚀 Key Features in Detail

### ⏳ Dynamic Countdowns
* **End-Date Integration**: Adds an optional end-date field to every XenForo notice.
* **Multiple Display Formats**: Choose from various layout types to match your style:
    * **Badge**: Compact, badge-style indicator.
    * **Plate**: A flat, modern layout.
    * **Big Plate**: Large, prominent display for maximum visibility.
    * **Custom**: Total freedom for custom styling.
* **Icon Support**: Optionally display an icon next to the countdown for improved visual guidance.

### 🎨 Design & Customization
* **Style Property Control**: Manage the global look of the countdowns centrally via XenForo Style Properties (`cv6CountdownCustom`).
* **Per-Style Optimization**: Since settings are property-based, you can adapt the countdown's look for light and dark themes independently.
* **Zero CSS Knowledge Required**: Configure layouts and icons directly in the ACP.

### 🛠 Architecture
* **Safe Extensions**: Extends the `XF:Notice` entity using the standard `entity_structure` event for maximum compatibility.
* **Native Admin Integration**: The countdown options are seamlessly added to the existing notice creation and edit forms.

---

## ⚙️ Configuration

### Creating a Countdown
1. Go to **Communication -> Notices**.
2. Create or edit a notice.
3. Locate the **Countdown** tab to configure your end date and layout preferences.

### Global Styling
Navigate to **Styles -> Style Properties -> [DD] Notice Countdown** to adjust the default appearance.

---

## 📋 Requirements

* **XenForo**: 2.3.0 or higher
* **Dependency**: [[DD] Core AddOn](https://forum.dice-dragons.de/) (v1.2.0+)

---

## 🔗 Links & Support

* **Developer**: [Hoffi](https://forum.dice-dragons.de/mitglieder/hoffi.1/)
* **Support**: [Dice Dragons Forum](https://forum.dice-dragons.de/forum/notice-countdown/)