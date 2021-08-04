Ifthenpay module for Magento 2
==============
![Ifthenpay](https://ifthenpay.com/images/all_payments_logo_final.png)

**This is the Ifthenpay module for Magento CMS**

**Multibanco** is one Portuguese payment method that allows the customer to pay by bank reference.
This module will allow you to generate a payment Reference that the customer can then use to pay for his order on the ATM or Home Banking service. This plugin uses one of the several gateways/services available in Portugal, IfthenPay.

**MBWAY** is the first inter-bank solution that enables purchases and immediate transfers via smartphones and tablets.

This module will allow you to generate a request payment to the customer mobile phone, and he can authorize the payment for his order on the MBWAY App service. This module uses one of the several gateways/services available in Portugal, IfthenPay.

**Payshop** is one Portuguese payment method that allows the customer to pay by payshop reference.
This module will allow you to generate a payment Reference that the customer can then use to pay for his order on the Payshop agent or CTT. This module uses one of the several gateways/services available in Portugal, IfthenPay.

**Credit Card** 
This module will allow you to generate a payment by Visa or Master card, that the customer can then use to pay for his order. This module uses one of the several gateways/services available in Portugal, IfthenPay.

**Contract with Ifthenpay is required.**

See more at [Ifthenpay](https://ifthenpay.com). 

How to install?
==============
*composer require ifthenpay/magento2
*php bin/magento setup:upgrade
*php bin/magento setup:di:compile
*php bin/magento cache:clean
