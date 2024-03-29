# Auto Loading Config and Routing Definitions

By default, Symfony does not load configuration and/or routing definitions from bundles but expects you to define everything
in `config/` (optionally importing config files from bundles or other locations). Pimcore extends the config loading
by trying to automatically load `config.yaml` and `routing.yaml` (`php`, and `xml` types are also supported) from every active
bundle if they are defined in the directory `config/pimcore`. By making use of this auto-loading mechanism,
you can provide routing and config from within your bundle.

When loading the configuration, Pimcore will first try to load an environment specific config file (e.g. `config_dev.yaml`)
from each bundle and fall back to `config.yaml` if no environment specific file is found. If multiple files with different
extensions exist, all of them will be loaded.

For example, if a bundle defines a `config_dev.yaml` *AND* a `config_dev.php` both of them will be loaded, but there will be
no attempt to load a `config.yaml` without the environment. 

From the `Pimcore\Config\BundleConfigLocator`:

```php
/**
 * Locates configs from bundles if Resources/config/pimcore exists.
 *
 * Will first try to locate <name>_<environment>.<suffix> and fall back to <name>.<suffix> if the
 * environment specific lookup didn't find anything. All known suffixes are searched, so e.g. if a config.yaml
 * and a config.php exist, both will be used.
 *
 * Example: lookup for config will try to locate the following files from every bundle (will return all files it finds):
 *
 *  - Resources/config/pimcore/config_dev.php
 *  - Resources/config/pimcore/config_dev.yaml
 *  - Resources/config/pimcore/config_dev.xml
 *
 * If the previous lookup didn't return any results, it will fall back to:
 *
 *  - Resources/config/pimcore/config.php
 *  - Resources/config/pimcore/config.yaml
 *  - Resources/config/pimcore/config.xml
 */
class BundleConfigLocator {}
```
