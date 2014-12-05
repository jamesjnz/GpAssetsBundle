<?php
/**
 * Developer: James Jin
 * Date: 11/09/14
 * Time: 1:21 AM
 * Year: 2014
 */

namespace GreenPower\AssetBundle\Form\Type;


use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;


class AngularJsType extends AbstractTypeExtension{

    public function buildForm(FormBuilderInterface $builder, array $options){
        $builder->setAttribute('base_path', $options['base_path']);
    }

    public function buildView(FormView $view, FormInterface $form, array $options){
        $view->vars['base_path'] = $options['base_path'];
    }


    public function setDefaultOptions(OptionsResolverInterface $resolver){
        $resolver->setDefaults(array(
            'base_path'         => '',
        ));
    }

    public function getName()
    {
        return 'extension_form';
    }

    public function getExtendedType()
    {
        return 'field';
    }

} 