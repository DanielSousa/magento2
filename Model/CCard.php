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

namespace Ifthenpay\Payment\Model;

use Magento\Framework\Model\AbstractModel;

class CCard extends AbstractModel
{

	protected function _construct()
	{
		$this->_init('Ifthenpay\Payment\Model\ResourceModel\CCard');
	}
}