# Sputznik External Links Widget

A custom [SiteOrigin](https://siteorigin.com/) widget that displays a list of external links. Built to give editors an easy way to manage and display links using a flexible repeater field.

## Widget Name

**External Links List**

## Description

This widget allows you to create a list of external links with customizable styling options including link colors, list type, and optional list style images.

---

## Features

- Add multiple external links using a repeater field
- Choose between unordered (bullets) or ordered (numbers) list
- Customize link color and hover color
- Option to add a list-style image (custom bullet)
- Supports media library images for styling
- Control list padding for layout flexibility

---

## Installation

1. Place the widget PHP file inside your theme or plugin directory.
2. Ensure SiteOrigin Page Builder and SiteOrigin Widgets Bundle are installed and active.
3. The widget should auto-register via the `siteorigin_widget_register()` function.

---

## Widget Settings

| Setting          | Type     | Description                                           |
| ---------------- | -------- | ----------------------------------------------------- |
| External Links   | Repeater | Add link text and link URL pairs                      |
| Link Color       | Color    | Set the default color of the links                    |
| Hover Color      | Color    | Set the color when a link is hovered                  |
| List Type        | Select   | Choose between `<ul>` (bullets) and `<ol>` (numbers)  |
| List Style Image | Media    | Optional image for custom bullet (media library only) |
| List Padding     | Text     | Set CSS padding (e.g., `10px 20px`)                   |

> **Note**: External URL input and media search via external sources are disabled for stricter content control.

---

## Template Structure

- `templates/template.php`: Renders the front-end output of the widget.

---

## Author

**Suhail Bin Abdullah**  
[Sputznik](https://sputznik.com/)

---
