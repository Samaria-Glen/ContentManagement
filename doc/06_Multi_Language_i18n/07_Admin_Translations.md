# Admin Translations 

There are several components in the Pimcore backend UI which are configured differently for each project. These are

* object class names
* object field labels
* object layout components
* document types
* predefined properties
* custom views
* document editables

All these elements (except document editables) can be translated in *Settings* > *Admin Translations* similar to the
Shared Translations. All installed system languages are available for translation. It's even possible to override
the system translations shipped with Pimcore, so basically you can translate anything within the backend UI. 

Strings which are subject to special translations, but have not been translated yet, are displayed with a "+" in front 
and after the string, if `Debug Admin-Translations (wrapped in +)` is activated in system settings (*Settings* > *System Settings*).

But you can use the admin translation also in your custom templates. 
Admin translations use the same translator component (Symfony) but on a different domain.

Admin translations underlay the same case sensitivity logic as [shared translations](./04_Shared_Translations.md#translations-case-sensitivity).

#### Example: Translate Options of a Select Editable in the language of the current user

```twig
{{ pimcore_select("select", {
	"store": [
		["option1", {{ "Option One"|trans({}, 'admin', pimcore_editmode_admin_language()) }}],
		["option2", {{ "Option Two"|trans({}, 'admin', pimcore_editmode_admin_language()) }}],
		["option3", {{ "Option Three"|trans({}, 'admin', pimcore_editmode_admin_language()) }}]
	]
}) }}
```

#### Adding your own admin languages (since v6.3.6)
Pimcore comes with a set of translations which are managed by [POEditor](https://poeditor.com).
There is a list of [essential translations](https://poeditor.com/join/project/VWmZyvFVMH) and another [extended translations](https://poeditor.com/join/project/XliCYYgILb) list.
However, the amount of available languages is limited, because only languages with certain translation progress are
included in the main distribution. 
If you want to make additional languages available for the admin interface, you can do so by putting a symfony translation
file for the desired language into the default path for the symfony translator 
(e.g. use `translations/admin.af.yaml` for making `Afrikaans` available, the translation file can be also empty). 
If you haven't configured anything different this is `%kernel.project_dir%/translations` for Symfony 4 projects.

#### Override language of admin translations in editmode of documents
In some projects you want to use a different language as admin translations, e.g. English (en) instead of Croatian (hr) or Chinese (zh_Hans) instead of Chinese (zh).

```yaml
# config/config.yaml
pimcore:
    translations:
        admin_translation_mapping:
            'hr': 'en'
            'zh': 'zh_Hans'
```
