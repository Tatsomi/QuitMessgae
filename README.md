# QuitMessage

A simple yet powerful PocketMine-MP plugin that allows server owners to customize the quit message of players through `config.yml`.

## ✨ Features

- Fully customizable quit message.
- Placeholder support: `{player}` will be replaced with the quiting player's name.
- Lightweight and performance-friendly.

## 🛠 Configuration

After installing and enabling the plugin, a `config.yml` file will be generated in the plugin folder.  
You can edit it to customize the quit message.

### Example `config.yml`:

```yaml
# {player} is player name
QuitMessage: "§g{player} Joined!"
```

### Color Codes

Use Minecraft color codes using the `§` symbol.  
Example: 
 §0 → Black  
`§1` → `Dark Blue`
`§2` → `Dark Green`
`§3` → `Dark Aqua`
`§4` → `Dark Red`
`§5` → `Dark Purple`
`§6` → `Gold`
`§7` → `Gray`
`§8` → `Dark Gray`
`§9` → `Blue`
`§a` → `Green`
`§b` → `Aqua`
`§c` → `Red`
`§d` → `Light Purple`
`§e` → `Yellow`
`§f` → `White`


## 📦 Installation

1. Download the `.phar` file or build it from source.
2. Place the plugin into your `plugins/` folder.
3. Restart your server.

## 📄 License

This plugin is open-source and free to use under the MIT License.

---
