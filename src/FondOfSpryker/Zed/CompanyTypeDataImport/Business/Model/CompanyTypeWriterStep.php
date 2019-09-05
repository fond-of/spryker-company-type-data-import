<?php

namespace FondOfSpryker\Zed\CompanyTypeDataImport\Business\Model;

use Orm\Zed\CompanyType\Persistence\FosCompanyTypeQuery;
use Spryker\Zed\DataImport\Business\Model\DataImportStep\DataImportStepInterface;
use Spryker\Zed\DataImport\Business\Model\DataSet\DataSetInterface;

class CompanyTypeWriterStep implements DataImportStepInterface
{
    /**
     * @param \Spryker\Zed\DataImport\Business\Model\DataSet\DataSetInterface $dataSet
     *
     * @throws
     *
     * @return void
     */
    public function execute(DataSetInterface $dataSet): void
    {
        $fosCompanyType = FosCompanyTypeQuery::create()
            ->filterByKey($dataSet[CompanyTypeDataSetInterface::COLUMN_KEY])
            ->findOneOrCreate();

        $fosCompanyType->fromArray($dataSet->getArrayCopy());

        if ($fosCompanyType->isNew() || $fosCompanyType->isModified()) {
            $fosCompanyType->save();
        }
    }
}
