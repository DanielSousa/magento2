<?php
/**
* Ifthenpay_Payment module dependency
*
* @category    Gateway Payment
* @package     Ifthenpay_Payment
* @author      Ifthenpay
* @copyright   Ifthenpay (http://www.ifthenpay.com)
* @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
*/

declare(strict_types=1);

namespace Ifthenpay\Payment\Model\Ui;

use Magento\Checkout\Model\ConfigProviderInterface;
use Magento\Framework\View\Asset\Repository;


class IfthenpayCCardConfigProvider implements ConfigProviderInterface
{
    const CODE = 'ccard';

    private $assetRepository;

    public function __construct(
        Repository $assetRepository
    ) {
        $this->assetRepository = $assetRepository;
    }

    public function getConfig()
    {
        return [
            'payment' => [
                'ccard' => [
                    'logoUrl' => $this->assetRepository->getUrlWithParams('Ifthenpay_Payment::svg/ccard.svg', []),
                ],
            ]
        ];
    }
}