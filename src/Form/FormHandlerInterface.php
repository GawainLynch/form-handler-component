<?php
/**
 * @copyright 2017 Hostnet B.V.
 */
namespace Hostnet\Component\Form;

use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormTypeInterface;

/**
 * @author Iltar van der Berg <ivanderberg@hostnet.nl>
 * @author Yannick de Lange <ydelange@hostnet.nl>
 */
interface FormHandlerInterface
{
    /**
     * @return string|FormTypeInterface
     */
    public function getType();

    /**
     * @return mixed
     */
    public function getData();

    /**
     * @return array
     */
    public function getOptions();

    /**
     * @return FormInterface
     */
    public function getForm();

    /**
     * @param FormInterface $form
     */
    public function setForm(FormInterface $form);
}
