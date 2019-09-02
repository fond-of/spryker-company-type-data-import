<?php

namespace FondOfSpryker\Zed\CompanyTypeDataImport;

use Codeception\Test\Unit;
use Generated\Shared\Transfer\DataImporterConfigurationTransfer;

class CompanyTypeDataImportConfigTest extends Unit
{
    /**
     * @var \FondOfSpryker\Zed\CompanyTypeDataImport\CompanyTypeDataImportConfig
     */
    protected $companyTypeDataImportConfig;

    /**
     * @return void
     */
    protected function _before(): void
    {
        parent::_before();

        $this->companyTypeDataImportConfig = new CompanyTypeDataImportConfig();
    }

    /**
     * @return void
     */
    public function testGetCompanyTypeDataImporterConfiguration(): void
    {
        $dataImporterConfigurationTransfer = $this->companyTypeDataImportConfig
            ->getCompanyTypeDataImporterConfiguration();

        $this->assertInstanceOf(
            $dataImporterConfigurationTransfer,
            DataImporterConfigurationTransfer::class
        );
    }
}
