# Date Editable

### Configuration

| Name     | Type   | Description                                                                        |
|----------|--------|------------------------------------------------------------------------------------|
| `format` | string | A string which describes how to format the date in editmode, [see possible formats](https://docs.sencha.com/extjs/7.0.0/modern/Ext.Date.html)                       |
| `outputFormat` | string | A string which describes how to format the date in frontend, [see possible formats](https://www.php.net/manual/en/function.strftime.php#refsect1-function.strftime-parameters)                 |
| `class`  | string | A CSS class that is added to the surrounding container of this element in editmode |

## Methods

| Name          | Return    | Description                                                            |
|---------------|-----------|------------------------------------------------------------------------|
| `isEmpty()`   | boolean   | Whether the editable is empty or not                                   |


## Simple Example

The following code will create a simple date widget in editmode. 
In frontend it will format the date as defined in `format`.

Localization (output-format, ...) is automatically used from the globally registered locale.
Please read the topic [Localization](../../06_Multi_Language_i18n/README.md).

```twig
{{ pimcore_date('myDate', {
    'format': 'd.m.Y',
    'outputFormat': '%d.%m.%Y'
    })
}}
```
