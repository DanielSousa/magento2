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

namespace Ifthenpay\Payment\Lib\Forms;

use Ifthenpay\Payment\Lib\Forms\ConfigForm;

class MultibancoConfigForm extends ConfigForm
{
    protected $paymentMethod = 'multibanco';

    protected function checkConfigValues($useEntidade = true): void
    {
        if (!empty($this->configData)) {
            if ($useEntidade) {
                unset($this->options['Choose Account']);
                $this->options[$this->configData['entidade']] = $this->configData['entidade'];
            } else {
                unset($this->options['Choose Account']);
                $this->options[$this->configData['subEntidade']] = $this->configData['subEntidade'];
            }
        } else {
            $this->options;
        }
    }

    public function displayCallbackInfo(): bool
    {
        return isset($this->configData['entidade']) && isset($this->configData['subEntidade']);
    }

    public function setGatewayBuilderData(): void
    {
        parent::setGatewayBuilderData();
        $this->gatewayDataBuilder->setEntidade($this->configData['entidade']);
        $this->gatewayDataBuilder->setSubEntidade($this->configData['subEntidade']);
    }
}
