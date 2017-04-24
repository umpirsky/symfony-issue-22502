<?php

namespace Foo;

require_once __DIR__.'/vendor/autoload.php';

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormConfigBuilder;
use Symfony\Component\Form\FormBuilderInterface;

class ReproducerType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
    }

    public function getBlockPrefix()
    {
        return 'bar';
    }
}

FormConfigBuilder::validateName((new ReproducerType())->getName());
