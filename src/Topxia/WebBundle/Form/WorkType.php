<?php
/**
 * Created by PhpStorm.
 * User: chenqiong
 * Date: 2017/6/12
 * Time: 15:29
 */

namespace Topxia\WebBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class WorkType  extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('id', 'text', array('required' => false));
        $builder->add('userId', 'text', array('required' => false));
        $builder->add('gc', 'text', array('required' => false));
        $builder->add('gentai', 'text', array('required' => false));
        $builder->add('yeban', 'text', array('required' => false));
        $builder->add('xshd', 'text', array('required' => false));
        $builder->add('other', 'text', array('required' => false));
        $builder->add('volume', 'text', array('required' => false));
        $builder->add('filepath', 'text', array('required' => false));
        $builder->add('hnum', 'text', array('required' => false));
        $builder->add('remark', 'text', array('required' => false));
    }

    public function getName()
    {
        return 'work';
    }
}