# SilverStripe Foxy Integrations

Push your Foxy.io datafeed to additional URLs for processing. This allows your datafeed to be used by additional applications, such as OrderDesk.

## Requirements

* SilverStripe ^4.0
* SilverStripe Foxy ^1.0

## Installation

```
composer require dynamic/silverstripe-foxy-integrations
```

## License

See [License](license.md)

## Configuration

Apply `FoxyIntegrationsExtension` to `FoxyController`:

```yaml
Dynamic\Foxy\Parser\Controller\FoxyController:
  extensions:
    - Dynamic\Foxy\Integrations\Extension\FoxyIntegrationsExtension
```

Run a `dev/build`.

In the CMS, go to the Foxy admin. There will now be a tab for `Integrations`, where you can enter URLs for the Foxy datafeed XML to be pushed.

## Maintainers

*  [Dynamic](http://www.dynamicagency.com) (<dev@dynamicagency.com>)
 
## Bugtracker
Bugs are tracked in the issues section of this repository. Before submitting an issue please read over 
existing issues to ensure yours is unique. 
 
If the issue does look like a new bug:
 
 - Create a new issue
 - Describe the steps required to reproduce your issue, and the expected outcome. Unit tests, screenshots 
 and screencasts can help here.
 - Describe your environment as detailed as possible: SilverStripe version, Browser, PHP version, 
 Operating System, any installed SilverStripe modules.
 
Please report security issues to the module maintainers directly. Please don't file security issues in the bugtracker.
 
## Development and contribution
If you would like to make contributions to the module please ensure you raise a pull request and discuss with the module maintainers.
