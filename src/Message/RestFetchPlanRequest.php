<?php
/**
 * PayPal REST Fetch Plan Detail Request
 */
namespace Omnipay\PayPal\Message;
/**
 * PayPal REST Fetch Plan Request
 *
 * Get details about PayPal plans
 *
 *
 * @link https://developer.paypal.com/docs/api/payments.billing-plans/#billing-plans_get
 */
class RestFetchPlanRequest extends AbstractRestRequest
{
    /**
     *
     * Get the plan ID
     *
     * @return string
     */
    public function getId()
    {
        return $this->getParameter('id');
    }
		
    /**
     * Set the plan ID
     *
     * @param string $value
     * @return RestFetchPlanRequest provides a fluent interface.
     */
    public function setId($value)
    {
        return $this->setParameter('id', $value);
    }
		
    public function getData()
    {
        $this->validate('id');
        $data = array();
        
				return $data;
    }
		
    /**
     * Get HTTP Method.
     *
     * The HTTP method for list plans requests must be GET.
     *
     * @return string
     */
    protected function getHttpMethod()
    {
        return 'GET';
    }
		
    public function getEndpoint()
    {
        return parent::getEndpoint() . '/payments/billing-plans/' . $this->getId();
    }
}