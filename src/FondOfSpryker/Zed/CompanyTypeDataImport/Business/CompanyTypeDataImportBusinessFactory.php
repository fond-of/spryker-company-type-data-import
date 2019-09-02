<?php

namespace FondOfSpryker\Zed\CompanyTypeDataImport\Business;

use FondOfSpryker\Zed\CompanyTypeDataImport\Business\Model\CompanyTypeWriterStep;
use Spryker\Zed\DataImport\Business\DataImportBusinessFactory;
use Spryker\Zed\DataImport\Business\Model\DataImporterInterface;

/**
 * @method \FondOfSpryker\Zed\CompanyTypeDataImport\CompanyTypeDataImportConfig getConfig()
 */
class CompanyTypeDataImportBusinessFactory extends DataImportBusinessFactory
{
    /**
     * @return \Spryker\Zed\DataImport\Business\Model\DataImporterInterface
     */
    public function createCompanyTypeDataImport(): DataImporterInterface
    {
        $dataImporter = $this->getCsvDataImporterFromConfig(
            $this->getConfig()->getCompanyTypeDataImporterConfiguration()
        );

        $dataSetStepBroker = $this->createTransactionAwareDataSetStepBroker();
        $dataSetStepBroker->addStep(new CompanyTypeWriterStep());
        $dataImporter->addDataSetStepBroker($dataSetStepBroker);

        return $dataImporter;
    }
}
