# Maintenance Mode

Pimcore offers a maintenance mode, which restricts access to the admin user interface to the user that enabled the maintenance mode. It is session based 
and no other user will be able to access the website or the admin interface. 

All other users get a [default "Temporary not available" page](https://github.com/pimcore/pimcore/blob/11.x/bundles/CoreBundle/public/misc/maintenance.html)
displayed. 

Moreover, maintenance scripts and headless executions of Pimcore will be prevented.
In addition, you can enable or disable the maintenance mode via the following console command:

```shell script
bin/console pimcore:maintenance-mode --enable
bin/console pimcore:maintenance-mode --disable
``` 

## Customize Maintenance Page

Overwrite the service `Pimcore\Bundle\CoreBundle\EventListener\MaintenancePageListener` in your `config/services.yaml`. 

```yaml
Pimcore\Bundle\CoreBundle\EventListener\MaintenancePageListener:
    calls:
        - [loadTemplateFromResource, ['@@App/Resources/misc/maintenance.html']]
    tags:
        - { name: kernel.event_listener, event: kernel.request, method: onKernelRequest, priority: 620 }
```

Use loadTemplateFromPath if the file is located outside a bundle.

```yaml
Pimcore\Bundle\CoreBundle\EventListener\MaintenancePageListener:
    calls:
        - [loadTemplateFromPath, ['/templates/maintenance.html']]
    tags:
        - { name: kernel.event_listener, event: kernel.request, method: onKernelRequest, priority: 620 }
```
