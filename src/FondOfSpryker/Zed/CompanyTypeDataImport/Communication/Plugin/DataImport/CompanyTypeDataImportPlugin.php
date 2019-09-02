<?php

namespace FondOfSpryker\Zed\CompanyTypeDataImport\Communication\Plugin\DataImport;

use FondOfSpryker\Zed\CompanyTypeDataImport\CompanyTypeDataImportConfig;
use Generated\Shared\Transfer\DataImporterConfigurationTransfer;
use Spryker\Zed\DataImport\Dependency\Plugin\DataImportPluginInterface;
use Spryker\Zed\Kernel\Communication\AbstractPlugin;

/**
 * @method \FondOfSpryker\Zed\CompanyTypeDataImport\CompanyTypeDataImportConfig getConfig()
 * @method \FondOfSpryker\Zed\CompanyTypeDataImport\Business\CompanyTypeDataImportFacadeInterface getFacade()
 */
class CompanyTypeDataImportPlugin extends AbstractPlugin implements DataImportPluginInterface
{
    /**
     * {@inheritdoc}
     *
     * @param \Generated\Shared\Transfer\DataImporterConfigurationTransfer|null $dataImporterConfigurationTransfer
     *
     * @return \Generated\Shared\Transfer\DataImporterReportTransfer
     */
    public function import(?DataImporterConfigurationTransfer $dataImporterConfigurationTransfer = null)
    {
        return $this->getFacade()->importCompanyRoles($dataImporterConfigurationTransfer);
    }

    /**
     * {@inheritdoc}
     *
     * @return string
     */
    public function getImportType()
    {
        return CompanyTypeDataImportConfig::IMPORT_TYPE_COMPANY_TYPE;
    }
}
