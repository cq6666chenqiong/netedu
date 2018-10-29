<?php
/**
 * Created by PhpStorm.
 * User: chenqiong
 * Date: 2017/6/8
 * Time: 14:07
 */

namespace Topxia\WebBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class SorceType  extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name', 'text', array('required' => false));
        $builder->add('xuefen', 'text', array('required' => false));
        $builder->add('ispass', 'text', array('required' => false));
    }

    public function getName()
    {
        return 'sorce';
    }
}