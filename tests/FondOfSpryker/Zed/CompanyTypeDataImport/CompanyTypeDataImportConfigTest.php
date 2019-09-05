<?php

namespace FondOfSpryker\Zed\CompanyTypeDataImport;

use Codeception\Test\Unit;

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

        $this->assertEquals(
            CompanyTypeDataImportConfig::IMPORT_TYPE_COMPANY_TYPE,
            $dataImporterConfigurationTransfer->getImportType()
        );

        $this->assertNotNull(
            $dataImporterConfigurationTransfer->getReaderConfiguration()
        );

        $this->assertEquals(
            codecept_root_dir('data/import/company_type.csv'),
            $dataImporterConfigurationTransfer->getReaderConfiguration()->getFileName()
        );
    }
}
