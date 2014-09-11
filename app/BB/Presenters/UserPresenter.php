<?php namespace BB\Presenters;

use Laracasts\Presenter\Presenter;

class UserPresenter extends Presenter
{

    public function paymentMethod()
    {
        switch ($this->entity->payment_method) {
            case 'gocardless':
                return 'Direct Debit';
                break;

            case 'paypal':
                return 'PayPal';
                break;

            case 'standing-order':
                return 'Standing Order';
                break;
        }
        return $this->entity->payment_method;
    }
} 