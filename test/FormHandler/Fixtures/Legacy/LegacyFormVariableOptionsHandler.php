<?php
/**
 * @copyright 2017 Hostnet B.V.
 */
namespace Hostnet\Component\FormHandler\Fixtures\Legacy;

use Hostnet\Component\Form\AbstractFormHandler;
use Hostnet\Component\Form\FormFailureHandlerInterface;
use Hostnet\Component\Form\FormSuccessHandlerInterface;
use Hostnet\Component\FormHandler\Fixtures\TestData;
use Hostnet\Component\FormHandler\Fixtures\TestType;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;

class LegacyFormVariableOptionsHandler extends AbstractFormHandler implements
    FormSuccessHandlerInterface,
    FormFailureHandlerInterface
{
    private $data;

    public function __construct()
    {
        $this->data = new TestData();
    }

    public function getOptions()
    {
        return ['attr' => ['class' => $this->data->test]];
    }

    public function getType()
    {
        return TestType::class;
    }

    public function getData()
    {
        return $this->data;
    }

    public function onSuccess(Request $request)
    {
        return new RedirectResponse('http://success.nl/' . $this->data->test);
    }

    public function onFailure(Request $request)
    {
        return new RedirectResponse('http://failure.nl/' . $this->data->test);
    }
}
