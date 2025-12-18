# Block Style Modifier Pack

A curated collection of ready-to-use style modifiers for the WordPress Block Editor.

## Description

This plugin provides a comprehensive library of pre-built style modifiers that work seamlessly with the **Block Style Modifiers** plugin. It offers commonly needed visual adjustments and utilities that can be combined freely across your blocks.

**Note:** This plugin requires the [Block Style Modifiers](https://github.com/Arkenon/block-style-modifiers) plugin to function.

## What's Included?

This pack includes experimental style modifiers (such as hover effects, shadows, gradients etc.) for **Block Style Modifiers** plugin.

## Installation

1. Install and activate the **Block Style Modifiers** plugin (required dependency)
2. Upload the `block-style-modifier-pack` folder to `/wp-content/plugins/`
3. Activate the plugin through the 'Plugins' menu in WordPress
4. Style modifiers will now be available in the Block Editor sidebar for related core blocks.

## Usage

After activation, open any block in the WordPress Block Editor. In the block sidebar, you'll find a "Style Modifiers" panel with available options for that block type.

Simply check the modifiers you want to apply. Multiple modifiers can be selected and combined freely.

### Example Use Cases

**Selecting image hover effects:**
1. Upload an image on block editor
2. Select hover effects from Style Modifiers list

**Responsive visibility:**
1. Select any block
2. Enable "Hide on mobile" to show only on larger screens

## Customization

All modifiers generate standard CSS classes. You can override or extend any styling in your theme's CSS:

```css
/* Customize or override the style of blocks */
.wp-block-image.bsmp-zoom-on-hover img, .wp-block-cover.bsmp-zoom-on-hover img {
    transition: transform 0.3s ease;
}

.wp-block-image.bsmp-zoom-on-hover:hover img, .wp-block-cover.bsmp-zoom-on-hover:hover img {
    transform: scale(1.05);
}
```

## Compatibility

- WordPress 6.5 or higher
- PHP 7.4 or higher
- Requires Block Style Modifiers plugin

## Performance

All modifier styles are loaded efficiently as inline CSS only when needed. No additional HTTP requests are made.

## Contributing

Have ideas for additional modifiers? Found a bug? Contributions are welcome!

- Fork the repository
- Create your feature branch (`git checkout -b feature/my-feature`)
- Commit your changes (`git commit -am 'Add some feature'`)
- Push to the branch (`git push origin feature/my-feature`)
- Open a pull request
- Please ensure any pull requests adhere to the existing coding style and include appropriate tests where applicable.
- For major changes, please open an issue first to discuss what you would like to change.
- Please make sure to update tests as appropriate.
- 
## License

This project is licensed under the GPLv2 or later license. See the LICENSE file for details

