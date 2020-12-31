<?php


declare(strict_types=1);

namespace Yii\Extension\Service;

use Composer\InstalledVersions;
use Yiisoft\Session\Flash\Flash;

final class ServiceFlashMessage
{
    private Flash $flash;

    public function __construct(Flash $flash)
    {
        $this->flash = $flash;
    }

    public function run(
        string $type,
        string $header = null,
        string $body = '',
        bool $closeButton = true,
        array $options = []
    ): void {
        if (InstalledVersions::isInstalled('yii-extension/flash-message-bulma')) {
            $this->flash->add(
                $type,
                [
                    'header' => $header,
                    'body' => $body,
                ]
            );
        }

        if (InstalledVersions::isInstalled('yii-extension/alert-message-bootstrap5')) {
            $this->flash->add(
                $type,
                [
                    'body' => $header !== null ? "<h4 class=\"alert-heading\">{$header}</h4>{$body}" : $body,
                    'closeButton' => $closeButton,
                    'options' => $options,
                ]
            );
        }
    }
}
