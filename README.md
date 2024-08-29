# mwFormularSystem - MediaWiki Extension
## Description
The mwFormularSystem MediaWiki extension allows embedding forms from the Formular-System directly into MediaWiki pages. This extension integrates seamlessly, providing a user-friendly way to include dynamic forms within wiki content. It supports forms located in subdirectories of the Formular-System.

## Installation
### Requirements
- MediaWiki 1.35 or higher
- A running instance of the [Formular-System](https://github.com/marcwoge/Formular-System)

## Steps
1. Clone the repository to your mediawiki extensions folder or create a folder `mwFormularSystem` within the extensions folder of your mediawiki installation:
```
git clone https://github.com/marcwoge/mwFormularSystem.git extensions/mwFormularSystem
```
2. Configure the extension: Add the following lines to your LocalSettings.php:

```
wfLoadExtension('mwFormularSystem');
$wgFormularSystemURL = "https://yourserver.com/Formular-System";
$wgFormularSystemIgnoreSSLCertificate = true; // Set to true to ignore SSL certificate errors
```
3. Usage: To embed a form into a MediaWiki page, use the following syntax:
```
<formular-system form="FormularName"></formular-system>
```
Replace FormularName with the name of the form you want to embed. If the form is located in a subdirectory, specify the path relative to the forms directory in the Formular-System.

Example:

- If your form is located at `forms/demo/demo.php`, you would use:
```
<formular-system form="demo/demo"></formular-system>
```
This will embed the form located at `https://yourserver.com/Formular-System/index.php?page=demo/demo&nav=wiki`.
## Customization
- **Dynamic iFrame Resizing**: The extension includes a JavaScript file (formularSystem.js) that dynamically adjusts the height of the embedded iframe to match the content of the form. The iframe height is automatically increased by an additional 200px for better visibility.

- **SSL Certificate Handling**: The extension includes an option ($wgFormularSystemIgnoreSSLCertificate) to ignore SSL certificate errors, which is useful for development environments with self-signed certificates.

## License
The mwFormularSystem extension is licensed under the MIT License, which allows for free use, modification, and distribution of the software.

## Related Projects
Formular-System: The backend system used to manage and process forms, which integrates with this MediaWiki extension.
[Formular-System](https://github.com/marcwoge/Formular-System)

## Disclaimer
**Security Warning**: This extension is provided as-is, without any guarantees of security or reliability. It has not undergone extensive security testing and may contain vulnerabilities. If you plan to use this extension in a production environment, it is strongly recommended to conduct thorough security reviews and testing.

The developers of this extension are not responsible for any damages or security breaches that may occur as a result of using this software. Use it at your own risk.