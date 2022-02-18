<?php

/**
 * MIT License
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Spryker\Zed\CompanyRoleDataImport;

use Generated\Shared\Transfer\DataImporterConfigurationTransfer;
use Spryker\Zed\DataImport\DataImportConfig;

class CompanyRoleDataImportConfig extends DataImportConfig
{
    /**
     * @var string
     */
    public const IMPORT_TYPE_COMPANY_ROLE = 'company-role';

    /**
     * @var string
     */
    public const IMPORT_TYPE_COMPANY_ROLE_PERMISSION = 'company-role-permission';

    /**
     * @var string
     */
    public const IMPORT_TYPE_COMPANY_USER_ROLE = 'company-user-role';

    /**
     * @api
     *
     * @return \Generated\Shared\Transfer\DataImporterConfigurationTransfer
     */
    public function getCompanyRoleDataImporterConfiguration(): DataImporterConfigurationTransfer
    {
        return $this->buildImporterConfiguration(
            implode(DIRECTORY_SEPARATOR, [$this->getModuleDataImportDirectory(), 'company_role.csv']),
            static::IMPORT_TYPE_COMPANY_ROLE,
        );
    }

    /**
     * @api
     *
     * @return \Generated\Shared\Transfer\DataImporterConfigurationTransfer
     */
    public function getCompanyRolePermissionDataImporterConfiguration(): DataImporterConfigurationTransfer
    {
        return $this->buildImporterConfiguration(
            implode(DIRECTORY_SEPARATOR, [$this->getModuleDataImportDirectory(), 'company_role_permission.csv']),
            static::IMPORT_TYPE_COMPANY_ROLE_PERMISSION,
        );
    }

    /**
     * @api
     *
     * @return \Generated\Shared\Transfer\DataImporterConfigurationTransfer
     */
    public function getCompanyUserRoleDataImporterConfiguration(): DataImporterConfigurationTransfer
    {
        return $this->buildImporterConfiguration(
            implode(DIRECTORY_SEPARATOR, [$this->getModuleDataImportDirectory(), 'company_user_role.csv']),
            static::IMPORT_TYPE_COMPANY_USER_ROLE,
        );
    }

    /**
     * @return string
     */
    protected function getModuleDataImportDirectory(): string
    {
        return implode(DIRECTORY_SEPARATOR, [
            $this->getModuleRoot(),
            'data',
            'import',
        ]) . DIRECTORY_SEPARATOR;
    }

    /**
     * @return string
     */
    protected function getModuleRoot(): string
    {
        /** @phpstan-var string */
        return realpath(implode(DIRECTORY_SEPARATOR, [
            __DIR__,
            '..',
            '..',
            '..',
            '..',
        ]));
    }
}
