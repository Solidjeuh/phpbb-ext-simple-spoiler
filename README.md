### Information

Simple Spoiler Extension for phpBB 3.2.x

### Dependencies

- `php` v5.6 or greater
- `phpBB` v3.2 or greater
- `jQuery`v1.11.0 or greater
- A modern web browser with decent CSS3 support

### Installation

- Download the [latest release](https://github.com/AlfredoRamos/phpbb-ext-simple-spoiler/releases)
- Decompress the `*.zip` or `*.tar.gz` file
- Copy the files and directories inside `<PHPBB_ROOT>/ext/alfredoramos/simplespoiler/`
- Go to your `Administration Control Panel` > `Customize` > `Manage extensions`
- Click on `Enable` and confirm.

### Usage

Write `[spoiler]text[/spoiler]` or `[spoiler=title]text[/spoiler]` and it will hide the content on anywhere that you can render BBCodes.

You can nest `[spoiler]` and write unicode titles in `[spoiler=title]`.

**Example:**

```
[spoiler=Nested spoilers]
First level
[spoiler=«µǹï¢øð€»]Second level
[spoiler]Third level[/spoiler][/spoiler][/spoiler]
```

**Preview:**

[![Preview](https://i.imgur.com/NPzw8nkm.png)](https://i.imgur.com/NPzw8nk.png)
*(Click to view in full size)*

### Configuration

To add support for more styles simply copy the content of the `styles/prosilver/theme/` directory to `styles/<NEW_STYLE>/theme/`.

To customize the look and colors, edit the following files:

- `styles/<STYLE>/theme/css/style.css`
- `styles/<STYLE>/theme/css/colors.css`

Note: By default it's hidden from the posting box, if you want to show it follow these steps:

- Go to your `Administration Control Panel` > `Posting` > `BBCodes`
- Click on the `Edit` button (green gear)
- Go to `Settings` and check the option `Display on posting`
- Click on `Submit`

### Uninstallation

- Go to your `Administration Control Panel` > `Customize` > `Manage extensions`
- Click on `Disable` and confirm.
- Go back to `Manage extensions` and click `Delete data` and confirm.
