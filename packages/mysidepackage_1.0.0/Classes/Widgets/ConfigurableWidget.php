<?php

use TYPO3\CMS\Core\Settings\SettingDefinition;
use TYPO3\CMS\Dashboard\Widgets\WidgetContext;
use TYPO3\CMS\Dashboard\Widgets\WidgetRendererInterface;
use TYPO3\CMS\Dashboard\Widgets\WidgetResult;

class ConfigurableWidget implements WidgetRendererInterface
{
    public function getSettingsDefinitions(): array
    {
        return [
            new SettingDefinition(
                key: 'title',
                type: 'string',
                default: 'Default Title',
                label: 'my_extension.my_widget:settings.label',
                description: 'my_extension.my_widget:settings.description.label',
            ),
            new SettingDefinition(
                key: 'limit',
                type: 'int',
                default: 10,
                label: 'my_extension.my_widget:settings.limit',
                description: 'my_extension.my_widget:settings.description.limit',
            ),
        ];
    }

    public function renderWidget(WidgetContext $context): WidgetResult
    {
        $settings = $context->settings;
        $title = $settings->get('title');
        $limit = $settings->get('limit');

        // Use settings to customize widget output
        return new WidgetResult(
            label: $title,
            content: '<!-- widget content -->',
            refreshable: true
        );
    }
}